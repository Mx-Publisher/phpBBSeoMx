<?php
/** 
*
* @name acp_portal_xl_menu.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_menu.php,v 1.2 2009/05/15 22:32:06 portalxl group Exp $
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
	'TITLE' 					=> 'Navigation Menu management',
	'TITLE_EXPLAIN'				=> 'From this form, you can create/edit/move/delete a custom Menu Item. This menu block can be switched on/off in Portal -> Portal Blocks -> Manage Portal Blocks or in Portal -> Portal Blocks -> Manage Index Blocks if as block created. Icons for use in this menu are placed in directory /portal/images/icon_menu/. Recommended icon size 16x16px. Add as many icons as you like but keep in mind the preview will show them all, which will stretch the Available mini icons window in the edit menu or add menu section. Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/" for a external link. Internal links can be added like "portal.php" to call a certain file from your site, or "memberlist.php?mode=leaders" to call a certain function of your forum from out of the navigation menu.',
 
	'PORTAL_MENUS_EDIT_HEADER'	=> 'Edit menu',
	'ACP_MENU_EXPLAIN'			=> 'Menu management displayed on the portal',
	'ACP_PORTAL_MENU'			=> 'Menu management',
	'ACTION'					=> 'Action',
	'ADD_URL'					=> 'Add a menu',		
	'ADMIN'						=> 'Administrator',			
	'ALL'						=> 'All',
	'GUESTS'					=> 'Guests',
	'MENU_ADDED'				=> 'Link successfully added',
	'MENU_REMOVED'				=> 'Link successfully removed',			
	'MENU_UPDATED'				=> 'Link uccessfully updated',
	'MOD'						=> 'Moderator',
	'MUST_SELECT_MENU'			=> 'Select',
	'NAME_LINK'					=> 'Link name',
	'NAME_URL_EXPLAIN'			=> 'Link name displayed in Portal menu',
	'NONE'						=> 'No display',
	'REG'						=> 'Registered',
	'RESET_MENU'				=> 'Delete',		
	'STAFF'						=> 'Team',
	'URL_EXPLAIN'				=> 'Url of opening window',
	'URL_EXPLAIN_2'				=> 'The url can be written as followed. Example : <br>index.php for internal links, <br>http://google.com for external links',		
	'URL_IMG'					=> 'Icon url displayed in Menu links',	
	'URL_IMG_2'					=> 'Mini icon',		
	'URL_IMG_EXPLAIN'			=> 'Image Url displayed in Menu links',
	'URL_IMG_EXPLAIN2'			=> 'Click on the selected image',		
	'URL_LINK'					=> 'Link url',
	'VIEW_BY'					=> 'Visible by',
	'VIEW_BY_EXPLAIN'			=> 'Determines who can view the link on the portal',	
	'MENU_FNAME_INFO'		    => 'Available mini icons',	
	'MENU_FNAME_I_EXPLAIN'		=> 'Preview of available mini icons you can choose from (images have placed in folder /portal/images/icon_menu/ if you like to add more mini icons). Recommended icon size 16x16px.',	
	'MENU_FNAME_I_CHOSEN'		=> 'Chosen mini image.',	
	'OPEN_IN'					=> 'Open in',
	'OPEN_IN_EXPLAIN'			=> 'Determines how this link will be opened. <br />Yes = new window, No = same window',	
	'OPEN_IN_BLANK'				=> 'New window',
	'OPEN_IN_SAME'				=> 'Same window',
		
   ));

?>