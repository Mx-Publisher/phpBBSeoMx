<?php
/** 
*
* @name acp_portal_xl_forumadds.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_forumadds.php,v 1.2 2009/05/15 22:32:06 portalxl group Exp $
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
	'TITLE' 				=> 'Forum Advertisement management',
	'TITLE_EXPLAIN'			=> 'The forum advertisement\'s can be managed here. You can add as many advertisement\'s as you like to show in viewtopic, all entries will be displayed randomly.',

	'NEED_VALUES'  			=> 'You need to fill in <strong>all</strong> fields to proceed the advertisement.',
	'ADDED'  				=> 'The advertisement has been added to the database!',
	'UPDATED'  				=> 'The advertisement has been updated.',
	'DELETED' 	 			=> 'The advertisement was deleted successfully from the database!',
	'REALY_DELETE'  		=> 'Are you sure you want to delete the advertisement?',
	'MUST_SELECT_ADDS'		=> 'Selected adds',
	
	'ADDS'  				=> 'Advertisement',
	'NEW_AD' 				=> 'Add advertisement',
	'ADDS_NAME' 			=> 'Name',
	'ADDS_NAME_DESC' 		=> 'Name of the advertisement.',
	'ADDS_CODE' 			=> 'Ad\'s content',
	'ADDS_CODE_DESC' 		=> 'Content for use in the advertisement',
	'ADDS_FORUMS' 			=> 'Forums',
	'ADDS_FORUMS_DESC' 		=> 'Fill in the ID of the forum or forums that can show this advertisment, several forums must be separated by a comma.',
	'ADDS_FORUMS_DESCALL' 	=> 'Show in all Forums?',
	'ADDS_ACTIVE' 			=> 'Active',
	'ADDS_ACTIVE_DESC' 		=> 'Show the advertisement? ',
	'YES' 					=> 'Yes',
	'NO' 					=> 'No',
	'GUEST' 				=> 'Guest',
	'ADDS_VIEWS' 			=> 'Ad\'s views',
	'ADDS_ALL' 				=> 'All forums',
	'ADDS_SHOW' 			=> 'In forums',
	'ADDS_VIEWS_DESC' 		=> 'The counted amount of views for this advertisement. To reset this value type number 1 into the field and save.',
	'ADDS_MAX_VIEWS' 		=> 'Max views',
	'ADDS_MAX_VIEWS_DESC' 	=> 'The maximum amount of views for this advertisement',         
	'POSITION' 				=> 'Position',
	'POSITION_DESC' 		=> 'From which position should the advertisement to be displayed? ',
	'POSITION1' 			=> 'After the first post',
	'POSITION2' 			=> 'After each post',
	'POSITION3' 			=> 'Above the posts',
	'POSITION4' 			=> 'Under the posts',
	'ADDS_IN_SYSTEM' 		=> 'Ad\'s in the database',
	'ADDS_IN_SYSTEM_DESC' 	=> 'A list of ad\'s stored in database already',
	'SHOW_IN_ALL_FORUMS' 	=> 'Show in all Forums?',
	'ADD_ADVERTISEMENT'		=> 'Add a advertisement',		
	'RESET_ADDS'			=> 'Reset',		
	'ADD_ADDS'				=> 'Add advertisement',		

	));

?>