<?php
/** 
*
* @name acp_portal_xl_banners.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_banners.php,v 1.3 2009/10/18 portalxl group Exp $
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
	'TITLE_PARTNERS' 				=> 'Partners management 88x31px',
	'TITLE_PARTNERS_EXPLAIN'		=> 'From this form you can create/edit/delete a partners Items.<br /> Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/" for a external link. Internal links to banners can be added like "portal/images/banners/88x31/yourdomain.com.gif". Max image size 88x31 pixel, bigger images will be resized to that value in the portal block. You can add as much partners as you like to show in this block, set your limit for random display of the logo\'s below.',
 
 	'TITLE_HO' 						=> 'Banners management horizontal 400x60px',
	'TITLE_HO_EXPLAIN'				=> 'From this form, you can create/edit/delete a banners Items. <br /> Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/", like "portal/images/banners/400x60/yourdomain.com.gif" for horizontal banners. Max image size 400x60px, bigger images will be resized to that value. You can add as many banners as you like to show in this block, there is a limit for random display of 1 logo set. <br /><br />ACP view of banners is resized to half of the real size.',

	'TITLE_VE' 						=> 'Banners management vertical 130x600px',
	'TITLE_VE_EXPLAIN'				=> 'From this form, you can create/edit/delete a banners Items. <br /> Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/", like "portal/images/banners/130x600/yourdomain.com.gif" for vertical banners. Max image size 130x600px, bigger images will be resized to that value in the portal block. You can add as many banners as you like to show in this block, there is a limit for random display of 1 logo set. <br /><br />ACP view of banners is resized to half of the real size.',
	
	'PORTAL_PARTNERS_EDIT_HEADER'	=> 'Adding or editing a partner',
	'ACP_MANAGE_PARTNERS'			=> 'Add or edit partner',	
	'ACP_PARTNERS'					=> 'Partners management ',
	'ACP_PARTNERS_EXPLAIN'			=> 'Add, edit, delete a partner',
	'ADD_PARTNERS'					=> 'Add partner',
	'MUST_SELECT_PARTNERS'			=> 'Selected partner',
	'PARTNERS'						=> 'Partners',	
	'PARTNERS_ADDED'				=> 'Partner successfully added',
	'PARTNERS_DESCRIPTION'			=> 'Description',	
	'PARTNERS_DESCRIPTION_EXPLAIN'	=> 'Partner description such as main directive or thema of that site.',
	'PARTNERS_IMG'			        => 'Logo url',
	'PARTNERS_IMG_EXPLAIN'			=> 'Partner Logo url, Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/"',
	'PARTNERS_LOGO'					=> 'Logo (88x31px)',
	'PARTNERS_REMOVED'				=> 'Partner successfully removed',
	'PARTNERS_UPDATED'				=> 'Partner successfully edited',
	'PARTNERS_URL'					=> 'Site url',	
	'PARTNERS_URL_EXPLAIN'			=> 'Partner Site url, Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/"',
	'RESET_PARTNERS' 				=> 'Reset',

	'PORTAL_PARTNERS_DISPLAY' 			=> 'Random display value',
	'PORTAL_PARTNERS_DISPLAY_EXPLAIN' 	=> 'Set how many banners will be shown in this block by random.',
	'PORTAL_PARTNERS_DISPLAY_VALUE' 	=> 'Displayed simultaneously banners',
	
	'PORTAL_BANNERS_EDIT_HEADER'	=> 'Adding or editing a banner',
	'ACP_MANAGE_BANNERS'			=> 'Add or edit banner',	
	'ACP_BANNERS'					=> 'Banners management ',
	'ACP_BANNERS_EXPLAIN'			=> 'Add, edit, delete a banner',
	'ADD_BANNERS'					=> 'Add banner',
	'MUST_SELECT_BANNERS'			=> 'Selected banner',
	'BANNERS'						=> 'Banners',	
	'BANNERS_ADDED'					=> 'Banner successfully added',
	'BANNERS_DESCRIPTION'			=> 'Description',	
	'BANNERS_DESCRIPTION_EXPLAIN'	=> 'Banner description such as main directive or theme of that site.',
	'BANNERS_IMG_EXPLAIN'			=> 'Banner Logo url, Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/"',
	'BANNERS_REMOVED'				=> 'Banner successfully removed',
	'BANNERS_UPDATED'				=> 'Banner successfully edited',
	'BANNERS_URL'					=> 'Site url',	
	'BANNERS_URL_EXPLAIN'			=> 'Banner Site url, Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/"',
	'RESET_BANNERS' 				=> 'Reset',
	
	'BANNERS_IMG_HO'			    => 'Logo url horizontal 400x60px',
	'BANNERS_LOGO_HO'				=> 'Logo (400x60px)',

	'BANNERS_IMG_VE'			    => 'Logo url vertical 130x600px',
	'BANNERS_LOGO_VE'				=> 'Logo (130x600px)',
	
));

?>