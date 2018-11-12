<?php
/** 
*
* @name acp_portal_xl_quotes.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_quotes.php,v 1.2 2009/05/15 22:32:06 portalxl group Exp $
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
	'TITLE' 					=> 'Quotation management',
	'TITLE_EXPLAIN'				=> 'From this form, you can create/edit/delete Quotes. You can add as many quotations as you like to show in this block, but there is a limit for random display of 1 quote set.',
 
	'PORTAL_QUOTES_EDIT_HEADER'	=> 'Adding or editing a quote',
	'ACP_MANAGE_QUOTE'			=> 'Add or edit quotes',
	'ACP_QUOTE_EXPLAIN'			=> 'Quotes management',
	'ADD_QUOTE'					=> 'Add quote',
	'AUTHOR'					=> 'Author',
	'AUTHOR_INFO'				=> 'Author',
	'AUTHOR_EXPLAIN'			=> 'Name of the original author, place Unknown if not known.',
	'DISABLE'					=> '<b>Block enabled</b>',
	'DISABLE_BLOCK'				=> 'Enable',
	'ENABLE'					=> '<b>Block disabled</b>',
	'ENABLE_BLOCK'				=> 'Disable',
	'MUST_SELECT_QUOTE'			=> 'Selected quote',
	'QUOTE'						=> 'Quotations in database',
	'QUOTE_INFO'				=> 'Quotation',
	'QUOTE_EXPLAIN'				=> 'Text of your quotation goes inhere',
	'QUOTE_ADDED'				=> 'Quote successfully added',
	'QUOTE_DISABLE'				=> '<b>Enable</b>',
	'QUOTE_DISABLE_EXPLAIN'		=> '<b>Enable :</b><br>Block display on the forum.',
	'QUOTE_DISABLE_EXPLAIN2'	=> 'You can enable or disable the Block display on the forum : ',
	'QUOTE_REMOVED'				=> 'Quote successfully removed',
	'QUOTE_UPDATED'				=> 'Quote successfully edited',
	'RESET_QUOTE' 				=> 'Reset',

));

?>