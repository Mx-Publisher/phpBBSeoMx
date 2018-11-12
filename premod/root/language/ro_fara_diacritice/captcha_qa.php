<?php
/**
*
* captcha_qa [Rom�n�]
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
		'CAPTCHA_QA'				=> 'CAPTCHA - �ntreb�ri&amp;R�spunsuri',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Aceast� �ntrebare este o metoda de a identifica �i preveni trimiterile automate.',
	'CONFIRM_QUESTION_WRONG'	=> 'A�i r�spuns incorect la �ntrebarea de confirmare.',

	'QUESTION_ANSWERS'			=> 'R�spunsuri',
	'ANSWERS_EXPLAIN'			=> 'V� rug�m s� specifica�i r�spunsurile corecte la aceast� �ntrebare, c�te unul pe linie.',
	'CONFIRM_QUESTION'			=> '�ntrebare',

	'ANSWER'					=> 'R�spuns',
	'EDIT_QUESTION'				=> 'Modificare �ntrebare',
	'QUESTIONS'					=> '�ntreb�ri',
	'QUESTIONS_EXPLAIN'			=> '�n timpul procedurii de �nregistrare, utilizatorii vor fi �ntreba�i una din �ntreb�rile specificate aici. Pentru a folosi acest modul, cel pu�in o �ntrebare trebuie specificat� �n limba standard. Aceste �ntreb�ri ar trebui s� fie s� aiba un r�spuns simplu pentru ca audien�a forumului s� poat� r�spunde dar s� nu permit� unui robot ce folose�te c�ut�rile Google™ s� g�seasc� r�spunsul. Cele mai bune rezultate se ob�in folosind un set mare de intreb�ri ce ar trebui schimbat frecvent. Activa�i verificarea strict� dac� �ntrebarea se bazeaz� pe punctua�ie sau litere mari �i mici.',
	'QUESTION_DELETED'			=> '�ntrebare �tears�',
	'QUESTION_LANG'				=> 'Limb�',
	'QUESTION_LANG_EXPLAIN'		=> 'Limba �n care a fost compus� aceast� intrebare �i r�spunsurile corespunz�toare.',
	'QUESTION_STRICT'			=> 'Verificare strict�',
	'QUESTION_STRICT_EXPLAIN'	=> 'Dac� este activat�, literele mari �i mici ca �i spa�iile albe vor fi luate �n considerare.',

	'QUESTION_TEXT'				=> '�ntrebare',
	'QUESTION_TEXT_EXPLAIN'		=> '�ntrebarea care va fi adresat� in cadrul procedurii de �ntregistrare.',

	'QA_ERROR_MSG'				=> 'V� rug�m s� completa�i toate c�mpurile �i s� specifica�i cel pu�in un r�spuns.',
));

?>