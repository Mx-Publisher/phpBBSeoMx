<?php
/** 
*
* @name acp_portal_xl_blocks.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_blocks.php,v 1.3 2009/10/17 portalxl group Exp $
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
	'TITLE_BLOCKS'						=> 'Block management portal',
	'TITLE_BLOCKS_EXPLAIN'				=> 'From this form, you can create/edit/move/delete Blocks and Block Items on the portal view. All directions are allowed to move your block into. There are five columns available to place your Block in, top, left, center, right and bottom. The positions of different blocks below have the same arrangement, as you will see on your portal page. Both parts of the block management using the same blocks are apart from each other, so you are able to have a different look and feel on portal and index/viewforum.',
  	'TITLE_BLOCKS_COLUMN_EXPLAIN'		=> 'Left and right column width settings. Here you can change your left and right column width information of portal\'s main page.',

	'TITLE_BLOCKS_INDEX' 				=> 'Block management index/viewforum/viewtopic',
	'TITLE_BLOCKS_INDEX_EXPLAIN'		=> 'From this form, you can create/edit/move/delete Blocks and Block Items to the index/viewforum/viewtopic view. All directions are allowed to move your block into. There are five columns available to place your Block in, top, left, center, right and bottom. The positions of different blocks below have the same arrangement, as you will see on your index/viewforum/viewtopic page. Both parts of the block management using the same blocks are apart from each other, so you are able to have a different look and feel on portal and index/viewforum/viewtopic. <br /><br /><strong style="text-transform: uppercase;">Note:</strong> Keep in mind <strong>not</strong> to remove <strong>center_forumblock.html</strong> from the block management; otherwise, no forums will be visible to choose from on the index page!',
 	'TITLE_BLOCKS_INDEX_COLUMN_EXPLAIN'	=> 'Left and right column width settings. Here you can change your left and right column width information of portal\'s index/viewforum/viewtopic page.',

	'TITLE_PAGES' 						=> 'Pages management portal',
	'TITLE_PAGES_EXPLAIN'				=> 'From this form, you can create/edit/move/delete Pages and Page Items on the portal pages view. All directions are allowed to move your page into. There are five columns available to place your Page in, top, left, center, right and bottom. The positions of different pages below have the same arrangement, as you will see on your portal pages page.',
  	'TITLE_PAGES_COLUMN_EXPLAIN'		=> 'Left and right column width settings. Here you can change your left and right column width information of portal\'s main page.',

	'BLOCK_EDIT_HEADER'					=> 'Edit/create a block',
	'BLOCK_EDIT_HEADER_MAIN'			=> 'Main block management',
	'BLOCK_COLUMN_SETTINGS'				=> 'Column width',
	'BLOCK_EDIT_COLUMN_SETTINGS'		=> 'Edit/change a column width',

	'ADD_BLOCK'							=> 'Add Block',
	'CANCEL'							=> 'Cancel',	
	'PIXEL'								=> 'Pixel',
	'BLOCK_ACTIV'						=> 'Block Activation',
	'BLOCK_ACTIVE'						=> 'Activate',
	'BLOCK_ACTIV_EXPLAIN'				=> 'Display this block Yes/No?',	
	'BLOCK_CENTRE'						=> 'Unavailable',
	'BLOCK_HTML'						=> 'Html file',
	'BLOCK_HTML_EXPLAIN'				=> 'Select a pre-defined block (*.html file) for block use.',		
	'BLOCK_NAME'						=> 'Name of block',
	'BLOCK_NAME_EXPLAIN'				=> 'Unique name for your block. This name will be displayed in Title of your block on the portal\'s frontpage.',	
	'BLOCK_ORD'							=> 'Order',	
	'BLOCK_ORDER'						=> 'Order',
	'BLOCK_POS'							=> 'Position',
	'BLOCK_REMOVED'						=> 'Block sucessfully deleted',
	'BLOCK_UPDATED'						=> 'Successfully updated',
	'BLOCK_ADDED'						=> 'Successfully added',
	'BLOCK_CENTER'						=> 'Center position',	
	'BLOCK_BOTTOM'						=> 'Bottom position',
	'BLOCK_DISABLE_EX'					=> 'Block deactivated',	
	'BLOCK_RIGHT'						=> 'Right position',
	'BLOCK_LEFT'						=> 'Left position',
	'BLOCK_TOP'						    => 'Top position',
	'BLOCK_NAME_EDIT'					=> 'Edit block',
	'BLOCK_ORD'							=> 'Order:',	
	'BLOCK_ORD_EXPLAIN'					=> 'Define to which column this block should be added to. Possible options are top, left, center, right and bottom.',	
	'BLOCK_POSITION'					=> 'Last position',	
	'BLOCK_POSITION_EXPLAIN'			=> 'Select as for here above column',	
	'DISABLE_BLOCK'						=> 'Enable block',
	'ENABLE_BLOCK'						=> 'Disable block',
	'ICON_DELETE'						=> 'Deleting of own made block is allowed, pre-defined blocks cannot be deleted.',
	'ICON_EDIT'							=> 'Editing of own made blocks are allowed, pre-defined blocks cannot be edited.',
	'ICON_MOVE_BOTTOM'					=> 'Move down the block into the lower column',
	'ICON_MOVE_BOTTOM_DIRECT'			=> 'Move down the block directly to the bottom column',	
	'ICON_MOVE_DOWN'					=> 'Move down the block one row',
	'ICON_MOVE_LEFT'					=> 'Move the block into the column on its left',	
	'ICON_MOVE_LEFT_DIRECT'				=> 'Move the block directly into the most left column',	
	'ICON_MOVE_RIGHT'					=> 'Move the block in the column on its right',
	'ICON_MOVE_RIGHT_DIRECT'			=> 'Move the block directly into the most right column',	
	'ICON_MOVE_TOP'						=> 'Move up the block into the upper column',
	'ICON_MOVE_TOP_DIRECT'				=> 'Move up the block directly into the top column',
	'ICON_MOVE_UP'						=> 'Move up the block one row',
	'OPEN_ICON_PREVIEW'					=> 'Open icon preview',	
	'CLOSE_ICON_PREVIEW'				=> 'Close icon preview',
	'MUST_SELECT_BLOCK'					=> 'Selection error',
	'OFFLIGNE'							=> 'Block is deactivated, to activate click the icon',
	'ONLIGNE'							=> 'Block is activated, to deactivate click the icon',
	'RESET_INCLUDE_BLOCK'				=> 'Delete',
	'SUBMIT_INCLUDE_BLOCK'				=> 'Save',
	'PERMISSION' 						=> 'Block permissions',
	'PERMISSION_EXPLAIN' 				=> 'Set who can see the block:',
	'ADMIN'								=> 'Administrator',			
	'ALL'								=> 'All',
	'GUESTS'							=> 'Guests',
	'MOD'								=> 'Moderator',
	'NONE'								=> 'No display',
	'REG'								=> 'Registered',
	'STAFF'								=> 'Team',
	'URL_IMG_EXPLAIN'					=> 'Image Url displayed in Menu links',
	'URL_IMG_EXPLAIN2'					=> 'Click on the selected image',		
	'BLOCK_FNAME_INFO'		    		=> 'Available mini icons',	
	'BLOCK_FNAME_I_EXPLAIN'				=> 'Preview of available mini icons you can choose from (images have placed in the folder /portal/images/icon_menu/ if you would like to add more mini icons). Recommended icon size is 16x16px.',	
	'BLOCK_FNAME_I_CHOSEN'				=> 'Chosen mini image.',	
    'CONFIG_UPDATED'					=> 'Configuration updated successfully.',
    'CONFIG_ADDED'						=> 'Configuration added successfully.',

	'DELETE'							=> 'Deletet block',
	'EDIT'								=> 'Edit block',
	'MOVE_BOTTOM'						=> 'Move down one step to lower column',
	'MOVE_BOTTOM_DIRECT'				=> 'Move down directly to bottom column',	
	'MOVE_DOWN'							=> 'Move down the block one row',
	'MOVE_LEFT'							=> 'Move to column on its left',	
	'MOVE_LEFT_DIRECT'					=> 'Move directly to the most left column',	
	'MOVE_RIGHT'						=> 'Move to column on its right',
	'MOVE_RIGHT_DIRECT'					=> 'Move directly to the most right column',	
	'MOVE_TOP'							=> 'Move up one step to the upper column',
	'MOVE_TOP_DIRECT'					=> 'Move up directly to the top column',
	'MOVE_UP'							=> 'Move up one row',

	'BLOCK_CONTENT'						=> 'Content',	
	'BLOCK_CONTENT_EXPLAIN'				=> 'Content of the custom block goes inhere. <br /><br /> If you use this field to customize your portal block you must choose <strong>blank_custom_block.html</strong> as Html file from the drop down option below to display the content in a block. <strong>blank_custom_block.html</strong> can be chosen as often as you need.',
	
   'ACP_PORTAL_COLLUMN_WIDTH_INFO'              => 'Portal Collumn width',
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS'          => 'Left and right column width settings',	
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS_EXPLAIN'  => 'Here you can change your left and right column width information of portals page.',
	
   'PORTAL_LEFT_COLLUMN_WIDTH'                 	=> 'Left column width',
   'PORTAL_LEFT_COLLUMN_ACTIVE'                 => 'Left column active',
   'PORTAL_LEFT_COLLUMN_ACTIVE_EXPLAIN'         => 'Enable/Disable left portal column Yes/No?',
   'PORTAL_LEFT_COLLUMN_WIDTH_EXPLAIN'          => 'Change the width of left portal column in pixel, recommended value 180',
   
   'PORTAL_RIGHT_COLLUMN_WIDTH'                 => 'Right column width',
   'PORTAL_RIGHT_COLLUMN_ACTIVE'                => 'Right column active',
   'PORTAL_RIGHT_COLLUMN_ACTIVE_EXPLAIN'        => 'Enable/Disable right portal column Yes/No?',
   'PORTAL_RIGHT_COLLUMN_WIDTH_EXPLAIN'         => 'Change the width of right portal column in pixel, recommended value 180',
   
   'PORTAL_LAYOUT'                 				=> 'Portal Layout',
   'PORTAL_LAYOUT_ACTIVE'                		=> 'Display column layout on portal',
   'PORTAL_LAYOUT_EXPLAIN'        				=> 'This main switch is able to switch on/off the left and right columns by one click without the use of the options below, center column will resize. <br /> Enable/Disable Yes/No?',

   'PORTAL_INDEX_LAYOUT'                 		=> 'Index Layout',
   'PORTAL_INDEX_LAYOUT_ACTIVE'                	=> 'Display column layout on index/viewforum/viewtopic',
   'PORTAL_INDEX_LAYOUT_EXPLAIN'        		=> 'This main switch is able to switch on/off the left and right columns by one click without the use of the options below, center column will resize. <br /> Enable/Disable Yes/No?',
   
   'PORTAL_PAGES_LAYOUT'                 		=> 'Pages Layout',
   'PORTAL_PAGES_LAYOUT_ACTIVE'                	=> 'Display column layout on portal pages',
   'PORTAL_PAGES_LAYOUT_EXPLAIN'        		=> 'This main switch is able to switch on/off the left and right columns by one click without the use of the options below, center column will resize. <br /> Enable/Disable Yes/No?',

   'PORTAL_PAGES_PAGE_ACTIVE'        			=> 'Single page display',
   'PORTAL_PAGES_PAGE_ACTIVE_EXPLAIN'        	=> 'This switch is able to switch on/off the single page view option. If set to Yes one single page will be shown instead of the known column lay-out. If more than one page is created using block "Portal pages" they will be grouped together and paginated. You will be able to view pages page by page. All other blocks are closed out here. <br /> Enable/Disable Yes/No?',
   'PORTAL_PAGES_PAGE_ACTIVE_NUMBER'        	=> 'Active page',
   'PORTAL_PAGES_PAGE_ACTIVE_NUMBER_EXPLAIN'    => 'Specify a page ID here. This page will be displayed in first position. Combination of centre column and block name "Portal pages" will be count in only. All other blocks will be ignored. Do not leave this field empty, 0 is required than. Pages will be paginated if more than one is available.',
   'PAGES_PAGE_ACTIVE'        					=> 'Singel page active',
   'PAGES_PAGE_ACTIVE_NUMBER'        			=> 'Single page active block ID',
   'BLOCK_EDIT_PAGES_SETTINGS'        		    => 'Single page options',

));

?>