<?php
/**
*
* acp_board [Romana]
*
* @package language
* @version $Id: board.php 8479 2008-03-29 00:22:48Z naderman $
* @translate $Id: board.phpv 8479 2008-05-19 23:00:00 www.phpbb.ro (shara21jonny) Exp $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'Aici puteti efectua operatiunile de baza pentru forumul propriu, ca de exemplu alocarea unui nume si unei descrieri, specificarea valorilor standard pentru fusul orar sau limba, etc.',
	'CUSTOM_DATEFORMAT'				=> 'Personalizat…',
	'DEFAULT_DATE_FORMAT'			=> 'Format data',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'Formatul datei este acelasi ca si functia PHP <code>date</code>.',
	'DEFAULT_LANGUAGE'				=> 'Limba standard',
	'DEFAULT_STYLE'					=> 'Stil standard',
	'DISABLE_BOARD'					=> 'Dezactiveaza forum',
	'DISABLE_BOARD_EXPLAIN'			=> 'Aceasta operatie va face forumul indisponibil pentru utilizatori. De asemenea, daca doriti puteti specifica un mesaj scurt (255 caractere) ce va fi afisat.',
	'OVERRIDE_STYLE'				=> 'Suprascrie stilul utilizatorului',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Inlocuieste stilul utilizatorului cu cel standard.',
	'SITE_DESC'						=> 'Descriere site',
	'SITE_NAME'						=> 'Nume site',
	'SYSTEM_DST'					=> 'Activeaza timpul de vara/<abbr title="Daylight Saving Time">DST</abbr>',
	'SYSTEM_TIMEZONE'				=> 'Fusul orar al sistemului',
	'WARNINGS_EXPIRE'				=> 'Durata avertisment',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'Numarul zilelor ce trebuie sa treaca inainte ca avertismentul sa expire automat din inregistrarea unui utilizator',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'Aici puteti activa/dezactiva mai multe functionalitati ale forumului',

	'ALLOW_ATTACHMENTS'			=> 'Permite atasamente',
	'ALLOW_BIRTHDAYS'			=> 'Permite zile de nastere',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'Permite ca zilele de nastere sa fie specificate, iar varsta sa fie afisata in profilurile utilizatorilor. Retineti ca lista zilelor de nastere din pagina de start a forumului este controlata de o alta setare.',
	'ALLOW_BOOKMARKS'			=> 'Permite marcarea subiectelor',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'Utilizatorul poate sa pastreze legaturile catre subiectele preferate. ',
	'ALLOW_BBCODE'				=> 'Permite cod BB',
	'ALLOW_FORUM_NOTIFY'		=> 'Permite abonarea la forumuri',
	'ALLOW_NAME_CHANGE'			=> 'Permite schimbari nume de utilizator',
	'ALLOW_NO_CENSORS'			=> 'Permite dezactivarea cuvintelor cenzurate',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'Utilizatorii pot alege daca permit cenzurarea automata a cuvintelor in mesajele din forum, dar si a celor din mesajele private.',
	'ALLOW_PM_ATTACHMENTS'		=> 'Permite atasamente in mesajele private',
	'ALLOW_SIG'					=> 'Permite semnaturi',
	'ALLOW_SIG_BBCODE'			=> 'Permite cod BB in semnaturile utilizatorilor',
	'ALLOW_SIG_FLASH'			=> 'Permite folosirea etichetei de cod BB <code>[FLASH]</code> in semnaturile utilizatorilor',
	'ALLOW_SIG_IMG'				=> 'Permite folosirea etichetei de cod BB <code>[IMG]</code> in semnaturile utilizatorilor',
	'ALLOW_SIG_LINKS'			=> 'Permite folosirea legaturilor in semnaturile utilizatorilor',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'Daca dezactivati eticheta de cod BB <code>[URL]</code> atunci si legaturile automate vor fi dezactivate.',
	'ALLOW_SIG_SMILIES'			=> 'Permite folosirea zambetelor in semnaturile utilizatorilor',
	'ALLOW_SMILIES'				=> 'Permite zambete',
	'ALLOW_TOPIC_NOTIFY'		=> 'Permite abonarea la subiecte',
	'BOARD_PM'					=> 'Mesagerie privata',
	'BOARD_PM_EXPLAIN'			=> 'Activeaza sau dezactiveaza mesageria privata pentru toti utilizatorii.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'Avatar-urile sunt in general imagini mici si unice pe care utilizatorul le poate asocia cu el insusi. Depinzand de stil, acestea sunt in general afisate sub numele utilizatorului cand se vizualizeaza subiectele. Aici puteti specifica modul in care utilizatorii pot sa-si defineasca avatarurile (imaginile asociate). Ca sa puteti incarca avataruri trebuie sa aveti creat deja directorul specificat mai jos si sa va asigurati ca poate fi scris prin serverul web. De asemenea, retineti ca dimensiunile limitate ale fisierelor sunt impuse doar la incarcarea avatarelor, ele nu se aplica pentru imaginile aflate la distanta.',

	'ALLOW_LOCAL'					=> 'Permite galerie avataruri',
	'ALLOW_REMOTE'					=> 'Permite avataruri la distanta',
	'ALLOW_REMOTE_EXPLAIN'			=> 'Avatarul este localizat pe alt site web',
	'ALLOW_UPLOAD'					=> 'Permite incarcarea avatarurilor',
	'AVATAR_GALLERY_PATH'			=> 'Cale galerie avatar',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'Calea din directorul radacina phpBB pentru imagini preincarcate, de exemplu <samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'			=> 'Cale stocare avatar',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'Calea din directorul radacina phpBB, de exemplu. <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'				=> 'Dimensiunile maxime ale avatarului',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'Inaltime x Lungime in pixeli',
	'MAX_FILESIZE'					=> 'Dimensiunile maxime ale fisierului avatar',
	'MAX_FILESIZE_EXPLAIN'			=> 'Pentru fisierele avatar incarcate',
	'MIN_AVATAR_SIZE'				=> 'Dimensiunile minime ale avatarului',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'Inaltime x Lungime in pixeli',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'Aici puteti defini toate setarile standard pentru mesageria privata.',

	'ALLOW_BBCODE_PM'			=> 'Permite cod BB in mesajele private',
	'ALLOW_FLASH_PM'			=> 'Permite folosirea etichetei codului BB de tipul <code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'Retineti ca facilitatea de a folosi fisiere flash in mesajele private, daca este activata aici, depinde si de permisiuni.',
	'ALLOW_FORWARD_PM'			=> 'Permite trimiterea mai departe a mesajelor private',
	'ALLOW_IMG_PM'				=> 'Permite folosirea etichetelor codului BB de tipul <code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> 'Permite trimiterea mesajelor private catre mai multi utilizatori si grupuri',
	'ALLOW_PRINT_PM'			=> 'Permite previzualizarea tiparirilor in mesageria privata',
	'ALLOW_QUOTE_PM'			=> 'Permite citate in mesageria privata',
	'ALLOW_SIG_PM'				=> 'Permite semnatura in mesajele private',
	'ALLOW_SMILIES_PM'			=> 'Permite zambete in mesajele private',
	'BOXES_LIMIT'				=> 'Numarul maxim de mesaje private pe casuta',
	'BOXES_LIMIT_EXPLAIN'		=> 'Utilizatorii pot primi nu mai mult decat acest numar de mesaje in fiecare din casutele lor de mesaje. Specificati valoarea 0 pentru a permite un numar nelimitat de mesaje.',
	'BOXES_MAX'					=> 'Numarul maxim de directoare pentru mesaje private',
	'BOXES_MAX_EXPLAIN'			=> 'Standard, utilizatorii pot crea atat de multe directoare personale pentru mesajele private.',
	'ENABLE_PM_ICONS'			=> 'Permite folosirea iconitelor pentru subiect in mesajele private',
	'FULL_FOLDER_ACTION'		=> 'Actiunea standard pentru director plin',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Actiunea standard ce va fi luata daca directorul utilizatorului este plin, presupunand ca actiunea directorului utilizatorului, daca este setata la toate, nu este aplicabila. Singura exceptie este pentru directorul “Mesaje trimise” unde actiunea initiala este mereu aceea de a sterge mesajele vechi.',
	'HOLD_NEW_MESSAGES'			=> 'Pastreaza mesajele noi',
	'PM_EDIT_TIME'				=> 'Limita timpului de modificare',
	'PM_EDIT_TIME_EXPLAIN'		=> 'Limiteaza timpul disponibil pentru a modifica mesajele private care inca nu au fost trimise. Specificand valoarea 0, aceasta operatie va fi dezactivata.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'Aici puteti configura toate setarile standard pentru scriere.',
	'ALLOW_POST_LINKS'					=> 'Permite legaturi in mesaje/mesaje private',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'Daca dezactivati etichetele de cod BB <code>[URL]</code>, atunci sunt dezactivate si URL-urile automate/magice.',
	'ALLOW_POST_FLASH'					=> 'Permite folosirea etichetei de cod BB <code>[FLASH]</code> in mesaje.',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'Daca eticheta de cod BB <code>[FLASH]</code> este dezactivata, atunci este dezactivat si in mesaje. Pe de alta parte, sistemul de permisiuni controleaza care utilizator poate folosi eticheta de cod BB <code>[FLASH]</code>.',

	'BUMP_INTERVAL'					=> 'Interval popularitate',
	'BUMP_INTERVAL_EXPLAIN'			=> 'Numarul de minute, ore sau zile intre ultimul mesaj in subiect si posibilitatea de a populariza acest subect.',
	'CHAR_LIMIT'					=> 'Numarul maxim de caractere pe mesaj',
	'CHAR_LIMIT_EXPLAIN'			=> 'Numarul caracterelor permise intr-un mesaj. Specificati 0 pentru un numar nelimitat de caractere.',
	'DISPLAY_LAST_EDITED'			=> 'Afiseaza timpul cand s-a efectuat ultima modificare',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'Selectati daca informatiile despre ultima modificare sa fie afisate in mesaje.',
	'EDIT_TIME'						=> 'Limiteaza timpul de modificare',
	'EDIT_TIME_EXPLAIN'				=> 'Limiteaza timpul disponibil pentru modificarea unui mesaj nou. Specificand valoarea 0, dezactivati aceasta actiune.',
	'FLOOD_INTERVAL'				=> 'Interval flood',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'Numarul de secunde pe care un utilizator trebuie sa-l astepte intre publicari. Pentru a le permite utilizatorilor sa ignore aceasta restrictie, modificati-le permisiunile.',
	'HOT_THRESHOLD'					=> 'Limita subiect popular',
	'HOT_THRESHOLD_EXPLAIN'			=> 'Numarul de mesaje pe subiect necesare pentru marcarea acestuia ca subiect popular. Specificati valoarea 0 pentru a dezactiva subiectele populare.',
	'MAX_POLL_OPTIONS'				=> 'Numarul maxim de optiuni pentru chestionare',
	'MAX_POST_FONT_SIZE'			=> 'Marimea maxima a fontului in mesaj',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'Marimea maxima a fontului permisa intr-un mesaj. Specificati valoarea 0 pentru marime nelimitata a fontului.',
	'MAX_POST_IMG_HEIGHT'			=> 'Inaltimea maxima a imaginii in mesaj',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'Inaltimea maxima a unei imagini/fisier flash in posturi. Specificati valoarea 0 pentru inaltime nelimitata.',
	'MAX_POST_IMG_WIDTH'			=> 'Latimea maxima a unei imagini intr-un mesaj',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'Latimea maxima a unei imagini/fisier flash in mesaje. Specificati valoarea 0 pentru latime nelimitata.',
	'MAX_POST_URLS'					=> 'Numar maxim de legaturi pe mesaj',
	'MAX_POST_URLS_EXPLAIN'			=> 'Numarul maxim de URL-uri intr-un mesaj. Specificati valoarea 0 pentru legaturi nelimitate.',
	'POSTING'						=> 'Publicare',
	'POSTS_PER_PAGE'				=> 'Mesaje pe pagina',
	'QUOTE_DEPTH_LIMIT'				=> 'Numarul maxim de citate in cascada pe mesaj',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'Numarul maxim de citate in cascada dintr-un mesaj. Specificati valoarea 0 pentru adancime nelimitata.',
	'SMILIES_LIMIT'					=> 'Numarul maxim de zambete pe mesaj',
	'SMILIES_LIMIT_EXPLAIN'			=> 'Numarul maxim de zambete dintr-un mesaj. Specificati valoarea 0 pentru zambete nelimitate.',
	'TOPICS_PER_PAGE'				=> 'Subiecte pe pagina',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'Aici puteti alege toate setarile standard pentru semnaturi.',

	'MAX_SIG_FONT_SIZE'				=> 'Marimea maxima a fontului in semnatura',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'Marimea maxima a fontului permisa in semnaturile utilizatorilor. Specificati valoarea 0 pentru marime nelimitata.',
	'MAX_SIG_IMG_HEIGHT'			=> 'Inaltimea maxima a imaginii in semnatura',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'Inaltimea maxima a unei imagini/fisier flash in semnaturile utilizatorilor. Specificati valoarea 0 pentru inaltime nelimitata.',
	'MAX_SIG_IMG_WIDTH'				=> 'Latimea maxima a imaginii din semnatura',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'Latimea maxima a unei imagini/fisier flash in semnaturile utilizatorilor. Specificati valoarea 0 pentru latime nelimitata.',
	'MAX_SIG_LENGTH'				=> 'Lungimea maxima a semnaturii',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'Numarul maxim de caractere din semnaturile utilizatorilor.',
	'MAX_SIG_SMILIES'				=> 'Numarul maxim de zambetele pe semnatura',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'Numarul maxim de zambete permis in semnaturile utilizatorilor. Specificati valoarea 0 pentru zambete nelimitate.',
	'MAX_SIG_URLS'					=> 'Numarul maxim de legaturi pe semnatura',
	'MAX_SIG_URLS_EXPLAIN'			=> 'Numarul maxim de legaturi in semnaturile utilizatorilor. Specificati valoarea 0 pentru legaturi nelimitate.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'Aici puteti defini setarile asocitate inregistrarii si profilului.',

	'ACC_ACTIVATION'			=> 'Activare cont',
	'ACC_ACTIVATION_EXPLAIN'	=> 'Aceasta determina daca utilizatorii au acces imediat la forum sau daca este necesara o confirmare. De asemenea, puteti dezactiva noile inregistrari.',
	'ACC_ADMIN'					=> 'De catre administrator',
	'ACC_DISABLE'				=> 'Dezactiveaza',
	'ACC_NONE'					=> 'Niciunul',
	'ACC_USER'					=> 'De catre utilizator',
//	'ACC_USER_ADMIN'			=> 'Utilizator + administrator',
	'ALLOW_EMAIL_REUSE'			=> 'Permite refolosirea adresei de e-mail',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'Utilizatorii diferiti se pot inregistra cu aceeasi adresa de e-mail.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'Numar de fax COPPA',
	'COPPA_MAIL'				=> 'Adresa mail COPPA',
	'COPPA_MAIL_EXPLAIN'		=> 'Aceasta este adresa de mail unde vor fi trimise formularele de inregistrare COPPA.',
	'ENABLE_COPPA'				=> 'Permite COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'Aceasta optiune le cere utilizatorilor sa declare daca au 13 ani sau mai mult in confirmitate cu declaratia U.S. COPPA Act. Daca aceasta optiune este dezactivata, atunci grupurile specifice COPPA nu vor mai fi afisate.',
	'MAX_CHARS'					=> 'Max',
	'MIN_CHARS'					=> 'Min',
	'MIN_TIME_REG'				=> 'Timpul minin pentru inregistrare',
	'MIN_TIME_REG_EXPLAIN'		=> 'Formularul de inregistrare nu poate fi trimis inainte ca acest interval de timp sa treaca.',
	'MIN_TIME_TERMS'			=> 'Timpul minin pentru acceptarea termenilor',
	'MIN_TIME_TERMS_EXPLAIN'	=> 'Pagina cu termeni nu poate fi sarita inainte ca acest interval de timp sa treaca.',
	'NO_AUTH_PLUGIN'			=> 'Nici un plugin de autentificare potrivit nu a fost gasit.',
	'PASSWORD_LENGTH'			=> 'Lungime parola',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'Numarul minim si maxim de caractere in parola.',
	'REG_LIMIT'					=> 'Incercari inregistrare',
	'REG_LIMIT_EXPLAIN'			=> 'Numarul de incercari pe care utilizatorul le poate face la codul de confirmare inainte ca sesiunea sa fie inchisa.',
	'USERNAME_ALPHA_ONLY'		=> 'Numai caractere alfanumerice',
	'USERNAME_ALPHA_SPACERS'	=> 'Alfanumerice si spatii',
	'USERNAME_ASCII'			=> 'ASCII (niciun unicod international)',
	'USERNAME_LETTER_NUM'		=> 'Orice litera si numar',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'Orice litera, numar si spatiu',
	'USERNAME_CHARS'			=> 'Limiteaza caracterele utilizatorului',
	'USERNAME_CHARS_ANY'		=> 'Orice caracter',
	'USERNAME_CHARS_EXPLAIN'	=> 'Restrictioneaza tipul de caractere ce ar putea fi folosit in numele utilizatorilor, spatierile sunt; spatiu, -, +, _, [ si ]',
	'USERNAME_LENGTH'			=> 'Lungime nume utilizator',
	'USERNAME_LENGTH_EXPLAIN'	=> 'Numarul minim si maxim de caractere in numele utilizatorului.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'Aici puteti defini confirmarea vizuala standard si setarile CAPTCHA.',

	'CAPTCHA_GD'				        	=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'	    	=> 'Alarmeaza GD CAPTCHA in prim plan',
	'CAPTCHA_GD_EXPLAIN'		        	=> 'Foloseste GD pentru a face un CAPTCHA mai avansat.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Foloseste alarmarea in prim plan pentru a face GD bazat CAPTCHA mai puternic.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA fundalul alarmat al axei x',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Foloseste setarile mai slabe pentru a face GD bazat pe CAPTCHA mai puternic. 0 va dezactiva alarmarea axei x din fundal.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA fundalul alarmat al axei y',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Foloseste setarile mai slabe pentru a face GD bazat pe CAPTCHA mai puternic. 0 va dezactiva alarmarea axei y din fundal.',

	'CAPTCHA_PREVIEW_MSG'					=> 'Schimbarile proprii pentru setarile confirmarii vizuale nu au fost salvate. Aceasta este doar o previzualizare.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'Cum va arata CAPTCHA folosind setarile curente. Folositi butonul de previzualizare pentru a reimprospata. Generarile captcha sunt aleatorii si vor fi diferite de la o vizualizare la alta.',
	'VISUAL_CONFIRM_POST'		        	=> 'Activeaza confirmarea vizuala pentru mesajele vizitatorilor',
	'VISUAL_CONFIRM_POST_EXPLAIN'       	=> 'Cere utilizatorilor anonimi sa introduca un cod aleatoriu potrivit cu imaginea pentru a preveni mesajele in bloc.',
	'VISUAL_CONFIRM_REG'			        => 'Activeaza confirmarea vizuala pentru inregistrari',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'Cere utilizatorilor noi sa introduca un cod aleator care sa se potriveasca cu o imagine pentru a preveni inregistrarile in bloc.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'Aceste detalii definesc datele folosite pentru a trimite cookie-urile catre browserele utilizatorilor. In majoritatea cazurilor, valorile standard pentru setarile cookie ar trebui sa fie suficiente. Daca trebuie sa schimbati vreuna, aveti grija, setarile incorecte pot face imposibila autentificarea utilizatorilor.',

	'COOKIE_DOMAIN'				=> 'Domeniu cookie',
	'COOKIE_NAME'				=> 'Nume cookie',
	'COOKIE_PATH'				=> 'Cale cookie',
	'COOKIE_SECURE'				=> 'Securizare cookie',
	'COOKIE_SECURE_EXPLAIN'		=> 'Daca serverul propriu ruleaza via SSL atunci setati aceasta optiune pentru a o activa, altfel ramane ca dezactivata. Avand aceasta optiune activata si serverul propriu nu ruleaza via SSL, atunci vor aparea erori de server in timpul redirectionarilor.',
	'ONLINE_LENGTH'				=> 'Limita timp utilizatori online',
	'ONLINE_LENGTH_EXPLAIN'		=> 'Numarul de minute dupa care utilizatorii inactivi nu vor mai aparea in sectiunea "Cine este conectat". Cu cat este mai mare valoarea, cu atat este lunga procesarea necesara pentru a genera aceasta lista.',
	'SESSION_LENGTH'			=> 'Durata sesiune',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sesiunea va expira dupa acest timp, in secunde.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'Aici puteti activa si dezactiva anumite functii ale forumului pentru a reduce volumul de procesare cerut. Pe majoritatea serverelor nu este nevoie sa dezactivati vreo functie. Oricum, pe anumite sisteme sau in mediile de gazduire partajate s-ar putea sa fie benefica dezactivarea acestor capabilitati de care nu aveti neaparat nevoie. De asemenea, puteti specifica inainte limitele pentru incarcarea sistemului si sesiunile active ce vor determina ca forumul sa devina indisponibil.',

	'CUSTOM_PROFILE_FIELDS'			=> 'Campuri profil personalizate',
	'LIMIT_LOAD'					=> 'Limiteaza incarcarea sistemului',
	'LIMIT_LOAD_EXPLAIN'			=> 'Daca media primului minut de incarcare a sistemului depaseste aceasta valoare atunci forumul va trece automat offline. O valoarea de 1.0 este egala cu ~100% din utilizarea unui procesor. Acestea functioneaza doar pe servere UNIX si unde aceasta informatie este accesibila. Valoarea de aici se reseteaza la 0 daca phpBB nu a reusit sa ajunga la limita de incarcare.',
	'LIMIT_SESSIONS'				=> 'Limita sesiunilor',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'Daca numarul de sesiuni depaseste aceasta valoare intr-un minut, forumul va trece offline. Specificati 0 pentru sesiuni nelimitate.',
	'LOAD_CPF_MEMBERLIST'			=> 'Permite stilurilor sa afiseze campuri de profil personalizate in lista membrilor',
	'LOAD_CPF_VIEWPROFILE'			=> 'Afiseaza campuri de profil personalizate in profilul utilizatorului',
	'LOAD_CPF_VIEWTOPIC'			=> 'Afiseaza campuri de profil personalizate in paginile subiectului',
	'LOAD_USER_ACTIVITY'			=> 'Arata activitatea utilizatorului',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'Afiseaza subiectul/forumul activ in profilele utilizatorilor dar si in panoul utilizatorului. Este recomandat sa dezactivati aceasta optiune pe un forum cu mai mult de un milion de mesaje.',
	'RECOMPILE_STYLES'			=> 'Recompileaza componentele vechi ale stilului',
	'RECOMPILE_STYLES_EXPLAIN'	=> 'Cauta componentele de stil actualiizate in sistemul de fisiere si le recompileaza.',
	'YES_ANON_READ_MARKING'			=> 'Permite marcarea subiectelor pentru vizitatori',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'Pastreaza informatiile de stare citite/necitite pentru vizizatori. Daca este dezactivata, mesajele vor fi intotdeauna marcate ca si citite pentru vizitatori.',
	'YES_BIRTHDAYS'					=> 'Permite afisarea zilei de nastere',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'Daca este dezactivata, lista zilelor de nastere nu va mai fi afisata. Pentru a permite aceste setari sa aiba efect, functionalitatea zilei de nastere trebuie de asemenea sa fie activata.',
	'YES_JUMPBOX'					=> 'Permite afisarea jumpbox-ului',
	'YES_MODERATORS'				=> 'Permite afisarea moderatorilor',
	'YES_ONLINE'					=> 'Permite listarea utilizatorilor conectati',
	'YES_ONLINE_EXPLAIN'			=> 'Afiseaza informatiile utilizatorilor conectati in index, forum si paginile subiectelor.',
	'YES_ONLINE_GUESTS'				=> 'Activeaza afisarea vizitatorilor conectati in sectiunea "Cine este conectat"',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'Permite afisarea informatiilor vizitatorilor conectati in "Cine este conectat".',
	'YES_ONLINE_TRACK'				=> 'Activeaza afisarea informatiilor utilizatorilor conectati/neconectati',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'Afiseaza informatiile online pentru utilizatori in profile si in paginile subiectului.',
	'YES_POST_MARKING'				=> 'Activeaza subiectele punctate',
	'YES_POST_MARKING_EXPLAIN'		=> 'Indica daca utilizatorul a raspuns intr-un subiect.',
	'YES_READ_MARKING'				=> 'Activeaza marcarea subiectului server-side',
	'YES_READ_MARKING_EXPLAIN'		=> 'Pastreaza informatiile de stare citite/necitite in baza de date mai degraba decat intr-un cookie.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB suporta plugin-uri de autentificare sau module. Acestea va permit sa determinati cati utilizatori sunt autentificati cand acestia intra pe forum. In mod standard sunt furnizate trei plugin-uri; DB, LDAP si Apache. Nu toate metodele necesita informatii aditionale, asa ca specificati valorile pentru campuri daca ele sunt relevante pentru metoda selectata.',

	'AUTH_METHOD'				=> 'Selectati o metoda de autentificare',

	'APACHE_SETUP_BEFORE_USE'	=> 'Trebuie sa configurati autentificarea Apache inainte sa folositi phpBB cu aceasta metoda. Retineti ca numele de utilizator pe care-l folositi pentru autentificarea Apache trebuie sa fie acelasi cu numele propriu de utilizator phpBB. Autentificarea Apache poate fi folosita doar cu mod_php (nu cu o versiune CGI) si safe_mode dezactivat.',

	'LDAP_DN'						=> 'Baza LDAP <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'Acesta este Distinguished Name, localizeaza informatiile utilizatorului, ex. <samp>o=Compania mea,c=US</samp>',
	'LDAP_EMAIL'					=> 'Atributul e-mail-ului LDAP',
	'LDAP_EMAIL_EXPLAIN'			=> 'Specificati aceasta valoare atributului de e-mail al numelui de utilizator propriu (daca exista unul) ca sa asociati automat adresa de e-mail utilizatorilor noi creati. Daca lasati acest camp necompletat, atunci campul de adresa e-mail pentru utilizatorii care s-au autentificat pentru prima oara va fi gol.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'Legatura la serverul LDAP folosind utilizatorul/parola specificata a esuat.',
	'LDAP_NO_EMAIL'					=> 'Atributul e-mail specificat nu exista.',
	'LDAP_NO_IDENTITY'				=> 'Nu a putut gasi o identitate de autentificare pentru %s.',
	'LDAP_PASSWORD'					=> 'Parola LDAP',
	'LDAP_PASSWORD_EXPLAIN'			=> 'Lasati necompletat pentru a folosi legatura anonima. Altfel specificati parola pentru utilizatorul de mai sus. Necesar pentru serverele Active Directory. <strong>AVERTISMENT:</strong> Aceasta parola va fi pastrata ca text plin in baza de date, fiind vizibila tuturor celor care pot accesa baza de date sau care pot vizualiza aceasta pagina de configurare.',
	'LDAP_PORT'						=> 'Portul serverului LDAP',
	'LDAP_PORT_EXPLAIN'				=> 'Optional puteti specifica un port care ar trebui folosit pentru conectarea la serverul LDAP in locul portului standard 389.',
	'LDAP_SERVER'					=> 'Numele serverului LDAP',
	'LDAP_SERVER_EXPLAIN'			=> 'Daca folositi LDAP, acesta este numele gazdei sau adresa IP a serverului LDAP. Alternativ, puteti specifica o adresa de genul ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'Aceasta este cheia sub care cauta o identitate de autentificare data, de exemplu <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'Utilizatorul LDAP <var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Lasati necompletat pentru a folosi legatura anonima. Daca valoarea este specificata, phpBB foloseste numele completat in incercarile de autentificare pentru a gasi utilizatorul corect, de exemplu <samp>uid=NumeUtilizator,ou=UnitateaMeaMyUnit,o=CompaniaMea,c=US</samp>. Necesar pentru serverele Active Directory.',
	'LDAP_USER_FILTER'				=> 'Filtru utilizator LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Optional, mai departe puteti limita cu filtre suplimentare obiectele cautate. De exemplu <samp>objectClass=posixGroup</samp> ar rezulta in a folosi <samp>(&amp;(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'Aici puteti defini setarile legate de server si domeniu. Asigurati-va ca datele introduse sunt corecte, erorile vor duce la e-mail-uri continand informatii incorecte. Cand specificati numele domeniului nu uitati sa includeti http:// sau alt termen de protocol. Modificati doar numarul portului daca stiti ca serverul foloseste o alta valoare, portul 80 este corect in majoritatea cazurilor.',

	'ENABLE_GZIP'				=> 'Activeaza compresia GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'Continutul generat va fi compresat inainte de a fi trimis utilizatorului. Aceasta operatie poate reduce traficul retelei, dar de asemenea va mari gradul de folosire al procesorului pe server si pe partea clientului.',
	'FORCE_SERVER_VARS'			=> 'Forteaza setarile URL pentru server',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'Daca alegeti "Da", setarile serverului definite vor fi folosite in locul determinarii automate a valorilor.',
	'ICONS_PATH'				=> 'Cale stocare iconite mesaj',
	'ICONS_PATH_EXPLAIN'		=> 'Calea din directorul radacina al phpBB, de exemplu <samp>images/icons</samp>',
	'PATH_SETTINGS'				=> 'Setari cale',
	'RANKS_PATH'				=> 'Cale stocare imagini rang',
	'RANKS_PATH_EXPLAIN'		=> 'Calea din directorul radacina al phpBB, de exemplu <samp>images/ranks</samp>',
	'SCRIPT_PATH'				=> 'Cale script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Calea unde phpBB este localizat relativ fata de numele domeniului, de exemplu <samp>/phpBB3</samp>',
	'SERVER_NAME'				=> 'Nume domeniu',
	'SERVER_NAME_EXPLAIN'		=> 'Numele domeniului de unde ruleaza acest forum (de exemplu: <samp>www.foo.bar</samp>)',
	'SERVER_PORT'				=> 'Port server',
	'SERVER_PORT_EXPLAIN'		=> 'Portul pe care serverul ruleaza, este de obicei 80, schimbati-l numai daca este diferit.',
	'SERVER_PROTOCOL'			=> 'Protocol server',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'Acesta este folosit ca server protocol daca setarile sunt fortate. Daca nu este completat sau nefortat, protocolul este determinat de catre setarile cookie-ului securizat (<samp>http://</samp> sau <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'		=> 'Setarile URL ale serverului',
	'SMILIES_PATH'				=> 'Cale stocare zambete',
	'SMILIES_PATH_EXPLAIN'		=> 'Calea din directorul radacina al phpBB, de exemplu <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'			=> 'Cale stocare extensii iconite grup',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'Calea din directorul radacina al phpBB, de exemplu <samp>images/upload_icons</samp>',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'Aici puteti defini setarile legate de sesiune si autentificare.',

	'ALL'							=> 'Toate',
	'ALLOW_AUTOLOGIN'				=> 'Permite autentificari persistente', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'Determina daca utilizatorii se pot autentifica atomat cand viziteaza forumul.', 
	'AUTOLOGIN_LENGTH'				=> 'Durata de expirare a legaturilor de autentificare persistente (in zile)', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'Numarul de zile dupa care legaturile persistente de autentificare sunt eliminate sau 0 pentru a dezactiva.', 
	'BROWSER_VALID'					=> 'Validare browser',
	'BROWSER_VALID_EXPLAIN'			=> 'Permite validarea browser-ului pentru fiecare sesiune, imbunatatind securitatea.',
	'CHECK_DNSBL'					=> 'Cauta IP impotriva listei negre DNS',
	'CHECK_DNSBL_EXPLAIN'			=> 'Daca este activata, adresa IP a utilizatorului este verificata in lista serviciilor de inregistrare si publicare DNSBL: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> and <a href="http://spamhaus.org">spamhaus.org</a>. Aceasta cautare poate dura ceva timp, in functie de configurarea serverului. Daca apar incetiniri sau sunt raportate false potriviri, este recomandat sa dezactivati aceasta optiune.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'Verifica domeniul e-mail pentru validarea inregistrarii MX',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'Daca este activata, domeniul e-mail furnizat la inregistrare si schimbarile profilului sunt verificate pentru validarea inregistrarii MX.',
	'FORCE_PASS_CHANGE'				=> 'Forteaza schimbarea parolei',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'Obliga utilizatorul sa-si schimbe parola dupa un numar precizat de zile. Specificati valorea 0 pentru a dezactiva aceasta optiune.',
	'FORM_TIME_MAX'					=> 'Intervalul maxim de timp pentru a trimite formularele',
	'FORM_TIME_MAX_EXPLAIN'			=> 'Timpul pe care utilizatorul il are la dispozitie pentru a trimite un formular. Folositi -1 pentru dezactivare. Retineti ca un formular poate deveni invalid daca sesiunea expira indiferent de acesta setare.',
	'FORM_TIME_MIN'					=> 'Intervalul minim de timp pentru a trimite formularele',
	'FORM_TIME_MIN_EXPLAIN'			=> 'Trimiterile mai rapide decat acest interval de timp sunt ignorate de catre forum. Folositi 0 pentru dezactivare.',
	'FORM_SID_GUESTS'				=> 'Leaga formularele de sesiunile vizitatorilor',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'Daca este activata, formularul obtinut de catre vizitatori pe baza token-ului va fi asociat exclusiv sesiunii curente. Aceasta operatie poate cauza probleme cu anumiti ISP.',
	'FORWARDED_FOR_VALID'			=> 'Header validat <var>X_FORWARDED_FOR</var>',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sesiunea va continua doar daca sunt trimise <var>X_FORWARDED_FOR</var> header-ului egale cu cele trimise prin cererea anterioara. Banurile vor fi de asemenea verificate impotriva IP-urilor in <var>X_FORWARDED_FOR</var>.',
	'IP_VALID'						=> 'Validarea sesiunii IP',
	'IP_VALID_EXPLAIN'				=> 'Determina cat de multa informatie din adresa IP a utilizatorului este folosita pentru validarea sesiunii: <samp>Toate</samp> compara adresa completa, <samp>A.B.C</samp> primele x.x.x, <samp>A.B</samp> primele x.x, <samp>Niciunul</samp> dezactiveaza cautarea.',
	'MAX_LOGIN_ATTEMPTS'			=> 'Numarul maxim de incercari de autentificare',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'Daca numarul maxim de incercari este depasit, utilizatorul trebuie sa-si confirme suplimentar autentificarea vizuala (confirmarea vizuala).',
	'NO_IP_VALIDATION'				=> 'Niciunul',
	'PASSWORD_TYPE'					=> 'Complexitatea parolei',
	'PASSWORD_TYPE_EXPLAIN'			=> 'Determina cat de complexa tebuie sa fie o parola pentru a fi setata sau modificata, optiunile ulterioare includ si pe cele anterioare.',
	'PASS_TYPE_ALPHA'				=> 'Trebuie sa contina litere si numere',
	'PASS_TYPE_ANY'					=> 'Nicio cerinta',
	'PASS_TYPE_CASE'				=> 'Trebuie sa contina litere mari si mici',
	'PASS_TYPE_SYMBOL'				=> 'Trebuie sa contina simboluri',
	'TPL_ALLOW_PHP'					=> 'Permite php in sabloane',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'Daca aceasta optiune este activata, <code>PHP</code> si declaratiile <code>INCLUDEPHP</code>  vor fi recunoscute si analizate in sabloane.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'Aceasta informatie este folosita cand forumul trimite e-mail-uri utilizatorilor proprii. Va rugam sa va asigurati ca adresa de e-mail specificata este valida, orice mesaje ignorate sau nelivrabile vor fi trimise la aceasta adresa. Daca serverul propriu nu va asigura un serviciu de e-mail nativ (bazat pe PHP) puteti trimite mesajele direct folosind SMTP. Aceasta operatie necesita adresa unui server corespunzator (intrebati providerul daca este necesar). Daca serverul necesita autentificare (si numai daca o face) specificati numele de utilizator, parola si metoda de autentificare.',

	'ADMIN_EMAIL'					=> 'Adresa de e-mail pentru mesaje returnate',
	'ADMIN_EMAIL_EXPLAIN'			=> 'Aceasta va fi folosita ca si adresa de returnare pentru toate mesajele electronice, adresa e-mail a contactului tehnic. Va fi folosita intotdeauna ca fiind <samp>Calea de returnare</samp> si <samp>Trimitere</samp> adreselor in e-mail-uri.',
	'BOARD_EMAIL_FORM'				=> 'Utilizatorii trimit e-mail-uri via forum',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'In loc sa se afiseze adresele de e-mail, utilizatorii pot trimite mesaje electronice via forum.',
	'BOARD_HIDE_EMAILS'				=> 'Ascunde adresele de e-mail',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'Aceasta functie pastreaza adresele de e-mail complet private.',
	'CONTACT_EMAIL'					=> 'Adresa de e-mail de contact',
	'CONTACT_EMAIL_EXPLAIN'			=> 'Aceasta adresa va fi folosita doar cand este necesar un punct de contact, de exemplu spam, erori, etc. Va fi folosita intotdeauna in sectiunile <samp>De la</samp> si <samp>Raspunde la</samp> din mesajele electronice.',
	'EMAIL_FUNCTION_NAME'			=> 'Nume functie e-mail',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'Functia e-mail folosita pentru a trimite mesaje electronice direct prin PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'Dimensiunea pachetului de e-mail',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'Acesta este numarul de e-mail-uri trimise intr-un singur pachet. Aceasta setare este aplicata listei interne de mesaje ce trebuie trimise; specificati valoarea 0 daca aveti probleme cu notificari legate de mesajele electronice nelivrate.',
	'EMAIL_SIG'						=> 'Semnatura e-mail',
	'EMAIL_SIG_EXPLAIN'				=> 'Acest text va fi atasat tuturor e-mail-urilor trimise de catre forum.',
	'ENABLE_EMAIL'					=> 'Activeaza posibilitatea forumulului sa poata trimite e-mailuri',
	'ENABLE_EMAIL_EXPLAIN'			=> 'Daca aceasta optiune este setata ca fiind dezactivata, niciun e-mail nu va fi trimis de catre forum.',
	'SMTP_AUTH_METHOD'				=> 'Metoda de autentificare pentru SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'Folosita doar daca un nume de utilizator/parola este setat, intrebati provider-ul daca nu sunteti sigur ce metoda sa folositi.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'Parola SMTP',
	'SMTP_PASSWORD_EXPLAIN'			=> 'Specificati o parola doar daca serverul SMTP o cere.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'Portul serverului SMTP',
	'SMTP_PORT_EXPLAIN'				=> 'Schimbati portul doar daca stiti ca serverul SMTP este pe un port diferit.',
	'SMTP_SERVER'					=> 'Adresa serverului SMTP',
	'SMTP_SETTINGS'					=> 'Setarile SMTP',
	'SMTP_USERNAME'					=> 'Nume de utilizator SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'Specificati un nume de utilizator doar daca serverul SMTP il cere.',
	'USE_SMTP'						=> 'Foloseste serverul SMTP pentru e-mail-uri',
	'USE_SMTP_EXPLAIN'				=> 'Selectati “Da” daca doriti sa trimiteti e-mail-uri via unui server numit in locul funtiei locale de mesagerie.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'Aici puteti activa si controla folosirea Jabber pentru mesageria instanta si notificarile forumului. Jabber este un protocol opensource si disponibil doar a fi folosit de catre oricine. Unele servere Jabber includ cai sau transporturi care va permit contactarea utilizatorilor din alte retele de net. Nu toate serverele ofera toate transporturile si modificarile in protocoale pot afecta transportul sa functioneze. Asigurati-va ca ati specificat detaliile unui cont inregistrat deja - phpBB va folosi detaliile pe care le-ati specificat aici.',

	'JAB_ENABLE'				=> 'Activeaza Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Permite folosirea mesageriei si notificarilor Jabber.',
	'JAB_GTALK_NOTE'			=> 'Retineti ca GTalk nu va functiona pentru ca functia <samp>dns_get_record</samp> nu a putut fi gasita. Aceasta functie nu este disponibila in PHP4 si nu este implementata pe platformele Windows. In mod curent nu functioneaza pe sistemele bazate pe BSD incluzand Mac OS.',
	'JAB_PACKAGE_SIZE'			=> 'Dimensiunea pachetului Jabber',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'Acesta este numarul de mesaje trimise intr-un pachet. Daca este setat la 0, mesajul este trimis imediat si nu va fi salvat pentru trimiterea ulterioara.',
	'JAB_PASSWORD'				=> 'Parola Jabber',
	'JAB_PORT'					=> 'Portul Jabber',
	'JAB_PORT_EXPLAIN'			=> 'Lasati gol doar daca stiti ca nu este portul 5222',
	'JAB_SERVER'				=> 'Serverul Jabber',
	'JAB_SERVER_EXPLAIN'		=> 'Consultati %sjabber.org%s pentru o lista a serverelor.',
	'JAB_SETTINGS_CHANGED'		=> 'Setarile Jabber au fost schimbate cu succes.',
	'JAB_USE_SSL'				=> 'Foloseste SSL pentru conectare',
	'JAB_USE_SSL_EXPLAIN'		=> 'Daca este activata aceasta optiune, o conexiune sigura incearca sa se stabileasca. Portul Jabber va fi modificat cu 5223 daca portul 5222 este specificat.',
	'JAB_USERNAME'				=> 'Nume de utilizator Jabber',
	'JAB_USERNAME_EXPLAIN'		=> 'Specificati un nume de utilizator inregistrat. Numele de utilizator nu va fi verificat daca este valid.',
));

?>