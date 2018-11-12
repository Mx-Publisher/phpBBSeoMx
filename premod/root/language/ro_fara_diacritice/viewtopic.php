<?php
/** 
*
* viewtopic [Romana]
*
* @package language
* @version $Id: viewtopic.php,v 1.20 2007/10/29 13:39:34 kellanved Exp $
* @translate $Id: viewtopic.php,v 1.20 2008/01/07 01:13:00 www.phpbb.ro (Aliniuz) Exp $
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
	'ATTACHMENT'						=> 'Atasamente',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Facilitatea de atasamente a fost dezactivata.',

	'BOOKMARK_ADDED'		=> 'Subiectul a fost insemnat cu succes.',
	'BOOKMARK_REMOVED'		=> 'Subiectul a fost sters din lista semnelor de carte.',
	'BOOKMARK_TOPIC'		=> 'Insemneaza acest subiect',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Sterge subiectul din lista semnelor de carte',
	'BUMPED_BY'				=> 'Subiect ridicat ultima oara de %1$s %2$s.',
	'BUMP_TOPIC'			=> 'Ridica acest subiect',

	'CODE'					=> 'Cod',

	'DELETE_TOPIC'			=> 'Sterge acest subiect',
	'DOWNLOAD_NOTICE'		=> 'Nu aveti permisiunea de a vizualiza fisierele atasate acestui mesaj.',

	'EDITED_TIMES_TOTAL'	=> 'Ultima oara modificat de %1$s pe %2$s, modificat de %3$d ori in total.',
	'EDITED_TIME_TOTAL'		=> 'Ultima oara modificat de %1$s pe %2$s, modificat %3$d data in total.',
	'EMAIL_TOPIC'			=> 'Trimite prin e-mail unui prieten',
	'ERROR_NO_ATTACHMENT'	=> 'Atasamentul selectat nu mai exista.',

	'FILE_NOT_FOUND_404'	=> 'Fisierul <strong>%s</strong> nu exista.',
	'FORK_TOPIC'			=> 'Copiaza subiect',

	'LINKAGE_FORBIDDEN'		=> 'Nu sunteti autorizat sa vizualizati, descarcati sau sa puneti un link catre/pe acest site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Ati primit o notificare cu privire la acest subiect, autentificati-va pentru a o vizualiza.',
	'LOGIN_VIEWTOPIC'		=> 'Administratorul forumului necesita ca dumneavoastra sa fiti inregistrat si autentificat pentru a vizualiza acest subiect.',

	'MAKE_ANNOUNCE'				=> 'Schimba in “Anunt”',
	'MAKE_GLOBAL'				=> 'Schimba in “Global”',
	'MAKE_NORMAL'				=> 'Schimba in “Subiect obisnuit”',
	'MAKE_STICKY'				=> 'Schimba in “Important”',
	'MAX_OPTIONS_SELECT'		=> 'Puteti selecta pana la <strong>%d</strong> optiuni',
	'MAX_OPTION_SELECT'			=> 'Puteti selecta <strong>1</strong> optiune',
	'MISSING_INLINE_ATTACHMENT'	=> 'Atasamentul <strong>%s</strong> nu mai este disponibil',
	'MOVE_TOPIC'				=> 'Muta subiect',

	'NO_ATTACHMENT_SELECTED'=> 'Nu ati selectat un atasament pe care sa-l descarcati sau vizualizati.',
	'NO_NEWER_TOPICS'		=> 'Nu sunt subiecte mai noi in acest forum.',
	'NO_OLDER_TOPICS'		=> 'Nu sunt subiecte mai vechi in acest forum.',
	'NO_UNREAD_POSTS'		=> 'Nu sunt mesaje necitite noi in acest subiect.',
	'NO_VOTE_OPTION'		=> 'Trebuie sa alegeti o optiune cand votati.',
	'NO_VOTES'				=> 'Niciun vot',

	'POLL_ENDED_AT'			=> 'Chestionarul s-a inchis pe data de %s',
	'POLL_RUN_TILL'			=> 'Chestionarul este deschis pana pe data de %s',
	'POLL_VOTED_OPTION'		=> 'Ati votat pentru aceasta optiune',
	'PRINT_TOPIC'			=> 'Versiune printabila',

	'QUICK_MOD'				=> 'Utilitati rapide',
	'QUOTE'					=> 'Citat',

	'REPLY_TO_TOPIC'		=> 'Raspunde la subiect',
	'RETURN_POST'			=> '%sIntoarce-te la mesaj%s',

	'SUBMIT_VOTE'			=> 'Trimite vot',

	'TOTAL_VOTES'			=> 'Voturi totale',

	'UNLOCK_TOPIC'			=> 'Deschide subiect',

	'VIEW_INFO'				=> 'Detaliile mesajului',
	'VIEW_NEXT_TOPIC'		=> 'Urmatorul subiect',
	'VIEW_PREVIOUS_TOPIC'	=> 'Subiectul anterior',
	'VIEW_RESULTS'			=> 'Vezi rezultatele',
	'VIEW_TOPIC_POST'		=> '1 mesaj',
	'VIEW_TOPIC_POSTS'		=> '%d mesaje',
	'VIEW_UNREAD_POST'		=> 'Primul mesaj necitit',
	'VISIT_WEBSITE'			=> 'WWW',
	'VOTE_SUBMITTED'		=> 'Votul dumneavoastra a fost adaugat.',
	'VOTE_CONVERTED'		=> 'Schimbarea voturilor nu este suportata pentru voturile convertite.',
	
));

?>