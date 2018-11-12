<?php
/**
*
* acp_prune [Romana]
*
* @package language
* @version $Id: prune.php,v 1.14 2007/10/04 15:07:24 acydburn Exp $
* @translate $Id: prune.php,v 1.14 2007/12/29 17:05:00 www.phpbb.ro (shara21jonny) Exp $
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

// User pruning
$lang = array_merge($lang, array(
    'ACP_PRUNE_USERS_EXPLAIN'    => 'Aici puteti sterge (sau dezactiva) utilizatorii din forumul propriu. Aceasta operatie poate fi efectuata printr-o varietate de moduri: dupa numarul de mesaje, ultima activitate, etc. Fiecare dintre aceste criterii poate fi combinat, de exemplu puteti sterge utilizatorii ce au avut ultima activitate inainte de 2002-01-01 cu mai putin de 10 mesaje. Alternativ, puteti specifica direct in casuta de text o lista a utilizatorilor, orice criteriu introdus fiind ignorat. Aveti grija cu aceasta facilitate! Odata ce un utilizator este sters, nu mai exista cale de intoarcere.',

    'DEACTIVATE_DELETE'            => 'Dezactivati sau stergeti',
    'DEACTIVATE_DELETE_EXPLAIN'    => 'Alegeti intre a dezactiva utilizatorii sau a-i sterge in totalitate, retineti ca nu este cale de intoarcere!',
    'DELETE_USERS'                => 'Stergeti',
    'DELETE_USER_POSTS'            => 'Stergeti mesajele utilizatorilor eliminati',
    'DELETE_USER_POSTS_EXPLAIN' => 'Sterge mesajele scrise de utlizatorii eliminati, nu are niciun efect daca utilizatorii sunt dezactivati.',

    'JOINED_EXPLAIN'            => 'Introduceti o data in formatul <kbd>YYYY-MM-DD</kbd>.',

    'LAST_ACTIVE_EXPLAIN'        => 'Introduceti o data in formatul <kbd>YYYY-MM-DD</kbd>.',

    'PRUNE_USERS_LIST'                => 'Utilizatorii care vor fi stersi',
    'PRUNE_USERS_LIST_DELETE'        => 'Urmatoarele conturi vor fi eliminate conform cu criteriul selectat pentru stergerea utilizatorilor.',
    'PRUNE_USERS_LIST_DEACTIVATE'    => 'Urmatoarele conturi vor fi dezactivate conform cu criteriul selectat pentru stergerea utilizatorilor.',

    'SELECT_USERS_EXPLAIN'        => 'Precizati aici numele utilizatorilor, vor fi folosite de preferinta pentru criteriile de mai sus.',

    'USER_DEACTIVATE_SUCCESS'    => 'Utilizatorii selectati au fost dezactivati cu succes.',
    'USER_DELETE_SUCCESS'        => 'Utilizatorii selectati au fost stersi cu succes.',
    'USER_PRUNE_FAILURE'        => 'Niciun utilizator nu se potriveste pentru criteriul selectat.',
    
    'WRONG_ACTIVE_JOINED_DATE'    => 'Data introdusa este gresita, este recunoscuta in formatul <kbd>YYYY-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
    'ACP_PRUNE_FORUMS_EXPLAIN'    => 'Acesta operatie va sterge orice subiect la care nu s-a raspuns sau nu s-a vizualizat in numarul specificat de zile. Daca nu introduceti un numar, atunci toate subiectele vor fi sterse. Initial, nu se vor elimina subiectele in care chestionarele sunt in continuare active, nici cele cu anunturi sau mesaje importante.',

    'FORUM_PRUNE'        => 'Stergeti forum',

    'NO_PRUNE'            => 'Niciun forum sters',

    'SELECTED_FORUM'    => 'Forum selectat',
    'SELECTED_FORUMS'    => 'Forumuri selectate',

    'POSTS_PRUNED'                    => 'Mesaje sterse',
    'PRUNE_ANNOUNCEMENTS'            => 'Anunturi sterse',
    'PRUNE_FINISHED_POLLS'            => 'Sterge chestionarele inchise',
    'PRUNE_FINISHED_POLLS_EXPLAIN'    => 'Sterge subiectele ce contin chestionare finalizate.',
    'PRUNE_FORUM_CONFIRM'            => 'Sunteti sigur ca vreti sa curatati forumurile selectate conform cu setarile specificate? Odata eliminate, nu exista cale de a recupera mesajele si subiectele sterse.',
    'PRUNE_NOT_POSTED'                => 'Zile de la ultimul mesaj',
    'PRUNE_NOT_VIEWED'                => 'Zile de la ultima vizualizuare',
    'PRUNE_OLD_POLLS'                => 'Sterge chestionarele vechi',
    'PRUNE_OLD_POLLS_EXPLAIN'        => 'Sterge subiectele ce contin chestionare in care nu s-a votat in numarul de zile specificat.',
    'PRUNE_STICKY'                    => 'Sterge mesajele lipicioase',
    'PRUNE_SUCCESS'                    => 'Curatarea forumurilor a fost efectuata cu succes',

    'TOPICS_PRUNED'        => 'Subiecte sterse',
));

?>