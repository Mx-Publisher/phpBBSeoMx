<?php
/** 
*
* acp_bots [Romana]
*
* @package language
* @version $Id: bots.php,v 1.12 2007/10/04 15:07:24 acydburn Exp $
* @translate $Id: bots.php,v 1.12 2007/12/29 17:05:00 www.phpbb.ro (NemoXP) Exp $
* @copyright (c) 2005 phpBB Group 
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

// Bot settings
$lang = array_merge($lang, array(
	'BOTS'				=> 'Administrare roboti',
	'BOTS_EXPLAIN'		=> '&quot;Botii&quot;, &quot;paienjenii&quot; sau &quot;crawlerii&quot; sunt agenti automati folositi in special de catre motoarele de cautare pentru a-si reactualiza bazele de date. Deoarece acesti agenti se folosesc de sesiuni HTTP, pot deregla contoarele de vizitatori, pot mari traficul si uneori pot sa nu indexeze site-urile corect. Aici puteti defini un tip special de utilizator pentru a depasi aceste situatii.',
	'BOT_ACTIVATE'		=> 'Activati',
	'BOT_ACTIVE'		=> 'Robot activ',
	'BOT_ADD'			=> 'Adaugare robot',
	'BOT_ADDED'			=> 'Robot adaugat cu succes.',
	'BOT_AGENT'			=> 'Potrivire agent',
	'BOT_AGENT_EXPLAIN'	=> 'O secventa de text care se potriveste cu agentul robotului, potrivirile partiale sunt permise.',
	'BOT_DEACTIVATE'	=> 'Dezactivare',
	'BOT_DELETED'		=> 'Robot sters cu succes.',
	'BOT_EDIT'			=> 'Modificare roboti',
	'BOT_EDIT_EXPLAIN'	=> 'Aici puteti adauga sau modifica robotii deja existenti. Puteti defini o secventa de text a agentului si/sau una sau mai multe adrese de IP (sau clase de IPuri) pentru potrivire. Aveti grija cand definiti secventele de text ale agentului sau adresele de IP. Puteti desemenea specifica un stil si limba in care robotul va vedea forumul. Selectand un stil simplu pentru roboti, va poate ajuta sa reduceti traficul de pe forum. Retineti sa specificati permisiile necesare pentru grupul Roboti.',
	'BOT_LANG'			=> 'Limba robotului',
	'BOT_LANG_EXPLAIN'	=> 'Limba in care robotul va vedea forumul.',
	'BOT_LAST_VISIT'	=> 'Ultima vizita',
	'BOT_IP'			=> 'Adresa IP a robotului',
	'BOT_IP_EXPLAIN'	=> 'Rezultate partiale sunt permise, separati adresele prin virgula.',
	'BOT_NAME'			=> 'Numele robotului',
	'BOT_NAME_EXPLAIN'	=> 'Folosit doar pentru informatii proprii.',
	'BOT_NAME_TAKEN'	=> 'Numele este deja folosit pe forum si puteti/nu puteti sa il folositi pentru Robot.',
	'BOT_NEVER'			=> 'Niciodata',
	'BOT_STYLE'			=> 'Sitlul robotului',
	'BOT_STYLE_EXPLAIN'	=> 'Stilul forumului pe care il va vedea robotul.',
	'BOT_UPDATED'		=> 'Setarile robotului au fost actualizate cu succes.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Agentul introdus coincide cu cel folosit deja. Va rugam sa modificati setarile pentru acest robot.',
	'ERR_BOT_NO_IP'				=> 'Adresa IP introdusa este incorecta sau nu s-a putut stabili o legatura.',
	'ERR_BOT_NO_MATCHES'		=> 'Trebuie sa introduceti cel putin unul dintre agenti sau adresa IP pentru potrivirea robotului.',

	'NO_BOT'		=> 'Nu a fost gasit nici un robot cu ID-ul specificat.',
	'NO_BOT_GROUP'	=> 'Nu se poate gasi grupul special pentru roboti.',
));

?>