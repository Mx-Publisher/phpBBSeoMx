<?php
/**
*
* @name portal_xl_user_info.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_xl_user_info.php,v 1.2 2009/05/15 22:32:06 portalxl group Exp $
*
* Language definitions portal_xl_user_info.php contributed by black_terror
*
* @copyright (c) 2007, 2011 PortalXL Group
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'FRONTPAGE'                => 'Front Page',
	'BOOKMARKS'                => 'Manage Bookmarks',
	'SUBSCRIPTION'             => 'Manage Subscriptions',
	'DRAFTS'                   => 'Manage Drafts',
	'ATTACHMENTS'              => 'Manage Attachments',
	
	'UPROFILE'                 => 'Profile',
	'SIGNATURE'                => 'Signature',
	'AVATAR'                   => 'Avatar',
	'ACCOUNT'                  => 'Account',
	
	'GLOBALSETTINGS'           => 'Edit Global Settings',
	'POSTINDEFAULT'            => 'Edit Posting Defaults',
	'DISPLAYOPTIONS'           => 'Edit Display Options',
	
	'COMPOSEPMMESSAGESG'       => 'Compose PM Message',
	'MANAGEPMDRAFTS'           => 'Manage PM Drafts',
	'INBOX'                    => 'Inbox',
	'OUTBOX'                   => 'Outbox',
	'SENDMESSAGEBOX'           => 'Sendbox',
	'UNREADMESSAGES'           => 'Unreadbox',
	'RULEFOLDERSETTING'        => 'Rules &amp; Folders',
	
	'EDITMEMBERSHIP'           => 'Edit Memberships',
	'MANAGEGROUPS'             => 'Manage Groups',
	
	'MANAGEFRIENDS'            => 'Manage Friends',
	'MANAGEFOES'               => 'Manage Foes',
	
	'PRIVATE_MESSAGES'     	   => 'Private Messages',
	'POST_TOPIC_INFO'     	   => 'Post &amp; Topic',
	'GROUPS_INFO'  			   => 'Usergroups',
	'OVERVIEW_INFO' 		   => 'Overview',
	'FRIENDS_FOES'			   => 'Friends &amp; Foes',
	'ADMIN'			   		   => 'Administration',
	'PROFILE_INFO'     	       => 'Settings &amp; Profile',
	'ACPANEL'     	       	   => 'ACP',


	));

?>