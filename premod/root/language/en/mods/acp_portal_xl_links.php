<?php
/** 
*
* @name acp_portal_xl_links.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_links.php,v 1.2 2009/05/15 22:32:06 portalxl group Exp $
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
	'TITLE' 					=> 'Links management',
	'TITLE_EXPLAIN'				=> 'From this form, you can create/edit/move/delete a custom link Item. Icons for use in this menu are placed in directory /portal/images/icon_links/. Recommended icon size 16x16px. Add as many icons as you like but keep in mind the preview will show them all, which will stretch the Available mini icons window in the edit menu or add menu section. Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/" for a external link. To invoke this menu go to Portal -> Portal Blocks -> and create a block using links.html (Links).',
 
	'PORTAL_LINKS_EDIT_HEADER'	=> 'Edit link',
	'ACP_LINKS_EXPLAIN'			=> 'Links management displayed on the portal',
	'ACP_PORTAL_LINKS'			=> 'Link management',
	'ACTION'					=> 'Action',
	'ADD_URL'					=> 'Add a link',		
	'ADMIN'						=> 'Administrator',			
	'ALL'						=> 'All',
	'GUESTS'					=> 'Guests',
	'LINKS_ADDED'				=> 'Link successfully added',
	'LINKS_REMOVED'				=> 'Link successfully removed',			
	'LINKS_UPDATED'				=> 'Link uccessfully updated',
	'MOD'						=> 'Moderator',
	'MUST_SELECT_LINKS'			=> 'Select',
	'NAME_LINK'					=> 'Link name',
	'NAME_URL_EXPLAIN'			=> 'Link name displayed in portal links block',
	'NONE'						=> 'No display',
	'REG'						=> 'Registered',
	'RESET_LINKS'				=> 'Delete',		
	'STAFF'						=> 'Team',
	'URL_EXPLAIN'				=> 'Url of opening window',
	'URL_EXPLAIN_2'				=> 'The url can be written as followed. Example : <br>index.php for internal links, <br>http://google.com for external links',		
	'URL_IMG'					=> 'Icon url displayed in links blocks',	
	'URL_IMG_2'					=> 'Mini icon',		
	'URL_IMG_EXPLAIN'			=> 'Image Url displayed in links block',
	'URL_IMG_EXPLAIN2'			=> 'Click on the selected image',		
	'URL_LINK'					=> 'Link url',
	'VIEW_BY'					=> 'Visible by',
	'VIEW_BY_EXPLAIN'			=> 'Determines who can view the link on the portal',	
	'LINKS_FNAME_INFO'		    => 'Available mini icons',	
	'LINKS_FNAME_I_EXPLAIN'		=> 'Preview of available mini icons you can choose from (images have placed in folder /portal/images/icon_menu/ if you like to add more mini icons). Recommended icon size 16x16px.',	
	'LINKS_FNAME_I_CHOSEN'		=> 'Chosen mini image.',	
		
   ));

?>