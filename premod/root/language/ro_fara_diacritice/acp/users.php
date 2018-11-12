<?php
/**
*
* acp_users [Romana]
*
* @package language
* @version $Id: users.php 8479 2008-03-29 00:22:48Z naderman $
* @translate $Id: users.php, 8479 2008-05-19 17:05:00 www.phpbb.ro (shara21jonny) Exp $
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
	'ADMIN_SIG_PREVIEW'		=> 'Previzualizare semnatura',
	'AT_LEAST_ONE_FOUNDER'	=> 'Nu sunteti autorizat sa schimbati acest fondator intr-un utilizator normal. Trebuie sa existe cel putin un fondator activat pentru acest forum. Daca vreti sa schimbati statul de fondator al acestui utilizator, promovati la acest statut un alt utilizator inainte de a efectua modificarea.',

	'BAN_ALREADY_ENTERED'	=> 'Restrictia a fost setata anterior cu succes. Lista cu interziceri nu a fost actualizata.',
	'BAN_SUCCESSFUL'		=> 'Restrictie adaugata cu succes.',

	'CANNOT_BAN_FOUNDER'			=> 'Nu aveti permisiunea de a interzice conturile fondatorilor.',
	'CANNOT_BAN_YOURSELF'			=> 'Nu va este permisa interzicerea propriului cont.',
	'CANNOT_DEACTIVATE_BOT'			=> 'Nu va este permis sa dezactivati conturile robotilor. In schimb, va rugam sa dezactivati robotii din pagina robotilor.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Nu va este permis sa dezactivati contul fondatorilor.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Nu va este permis sa dezactivati propriul cont.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Nu va este permis sa fortati reactivarea conturilor botilor. In schimb, va rugam sa reactivati robotii din pagina robotilor.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Nu va este permis sa fortati reactivarea conturilor fondatorilor.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Nu va este permis sa fortati reactivarea propriul cont.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Nu aveti permisiunea sa stergeti conturile vizitatorilor.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Nu aveti permisiunea sa stergeti propriul cont de utilizator.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Nu puteti sa promovati utilizatorii ignorati ca si fondatori.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Trebuie sa activati utilizatorii inainte sa-i promovati ca fondatori, numai utilizatorilor activati le este permis sa fie promovati.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Trebuie specificat acest lucru daca schimbati adresa de email a utilizatorului.',

	'DELETE_POSTS'			=> 'Sterge mesaje',
	'DELETE_USER'			=> 'Sterge utilizator',
	'DELETE_USER_EXPLAIN'	=> 'Retineti ca stergerea unui utilizator este definitiva, ei nu mai pot fi recuperati.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Reactivare fortata efectuata cu succes.',
	'FOUNDER'						=> 'Fondator',
	'FOUNDER_EXPLAIN'				=> 'Fondatorii au toate permisiunile administratorilor si nu pot fi niciodata interzisi, stersi sau modificati de catre alti membrii ce nu sunt fondatori.',

	'GROUP_APPROVE'					=> 'Aprobare membru',
	'GROUP_DEFAULT'					=> 'Asociaza ca grup initial pentru membru',
	'GROUP_DELETE'					=> 'Elimina membrul din grup',
	'GROUP_DEMOTE'					=> 'Retrogradeaza liderul de grup',
	'GROUP_PROMOTE'					=> 'Promoveaza ca lider de grup',

	'IP_WHOIS_FOR'			=> 'Identifica IP for %s',

	'LAST_ACTIVE'			=> 'Ultima data activ',

	'MOVE_POSTS_EXPLAIN'	=> 'Selectati forumul in care doriti sa mutati toate mesajele scrise de catre utilizatorul selectat.',

	'NO_SPECIAL_RANK'		=> 'Nici un rang special atribuit',
	'NOT_MANAGE_FOUNDER'	=> 'Ati incercat sa administrati un utilizator cu statutul de fondator. Numai fondatorii sunt autorizati sa administreze alti fondatori.',

	'QUICK_TOOLS'			=> 'Unelte rapide',

	'REGISTERED'			=> 'Inregistrat',
	'REGISTERED_IP'			=> 'Inregistrat de la IP-ul',
	'RETAIN_POSTS'			=> 'Retine mesaje',

	'SELECT_FORM'			=> 'Selecteaza formular',
	'SELECT_USER'			=> 'Selecteaza utilizator',

    'USER_ADMIN'                    => 'Administrare utilizatori',
    'USER_ADMIN_ACTIVATE'            => 'Activare cont',
    'USER_ADMIN_ACTIVATED'            => 'Utilizatori activati cu succes',
    'USER_ADMIN_AVATAR_REMOVED'        => 'Avatar eliminat cu succes din contul utilizatorului.',
    'USER_ADMIN_BAN_EMAIL'            => 'Banati dupa adresa de email',
    'USER_ADMIN_BAN_EMAIL_REASON'    => 'Adresa de email banata via managementul utilizatorilor',
    'USER_ADMIN_BAN_IP'                => 'Interzisi dupa IP',
    'USER_ADMIN_BAN_IP_REASON'        => 'IP interzis via managementul utilizatorilor',
    'USER_ADMIN_BAN_NAME_REASON'    => 'Nume utilizator interzis via managementul utilizatorilor',
    'USER_ADMIN_BAN_USER'            => 'Banati dupa nume utilizator',
    'USER_ADMIN_DEACTIVATE'            => 'Dezactivare cont',
    'USER_ADMIN_DEACTIVED'            => 'Utilizator dezactivat cu succes.',
    'USER_ADMIN_DEL_ATTACH'            => 'Sterge toate atasamentele',
    'USER_ADMIN_DEL_AVATAR'            => 'Sterge avatar',
    'USER_ADMIN_DEL_POSTS'            => 'Sterge toate mesajele',
    'USER_ADMIN_DEL_SIG'            => 'Sterge semnatura',
    'USER_ADMIN_EXPLAIN'            => 'Aici puteti schimba informatiile utilizatorilor si anumite optiuni specifice.',
    'USER_ADMIN_FORCE'                => 'Forteaza reactivarea',
    'USER_ADMIN_MOVE_POSTS'            => 'Muta toate mesajele',
    'USER_ADMIN_SIG_REMOVED'        => 'Semnatura eliminata cu succes din contul utilizatorului.',
    'USER_ATTACHMENTS_REMOVED'        => 'Toate atasamentele efetuate de catre acest utilizator au fost eliminate cu succes.',
    'USER_AVATAR_UPDATED'            => 'Detaliile avatarului utilizatorului au fost actualizate cu succes.',
    'USER_CUSTOM_PROFILE_FIELDS'    => 'Campuri de profil particularizate',
    'USER_DELETED'                    => 'Utilizator sters cu succes.',
    'USER_GROUP_ADD'                => 'Adauga utilizator la grup',
    'USER_GROUP_NORMAL'                => 'Utilizatorul normal al grupului este un membru al',
    'USER_GROUP_PENDING'            => 'Utilizatorii grupului sunt in modul de asteptare',
    'USER_GROUP_SPECIAL'            => 'Utilizatorul special al grupului este un membru',
    'USER_NO_ATTACHMENTS'            => 'Nu sunt fisiere atasate pentru a fi afisate.',
    'USER_OVERVIEW_UPDATED'            => 'Detaliile utilizatorului actualizate.',
    'USER_POSTS_DELETED'            => 'Toate mesajele scrise de catre acest utilizator au fost eliminate cu succes.',
    'USER_POSTS_MOVED'                => 'Mesajele utilizatorilot au fost mutate succes in forumul specificat.',
    'USER_PREFS_UPDATED'            => 'Preferintele utilizatorului actualizate.',
    'USER_PROFILE'                    => 'Profil utilizator',
    'USER_PROFILE_UPDATED'            => 'Profil utilizator actualizat.',
    'USER_RANK'                        => 'Rang utilizator',
    'USER_RANK_UPDATED'                => 'Rang utilizator actualizat.',
    'USER_SIG_UPDATED'                => 'Semnatura utilizatorului a fost actualizata cu succes.',
    'USER_TOOLS'                    => 'Unelte de baza',
));

?>