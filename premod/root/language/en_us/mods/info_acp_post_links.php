<?php
/**
*
* Post links [Slovak]
*
* @package post_links
* @version $Id: info_acp_post_links.php 2010-03-19 22:46:00Z Senky $
* @copyright (c) 2010 Senky
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_POST_LINKS_TITLE'			=> 'Post Links',
	'ACP_POST_LINKS_CONFIGURE'		=> 'Configure Post Links',
	'POST_LINKS_INTRO'			=> 'Here you can manage post links. You can set up which links will be shown or disable this MOD.',
	'POST_LINKS_UPDATED'				=> 'Post links have been updated!',
	'PL_ENABLE'				=> 'Enable post links',
	'PL_ENABLE_EXPLAIN'				=> 'This will enable post links. Please, note that even if this is enabled and all other options are disabled, post links will not appear.',
	'PL_LINK_ENABLE'				=> 'Enable link',
	'PL_LINK_ENABLE_EXPLAIN'				=> 'This option will enable simple link',
	'PL_BBCODE_ENABLE'				=> 'Enable BBcode',
	'PL_BBCODE_ENABLE_EXPLAIN'				=> 'This option will enable link to post in BB code format',
	'PL_HTML_ENABLE'				=> 'Enable HTML',
	'PL_HTML_ENABLE_EXPLAIN'				=> 'This option will enable link to post in HTML format'
));
?>