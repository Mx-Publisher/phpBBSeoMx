<?php
/**
*
* permission Breizh Shoutbox [English]
*
* @package language
* @version $Id: permissions_shoutbox.php 140 20:08 31/12/2010 Sylver35 Exp $ 
* @copyright (c) 2010, 2011 Breizh Portal  http://breizh-portal.com
* @copyright (c) 2007 Paul Sohier
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Adding new category
$lang['permission_cat']['shoutbox'] = 'Breizh Shoutbox';

// Adding new permission set
$lang['permission_type']['shout_'] = 'Permissions Breizh Shoutbox';

// Adding the permissions
$lang = array_merge($lang, array(
	// Admin permission
	'acl_a_shout_manage'			=> array('lang' => 'Can manage and modify the settings of the shoutbox', 			'cat' => 'misc'),
	'acl_a_shout_priv'				=> array('lang' => 'Can manage and modify the settings of the private shoutbox', 	'cat' => 'misc'),
	
	// User permissions
	'acl_u_shout_post'				=> array('lang' => 'A user can post message in the shoutbox', 			'cat' => 'shoutbox'),
	'acl_u_shout_info'				=> array('lang' => 'A user can view IPs from other users', 				'cat' => 'shoutbox'),
	'acl_u_shout_info_s'			=> array('lang' => 'A user can view IPs from himself', 					'cat' => 'shoutbox'),
	'acl_u_shout_delete'			=> array('lang' => 'A user can delete shouts from other users', 		'cat' => 'shoutbox'),
	'acl_u_shout_delete_s'			=> array('lang' => 'A user can delete own shouts', 						'cat' => 'shoutbox'),
	'acl_u_shout_edit'				=> array('lang' => 'A user can edit shouts from himself', 				'cat' => 'shoutbox'),
	'acl_u_shout_edit_mod'			=> array('lang' => 'A user can edit shouts from other users', 			'cat' => 'shoutbox'),
	'acl_u_shout_smilies'			=> array('lang' => 'A user can post smilies in messages', 				'cat' => 'shoutbox'),
	'acl_u_shout_image'				=> array('lang' => 'A user can post images in messages', 				'cat' => 'shoutbox'),
	'acl_u_shout_color'				=> array('lang' => 'A user can use colors in messages', 				'cat' => 'shoutbox'),
	'acl_u_shout_bbcode'			=> array('lang' => 'A user can post bbcode in messages', 				'cat' => 'shoutbox'),
	'acl_u_shout_chars'				=> array('lang' => 'A user can use special characters', 				'cat' => 'shoutbox'),
	'acl_u_shout_ignore_flood'		=> array('lang' => 'A user can ignore the flood limit', 				'cat' => 'shoutbox'),
	'acl_u_shout_popup'				=> array('lang' => 'A user can use the shoutbox in popup', 				'cat' => 'shoutbox'),
	'acl_u_shout_view'				=> array('lang' => 'A user can view the shoutbox', 						'cat' => 'shoutbox'),
	'acl_u_shout_priv'				=> array('lang' => 'A user can access to the private shoutbox', 		'cat' => 'shoutbox'),
	'acl_u_shout_purge'				=> array('lang' => 'A user can purge the shoutbox in frontend', 		'cat' => 'shoutbox'),
	'acl_u_shout_hide'				=> array('lang' => 'A user can ignore the infos posted by the robot', 	'cat' => 'shoutbox'),
	'acl_u_shout_lateral'			=> array('lang' => 'A user can view the shoutbox in a lateral panel', 	'cat' => 'shoutbox'),
	'acl_u_shout_limit_post'		=> array('lang' => 'May ignore the character limit in a posted message','cat' => 'shoutbox'),
));

?>