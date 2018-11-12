<?php
/**
*
* acp_groups [Romana]
*
* @package language
* @version $Id: groups.php 8479 2008-03-29 00:22:48Z naderman $
* @translate $Id: groups.php, 8479 2007-12-29 17:05:00 www.phpbb.ro (Alexandru) Exp $
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
    'ACP_GROUPS_MANAGE_EXPLAIN'        => 'Din acest panou puteti administra toate grupurile proprii. Puteti sterge, crea si modifica grupurile existente. Mai mult, puteti alege liderii de grup, puteti schimba starea grupului in deschis/ascuns/inchis si puteti specifica numele si descrierea grupului.',
    'ADD_USERS'                        => 'Adaugare utilizatori',
    'ADD_USERS_EXPLAIN'                => 'Aici puteti adauga grupului utilizatori noi. Puteti alege daca acest grup este cel standard pentru utilizatorii selectati. In plus, ii puteti defini ca lideri ai grupului. Va rugam sa scrieti un utilizator pe fiecare linie.',

    'COPY_PERMISSIONS'                => 'Copiati permisiunile de la',
    'COPY_PERMISSIONS_EXPLAIN'        => 'Odata creat, grupul va avea aceleasi permisiuni ca si cele pe care le-ti specificat aici.',
    'CREATE_GROUP'                    => 'Creaza un grup nou',

    'GROUPS_NO_MEMBERS'                => 'Acest grup nu are membri',
    'GROUPS_NO_MODS'                => 'Acest grup nu are niciun lider definit',
    
    'GROUP_APPROVE'                    => 'Aproba membru',
    'GROUP_APPROVED'                => 'Membri aprobati',
    'GROUP_AVATAR'                    => 'Imaginea grupului',
    'GROUP_AVATAR_EXPLAIN'            => 'Aceasta imagine va fi aratata in Panoul de control al grupului',
    'GROUP_CLOSED'                    => 'Inchis',
    'GROUP_COLOR'                    => 'Culoarea grupului',
    'GROUP_COLOR_EXPLAIN'            => 'Definti culoarea numelui membrilor care va fi aratata, lasati liber pentru setarea implicita.',
    'GROUP_CONFIRM_ADD_USER'        => 'Sunteti sigur ca vreti sa adaugati utilizatorul %s la grup?',
    'GROUP_CONFIRM_ADD_USERS'        => 'Sunteti sigur ca vreti sa adaugati utilizatorii %s la grup?',
    'GROUP_CREATED'                    => 'Grupul a fost creat cu succes',
    'GROUP_DEFAULT'                    => 'Specifica grupul implicit pentru acest membru',
    'GROUP_DEFS_UPDATED'            => 'Grupul implicit a fost specificat pentru toti membri selectati',
    'GROUP_DELETE'                    => 'Inlatura membrul din grup',
    'GROUP_DELETED'                    => 'Grupul a fost sters iar membrilor li s-a alocat grupul implicit.',
    'GROUP_DEMOTE'                    => 'Retrage liderul grupului',
    'GROUP_DESC'                    => 'Descrierea grupului',
    'GROUP_DETAILS'                    => 'Detaliile grupului',
    'GROUP_EDIT_EXPLAIN'            => 'Aici puteti modifica un grup existent. Ii puteti schimba numele, descrierea si tipul (deschis, inchis, etc.). De asemenea, puteti specifica anumite optiuni pentru toate grupurile ca de exemplu culoarea, rangul, etc. Schimbarile facute aici suprascriu setarile curente ale utilizatorilor. Retineti ca membrii grupului isi pot modifica imaginea daca nu cumva ati specificat membrilor permisiuni potrivite.',
    'GROUP_ERR_USERS_EXIST'            => 'Utilizatori specificati sunt deja membri ai acestui grup',
    'GROUP_FOUNDER_MANAGE'            => 'Doar fondatorul administreaza',
    'GROUP_FOUNDER_MANAGE_EXPLAIN'    => 'Panoul de administrare al acestui grupului este doar pentru fondatori. Utilizatorii cu drepturi de grup pot in continuare sa vada acest grup la fel ca si membrii grupului',
    'GROUP_HIDDEN'                    => 'Ascuns',
    'GROUP_LANG'                    => 'Limba grupului',
    'GROUP_LEAD'                    => 'Liderii grupului',
    'GROUP_LEADERS_ADDED'            => 'Noii lideri au fost adaugati cu succes.',
    'GROUP_LEGEND'                    => 'Arata grupul in legenda',
    'GROUP_LIST'                    => 'Membrii actuali',
    'GROUP_LIST_EXPLAIN'            => 'Aceasta este o lista completa cu toti utilizatorii care fac parte din grup. Puteti sterge (in afara de grupurile speciale) sau adauga membri dupa caz.',
    'GROUP_MEMBERS'                    => 'Membrii grupului',
    'GROUP_MEMBERS_EXPLAIN'            => 'Aceasta este o lista completa cu toti utilizatorii care fac parte din grup. Include sectiuni separate pentru lideri, pentru membrii in asteptare si cei curenti. De aici puteti administra legate de apartenenta membrilor la acest grup si la rolul acestora. Pentru a inlatura un lider dar pentru a-l pastra in grup folositi optiunea Retrage lider mai degraba decat Sterge. Similar, folositi optiunea Promoveaza pentru a specifica un membru existent ca si lider.',
    'GROUP_MESSAGE_LIMIT'            => 'Limita pe director a mesajelor private ale grupului ',
    'GROUP_MESSAGE_LIMIT_EXPLAIN'    => 'Aceasta optiune suprascrie limita pe director a mesajelor pentru fiecare utilizator. Valoarea 0 inseamna ca va fi folosita limita implicita specificata pentru utilizator.',
    'GROUP_MODS_ADDED'                => 'Noii lideri ai grupului au fost adaugati cu succes.',
    'GROUP_MODS_DEMOTED'            => 'Liderii grupului au fost scosi cu succes.',
    'GROUP_MODS_PROMOTED'            => 'Membrii grupului au fost promovati cu succes',
    'GROUP_NAME'                    => 'Numele grupului',
    'GROUP_NAME_TAKEN'                => 'Numele grupului introdus este deja folosit, specificati altul.',
    'GROUP_OPEN'                    => 'Deschis',
    'GROUP_PENDING'                    => 'Lista de asteptare a membrilor',
    'GROUP_PROMOTE'                    => 'Promoveaza ca lider al grupului',
    'GROUP_RANK'                    => 'Rangul grupului',
    'GROUP_RECEIVE_PM'                => 'Grupul poate sa primeasca mesaje private',
    'GROUP_RECEIVE_PM_EXPLAIN'        => 'Retineti ca nu se pot trimite mesaje private grupurilor ascunse, indiferent de aceasta setare.',
    'GROUP_REQUEST'                    => 'Cere',
    'GROUP_SETTINGS_SAVE'            => 'Setarile generale ale grupului',
    'GROUP_TYPE'                    => 'Tipul grupului',
    'GROUP_TYPE_EXPLAIN'            => 'Aceasta permisiune determina care utilizatori pot sa adere sau sa vada grupul.',
    'GROUP_UPDATED'                    => 'Preferintele grupului au fost actualizate cu succes.',
    
    'GROUP_USERS_ADDED'                => 'Noi utilizatori au fost adaugati cu succes in grup.',
    'GROUP_USERS_EXIST'                => 'Utilizatorii selectati sunt deja membri.',
    'GROUP_USERS_REMOVE'            => 'Utilizatorii au fost scosi cu succes din grup si valorile implicite setate.',

    'MAKE_DEFAULT_FOR_ALL'    => 'Specificati acest grup implicit pentru fiecare membru',
    'MEMBERS'                => 'Membri',

    'NO_GROUP'                    => 'Niciun grup specificat.',
    'NO_GROUPS_CREATED'            => 'Niciun grup creat pana acum.',
    'NO_PERMISSIONS'            => 'Nu copiaza permisiuniile',
    'NO_USERS'                    => 'Nu ati specificat niciun utilizator.',
    'NO_USERS_ADDED'			=> 'Niciun utilizator nu a fost adaugat la grup.',

    'SPECIAL_GROUPS'            => 'Grupuri predefinite',
    'SPECIAL_GROUPS_EXPLAIN'    => 'Grupurile predefinite sunt grupuri speciale, ele nu pot fi sterse sau modificate direct. Puteti adauga utilizatori sau sa modificati setarile de baza.',

    'TOTAL_MEMBERS'                => 'Membri',

    'USERS_APPROVED'                => 'Utilizatorii au fost aprobati cu succes.',
    'USER_DEFAULT'                    => 'Utilizator implicit',
    'USER_DEF_GROUPS'                => 'Grupurile definite ale utilizatorilor',
    'USER_DEF_GROUPS_EXPLAIN'        => 'Aceste grupuri sunt create de dumneavoastra sau de catre alti administratori. Puteti administra aderarile, modifica proprietatile grupului sau chiar sterge grupul.',
    'USER_GROUP_DEFAULT'            => 'Seteaza ca si grup implicit',
    'USER_GROUP_DEFAULT_EXPLAIN'    => 'Alegand Da aici va desemna grupul selectat sa fie implicit pentru utilizatorii adaugati',
    'USER_GROUP_LEADER'                => 'Seteaza ca si lider al grupului',
));

?>