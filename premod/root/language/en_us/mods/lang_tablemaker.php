<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(

'TABLEMAKER_TITLE'			      => '~ Tablemaker ~',
'TABLEMAKER_ROWS'			      => 'ROWS',
'TABLEMAKER_COLUMNS'		      => 'COLUMNS',
'TABLEMAKER_AND_NR'			      => '+ Nr.',
'TABLEMAKER_FIND_EASY'		      => 'Find the cells easier',
'TABLEMAKER_BORDER_WIDTH'		  => 'Border-width',
'TABLEMAKER_CELL_INFO'			  => 'Cell-info (only info)',
'TABLEMAKER_TABLE_HEIGHT'		  => 'Table-height (px)',
'TABLEMAKER_TABLE_WIDTH'		  => 'Table-width (px / %)',
'TABLEMAKER_BG_COLOR'			  => 'Backgroundcolor',
'TABLEMAKER_EXAMPEL_BG_COLOR'	  => 'example: #CCCCCC or lightgray',
'TABLEMAKER_BORDER_COLOR'		  => 'Border-color',
'TABLEMAKER_EXAMPEL_BORDER_COLOR' => 'example: #666666 or gray',
'TABLEMAKER_CELL_FILLING'		  => 'Cell-filling',
'TABLEMAKER_CELL_ROOM'			  => 'Cell-room',
'TABLEMAKER_ALIGNMENT_HORIZ'	  => 'Align-horizontal',
'TABLEMAKER_ALIGNMENT_VERTI'	  => 'Align-vertical ',
'TABLEMAKER_POSITION_TOP'		  => 'Position-top',
'TABLEMAKER_POSITION_LEFT'		  => 'Position-left',
'TABLEMAKER_POSITION_CENTER'	  => 'Position-center',
'TABLEMAKER_POSITION_RIGHT'		  => 'Position-right',
'TABLEMAKER_POSITION_BOTTOM'      => 'Position-bottom',
'TABLEMAKER_EXPL_CONFIG'		  => '1. Table configure',
'TABLEMAKER_EXPL_GENERATE'		  => '2. BBCode generate',
'TABLEMAKER_EXPL_PASTE'			  => '3. paste',
'TABLEMAKER_EXPL_CLOSE_OR'		  => '4. Close or',
'TABLEMAKER_EXPL_NEW_TABLE'		  => '5. Reset and new table configure',
'TABLEMAKER_BUTTON_NEW'			  => 'Reset',
'TABLEMAKER_BUTTON_GENERATE'	  => 'BBCode generate',
'TABLEMAKER_BUTTON_PASTE'		  => 'Paste',
'TABLEMAKER_BUTTON_CLOSE'		  => 'Close',
'TABLEMAKER_PASTE_CONTENT'		  => 'YOUR CONTENT-',

));

?>