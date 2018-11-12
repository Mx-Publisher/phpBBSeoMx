<?php
/**
*
* posting [Romana]
*
* @package language
* @version $Id: posting.php 8479 2008-03-29 00:22:48Z naderman $
* @translate $Id: posting.php 8479 2008-05-19 18:44:00 www.phpbb.ro (crisiulian) Exp $
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
	'ADD_ATTACHMENT'			=> 'Incarca atasament',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Daca doriti sa atasati unul sau mai multe fisiere, introduceti detaliile mai jos.',
	'ADD_FILE'					=> 'Adauga fisierul',
	'ADD_POLL'					=> 'Creare chestionar',
	'ADD_POLL_EXPLAIN'			=> 'Daca nu vreti sa adaugati un chestionar subiectului, lasati campurile necompletate.',
	'ALREADY_DELETED'			=> 'Ne pare rau, dar acest mesaj este deja sters.',
	'ATTACH_QUOTA_REACHED'		=> 'Ne pare rau, cota atasamentelor a fost atinsa.',
	'ATTACH_SIG'				=> 'Ataseaza o semnatura (semnaturile pot fi modificate din Panoul utilizatorului)',

	'BBCODE_A_HELP'				=> 'Incarca atasament in line: [attachment=]numefisier.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Text bold: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Afiseaza cod: [code]cod[/code]',
	'BBCODE_E_HELP'				=> 'Lista: Adauga element de lista',
	'BBCODE_F_HELP'				=> 'Marime font: [size=85]text mic[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s este <em>DEZACTIVAT</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s este <em>ACTIVAT</em>',
	'BBCODE_I_HELP'				=> 'Text italic: [i]text[/i]',
	'BBCODE_L_HELP'				=> 'Lista: [list]text[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Listeaza articolele: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Lista ordonata: [list=]text[/list]',
	'BBCODE_P_HELP'				=> 'Adauga imagine: [img]http://cale_imagine[/img]',
	'BBCODE_Q_HELP'				=> 'Citeaza text: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Culoare font: [color=red]text[/color]  Sfat: de asemenea puteti folosi culorile hexazecimale culoare=#FF0000',
	'BBCODE_U_HELP'				=> 'Text subliniat: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'Adauga URL: [url]http://url[/url] sau [url=http://url]text URL[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'				=> 'Nu puteti readuce subiectul acesta in atentie atat de curand de la ultimul mesaj.',

	'CANNOT_DELETE_REPLIED'		=> 'Ne pare rau, dar puteti sterge numai mesajele la care nu s-a raspuns.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Acest mesaj a fost inchis. Nu mai puteti modifica mesajul.',
	'CANNOT_EDIT_TIME'			=> 'Nu mai puteti modifica sau sterge mesajul',
	'CANNOT_POST_ANNOUNCE'		=> 'Ne pare rau, dar nu puteti crea anunturi.',
	'CANNOT_POST_STICKY'		=> 'Ne pare rau, dar nu puteti crea subiecte importante.',
	'CHANGE_TOPIC_TO'			=> 'Schimbati tipul subiectului in',
	'CLOSE_TAGS'				=> 'Inchide taguri',
	'CURRENT_TOPIC'				=> 'Subiectul curent',

	'DELETE_FILE'				=> 'Sterge fisier',
	'DELETE_MESSAGE'			=> 'Sterge mesaj',
	'DELETE_MESSAGE_CONFIRM'	=> 'Sunteti sigur ca vreti sa stergeti acest mesaj?',
	'DELETE_OWN_POSTS'			=> 'Ne pare rau, dar puteti sterge doar propriile mesaje.',
	'DELETE_POST_CONFIRM'		=> 'Sunteti sigur ca vreti sa stergeti acest mesaj?',
	'DELETE_POST_WARN'			=> 'Odata sters, mesajul nu poate fi recuperat',
	'DISABLE_BBCODE'			=> 'Dezactiveaza CodulBB',
	'DISABLE_MAGIC_URL'			=> 'Nu analizeaza automat URL-urile',
	'DISABLE_SMILIES'			=> 'Dezactiveaza zambetele',
	'DISALLOWED_EXTENSION'		=> 'Extensia %s nu este permisa.',
	'DRAFT_LOADED'				=> 'Mesaj in lucru incarcat, poate veti dori sa finalizati mesajul acum.<br />Mesajul dumneavoastra in lucru va fi sters dupa ce veti trimite acest mesaj.',
	'DRAFT_LOADED_PM'			=> 'Mesaj in lucru incarcat, poate veti dori sa finalizati mesajul privat acum.<br />Mesajul dumneavoastra in lucru va fi sters dupa ce veti trimite acest mesaj privat.',
	'DRAFT_SAVED'				=> 'Mesajul in lucru a fost salvat cu succes.',
	'DRAFT_TITLE'				=> 'Titlu mesaj in lucru',

	'EDIT_REASON'				=> 'Motiv pentru modificarea acestui mesaj',
	'EMPTY_FILEUPLOAD'			=> 'Fisierul incarcat este gol.',
	'EMPTY_MESSAGE'				=> 'Trebuie sa introduceti un mesaj cand scrieti.',
	'EMPTY_REMOTE_DATA'			=> 'Fisierul nu a putut fi incarcat, va rugam sa incercati sa il incarcati manual.',

	'FLASH_IS_OFF'				=> '[flash] este <em>DEZACTIVAT</em>',
	'FLASH_IS_ON'				=> '[flash] este <em>ACTIVAT</em>',
	'FLOOD_ERROR'				=> 'Nu puteti face alt mesaj atat de curand de la anteriorul.',
	'FONT_COLOR'				=> 'Culoare font',
	'FONT_COLOR_HIDE'			=> 'Ascunde culoarea fontului',
	'FONT_HUGE'					=> 'Imens',
	'FONT_LARGE'				=> 'Mare',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Dimensiune font',
	'FONT_SMALL'				=> 'Mic',
	'FONT_TINY'					=> 'Micut',

	'GENERAL_UPLOAD_ERROR'		=> 'Nu s-a putut incarca atasamentul in %s.',

	'IMAGES_ARE_OFF'			=> '[img] este <em>DEZACTIVAT</em>',
	'IMAGES_ARE_ON'				=> '[img] este <em>ACTIVAT</em>',
	'INVALID_FILENAME'			=> '%s este un nume invalid de fisier.',

	'LOAD'						=> 'Incarca',
	'LOAD_DRAFT'				=> 'Incarca mesaj in lucru',
	'LOAD_DRAFT_EXPLAIN'		=> 'Aici puteti selecta mesajul in lucru pe care veti continua sa-l compuneti. Mesajul curent va fi anulat, tot continutul mesajelor curente va fi sters. Vizualizati, modificati si stergeti mesajele in lucru din Panoul utilizatorului.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Trebuie sa va autentificati pentru a putea aduce in atentie subiectele din acest forum.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Trebuie sa va autentificati pentru a putea sterge mesajele din acest forum.',
	'LOGIN_EXPLAIN_POST'		=> 'Trebuie sa va autentificati pentru a putea scrie in acest forum.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Trebuie sa va autentificati pentru a putea cita mesajele din acest forum.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Trebuie sa va autentificati pentru a putea raspunde in subiectele din acest forum.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Poti folosi fonturile doar pana la marimea de %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Fisierele dumneavostra flash pot avea inaltimea de maxim %1$d pixeli.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Fisierele dumneavostra flash pot avea latimea de maxim %1$d pixeli.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Imaginile dumneavostra pot avea inaltimea de maxim %1$d pixeli.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Imaginile dumneavostra pot avea latimea de maxim %1$d pixeli.',

	'MESSAGE_BODY_EXPLAIN'		=> 'Introduceti mesajul dumneavostra aici, poate contine nu mai mult de <strong>%d</strong> caractere.',
	'MESSAGE_DELETED'			=> 'Acest mesaj a fost sters cu succes.',
	'MORE_SMILIES'				=> 'Vezi mai multe zambete',

	'NOTIFY_REPLY'				=> 'Notifica-ma cand un raspuns este scris',
	'NOT_UPLOADED'				=> 'Fisierul nu a putut fi incarcat.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Nu puteti sterge optiunile existente ale chestionarului.',
	'NO_PM_ICON'				=> 'Nici o iconita MP',
	'NO_POLL_TITLE'				=> 'Trebuie sa introduceti un titlu chestionarului.',
	'NO_POST'					=> 'Mesajul cerut nu exista.',
	'NO_POST_MODE'				=> 'Niciun mod de scriere nu a fost specificat.',

	'PARTIAL_UPLOAD'			=> 'Fisierul incarcat a fost incarcat doar partial.',
	'PHP_SIZE_NA'				=> 'Marimea fisierelor de atasament este prea mare.<br />Nu s-a putut determina marimea maxima definita de PHP in php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Marimea fisierelor de atasament este prea mare, marimea maxima a fisierelor de incarcare este de %d MB.<br />Luati aminte ca aceasta este setata in php.ini si nu poate fi suprascrisa.',
	'PLACE_INLINE'				=> 'Aseaza in linie',
	'POLL_DELETE'				=> 'Sterge chestionar',
	'POLL_FOR'					=> 'Porneste chestionar pentru',
	'POLL_FOR_EXPLAIN'			=> 'Introduceti valoarea 0 sau lasati gol pentru un timp nelimitat al chestionarului.',
	'POLL_MAX_OPTIONS'			=> 'Optiuni per utilizator',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Acesta este numarul optiunilor pe care fiecare utilizator le poate selecta cand voteaza.',
	'POLL_OPTIONS'				=> 'Optiuni chestionar',
	'POLL_OPTIONS_EXPLAIN'		=> 'Introduceti fiecare optiune intr-o linie noua. Puteti introduce pana la <strong>%d</strong> optiuni.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Introduceti fiecare optiune intr-o linie noua. Puteti introduce pana la <strong>%d</strong> optiuni. Daca scoateti sau adaugati optiuni, toate voturile precedente vor fi resetate.',
	'POLL_QUESTION'				=> 'Intrebari chestionar',
	'POLL_TITLE_TOO_LONG'		=> 'Titlul chestionarului trebuie sa contina mai putin de 100 caractere.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Dimensiunea titlului chestionarului este prea mare, considerati scoaterea CodurilorBB sau a zambetelor.',
	'POLL_VOTE_CHANGE'			=> 'Permite revotarea',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Daca este activat, utilizatorii pot sa isi schimbe votul.',
	'POSTED_ATTACHMENTS'		=> 'Atasamente puse',
	'POST_APPROVAL_NOTIFY'		=> ' Acum veti fi notificat cand mesajul dumneavostra va fi aprobat.',
	'POST_CONFIRMATION'			=> 'Confirmarea mesajului',
	'POST_CONFIRM_EXPLAIN'		=> 'Pentru a preveni mesajele automate, administratorului forumului cere introducerea unui cod de confirmare. Codul este afisat in imaginea pe care o puteti vedea mai jos. Daca aveti probleme cu vederea sau nu puteti citi codul din alte motive, va rugam sa contactati %sAdministratorul forumului%s.',
	'POST_DELETED'				=> 'Acest mesaj a fost sters cu succes.',
	'POST_EDITED'				=> 'Acest mesaj a fost modificat cu succes.',
	'POST_EDITED_MOD'			=> 'Acest mesaj a fost modificat cu succes, dar necesita aprobarea unui moderator inainte de a fi vizibil public.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Iconita mesaj',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Revizuieste mesajul',
	'POST_REVIEW_EXPLAIN'		=> 'Cel putin un mesaj nou a fost facut in acest subiect. Poate ati dori sa va revizuiti mesajul.',
	'POST_STORED'				=> 'Acest mesaj a fost trimis cu succes.',
	'POST_STORED_MOD'			=> 'Acest mesaj a fost trimis cu succes, dar necesita aprobarea unui moderator inainte de a fi vizibil public.',
	'POST_TOPIC_AS'				=> 'Afiseaza subiectul ca',
	'PROGRESS_BAR'				=> 'Bara progres',

	'QUOTE_DEPTH_EXCEEDED'		=> 'Puteti sa introduceti numai %1$d citate in orice ordine.',

	'SAVE'						=> 'Salveaza',
	'SAVE_DATE'					=> 'Salvat la',
	'SAVE_DRAFT'				=> 'Salveaza mesajul in lucru',
	'SAVE_DRAFT_CONFIRM'		=> 'Atentie ca mesajele in lucru salvate au incluse doar subiectul si mesajul, orice alt element fiind scos. Vreti sa salvati mesajul in lucru acum?',
	'SMILIES'					=> 'Zambete',
	'SMILIES_ARE_OFF'			=> 'Zambetele sunt <em>DEZACTIVATE</em>',
	'SMILIES_ARE_ON'			=> 'Zambetele sunt <em>ACTIVATE</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Timpul limitat pentru subiect Important/Anunt',
	'STICK_TOPIC_FOR'			=> 'Subiect important pentru',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Introduceti valoarea 0 sau lasati gol pentru timp nelimitat la subiecte Important/Anunt.',
	'STYLES_TIP'				=> 'Sfat: Stilurile pot fi aplicate rapid textului selectat.',

	'TOO_FEW_CHARS'				=> 'Mesajul dumneavostra contine foarte putine caractere.',
	'TOO_FEW_POLL_OPTIONS'		=> 'Trebuie sa introduceti cel putin doua optiuni in chestionar.',
	'TOO_MANY_ATTACHMENTS'		=> 'Nu puteti adauga alt atasament, %d este maxim.',
	'TOO_MANY_CHARS'			=> 'Mesajul dumneavostra contine prea multe caractere.',
	'TOO_MANY_CHARS_POST'		=> 'Mesajul dumneavostra contine %1$d caractere. Numarul maxim de caractere permis este %2$d.',
	'TOO_MANY_CHARS_SIG'		=> 'Semnatura dumneavostra contine %1$d caractere. Numarul maxim de caractere permis este %2$d.',
	'TOO_MANY_POLL_OPTIONS'		=> 'Ati incercat sa introduceti prea multe optiuni in chestionar.',
	'TOO_MANY_SMILIES'			=> 'Mesajul dumneavostra contine prea multe zambete. Numarul maxim de zambete permis este %d.',
	'TOO_MANY_URLS'				=> 'Mesajul dumneavostra contine prea multe URL-uri. Numarul maxim de URL-uri permis este %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Nu puteti specifica mai multe optiuni per utilizator decat optiunile existente in chestionar.',
	'TOPIC_BUMPED'				=> 'Subiectul a fost adus in atentie cu succes.',

	'UNAUTHORISED_BBCODE'		=> 'Nu puteti folosi anumite coduriBB: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Pentru a schimba acest subiect inapoi, de la a fi global la un subiect normal, trebuie sa selectati forumul in care doriti ca acest subiect sa fie afisat.',
	'UPDATE_COMMENT'			=> 'Comentariu actualizat',
	'URL_INVALID'				=> 'URL-ul specificat este invalid.',
	'URL_NOT_FOUND'				=> 'Fisierul specificat nu poate fi gasit.',
	'URL_IS_OFF'				=> '[url] este <em>DEZACTIVAT</em>',
	'URL_IS_ON'					=> '[url] este <em>ACTIVAT</em>',
	'USER_CANNOT_BUMP'			=> 'Nu puteti aduce in atentie subiectele in acest forum.',
	'USER_CANNOT_DELETE'		=> 'Nu puteti sterge mesajele in acest forum.',
	'USER_CANNOT_EDIT'			=> 'Nu puteti modifica mesajele in acest forum.',
	'USER_CANNOT_REPLY'			=> 'Nu puteti raspunde in acest forum.',
	'USER_CANNOT_FORUM_POST'	=> 'Nu puteti sa efectuati operatiuni de scriere pe acest forum pentru ca tipul forumului nu suporta acest lucru.',

	'VIEW_MESSAGE'				=> '%sVizualizati mesajul propriu trimis%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sVizualizati mesajul privat propriu trimis%s',

	'WRONG_FILESIZE'			=> 'Fisierul este prea mare, marimea maxima permisa este %1d %2s.',
	'WRONG_SIZE'				=> 'Imaginea trebuie sa fie de cel putin %1$d pixeli latime, %2$d pixeli inaltime si cel mult %3$d pixeli latime si %4$d pixeli inaltime. Imaginea trimisa are latimea de %5$d pixeli si inaltimea de %6$d pixeli.',
));

?>