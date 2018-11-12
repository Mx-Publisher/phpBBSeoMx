<?php
/**
*
* acp_common [Romana]
*
* @package language
* @version $Id: common.php 8479 2008-03-29 00:22:48Z naderman $
* @translate $Id: common.php 8479 2008-02-20 12:54:00 www.phpbb.ro (shara21jonny) Exp $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administratori',
	'ACP_ADMIN_LOGS'			=> 'Log administrator',
	'ACP_ADMIN_ROLES'			=> 'Roluri administrator',
	'ACP_ATTACHMENTS'			=> 'Atasamente',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Configurari atasamente',
	'ACP_AUTH_SETTINGS'			=> 'Autentificare',
	'ACP_AUTOMATION'			=> 'Automatizare',
	'ACP_AVATAR_SETTINGS'		=> 'Configurari imagini asociate (avatar)',

	'ACP_BACKUP'				=> 'Backup',
	'ACP_BAN'					=> 'Banare',
	'ACP_BAN_EMAILS'			=> 'Banare conturi e-mail',
	'ACP_BAN_IPS'				=> 'Banare IP-uri',
	'ACP_BAN_USERNAMES'			=> 'Banare nume utilizatori',
	'ACP_BBCODES'				=> 'CoduriBB',
	'ACP_BOARD_CONFIGURATION'	=> 'Configurare forum',
	'ACP_BOARD_FEATURES'		=> 'Caracteristici forum',
	'ACP_BOARD_MANAGEMENT'		=> 'Administrare forum',
	'ACP_BOARD_SETTINGS'		=> 'Setari forum',
	'ACP_BOTS'					=> 'Paienjeni/Roboti',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'Baza de date',
	'ACP_CAT_DOT_MODS'			=> '.Mod-uri',
	'ACP_CAT_FORUMS'			=> 'Forumuri',
	'ACP_CAT_GENERAL'			=> 'General',
	'ACP_CAT_MAINTENANCE'		=> 'Intretinere',
	'ACP_CAT_PERMISSIONS'		=> 'Permisiuni',
	'ACP_CAT_POSTING'			=> 'Scriere',
	'ACP_CAT_STYLES'			=> 'Stiluri',
	'ACP_CAT_SYSTEM'			=> 'Sistem',
	'ACP_CAT_USERGROUP'			=> 'Utilizatori si grupuri',
	'ACP_CAT_USERS'				=> 'Utilizatori',
	'ACP_CLIENT_COMMUNICATION'	=> 'Comunicatii client',
	'ACP_COOKIE_SETTINGS'		=> 'Configurari cookie',
	'ACP_CRITICAL_LOGS'			=> 'Log erori',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Campuri profil personalizabil',
	
	'ACP_DATABASE'				=> 'Administrare baza de date',
	'ACP_DISALLOW'				=> 'Dezactivari',
	'ACP_DISALLOW_USERNAMES'	=> 'Nume utilizatori dezactivate',
	
	'ACP_EMAIL_SETTINGS'		=> 'Configurari e-mail',
	'ACP_EXTENSION_GROUPS'		=> 'Administrare extensii grupuri',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Permisiuni bazate pe forum',
	'ACP_FORUM_LOGS'				=> 'Loguri forum',
	'ACP_FORUM_MANAGEMENT'			=> 'Administrare forum',
	'ACP_FORUM_MODERATORS'			=> 'Moderatori forum',
	'ACP_FORUM_PERMISSIONS'			=> 'Permisiuni forum',
	'ACP_FORUM_ROLES'				=> 'Roluri forum',

	'ACP_GENERAL_CONFIGURATION'		=> 'Configurare generala',
	'ACP_GENERAL_TASKS'				=> 'Activitati generale',
	'ACP_GLOBAL_MODERATORS'			=> 'Moderatori globali',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Permisiuni globale',
	'ACP_GROUPS'					=> 'Grupuri',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Permisiuni forum pentru grupuri',
	'ACP_GROUPS_MANAGE'				=> 'Administrare grupuri',
	'ACP_GROUPS_MANAGEMENT'			=> 'Administrare grup',
	'ACP_GROUPS_PERMISSIONS'		=> 'Permisiuni grupuri',
	
	'ACP_ICONS'					=> 'Iconite subiect',
	'ACP_ICONS_SMILIES'			=> 'Iconite/zambete subiect',
	'ACP_IMAGESETS'				=> 'Seturi imagine',
	'ACP_INACTIVE_USERS'		=> 'Utilizatori inactivi',
	'ACP_INDEX'					=> 'Index Panoul administratorului',
	
	'ACP_JABBER_SETTINGS'		=> 'Setari Jabber',
	
	'ACP_LANGUAGE'				=> 'Administrare limba',
	'ACP_LANGUAGE_PACKS'		=> 'Pachete limba',
	'ACP_LOAD_SETTINGS'			=> 'Incarca configurari',
	'ACP_LOGGING'				=> 'Logare',
	
	'ACP_MAIN'					=> 'Panoul administratorului',
	'ACP_MANAGE_EXTENSIONS'		=> 'Administrare extensii',
	'ACP_MANAGE_FORUMS'			=> 'Administrare forumuri',
	'ACP_MANAGE_RANKS'			=> 'Administrare ranguri',
	'ACP_MANAGE_REASONS'		=> 'Administrare motive raportari/contestari',
	'ACP_MANAGE_USERS'			=> 'Administrare utilizatori',
	'ACP_MASS_EMAIL'			=> 'E-mail in masa',
	'ACP_MESSAGES'				=> 'Mesaje',
	'ACP_MESSAGE_SETTINGS'		=> 'Configurari mesaje private',
	'ACP_MODULE_MANAGEMENT'		=> 'Modul administrare',
	'ACP_MOD_LOGS'				=> 'Log moderator',
	'ACP_MOD_ROLES'				=> 'Roluri moderator',
	
	'ACP_NO_ITEMS'				=> 'Nu exista inca un element.',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Atasamente orfane',
	
	'ACP_PERMISSIONS'			=> 'Permisiuni',
	'ACP_PERMISSION_MASKS'		=> 'Permisiuni masti',
	'ACP_PERMISSION_ROLES'		=> 'Permisiuni roluri',
	'ACP_PERMISSION_TRACE'		=> 'Cale permisiuni',
	'ACP_PHP_INFO'				=> 'Informatii PHP',
	'ACP_POST_SETTINGS'			=> 'Configurari mesaj',
	'ACP_PRUNE_FORUMS'			=> 'Curatare forumuri',
	'ACP_PRUNE_USERS'			=> 'Curatare utilizatori',
	'ACP_PRUNING'				=> 'Curatare',
	
	'ACP_QUICK_ACCESS'			=> 'Acces rapid',
	
	'ACP_RANKS'					=> 'Ranguri',
	'ACP_REASONS'				=> 'Motive raportari/contestari',
	'ACP_REGISTER_SETTINGS'		=> 'Configurari inregistrare utilizator',

	'ACP_RESTORE'				=> 'Restaurare',

	'ACP_SEARCH'				=> 'Configurare cautare',
	'ACP_SEARCH_INDEX'			=> 'Index cautare',
	'ACP_SEARCH_SETTINGS'		=> 'Setari cautare',

	'ACP_SECURITY_SETTINGS'		=> 'Setari securitate',
	'ACP_SERVER_CONFIGURATION'	=> 'Configurare server',
	'ACP_SERVER_SETTINGS'		=> 'Setari server',
	'ACP_SIGNATURE_SETTINGS'	=> 'Setari semnatura',
	'ACP_SMILIES'				=> 'Zambete',
	'ACP_STYLE_COMPONENTS'		=> 'Componente stil',
	'ACP_STYLE_MANAGEMENT'		=> 'Administrare stil',
	'ACP_STYLES'				=> 'Stiluri',
	
	'ACP_TEMPLATES'				=> 'Sabloane',
	'ACP_THEMES'				=> 'Teme',
	
	'ACP_UPDATE'					=> 'Actualizare',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Permisiuni forum pentru utilizatori',
	'ACP_USERS_LOGS'				=> 'Log utilizatori',
	'ACP_USERS_PERMISSIONS'			=> 'Permisiuni utilizatori',
	'ACP_USER_ATTACH'				=> 'Atasamente',
	'ACP_USER_AVATAR'				=> 'Imagine asociata (avatar)',
	'ACP_USER_FEEDBACK'				=> 'Feedback',
	'ACP_USER_GROUPS'				=> 'Grupuri',
	'ACP_USER_MANAGEMENT'			=> 'Administrare utilizator',
	'ACP_USER_OVERVIEW'				=> 'Privire generala',
	'ACP_USER_PERM'					=> 'Permisiuni',
	'ACP_USER_PREFS'				=> 'Preferinte',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Rang',
	'ACP_USER_ROLES'				=> 'Roluri utilizator',
	'ACP_USER_SECURITY'				=> 'Securitate utilizator',
	'ACP_USER_SIG'					=> 'Semnatura',

	'ACP_VC_SETTINGS'					=> 'Setari confirmare vizuala',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Previzualizare imagine CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Verifica actualizari',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Vezi permisiuni administrative',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Vezi permisiuni de moderare pe forum',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Vezi permisiuni forum',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Vezi permisiuni globale de moderare',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Vezi permisiuni utilizatori',
	
	'ACP_WORDS'					=> 'Cenzura cuvinte',

	'ACTION'				=> 'Actiune',
	'ACTIONS'				=> 'Actiuni',
	'ACTIVATE'				=> 'Activeaza',
	'ADD'					=> 'Adauga',
	'ADMIN'					=> 'Administrare',
	'ADMIN_INDEX'			=> 'Index admin',
	'ADMIN_PANEL'			=> 'Panoul administratorului',
	
	'ADM_LOGOUT'			=> 'Delogare ACP',
	'ADM_LOGGED_OUT'		=> 'Ai fost delogat cu succes din Panoul Administratorului',	

	'BACK'					=> 'Inapoi',

	'COLOUR_SWATCH'			=> 'Mostra culoare web-safe',
	'CONFIG_UPDATED'		=> 'Configurarea a fost actualizata cu succes.',

	'DEACTIVATE'				=> 'Dezactiveaza',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Calea introdusa “%s” nu exista.',
	'DIRECTORY_NOT_DIR'			=> 'Calea introdusa “%s” nu este un director.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Calea introdusa “%s” nu se poate scrie.',
	'DISABLE'					=> 'Dezactiveaza',
	'DOWNLOAD'					=> 'Descarca',
	'DOWNLOAD_AS'				=> 'Descarca ca',
	'DOWNLOAD_STORE'			=> 'Descarca sau stocheaza fisier',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Puteti descarca direct fisierul sau sa-l salvati intr-un director <samp>de stocat/</samp>.',

	'EDIT'					=> 'Modifica',
	'ENABLE'				=> 'Activeaza',
	'EXPORT_DOWNLOAD'		=> 'Descarca',
	'EXPORT_STORE'			=> 'Stocheaza',

	'GENERAL_OPTIONS'		=> 'Optiuni generale',
	'GENERAL_SETTINGS'		=> 'Setari generale',
	'GLOBAL_MASK'			=> 'Masca permisiuni globale',

	'INSTALL'				=> 'Instaleaza',
	'IP'					=> 'IP utilizator',
	'IP_HOSTNAME'			=> 'Adrese IP sau nume host',

	'LOGGED_IN_AS'			=> 'Sunteti autentificat ca:',
	'LOGIN_ADMIN'			=> 'Pentru a administra forumul, trebuie sa fiti un utilizator autentificat.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Pentru a administra forumul, trebuie sa va reautentificati.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Ati fost autentificat cu succes si veti fi redirectionat catre Panoul administratorului.',
	'LOOK_UP_FORUM'			=> 'Selecteaza un forum',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Puteti selecta mai mult decat un forum.',

	'MANAGE'				=> 'Administraza',
	'MENU_TOGGLE'			=> 'Ascunde sau afiseaza meniul lateral',
	'MOVE_DOWN'				=> 'Muta mai jos',
	'MOVE_UP'				=> 'Muta mai sus',

	'NOTIFY'				=> 'Notificare',
	'NO_ADMIN'				=> 'Nu sunteti autorizat sa administrati acest forum.',
	'NO_EMAILS_DEFINED'		=> 'Nu a fost gasita o adresa de e-mail valida.',
	'NO_PASSWORD_SUPPLIED'	=> 'Trebuie sa introduceti parola pentru a acesa Panoul administratorului.',	

	'OFF'					=> 'Dezactivat',
	'ON'					=> 'Activat',

	'PARSE_BBCODE'						=> 'Analizeaza Codul BB',
	'PARSE_SMILIES'						=> 'Analizeaza zambetele',
	'PARSE_URLS'						=> 'Analizeaza link-urile',
	'PERMISSIONS_TRANSFERRED'			=> 'Perimisiuni transferate',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Acum aveti permisiunile de la %1$s. Puteti sa accesati forumul cu permisiunile utilizatorului, dar nu puteti sa accesati Panoul administratorului, pentru ca permisiunile administrative nu au fost transferate. Puteti sa <a href="%2$s"><strong>reveniti la setul de permisiuni ale dumneavoastra</strong></a> oricand.',
	'PIXEL'							=> 'px',	
	'PROCEED_TO_ACP'					=> '%sContinua cu Panoul administratorului%s',

	'REMIND'							=> 'Reaminteste',
	'RESYNC'							=> 'Resincronizeaza',
	'RETURN_TO'							=> 'Intoarce la…',

	'SELECT_ANONYMOUS'		=> 'Selecteaza utilizatorul anonim',
	'SELECT_OPTION'			=> 'Selecteaza optiune',
	
	'SETTING_TOO_LOW'		=> 'Valoarea specificata pentru variabila “%1$s” este prea mica. Valoarea minima admisa este %2$d.',
	'SETTING_TOO_BIG'		=> 'Valoarea specificata pentru variabila “%1$s” este prea mare. Valoarea maxima admisa este %2$d.',	
	'SETTING_TOO_LONG'		=> 'Valoarea specificata pentru variabila “%1$s” este prea lunga. Lungimea maxima admisa este %2$d.',
	'SETTING_TOO_SHORT'		=> 'Valoarea specificata pentru variabila “%1$s” nu este suficient de lunga. Lungimea minima admisa este %2$d.',

	'UCP'					=> 'Panoul utilizatorului',
	'USERNAMES_EXPLAIN'		=> 'Introduceti fiecare nume de utilizator pe linii separate.',
	'USER_CONTROL_PANEL'	=> 'Panoul utilizatorului',

	'WARNING'				=> 'Avertisment',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Aceasta pagina listeaza informatiile versiunii de PHP instalate pe acest server. Include detaliile modulelor incarcate, variabilelor disponibile si setarile standard. Aceasta informatie poate fi de ajutor pentru diagnosticarea problemelor. Va rog, fiti constient ca unele companii de hosting vor limita ce informatii sa afiseze din motive de securitate. Sunteti avizat sa nu dati mai departe detaliile acestei pagini, exceptand cand sunteti intrebat de un <a href="http://www.phpbb.com/about/team/">membru oficial al echipei de suport</a>.',

	'NO_PHPINFO_AVAILABLE'	=> 'Informatiile despre configuratia PHP nu pot fi determinate. Phpinfo() a fost dezactivat din motive de securitate.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Aici vedeti listate toate actiunile efectuate de administratorii forumului. Le puteti sorta dupa nume de utilizator, dupa data, IP sau actiune. Daca aveti permisiunile necesare, puteti sa stergeti operatiunile individuale sau tot log-ul.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Aici vedeti toate actiunile efectuate de catre forum. Acest log va instiinteaza cu informatii pe care le puteti folosi la rezolvarea problemelor specifice, de exemplu netrimiterea e-mail-urilor. Le puteti sorta dupa nume utilizator, data, IP sau actiune. Daca aveti permisiunile necesare, puteti sa stergeti operatiunile individuale sau tot log-ul.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Aici vedeti toate actiunile efectuate de catre moderatori in forumuri, subiecte si mesaje, de asemenea actiunile efectuate asupra utilizatorilor, inclusiv banarea. Le poti sorta dupa nume utilizator, data, IP sau actiune. Daca aveti permisiunile necesare, puteti sa stergeti operatiunile individuale sau tot log-ul.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Aici vedeti toate actiunile realizate de catre utilizatori sau asupra utilizatorilor (raportari, avertismente si note user).',
	'ALL_ENTRIES'				=> 'Toate intrarile',

	'DISPLAY_LOG'	=> 'Afiseaza intrarile de la anteriorul',

	'NO_ENTRIES'	=> 'Nicio informatie in log pentru aceasta perioada.',

	'SORT_IP'		=> 'Adresa IP',
	'SORT_DATE'		=> 'Data',
	'SORT_ACTION'	=> 'Actiune log',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Multumim ca ati ales phpBB ca solutie pentru forumul dumneavoastra. Aceasta pagina va va da o scurta privire de ansamblu a tuturor statisticilor forumului dumneavoastra. Link-urile de pe partea stanga a paginii va permit sa controlati orice aspect a experientei dumneavoastra pe forum. Fiecare pagina va avea instructiuni despre modul de folosire a optiunilor.',
	'ADMIN_LOG'					=> 'Log cu actiunile administratorilor',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Aici vedeti ultimele cinci actiuni realizate de catre administratori. Pentru a vedea toate actiunile realizate de catre acestia, accesati articolul adecvat din meniu sau urmati link-ul de mai jos.',
	'AVATAR_DIR_SIZE'			=> 'Dimensiunile directorului de imagini asociate (avatare)',

	'BOARD_STARTED'		=> 'Forum din data de',
	'BOARD_VERSION'		=> 'Versiune forum',

	'DATABASE_SERVER_INFO'	=> 'Server baza de date',
	'DATABASE_SIZE'			=> 'Dimensiunile bazei de date',

	'FILES_PER_DAY'		=> 'Atasamente pe zi',
	'FORUM_STATS'		=> 'Statistici forum',

	'GZIP_COMPRESSION'	=> 'Compresii GZip',

	'NOT_AVAILABLE'		=> 'Nu este disponibil',
	'NUMBER_FILES'		=> 'Numar de atasamente',
	'NUMBER_POSTS'		=> 'Numar de mesaje',
	'NUMBER_TOPICS'		=> 'Numar de subiecte',
	'NUMBER_USERS'		=> 'Numar de utilizatori',
	'NUMBER_ORPHAN'		=> 'Atasamente fara legaturi',

	'POSTS_PER_DAY'		=> 'Mesaje pe zi',
	
	'PURGE_CACHE'			=> 'Sterge cache',
	'PURGE_CACHE_CONFIRM'	=> 'Sunteti sigur ca doriti sa stergeti cache-ul?',
	'PURGE_CACHE_EXPLAIN'	=> 'Sterge toate articolele legate de cache, aceasta include orice cache al fisierelor de template sau interogarile.',
	
	'RESET_DATE'		          	=> 'Reseteaza data de start a forumului',
	'RESET_DATE_CONFIRM'        	=> 'Sunteti sigur ca vreti sa resetati data de start a forumului?',
	'RESET_ONLINE'			        => 'Reseteaza contorul care indica cei mai multi utilizatori online',
	'RESET_ONLINE_CONFIRM'			=> 'Sunteti sigur ca vreti sa resetati contorul care indica cei mai multi utilizatori online?',
	'RESYNC_POSTCOUNTS'				=> 'Resincronizeaza contorul mesajelor',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Numai mesajele existente vor fi luate in considerare. Mesajele sterse nu se vor numara.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Sunteti sigur ca vreti sa resincronizati contorul mesajelor?',
	'RESYNC_POST_MARKING'			=> 'Resincronizeaza subiectele punctate',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Sunteti sigur ca doriti sa resincronizati subiectele punctate?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Mai intai deselectati toate subiectele si apoi selectati corect subiectele care au avut activitate in ultimele sase luni.',
	'RESYNC_STATS'					=> 'Resincronizeaza statistici',
	'RESYNC_STATS_CONFIRM'			=> 'Sunteti sigur ca vreti sa resincronizati statisticile?',
	'RESYNC_STATS_EXPLAIN'			=> 'Recalculati numarul total de mesaje, subiecte, utilizatori si fisiere.',
	'RUN'							=> 'Porneste acum',

	'STATISTIC'		         	=> 'Statistica',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Resincronizeaza sau reseteaza statisticile',

	'TOPICS_PER_DAY'	=> 'Subiecte pe zi',

	'UPLOAD_DIR_SIZE'	=> 'Dimensiunea atasamentelor trimise',
	'USERS_PER_DAY'		=> 'Utilizatori pe zi',

	'VALUE'					=> 'Valoare',
	'VIEW_ADMIN_LOG'		=> 'Vezi log-ul administratorului',
	'VIEW_INACTIVE_USERS'	=> 'Vezi utilizatori inactivi',

	'WELCOME_PHPBB'			=> 'Bine ati venit la phpBB',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Data inactiva',
	'INACTIVE_REASON'				=> 'Motiv',
	'INACTIVE_REASON_MANUAL'		=> 'Cont dezactivat de catre administrator',
	'INACTIVE_REASON_PROFILE'		=> 'Detaliile profilului au fost schimbate',
	'INACTIVE_REASON_REGISTER'		=> 'Cel mai recent cont inregistrat',
	'INACTIVE_REASON_REMIND'		=> 'Fortarea reactivarii contului utilizatorului',
	'INACTIVE_REASON_UNKNOWN'		=> 'Necunoscut',
	'INACTIVE_USERS'				=> 'Utilizatori inactivi',
	'INACTIVE_USERS_EXPLAIN'		=> 'Aceasta este o lista cu utiliazatorii inregistrati, dar care au conturile inactive. Puteti activa, sterge ori reaminti (trimitand un e-mail) acestor utilizatori daca doriti.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Aceasta este o lista cu ultimii 10 utilizatori inregistrati ce au conturile inactive. Lista intreaga poate fi accesata folosind optiunea adecvata din meniu sau urmand linkul de mai jos de unde puteti activa, sterge or aduce aminte (trimitand un e-mail) acestor utilizatori daca doriti.',

	'NO_INACTIVE_USERS'	=> 'Niciun utilizator inactiv',

	'SORT_INACTIVE'		=> 'Data de inactivitate',
	'SORT_LAST_VISIT'	=> 'Ultima vizita',
	'SORT_REASON'		=> 'Motiv',
	'SORT_REG_DATE'		=> 'Data inregistrarii',

	'USER_IS_INACTIVE'		=> 'Utilizatorul este inactiv',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Utilizatorii cu permisiunile utilizatorului adaugate sau modificate</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Grupurile cu permisiunile utilizatorului adaugate sau modificate</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Utilizatorii cu permisiunile de moderator global adaugate sau modificate</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Grupurile cu permisiunile de moderator global adaugate sau modificate</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Utilizatorii cu permisiunile de administrator adaugate sau modificate</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Grupurile cu permisiunile de administrator adaugate sau modificate</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Administratorii adaugati sau modificati</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Moderatorii globali adaugati sau modificati</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Utilizatorii cu accesele de forum adaugate sau modificate</strong> de la %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Utilizatorii cu accesele de moderator de forum adaugate sau modificate</strong> de la %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Grupurile cu accesele de forum adaugate sau modificate</strong> de la %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Grupurile cu accesele de moderator de forum adaugate sau modificate</strong> de la %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Moderatori adaugati sau modificati</strong> de la %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Permisiunile forumului adaugate sau modificate</strong> de la %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Administratori eliminati</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Moderatori globali eliminati</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Moderatorii eliminati</strong> de la %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Permisiunile forumului pentru utilizatori/grupuri eliminate</strong> de la %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Permisiuni transferate de la</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Propriile permisiuni restaurate dupa ce s-au folosit permisiunile de la</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Incercare de logare administrativa esuata</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Logare administrativa cu succes</strong>',
	
	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Atasamente ale utilizatorului eliminate</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Extensiile atasamentelor adaugate sau modificate</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Extensiile atasamentelor eliminate</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Extensiile atasamentelor actualizate</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Extensiile grupului adaugate</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Extensiile grupului modificate</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Extensiile grupului eliminate</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Fisier fara legatura incarcat la mesaj</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Fisiere fara legatura sterse</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Utilizator exclus de la ban</strong> pentru motiv “<em>%1$s</em>”<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>IP exclus de la ban</strong> pentru motiv “<em>%1$s</em>”<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>E-mail exclus de la ban</strong> pentru motiv “<em>%1$s</em>”<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Utilizator banat</strong> pentru motiv “<em>%1$s</em>”<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>IP banat</strong> pentru motiv “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>E-mail banat</strong> pentru motiv “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Utilizator debanat</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>IP debanat</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>E-mail debanat</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>CodBB nou adaugat</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>CodBB modificat</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>CodBB sters</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Bot nou adaugat</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Bot sters</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Bot existent actualizat</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Log admin sters</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Log erori sters</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Log moderator sters</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Log utilizator sters</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Loguri utilizator sterse</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Schimbarile setarilor atasamentelor</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Schimbarile setarilor de autentificare</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Schimbarile setarilor avatarelor</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Schimbarile setarilor pentru cookie</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Schimbarile setarilor de e-mail</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Schimbarile optiunilor forumului</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Schimbarile setarilor incarcate</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Schimbarile setarilor mesajelor private</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Schimbarile setarilor pentru mesaje</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Schimbarile setarilor inregistrarii utilizatorilor</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Schimbarile setarilor de cautare</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Schimbarile setarilor de securitate</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Schimbarile setarilor de server</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Schimbarile setarilor de forum</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Schimbarile setarilor de semnatura</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Schimbarile setarilor de confirmare vizuala</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Subiect aprobat</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Subiectul uitlizatorului adus in atentie</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Mesaj sters</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Subiect sters</strong><br />» %s',
	'LOG_FORK'					=> '<strong>Subiect copiat</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>Subiect inchis</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Mesaj inchis</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Mesaje unite</strong> in subiect<br />»%s',
	'LOG_MOVE'					=> '<strong>Subiect mutat</strong><br />» de la %s',
	'LOG_POST_APPROVED'			=> '<strong>Mesaj aprobat</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Mesaj neaprobat “%1$s” din urmatorul motiv</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Mesaj modificat “%1$s” de catre</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>Raport inchis</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Raport sters</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Mesajele impartite mutate</strong><br />» la %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Imparte mesaje</strong><br />» de la %s',

	'LOG_TOPIC_DELETED'			=> '<strong>Subiect sters</strong><br />» %s',
	'LOG_TOPIC_APPROVED'		=> '<strong>Subiect aprobat</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Subiect neaprobat “%1$s” din urmatorul motiv</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Contoare subiect resincronizate</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Tipul schimbat al subiectului</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Subiect deschis</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Mesaj deschis</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Numele de utilizatori interzise adaugate</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Numele de utlizatori interzise sterse</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Backup baza de date</strong>',
	'LOG_DB_DELETE'			=> '<strong>Backup baza de date sters</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Backup baza de date restaurat</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>IP-uri/nume de hosturi excluse din lista de descarcare</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>IP-uri/nume de hosturi adaugate in lista de descarcare</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>IP-uri/nume de hosturi sterse din lista de descarcare</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Eroare Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Eroare e-mail</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Forum nou creat</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Forum sters</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Forum sters, inclusiv subforumurile sale</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Forum sters si subforumurile mutate</strong> la %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Forum sters si mesajele mutate </strong> la %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Forum sters inclusiv subforumurile sale, mesajele mutate</strong> la %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Forum sters, mesajele mutate</strong> la %1$s <strong>si subforumurile</strong> la %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Forum sters, inclusiv mesajele sale</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Forum sters, inclusiv mesajele si subforumurile sale</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Forum sters, inclusiv mesajele sale, subforumurile mutate</strong> la %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Detaliile forumului modificate</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Forum mutat</strong> %1$s <strong>sub</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Forum mutat</strong> %1$s <strong>deasupra</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Forum resincronizat</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>Grup nou de utilizatori creat</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Grup “%1$s” facut initial pentru membri</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Grup de utilizatori sters</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Lideri retrogradati in grupurile de utilizatori</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Membri promovati ca lideri in grupurile de utilizatori</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Membri scosi din grupurile de utilizatori</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Detaliile grupului de utilizatori actualizate</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Noi lideri adaugati in grupurile de utilizatori</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Utilizatori aprobati in grupurile de utilizatori</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Membri noi adaugati in grupurile de utilizatori</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'	    	=> '<strong>Set nou de imagini adaugat in baza de date</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		    => '<strong>Set nou de imagini adaugat in sistemul de fisiere</strong><br />» %s',
	'LOG_IMAGESET_DELETE'	      	=> '<strong>Set de imagini sters</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'  	=> '<strong>Detaliile setului de imagini modificate</strong><br />» %s',
	'LOG_IMAGESET_EDIT'		    	=> '<strong>Set de imagini modificat</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		    => '<strong>Set de imagini exportat</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Setul de imagini nu poate gasi localizarea “%2$s”</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Localizarea “%2$s” a setului de imagini reimprospatata</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'     	=> '<strong>Set de imagini reimprospatat</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Utilizatori inactivi activati</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Utilizatori inactivi stersi</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Email-uri de reamintire trimise utilizatorilor inactivi</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Covertit de la %1$s la phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>phpBB instalat %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>IP sesiune/browser/verificare esuata X_FORWARDED_FOR</strong><br />»IP utilizator “<em>%1$s</em>” verificat impotriva sesiunii IP “<em>%2$s</em>”, stringul browser-ului utilizatorului “<em>%3$s</em>” verificat impotriva stringului de sesiune a browser-ului “<em>%4$s</em>” si stringul X_FORWARDED_FOR “<em>%5$s</em>” al utilizatorului verificat impotriva stringului de sesiune X_FORWARDED_FOR “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Cont Jabber schimbat</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Parola Jabber schimbata</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Cont Jabber inregistrat</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Setari Jabber schimbate</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Pachet de limba sters</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Pachet de limba instalat</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Detalii pachet de limba actualizat</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Fisier de limba inlocuit</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Fisier de limba trimis si plasat in folderul de stocare</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>E-mail in masa trimis</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Autor in subiect schimbat “%1$s”</strong><br />» din %2$s in %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Modul dezactivat</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Modul activat</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Modul mutat in jos</strong><br />» %1$s sub %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Modul mutat in sus</strong><br />» %1$s deasupra %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Modul scos</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Modul adaugat</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Modul modificat</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Rol admin adaugat</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Rol admin modificat</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Rol admin sters</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Rol forum adaugat</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Rol forum modificat</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Rol forum sters</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Rol moderator adaugat</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Rol moderator modificat</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Rol moderator sters</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Rol utilizator adaugat</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Rol utilizator modificat</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Rol utilizator sters</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Camp profil activat</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Camp profil adaugat</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Camp profil dezactivat</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Camp profil schimbat</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Camp profil sters</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Forumuri sterse</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Forumuri sterse automat</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Utilizatori dezactivati</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Utilizatori stersi si mesajele lor sterse</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Utilizatori stersi si mesaje lor retinute</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Sterge cache</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Rang nou adaugat</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Rang sters</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Rang actualizat</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Motiv raport/negare adaugat</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Motiv raport/negare sters</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Motiv report/negare actualizat</strong><br />» %s',

	'LOG_RESET_DATE'			=> '<strong>Data de start pentru forum resetata</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Contorul cu majoritatea utilizatorilor online resetat</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Contor mesaje pentru utilizatori resincronizat</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Subiecte punctate resincronizate</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Mesaje, subiecte si statistici utilizatori resincronizate</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Index de cautare creat pentru</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Index de cautare sters pentru</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Stil nou adaugat</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Stil sters</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Stil modificat</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Stil exportat</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Set template nou adaugat in baza de date</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Set template nou adaugat in sistemul de fisiere</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Versiuni de cache sterse ale fisierelor template din set template <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Set template sters</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Set template modificat <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Detalii template modificat</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Set template exportat</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Set template reimprospatat</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Tema noua adaugata in baza de date</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Tema noua adaugata in sistemul de fisiere</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Tema stearsa</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Detalii tema modificata</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Tema modificata <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Tema modificata <em>%1$s</em></strong><br />» Fisier modificat <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Tema exportata</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Tema reimprospatata</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Baza de date actualizata de la versiunea %1$s la versiunea %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>phpBB actualizat de la versiunea %1$s la versiunea %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Utilizator activat</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Utilizator banat prin management utilizatori</strong> pentru motivul “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>IP banat prin management utilizatori</strong> pentru motivul “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>E-mail banat prin management utilizatori</strong> pentru motivul “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Utilizator sters</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Toate atasamentele scoase de catre utilizatorul</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Avatar utilizator sters</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Toate mesajele sterse de catre utilizatorul</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Semnatura utilizator stearsa</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Utilizator dezactivat</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Mesajele utilizatorului mutate</strong><br />» mesaje de catre “%1$s” in forumul “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Parola utilizator schimbata</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Cont utilizator fortat pentru reactivare</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>E-mail utilizator “%1$s” schimbat</strong><br />» din “%2$s” in “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Nume utilizator schimbat</strong><br />» din “%1$s” in “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Detalii utilizator actualizate</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Cont utilzator activat</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Avatar utilizator sters</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Semnatura utilizator stearsa</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Feedback utilizator adaugat</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Intrare adaugata:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Cont utilizator dezactivat</strong>',
	'LOG_USER_LOCK'				=> '<strong>Subiect utilizator blocat</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Toate mesajele mutate in forumul</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Cont utilizator fortat pentru reactivare</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Utilizatorul si-a deblocat propriul subiect</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Avertisment utilizator adaugat</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>Urmatorul avertisment a fost dat acestui utilizator</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Utilizatorul a schimbat grupul initial</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Utilizatorul a renuntat ca lider pentru grupul de utilizatori</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Utilizatorul a intrat in grup</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Utilizatorul a aderat la grup si trebuie sa fie aprobat</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Utilizatorul a parasit grupul</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Cuvant restrictionat adaugat</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Cuvant restrictionat sters</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Cuvant restrictionat modificat</strong><br />» %s',
));

?>