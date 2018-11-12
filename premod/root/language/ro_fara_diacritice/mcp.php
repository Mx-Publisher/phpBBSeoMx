<?php
/**
*
* mcp [Romana]
*
* @package language
* @version $Id: mcp.php 8479 2008-03-29 00:22:48Z naderman $
* @translate $Id: mcp.php 8479 2008-05-19 02:15:00 www.phpbb.ro (shara21jonny) Exp $
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
	'ACTION'				=> 'Actiune',
	'ACTION_NOTE'			=> 'Actiune/Nota',
	'ADD_FEEDBACK'			=> 'Adaugati parere',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Daca doriti sa va exprimati parerea legat de acest lucru completati urmatorul formular. Folositi doar text simplu; HTML, Codul BB, etc. nu sunt permise.',
	'ADD_WARNING'			=> 'Adaugati advertisment',
	'ADD_WARNING_EXPLAIN'	=> 'Daca doriti sa adaugati un advertisment asupra acestui utilizator completati urmatorul formular. Folositi doar text simplu; HTML, Codul BB, etc. nu sunt permise.',
	'ALL_ENTRIES'			=> 'Toate intrarile',
	'ALL_NOTES_DELETED'		=> 'Toate insemnarile au fost sterse cu succes',
	'ALL_REPORTS'			=> 'Toate rapoartele',
	'ALREADY_REPORTED'		=> 'Acest mesaj a fost deja raportat',
	'ALREADY_WARNED'		=> 'Un avertisment a fost deja emis asupra acestui mesaj',
	'APPROVE'				=> 'Aprobati',
	'APPROVE_POST'			=> 'Aprobati mesajul',
	'APPROVE_POST_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa aprobati acest mesaj?',
	'APPROVE_POSTS'			=> 'Aprobati mesajele',
	'APPROVE_POSTS_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa aprobati mesajele selectate?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Nu puteti sa mutati un subiect in acelasi forum in care se afla deja',
	'CANNOT_WARN_ANONYMOUS'	=> 'Nu puteti sa avertizati utilizatorii neinregistrati',
	'CANNOT_WARN_SELF'		=> 'Nu va puteti da singur avertisment',
	'CAN_LEAVE_BLANK'		=> 'Acest camp poate fi lasat liber.',
	'CHANGE_POSTER'			=> 'Modificati autorul',
	'CLOSE_REPORT'			=> 'Inchide raportul',
	'CLOSE_REPORT_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa inchideti raportul selectat?',
	'CLOSE_REPORTS'			=> 'Inchide rapoarte',
	'CLOSE_REPORTS_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa inchideti rapoartele selectate?',

	'DELETE_POSTS'				=> 'Sterge mesajele',
	'DELETE_POSTS_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa stergeti mesajele selectate?',
	'DELETE_POST_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa stergeti mesajul selectat?',
	'DELETE_REPORT'				=> 'Sterge raportul',
	'DELETE_REPORT_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa stergeti raportul selectata?',
	'DELETE_REPORTS'			=> 'Sterge rapoartele',
	'DELETE_REPORTS_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa stergeti rapoartele selectate?',
	'DELETE_SHADOW_TOPIC'		=> 'Sterge umbra subiect',
	'DELETE_TOPICS'				=> 'Sterge subiectele selectate',
	'DELETE_TOPICS_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa stergeti aceste subiecte?',
	'DELETE_TOPIC_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa stergeti acest subiect?',
	'DISAPPROVE'				=> 'Dezaprobati',
	'DISAPPROVE_REASON'			=> 'Motivul dezaprobarii',
	'DISAPPROVE_POST'			=> 'Dezaprobati mesajul',
	'DISAPPROVE_POST_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa dezaprobati acest mesaj?',
	'DISAPPROVE_POSTS'			=> 'Dezaprobati mesajele',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa dezaprobati aceste mesaje?',
	'DISPLAY_LOG'				=> 'Aratati intrarile anterioare',
	'DISPLAY_OPTIONS'			=> 'Aratati optiunile',

	'EMPTY_REPORT'					=> 'Trebuie sa introduceti o descriere cand selectati aceast motiv',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Unul sau mai multe subiecte au fost sterse pentru ca erau goale sau au devenit goale',

	'FEEDBACK'				=> 'Parere',
	'FORK'					=> 'Imparte',
	'FORK_TOPIC'			=> 'Imparte subiectul',
	'FORK_TOPIC_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa impartiti acest subiect?',
	'FORK_TOPICS'			=> 'Imparte subiectele selectate',
	'FORK_TOPICS_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa impartiti subiectele selectate?',
	'FORUM_DESC'			=> 'Descriere',
	'FORUM_NAME'			=> 'Numele forumului',
	'FORUM_NOT_EXIST'		=> 'Forumul selectat nu exista',
	'FORUM_NOT_POSTABLE'	=> 'In forumul selectat nu se poate publica',
	'FORUM_STATUS'			=> 'Situatia forumului',
	'FORUM_STYLE'			=> 'Stilul forumului',

	'GLOBAL_ANNOUNCEMENT'	=> 'Anunt global',

	'IP_INFO'				=> 'Informatii despre IP',
	'IPS_POSTED_FROM'		=> 'Adresa IP de unde utilizatorul a facut acest mesaj',

	'LATEST_LOGS'				=> 'Ultimele 5 actiuni inregistrate',
	'LATEST_REPORTED'			=> 'Ultimele 5 rapoarte',
	'LATEST_UNAPPROVED'			=> 'Ultimele 5 mesaje in asteptare pentru a fi aprobate',
	'LATEST_WARNING_TIME'		=> 'Ultimele avertismente emise',
	'LATEST_WARNINGS'			=> 'Ultimele 5 avertismente',
	'LEAVE_SHADOW'				=> 'Lasati o umbra in forum',
	'LIST_REPORT'				=> '1 raport',
	'LIST_REPORTS'				=> '%d rapoarte',
	'LOCK'						=> 'Inchide',
	'LOCK_POST_POST'			=> 'Inchide mesajul',
	'LOCK_POST_POST_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa preintampinati modificarea acestui mesaj?',
	'LOCK_POST_POSTS'			=> 'Inchide mesajele selectate',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa preintampinati modificarea mesajelor selectate?',
	'LOCK_TOPIC_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa inchideti acest mesaj?',
	'LOCK_TOPICS'				=> 'Inchide subiectele selectate',
	'LOCK_TOPICS_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa inchideti toate subiectele selectate?',
	'LOGS_CURRENT_TOPIC'		=> 'Vedeti rapoartele subiectului:',
	'LOGIN_EXPLAIN_MCP'			=> 'Pentru a modera acest forum trebuie sa va autentificati.',
	'LOGVIEW_VIEWTOPIC'			=> 'Vizualizare subiect',
	'LOGVIEW_VIEWLOGS'			=> 'Vizualizare raport subiectul',
	'LOGVIEW_VIEWFORUM'			=> 'Vizualizare forum',
	'LOOKUP_ALL'				=> 'Cautati toate IP-urile',
	'LOOKUP_IP'					=> 'Cautati IP-ul',

	'MARKED_NOTES_DELETED'		=> 'Insemnarile selectate au fost sterse cu succes',

	'MCP_ADD'						=> 'Adaugati avertisment',

	'MCP_BAN'					=> 'Interziceti',
	'MCP_BAN_EMAILS'			=> 'Interziceti e-maiul-uri',
	'MCP_BAN_IPS'				=> 'Interziceti IP-uri',
	'MCP_BAN_USERNAMES'			=> 'Interziceti utilizatori',

	'MCP_LOGS'						=> 'Rapoartele moderatorilor',
	'MCP_LOGS_FRONT'				=> 'Prima pagina',
	'MCP_LOGS_FORUM_VIEW'			=> 'Rapoartele forumului',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Rapoartele subiectelor',

	'MCP_MAIN'						=> 'Pagina principala',
	'MCP_MAIN_FORUM_VIEW'			=> 'Vizualizare forum',
	'MCP_MAIN_FRONT'				=> 'Prima pagina',
	'MCP_MAIN_POST_DETAILS'			=> 'Detaliile mesajului',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Vizualizare subiect',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Adaugare anunt',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa marcati acest subiect ca anunt?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Adaugare anunturi',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Sunteti sigur(a) ca vreti sa marcati aceste subiecte ca anunturi?',
	'MCP_MAKE_GLOBAL'				=> 'Adaugare anunt global',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa marcati acest subiect ca un anunt global?',
	'MCP_MAKE_GLOBALS'				=> 'Adaugare anunturi globale',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa marcati subiectele selectate ca anunturi globale?',
	'MCP_MAKE_STICKY'				=> 'Marcare ca important',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa marcati acest subiect ca fiind important?',
	'MCP_MAKE_STICKIES'				=> 'Marcare ca importante',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa marcati aceste subiecte ca fiind importante?',
	'MCP_MAKE_NORMAL'				=> 'Marcare ca mesaj standard',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa marcati acest mesaj ca mesaj standard?',
	'MCP_MAKE_NORMALS'				=> 'Marcare ca mesaje standard',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa marcati mesajele selectate ca mesaje standard?',

	'MCP_NOTES'						=> 'Insemnari utilizator',
	'MCP_NOTES_FRONT'				=> 'Prima pagina',
	'MCP_NOTES_USER'				=> 'Detaliile utilizatorului',

	'MCP_POST_REPORTS'				=> 'Raportati probleme din acest mesaj',

	'MCP_REPORTS'					=> 'Mesaje raportate',
	'MCP_REPORT_DETAILS'			=> 'Detaliile raportului',
	'MCP_REPORTS_CLOSED'			=> 'Rapoarte inchise',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Aceasta este o lista a tuturor rapoartelor asupra mesajelor care au fost rezolvate anterior',
	'MCP_REPORTS_OPEN'				=> 'Deschide rapoarte',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Aceasta este o lista a tuturor mesajelor raportate de care inca ne ocupam',

	'MCP_QUEUE'								=> 'Moderari in asteptare',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Detaliile aprobarii',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Mesaje in asteptare pentru a fi aprobate',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Aceasta este o lista a tuturor mesajelor in asteptare pentru a fi aprobate inainte de a deveni vizibile utilizatorilor',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Subiecte in asteptare pentru a fi aprobate',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Aceasta este o lista a tuturor subiectelor in asteptare pentru a fi aprobate inainte de a deveni vizibile utilizatorilor',

	'MCP_VIEW_USER'			=> 'Vedeti avertismentele unui utilizator specific',

	'MCP_WARN'				=> 'Avertismente',
	'MCP_WARN_FRONT'		=> 'Prima pagina',
	'MCP_WARN_LIST'			=> 'Aratati avertismentele',
	'MCP_WARN_POST'			=> 'Avetrismente pentru un mesaj specific',
	'MCP_WARN_USER'			=> 'Avertizati utilizatorul',

	'MERGE_POSTS'			=> 'Uneste mesajele',
	'MERGE_POSTS_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa uniti mesajele selectate?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Folosind formularul de mai jos puteti uni mesajele selectate intr-un alt subiect. Aceste mesaje nu vor fi reordonate si vor aparea ca si cum utilizatorul le-ar fi publicat in noul subiect.<br />Introduceti ID-ul subiectului destinatie sau dati click pe butonul "Selectati subiecte" pentru a cauta unul.',
	'MERGE_TOPIC_ID'		=> 'ID-ul subiectului destinatie',
	'MERGE_TOPICS'			=> 'Uneste subiecte',
	'MERGE_TOPICS_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa uniti subiectele selectate?',
	'MODERATE_FORUM'		=> 'Moderati forumul',
	'MODERATE_TOPIC'		=> 'Moderati subiectul',
	'MODERATE_POST'			=> 'Moderati mesajul',
	'MOD_OPTIONS'			=> 'Optiunile moderatorului',
	'MORE_INFO'				=> 'Informatii suplimentare',
	'MOST_WARNINGS'			=> 'Utilizatori cu cele mai multe avertismente',
	'MOVE_TOPIC_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa mutati acest subiect intr-un nou forum?',
	'MOVE_TOPICS'			=> 'Mutati subiectele selectate',
	'MOVE_TOPICS_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa mutati subiectuele selectate intr-un nou forum?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Anuntati autorul postului de aprobare?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Anuntati autorul postului de dezaprobare?',
	'NOTIFY_USER_WARN'				=> 'Anuntati utilizatorul de avertisment?',
	'NOT_MODERATOR'					=> 'Nu sunteti moderator in acest forum',
	'NO_DESTINATION_FORUM'			=> 'Selectati un forum pentru destinatie',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Nu exista niciun forum destinatie disponibil.',
	'NO_ENTRIES'					=> 'niciun log asupra acestui mesaj',
	'NO_FEEDBACK'					=> 'Nu exista nicio parere despre acest utilizator',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Trebuie sa selectati un subiect destinatie pentru a uni mesajele',
	'NO_MATCHES_FOUND'				=> 'niciun rezultat',
	'NO_POST'						=> 'Trebuie sa selectati un mesaj pentru a da un avestisment',
	'NO_POST_REPORT'				=> 'Acet mesaj nu a fost raportat.',
	'NO_POST_SELECTED'				=> 'Trebuie sa selectati cel putin un mesaj pentru a efectua aceasta actiune',
	'NO_REASON_DISAPPROVAL'			=> 'Adaugati un motiv rezonabil pentru aceasta dezaprobre',
	'NO_REPORT'						=> 'Nu a fost gasit niciun raport',
	'NO_REPORTS'					=> 'Nu a fost gasit niciun raport',	
	'NO_REPORT_SELECTED'			=> 'Trebuie sa selectezi cel putin o raport pentru a performa aceasta actiune.',
	'NO_TOPIC_ICON'					=> 'Nimic',
	'NO_TOPIC_SELECTED'				=> 'Trebuie sa selectati cel putin un subiect pentru a efectua aceasta actiune',
	'NO_TOPICS_QUEUE'				=> 'Nu sunt subiecte pentru a fi aprobate.',

	'ONLY_TOPIC'			=> 'Numai subiecte "%s"',
	'OTHER_USERS'			=> 'Utilizatorii care au publicat de la aceasta adresa de IP',

	'POSTER'					=> 'Autorul',
	'POSTS_APPROVED_SUCCESS'	=> 'Mesajele selectate au fost aprobate',
	'POSTS_DELETED_SUCCESS'		=> 'Mesajele selectate au fost sterse din baza de date cu succes',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Mesajele selectate au fost dezaprobate',
	'POSTS_LOCKED_SUCCESS'		=> 'Mesajele selectate au fost inchise cu succes',
	'POSTS_MERGED_SUCCESS'		=> 'Mesajele selectate au fost unite',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Mesajele selectate au fost deschise cu succes',
	'POSTS_PER_PAGE'			=> 'Mesaje pe pagina',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Setati 0 pentru a vedea toate mesajele)',
	'POST_APPROVED_SUCCESS'		=> 'Mesajul selectat a fost aprobat',
	'POST_DELETED_SUCCESS'		=> 'Mesajul selectat a fost sters din baza de date cu succes',
	'POST_DISAPPROVED_SUCCESS'	=> 'Mesajul selectat a fost dezaprobat',
	'POST_LOCKED_SUCCESS'		=> 'Mesaj inchis cu succes',
	'POST_NOT_EXIST'			=> 'Mesajul cerut nu exista',
	'POST_REPORTED_SUCCESS'		=> 'Acest mesaj a fost raportat cu succes',
	'POST_UNLOCKED_SUCCESS'		=> 'Mesaj deshis cu succes',

	'READ_USERNOTES'			=> 'Insemnarile utilizatorului',
	'READ_WARNINGS'				=> 'Avertismentele utilizatorului',
	'REPORTER'					=> 'Cel care a raportat',
	'REPORTED'					=> 'Raportat',
	'REPORTED_BY'				=> 'Raportat de',
	'REPORTED_ON_DATE'			=> 'la',
	'REPORTS_CLOSED_SUCCESS'	=> 'Rapoartele selectate au fost inchise cu succes.',
	'REPORTS_DELETED_SUCCESS'	=> 'Rapoartele selectate au fost sterse cu succes.',
	'REPORTS_TOTAL'				=> 'In total sunt <strong>%d</strong> rapoarte pentru revizuire',
	'REPORTS_ZERO_TOTAL'		=> 'Nu exista niciun raport pentru revizuire',
	'REPORT_CLOSED'				=> 'Aceast raport a fost inchis deja.',
	'REPORT_CLOSED_SUCCESS'		=> 'Raportul selectat a fost inchis cu succes.',
	'REPORT_DELETED_SUCCESS'	=> 'Raportul selectat a fost stears cu succes.',
	'REPORT_DETAILS'			=> 'Detaliile raportului',
	'REPORT_MESSAGE'			=> 'Raportati acest mesaj',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Utilizati acest formular pentru a raportul mesajul selectat catre administratori. Rapoartele ar trebui folosite doar daca mesajul respectiv incalca regulile forumului.',
	'REPORT_NOTIFY'				=> 'Anuntati-ma',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Veti fi anuntat cand raportul dumneavoastra a fost verificat',
	'REPORT_POST_EXPLAIN'		=> 'Utilizati acest formular pentru a raportul mesajul selectat catre administratori. Rapoartele ar trebui folosite doar daca mesajul respectiv incalca regulile forumului.',
	'REPORT_REASON'				=> 'Motivul raportului',
	'REPORT_TIME'				=> 'Data raportului',
	'REPORT_TOTAL'				=> 'In total exista <strong>1</strong> raport pentru revizuire',
	'RESYNC'					=> 'Resincronizare',
	'RETURN_MESSAGE'			=> '%sReveniti la mesaj%s',
	'RETURN_NEW_FORUM'			=> '%sDu-te la noul forum%s',
	'RETURN_NEW_TOPIC'			=> '%sDu-te la noul subiect%s',
	'RETURN_POST'				=> '%sReveniti la mesaj%s',
	'RETURN_QUEUE'				=> '%sReveniti la lista%s',
	'RETURN_REPORTS'			=> '%sReveniti la rapoarte%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sReveniti la subiect%s',

	'SEARCH_POSTS_BY_USER'		=> 'Cautati mesaje dupa',
	'SELECT_ACTION'				=> 'Selectati actiunea dorita',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Selectati forumul in care doriti ca acest anunt global sa fie afisat.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Unul sau mai multe subiecte sunt anunturi globale. Va rugam sa selectati forumul in care doreiti ca acestea sa fie afisate.',
	'SELECT_MERGE'				=> 'Selectati pentru unire',
	'SELECT_TOPICS_FROM'		=> 'Selectati subiecte dupa',
	'SELECT_TOPIC'				=> 'Selectati subiecte',
	'SELECT_USER'				=> 'Selectati utilizator',
	'SORT_ACTION'				=> 'Inregistrati actiune',
	'SORT_DATE'					=> 'Date',
	'SORT_IP'					=> 'Adresa de IP',
	'SORT_WARNINGS'				=> 'Avertismente',
	'SPLIT_AFTER'				=> 'Imparte de la mesajul selectat',
	'SPLIT_FORUM'				=> 'Forum deviat din noul subiect',
	'SPLIT_POSTS'				=> 'Imparte mesajele selectate',
	'SPLIT_SUBJECT'				=> 'Titlul noului subiect',
	'SPLIT_TOPIC_ALL'			=> 'Imparte subiectul dupa mesajele selectate',
	'SPLIT_TOPIC_ALL_CONFIRM'	=> 'Sunteti sigur(a) ca vreti sa impartiti acest subiect?',
	'SPLIT_TOPIC_BEYOND'		=> 'Imparte acest subiect de la mesajul selectat',
	'SPLIT_TOPIC_BEYOND_CONFIRM'=> 'Sunteti sigur(a) ca vreti sa impartiti acest subiect de la mesajul selectat?',
	'SPLIT_TOPIC_EXPLAIN'		=> 'Folosind formularul urmator puteti imparti un subiect in doua prin selectarea indivituala a mesajelor sau impartind de la mesajul selectat',

	'THIS_POST_IP'				=> 'IP-ul acestui mesaj',
	'TOPICS_APPROVED_SUCCESS'	=> 'Subiectele selectate au fost aprobate',
	'TOPICS_DELETED_SUCCESS'	=> 'Subiectele selectate au fost sterse cu succes din baza de date',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Subiectele selectate au fost dezaprobate',
	'TOPICS_FORKED_SUCCESS'		=> 'Subiectele selectate au fost copiate cu succes',
	'TOPICS_LOCKED_SUCCESS'		=> 'Subiectele selectate au fost inchise',
	'TOPICS_MOVED_SUCCESS'		=> 'Subiectele selectate au fost mutate cu succes',
	'TOPICS_RESYNC_SUCCESS'		=> 'Subiectele selectate au fost resincronizate',
	'TOPICS_TYPE_CHANGED'		=> 'Tipurile subiectului au fost schimbate cu succes.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Subiectele selectate au fost deschise',
	'TOPIC_APPROVED_SUCCESS'	=> 'Subiectul selectat a fost aprobat',
	'TOPIC_DELETED_SUCCESS'		=> 'Subiectul selectat a fost sters cu succes din baza de date',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Subiectul selectat a fost dezaprobat',
	'TOPIC_FORKED_SUCCESS'		=> 'Subiectul selectat a fost copiat cu succes',
	'TOPIC_LOCKED_SUCCESS'		=> 'Subiectul selectat a fost inchis',
	'TOPIC_MOVED_SUCCESS'		=> 'Subiectul selectat a fost mutat cu succes',
	'TOPIC_NOT_EXIST'			=> 'Subiectul selectat nu exista',
	'TOPIC_RESYNC_SUCCESS'		=> 'Subiectul selectat a fost resincronizat',
	'TOPIC_SPLIT_SUCCESS'		=> 'Subiectul selectat a fost impartit cu succes',
	'TOPIC_TIME'				=> 'Data subiectului',
	'TOPIC_TYPE_CHANGED'		=> 'Tipul subiectului a fost modificat cu succes.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Subiectul selectat a fost deschis',
	'TOTAL_WARNINGS'			=> 'Avertismente totale',

	'UNAPPROVED_POSTS_TOTAL'		=> 'In total exista <strong>%d</strong> mesaje in asteptare pentru a fi aprobate',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Nu exista mesaje in asteptare pentru a fi aprobate',
	'UNAPPROVED_POST_TOTAL'			=> 'In total exista <strong>1</strong> mesaj in asteptare pentru a fi aprobat',
	'UNLOCK'						=> 'Deschide',
	'UNLOCK_POST'					=> 'Deblocati mesajul',
	'UNLOCK_POST_EXPLAIN'			=> 'Permiteti modificarea',
	'UNLOCK_POST_POST'				=> 'Deblocati mesajul',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa permiteti modificarea acestui mesaj?',
	'UNLOCK_POST_POSTS'				=> 'Deblocheaza mesajele selectate',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Sunteti sigur(a) ca vreti sa permiteti modificarea mesajelor selectate?',
	'UNLOCK_TOPIC'					=> 'Deblocati subiectul',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Sunteti sigur(a) ca vreti sa deblocati acest subiect?',
	'UNLOCK_TOPICS'					=> 'Deblocati subiectele selectate',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Sunteti sigur(a) ca vreti sa deblocati toate subiectele selectate?',
	'USER_CANNOT_POST'				=> 'Nu puteti publica in acest forum',
	'USER_CANNOT_REPORT'			=> 'Nu puteti raportul mesaje in acest forum',
	'USER_FEEDBACK_ADDED'			=> 'Parerea utilizatorului adaugata cu succes.',
	'USER_WARNING_ADDED'			=> 'Utilizator avertizat cu succes.',

	'VIEW_DETAILS'			=> 'Vedeti detaliile',

	'WARNED_USERS'			=> 'Utilizatori avertizati',
	'WARNED_USERS_EXPLAIN'	=> 'Aceasta este o lista a utilizatorilor cu avertizari neexpirate asupra lor.',
	'WARNING_PM_BODY'		=> 'Urmatorul este un avertisment emis de un administrator sau un moderator asupra dumneavoastra.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Avertismentele emise',
	'WARNING_POST_DEFAULT'	=> 'Acesta este un avertisment asupra urmatorului mesaj publicat de dumneavoastra: %s',
	'WARNINGS_ZERO_TOTAL'	=> 'Nu exista avertismente',

	'YOU_SELECTED_TOPIC'	=> 'Ati selectat numarul subiectului %d: %s',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'In afara subiectului',
			'OTHER'		=> 'Altele'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Acest mesaj contine adrese catre situri cu programe ilegale sau piratatate',
			'SPAM'		=> 'Mesajul raportat are ca singur scop reclama pentru un site sau produs',
			'OFF_TOPIC'	=> 'Mesajul raportat nu are legatura cu subiectul',
			'OTHER'		=> 'Mesajul raportat nu se potriveste in nicio alta categorie, va rugam sa folositi campul de mai jos pentru descriere'
		)
	),
));

?>