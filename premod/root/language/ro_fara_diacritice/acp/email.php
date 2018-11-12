<?php
/**
*
* acp_email [Romana]
*
* @package language
* @version $Id: email.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
* @translate $Id: email.php,v 1.16 2007/12/29 17:05:00 www.phpbb.ro (Aliniuz) Exp $
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

// Email settings
$lang = array_merge($lang, array(
    'ACP_MASS_EMAIL_EXPLAIN'        => 'Aici puteti trimite un mesaj prin e-mail fie tuturor utilizatorilor, fie utilizatorilor asociati unui anumit grup <strong>care au specificat ca opteaza sa primeasca mesaje in grup</strong>. Pentru a efectua aceasta operatiune, un mesaj electronic va fi trimis la adresa de e-mail administrativa specificata, cu o copie oarba trimisa tuturor recipientilor. Setarea standard este ca doar 50 destinatari sa poata fi inclusi intr-un astfel de mesaj, pentru mai multi destinatari se vor trimite mai multe mesaje electronice. Daca trimiteti mesajul unui grup larg de utilizatori, trebuie sa aveti rabdare si grija sa nu inchideti pagina. Este normal ca un mesaj in masa sa dureze mult, iar dupa ce procesul se va finaliza, veti fi anuntat prin e-mail',
    'ALL_USERS'                        => 'Toti utilizatorii',

    'COMPOSE'                => 'Compune',

    'EMAIL_SEND_ERROR'        => 'Au aparut una sau mai multe erori in timpul trimiterii mesajului electronic. Verificati %sJurnalul de erori%s pentru mesaje detaliate de eroare.',
    'EMAIL_SENT'            => 'Mesajul dumneavoastra a fost trimis.',
    'EMAIL_SENT_QUEUE'        => 'Mesajul dumneavoastra a fost pastrat pentru trimitere.',

    'LOG_SESSION'            => 'Inregistrati sesiunea de trimitere a mesajului electronic in jurnalul critic',

    'SEND_IMMEDIATELY'        => 'Trimite imediat',
    'SEND_TO_GROUP'            => 'Trimite catre grupul',
    'SEND_TO_USERS'            => 'Trimite catre utilizatorii',
    'SEND_TO_USERS_EXPLAIN'    => 'Specificand numele aici, veti suprascrie orice grup selectat mai sus. Introduceti fiecare nume de utilizator pe o linie noua.',
    
    'MAIL_HIGH_PRIORITY'    => 'Mare',
    'MAIL_LOW_PRIORITY'        => 'Mica',
    'MAIL_NORMAL_PRIORITY'    => 'Normala',
    'MAIL_PRIORITY'            => 'Prioritatea mesajului electronic',
    'MASS_MESSAGE'            => 'Mesajul dumneavoastra',
    'MASS_MESSAGE_EXPLAIN'    => 'Retineti faptul ca puteti introduce doar text simplu. Toate semnele vor fi sterse inainte de trimitere.',
    
    'NO_EMAIL_MESSAGE'        => 'Trebuie sa introduceti un mesaj.',
    'NO_EMAIL_SUBJECT'        => 'Trebuie sa specificati un subiect pentru mesajul dumneavoastra.',
));

?>