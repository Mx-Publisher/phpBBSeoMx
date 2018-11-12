<?php
/** 
*
* memberlist [Romana]
*
* @package language
* @version $Id: memberlist.php 8479 2008-03-29 00:22:48Z naderman $
* @translate $Id: memberlist.php 8479 2008-05-19 00:50:00 www.phpbb.ro (Aliniuz) Exp $
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
	'ABOUT_USER'			=> 'Profil',
	'ACTIVE_IN_FORUM'		=> 'Cel mai activ in forumul',
	'ACTIVE_IN_TOPIC'		=> 'Cel mai activ in subiectul',
	'ADD_FOE'				=> 'Adauga ca si persoana neagreata',
	'ADD_FRIEND'			=> 'Adauga ca si prieten',
	'AFTER'					=> 'Dupa',	

	'ALL'					=> 'Toate',

	'BEFORE'				=> 'Inainte',

	'CC_EMAIL'				=> 'Trimite-ti o copie a acestui email.',
	'CONTACT_USER'			=> 'Contacteaza',

	'DEST_LANG'				=> 'Limba',
	'DEST_LANG_EXPLAIN'		=> 'Selectati o limba potrivita (daca e disponibila) pentru destinatarul acestui mesaj.',

	'EMAIL_BODY_EXPLAIN'	=> 'Acest mesaj va fi trimis ca text simplu, asadar nu includeti coduri HTML sau BBCode. Adresa de intoarcere pentru acest mesaj va fi setata ca fiind adresa dumneavoastra de e-mail.',
	'EMAIL_DISABLED'		=> 'Scuze, dar toate functiile cu privire la e-mail au fost dezactivate.',
	'EMAIL_SENT'			=> 'E-mailul a fost trimis.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Acest mesaj va fi trimis ca text simplu, asadar nu includeti coduri HTML sau BBCode. Tineti cont de faptul ca informatiile subiectului sunt deja incluse in mesaj. Adresa de intoarcere pentru acest mesaj va fi setata ca fiind adresa dumneavoastra de e-mail.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Trebuie sa specificati o adresa de e-mail valida pentru destinatar.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Trebuie sa introduceti un mesaj care sa fie trimis prin e-mail.',
	'EMPTY_MESSAGE_IM'		=> 'Trebuie sa introduceti un mesaj pentru a fi trimis.',
	'EMPTY_NAME_EMAIL'		=> 'Trebuie sa introduceti numele real al destinatarului.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Trebuie sa specificati un subiect pentru e-mail.',
	'EQUAL_TO'				=> 'Egal cu',

	'FIND_USERNAME_EXPLAIN'	=> 'Folositi acest formular pentru a cauta anumiti membri. Nu trebuie sa completati toate campurile. Pentru parti de cuvinte, folositi * ca wildcard. Cand introduceti data, folositi formatul <kbd>YYYY-MM-DD</kbd>, ex. <samp>2004-02-29</samp>. Puteti folosi acele casute pentru a selecta unul sau mai multi utilizatori (unii utilizatori pot fi acceptati in functie de formular) si apasati pe butonul de selectare marcari pentru a va intoarce la formularul anterior.',
	'FLOOD_EMAIL_LIMIT'		=> 'Nu puteti trimite alt e-mail acum. Incercati mai tarziu.',

	'GROUP_LEADER'			=> 'Liderul grupului',

	'HIDE_MEMBER_SEARCH'	=> 'Ascunde cautarea de utilizatori',

	'IM_ADD_CONTACT'		=> 'Adauga contact',
	'IM_AIM'				=> 'Tineti cont de faptul ca aveti nevoie de AOL Instant Messenger pentru a folosi aceasta optiune.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Descarca aplicatie',
	'IM_ICQ'				=> 'Tineti cont de faptul ca unii utilizatori au ales sa nu primeasca mesaje instant nesolicitate.',
	'IM_JABBER'				=> 'Tineti cont de faptul ca unii utilizatori au ales sa nu primeasca mesaje instant nesolicitate.',
	'IM_JABBER_SUBJECT'		=> 'Acesta este un mesaj automat, va rugam sa nu raspundeti! Mesaj de la utilizatorul %1$s la %2$s.',
	'IM_MESSAGE'			=> 'Mesajul dumneavoastra',
	'IM_MSNM'				=> 'Tineti cont de faptul ca aveti nevoie de Windows Messenger instalat pentru a folosi aceasta optiune.',
	'IM_MSNM_BROWSER'		=> 'Browser-ul dumneavoastra nu suporta aceasta facilitate.',
	'IM_MSNM_CONNECT'		=> 'MSNM nu este conectat.\nTrebuie sa va conectati la MSNM pentru a continua.',
	'IM_NAME'				=> 'Numele dumneavoastra',
	'IM_NO_DATA'			=> 'Nu exista nicio informatie corespunzatoare de contact pentru acest utilizator.',
	'IM_NO_JABBER'			=> 'Scuze, mesageria directa a utilizatorilor Jabber nu este suportata pe acest forum. Aveti nevoie de un client Jabber instalat pe sistemul dumneavoastra pentru a contacta destinatarul de mai sus.',
	'IM_RECIPIENT'			=> 'Destinatar',
	'IM_SEND'				=> 'Trimite mesaj',
	'IM_SEND_MESSAGE'		=> 'Trimite mesaj',
	'IM_SENT_JABBER'		=> 'Mesajul dumneavoastra catre %1$s a fost trimis cu succes.',
	'IM_USER'				=> 'Trimite un mesaj instant',
	
	'LAST_ACTIVE'				=> 'Activ ultima oara',
	'LESS_THAN'					=> 'Mai putin de',
	'LIST_USER'					=> '1 utilizator',
	'LIST_USERS'				=> '%d utilizatori',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Forumul necesita ca dumneavoastra sa fiti inregistrat si autentificat pentru a vedea lista echipei.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Forumul necesita ca dumneavoastra sa fiti inregistrat si autentificat pentru a accesa lista de membri.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Forumul necesita ca dumneavoastra sa fiti inregistrat si autentificat pentru a cauta utilizatori.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Forumul necesita ca dumneavoastra sa fiti inregistrat si autentificat pentru a vedea profilele.',

	'MORE_THAN'				=> 'Mai mult de',

	'NO_EMAIL'				=> 'Nu aveti permisiunea sa trimiteti e-mail acestui utilizator.',
	'NO_VIEW_USERS'			=> 'Nu aveti permisiunea sa vizualizati lista cu membri sau profilele.',

	'ORDER'					=> 'Ordine',
	'OTHER'					=> 'Altul',

	'POST_IP'				=> 'Scris de la IP/domeniu',

	'RANK'					=> 'Rang',
	'REAL_NAME'				=> 'Numele recipientului',
	'RECIPIENT'				=> 'Recipient',
	'REMOVE_FOE'			=> 'Sterge persoana neagreata',
	'REMOVE_FRIEND'			=> 'Sterge prieten',

	'SEARCH_USER_POSTS'		=> 'Cauta mesajele utilizatorului',
	'SELECT_MARKED'			=> 'Selecteaza marcarile',
	'SELECT_SORT_METHOD'	=> 'Selecteaza metoda de sortare',
	'SEND_AIM_MESSAGE'		=> 'Trimite mesaj AIM',
	'SEND_ICQ_MESSAGE'		=> 'Trimite mesaj ICQ',
	'SEND_IM'				=> 'Mesagerie instant',
	'SEND_JABBER_MESSAGE'	=> 'Trimite mesaj Jabber',
	'SEND_MESSAGE'			=> 'Mesaj',
	'SEND_MSNM_MESSAGE'		=> 'Trimite mesaj MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Trimite mesaj YIM',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'Ultima oara activ',
	'SORT_POST_COUNT'		=> 'Mesaje',

	'USERNAME_BEGINS_WITH'	=> 'Numele de utilizator incepe cu',
	'USER_ADMIN'			=> 'Administreaza utilizator',
	'USER_BAN'				=> 'Bannare',	
	'USER_FORUM'			=> 'Statisticile utilizatorului',
	'USER_ONLINE'			=> 'Conectat',
	'USER_PRESENCE'			=> 'Prezenta forumului',

	'VIEWING_PROFILE'		=> 'Vizualizare profil - %s',
	'VISITED'				=> 'Ultima vizita',

	'WWW'					=> 'Site Web',
));

?>