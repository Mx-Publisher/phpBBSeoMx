<?php
/**
*
* groups [English]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 DualFusion - 2008 ..::Frans::..
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
	'ACP_WELCOME_PM'			=> 'Welcome PM on First Login',
	'ACP_WPM_SETTINGS'			=> 'Welcome PM Settings',

	'LOG_WPM_SETTINGS_UPDATED'	=> '<strong>Altered Welcome PM settings</strong>',

	'WPM_ALREADY_INSTALLED'	=> 'Welcome PM was already installed on your database!',
	'WPM_BOARD_CONTACT'		=> 'Board Contact',
	'WPM_BOARD_EMAIL'		=> 'Board Email',
	'WPM_BOARD_SIG'			=> 'Signature of the board',
	'WPM_CPF_VARS'			=> 'Custom Profile Fields Variables',
	'WPM_ENABLE'			=> 'Enable WPM',
	'WPM_ENABLE_EXPLAIN'	=> 'You may enable/disable this mod at any moment.',
	'WPM_ERROR_EMPTY'		=> 'Field <strong>%s</strong> may not be blank',
	'WPM_ERROR_USER'		=> 'Unknown username <strong>%s</strong> in username field',
	'WPM_ERROR_DB'			=> 'A problem occured while updating <strong>%s</strong>',
	'WPM_INSTALLED'			=> 'Welcome PM was installed successfully on your database!',
	'WPM_NOTIFY'			=> 'Notify',
	'WPM_NOTIFY_EXPLAIN'	=> 'To notify users of there new PM if you think they may not notice.',
	'WPM_PREDEFINED_VARS'	=> 'Predefined Variables',
	'WPM_SENDER'			=> 'Name of the sender',
	'WPM_SITE_NAME'			=> 'Site Name',
	'WPM_SITE_DESC'			=> 'Site Description',
	'WPM_SUBJECT_EXPLAIN'	=> 'The title of the message the user will recieve.',
	'WPM_TITLE'				=> 'Welcome PM on First Login',
	'WPM_TITLE_EXPLAIN'		=> 'Allows you to create a personalized Private Message. This message will be sent to all new users when they first login.',
	'WPM_UPDATED'			=> 'Welcome PM Settings changed',
	'WPM_USERNAME'			=> 'Username',
	'WPM_USERNAME_EXPLAIN'	=> 'The username of the user that will "send" the message.',
	'WPM_USER_ID'			=> 'User ID',
	'WPM_USER_IP'			=> 'User IP',
	'WPM_USER_EMAIL'		=> 'User Email',
	'WPM_USER_REGDATE'		=> 'Registration Date',
	'WPM_USER_LANG_EN'		=> 'Language (ENGLISH)',
	'WPM_USER_LANG_LOCAL'	=> 'Language (LOCAL)',
	'WPM_USER_TZ'			=> 'Timezone',
	'WPM_VAR_NAME'			=> 'Name',
	'WPM_VAR_VAR'			=> 'Variable',
	'WPM_VAR_EXAMPLE'		=> 'Example',
));
?>