<?php
/**
*
* acp_language [Romana]
*
* @package language
* @version $Id: language.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
* @translate $Id: language.php,v 1.16 2007/12/29 17:05:00 www.phpbb.ro (NemoXP) Exp $
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

$lang = array_merge($lang, array(
    'ACP_FILES'                        => 'Fisierele de limba ale administratorului',
    'ACP_LANGUAGE_PACKS_EXPLAIN'    => 'Aici puteti instala/dezinstala pachetele de limba.',

    'EMAIL_FILES'                     => 'Sabloane pentru mesajele electronice',

    'FILE_CONTENTS'                => 'Continut fisiere',
    'FILE_FROM_STORAGE'            => 'Fisiere din directorul de stocare',

    'HELP_FILES'                => 'Fisiere de ajutor',

    'INSTALLED_LANGUAGE_PACKS'    => 'Pachete de limba instalate',
    'INVALID_LANGUAGE_PACK'        => 'Pachetul de limba selectate pare sa nu fie vaild. Va rugam sa verificati pachetul de limba si sa il incarcati din nou daca este necesar.',
    'INVALID_UPLOAD_METHOD'        => 'Metoda selectata de incarcare nu este valida, va rugam sa alegeti o alta metoda.',

    'LANGUAGE_DETAILS_UPDATED'            => 'Detaliile de limbaj au fost actualizate cu succes.',
    'LANGUAGE_ENTRIES'                    => 'Intrari limba',
    'LANGUAGE_ENTRIES_EXPLAIN'            => 'Aici puteti schimba intrarile pachetelor de limba existente sau a celor care inca nu au fost traduse.<br /><strong>Retineti:</strong> Odata ce ati schimbat un fiser de limba, schimbarile vor fi stocate intr-un director separat pentru a putea fi descarcat. Schimbarile nu vor fi vizibile de catre utilizatori pana nu inlocuiti fisierele originale de limba din spatiul web propriu (prin upload).',
    'LANGUAGE_FILES'                    => 'Fisiere de limba',
    'LANGUAGE_KEY'                        => 'Chei de limba',
    'LANGUAGE_PACK_ALREADY_INSTALLED'    => 'Acest pachet de limba este deja instalat.',
    'LANGUAGE_PACK_DELETED'                => 'Pachetul de limba <strong>%s</strong> a fost eliminat cu succes. Toti utilizatorii ce folosesc acest limbaj au fost resetati la fisierele standard de limba ale forumului.',
    'LANGUAGE_PACK_DETAILS'                => 'Detalii pachet de limba',
    'LANGUAGE_PACK_INSTALLED'            => 'Pachetul de limba <strong>%s</strong> a fost instalat cu succes.',
    'LANGUAGE_PACK_ISO'                    => 'ISO',
    'LANGUAGE_PACK_LOCALNAME'            => 'Nume local',
    'LANGUAGE_PACK_NAME'                => 'Nume',
    'LANGUAGE_PACK_NOT_EXIST'            => 'Pachetul de limbaj selectat nu exista.',
    'LANGUAGE_PACK_USED_BY'                => 'Folosit de (incluzand robotii)',
    'LANGUAGE_VARIABLE'                    => 'Variabila de limba',
    'LANG_AUTHOR'                        => 'Autorul Pachetului de limba',
    'LANG_ENGLISH_NAME'                    => 'Nume in engleza',
    'LANG_ISO_CODE'                        => 'Cod ISO',
    'LANG_LOCAL_NAME'                    => 'Nume local',

    'MISSING_LANGUAGE_FILE'        => 'Lipseste fisierul de limba: <strong style="color:red">%s</strong>',
    'MISSING_LANG_VARIABLES'    => 'Lipsesc variabile de limba',
    'MODS_FILES'                => 'MOD-ificarile fisierelor de limba',

    'NO_FILE_SELECTED'                => 'Nu ati specificat un fisier de limba.',
    'NO_LANG_ID'                    => 'Nu ati specificat un pachet de limba.',
    'NO_REMOVE_DEFAULT_LANG'        => 'Nu puteti elimina pachetul de limba initial.<br />Daca vreti sa eliminati acest pachet de limba, schimbati mai intai limba standard folosita pe forum.',
    'NO_UNINSTALLED_LANGUAGE_PACKS'    => 'Nici un pachet de limba dezinstalat',

    'REMOVE_FROM_STORAGE_FOLDER'        => 'Eliminati din directorul de stocare',

    'SELECT_DOWNLOAD_FORMAT'    => 'Selectati formatul descarcarii',
    'SUBMIT_AND_DOWNLOAD'        => 'Trimiteti si descarcati fisierul',
    'SUBMIT_AND_UPLOAD'            => 'Trimiteti si incarcati fisierul',

    'THOSE_MISSING_LANG_FILES'            => 'Urmatoarele fisiere de limba lispesc din directorul de limba %s',
    'THOSE_MISSING_LANG_VARIABLES'        => 'Urmatoarele variabile de limba lipsesc din pachetul de limba <strong>%s</strong>',

    'UNINSTALLED_LANGUAGE_PACKS'    => 'Pachetele de limba dezinstalate',

    'UNABLE_TO_WRITE_FILE'        => 'Fisierul nu a putut fi scris in %s.',
    'UPLOAD_COMPLETED'            => 'Incarcarea a fost efectuata cu succes.',
    'UPLOAD_FAILED'                => 'Incarcarea a esuat din motive necunoscute. Va trebui sa inlocuiti manual fisierul aferent.',
    'UPLOAD_METHOD'                => 'Metoda de incarcare',
    'UPLOAD_SETTINGS'            => 'Setari de incarcare',

    'WRONG_LANGUAGE_FILE'        => 'Fisierul de limba selectat nu este valid.',
));

?>