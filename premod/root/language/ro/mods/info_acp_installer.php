<?php
/**
*
* Install Module ♣ Breizh installer [English]
*
* @package language
* @version $Id: acp_info_installer.php 110 14:11 14/08/2011 Sylver35 Exp $ 
* @copyright (c) 2010, 2011 Breizh Portal  http://breizh-portal.com
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

$lang = array_merge($lang, array(
	'INSTALL_TITLE'					=> 'Breizh Installer',
	'INSTALL_INSTALLER'				=> 'Breizh Installer v1.1.0 © 2010, 2011',
	'INSTALL_WELCOME_TEXT'			=> 'Welcome to the installation of %s',
	'INSTALL_WELCOME_TITLE'			=> '%s&nbsp;&nbsp;Installation of Mod %s',
	'INSTALL_PAGE_TITLE'			=> 'Installation of Mod %s',
	'INSTALL_ETAT'					=> 'Installation Status:',
	'INSTALL_ETAT_INFO'				=> 'Explanation: %s <span style="color:red;">Operations remaining to</span>&nbsp;&nbsp;-&nbsp;&nbsp;%s <span style="color:green;">Operations performed</span>',
	'INSTALL_NO_EXIST'				=> 'The specified mode not exist',
	'INSTALL_RELOAD'				=> 'Try again',
	'INSTALL_CONTINUE'				=> 'Skip to the next step',
	'INSTALL_GO_INDEX'				=> 'Go to index',
	'INSTALL_GO_ON'					=> 'Install the Mod',
	'INSTALL_UPDATE'				=> 'Update the Mod',
	'INSTALL_GO'					=> 'Send',
	'INSTALL_ACCEPT'				=> 'validate',
	'INSTALL_ERROR' 				=> 'Error: ',
	'INSTALL_PROSILVER'				=> 'prosilver',
	'INSTALL_SUBSILVER'				=> 'subsilver2',
	'INSTALL_BUTTON_DEL'			=> 'Delete the Mod',
	'INSTALL_LOG_TITLE'				=> 'Details of actions taken',
	'INSTALL_TERMS_EN'				=> 'Display the original license in English language',
	'INSTALL_TERMS_FR'				=> 'Display the license in French language',
	'INSTALL_NO_PATH'				=> 'The folder <strong>%s</strong> is absent.<br />',
	'INSTALL_NO_FILE'				=> 'The file <strong>%s</strong> is absent.<br />',
	'INSTALL_PROGRESS'				=> 'The script is currently executing the action requested...',
	'INSTALL_NO_ERRORS'				=> 'Additional files of the mod <strong>are all</strong> present: ',
	'INSTALL_IS_ERRORS'				=> 'Additional files of the mod <strong>are not all</strong> present: ',
	'INSTALL_ENTER_CONFIG'			=> '» Additions in the config table:&nbsp;&nbsp;',
	'INSTALL_TABLES'				=> '» Added table %s:&nbsp;&nbsp;',
	'INSTALL_ALTER_TABLES'			=> '» Changes in table %s:&nbsp;&nbsp;',
	'INSTALL_MODULES'				=> '» Creating and Enabling modules %s:&nbsp;&nbsp;',
	'INSTALL_AUTH'					=> '» Adding and activation permissions admins and users: ',
	'INSTALL_DEL_ERROR'				=> 'To continue the installation, you must first remove these errors.',
	'INSTALL_FIRST_UNINSTAL'		=> '<br />» On the other side, %1$s has already been deleted %2$s times.',
	'INSTALL_FIRST_NONE'			=> 'You do not have a version of this mod currently in this forum.%s<br /><br />» The script will proceed the first installation of the Mod.',
	'INSTALL_FIRST_YES'				=> 'You have already the version %s of this Mod currently present on this forum.<br /><br />» You have two options:<br /><br />1). Update the Mod. Only changes for the new version are made, you keep the current settings and permissions.<br />2). First delete the Mod. Then you leave with the default settings of the new version, permissions are rewritten.',
	'INSTALL_FIRST_CUR'				=> 'You have the current version of this mod currently present on this forum.<br /><br />» You can choose to delete whether permanently, either to retry the installation if a problem occurred in the database.
										<br />Please note, this action is <strong>irreversible</strong> and will remove%s the ACP modules, and the current settings and permissions.<br />Settings and permissions will then be the default as the first installation of the Mod.',
	'INSTALL_INFO_IDENTIQUE'		=> 'The style you are currently using is the default style.',
	'INSTALL_INFO_DIFFERENT'		=> 'The style you are currently using is not the default style.<br />Make sure you have made changes to all styles active before using this install script.',
	'INSTALL_INFO_MESSAGE'			=> '<strong>Infos</strong>: %s',
	'INSTALL_INFO_SUB_XML'			=> ' See subsilver2.xml',
	'INSTALL_INFO_STYLE'			=> 'The style used: <strong>%1$s</strong> is based on <strong>%2$s</strong>. Make sure you have done well data changes for <strong>%2$s</strong>.%3$s',
	'INSTALL_THEME_ERROR'			=> '<strong>Error</strong>: The file %1$s has been detected in the directory styles/<strong>%2$s</strong>/theme/ while the style is based on subsilver2. Recheck all the changes of style files <strong>%2$s</strong> in subsilver2.xml.',
	'INSTALL_CHECK_TITLE'			=> 'Checking files',
	'INSTALL_CHECK_TABLES_TITLE'	=> 'Changes in database',
	'INSTALL_CHECK_MODUL_TITLE'		=> 'Adding modules %s',
	'INSTALL_CHECK_AUTH_TITLE'		=> 'Adding permissions Mod',
	'INSTALL_CHECK_END_TITLE'		=> 'Installation Completion',
	'INSTALL_CHECK_FINISH_TITLE'	=> 'The Mod %s is installed',
	'INSTALL_CHECK_DELETE_TITLE'	=> 'Uninstallation of %s',
	'INSTALL_CHECK_MESSAGE'			=> 'The script will now check the presence of additional files Mod.',
	'INSTALL_CHECK_TABLES'			=> 'The script will now install the table %s in database.',
	'INSTALL_CHECK_CONFIG'			=> 'The script will now add the configuration elements in the config table.',
	'INSTALL_CHECK_USERS'			=> 'The script will now modify the users table.',
	'INSTALL_CHECK_MODULES'			=> 'The script will now add the modules %s of the the mod in the database.',
	'INSTALL_CHECK_AUTH'			=> 'The script will now add the admins and user permissions in the database.',
	'INSTALL_CHECK_END'				=> 'The script will now finalize the installation of the Mod.',
	'INSTALL_CHECK_DELETE_MESSAGE'	=> 'The script will now remove all the special entries of the Mod in the Database.<br /><strong>Attention</strong>, This action is irreversible.<br />Are you sure you want to do this?',
	'INSTALL_CHECK_FINISH'			=> '<strong>Congratulations!</strong><br /><br />You have finished installing %1$s<br />You can go to the ACP, Permissions tab to set user permissions to your liking.<br />Go also to the tab Breizh Shoutbox to resolve all points of shoutbox configuration.',
	'INSTALL_FINISH_MESSAGE'		=> 'Warning, if you need troubleshooting or information, visit <a href="http://breizh-portal.com/index.html" title="Breizh Portal - The Breizh Touch">Breizh Portal</a>. The support will be provided <strong>exclusively</strong> on this site.<br />Also find our other exclusive Mods.
										<br />Consider making a donation to support the continuity of support and development, thank you.<br /><br />To complete the installation and for safety reasons,  you <strong>must</strong> now delete the folder install/ of rour ftp.<br />',
	'INSTALL_LICENSE'				=> 'GNU GPL License',
	'INSTALL_TERMS'					=> 'You must read this license GNU GPL V2 and accept the terms to install the Mod %s.',
	'INSTALL_ACCEPT_TERMS'			=> 'I accept the terms of the license GNU GPL V2',
	'INSTALL_NO_ACCEPT'				=> 'I do not accept',
	'INSTALL_NO_ACCEPT_END'			=> 'You do not agree to the terms of the GNU GPL V2 Mod %s.<br /><br />Please delete all changes made to the original files and delete all additional files of Mod.',
	'INSTALL_BREIZH'				=> '<em style="font-size:10px;">installation provided by Breizh Installer © 2010, 2011</em>',
	'INSTALL_CHECK_NO_TITLE'		=> 'The Mod %1$s is not installed on this forum.',
	'INSTALL_CHECK_INSTALL_TITLE'	=> '► To install the Mod, <a href="%s" title="To install the Mod">click here</a>',
	'INSTALL_CHECK_UPDATE_TITLE'	=> '► To update the Mod, <a href="%s" title="To update the Mod">click here</a>',
	'INSTALL_NO_ADMIN'				=> '► You do not have administrative rights and can not access these resources...', // For the no admins
	'INSTALL_FINISH_MESSAGE'		=> 'Warning, if you need troubleshooting or information, visit <a href="http://breizh-portal.com/index.html" title="Breizh Portal - The Breizh Touch">Breizh Portal</a>. The support will be provided <strong>exclusively</strong> on this site.<br />Also find our other exclusive Mods.
										<br />Consider making a donation to support the continuity of support and development, thank you.<br /><br />► To complete the installation and for safety reasons, you <strong>must</strong> delete or rename the install/ folder from your server via FTP.<br />',
	'INSTALL_PROGRESS'				=> 'The script is currently executing the action requested...',
	'INSTALL_TABLE_UNDEFINED'		=> 'The table “<strong>%s</strong>” is not defined in the file includes/constants.php<br /><br />Please review <strong>all</strong> the instructions in the file install.xml<br />',
	'INSTALL_CONSTANT_UNDEFINED'	=> 'The constant “<strong>%s</strong>” is not defined in the file includes/constants.php<br /><br />Please review <strong>all</strong> the instructions in the file install.xml<br />',
	'UNINSTALL_ERRORS_MOD'			=> 'You can delete entries Mod %1$s v%2$s in the database <a href="%3$s" title="To remove the mod %1$s v%2$s">By clicking here</a>',
	'INSTALL_MOD_UNINSTALED'		=> 'The mod %1$s is now removed from the database...<br /><br />► <a href="%2$s">Return to the install file</a><br /><br />► <a href="%3$s">Return to the forum index</a>',
	
	'LOG_INSTALL_AUTH'				=> '<strong>Adding a new permission</strong> » %s',
	'LOG_INSTALL_AUTH_ADM'			=> '<strong>Adding and activation administrators permissions</strong> » %s',
	'LOG_INSTALL_AUTH_ADDED'		=> '<strong>Installation and activation permissions for %s</strong>',
	'LOG_INSTALL_AUTH_DEL'			=> '<strong>Removing a Permission</strong><br />» “%s”',
	'LOG_INSTALL_TABLE_ADD'			=> '<strong>Adding a table in the database</strong><br />» “%s',
	'LOG_INSTALL_TABLE_DEL'			=> '<strong>Deleting a table in the database</strong><br />» “%s”',
	'LOG_INSTALL_MODULE_ADD'		=> '<strong>Creating and Enabling a module %1$s</strong><br />» “%2$s”',
	'LOG_INSTALL_MODULE_EDIT'		=> '<strong>Editing a module %1$s</strong><br />» “%2$s”',
	'LOG_INSTALL_MODULE_DEL'		=> '<strong>Deleting a module %1$s</strong><br />» “%2$s”',
	'LOG_INSTALL_MOD_ADD'			=> '<strong>Installing a Mod</strong><br />» %s',
	'LOG_INSTALL_MOD_UPDATE'		=> '<strong>Updating a Mod</strong><br />» %s',
	'LOG_INSTALL_MOD_DELETE'		=> '<strong>Deletion of Mod %s.</strong>',
	'LOG_INSTALL_CONFIG_ADD'		=> '<strong>Adding a configuration point</strong><br />» “%s”',
	'LOG_INSTALL_CONFIG_UDP'		=> '<strong>Updating a configuration point</strong><br />» “%s”',
	'LOG_INSTALL_CONFIG_DEL'		=> '<strong>Deleting a configuration point</strong><br />» “%s”',
	'LOG_INSTALL_ALTER_NO'			=> '<strong>No action performed in the database.</strong>',
	'LOG_INSTALL_ALTER_CONFIG_NO'	=> '<strong>No action done in the config table.</strong>',
	'LOG_INSTALL_ALTER_MOD_NO'		=> '<strong>No action taken in the ACP modules.</strong>',
	'LOG_INSTALL_ALTER_AUTH_NO'		=> '<strong>No action performed in Permissions.</strong>',
	'LOG_INSTALL_COLUMN_ADD'		=> '<strong>Adding a column in a table</strong> » %1$s in %2$s',
	'LOG_INSTALL_COLUMN_DEL'		=> '<strong>Deleting a column in a table</strong> » %1$s in %2$s',
	'LOG_INSTALL_COLUMN_EDIT'		=> '<strong>Modifying a column in a table</strong> » %1$s in %2$s',
	'LOG_INSTALL_CHECK_OK'			=> '<strong>Check for presence of files for Mod %s</strong> » Success!',
	'LOG_INSTALL_CHECK_NO'			=> '<strong>Check for presence of files for Mod %s</strong> » Failure...',
	'LOG_INSTALL_ALTER_END_NO'		=> '<strong>The Mod %s is already installed.</strong>',
	'LOG_INSTALL_UPDATE_CONFIG'		=> '<strong>Update the config table</strong>',
));

?>