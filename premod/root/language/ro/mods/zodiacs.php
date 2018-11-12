<?php
/**
*
* DM Multi Zodiacs
* User language File[English]
*
* @package language
* @version 1.0.0
* @copyright (c) 2010 femu - http://die-muellers.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* @based on Zodiac Beta by evil<3 - http://phpbbmodders.net
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// IMPORTANT NOTE:
//
// You need do edit the language file to reflect your path to the images!
// So. ie. in below case, the testpremod is in a subdirectory. You need to edit the first part
// of the path based on your root directory. If your testpremod is located in the root
// directory, simply start with /images/.  If it's in a sub directory, start with the name
// of the sub directory. ie. /phpbb/images/
//
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
//
// Some characters you may want to copy&paste:
// ’ » „ “ — …
//

$lang = array_merge($lang, array(
	'ZODIAC'	=> 'Zodiacs',

	'ZODIACS'	=> array(
		'<br /><img src="./images/zodiacs/european/icon_zodiac_steinbock.png" alt="Europe: Capricorn" title="Europe: Capricorn" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_wassermann.png" alt="Europe: Aquarius" title="Europe: Aquarius" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_fische.png" alt="Europe: Pisces" title="Europe: Pisces" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_widder.png" alt="Europe: Aries" title="Europe: Aries" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_stier.png" alt="Europe: Taurus" title="Europe: Taurus" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_zwilling.png" alt="Europe: Gemini" title="Europe: Gemini" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_krebs.png" alt="Europe: Cancer" title="Europe: Cancer" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_loewe.png" alt="Europe: Leo" title="Europe: Leo" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_jungfrau.png" alt="Europe: Virgio" title="Europe: Virgio" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_waage.png" alt="Europe: Libra" title="Europe: Libra" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_skorpion.png" alt="Europe: Scorpio" title="Europe: Scorpio" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_schuetze.png" alt="Europe: Sagittarius" title="Europe: Sagittarius" height="30" width="30" />',
		'<br /><img src="./images/zodiacs/european/icon_zodiac_steinbock.png" alt="Europe: Capricorn" title="Europe: Capricorn" height="30" width="30" />',
	),

	'ZODIACS_INDIAN'	=> array(
		'<img src="./images/zodiacs/indian/icon_zodiac_gans.gif" alt="Indian: Goose" title="Indian: Goose" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_otter.gif" alt="Indian: Otter" title="Indian: Otter" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_wolf.gif" alt="Indian: Wolf" title="Indian: Wolf" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_falke.gif" alt="Indian: Hawk" title="Indian: Hawk" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_biber.gif" alt="Indian: Beaver" title="Indian: Beaver" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_hirsch.gif" alt="Indian: Elk" title="Indian: Elk" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_specht.gif" alt="Indian: Woodpecker" title="Indian: Woodpecker" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_lachs.gif" alt="Indian: Salmon" title="Indian: Salmon" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_baer.gif" alt="Indian: Bear" title="Indian: Bear" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_kraehe.gif" alt="Indian: Raven" title="Indian: Raven" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_schlange.gif" alt="Indian: Snake" title="Indian: Snake" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_eule.gif" alt="Indian: Owl" title="Indian: Owl" height="30" width="30" />',
		'<img src="./images/zodiacs/indian/icon_zodiac_gans.gif" alt="Indian: Goose" title="Indian: Goose" height="30" width="30" />',
	),

	'ZODIACS_CHINESE'	=> array(
		'Rat' 		=> '<img src="./images/zodiacs/chinese/icon_zodiac_ratte.png" alt="Chinese: Rat" title="Chinese: Rat" height="30" width="30" />',
		'Buffalo' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_bueffel.png" alt="Chinese: Buffalo" title="Chinese: Buffalo" height="30" width="30" />',
		'Tiger' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_tiger.png" alt="Chinese: Tiger" title="Chinese: Tiger" height="30" width="30" />',
		'Cat'   	=> '<img src="./images/zodiacs/chinese/icon_zodiac_hase.png" alt="Chinese: Rabbit" title="Chinese: Rabbit" height="30" width="30" />',
		'Dragon' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_drache.png" alt="Chinese: Dragon" title="Chinese: Dragon" height="30" width="30" />',
		'Snake' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_schlange.png" alt="Chinese: Snake" title="Chinese: Snake" height="30" width="30" />',
		'Horse' 	=> '<img src="./images/zodiacs/chinese/icon_zodiac_pferd.png" alt="Chinese: Horse" title="Chinese: Horse" height="30" width="30" />',
		'Goat' 		=> '<img src="./images/zodiacs/chinese/icon_zodiac_schaf.png" alt="Chinese: Goat" title="Chinese: Goat" height="30" width="30" />',
		'Monkey'    => '<img src="./images/zodiacs/chinese/icon_zodiac_affe.png" alt="Chinese: Monkey" title="Chinese: Monkey" height="30" width="30" />',
		'Cock'      => '<img src="./images/zodiacs/chinese/icon_zodiac_hahn.png" alt="Chinese: Rooster" title="Chinese: Rooster" height="30" width="30" />',
		'Dog' 		=> '<img src="./images/zodiacs/chinese/icon_zodiac_hund.png" alt="Chinese: Dog" title="Chinese: Dog" height="30" width="30" />',
		'Pig'       => '<img src="./images/zodiacs/chinese/icon_zodiac_schwein.png" alt="Chinese: Pig" title="Chinese: Pig" height="30" width="30" />',
	),

));

?>