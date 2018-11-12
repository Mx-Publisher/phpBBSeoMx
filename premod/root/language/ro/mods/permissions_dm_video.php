<?php
/**
* permissions_dm_video [English]
*
* @package language
* @version $Id: permissions_dm_video.php 178 2009-12-13 13:46:11Z femu $
* @copyright (c) 2008, 2009 femu - http://die-muellers.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

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
//
// Some characters you may want to copy&paste:
// ’ » „ “ — …
//

// Adding new category
$lang['permission_cat']['dm_mods']   = 'DM Mods';

// Adding the permissions
$lang = array_merge($lang, array(
	// User permissions
	'acl_u_dm_video_view' => array('lang' => 'Can view videos', 'cat' => 'dm_mods'),
	'acl_u_dm_video_rate' => array('lang' => 'Can rate videos', 'cat' => 'dm_mods'),
	'acl_u_dm_video_add' => array('lang' => 'Can add videos', 'cat' => 'dm_mods'),
	'acl_u_dm_video_edit' => array('lang' => 'Can edit own videos', 'cat' => 'dm_mods'),
	'acl_u_dm_video_del' => array('lang' => 'Can delete own videos', 'cat' => 'dm_mods'),
	'acl_u_dm_video_report' => array('lang' => 'Can report videos', 'cat' => 'dm_mods'),
    'acl_u_dm_video_comment_view' => array('lang' => 'Can view video comments', 'cat' => 'dm_mods'),
    'acl_u_dm_video_comment_add' => array('lang' => 'Can add video comments', 'cat' => 'dm_mods'),
    'acl_u_dm_video_comment_edit' => array('lang' => 'Can edit own video comments', 'cat' => 'dm_mods'),
    'acl_u_dm_video_comment_del' => array('lang' => 'Can delete own video comments', 'cat' => 'dm_mods'),
   
	// Admin permissions
	'acl_a_dm_video' => array('lang' => 'Can manage DM Video', 'cat' => 'dm_mods'),
	'acl_a_dm_video_config' => array('lang' => 'Can edit video configuration', 'cat' => 'dm_mods'),
	'acl_a_dm_video_cats' => array('lang' => 'Can manage video categories', 'cat' => 'dm_mods'),
	'acl_a_dm_video_edit' => array('lang' => 'Can edit videos',	'cat' => 'dm_mods'),
	'acl_a_dm_video_release' => array('lang' => 'Can release new videos', 'cat' =>  'dm_mods'),
	'acl_a_dm_video_report' => array('lang' => 'Can manage reported videos', 'cat' =>  'dm_mods'),
	'acl_a_dm_video_auto_announce' => array('lang' => 'Admin videos will be announced automatically', 'cat' => 'dm_mods'),
	)
);

?>