<?php
/** 
*
* groups [Romana]
*
* @package language
* @version $Id: groups.php 8479 2008-03-29 00:22:48Z naderman $
* @translate $Id: groups.php, 8479 2008-05-19 22:26:00 www.phpbb.ro (Aliniuz) Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
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
	'ALREADY_DEFAULT_GROUP'	=> 'Grupul selectat este deja grupul dumneavoastra predefinit.',
	'ALREADY_IN_GROUP'		=> 'Sunteti deja membru al grupului selectat.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Ati facut deja cerere de inregistrare pentru grupul selectat.',

	'CANNOT_JOIN_GROUP'			=> 'Nu puteti sa aderati la acest grup. Puteti sa aderati doar la grupurile deschise si liber deschise.',
	'CANNOT_RESIGN_GROUP'		=> 'Nu puteti sa va retrageti la acest grup. Puteti sa va retrageti doar din grupurile deschise si liber deschise.',
	'CHANGED_DEFAULT_GROUP'	=> 'Grupul predefinit a fost actualizat cu succes.',
	
	'GROUP_AVATAR'						=> 'Avatarul grupului', 
	'GROUP_CHANGE_DEFAULT'				=> 'Sunteti sigur ca vreti sa va schimbati grupul predefinit pentru grupul “%s”?',
	'GROUP_CLOSED'						=> 'Inchis',
	'GROUP_DESC'						=> 'Descrierea grupului',
	'GROUP_HIDDEN'						=> 'Ascuns',
	'GROUP_INFORMATION'					=> 'Informatia grupului', 
	'GROUP_IS_CLOSED'					=> 'Acesta este un grup inchis, noii membri pot sa adere doar la invitatia liderului grupului.',
	'GROUP_IS_FREE'						=> 'Acesta este un grup deschis liber, orice membru nou e binevenit.', 
	'GROUP_IS_HIDDEN'					=> 'Acesta este un grup ascuns, numai membrii acestui grup pot vedea ceilalti membri.',
	'GROUP_IS_OPEN'						=> 'Acesta este un grup deschis, orice membru poate adera.',
	'GROUP_IS_SPECIAL'					=> 'Acesta este un grup special, grupurile speciale sunt conduse de administratori.', 
	'GROUP_JOIN'						=> 'Alatura-te grupului',
	'GROUP_JOIN_CONFIRM'				=> 'Esti sigur ca vrei sa aderi la grupul selectat?',
	'GROUP_JOIN_PENDING'				=> 'Cerere de aderare la grup',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'Sunteti sigur ca vreti sa aderati la grupul selectat?',
	'GROUP_JOINED'						=> 'V-ati alaturat cu succes acestui grup.',
	'GROUP_JOINED_PENDING'				=> 'Cerere de aderare la grup efectuata cu succes. Asteptati pentru ca liderul grupului sa va aprobe cererea.',
	'GROUP_LIST'						=> 'Administrare utilizatori',
	'GROUP_MEMBERS'						=> 'Membrii grupului',
	'GROUP_NAME'						=> 'Numele grupului',
	'GROUP_OPEN'						=> 'Deschis',
	'GROUP_RANK'						=> 'Rangul grupului', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'Paraseste acest grup',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Sunteti sigur ca doriti sa parasiti grupul selectat?',
	'GROUP_RESIGN_PENDING'				=> 'Parasire grup in asteptare la care ati aderat',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Sunteti sigur ca vreti sa va retrageti aderarea la grupul selectat?',
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'Ati fost sters cu succes din grupul selectat.',
	'GROUP_RESIGNED_PENDING'			=> 'Aderarea dumneavoastra la grupul selectat a fost inlaturata cu succes.',
	'GROUP_TYPE'						=> 'Tipul grupului',
	'GROUP_UNDISCLOSED'					=> 'Grup ascuns',
	'FORUM_UNDISCLOSED'					=> 'Moderare forumuri ascunse',

	'LOGIN_EXPLAIN_GROUP'	=> 'Trebuie sa va autentificati pentru a vizualiza detaliile grupului.',

	'NO_LEADERS'					=> 'Nu sunteti lider la niciun grup.',
	'NOT_LEADER_OF_GROUP'			=> 'Actiunea ceruta nu a putut fi finalizata intrucat nu sunteti liderul grupului selectat.',
	'NOT_MEMBER_OF_GROUP'			=> 'Actiunea ceruta nu a putut fi finalizata intrucat nu sunteti membru al grupului selectat sau apartenenta dumneavoastra la grup nu a fost aprobata.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Nu puteti sa parasiti grupul dumneavoastra predefinit.',
	
	'PRIMARY_GROUP'		=> 'Grup primar',

	'REMOVE_SELECTED'		=> 'Sterge selectiile',

	'USER_GROUP_CHANGE'			=> 'De la grupul “%1$s” la “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'Retrogradeaza liderul grupului',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Sunteti sigur ca vreti sa retrogradati liderul grupului selectat?',
	'USER_GROUP_DEMOTED'		=> 'Ati retrogradat cu succes liderul grupului.',
));

?>