<?php
/**
*
* @author Tobi Schäfer http://www.phpbb-seo.de/
*
* impressum [Deutsch - Du]
*
* @package language
* @version $Id: impressum.php,v 1.1.1.1 2009/05/15 05:16:03 portalxl group Exp $
* @copyright (c) 2008 SEO phpBB phpbb-seo.de
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

// Bot settings
$lang = array_merge($lang, array(
	'IMPRESSUM' 		=> 'Imprint',
	'DISCLAIMER' 		=> 'Disclaimer',
	'DISCLAIMER_TXT'	=> '<b>1. Content</b><br />"%1$s" reserves the right not to be responsible for the topicality, correctness, completeness or quality of the information provided. Liability claims regarding damage caused by the use of any information provided, including any kind of information which is incomplete or incorrect, will therefore be rejected. All offers are not-binding and without obligation. Parts of the pages or the complete publication including all offers and information might be extended, changed or partly or completely deleted by the author without separate announcement.
							<br /><br /><b>2. Referrals and links</b><br />"%1$s" is not responsible for any contents linked or referred to from his pages - unless he has full knowledge of illegal contents and would be able to prevent the visitors of his site from viewing those pages. If any damage occurs by the use of information presented there, only the author of the respective pages might be liable, not the one who has linked to these pages. Furthermore the author is not liable for any postings or messages published by users of discussion boards, guestbooks or mailinglists provided on his page.
							<br /><br /><b>3. Copyright</b><br />"%1$s" intended not to use any copyrighted material for the publication or, if not possible, to indicatethe copyright of the respective object. The copyright for any material created by the author is reserved. Any duplication or use of objects such as images, diagrams, sounds or texts in other electronic or printed publications is not permitted without the author\'s agreement.
							<br /><br /><b>4. Privacy policy</b><br />If the opportunity for the input of personal or business data (email addresses, name, addresses) is given, the input of these data takes place voluntarily. The use and payment of all offered services are permitted - if and so far technically possible and reasonable - without specification of any personal data or under specification of anonymized data or an alias. The use of published postal addresses, telephone or fax numbers and email addresses for marketing purposes is prohibited, offenders sending unwanted spam messages will be punished.
							<br /><br /><b>5. Legal validity of this disclaimer</b><br />This disclaimer is to be regarded as part of the internet publication which you were referred from. If sections or individual terms of this statement are not legal or correct, the content or validity of the other parts remain uninfluenced by this fact.',
	'TXT_TOP1' 		=> 'Imprint according to &sect; 6 Tele Services Act (TDG), &sect; 6 of the Federal Contract (MDSTv) and Section 4, paragraph 3 Federal Data Protection Act (BDSG)',
	'TXT_TOP2' 		=> 'Responsible according to &sect; 10, paragraph 3 MDStV: %s (address as above).',
	'TXT_TOP3'		=> 'Responsible for the content',
	'NAME'  		=> 'Name',
	'COMPANY'  		=> 'Company',
	'ADRESS'  		=> 'Adress',
	'IMPR_LOCATION' => 'Postcode/Location',
	'PHOME'  		=> 'Phone',
	'TAXNR' 		=> 'Ust-ID',
	'IMPRESSUM_UPDATED'	=> 'The imprint was updated',
	'IMPRESSUM_DESC'	=> 'Here you can use the data for the site change and choose which options are to be displayed.',
	'MOBILE' 		=> 'Mobile',
	'FAX'			=> 'Fax',
	'JUSTICATION'		=> 'Jurisdiction',
	'TRADE'			=> 'Trade Register',
	'LOGO'			=> 'URL to a logo',
	'SHOW'			=> 'show',
));

?>