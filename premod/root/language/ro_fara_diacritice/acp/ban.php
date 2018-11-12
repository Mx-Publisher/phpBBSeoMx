<?php
/**
*
* acp_ban [Romana]
*
* @package language
* @version $Id: ban.php,v 1.19 2007/10/04 15:07:24 acydburn Exp $
* @translate $Id: ban.php,v 1.19 2007/12/29 17:05:00 www.phpbb.ro (shara21jonny) Exp $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 ora',
	'30_MINS'		=> '30 minute',
	'6_HOURS'		=> '6 ore',

	'ACP_BAN_EXPLAIN'	=> 'Aici puteti controla banarea utilizatorilor dupa nume, IP sau adresa de e-mail. Aceste metode previn un utilizator sa vizualizeze orice parte a forumului. Puteti sa-i dati un motiv scurt (maxim 3000 caractere) pentru ban daca doriti. Acesta va fi afisat in fisierul de log al administratorului. De asemenea, se poate specifica si durata banului. Daca vreti ca banarea sa expire la o anumita data, decat sa specificati perioada de banare mai bine completati data limita <span style="text-decoration: underline;">Pana -&gt;</span> pentru banare in formatul <kbd>YYYY-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Exclude din banare',
	'BAN_LENGTH'			=> 'Durata banarii',
	'BAN_REASON'			=> 'Motivul banarii',
	'BAN_GIVE_REASON'		=> 'Motivul afisat utilizatorului banat',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Lista de banare a fost actualizata cu succes.',

	'EMAIL_BAN'					=> 'Banati una sau mai multe adrese de e-mail',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Selectati pentru a exclude din lista curenta de banare adresele de e-mail specificate.',
	'EMAIL_BAN_EXPLAIN'			=> 'Pentru a specifica mai mult de o adresa de e-mail, introduceti fiecare adresa pe o singura linie. Pentru a potrivi adresele partiale, folositi  * ca un si wildcard, de exemplu <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp>, etc.',
	'EMAIL_NO_BANNED'			=> 'Nicio adresa de e-mail nu exista in lista de banare',
	'EMAIL_UNBAN'				=> 'Debaneaza sau exclude adrese de e-mail',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Puteti debana (sau exclude) mai multe adrese de e-mail folosind cea mai apropiata combinatie a mouse-ului si a tastaturii pentru calculatorul si browser-ul propriu. Adresele de e-mail excluse au fundalul marcat.',

	'IP_BAN'					=> 'Banati unul sau mai multe IP-uri',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Selectati pentru a exclude IP-ul introdus din toate banarile curente.',
	'IP_BAN_EXPLAIN'			=> 'Pentru a specifica mai multe IP-uri sau hosturi, introduceti fiecare adresa pe un rand nou. Pentru a specifica clasa unei adrese IP, separati inceputul si sfarsitul cu liniuta (-), pentru a specifica un wildcard folositi*',
	'IP_HOSTNAME'				=> 'Adrese IP sau hosturi',
	'IP_NO_BANNED'				=> 'Nicio adresa IP banata',
	'IP_UNBAN'					=> 'IP-uri debanate sau incluse',
	'IP_UNBAN_EXPLAIN'			=> 'Puteti debana (sau include) mai multe adrese IP printr-o singura miscare folosind cea mai apropiata combinatie a mouse-ului si a tastaturii calculatorului si browser-ului propriu. IP-urile excluse au fundalul marcat.',

	'LENGTH_BAN_INVALID'		=> 'Data a trebuit sa fie fie formatata <kbd>YYYY-MM-DD</kbd>.',

	'PERMANENT'		=> 'Permanent',
	
	'UNTIL'						=> 'Pana',
	'USER_BAN'					=> 'Banati unul sau mai multi utilizatori',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Selectati pentru a exclude din toate banarile curente utilizatorii specificati.',
	'USER_BAN_EXPLAIN'			=> 'Puteti bana multipli utilizatori deodata introducand fiecare nume pe un rand. Folositi facilitatea <span style="text-decoration: underline;">Gaseste un membru</span> pentru a gasi si adauga unul sau mai multi utilizatori automat.',
	'USER_NO_BANNED'			=> 'Niciun utilizator banat',
	'USER_UNBAN'				=> 'Debanati sau includeti utilizatori',
	'USER_UNBAN_EXPLAIN'		=> 'Puteti debana (sau include) mai multi utilizatori printr-o singura miscare folosind cea mai apropiata combinatie a mouse-ului si a tastaturii calculatorului si browser-ului propriu. Utilizatorii exclusi au fundalul marcat.',
	

));

?>