<?php
/** 
*
* @name acp_portal_xl_newsfeeds.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl_newsfeeds.php,v 1.2 2009/05/15 22:32:06 portalxl group Exp $
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
	'TITLE' 					=> 'Manage RSS Feed\'s Database',
	'TITLE_EXPLAIN'				=> 'From this form you can maintain your RSS Feed\'s Database, create/edit/delete rivers of news Feed\'s from here to show on portal\'s page.',
 
	'PORTAL_FEED_EDIT_HEADER'	=> 'Adding or editing a mod',
	'ACP_MANAGE_FEED'			=> 'Add or edit mod\'s',
	'ACP_FEED_EXPLAIN'			=> 'Feed\'s management',
	'ADD_FEED'					=> 'Add mod',
	'DISABLE'					=> '<b>Block enabled</b>',
	'DISABLE_BLOCK'				=> 'Enable',
	'ENABLE'					=> '<b>Block disabled</b>',
	'ENABLE_BLOCK'				=> 'Disable',
	'MUST_SELECT_FEED'			=> 'Selected mod',
	'FEED'						=> 'Feed\'s in database',
	'VISIT_FEED'				=> 'Subscribe to feed',
	'FEED_INFO'					=> 'Feed',
	'FEED_EXPLAIN'				=> 'Text of your Feed goes inhere',
	'FEED_ADDED'				=> 'Feed successfully added',
	'FEED_REMOVED'				=> 'Feed successfully removed',
	'FEED_UPDATED'				=> 'Feed successfully edited',
	'RESET_FEED' 				=> 'Reset',
	'FEED_EDIT'					=> 'Edit Feed\'s',
	'FEED_EDIT_EXPLAIN'			=> 'Here you can add or edit an existing Feed entry. The Title and version number are required. You will also be able to enter details of where the Feed can be downloaded from and where the Feed itself can be found.',
	'FEED_TITLE'				=> 'Feed Title',
	'FEED_TITLE_EXPLAIN'		=> 'Short but descriptive title of the Feed.',
	'FEED_SHOW'					=> 'Show Yes/No?',
	'FEED_URL'					=> 'Feed URL',
	'FEED_URL_EXPLAIN'			=> 'Specify a site URL for this feed (link to feed -description or -topic).',
	'FEED_POSITIONS'			=> 'Position',
	'FEED_POSITION'				=> 'Show this feed on which position?',
	'FEED_POSITION_EXPLAIN'		=> 'Specify on wich side of the RSS block this entry will appear.',
	'LEFT'						=> 'Left',
	'RIGHT'						=> 'Right',
	'NOT_SET'					=> 'Not set',
	'FEED_CACHE_TIME'			=> 'Cache time',
	'FEED_CACHE_TIME_EXPLAIN'	=> 'Maximum age of the cache file for a feed before it is updated, in seconds (default is 1 hour = 60 minutes = 3600 seconds).',
	'CACHE_TIME'				=> 'seconds',
	'FEED_ITEMS_LIMIT'			=> 'Items limit',
	'FEED_ITEMS_LIMIT_EXPLAIN'	=> 'Maximum items/rows to show for a single feed.',
	'ITEMS_LIMIT'				=> 'rows',
	'FEED_RANDOM_LIMIT'			=> 'Random limit',
	'FEED_RANDOM_LIMIT_EXPLAIN'	=> 'Maximum feeds to randomize in the block.',
	'RANDOM_LIMIT'				=> 'feeds',
	'BLOCK_FEED_SETTINGS'		=> 'General feeds settings',

));

?>