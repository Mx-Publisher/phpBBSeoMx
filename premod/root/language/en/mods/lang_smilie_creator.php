<?php
/** 
*
* @package smilies_creator
* $LastChangedDate: 2008-07-17 20:00:49 +0200 (Do, 17 Jul 2008) $
* $LastChangedBy: stoffel04 $
* $Id: lang_smilie_creator.php 62 2008-07-17 18:00:49Z stoffel04 $
* $Revision: 62 $
* @license http://opensource.org/licenses/gpl-license.php GNU Public License*
*
*/

/*
 * @ignore 
*/ 
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
//Start smilie creator
'SMILIE_CREATOR'		=> 'Smilie Creator',
'SHIELDTEXT' 			=> 'Sign text',
'FONTCOLOR' 			=> 'Text colour',
'COLOR_DEFAULT'			=> 'Default colour',
'COLOR_DARK_RED'		=> 'Dark red',
'COLOR_RED' 			=> 'Red',
'COLOR_ORANGE' 			=> 'Orange',
'COLOR_BROWN' 			=> 'Brown',
'COLOR_YELLOW' 			=> 'Yellow',
'COLOR_GREEN' 			=> 'Green',
'COLOR_OLIVE' 			=> 'Olive',
'COLOR_CYAN' 			=> 'Cyan',
'COLOR_BLUE' 			=> 'Blue',
'COLOR_DARK_BLUE' 		=> 'Dark blue',
'COLOR_INDIGO' 			=> 'Indigo',
'COLOR_VIOLETT' 		=> 'Purple',
'COLOR_WHITE' 			=> 'White',
'COLOR_BLACK' 			=> 'Black',
'SHADOWCOLOR' 			=> 'Shadow colour',
'SHIELDSHADOW' 			=> 'Sign shadow',
'SHIELDSHADOW_ON' 		=> 'Enabled',
'SHIELDSHADOW_OFF' 		=> 'Disabled',
'SMILIECHOOSER' 		=> 'Smilie selection',
'RANDOM_SMILIE' 		=> 'Random smilie',
'DEFAULT_SMILIE' 		=> 'Default smilie',
'CREATE_SMILIE' 		=> 'Create',
'STOP_CREATING' 		=> 'Cancel',
'SMILIE_NEXT'			=> 'Do you want to create another smilie sign?',
'SC_ERROR' 				=> 'Here is your sign... you have forgotten the text.',

));

?>