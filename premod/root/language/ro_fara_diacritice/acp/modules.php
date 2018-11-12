<?php
/**
*
* acp_modules [Romana]
*
* @package language
* @version $Id: modules.php,v 1.13 2007/10/04 15:07:24 acydburn Exp $
* @translate $Id: modules.php,v 1.13 2007/12/29 17:05:00 www.phpbb.ro (NemoXP) Exp $
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
    'ACP_MODULE_MANAGEMENT_EXPLAIN'    => 'Aici puteti administra tot felul de module. Tineti cont de faptul ca Panoul administratorului contine un meniu structurat pe 3 nivele ( Categorie -> Categorie -> Modul ) asa cum celelalte au un meniu structurat pe 2 nivele ( Categorie -> Modul ) ce trebuie pastrat. De asemenea aveti grija ca va puteti bloca daca dezactivati sau stergeti modulele ce tin de modulul pentru administrare.',
    'ADD_MODULE'                    => 'Adaugati modul',
    'ADD_MODULE_CONFIRM'            => 'Sunteti sigur ca vreti sa adaugati modulului selectat cu stilul specificat?',
    'ADD_MODULE_TITLE'                => 'Adauga modul',

    'CANNOT_REMOVE_MODULE'    => 'Modulul nu poate fi sters deoarece are submodule asociate. Stergeti sau mutati toate submodulele asociate si apoi stergeti acest modul',
    'CATEGORY'                => 'Categorie',
    'CHOOSE_MODE'            => 'Selectati stilul modulului',
    'CHOOSE_MODE_EXPLAIN'    => 'Selectati stilul modulelor deja folosite.',
    'CHOOSE_MODULE'            => 'Alegeti modulul',
    'CHOOSE_MODULE_EXPLAIN'    => 'Selectati fisierul apelat de acest modul.',
    'CREATE_MODULE'            => 'Creati un modul nou',

    'DEACTIVATED_MODULE'    => 'Dezactivati modulul',
    'DELETE_MODULE'            => 'Stergeti modulul',
    'DELETE_MODULE_CONFIRM'    => 'Sunteti sigur ca vreti sa stergeti acest modul?',

    'EDIT_MODULE'            => 'Modificati modulul',
    'EDIT_MODULE_EXPLAIN'    => 'Aici puteti modifica setarile specifice modulului',

    'HIDDEN_MODULE'            => 'Modul ascunse',

    'MODULE'                    => 'Modul',
    'MODULE_ADDED'                => 'Modul adaugat cu succes.',
    'MODULE_DELETED'            => 'Modul sters cu succes.',
    'MODULE_DISPLAYED'            => 'Modul afisat',
    'MODULE_DISPLAYED_EXPLAIN'    => 'Daca nu vreti sa afisati acest modul dar vreti sa-l folositi, specificati aici optiunea Nu.',
    'MODULE_EDITED'                => 'Modul modificat cu succes.',
    'MODULE_ENABLED'            => 'Modul activat',
    'MODULE_LANGNAME'            => 'Numele limbii modulului',
    'MODULE_LANGNAME_EXPLAIN'    => 'Introduceti numele modulului ce va fi afisat. Folositi o constanta de limba daca numele este preluat din fisierul de limba.',
    'MODULE_TYPE'                => 'Tipul modulului',

    'NO_CATEGORY_TO_MODULE'    => 'Categoria nu a putut fi transformata in modul. Mutati/Stergeti toate submodulele inainte de a efectua aceasta actiune.',
    'NO_MODULE'                => 'Nici un modul gasit.',
    'NO_MODULE_ID'            => 'ID-ul modulului nu a fost specificat.',
    'NO_MODULE_LANGNAME'    => 'Limba modulului nu a fost specificata.',
    'NO_PARENT'                => 'Nici un modul principal gasit',

    'PARENT'                => 'Modul principal',
    'PARENT_NO_EXIST'        => 'Nu exista modul principal.',

    'SELECT_MODULE'            => 'Selectati un modul',
));

?>