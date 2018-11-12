<?php
/** 
*
* @name acp_portal_xl_acronyms.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_acronyms.php,v 1.2 2009/05/15 22:32:06 portalxl group Exp $
*
* @copyright (c) 2007, 2011 PortalXL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
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
	'TITLE' 					=> 'Acronym and abbreviation management',
	'TITLE_EXPLAIN'				=> 'From this form, you can create/edit/delete acronyms. Acronyms and initialisms are abbreviations, such as <strong>NATO</strong>, <strong>laser</strong>, and <strong>IBM</strong>, that are formed using the initial letters of words or word parts in a phrase or name. Acronyms and initialisms are usually pronounced in a way that is distinct from that of the full forms for which they stand: as the names of the individual letters (as in <em><strong>IBM</strong></em>), as a word (as in <em><strong>NATO</strong></em>), or as a combination (as in <em><strong>IUPAC</strong></em>). You can add as many acronyms as you like to process.',
 
	'PORTAL_ACRONYMS_EDIT_HEADER'	=> 'Adding or editing a acronym',
	'ACP_MANAGE_ACRONYM'			=> 'Add or edit acronyms',
	'ACP_ACRONYM_EXPLAIN'			=> 'Acronyms management',
	'ADD_ACRONYM'					=> 'Add acronym',
	'DESCRIPTION'					=> 'Acronym',
	'DESCRIPTION_INFO'				=> 'Acronym phrase',
	'DESCRIPTION_EXPLAIN'			=> 'Phrase output of the above acronym.',
	'MUST_SELECT_ACRONYM'			=> 'Selected acronym',
	'ACRONYM'						=> 'Acronyms in database',
	'ACRONYM_INFO'					=> 'Acronym',
	'ACRONYM_EXPLAIN'				=> 'Initial letters of words or word parts of your acronym goes inhere',
	'ACRONYM_ADDED'					=> 'Acronym successfully added',
	'ACRONYM_DISABLE_EXPLAIN2'		=> 'You can enable or disable the Block display on the forum : ',
	'ACRONYM_REMOVED'				=> 'Acronym successfully removed',
	'ACRONYM_UPDATED'				=> 'Acronym successfully edited',
	'RESET_ACRONYM' 				=> 'Reset',
	'BLOCK_ACRONYM_SETTINGS'		=> 'General acronym settings',
	'ACRONYM_ALLOW'					=> 'Acromyms boadwide enabled?',
	'ACRONYM_ACTIVE'				=> 'Allow acronyms',
	'ACRONYM_ACTIVE_EXPLAIN'		=> 'Activate acronyms boardwide Yes/No?',	
	'ACRONYM_URL'					=> 'Link url',
	'ACRONYM_URL_INFO'				=> 'Url to link to',
	'ACRONYM_URL_EXPLAIN'			=> 'Ad here a link the acronym should point to.',
));

?>