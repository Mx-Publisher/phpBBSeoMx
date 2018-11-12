<?php
/**
*
* acp_profile [Romana]
*
* @package language
* @version $Id: profile.php,v 1.26 2007/10/04 15:07:24 acydburn Exp $
* @translate $Id: profile.php,v 1.26 2008/01/13 17:05:00 www.phpbb.ro (shara21jonny) Exp $
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

// Custom profile fields
$lang = array_merge($lang, array(
    'ADDED_PROFILE_FIELD'    => 'Camp profil particularizat adaugat cu succes.',
    'ALPHA_ONLY'            => 'Numai alfanumeric',
    'ALPHA_SPACERS'            => 'Alfanumeric si spatii',
    'ALWAYS_TODAY'            => 'Intotdeauna data curenta',

    'BOOL_ENTRIES_EXPLAIN'    => 'Introduceti acum optiunile dumneavoastra',
    'BOOL_TYPE_EXPLAIN'        => 'Definiti tipul, fie o casuta de marcaj fie butoane radio. O casuta de marcaj va fi afisata doar daca a fost selectata pentru un utulizator dat. In acest caz va fi folosita a <strong>doua</strong> varianta de limba. Butoanele radio vor fi afisate independent de valoarea lor.',

    'CHANGED_PROFILE_FIELD'        => 'Camp profil schimbat cu succes.',
    'CHARS_ANY'                    => 'Orice caracter',
    'CHECKBOX'                    => 'Casuta marcaj',
    'COLUMNS'                    => 'Coloane',
    'CP_LANG_DEFAULT_VALUE'        => 'Valoare initiala',
    'CP_LANG_EXPLAIN'            => 'Descriere camp',
    'CP_LANG_EXPLAIN_EXPLAIN'    => 'Explicatia acestui camp prezentat utilizatorului',
    'CP_LANG_NAME'                => 'Nume/titlu camp prezentat utilizatorului',
    'CP_LANG_OPTIONS'            => 'Optiuni',
    'CREATE_NEW_FIELD'            => 'Creaza un camp nou',
    'CUSTOM_FIELDS_NOT_TRANSLATED'    => 'Cel putin un camp profil particularizat nu a fost inca tradus. Introduceti informatiile necesare folosind legatura &quot;Traduce&quot; .',

    'DEFAULT_ISO_LANGUAGE'            => 'Limba standard [%s]',
    'DEFAULT_LANGUAGE_NOT_FILLED'    => 'Variantele de limba pentru limba standard nu sunt completate in acest camp de profil.',
    'DEFAULT_VALUE'                    => 'Valoare initiala',
    'DELETE_PROFILE_FIELD'            => 'Elimina camp profil',
    'DELETE_PROFILE_FIELD_CONFIRM'    => 'Sunteti sigur ca vreti sa stergeti acest camp de profil?',
    'DISPLAY_AT_PROFILE'            => 'Afiseaza in panoul de control al utilizatorului',
    'DISPLAY_AT_PROFILE_EXPLAIN'    => 'Utilizatorul este capabil sa schimbe acest camp de profil din panoul de control al utilizatorului.',
    'DISPLAY_AT_REGISTER'            => 'Afiseaza in fereastra de inregistrare',
    'DISPLAY_AT_REGISTER_EXPLAIN'    => 'Daca aceasta optiune este activata, campul va fi afisat la inregistrare si se va putea schimba din panoul de control al utilizatorului.',
    'DISPLAY_PROFILE_FIELD'            => 'Afiseaza camp profil',
    'DISPLAY_PROFILE_FIELD_EXPLAIN'    => 'Campul de profil va fi afisat toate locurile permise in cadrul preferintelor incarcate. Selectand “Nu” in acest camp, campul se va ascunde din paginile subiectului, profilelor si listei cu membrii.',
    'DROPDOWN_ENTRIES_EXPLAIN'        => 'Introduceti acum optiunile dumneavoastra, fiecare optiune pe o linie',

    'EDIT_DROPDOWN_LANG_EXPLAIN'    => 'Retineti ca puteti schimba textul optiunilor si de asemenea puteti adauga noi optiuni la sfarsit. Nu este recomandat sa adaugati noi optiuni intre cele existente - aceasta operatie poate avea rezultate eronate in optiunile alocate utilizatorilor. De asemenea, aceast lucru se poate intampla daca eliminati optiunile din interior. Eliminand optiunile de la sfarsit are drept consecinta faptul ca utilizatorii care au avut atribuita aceasta optiune vor reveni la cea initiala.',
    'EMPTY_FIELD_IDENT'                => 'Camp gol de identificare',
    'EMPTY_USER_FIELD_NAME'            => 'Specificati un nume/titlu de camp',
    'ENTRIES'                        => 'Variante',
    'EVERYTHING_OK'                    => 'Totul este in regula',

    'FIELD_BOOL'                => 'Boolean (Da/Nu)',
    'FIELD_DATE'                => 'Data',
    'FIELD_DESCRIPTION'            => 'Descriere camp',
    'FIELD_DESCRIPTION_EXPLAIN'    => 'Explicatia acestui camp prezentata utilizatorului',
    'FIELD_DROPDOWN'            => 'Casuta dropdown',
    'FIELD_IDENT'                => 'Identificare camp',
    'FIELD_IDENT_ALREADY_EXIST'    => 'Numele campului ales exista deja. Alege alt nume.',
    'FIELD_IDENT_EXPLAIN'        => 'Identificarea campului este un nume pentru a identifica campul de profil din baza de date si din sabloane.',
    'FIELD_INT'                    => 'Numere',
    'FIELD_LENGTH'                => 'Marimea casutei de intrare',
    'FIELD_NOT_FOUND'            => 'Campul de profil nu a fost gasit.',
    'FIELD_STRING'                => 'Un singur camp text',
    'FIELD_TEXT'                => 'Suprafata text',
    'FIELD_TYPE'                => 'Tip camp',
    'FIELD_TYPE_EXPLAIN'        => 'Nu puteti schimba mai tarziu tipul campului.',
    'FIELD_VALIDATION'            => 'Validare camp',
    'FIRST_OPTION'                => 'Prima optiune',

    'HIDE_PROFILE_FIELD'            => 'Ascunde camp profil',
    'HIDE_PROFILE_FIELD_EXPLAIN'    => 'Numai administratorii si moderatorii pot sa vada/completeze acest camp de profil. Daca aceasta optiune este activata, campurile de profil vor fi afisate doar in profilurile utilizatorilor.',

    'INVALID_CHARS_FIELD_IDENT'    => 'Campul de identificare poate contine litere mici a-z si _',
    'INVALID_FIELD_IDENT_LEN'    => 'Campul de identificare poate fi de maxim 17 caractere',
    'ISO_LANGUAGE'                => 'Limba [%s]',

    'LANG_SPECIFIC_OPTIONS'        => 'Optiuni specifice limbii [<strong>%s</strong>]',

    'MAX_FIELD_CHARS'        => 'Numar maxim de caractere',
    'MAX_FIELD_NUMBER'        => 'Cel mai mare numar permis',
    'MIN_FIELD_CHARS'        => 'Numar minim de caractere',
    'MIN_FIELD_NUMBER'        => 'Cel mai mic numar permis',

    'NO_FIELD_ENTRIES'            => 'Nici o varianta nu a fost definita',
    'NO_FIELD_ID'                => 'Nici un identificator de camp nu a fost specificat.',
    'NO_FIELD_TYPE'                => 'Nici un tip de camp nu a fost specificat.',
    'NO_VALUE_OPTION'            => 'Optiune egala cu valore nespecificata',
    'NO_VALUE_OPTION_EXPLAIN'    => 'Valoare pentru o varianta neacceptata. Daca se impune pentru acest camp, utilizatorul primeste o eroare daca a ales optiunea selectata aici',
    'NUMBERS_ONLY'                => 'Numai numere (0-9)',

    'PROFILE_BASIC_OPTIONS'        => 'Optiuni de baza',
    'PROFILE_FIELD_ACTIVATED'    => 'Camp profil activat cu succes.',
    'PROFILE_FIELD_DEACTIVATED'    => 'Camp profil dezactivat cu succes.',
    'PROFILE_LANG_OPTIONS'        => 'Optiuni specifice limbajului',
    'PROFILE_TYPE_OPTIONS'        => 'Optiuni specifice tipului de profil',

    'RADIO_BUTTONS'                => 'Butoane radio',
    'REMOVED_PROFILE_FIELD'        => 'Camp de profil eliminat cu succes.',
    'REQUIRED_FIELD'            => 'Camp necesar',
    'REQUIRED_FIELD_EXPLAIN'    => 'Forteaza campul de profil sa fie completat sau specificat de catre utilizator. Aceasta operatie va afisa campul de profil la inregistrare si in panoul de control al utilizatorului.',
    'ROWS'                        => 'Randuri',

    'SAVE'                            => 'Salveaza',
    'SECOND_OPTION'                    => 'A doua optiune',
    'STEP_1_EXPLAIN_CREATE'            => 'Aici puteti specifica primii parametrii de baza pentru noul dumneavoastra camp de profil. Aceasta informatie este necesare pentru al doilea pas unde veti putea specifica optiunile ramase si modifica mai departe campul de profil.',
    'STEP_1_EXPLAIN_EDIT'            => 'Aici puteti specifica parametrii de baza pentru campul dumneavoastra de profil. Optiunile relevante sunt recalculate in al doilea pas.',
    'STEP_1_TITLE_CREATE'            => 'Adauga camp profil',
    'STEP_1_TITLE_EDIT'                => 'Modifica camp profil',
    'STEP_2_EXPLAIN_CREATE'            => 'Aici puteti defini cateva optiuni comune pe care ati dori sa le modificati.',
    'STEP_2_EXPLAIN_EDIT'            => 'Aici puteti schimba cateva optiuni comune.<br /><strong>Retineti ca schimbarile in campurile de profil nu vor afecta valorile existente specificate de utilizatori in campurile de profil.</strong>',
    'STEP_2_TITLE_CREATE'            => 'Creare optiuni specifice tipului de profil',
    'STEP_2_TITLE_EDIT'                => 'Modificare optiuni specifice tipului de profil',
    'STEP_3_EXPLAIN_CREATE'            => 'Din moment ce aveti mai mult de o limba instalata in forum, va trebui sa completati elementele celorlalte limbi. Campul de profil va folosi limba activata initial, puteti sa completati elementele celorlalte limbi mai tarziu.',
    'STEP_3_EXPLAIN_EDIT'            => 'Din moment ce aveti mai mult de o limba instalata in forum, puteti acum sa modificati sau sa adaugati elementele celorlalte limbi. Campul de profil va folosi limba activata initial.',
    'STEP_3_TITLE_CREATE'            => 'Definitii limba ramase',
    'STEP_3_TITLE_EDIT'                => 'Definitii limba',
    'STRING_DEFAULT_VALUE_EXPLAIN'    => 'Specificati o fraza initiala pentru a fi afisata, o valoare initiala. Lasati gol daca vreti ca la inceput sa nu fie completat ceva.',

    'TEXT_DEFAULT_VALUE_EXPLAIN'    => 'Specificati un text initial pentru a fi afisat, o valoare initiala. Lasati gol daca vreti ca la inceput sa nu fie completat ceva.',
    'TRANSLATE'                        => 'Traduce',

    'USER_FIELD_NAME'    => 'Nume/titlu camp afisat utilizatorului',

    'VISIBILITY_OPTION'                => 'Optiuni vizibilitate',
));

?>