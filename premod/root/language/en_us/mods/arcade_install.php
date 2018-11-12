<?php
/**
*
* install [English]
*
* @package language
* @version $Id: arcade_install.php 1663 2011-09-22 12:09:30Z killbill $
* @copyright (c) 2010-2011 http://www.phpbbarcade.com
* @copyright (c) 2011 http://jatek-vilag.com
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

$lang = array_merge($lang, array(
	'CAT_INSTALL'							=> 'Install',
	'CAT_OVERVIEW'							=> 'Overview',
	'CAT_UNINSTALL'							=> 'Uninstall',
	'CAT_UPDATE'							=> 'Update',
	'CAT_VERIFY'							=> 'Verify',

	'DONE'									=> 'Done',

	'FILES_REQUIRED'						=> 'Files and Directories',
	'FILES_REQUIRED_EXPLAIN'				=> '<strong>Required</strong> - In order to function correctly phpBB Arcade needs to be able to access or write to certain files or directories. If you see “Cannot find” you need to create the relevant file or directory. If you see “Unwritable” you need to change the permissions on the file or directory to allow phpBB Arcade to write to it.',
	'FOUND'									=> 'Found',

	'GPL'									=> 'General Public License',

	'INCOMPLETE_FILES_UPLOAD'				=> 'The arcade files have been uploaded incompletely. Please make sure to upload all files before running the installer.',
	'INCOMPLETE_FILE_EDITS'					=> 'The file edits required to install the arcade are missing. Please make sure to perform the file edits before running the installer.',
	'INSTALL_CONGRATS'						=> 'Congratulations!',
	'INSTALL_CONGRATS_EXPLAIN'				=> '		<p>You have now successfully installed phpBB Arcade %1$s.</p>
		<p>Clicking the button below will verify that the phpBB Arcade was installed correctly.</p>
		<p><strong>Once that is complete please delete, move or rename the install directory before you use your board. If this directory is still present, only the Administration Control Panel (ACP) will be accessible.</strong>',
	'INSTALL_INTRO'							=> 'Welcome to phpBB Arcade Installation',
	'INSTALL_INTRO_BODY'					=> 'With this option, it is possible to install phpBB Arcade to your database.',
	'INSTALL_LOGIN'							=> 'Proceed to ACP',
	'INSTALL_PANEL'							=> 'phpBB Arcade Installation Panel',
	'INSTALL_START'							=> 'Start install',
	'INSTALL_TEST'							=> 'Test again',
	'INST_ERR'								=> 'Installation error',
	'INST_ERR_AUTH'							=> 'You are not authorized to use this script.<br /><br />Please note to use the script the following requirements must be met. First you must be logged in to the site and second you must have the user type founder. If you are logged in and are the founder then you have incorrect cookie settings in the acp. Please check the cookie domain setting. If your site url is <strong>http://www.example.com</strong> then the cookie domain should be <strong>.example.com</strong>.',
	'INST_ERR_FATAL'						=> 'Fatal installation error',
	'INST_ERR_FATAL_DB'						=> 'A fatal and unrecoverable database error has occurred. This may be because the specified user does not have appropriate permissions to <code>CREATE TABLES</code> or <code>INSERT</code> data, etc. Further information may be given below. Please contact your hosting provider in the first instance or the support forums of phpBB for further assistance.',
	'INST_SQL_RESULTS'						=> 'SQL Statements Completed',

	'MODULE_ACP'							=> 'ACP Module',
	'MODULE_MCP'							=> 'MCP Module',
	'MODULE_UCP'							=> 'UCP Module',

	'NEXT_STEP'								=> 'Proceed to next step',
	'NOT_FOUND'								=> 'Cannot find',

	'OVERVIEW_BODY'							=> 'Welcome to phpBB Arcade!<br /><br />phpBB Arcade is feature-rich, user-friendly, and is fully supported.<br /><br />This installation system will guide you through installing phpBB Arcade, updating to the latest version of phpBB Arcade from past releases, uninstalling phpBB Arcade and verifying phpBB Arcade is installed correctly. To read the phpBB Arcade license or learn about obtaining support and our stance on it, please select the respective options from the side menu. To continue, please select the appropriate tab above.',

	'PERMISSIONS_WARNING'					=> 'New permission settings have been added. Be sure to check your permission settings and see that they are as you would like them.',
	'PHPBB_ARCADE_VERSION'					=> 'phpBB Arcade version >= %s',
	'PHPBB_ARCADE_VERSION_EXPLAIN'			=> '<strong>Required</strong> - You must be running at least version %s of phpBB Arcade in order to update phpBB Arcade.',
	'PHPBB_ARCADE_VERSION_REQD'				=> 'We are sorry, but this script does not support updating from versions of phpBB Arcade prior to “%1$s”. The version you currently have installed is “%2$s”. Please update to a previous version before running this script. Assistance with this is available in the Support Forum on <a href="http://phpbbarcade.origon.dk/viewforum.php?f=5">phpbbarcade.origon.dk</a>.',
	'PHPBB_VERSION'							=> 'phpBB version >= %s',
	'PHPBB_VERSION_EXPLAIN'					=> '<strong>Required</strong> - You must be running at least version %s of phpBB in order to install phpBB Arcade.',
	'PHP_CURL_SUPPORT'						=> 'PHP setting <var>curl</var> is installed',
	'PHP_CURL_SUPPORT_EXPLAIN'				=> '<strong>Optional</strong> - This setting is optional, however it is recommended that curl library is installed on your server if you want to use the download games module in the acp.',
	'PHP_SETTINGS'							=> 'PHP settings',
	'PHP_URL_FOPEN_SUPPORT'					=> 'PHP setting <var>allow_url_fopen</var> is enabled',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'			=> '<strong>Optional</strong> - This setting is optional, however it is recommended that this is enabled if you want to use the download games module in the acp.',

	'REQUIREMENTS_INSTALL_EXPLAIN'			=> 'Before proceeding with the full installation, phpBB Arcade will carry out some tests on your server configuration and files to ensure that you are able to install and run phpBB Arcade. Please ensure you read through the results thoroughly and do not proceed until all the required tests are passed. If you wish to use any of the features depending on the optional tests, you should ensure that these tests are passed also.',
	'REQUIREMENTS_INSTALL_TITLE'			=> 'Installation compatibility',
	'REQUIREMENTS_UPDATE_EXPLAIN'			=> 'Before proceeding with the update to the latest version, phpBB Arcade will carry out some tests on your server configuration and files to ensure that you are able to update. Please ensure you read through the results thoroughly and do not proceed until all the required tests are passed. If you wish to use any of the features depending on the optional tests, you should ensure that these tests are passed also.',
	'REQUIREMENTS_UPDATE_TITLE'				=> 'Update compatibility',

	'STAGE_INSTALL'							=> 'Install',
	'STAGE_INSTALL_ARCADE'					=> 'Installation of phpBB Arcade',
	'STAGE_INSTALL_ARCADE_EXPLAIN'			=> 'The database tables, modules, permissions and data used by phpBB Arcade have been created.',
	'STAGE_INTRO'							=> 'Introduction',
	'STAGE_REQUIREMENTS'					=> 'Requirements',
	'STAGE_UNINSTALL'						=> 'Uninstall',
	'STAGE_UNINSTALL_ARCADE'				=> 'Uninstallation of phpBB Arcade',
	'STAGE_UNINSTALL_ARCADE_EXPLAIN'		=> 'The database tables, modules, permissions and data used by phpBB Arcade have been removed from the database. To complete the uninstallation you need to reverse all the file edits and remove all the files from your server.',
	'STAGE_UPDATE'							=> 'Update',
	'STAGE_UPDATE_ARCADE'					=> 'Update of phpBB Arcade',
	'STAGE_UPDATE_ARCADE_EXPLAIN'			=> 'The phpBB Arcade has been updated to the latest version.',
	'STAGE_VERIFY'							=> 'Verify',
	'SUB_INTRO'								=> 'Introduction',
	'SUB_LICENSE'							=> 'License',
	'SUB_SUPPORT'							=> 'Support',
	'SUPPORT_BODY'							=> 'Full support will be provided for the current stable and development release of phpBB Arcade, free of charge. This includes:</p><ul><li>installation</li><li>configuration</li><li>technical questions</li><li>problems relating to potential bugs in the software</li><li>updating from older versions to the latest version</li></ul><p>We encourage users still running older versions of phpBB Arcade to update their installation to the latest version.</p><h2>Obtaining Support</h2><p><a href="http://phpbbarcade.origon.dk/viewforum.php?f=5">Main Development Site</a><br /><a href="http://www.phpbb.com/community/viewtopic.php?p=13034634#p13034634">phpBB.com Development Topic</a><br /><a href="http://phpbbarcade.origon.dk/faq.php?mode=arcade">User guide (also located inside phpBB Arcade ACP)</a><br /><br />',

	'UNAVAILABLE'							=> 'Unavailable',
	'UNINSTALL_CONGRATS_EXPLAIN'			=> '</p>
		<p>You have now successfully uninstalled phpBB Arcade %1$s.</p>
		<p>Clicking the button below will take you to your Administration Control Panel (ACP).</p>
		<p><strong>Please now delete, move or rename the install directory before you use your board. If this directory is still present, only the Administration Control Panel (ACP) will be accessible.</strong>',
	'UNINSTALL_INTRO'						=> 'Welcome to phpBB Arcade Uninstallation',
	'UNINSTALL_INTRO_BODY'					=> 'With this option, it is possible to uninstall phpBB Arcade from your database.',
	'UNINSTALL_START'						=> 'Start uninstall',
	'UNWRITABLE'							=> 'Unwritable',
	'UPDATE_CONGRATS_EXPLAIN'				=> '		<p>You have now successfully updated to phpBB Arcade %1$s.</p>
		<p>Clicking the button below will verify that the phpBB Arcade was updated correctly.</p>
		<p><strong>Once that is complete please delete, move or rename the install directory before you use your board. If this directory is still present, only the Administration Control Panel (ACP) will be accessible.</strong>',
	'UPDATE_INTRO'							=> 'Welcome to phpBB Arcade Installation Update',
	'UPDATE_INTRO_BODY'						=> 'With this option, it is possible to update phpBB Arcade to the latest release.',
	'UPDATE_START'							=> 'Start update',

	'VERIFY_ALL_FILES'						=> 'All files found',
	'VERIFY_ALL_FILES_EDITED'				=> 'All files are edited',
	'VERIFY_ALL_MODULES'					=> 'All modules found',
	'VERIFY_ALL_PERMISSIONS'				=> 'All permissions found',
	'VERIFY_ALL_TABLES'						=> 'All tables found',
	'VERIFY_ARCADE_INSTALLATION'			=> 'Verify arcade installation',
	'VERIFY_ARCADE_INSTALLATION_EXPLAIN'	=> 'This will check to make sure all the arcade is installed correctly.',
	'VERIFY_CONGRATS_EXPLAIN'				=> '</p>
		<p>You have now successfully verified the installation of phpBB Arcade %1$s.</p>
		<p>Clicking the button below will take you to your Administration Control Panel (ACP). Take some time to read the arcade user guide and examine the options available to you.</p>
		<p><strong>Please now delete, move or rename the install directory before you use your board. If this directory is still present, only the Administration Control Panel (ACP) will be accessible.</strong>',
	'VERIFY_ERRORS'							=> 'Unsuccessful!',
	'VERIFY_ERRORS_EXPLAIN'					=> '</p>
		<p>You have not successfully installed phpBB Arcade %1$s.</p>
		<p>Clicking the button below will take you back to verify the installation again.</p>
		<p><strong>Please check the reported errors below.</strong>',
	'VERIFY_FILES_EDITED'					=> 'Checking if files are edited',
	'VERIFY_FILES_EXIST'					=> 'Checking if files exist',
	'VERIFY_FOLDER_NOT_UPDATE'				=> 'The following folders/files were not uploaded or updated:<br />%s',
	'VERIFY_FOLDER_UPDATE'					=> 'Folders/files update',
	'VERIFY_INTRO'							=> 'Welcome to phpBB Arcade Installation Verfication',
	'VERIFY_INTRO_BODY'						=> 'With this option, it is possible to verify that phpBB Arcade is installed correctly onto your server.',
	'VERIFY_MISSING_FILES'					=> 'The following files were missing:<br />%s',
	'VERIFY_MISSING_FILES_EDITED'			=> 'The following files seem to not be edited:<br />%s',
	'VERIFY_MISSING_MODULES'				=> 'The following modules were missing:<br />%s',
	'VERIFY_MISSING_PERMISSIONS'			=> 'The following permissions were missing:<br />%s',
	'VERIFY_MISSING_TABLES'					=> 'The following tables were missing:<br />%s',
	'VERIFY_MODULES'						=> 'Checking if all modules exist',
	'VERIFY_OLD_FILES'						=> 'Checking if old files exist',
	'VERIFY_OLD_FILES_PRESENT'				=> 'The following old files were found and should be removed:<br />%s',
	'VERIFY_OLD_OTHER_DB_DATA'				=> 'Checking old other db data (these should not exist anymore)',
	'VERIFY_OLD_TABLE_ALTERED'				=> 'The following columns are present in the %s table and should be removed:<br />%s',
	'VERIFY_OTHER_DB_DATA'					=> 'Checking other db data',
	'VERIFY_PERMISSIONS'					=> 'Checking if all permissions exist',
	'VERIFY_TABLES_EXIST'					=> 'Checking if tables exist',
	'VERIFY_TABLE_ALTERED'					=> '%s table correctly altered',
	'VERIFY_TABLE_NOT_ALTERED'				=> 'The following columns are missing from the %s table:<br />%s',
	'VERSION'								=> 'Version',
	'VERSION_SETTINGS'						=> 'Version Settings',

	'WELCOME_INSTALL'						=> 'Welcome to phpBB Arcade Installation',
	'WRITABLE'								=> 'Writable',
));

?>