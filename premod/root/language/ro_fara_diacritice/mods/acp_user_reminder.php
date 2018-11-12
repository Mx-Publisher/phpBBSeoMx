<?php
/** 
*
* acp_user_reminder [English]
*
* @package language
* @version $Id: acp_user_reminder.php 228 2009-05-21 10:09:57Z lefty74 $
* @copyright (c) 2008 lefty74
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}


/**
* DO NOT CHANGE
*/
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

// Announcement  settings
$lang = array_merge($lang, array(
	'TITLE'											=> 'User Reminder',
	'TITLE_EXPLAIN'									=> 'Here you will be able to remind your users that have been not been active on your board',

	//Configuration text
	'GENERAL_CONFIGURATION' 						=> 'General Configuration',
	'CATEGORY_CONFIGURATION' 						=> 'Category Configuration',
	'LOGGING_CONFIGURATION' 						=> 'Logging Configuration',
	'USER_REMINDER_ENABLE'							=> 'Enable automatic reminders',
	'USER_REMINDER_ENABLE_EXPLAIN'					=> 'Main button to enable/disable automatic reminders. Categories can be set to automatic / manual indiviudally further down below',
	'USER_REMINDER_BCC_EMAIL_ADDRESS'				=> 'Blind copy email address',
	'USER_REMINDER_BCC_EMAIL_ADDRESS_EXPLAIN'		=> 'Enter an email address that receives a blind copy of every reminder. Leave blank to disable.',
	'USER_REMINDER_IGNORE_NO_EMAIL'					=> 'Ignore users ’Don’t get info from Admins’ choice',
	'USER_REMINDER_IGNORE_NO_EMAIL_EXPLAIN'			=> 'Yes will override the user’s choice in case he or she opted not to receive information from Administrators',
	'USER_REMINDER_PROTECTED_USERS'					=> 'Protected users',
	'USER_REMINDER_PROTECTED_USERS_EXPLAIN'			=> 'A list of user_id’s which are protected from receiving reminders. You can also remove protection from users in the Protected Users tab.<br /><br />IMPORTANT! If you add or remove user id’s here, make sure they are separated by a comma.',
	'USER_REMINDER_PROTECTED_GROUPS'				=> 'Protected Groups',
	'USER_REMINDER_PROTECTED_GROUPS_EXPLAIN'		=> 'Select here the groups you would like to protect from receiving reminders. <br /><br />IMPORTANT! You will <b>not</b> be able to remove protection from users in these groups via the Protected Users tab. The only way is by deselecting the group here. <br /><br />To deselect all groups, select <em>No Groups selected</em>',
	'USER_REMINDER_DELETE_CHOICE'					=> 'Choice when deleting users',
	'USER_REMINDER_DELETE_CHOICE_EXPLAIN'			=> 'In case you delete users, choose here the way the user(s) are deleted',
	'USER_REMINDER_ZERO_POSTER_ENABLE'				=> 'Remind Zero posters',
	'USER_REMINDER_ZERO_POSTER_DAYS'				=> 'Number of days after registration to send reminder',
	'USER_REMINDER_ZERO_POSTER_DAYS_EXPLAIN'		=> 'If set to automatic, reminder will be sent after x days of registration',
	'USER_REMINDER_INACTIVE_ENABLE'					=> 'Remind inactive users',
	'USER_REMINDER_INACTIVE_DAYS'					=> 'Number of days after last login to send reminder',
	'USER_REMINDER_INACTIVE_DAYS_EXPLAIN'			=> 'If set to automatic reminder will be sent after x days of last login',
	'USER_REMINDER_NOT_LOGGED_IN_ENABLE'			=> 'Remind activated but never logged in users',
	'USER_REMINDER_NOT_LOGGED_IN_DAYS'				=> 'Number of days to send reminder after activated (but never logged in)',
	'USER_REMINDER_NOT_LOGGED_IN_DAYS_EXPLAIN'		=> 'If set to automatic a reminder will be sent after x days of activation',
	'USER_REMINDER_INACTIVE_STILL_ENABLE'			=> 'Remind user a second time',
	'USER_REMINDER_INACTIVE_STILL_ENABLE_EXPLAIN'	=> 'This will send another reminder to the user if there was no reaction to a previous reminder',
	'USER_REMINDER_USERS_PER_PAGE'					=> 'Users displayed per page',
	'USER_REMINDER_USERS_PER_PAGE_EXPLAIN'			=> 'Indicate how many users should be displayed per page. If left at 0, the Topics per page board value will be used, i.e. %d.',
	'USER_REMINDER_LOGGING_OPTIONS'					=> 'Logging the following actions',
	'USER_REMINDER_LOGGING_OPTIONS_EXPLAIN'			=> 'Select which additional logging actions should be recorded.',
	'USER_REMINDER_LOG_OPT_SCRIPT'					=> 'Running of the Automatic Reminder script',
	'USER_REMINDER_LOG_OPT_USERS_REACT'				=> 'Users reacting to reminders, i.e. clearing the reminders',
	'USER_REMINDER_LOG_OPT_AUTO_EMAILS'				=> 'Logging of automatic emails sent out to users',
	'USER_REMINDER_INACTIVE_STILL_OPTIONS'			=> 'Second Reminders are based on',
	'USER_REMINDER_INACTIVE_STILL_OPTIONS_EXPLAIN'	=> 'This is the base the second reminder is sent on, e.g. if zero posters is ticked, the second reminder will only be sent to zero posters. If no boxes are ticked, it defaults to the same as if all boxes were ticked.',
	'USER_REMINDER_INACTIVE_STILL_DAYS'				=> 'Number of days to send second reminder after first reminder',
	'USER_REMINDER_INACTIVE_STILL_DAYS_EXPLAIN'		=> 'If set to automatic, a reminder will be sent after x days of the first reminder. If more than one box is ticked in the above options, the second reminder is based on x days of the first reminder sent, e.g. if zero posters and inactive users are ticked, whichever reminder of those two was sent out first to the user is the base of the x days for the 2nd reminder',

	'YES'			=> 'Yes',
	'NO'			=> 'No',
	'MANUAL'		=> 'Manual',
	'AUTOMATIC'		=> 'Automatic',
	
	'UR_NONE_SELECTED'		=> 'No Groups selected',
	
	// Titles and Explanations of the ACP sections
	'ZERO_POSTS_TITLE'				=> 'Zero Posters',
	'ZERO_POSTS_TITLE_EXPLAIN'		=> 'Below is a list of users that still have zero posts and have registered over %d days ago. You can also see if the user has received already reminder(s). You are also able to send Zero Poster reminders from here or delete those reminders of users via the dropdown field',
	'INACTIVE_TITLE'				=> 'Inactive Users',
	'INACTIVE_TITLE_EXPLAIN'		=> 'Below is a list of users that have not logged in for more then %d days. You can also see if the user has received already reminder(s). You are also able to send Inactive User reminders from here or delete those reminders of users via the dropdown field. The amount of users posts are shown in brackets.',
	'NOT_LOGGED_IN_TITLE'			=> 'Activated users but never logged in',
	'NOT_LOGGED_IN_TITLE_EXPLAIN'	=> 'Below is a list of users that have activated accounts but never actually logged in after activation. You can also see if the user has received already reminder(s). You are also able to send Never Logged In reminders from here or delete those reminders of users via the dropdown field',
	'INACTIVE_STILL_TITLE'			=> '2nd Reminders',
	'INACTIVE_STILL_TITLE_EXPLAIN'	=> 'Below is a list of users that have not acted on the earliest reminder (depending on configuration setting: Zero Poster, Inactive or Not Logged In) received which was sent more than %d days ago. You are also able to send 2nd reminders from here or delete 2nd reminders of users via the dropdown field. The amount of users posts are shown in brackets.',
	'PROTECTED_USERS_TITLE'			=> 'Protected Users',
	'PROTECTED_USERS_TITLE_EXPLAIN'	=> 'Below is a list of users that have been selected not to receive reminders. If you would like to stop reminder protection, you can deselect those users that were indiviudally protected here via the dropdown field or via the main configuration page. Reminder protection for users in protected groups can be stopped via the main configuration page.',
	'NON_EMAIL_RECEIVERS_EXPLAIN'	=> '(x) indicates user has set ’Administrators can e-mail me information:’ to NO',
	'USERS_IN_GROUP_EXPLAIN'		=> '[x] indicates user is in a protected usergroup. Remove from protected list option will not remove user from this list!',

	// Row Titles
	'USER_POSTS'				=> 'Posts',
	'USER_LASTVISIT'			=> 'Last Visit',
	'USER_REGDATE'				=> 'Registration',
	'REMINDED_POSTS'			=> 'Reminded <br /> Zero Posts',
	'REMINDED_INACTIVE'			=> 'Reminded <br /> Inactive',
	'REMINDED_NOT_LOGGED_IN'	=> 'Reminded <br /> Not Logged In',
	'REMINDED_INACTIVE_STILL'	=> 'Reminded <br /> 2nd Reminder',

//	'TIME_SPENT'	=> '%d month(s), %d day(s) ago',
	'TIME_SPENT'	=> '%s day(s) ago',
	'TOTAL_USERS'	=> '%1$s out of %2$s Users ',
	'TOTAL_USERS_PCT'	=> '(%.2f%% of all Users)',

	'NO_USERS_FOUND'	=> 'No Users Found',	
	
	//ACP Config/Trigger confirmation
	'USER_UPDATED'			=> 'User Reminder Action completed',	
	'NO_USER_UNPROTECTED'	=> 'No user unprotected.<br/>Your selection included only users of protected groups.',	
	'ERROR_USER_UPDATED'	=> 'No Reminders sent.<br/>Your selection included only users that cannot be sent a reminder',	
	'USERS_DELETED'			=> 'User(s) deleted',	
	'ERROR_USERS_DELETED'	=> 'The following user(s) could not be deleted:<br/> %s',

	'UR_TOO_MANY_CHARS'		=> 'You tried to save %d characters. Please note that a maximum of 255 characters can be saved. If you need more then that, consider creating a group with the users to protect for reminders.',

	'ERROR_EMAIL_CONFIRM_OPERATION' 	=> 'Please note that there are users in your selection that have already had this action carried out.<br/>',	
	'ERROR_NOEMAIL_CONFIRM_OPERATION' 	=> 'You selected users that have opted not to receive emails from Administrators. As such they will not receive these reminders.<br/>',	
	'DELETE_USER_CONFIRM_OPERATION' 	=> 'You have selected to delete users. <strong>Please note that this process is irrevocable once completed.</strong><br/>',	
	'EMAIL_DELETED_USERS' 				=> 'Send email to deleted members?',	

	'USER_REMINDER_CONFIG_UPDATED'	=> 'User Reminder configuration updated',

	//selection options
	'DISPLAY_CHOICE'	=> 'Display',
	'REMINDER'			=> 'Send Reminder',
	'CLEAR'				=> 'Clear Reminder',	
	'CLEAR_ALL'			=> 'Clear all Reminders',	
	'PROTECT_USER'		=> 'Add to protected list',
	'DELETE_USER'		=> 'Delete User',
	'UNPROTECT_USER'	=> 'Remove from protected list',
	'ALL'				=> 'All',
	'REMINDED'			=> 'Reminded',
	'NOT_REMINDED'		=> 'Not Reminded',
	'REMINDER_DATE'		=> 'Reminder Date',
	
	//install vars
	'UR_CONFIG_FIELDS_UPDATED_CREATED'	=>	'Config fields Created/Updated',
	'UR_INSTALL_COMPLETE'				=> 	'<strong>User Reminder installation complete. Please delete this folder (/install)!!</strong>',
	'UR_DELETE_COMPLETE'				=> 	'<strong>User Reminder deletion complete. Please delete this folder (/install)!!	</strong>',
	'UR_INSTALL_RETURN'					=> 	'<br /><br /><br />Click %shere%s to return to the board index.',
	'UR_CONFIGS_CREATED'				=> 	'User Reminder config fields have been created.',
	'UR_USER_FIELDS_ADDED'				=>	'User Fields added where applicable and indexed',
	'UR_USER_FIELDS_DELETED'			=>	'User Fields deleted',
	'UR_BACKUP_WARN'					=> 	'Make sure you have backed up your database before proceeding!!!',
	'UR_INSTALL_DESC'					=> 	'This installation file will create the Database table/fields and add the appropriate module. <br />To proceed please click on the appropriate action below:',
	'UR_NEW_INSTALL'					=> 	'New Installation',
	'UR_UPGRADE_DESC'					=> 	'This installation file will upgrade/delete the Database table/fields and add/remove the appropriate module. <br />To proceed please click on the appropriate action below:',
	'UR_UPGRADE'				=> 	'Upgrade to %s',
	'UR_UP_TO_DATE'			=> 	'Version %s is currently installed on your system which is the latest up-to-date version',

	'UR_INSTALL_REDIRECT'	=> 	'Please wait while you are being redirected to complete the installation.',
	'UR_UNINSTALL_REDIRECT'	=> 	'Please wait while you are being redirected to complete the deletion.',
	'UR_UNINSTALL'			=> 	'Uninstall',

	'UR_MODULE_ADDED'			=> 	'User Reminder Module has been (re)added.',
	'UR_TABLE_CONFIG_DELETE'	=> 	'User Reminder Config fields deleted   <br />',
	'UR_MODULE_DELETED'			=> 	'User Reminder Module has been deleted   <br />',
));

?>