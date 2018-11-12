<?php
/** 
*
* search [Romana]
*
* @package language
* @version $Id: search.php,v 1.26 2007/10/04 15:07:24 acydburn Exp $
* @translate $Id: search.php,v 1.26 2008/01/07 00:02:00 www.phpbb.ro (Aliniuz) Exp $
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
	'ALL_AVAILABLE'			=> 'Toate disponibile',
	'ALL_RESULTS'			=> 'Toate rezultatele',

	'DISPLAY_RESULTS'		=> 'Afiseaza rezultatele ca',

	'FOUND_SEARCH_MATCH'		=> 'Cautarea a gasit %d rezultat',
	'FOUND_SEARCH_MATCHES'		=> 'Cautarea a gasit %d rezultate',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Cautarea a gasit mai mult de %d rezultate',

	'GLOBAL'				=> 'Anunt global',

	'IGNORED_TERMS'			=> 'Ignorat',
	'IGNORED_TERMS_EXPLAIN'	=> 'Urmatoarele cuvinte din cautarea dumneavoastra au fost ignorate deoarece contin cuvinte prea comune: <strong>%s</strong>.',

	'JUMP_TO_POST'			=> 'Mergi la mesaj',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Forumul necesita sa fiti inregistrat si autentificat pentru a putea vizualiza propriile mesaje.',

	'NO_KEYWORDS'			=> 'Trebuie sa introduceti cel putin un cuvant de cautat. Fiecare cuvant trebuie sa contina cel putin %d caractere si nu trebuie sa contina mai mult de %d caractere, excluzand wildcardurile.',
	'NO_RECENT_SEARCHES'	=> 'Nicio cautare nu a fost efectuata recent.',
	'NO_SEARCH'				=> 'Ne pare rau, dar nu aveti permisiunea sa folositi functia Cautare.',
	'NO_SEARCH_RESULTS'		=> 'Nu a fost gasit niciun rezultat.',
	'NO_SEARCH_TIME'		=> 'Ne pare rau, dar nu puteti cauta pe forum in acest moment. Incercati din nou peste cateva minute.',
	'WORD_IN_NO_POST'		=> 'Niciun mesaj nu a fost gasit deoarece cuvantul <strong>%s</strong> nu face parte din niciun mesaj.',
	'WORDS_IN_NO_POST'		=> 'Niciun mesaj nu a fost gasit deoarece cuvintele <strong>%s</strong> nu fac parte din niciun mesaj.',

	'POST_CHARACTERS'		=> 'de caractere din continutul mesajelor',

	'RECENT_SEARCHES'		=> 'Cautari recente',
	'RESULT_DAYS'			=> 'Limiteaza rezultatele anterioare',
	'RESULT_SORT'			=> 'Sorteaza rezultatele dupa',
	'RETURN_FIRST'			=> 'Afiseaza primele',
	'RETURN_TO_SEARCH_ADV'	=> 'Inapoi la cautare avansata',
	
	'SEARCHED_FOR'				=> 'Cauta termenul folosit',
	'SEARCHED_TOPIC'			=> 'Subiect cautat',
	'SEARCH_ALL_TERMS'			=> 'Cauta dupa toti termenii sau foloseste interogarea introdusa',
	'SEARCH_ANY_TERMS'			=> 'Cauta dupa orice termen',
	'SEARCH_AUTHOR'				=> 'Cauta dupa autor',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Utilizati * ca wildcard pentru parti de cuvinte.',
	'SEARCH_FIRST_POST'			=> 'Doar primul mesaj din subiect',
	'SEARCH_FORUMS'				=> 'Cauta in forumuri',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Selectati forumul sau forumurile in care doriti sa cautati. Subforumurile sunt selectate automat daca nu dezactivati “cauta in subforumuri“ mai jos.',
	'SEARCH_IN_RESULTS'			=> 'Cauta aceste rezultate',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Adaugati <strong>+</strong> in fata unui cuvant ce trebuie gasit si <strong>-</strong> in fata unui cuvant ce nu trebuie gasit. Puneti o lista de cuvinte separate de <strong>|</strong> in paranteze daca numai unul din cuvinte trebuie gasit. Utilizati * ca wildcard pentru parti de cuvinte.',
	'SEARCH_MSG_ONLY'			=> 'Numai mesaj text',
	'SEARCH_OPTIONS'			=> 'Optiuni de cautare',
	'SEARCH_QUERY'				=> 'Interogare de cautare',
	'SEARCH_SUBFORUMS'			=> 'Cauta in subforumuri',
	'SEARCH_TITLE_MSG'			=> 'Subiecte mesaje si textul mesajului',
	'SEARCH_TITLE_ONLY'			=> 'Doar titlul subiectelor',
	'SEARCH_WITHIN'				=> 'Cauta in',
	'SORT_ASCENDING'			=> 'Ascendent',
	'SORT_AUTHOR'				=> 'Autor',
	'SORT_DESCENDING'			=> 'Descendent',
	'SORT_FORUM'				=> 'Forum',
	'SORT_POST_SUBJECT'			=> 'Subiectul mesajului',
	'SORT_TIME'					=> 'Data mesajului',

	'TOO_FEW_AUTHOR_CHARS'	=> 'Trebuie sa specificati cel putin %d caractere ale numelui autorului.',
));

?>