<?php
/**
*
* acp_forums [Romana]
*
* @package language
* @version $Id: forums.php 8479 2008-03-29 00:22:48Z naderman $
* @translate $Id: forums.php, 8479 2007-12-29 17:05:00 www.phpbb.ro (shara21jonny) Exp $
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

// Forum Admin
$lang = array_merge($lang, array(
    'AUTO_PRUNE_DAYS'            => 'Autosterge mesajele vechi',
    'AUTO_PRUNE_DAYS_EXPLAIN'    => 'Numarul de zile de la ultimul mesaj dupa care subiectul este mutat.',
    'AUTO_PRUNE_FREQ'            => 'Frecventa auto-stergerii',
    'AUTO_PRUNE_FREQ_EXPLAIN'    => 'Timpul in zile intre evenimentele de stergere.',
    'AUTO_PRUNE_VIEWED'            => 'Autosterge mesaje in functie de varsta vizualizarii',
    'AUTO_PRUNE_VIEWED_EXPLAIN'    => 'Numarul de zile de cand subiectul a fost vizualizat dupa care subiectul este mutat.',

    'COPY_PERMISSIONS'                => 'Copiaza permisiuni de la',
    'COPY_PERMISSIONS_ADD_EXPLAIN'    => 'Odata creat, forumul va avea aceleasi permisiuni ca si cele pe care le selectati aici. Daca nici un forum nu este selectat, cel mai nou forum creat nu va fi vizibil pana au fost specificate permisiunile.',
    'COPY_PERMISSIONS_EDIT_EXPLAIN'    => 'Daca alegeti sa copiati permisiunile, forumul va avea aceleasi permisiuni ca si cel selectat aici. Aceasta operatie va suprascrie orice permisiune pe care ati setat-o anterior pentru acest forum cu permisiunile forumului pe care l-ati selectat aici. Daca nici un forum nu este selectat, vor fi pastrate permisiunile curente.',
    'CREATE_FORUM'                    => 'Creaza un nou forum',

    'DECIDE_MOVE_DELETE_CONTENT'        => 'Stergeti continut sau mutati in forum',
    'DECIDE_MOVE_DELETE_SUBFORUMS'        => 'Stergeti subforumuri sau mutati in forum',
    'DEFAULT_STYLE'                        => 'Stil standard',
    'DELETE_ALL_POSTS'                    => 'Sterge mesaje',
    'DELETE_SUBFORUMS'                    => 'Sterge subforumuri si mesaje',
    'DISPLAY_ACTIVE_TOPICS'                => 'Permite subiecte active',
    'DISPLAY_ACTIVE_TOPICS_EXPLAIN'        => 'Daca alegeti Da, subiectele active in subforumurile selectate vor fi afisate sub aceasta categorie.',

    'EDIT_FORUM'                    => 'Modificare forum',
    'ENABLE_INDEXING'                => 'Activati indexarea cautarii',
    'ENABLE_INDEXING_EXPLAIN'        => 'Daca alegeti Da, mesajele scrise in acest forum vor fi indexate pentru cautare.',
    'ENABLE_POST_REVIEW'            => 'Permiteti revizualizarea mesajului',
    'ENABLE_POST_REVIEW_EXPLAIN'    => 'Daca alegeti Da, utilizatorii sunt capabili sa-si revizualizeze mesajul daca au fost scrise in subiect mesaje noi in timp ce utilizatorii le-au scris pe ale lor. Aceasta optiune ar trebui dezactivata pentru forumurile de tip chat.',
    'ENABLE_RECENT'                    => 'Afisati subiectele active',
    'ENABLE_RECENT_EXPLAIN'            => 'Daca alegeti Da, subiectele scrise in acest forum vor fi afisate in lista subiectelor active.',
    'ENABLE_TOPIC_ICONS'            => 'Permite subiecte cu iconita',

    'FORUM_ADMIN'                        => 'Administrare forum',
    'FORUM_ADMIN_EXPLAIN'                => 'In phpBB3 nu sunt categorii, totul este bazat pe forum. Fiecare forum poate avea un numar nelimitat de subforumuri si puteti determina daca fiecare mesaj poate fi scris sau nu (in acest caz se comporta ca o categorie veche). Aici puteti adauga, modifica, sterge, inchide, deschide individual forumurile la fel ca niste controale aditionale specifice. Daca mesajele si subiectele nu mai sunt sincronizate, puteti sa resincronizati forumul. <strong>Trebuie sa copiati sau sa specificati permisiuni corespunzatoare pentru forumurile noi create pentru a le afisa.</strong>',
    'FORUM_AUTO_PRUNE'                    => 'Permite autostergerea',
    'FORUM_AUTO_PRUNE_EXPLAIN'            => 'Stergeti forumul de subiecte, specificati parametrii de frecventa/varsta mai jos.',
    'FORUM_CREATED'                        => 'Forum creat cu succes.',
    'FORUM_DATA_NEGATIVE'                => 'Parametrii de stergere nu pot fi negativi.',
    'FORUM_DESC_TOO_LONG'                => 'Descrierea forumului este prea lunga, trebuie sa contina mai putin de 400 caractere.',
    'FORUM_DELETE'                        => 'Sterge forum',
    'FORUM_DELETE_EXPLAIN'                => 'Formularul de jos va permite sa stergeti un forum. Daca scrierea este permisa in forum, sunteti capabil sa decideti unde vreti sa puneti toate subiectele (sau forumurile) sale.',
    'FORUM_DELETED'                        => 'Forum sters cu succes.',
    'FORUM_DESC'                        => 'Descriere',
    'FORUM_DESC_EXPLAIN'                => 'Fiecare marcaj HTML introdus aici va fi afisat cum este.',
    'FORUM_EDIT_EXPLAIN'                => 'Formularul de jos va permite sa particularizati acest forum. Retineti ca moderarea si instrumentele de numarat mesajele sunt setate via permisiunile forumului pentru fiecare utilizator sau grup de utilizatori.',
    'FORUM_IMAGE'                        => 'Imagine forum',
    'FORUM_IMAGE_EXPLAIN'                => 'Locatia, relativa la directorul radacina al phpBB, a unei imagini aditionale asociate cu acest forum.',
    'FORUM_LINK_EXPLAIN'                => 'Adresa URL completa (incluzand protocolul, cu alte cuvinte <samp>http://</samp>) catre locatia destinatie va fi trimis utilizatorul care alege acest forum, de exemplu <samp>http://www.phpbb.com/</samp>.',
    'FORUM_LINK_TRACK'                    => 'Urmarire legaturi redirectionate',
    'FORUM_LINK_TRACK_EXPLAIN'            => 'Inregistrati de cate ori legatura unui forum a fost accesata.',
    'FORUM_NAME'                        => 'Nume forum',
    'FORUM_NAME_EMPTY'                    => 'Trebuie sa introduceti un nume pentru acest forum.',
    'FORUM_PARENT'                        => 'Forum parinte',
    'FORUM_PASSWORD'                    => 'Parola forum',
    'FORUM_PASSWORD_CONFIRM'            => 'Confirmati parola forumului',
    'FORUM_PASSWORD_CONFIRM_EXPLAIN'    => 'Trebuie precizata daca este specificata parola forumului.',
    'FORUM_PASSWORD_EXPLAIN'            => 'Definiti o parola pentru acest forum, folositi sistemul de permisiuni din preferinte.',
    'FORUM_PASSWORD_UNSET'                => 'Elminati parola forumului',
    'FORUM_PASSWORD_UNSET_EXPLAIN'        => 'Verificati aici daca doriti sa eliminati parola forumului.',
    'FORUM_PASSWORD_OLD'                => 'Parola forumului foloseste o criptare veche si ar trebui schimbata.',
    'FORUM_PASSWORD_MISMATCH'            => 'Parolele specificate nu s-au potrivit.',
    'FORUM_PRUNE_SETTINGS'                => 'Setarile de stergere a forumului',
    'FORUM_RESYNCED'                    => 'Forumul "%s" resincronizat cu succes',
    'FORUM_RULES_EXPLAIN'                => 'Regulile forumului sunt afisate in fiecare pagina a forumurilor afisate.',
    'FORUM_RULES_LINK'                    => 'Legatura catre regulile forumului',
    'FORUM_RULES_LINK_EXPLAIN'            => 'Aici puteti sa specificati adresa URL-ul a paginii/mesajului care contine regulile forumului dumneavoastra. Aceasta setare va suprascrie regulile text ale forumului pe care le-ati specificat.',
    'FORUM_RULES_PREVIEW'                => 'Previzualizare reguli forum',
    'FORUM_RULES_TOO_LONG'                => 'Regulile forumului trebuie sa contina mai putin de 400 caractere.',
    'FORUM_SETTINGS'                    => 'Setari forum',
    'FORUM_STATUS'                        => 'Stare forum',
    'FORUM_TOPICS_PAGE'                    => 'Subiecte pe pagina',
    'FORUM_STYLE'                        => 'Stil forum',
    'FORUM_TOPICS_PAGE_EXPLAIN'            => 'Daca nu este zero, aceasta valoare va suprascrie setarea initiala specificata pentru mesaje pe pagina.',
    'FORUM_TYPE'                        => 'Tip forum',
    'FORUM_UPDATED'                        => 'Informatiile forumului au fost actualizate cu succes.',
    
    'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'        => 'Vreti sa schimbati un forum in care se poate scrie care are are subforumuri intr-un link. Va rugam sa mutati toate subforumurile in afara acestui forum inainte de a continua, deoarece dupa ce schimbati intr-o legatura nu o sa mai puteti vedea subforumurile curente conectate acestui forum.',

    'GENERAL_FORUM_SETTINGS'    => 'Setari generale ale forumului',

    'LINK'                    => 'Legatura',
    'LIST_INDEX'            => 'Afiseaza subforumul in legenda forumului parinte',
    'LIST_INDEX_EXPLAIN'    => 'Afiseaza acest forum in index sau in alta parte ca si o legatura in cadrul legendei forumului parinte daca optiunea “Afiseaza subforumurile in legenda” este activata in forumul parinte.',
    'LIST_SUBFORUMS'			=> 'Afiseaza subforumurile in legenda',
	  'LIST_SUBFORUMS_EXPLAIN'	=> 'Afiseaza subforumurile acestui forum in index sau in alta parte ca si o legatura in cadrul legendei daca optiunea acestora “Afiseaza subforumul in legenda forumului parinte” este activata.',
    'LOCKED'                => 'Inchis',

    'MOVE_POSTS_NO_POSTABLE_FORUM'    => 'Forumul selectat pentru mutarea mesajelor in el nu permite operatiuni de scriere. Va rugam sa selectati un forum ce permite operatiuni de scriere.',
    'MOVE_POSTS_TO'        => 'Muta mesaje in',
    'MOVE_SUBFORUMS_TO'    => 'Muta subforumuri in',

    'NO_DESTINATION_FORUM'            => 'Nu ati specificat forumul pentru a muta continutul',
    'NO_FORUM_ACTION'                => 'Nici o actiune nu a fost definita in privita continutului forumului',
    'NO_PARENT'                        => 'Nici un parinte',
    'NO_PERMISSIONS'                => 'Nu copia permisiunile',
    'NO_PERMISSION_FORUM_ADD'        => 'Nu aveti permisiunile necesare pentru a adauga forumuri.',
    'NO_PERMISSION_FORUM_DELETE'    => 'Nu aveti permisiunile necesare pentru a sterge forumuri.',

    'PARENT_IS_LINK_FORUM'        => 'Parintele specificat este un forum legatura. Forumurile legatura nu pot tine alte forumuri, va rugam sa specificati o categorie sau un forum ca si forum parinte.',
    'PARENT_NOT_EXIST'            => 'Forumul parinte nu exista.',
    'PRUNE_ANNOUNCEMENTS'        => 'Sterge anunturile',
    'PRUNE_STICKY'                => 'Sterge mesajele lipicioase',
    'PRUNE_OLD_POLLS'            => 'Sterge chestionarele vechi',
    'PRUNE_OLD_POLLS_EXPLAIN'    => 'Sterge subiectele cu chestionare in care nu s-a votat dupa limita de zile.',

    'REDIRECT_ACL'    => 'Acum puteti sa %sspecificati permisiunile%s pentru acest forum.',

    'SYNC_IN_PROGRESS'            => 'Sincronizare forum',
    'SYNC_IN_PROGRESS_EXPLAIN'    => 'Momentan se resincronizeaza subiectele din zona %1$d/%2$d.',

    'TYPE_CAT'            => 'Categorie',
    'TYPE_FORUM'        => 'Forum',
    'TYPE_LINK'            => 'Legatura',

    'UNLOCKED'            => 'Deschis',
));

?>