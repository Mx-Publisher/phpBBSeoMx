<?php
/** 
*
* @name acp_portal_xl_mods.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_mods.php,v 1.2 2009/05/15 22:32:06 portalxl group Exp $
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
	'TITLE' 					=> 'Manage Mod\'s Database',
	'TITLE_EXPLAIN'				=> 'From this form you can maintain your Mod\'s Database, create/edit/delete Mod\'s from here.',
 
	'PORTAL_MOD_EDIT_HEADER'	=> 'Adding or editing a mod',
	'ACP_MANAGE_MOD'			=> 'Add or edit mod\'s',
	'ACP_MOD_EXPLAIN'			=> 'Mod\'s management',
	'ADD_MOD'					=> 'Add mod',
	'DISABLE'					=> '<b>Block enabled</b>',
	'DISABLE_BLOCK'				=> 'Enable',
	'ENABLE'					=> '<b>Block disabled</b>',
	'ENABLE_BLOCK'				=> 'Disable',
	'MUST_SELECT_MOD'			=> 'Selected mod',
	'MOD'						=> 'Mod\'s in database',
	'MOD_INFO'					=> 'Mod',
	'MOD_EXPLAIN'				=> 'Text of your Mod goes inhere',
	'MOD_ADDED'					=> 'Mod successfully added',
	'MOD_DISABLE'				=> '<b>Enable</b>',
	'MOD_DISABLE_EXPLAIN'		=> '<b>Enable :</b><br>Block display on the forum.',
	'MOD_DISABLE_EXPLAIN2'		=> 'You can enable or disable the Block display on the forum : ',
	'MOD_REMOVED'				=> 'Mod successfully removed',
	'MOD_UPDATED'				=> 'Mod successfully edited',
	'RESET_MOD' 				=> 'Reset',
	'MOD_EDIT'					=> 'Edit Mod\'s',
	'MOD_EDIT_EXPLAIN'			=> 'Here you can add or edit an existing Mod entry. The Title and version number are required. You will also be able to enter details of where the Mod can be downloaded from and where the Mod itself can be found.',
	'MOD_TITLE'					=> 'Mod Title',
	'MOD_TITLE_EXPLAIN'			=> 'Short but descriptive title of the Mod.',
	'MOD_VERSION'				=> 'Version',
	'MOD_VERSION_EXPLAIN'		=> 'Version number eg. 0.4B5',
	'MOD_VERSION_TYPE'			=> 'Version Type',
	'MOD_VERSION_TYPE_EXPLAIN'	=> 'Alpha, Beta, Dev or RC*',
	'MOD_DESC'					=> 'Description',
	'MOD_DESC_EXPLAIN'			=> 'Description of your Mod goes inhere. A clear description can be taken from a mod\'s install description most of the time.',
	'MOD_AUTHOR'				=> 'Author',
	'MOD_AUTHOR_EXPLAIN'		=> 'Name of the original author, place Unknown if not known',
	'MOD_URL'					=> 'URL',
	'MOD_URL_EXPLAIN'			=> 'Specify a site URL for this modification (link to mod -description or -topic).',
	'MOD_DOWNLOAD'				=> 'Download',
	'MOD_DOWNLOAD_EXPLAIN'		=> 'Specify a download URL for this modification (direct link to download from).',

));

?>