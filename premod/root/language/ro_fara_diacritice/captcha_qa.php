<?php
/**
*
* captcha_qa [Românã]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
* @copyright (c) 2009 phpBB Group
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
		'CAPTCHA_QA'				=> 'CAPTCHA - Întrebãri&amp;Rãspunsuri',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Aceastã întrebare este o metoda de a identifica ºi preveni trimiterile automate.',
	'CONFIRM_QUESTION_WRONG'	=> 'Aþi rãspuns incorect la întrebarea de confirmare.',

	'QUESTION_ANSWERS'			=> 'Rãspunsuri',
	'ANSWERS_EXPLAIN'			=> 'Vã rugãm sã specificaþi rãspunsurile corecte la aceastã întrebare, câte unul pe linie.',
	'CONFIRM_QUESTION'			=> 'Întrebare',

	'ANSWER'					=> 'Rãspuns',
	'EDIT_QUESTION'				=> 'Modificare Întrebare',
	'QUESTIONS'					=> 'Întrebãri',
	'QUESTIONS_EXPLAIN'			=> 'În timpul procedurii de înregistrare, utilizatorii vor fi întrebaþi una din întrebãrile specificate aici. Pentru a folosi acest modul, cel puþin o întrebare trebuie specificatã în limba standard. Aceste întrebãri ar trebui sã fie sã aiba un rãspuns simplu pentru ca audienþa forumului sã poatã rãspunde dar sã nu permitã unui robot ce foloseºte cãutãrile Googleâ„¢ sã gãseascã rãspunsul. Cele mai bune rezultate se obþin folosind un set mare de intrebãri ce ar trebui schimbat frecvent. Activaþi verificarea strictã dacã întrebarea se bazeazã pe punctuaþie sau litere mari ºi mici.',
	'QUESTION_DELETED'			=> 'Întrebare ºtearsã',
	'QUESTION_LANG'				=> 'Limbã',
	'QUESTION_LANG_EXPLAIN'		=> 'Limba în care a fost compusã aceastã intrebare ºi rãspunsurile corespunzãtoare.',
	'QUESTION_STRICT'			=> 'Verificare strictã',
	'QUESTION_STRICT_EXPLAIN'	=> 'Dacã este activatã, literele mari ºi mici ca ºi spaþiile albe vor fi luate în considerare.',

	'QUESTION_TEXT'				=> 'Întrebare',
	'QUESTION_TEXT_EXPLAIN'		=> 'Întrebarea care va fi adresatã in cadrul procedurii de întregistrare.',

	'QA_ERROR_MSG'				=> 'Vã rugãm sã completaþi toate câmpurile ºi sã specificaþi cel puþin un rãspuns.',
));

?>