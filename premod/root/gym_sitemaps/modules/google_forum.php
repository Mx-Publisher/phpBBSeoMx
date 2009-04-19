<?php
/**
*
* @package phpBB SEO GYM Sitemaps
* @version $id: google_forum.php - 18582 12-20-2008 14:40:10 - 2.0.RC3 dcz $
* @copyright (c) 2006 - 2008 www.phpbb-seo.com
* @license http://opensource.org/osi3.0/licenses/lgpl-license.php GNU Lesser General Public License
*
*/
// First basic security
if ( !defined('IN_PHPBB') ) {
	exit;
}
/**
* google_forum Class
* www.phpBB-SEO.com
* @package phpBB SEO
*/
class google_forum {
	var $url_config = array();
	var $actions = array();
	var $module_auth = array();
	var $module_config = array();
	var $output_data = array();
	/**
	* constuctor
	*/
	function google_forum(&$gym_master) {
		$this->gym_master = &$gym_master;
		$this->actions = &$this->gym_master->actions;
		$this->module_auth = &$this->gym_master->module_auth;
		$this->output_data = &$this->gym_master->output_data;
		$this->url_config = &$this->gym_master->url_config;
		$this->module_config = array_merge(
			// Global
			$this->gym_master->google_config,
			// Other stuff required here
			array(
				'google_sticky_priority' => $this->gym_master->gym_config['google_forum_sticky_priority'],
				'google_announce_priority' => $this->gym_master->gym_config['google_forum_announce_priority'],
				'google_exclude' => trim($this->gym_master->gym_config['google_forum_exclude'], ','),
			)
		);
		// Build exclude_list array
		$this->module_config['exclude_list'] = $this->gym_master->set_exclude_list($this->module_config['google_exclude']);
		// Wee need to check auth here (Only public and postable forums for sitemaps)
		$this->gym_master->check_forum_auth(true);
		// Only consider publicly readable and postable forums
		$this->actions['auth_guest_read'] = $this->actions['auth_view_read'] = array_diff_assoc($this->module_auth['forum']['read_post'], $this->module_config['exclude_list']);
		$this->init_url_settings();
	}
	/**
	* Initialize mod rewrite to handle multiple URL standards.
	* Only one 'if' is required after this in THE loop to properly switch 
	* between the four types (none, advanced, mixed and simple).
	* @access private
	*/
	function init_url_settings() {
		global $phpbb_seo, $phpEx;
		// vars will fell like rain in the code ;)
		$this->url_config['forum_pre'] = "viewforum.$phpEx?f=";
		$this->url_config['topic_pre'] = "viewtopic.$phpEx?t=";
		$this->url_config['forum_ext'] = '';
		$this->url_config['topic_ext'] = '';
		$this->url_config['start_delim'] = $this->url_config['start_default'];
		$this->url_config['google_forum_pre'] = $this->url_config['google_default'] . '?forum=';
		$this->url_config['google_forum_default'] = $this->url_config['google_default'] . '?forum';
		$this->url_config['google_annouces_default'] = $this->url_config['google_forum_pre'] . 'announces';
		$this->url_config['google_forum_ext'] = '';
		// Mod rewrite type auto detection
		$this->url_config['modrtype'] = ($phpbb_seo->modrtype >= 0) ? intval($phpbb_seo->modrtype) : intval($this->gym_master->gym_config['gym_modrtype']);
		// make sure virtual_folder uses the proper value
		$phpbb_seo->seo_opt['virtual_folder'] = $this->url_config['modrtype'] > 0 ? $phpbb_seo->seo_opt['virtual_folder'] : false;
		$this->url_config['google_forum_delim'] = !empty($phpbb_seo->seo_delim['forum']) ? $phpbb_seo->seo_delim['forum'] : '-f';
		$this->url_config['google_forum_static'] = !empty($phpbb_seo->seo_static['forum']) ? $phpbb_seo->seo_static['forum'] : 'forum';
		$this->url_config['modrewrite'] = $this->module_config['google_modrewrite'];
		if ($this->url_config['modrewrite']) { // Module links
			$this->url_config['google_forum_pre'] = ($this->url_config['modrtype'] >= 2) ? '' : $this->url_config['google_forum_static'] . $this->url_config['google_forum_delim'];
			$this->url_config['google_forum_ext'] = '.xml' . $this->url_config['gzip_ext_out'];
			$this->url_config['google_forum_default'] = 'forum-sitemap' . $this->url_config['google_forum_ext'];
			$this->url_config['google_annouces_default'] = 'forum-announces' . $this->url_config['google_forum_ext'];
		}
		if (!@isset($phpbb_seo->seo_opt['url_rewrite'])) {
			$phpbb_seo->seo_opt['url_rewrite'] = $this->url_config['modrtype'] > 0 ? true : false;
		}
		if ($phpbb_seo->seo_opt['url_rewrite']) {
			$this->url_config['forum_index'] = !empty($phpbb_seo->seo_static['index']) ? $phpbb_seo->seo_static['index'] . $phpbb_seo->seo_ext['index'] : '';
			if ($this->url_config['modrtype'] >= 1) { // Simple mod rewrite, default is none (0)
				$this->url_config['start_delim'] = $phpbb_seo->seo_delim['start'];
				$this->url_config['forum_pre'] = $phpbb_seo->seo_static['forum'];
				$this->url_config['topic_pre'] = $phpbb_seo->seo_static['topic'];
				$this->url_config['forum_ext'] = $phpbb_seo->seo_ext['forum'];
				$this->url_config['topic_ext'] = $phpbb_seo->seo_ext['topic'];
			}
			if ($this->url_config['modrtype'] >= 2) { // +Mixed
				$this->url_config['forum_pre'] = '';
			} 
			if ($this->url_config['modrtype'] >= 3) { // +Advanced
				$this->url_config['topic_pre'] = '';
			}
		} else {
			$this->url_config['forum_index'] = 'index.php';
			$phpbb_seo->seo_opt['virtual_folder'] = false;
		}
		return;
	}
	/**
	* sitemap, builds the sitemap
	* @access private
	*/
	function sitemap() {
		global $config, $phpbb_seo, $db, $user, $auth;
		if ($this->actions['module_sub'] === 'announces') {
			// Start with forums info
			$forum_data = array();
			$forum_data['replies_key'] = 'topic_replies';
			$forum_data['forum_url'] = $phpbb_seo->seo_path['phpbb_urlR'] . ($phpbb_seo->seo_opt['virtual_folder'] ? $phpbb_seo->seo_static['global_announce'] . $phpbb_seo->seo_ext['global_announce'] : '' );
			// Do we want to list all the global announces from the forum
			// Count items
			$sql = "SELECT COUNT(topic_id) AS topic
				FROM " . TOPICS_TABLE . "
				WHERE forum_id = 0
				AND topic_type = " . POST_GLOBAL;
			$result = $db->sql_query($sql);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);
			if(empty($row['topic'])) {
				$this->gym_master->gym_error(404, 'GYM_TOO_FEW_ITEMS',  __FILE__, __LINE__);
				exit;
			} else {
				$forum_data['topic_count'] = (int) $row['topic'];
				unset($row);
			}
			// it's the announces sitemap
			$announces_sitemap_url = $this->module_config['google_url'] . $this->url_config['google_annouces_default'];
			$this->gym_master->seo_kill_dupes($announces_sitemap_url);
			// Forum index location
			$this->gym_master->parse_item($phpbb_seo->seo_path['phpbb_urlR'] . $this->url_config['forum_index'], 1, 'always', time());
			$forum_sql = ' forum_id = 0 AND topic_type = ' . POST_GLOBAL . ' AND ';
			$this->list_topics($forum_sql, $forum_data, '');
		} else {
			// Filter $this->actions['module_sub'] var type
			$this->actions['module_sub'] = intval($this->actions['module_sub']);
			if ($this->actions['module_sub'] > 0) {
				// then It's a forum sitemap
				// Check forum auth and grab necessary infos
				$sql = "SELECT * 
					FROM ". FORUMS_TABLE ." f
					WHERE forum_id = " . $this->actions['module_sub'];
				$result = $db->sql_query($sql);
				$forum_data = $db->sql_fetchrow($result);
				$db->sql_freeresult($result);
				if ( empty($forum_data) ) {
					$this->gym_master->gym_error(404, '', __FILE__, __LINE__, $sql);
				}
				$forum_id = (int) $forum_data['forum_id'];
				if ( $forum_data['forum_type'] !=  FORUM_POST || !isset($this->actions['auth_view_read'][$forum_id]) ) {
					$this->gym_master->gym_error(401, '',  __FILE__, __LINE__);
				}
				// This forum is allowed, so let's start
				$forum_url_title = $phpbb_seo->format_url($forum_data['forum_name'], $phpbb_seo->seo_static['forum']);
				$forum_sitemap_url = $this->module_config['google_url'] . ( !empty($this->url_config['google_forum_pre']) ? $this->url_config['google_forum_pre'] . $forum_id . $this->url_config['google_forum_ext'] : $forum_url_title . $this->url_config['google_forum_delim'] .  $forum_id . $this->url_config['google_forum_ext']);
				// Approval and pagination
				$paginated = $config['posts_per_page'];
				$forum_data['topic_count'] = $forum_data['forum_topics'];
				$forum_data['replies_key'] = 'topic_replies';
				$approve_sql = ' AND topic_approved = 1';
				$forum_data['approve'] = 0;
				// Do not serve content if there is no topic in the forum
				if ( $forum_data['topic_count'] < $this->module_config['google_threshold'] ) {
					$this->gym_master->gym_error(404, 'GYM_TOO_FEW_ITEMS', __FILE__, __LINE__, $sql);
				}
				$this->gym_master->seo_kill_dupes($forum_sitemap_url);
				$forum_data['forum_url'] = $phpbb_seo->seo_path['phpbb_urlR'] . (!empty($this->url_config['forum_pre']) ? $this->url_config['forum_pre'] . $forum_id . $this->url_config['forum_ext'] : $phpbb_seo->set_url($forum_data['forum_name'], $forum_id, $phpbb_seo->seo_static['forum']) . $this->url_config['forum_ext']);
				$this->gym_master->parse_item($forum_data['forum_url'], 1.0, 'always', $forum_data['forum_last_post_time']);


				$forum_sql = ' forum_id = ' .  $forum_id . ' AND topic_type <> ' . POST_GLOBAL . ' AND ';
				$this->list_topics($forum_sql, $forum_data, $approve_sql);
			} else {
				// it's the forums sitemap
				$forum_sitemap_url = $this->module_config['google_url'] . $this->url_config['google_forum_default'];
				$this->gym_master->seo_kill_dupes($forum_sitemap_url);
				// Forum index location
				$this->gym_master->parse_item($phpbb_seo->seo_path['phpbb_urlR'] . $this->url_config['forum_index'], 1, 'always', time());
				$sql = "SELECT * 
					FROM ". FORUMS_TABLE . " WHERE " . $db->sql_in_set('forum_id' , $this->actions['auth_view_read'], false, true) . "
					ORDER BY forum_last_post_id " . $this->module_config['google_sort'];
				$result = $db->sql_query($sql);
				// Forums loop
				while( $forum_data = $db->sql_fetchrow($result) ) {
					$forum_id = (int) $forum_data['forum_id'];
					// Make sure that the forum is auth
					if (!isset($this->actions['auth_view_read'][$forum_id])) {
						continue;
					}
					$topics_count = $forum_data['forum_topics'];
					// Not enough topics in this forum, skip
					if ($topics_count < $this->module_config['google_threshold']) {
						continue;
					}
					$paginated = $forum_data['forum_topics_per_page'] ? $forum_data['forum_topics_per_page'] : $config['topics_per_page'];
					$pages = ceil( ($topics_count + 1) / $paginated);
					$forum_url = $phpbb_seo->seo_path['phpbb_urlR'] . ( !empty($this->url_config['forum_pre'] ) ? $this->url_config['forum_pre'] . $forum_id : $phpbb_seo->set_url($forum_data['forum_name'], $forum_id, $phpbb_seo->seo_static['forum']) );
					$forum_priority = $this->gym_master->get_priority($forum_data['forum_last_post_time'], $pages);
					$forum_change = $this->gym_master->get_changefreq($forum_data['forum_last_post_time']);
					$this->gym_master->parse_item( $forum_url . $this->url_config['forum_ext'], $forum_priority, $forum_change, $forum_data['forum_last_post_time']);
					if ($pages > 1 && $this->module_config['google_pagination']) {
						// Reset Pages limits for this topic
						$pag_limit1 = $this->module_config['google_limitdown'];
						$pag_limit2 = $this->module_config['google_limitup'];	
						// If $pag_limit2 too big for this topic, lets output all pages
						$pag_limit2 = ( $pages < $pag_limit2 ) ?  ($pages - 1) :  $pag_limit2;
						$i=1;
						while ( ($i < $pages) ) {
							if ( ( $i <= $pag_limit1 ) || ( $i > ($pages - $pag_limit2 ) ) ) {
								$url = $forum_url . ( $phpbb_seo->seo_opt['virtual_folder'] ? '/' . $phpbb_seo->seo_static['pagination'] . $paginated * $i . $phpbb_seo->seo_ext['pagination'] : $this->url_config['start_delim'] . $paginated * $i . $this->url_config['forum_ext'] );
								$this->gym_master->parse_item( $url, $forum_priority, $forum_change, $forum_data['forum_last_post_time']);
								$i++;
							} else {
								$i++;
							}
						}
					}
				} // End Forum map loop
				$db->sql_freeresult($result);
				unset ($forum_data);
			}
		}
		return;
	}
	/**
	* sitemapindex, builds the sitemapindex
	* @access private
	*/
	function sitemapindex() {
		global $phpbb_seo, $db, $config, $user, $auth;
		// It's global list call, add module sitemaps
		// Reset the local counting, since we are cycling through modules
		$this->output_data['url_sofar'] = 0;
		// Announces map location ?
		// Count items
		$sql = "SELECT COUNT(topic_id) AS topic
			FROM " . TOPICS_TABLE . "
			WHERE forum_id = 0
			AND topic_type = " . POST_GLOBAL;
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
		if (!empty($row['topic'])) {
			unset($row);
			$announces_sitemap_url = $this->module_config['google_url'] . $this->url_config['google_annouces_default'];
			$this->gym_master->parse_sitemap($announces_sitemap_url, $user->time_now - rand(1,150));
		}
		$sql = "SELECT *
			FROM ". FORUMS_TABLE . " 
				WHERE " . $db->sql_in_set('forum_id', $this->actions['auth_view_read'], false, true) . "
			ORDER BY forum_last_post_id " . $this->module_config['google_sort'];
		$result = $db->sql_query($sql);
		// Reset vars
		$forum_sitemap_urls = '';
		$sitemap_data = array();
		$last_ever = 0;
		while( $forum_data = $db->sql_fetchrow($result) ) {
			$forum_id = (int) $forum_data['forum_id'];
			// Make sure that the forum is auth
			if (!isset($this->actions['auth_view_read'][$forum_id])) {
				continue;
			}
			$topics_count = $forum_data['forum_topics'];
			// Not enough topics in this forum, skip
			if ($topics_count < $this->module_config['google_threshold']) {
				continue;
			}
			// Set mod rewrite type
			$sitemap_data[$forum_id]['url'] = $this->module_config['google_url'] . ( !empty($this->url_config['google_forum_pre']) ? $this->url_config['google_forum_pre'] . $forum_id . $this->url_config['google_forum_ext'] : $phpbb_seo->format_url($forum_data['forum_name'], $phpbb_seo->seo_static['forum']) . $this->url_config['google_forum_delim'] .  $forum_id . $this->url_config['google_forum_ext']);
			$sitemap_data[$forum_id]['lastmod'] = $forum_data['forum_last_post_time'] > $config['board_startdate'] ? $forum_data['forum_last_post_time'] : $config['board_startdate'];
		}// End Forum map loop
		$db->sql_freeresult($result);
		unset ($forum_data);	
		if (!empty($sitemap_data)) {
			// only add the Forum map location if showing enough forums
			if (sizeof($sitemap_data) > $this->module_config['google_threshold']) {
				// Forum map location
				$forum_sitemap_url = $this->module_config['google_url'] . $this->url_config['google_forum_default'];
				$this->gym_master->parse_sitemap($forum_sitemap_url, $user->time_now);
			}
			foreach ($sitemap_data as $data) {
				$this->gym_master->parse_sitemap($data['url'], $data['lastmod']);
			}
			unset ($sitemap_data);
		}
		// Add the local counting, since we are cycling through modules
		$this->output_data['url_sofar_total'] = $this->output_data['url_sofar_total'] + $this->output_data['url_sofar'];
		return;
	}
	/**
	* list_topics($forum_sql, $forum_data, $approve_sql = '') builds the output for topic listing
	* From a forum and from all forums
	* @access private
	*/
	function list_topics($forum_sql, $forum_data, $approve_sql = '') {
		global $db, $phpbb_seo, $auth, $config, $user;
		// initial setup 
		$topic_sofar = 0;
		$topics = array();
		$sql_first = "SELECT topic_id, forum_id, topic_approved, topic_reported, topic_title, topic_type, topic_status, topic_replies, topic_replies_real, topic_last_post_id, topic_last_post_time
				FROM " . TOPICS_TABLE . "
				WHERE $forum_sql
					topic_status <> " . ITEM_MOVED . " 
					$approve_sql
					ORDER BY topic_last_post_id " . $this->module_config['google_sort'];
		$paginated = $config['posts_per_page'];
		while( ( $topic_sofar <  $forum_data['topic_count'] ) && ($this->output_data['url_sofar'] < $this->module_config['google_url_limit']) ) {
			$result = $db->sql_query_limit($sql_first, $this->module_config['google_sql_limit'], $topic_sofar);
			while ($topic = $db->sql_fetchrow($result)) {
				$forum_id = (int) $topic['forum_id'];
				// Make sure that the forum is auth
				if (!isset($this->actions['auth_view_read'][$forum_id])) {
					continue;
				}
				if ( $topic['topic_reported'] == 1 ) { // Skip for now if reported, approved are checked above when required
					continue;
				}
				$pages = ceil( ($topic[$forum_data['replies_key']] + 1) / $paginated);
				$topic['topic_title'] = censor_text($topic['topic_title']);
				$topic_url = ( $phpbb_seo->seo_opt['virtual_folder'] ? $forum_data['forum_url'] : $phpbb_seo->seo_path['phpbb_urlR'] ) . ( !empty($this->url_config['topic_pre']) ? $this->url_config['topic_pre'] . $topic['topic_id'] : $phpbb_seo->format_url($topic['topic_title']) . $phpbb_seo->seo_delim['topic'] .  $topic['topic_id'] );
				if ($topic['topic_type'] == POST_NORMAL ) {
					$topic_priority = $this->gym_master->get_priority($topic['topic_last_post_time'], $pages);
				} else {
					$topic_priority = $topic['topic_type'] == POST_STICKY ? $this->module_config['google_sticky_priority'] : $this->module_config['google_announce_priority'];
				}
				$topic_change = ($topic['topic_status'] == ITEM_LOCKED) ? 'never' : $this->gym_master->get_changefreq($topic['topic_last_post_time']);
				$topic_time = gmdate('Y-m-d\TH:i:s'.'+00:00', $topic['topic_last_post_time']);
				$this->gym_master->parse_item($topic_url . $this->url_config['topic_ext'], $topic_priority, $topic_change, $topic['topic_last_post_time']);
				if ($pages > 1 && $this->module_config['google_pagination']) {
					// Reset Pages limits for this topic
					$pag_limit1 = $this->module_config['google_limitdown'];
					$pag_limit2 = $this->module_config['google_limitup'];	
					// If $pag_limit2 too big for this topic, lets output all pages
					$pag_limit2 = ( $pages < $pag_limit2 ) ?  ($pages - 1) :  $pag_limit2;
					$i=1;
					while ( ($i < $pages) ) {
						if ( ( $i <= $pag_limit1 ) || ( $i > ($pages - $pag_limit2 ) ) ) {
							$start = $this->url_config['start_delim'] . $paginated * $i;
							$this->gym_master->parse_item($topic_url . $start . $this->url_config['topic_ext'], $topic_priority, $topic_change, $topic['topic_last_post_time']);
							$i++;
						} else {
							$i++;
						}
					}
				}
			}// End topic loop
			// Used to separate query
			$topic_sofar = $topic_sofar + $this->module_config['google_sql_limit'];
			$db->sql_freeresult($result);
			unset($topic);
		}// End Query limit loop
	}
}
?>