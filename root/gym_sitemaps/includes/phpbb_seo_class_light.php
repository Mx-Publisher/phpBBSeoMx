<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $id: phpbb_seo_class_light.php - 6685 12-17-2008 16:27:59 - 2.0.RC3 dcz $
* @copyright (c) 2006 - 2008 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
// First basic security
if ( !defined('IN_PHPBB') ) {
	exit;
}
/**
* phpBB_SEO Class lite
* For Compatibility with the phpBB SEO mod rewrites
* www.phpBB-SEO.com
* @package phpBB SEO
*/
// 

class phpbb_seo {
	var	$seo_url = array();
	var	$seo_delim = array();
	var	$seo_path = array();
	var	$seo_opt = array();
	var	$seo_cache = array();
	var	$seo_ext = array();
	var	$seo_static = array();
	var	$modrtype = -1;
	/**
	* constuctor
	*/
	function phpbb_seo() {
		global $config, $phpEx;
		$this->seo_cache = array();
		$this->seo_censored = array();
		$this->start = $this->path = '';
		// URL Settings
		// The arrays where the preformated titles are stored.
		$this->seo_url = array( 'forum' =>  array(), 'topic' =>  array(), 'user' => array(),  'usermsg' => array(), 'username' => array(), 'group' => array() );
		// Delimiters : used as separators in the .htaccess RegEx
		// can be edited, requires .htaccess update.
		$this->seo_delim = array( 'forum' => '-f', 'topic' => '-t', 'user' => '-u', 'usermsg' => '-m', 'group' => '-g', 'start' => '-');
		// Default : Used as URL when format_url would return nothing or with simple URLs
		// can be edited, requires .htaccess update.
		$this->seo_static = array( 'forum' => 'forum', 'topic' => 'topic', 'post' => 'post', 'user' => 'member', 'group' => 'group', 'index' => '', 'global_announce' => 'announces', 'leaders' => 'the-team', 'usermsg' => 'messages', 'pagination' => 'page', 'gz_ext' => '.gz' );
		// URL suffixes, for the phpBB URLs
		// can be edited, requires .htaccess update.
		$this->seo_ext = array( 'forum' => '.html', 'topic' => '.html', 'post' => '.html', 'user' => '.html', 'usermsg' => '.html', 'group' => '.html',  'index' => '', 'global_announce' => '/', 'leaders' => '.html', 'pagination' => '.html', 'gz_ext' => '');
		$this->seo_opt['url_pattern'] = array('`&(amp;)?#?[a-z0-9]+;`i', '`[^a-z0-9]`i'); // Do not remove : html/xml entities & non a-z chars
		/*if ($this->seo_opt['rem_small_words']) {
			$this->seo_opt['url_pattern'][] = '`(^|-)[a-z0-9]{1,2}(?=-|$)`i';
		}*/
		$this->seo_opt['url_pattern'][] ='`[-]+`'; // Do not remove : multi hyphen reduction
		// --> DOMAIN SETTING <-- //
		// Path Settings, only rely on DB
		$server_protocol = ($config['server_protocol']) ? $config['server_protocol'] : (($config['cookie_secure']) ? 'https://' : 'http://');
		$server_name = trim($config['server_name'], '/') . '/';
		$server_port = (int) $config['server_port'];
		$server_port = ($server_port <> 80) ? ':' . $server_port : '';
		$script_path = trim($config['script_path'], '/');
		$script_path = (empty($script_path) ) ? '' : $script_path . '/';
		$this->seo_path['root_url'] =  $server_protocol . $server_name;
		$this->seo_path['phpbb_urlR'] = $this->seo_path['phpbb_url'] =  $this->seo_path['root_url'] . $script_path;
		$this->seo_path['phpbb_script'] =  $script_path;
		// File setting
		$this->seo_req_uri();
		$this->seo_opt['seo_base_href'] = $this->seo_opt['req_file'] = $this->seo_opt['req_self'] = '';
		if ($script_name = (!empty($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : getenv('PHP_SELF')) {
			// From sessions.php
			// Replace backslashes and doubled slashes (could happen on some proxy setups)
			$this->seo_opt['req_self'] = str_replace(array('\\', '//'), '/', $script_name);
			// basenamed page name (for example: index)
			$this->seo_opt['req_file'] = urlencode(htmlspecialchars(str_replace('.' . $phpEx, '', basename($this->seo_opt['req_self']))));
		}
		return;
	}
	// --> Gen stats 
	/**
	* Returns microtime
	* Borrowed from php.net
	*/
	function microtime_float() {
		return array_sum(explode(' ', microtime()));
	}
	// --> URL rewriting functions <--
	/**
	* Prepare Titles for URL injection
	*/
	function format_url( $url, $type = 'topic' ) {
		$url = preg_replace('`\[.*\]`U','', $url);
		$url = htmlentities($url, ENT_COMPAT, 'utf-8');
		$url = preg_replace( '`&([a-z]+)(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', "\\1", $url );
		$url = preg_replace( $this->seo_opt['url_pattern'] , '-', $url);
		$url = strtolower(trim($url, '-'));
		return empty($url) ? $type : $url;
	}
	/**
	* Prepare url first part and checks cache
	*/
	function set_url( $url, $id = 0, $type = 'forum' ) {
		return $this->format_url( $url, $type ) . $this->seo_delim[$type] . $id;
	}
	/**
	* Prepare url first part
	*/
	function prepare_url( $type, $title, $id ) {
		if ( empty($this->seo_url[$type][$id]) ) {
			$this->seo_url[$type][$id] = $this->format_url($title, $this->seo_static[$type]) . $this->seo_delim[$type] . $id;
		}
	}
	/**
	* Set title
	*/
	function set_title( $type, $title, $id ) {
		if ( empty($this->seo_url[$type][$id]) ) {
			$this->seo_url[$type][$id] = $this->format_url($title, $this->seo_static[$type]);
		}
	}
	/**
	* Returns the full REQUEST_URI
	*/
	function seo_req_uri() {
		if ( !empty($_SERVER['HTTP_X_REWRITE_URL']) ) { // IIS  isapi_rewrite
			$this->seo_path['uri'] = ltrim($_SERVER['HTTP_X_REWRITE_URL'], '/');
		} elseif ( !empty($_SERVER['REQUEST_URI']) ) { // Apache mod_rewrite
			$this->seo_path['uri'] = ltrim($_SERVER['REQUEST_URI'], '/');
		} else { // no mod rewrite
			$this->seo_path['uri'] =  ltrim($_SERVER['SCRIPT_NAME'], '/') . ( ( !empty($_SERVER['QUERY_STRING']) ) ? '?'.$_SERVER['QUERY_STRING'] : '' );
		}
		$this->seo_path['uri'] = str_replace( '%26', '&', rawurldecode($this->seo_path['uri']));
		// workaround for FF default iso encoding
		if (!$this->is_utf8($this->seo_path['uri']) && function_exists('utf8_encode')) {
			$this->seo_path['uri'] = utf8_normalize_nfc(utf8_encode($this->seo_path['uri']));
		}
		$this->seo_path['uri'] = $this->seo_path['root_url'] . $this->seo_path['uri'];
		return $this->seo_path['uri'];
	}
	/**
	* is_utf8($string)
	* Borrowed from php.net : http://www.php.net/mb_detect_encoding (detectUTF8)
	*/
	function is_utf8($string) {
		// non-overlong 2-byte|excluding overlongs|straight 3-byte|excluding surrogates|planes 1-3|planes 4-15|plane 16
		return preg_match('%(?:[\xC2-\xDF][\x80-\xBF]|\xE0[\xA0-\xBF][\x80-\xBF]|[\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}|\xED[\x80-\x9F][\x80-\xBF] |\xF0[\x90-\xBF][\x80-\xBF]{2}|[\xF1-\xF3][\x80-\xBF]{3}|\xF4[\x80-\x8F][\x80-\xBF]{2})+%xs', $string);
	}
}
?>