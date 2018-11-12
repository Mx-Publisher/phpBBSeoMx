<?php
/**
*
* install [Romana]
*
* @package language
* @version $Id: install.php 8479 2008-03-29 00:22:48Z naderman $
* @translate $Id: install.php 8479 2008-05-19 22:35:00 www.phpbb.ro (shara21jonny) Exp $
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
	'ADMIN_CONFIG'				=> 'Configurare administrator',
	'ADMIN_PASSWORD'			=> 'Parola administrator',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirmati parola administratorului',
	'ADMIN_PASSWORD_EXPLAIN'	=> '(Specificati o parola cu lungimea intre 6 si 30 caractere)',
	'ADMIN_TEST'				=> 'Verificati setarile administratorului',
	'ADMIN_USERNAME'			=> 'Numele de utilizator al administratorului',
	'ADMIN_USERNAME_EXPLAIN'	=> '(Specificati un nume de utilizator cu lungimea intre 3 si 20 caractere)',
	'APP_MAGICK'				=> 'Suport Imagemagick [ Fisiere atasate ]',
	'AUTHOR_NOTES'				=> 'Notite autor<br />» %s',
	'AVAILABLE'					=> 'Disponibil',
	'AVAILABLE_CONVERTORS'		=> 'Convertoare disponibile',

	'BEGIN_CONVERT'				=> 'Incepe conversia',
	'BLANK_PREFIX_FOUND'		=> 'O scanare a tabelelor a aratat o instalare valida folosind nici un prefix pentru tabel.',
	'BOARD_NOT_INSTALLED'			=> 'Nu a fost gasita nici o instalare',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Unified Convertor Framework al phpBB necesita o instalare standard a phpBB3 pentru a functiona, va rugam sa <a href="%s">incepeti cu instalarea phpBB3</a>.',

	'CATEGORY'					=> 'Categorie',
	'CACHE_STORE'				=> 'Tipul cache',
	'CACHE_STORE_EXPLAIN'		=> 'Locatia fizica unde datele sunt tinute in cache, sistemul de fisiere este preferat.',
	'CAT_CONVERT'				=> 'Converteste',
	'CAT_INSTALL'				=> 'Instaleaza',
	'CAT_OVERVIEW'				=> 'Privire generala',
	'CAT_UPDATE'				=> 'Actualizeaza',
	'CHANGE'					=> 'Schimba',
	'CHECK_TABLE_PREFIX'		=> 'Va rugam sa verificati prefixul tabelei si sa incearcati din nou.',
	'CLEAN_VERIFY'				=> 'Se sterge si se verifica structura finala',
	'CLEANING_USERNAMES'		=> 'Se curata numele de utilizatori',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> este numele de utilizator clar pentru:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Pe vechiul forum au fost gasite nume de utilizator. Pentru a finaliza conversia stergeti sau redenumitie acesti utilizatori ca sa existe doar un singur utilizator din vechiul forum pentru fiecare nume de utilizator clar.',
	'COLLIDING_USER'			=> '» id utilizator: <strong>%d</strong> nume utilizator: <strong>%s</strong> (%d posts)',
	'CONFIG_CONVERT'			=> 'Se converteste configuratia',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Nu a fost posibila scrierea fisierului de configurare. Metodele alternative pentru ca acest fisier sa fie creat sunt prezentate mai jos',
	'CONFIG_FILE_WRITTEN'		=> 'Fisierul de configurare a fost scris. Acum puteti continua cu urmatorul pas al instalarii',
	'CONFIG_PHPBB_EMPTY'		=> 'Variabila phpBB3 de configurare pentru "%s" este goala.',
	'CONFIG_RETRY'				=> 'Incercati din nou',
	'CONTACT_EMAIL_CONFIRM'		=> 'Confirmati e-mailul de contact',
	'CONTINUE_CONVERT'			=> 'Continuati conversia',
	'CONTINUE_CONVERT_BODY'		=> 'A fost gasita o incercare anterioara de conversie. Acum puteti alege intre a incepe o conversie noua sau a continua conversiunea gasita.',
	'CONTINUE_LAST'				=> 'Continua ultimile declaratii',
	'CONTINUE_OLD_CONVERSION'	=> 'Continua conversia inceputa anterior',
	'CONVERT'					=> 'Converteste',
	'CONVERT_COMPLETE'			=> 'Conversie finalizata',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Acum ati convertit cu succes forumul propriu la phpBB 3.0. Acum va puteti autentifica si <a href="../">accesa forumul propriu</a>. Asigurati-va ca setarile au fost transferate corect inainte de activarea forumului stergand directorul de instalarea. Retineti ca ajutorul folosirii phpBB este disponibil online via <a href="http://www.phpbb.com/support/documentation/3.0/">Documentatie</a> si <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">Forumurile de suport</a>',
	'CONVERT_INTRO'				=> 'Bine ati venit in Unified Convertor Framework al phpBB',
	'CONVERT_INTRO_BODY'		=> 'De aici, puteti importa date de la alte sisteme de forumuri (instalate). Lista de mai jos arata toate modulele de conversie ce sunt disponibile. Daca nici un convertor pentru softul forumului din care doriti sa convertiti nu este afisat in aceasta lista, va rugam sa vizitati site-ul nostru unde pot fi gasite pentru descarcare module suplimentare de conversie.',
	'CONVERT_NEW_CONVERSION'	=> 'Conversie noua',
	'CONVERT_NOT_EXIST'			=> 'Convertorul specificat nu exista',
	'CONVERT_OPTIONS'			=> 'Optiuni',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Informatiile introduse au fost verificate. Pentru a incepe procesul de conversie, va rugam sa apasati butonul de mai jos.',
	'CONV_ERR_FATAL'					=> 'Eroare fatala de conversie',
	
	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Incarcarea atasamentelor pe FTP este activata pe vechiul forum. Va rugam sa dezactivati optiunea de incarcare prin FTP si asigurati-va ca este specificat un directorul valid de incarcare, apoi copiati toate fisierele atasamentelor in acest nou director accesibil. Odata ce ati terminat aceasta operatie, restartati convertorul.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nu exista nici o informatie de configurare disponibila pentru aceasta conversie.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Nu s-au putut prelua informatiile de acces pe forum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Nu s-au putut prelua categoriile.',
	'CONV_ERROR_GET_CONFIG'				=> 'Nu s-a putut recupera configurarea forumului.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Nu s-a putut accesa/citi “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Nu s-au putut lua informatiile de autentificare pentru grup.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inconsistenta in tabelul grupurilor detectata in add_bots() - trebuie sa adaugati toate grupurile speciale daca o efectuati manual.',
	'CONV_ERROR_INSERT_BOT'				=> 'Nu s-a putut insera robot in tabelul utilizatorilor.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Nu s-a putut insera robot in tabelul robotilor.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Nu s-a putut insera utilizator in tabelul user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Eroare de mesaj analizata',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Nota catre dezvoltator: trebuie sa specificati $convertor[\'avatar_path\'] pentru a folosi %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Calea relativa catre sursa forumului nu a fost specificata.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Nota catre dezvoltator: trebuie sa specificati $convertor[\'avatar_gallery_path\'] pentru a folosi %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Grupul "%1$s" nu a putut fi gasit in %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Nota catre dezvoltator: trebuie sa specificati $convertor[\'ranks_path\'] pentru a folosi %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Nota catre dezvoltator: trebuie sa specificati $convertor[\'smilies_path\'] pentru a folosi %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Nota catre dezvoltator: trebuie sa specificati $convertor[\'upload_dir\'] pentru a folosi %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Nu s-au putut insera/actualiza setarile permisiunilor.',
	'CONV_ERROR_PM_COUNT'				=> 'Nu s-a putut selecta directorul pentru numararea mesajelor private.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Nu s-a putut insera un forum nou inlocuind o categorie veche.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Nu s-a putut insera un forum nou inlocuind un forum vechi.',
	'CONV_ERROR_USER_ACCESS'			=> 'Nu s-au putut lua informatiile de autentificare ale utilizatorului.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Grup gresit "%1$s" definit in %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Aceasta pagina colecteaza datele necesare pentru a accesa forumul sursa. Specificati detaliile bazei de date pentru fostul dumneavoastra forum; convertorul nu va schimba nimic in baza de date specificata mai jos. Sursa forumului ar trebui sa fie dezactivata pentru a permite o conversie consistenta.',
	'CONV_SAVED_MESSAGES'				=> 'Mesaje salvate',

	'COULD_NOT_COPY'			=> 'Nu s-a putut copia fisierul <strong>%1$s</strong> in <strong>%2$s</strong><br /><br />Va rugam sa verificati daca directorul propriu zis exista si daca serverul web poate scrie in acesta',
	'COULD_NOT_FIND_PATH'		=> 'Nu s-a putut gasi calea catre fostul forum. Va rugam sa verificati setarile si sa incercati din nou.<br />» Calea specificata a fost %s',

	'DBMS'						=> 'Tipul bazei de date',
	'DB_CONFIG'					=> 'Configurare baza de Date',
	'DB_CONNECTION'				=> 'Counexiune baza de Date',
	'DB_ERR_INSERT'				=> 'Eroare in timpul procesarii interogarii <code>INSERT</code>',
	'DB_ERR_LAST'				=> 'Eroare in timpul procesarii <var>query_last</var>',
	'DB_ERR_QUERY_FIRST'		=> 'Eroare in timpul executarii <var>query_first</var>',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Eroare in timpul executarii <var>query_first</var>, %s ("%s")',
	'DB_ERR_SELECT'				=> 'Eroare in timpul procesarii interogarii <code>SELECT</code>',
	'DB_HOST'					=> 'Nume gazda pentru serverul bazei de date sau DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN (Data Source Name) este relevant doar pentru instalarile ODBC.',
	'DB_NAME'					=> 'Numele bazei de date',
	'DB_PASSWORD'				=> 'Parola bazei de date',
	'DB_PORT'					=> 'Portul serverului bazei de date',
	'DB_PORT_EXPLAIN'			=> 'Lasati acest camp necompletat doar daca stiti ca serverul opereaza pe un port ce nu e standard.',
	'DB_USERNAME'				=> 'Numele de utilizator al bazei de date',
	'DB_TEST'					=> 'Testeaza conexiunea',
	'DEFAULT_LANG'				=> 'Limba standard a forumului',
	'DEFAULT_PREFIX_IS'			=> 'Convertorul nu a putut gasi tabelele cu prefixul specificat. Va rugam sa va asigurati ca ati specificat detaliile corecte pentru forumul pe care il convertiti. Prefixul standard al tabelelor pentru %1$s este <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Nicio valoare nu a fost specificata in convertor pentru variabila test_file. Daca sunteti un utilizator al acestui convertor, nu ar trebui sa vedeti aceasta eroare, va rugam sa raportati acest mesaj autorului convertorului. Daca sunteti un autor de convertor, trebuie sa specificati numele fisierului ce exista in forumul sursa pentru a permite ca sa fie verificata calea catre acesta.',
	'DIRECTORIES_AND_FILES'		=> 'Pregatirea directorului si a fisierului',
	'DISABLE_KEYS'				=> 'Dezactivare chei',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Suport FTP la distanta [ Instalare ]',
	'DLL_GD'					=> 'Suport grafic GD [ Confirmare vizuala ]',
	'DLL_MBSTRING'				=> 'Suport caracter multi-byte',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL cu extensie MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Suport XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Suport compresie zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Descarca fisier de configurare',
	'DL_CONFIG_EXPLAIN'			=> 'Puteti descarca fisierul complet config.php pe calculatorul personal. Atunci va trebui sa actulizati fisierul manual, inlocuind orice fisier existent din radacina forumului phpBB 3.0 cu cel descarcat. Retineti sa incarcati fisierul in formatul ASCII (consultati documentatia aplicatiei FTP daca nu sunteti sigur cum sa efectuati aceasta operatie). Cand ati incarcat config.php va rugam apasati “Gata” pentru a trece la urmatoarea etapa.',
	'DL_DOWNLOAD'				=> 'Descarca',
	'DONE'						=> 'Gata',

	'ENABLE_KEYS'				=> 'Reactivare chei. Aceasta operatie poate dura ceva timp',

	'FILES_OPTIONAL'			=> 'Fisiere si directoare optionale',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Optional</strong> - Aceste fisiere, directoare sau permisiuni nu sunt necesare. Rutina de instalare va incerca sa foloseasca o varietate de tehnici pentru a le crea daca ele nu exista sau nu se poate scrie in ele. Oricum, prezenta acestora va accelera instalarea.',
	'FILES_REQUIRED'			=> 'Fisiere si directoare',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Obligatoriu</strong> - Pentru ca phpBB sa functioneze corect trebuie sa poata accesa sau scrie anumite fisiere sau directoare. Daca vedeti mesajul “Nu a fost gasit” trebuie sa creezi fisierul sau directorul relevant. Daca vezi “Nescriibil” trebuie sa schimbi permisiunile fisierului sau directorului pentru ca phpBB sa le poata scrie.',
	'FILLING_TABLE'				=> 'Completeaza tabelul <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Completeaza tabelele',
	'FINAL_STEP'				=> 'Continua cu pasul final',
	'FORUM_ADDRESS'				=> 'Adresa forum',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Acesta este URL-ul catre vechiul forum, de exemplu <samp>http://www.example.com/phpBB2/</samp>. Daca o adresa este introdusa aici si campul nu a fost lasat necompletat, orice instanta a acestei adresa va fi inlocuita de catre noua adresa a forumului in cadrul mesajelor, mesajelor private si semnaturilor.',
	'FORUM_PATH'				=> 'Cale forum',
	'FORUM_PATH_EXPLAIN'		=> 'Aceasta este calea <strong>relativa</strong> pe disc a forumulului vechi de la <strong>radacina instalarii acestui forum phpBB3</strong>',
	'FOUND'						=> 'Gasit',
	'FTP_CONFIG'				=> 'Transfera fisierul de configurare prin FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB a detectat prezenta modulului FTP pe acest server. Puteti incerca sa instalati fisierul config.php prin acest modul daca doriti. Va trebui sa furnizati informatiile listate mai jos. Retineti ca numele de utilizator si parola sunt cele ale serverului propriu ! (intreabati providerul hostului pentru detalii daca nu sunteti sigur ce sunt acestea)',
	'FTP_PATH'					=> 'Cale FTP',
	'FTP_PATH_EXPLAIN'			=> 'Aceasta este calea din directorul radacina catre forumul phpBB, e.g. htdocs/phpBB3/',
	'FTP_UPLOAD'				=> 'Incarca',

	'GPL'						=> 'Licenta generala publica',
	
	'INITIAL_CONFIG'			=> 'Configuratia de baza',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Acum ca instalarea a determinat faptul ca serverul poate rula phpBB, trebuie sa adaugati cateva informatii specifice. Daca nu stiti cum sa va conectati la baza de date, va rugam sa contactati provider-ul hostului (in prima instanta) sau sa folositi forumurile de suport ale phpBB. Cand introduceti datele, asigurati-va ca le-ati verificat inainte sa continuati.',
	'INSTALL_CONGRATS'			=> 'Felicitari !',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>Ati instalat cu succes phpBB %1$s. De aici aveti doua optiuni referitoare la ce sa faceti cu noul sistem de forum instalat phpBB3:</p>
		<h2>Sa convertiti un forum existent in phpBB3</h2>
		<p>Unified Convertor Framework phpBB suporta conversia phpBB 2.0.x si a altor sisteme de forumuri in phpBB3. Daca aveti un forum existent pe care doriti sa-l convertiti, va rugam sa <a href="%2$s">continuati cu convertorul</a>.</p>
		<h2>Sa porniti cu phpBB3!</h2>
		<p>Accesand butonul de mai jos, veti ajunge in Panoul de control al administratorului (ACP). Acordati-va putin timp pentru a examina optiunile disponibile. Retineti ca ajutorul este disponibil online via <a href="http://www.phpbb.com/support/documentation/3.0/">Documentatie</a> si <a href="http://www.phpbb.com/community/viewforum.php?f=46">forumurile de suport</a>, consultati <a href="%3$s">fisierul CITESTE</a> pentru mai multe informatii.</p><p><strong>Va rugam acum sa stergeti, mutati sau sa redenumiti directorul install inainte de a accesa forumul. Daca acest director este in continuare prezent, doar Panoul de control al administratorului (ACP) va fi disponibil.</strong></p>',
	'INSTALL_INTRO'				=> 'Bine ati venit la instalare',
// TODO: write some more introductions here
	'INSTALL_INTRO_BODY'		=> 'Cu aceasta optiune puteti sa instalati phpBB pe serverul propriu.</p><p>Pentru a incepe aveti nevoie de setarile bazei de date. Daca nu stiti setarile bazei de date, contactati provider-ul hostului si cereti informatii despre aceastea. Nu veti putea continua fara aceste setari. Aveti nevoie de:</p>

	<ul>
		<li>Tipul bazei de date - baza de date pe care o veti folosi.</li>
		<li>Numele serverului de gazduire a bazei de date sau DSN-ul acesteia - adresa catre serverul bazei de date.</li>
		<li>Portul serverului bazei de date - portul serverului bazei de date (in majoritatea cazurilor acesta nu este necesar).</li>
		<li>Numele bazei de date - numele bazei de date de pe server.</li>
		<li>Numele de utilizator si parola bazei de date - Datele de autentificare pentru a accesa baza de date.</li>
	</ul>

	<p><strong>Nota:</strong> daca instalati forumul folosind SQLite va trebui sa specificati in campul DSN calea completa catre fisierul bazei de date si sa lasati necompletate campurile nume utilizator si parola. Din motive de securitate va trebui sa va asigurati ca fisierul bazei de date nu este stocat intr-o locatie accesibila de pe web.</p>

	<p>phpBB3 suporta urmatoarele baze de date:</p>
	<ul>
		<li>MySQL 3.23 sau mai nou (MySQLi suportat deasemenea)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 sau mai nou (direct sau via ODBC)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Vor fi afisate numai acele baze de date suportate pe serverul propriu.',
	'INSTALL_INTRO_NEXT'		=> 'Pentru a incepe instalarea apasati butonul de mai jos.',
	'INSTALL_LOGIN'				=> 'Autentificare',
	'INSTALL_NEXT'				=> 'Urmatoarea etapa',
	'INSTALL_NEXT_FAIL'			=> 'Anumite teste au esuat si trebuie sa corectati aceasta problema inainte de a trece la pasul urmator. Esuarea acestora ar putea rezulta printr-o instalare incompleta.',
	'INSTALL_NEXT_PASS'			=> 'Toate testele de baza au fost efectuate cu succes si puteti continua cu urmatoarea etapa a instalarii. Daca ati schimbat orice permisiuni, module, etc., daca doriti puteti purcede la retestarea acestora.',
	'INSTALL_PANEL'				=> 'Panoul de instalare',
	'INSTALL_SEND_CONFIG'		=> 'Din pacate phpBB nu a putut scrie informatiile de configurare direct in config.php. Aceasta situatie poate rezulta din cauza ca fisierul nu este accesibil la scriere. Va fi afisat mai jos un numar de optiuni ajutandu-va la finalizarea instalarii fisierului config.php.',
	'INSTALL_START'				=> 'Porneste instalarea',
	'INSTALL_TEST'				=> 'Testeaza din nou',
	'INST_ERR'					=> 'Eroare la instalare',
	'INST_ERR_DB_CONNECT'		=> 'Nu s-a putut efectua conexiunea catre baza de date, consultati mai jos mesajul de eroare',
	'INST_ERR_DB_FORUM_PATH'	=> 'Fisierul bazei de date specificat este in interiorul arborelui de directoare al forumului. Ar trebui sa puneti acest fisier intr-o locatie web neaccesibila',
	'INST_ERR_DB_NO_ERROR'		=> 'Niciun mesaj de eroare',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Versiunea MySQL instalata pe acest server este incompatibila cu optiunea “MySQL cu extensie MySQLi” pe care ati selectat-o. In loc de aceasta, va rugam sa incercati optiunea “MySQL”.',
	'INST_ERR_DB_NO_SQLITE'		=> 'Versiunea extensiei SQLite pe care ati instalat-o este prea veche, trebuie sa fie actulizata la cel putin 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Versiunea Oracle instalata pe acest server necesita setarea valorii <var>UTF8</var> in parametrul <var>NLS_CHARACTERSET</var>. Fie actualizati instalarea la 9.2+ sau schimbati parametrii.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'Versiunea Firebird instalata pe acest forum este mai veche decat 2.0, va rugam sa actualizati la o versiune mai noua.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'Baza de date selectata pentru Firebird are o dimensiune a paginii mai mica de 8192, trebuie sa fie de cel putin 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Baza de date selectata nu a fost creata in codarea <var>UNICODE</var> sau <var>UTF8</var>. Incercati sa instalati forumul cu baza de date in codarea <var>UNICODE</var> sau <var>UTF8</var>',
	'INST_ERR_DB_NO_NAME'		=> 'Niciun nume specificat pentru baza de date',
	'INST_ERR_EMAIL_INVALID'	=> 'Adresa de email pe care ati specificat-o este invalida',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Adresele de email pe care le-ati specificat nu se potrivesc.',
	'INST_ERR_FATAL'			=> 'Eroare fatala de instalare',
	'INST_ERR_FATAL_DB'			=> 'O eroare fatala si nerecuperabila a aparut in baza de date. Aceasta poate fi cauzata datorita faptului ca utilizatorul specificat nu are drepturile necesare pentru comenzi de tipul <code>CREATE TABLES</code> sau <code>INSERT</code>, etc. Mai multe informatii s-ar putea sa gasiti mai jos. Va rugam sa contactati provider-ul hostului in prima instanta sau forumurile de suport phpBB pentru asistenta.',
	'INST_ERR_FTP_PATH'			=> 'Nu s-a putut schimba calea catre directorul specificat, verificati calea.',
	'INST_ERR_FTP_LOGIN'		=> 'Nu s-a putut efectua autentificarea pe serverul FTP, verificati numele de utilizator si parola',
	'INST_ERR_MISSING_DATA'		=> 'Trebuie sa completati toate campurile din acest bloc',
	'INST_ERR_NO_DB'			=> 'Nu s-a putut incarca modulul PHP pentru tipul bazei de date selectat',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Parolele specificate nu se potrivesc.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Parola specificata este prea lunga. Lungimea maxima este de 30 de caractere.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Parola specificata este prea scurta. Lungimea minima este de 6 caractere.',
	'INST_ERR_PREFIX'			=> 'Tabelele cu prefixul specificat exista deja, va rugam sa alegeti un alt prefix.',
	'INST_ERR_PREFIX_INVALID'	=> 'Prefixul tabelei specificat este invalid pentru aceasta baza de date. Va rugam sa incercati alt nume, fara a mai folosi caractere precum cratima',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Prefixul tabelei specificat este prea lung. Lungimea maxima este de %d caractere.',
	'INST_ERR_USER_TOO_LONG'	=> 'Numele de utilizator specificat este prea lung. Lungimea maxima este de 20 de caractere.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Numele de utilizator specificat este prea scurt. Lungimea minima este de 3 caractere.',
	'INVALID_PRIMARY_KEY'		=> 'Cheie primara invalida : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Retineti ca aceasta operatie poate dura o vreme... Va rugam sa nu opriti scriptul.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Verificare extensie <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>Necesar</strong> - <samp>mbstring</samp> este o extensie a PHP ce ofera funtii siruri multibyte. Anumite functionalitati ale mbstring nu sunt compatibile cu phpBB si trebuiesc dezactivate.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Functia overloading',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> trebuie sa fie 0 sau 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Codarea transparenta a caracterelor',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> trebuie sa fie 0.',
	'MBSTRING_HTTP_INPUT'					=> 'Conversia caracterelor HTTP specificate',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> trebuie sa fie <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'Conversia caracterelor HTTP generate',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> trebuie sa fie <samp>pass</samp>.',
	
	'MAKE_FOLDER_WRITABLE'		=> 'Va rugam sa va asigurati ca acest director exista si poate fi scris de catre serverul web; apoi incercati din nou:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Va rugam sa va asigurati ca aceste directoare exista si pot fi scrise de catre serverul web; apoi incercati din nou:<br />»<strong>%s</strong>',

	'NAMING_CONFLICT'			=> 'Conflict: %s si %s sunt amandoua aliasuri<br /><br />%s',
	'NEXT_STEP'					=> 'Continuati cu pasul urmator',
	'NOT_FOUND'					=> 'Nu poate fi gasit',
	'NOT_UNDERSTAND'			=> 'Nu poate intelege %s #%d, tabelul %s ("%s")',
	'NO_CONVERTORS'				=> 'Niciun convertor nu este disponibil pentru a fi folosit',
	'NO_CONVERT_SPECIFIED'		=> 'Niciun convertor specificat',
	'NO_LOCATION'				=> 'Nu se poate determina locatia. Daca stiti ca Imagemagick este instalat, puteti specifica mai tarziu locatia in cadrul Panoului de administrare',
	'NO_TABLES_FOUND'			=> 'Tabelele nu au fost gasite.',

	'OVERVIEW_BODY'					=> 'Bine ati venit la phpBB3!<br /><br />phpBB™ este cea mai folosita solutie pe scara larga de tip forum bazata pe open source. phpBB3 este ultima versiune dintr-o serie cu o vechime de sapte ani. Ca si predecesorii sai, phpBB3 este imbunatatit, usor de utilizat si suportat de catre echipa phpBB. De asemenea, phpBB3 imbunatateste ceea ce a facut phpBB2 atat de popular si adauga facilitati cerute ce nu au fost prezente in versiunile anterioare. Noi speram ca va depasi asteptarile dumneavoastra.<br /><br />Acest sistem de instalare va va ghida prin procesul de instalare al phpBB3, actualizandu-l la ultima versiune dintr-o versiune anterioara, putand sa-l convertiti dintr-un alt sistem de forumuri (incluzand phpBB2). Pentru mai multe informatii, va incurajam sa consultati <a href="../docs/INSTALL.html">ghidul de instalare</a>.<br /><br />Pentru a citi licenta phpBB3 sau pentru a afla cum se obtine suportul, va rugam sa selectati optiunile potrivite din meniul de pe margine. Pentru a continua, va rugam sa selectati sectiunea TAB de mai sus.',

	'PCRE_UTF_SUPPORT'				=> 'Suport PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>nu</strong> va rula daca daca instalarea PHP nu este compilata cu suport UTF-8 in extensia PCRE',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Functia PHP getimagesize() este disponibila',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Necesar</strong> - Pentru ca phpBB sa functioneze corect, functia getimagesize trebuie sa fie disponibila.',
	'PHP_OPTIONAL_MODULE'			=> 'Module optionale',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Optional</strong> - Aceste module sau aplicatii sunt optionale. Totusi, daca ele sunt disponibile, acestea vor activa functionalitati suplimentare.',
	'PHP_SUPPORTED_DB'				=> 'Baze de date suportate',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Cerinte</strong> - Trebuie sa aveti suport pentru cel putin o baza de date compatibila cu PHP. Daca nici un modul al bazei de date nu este afisat ca fiind disponibil, ar trebui sa contactati provider-ul hostului sau sa revizuiti pentru ajutor documentatia relevanta de instalare a PHP.',
	'PHP_REGISTER_GLOBALS'			=> 'Setarea PHP <var>register_globals</var> este dezactivata',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB va rula in continuare daca aceasta setare este activata, dar daca este posibil, este recomandat ca register_globals sa fie dezactivata din motive de securitate.',
	'PHP_SAFE_MODE'					=> 'Mod protejat',
	'PHP_SETTINGS'					=> 'Versiune PHP si setari',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Necesar</strong> - Trebuie sa aveti cel putin versiunea 4.3.3 a PHP pentru a putea instala phpBB. Daca <var>safe mode</var> este afisat mai jos, instalarea PHP va rula in acest mod. Acest fapt va impune limitari administrarii la distanta si altor functionalitati similare.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'Setarea PHP <var>allow_url_fopen</var> este disponibila',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Optional</strong> - Aceasta setare este optionala, oricum anumite functii phpBB ca avatarele la distanta nu vor functiona corect fara ea.',
	'PHP_VERSION_REQD'				=> 'Versiune PHP >= 4.3.3',
	'POST_ID'						=> 'Identificator mesaj',
	'PREFIX_FOUND'					=> 'O scanare a tabelelor a aratat ca instalarea este valida folosind <strong>%s</strong> ca si prefix pentru tabela.',
	'PREPROCESS_STEP'				=> 'Executa preprocesarea functiilor/interogarilor',
	'PRE_CONVERT_COMPLETE'			=> 'Toate etapele preconversiei au fost finalizate cu succes. Acuma puteti incepe procesul propriu zis de conversie. Retineti ca va trebui sa adjustati manual mai multe lucruri. Dupa conversie, in special verificati permisiunile atribuite, reconstruiti index-ul de cautare care nu este convertit si deasemenea, asigurati-va ca fisierele s-au copiat corect, de exemplu imaginile asociate si zambetele.',
	'PROCESS_LAST'					=> 'Proceseaza ultimile instructiuni',

	'REFRESH_PAGE'				=> 'Reimprospateaza pagina pentru a continua conversia',
	'REFRESH_PAGE_EXPLAIN'		=> 'Daca selectati Da, convertorul va reimprospata pagina pentru a continua conversia dupa fiecare pas finalizat. Daca aceasta este prima conversie, pentru testarea efectelor si pentru a determina orice eroare in viitor, va sugeram sa alegeti Nu.',
	'REQUIREMENTS_TITLE'		=> 'Compatibilitatea instalarii',
	'REQUIREMENTS_EXPLAIN'		=> 'Inainte de a continua cu instalarea completa, phpBB va face unele teste cu configuratia serverului si a fisierelor pentru a se asigura ca sunteti capabil sa instalati si sa rulati phpBB. Va rugam sa va asigurati ca cititi complet aceste rezultate si sa nu continuati pana cand toate testele necesare nu sunt trecute. Daca doriti sa folositi orice funtionalitate dependenta de testarile optionale, va trebui sa va asigurati ca aceste teste sunt de asemenea trecute.',
	'RETRY_WRITE'				=> 'Reincearca scrierea fisierului de configurare',
	'RETRY_WRITE_EXPLAIN'		=> 'Daca doriti, puteti schimba permisiunile pe fisierul config.php pentru a permite phpBB-ului sa il scrie. Daca doriti acest lucru trebuie sa accesati butonul Reincearca de mai jos. Nu uitati sa schimbati la loc permisiunile fisierului config.php dupa ce phpBB a terminat instalarea.',

	'SCRIPT_PATH'				=> 'Cale script',
	'SCRIPT_PATH_EXPLAIN'		=> 'Calea unde phpBB este localizat relativ la numele domeniului, de exemplu <samp>/phpBB3</samp>',
	'SELECT_LANG'				=> 'Selectare limba',
	'SERVER_CONFIG'				=> 'Configuratie server',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Indexul de cautare nu a fost convertit',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Vechiul index de cautare nu a fost convertit. Cautarile vor genera intotdeauna rezultate goale. Pentru a crea un nou index de cautare accesati Panoul de control al administratorului, selectati Intretinere si alegeti Indexul cautarii din submeniu.',
	'SOFTWARE'					=> 'Softul forumului',
	'SPECIFY_OPTIONS'			=> 'Specificati optiunile de conversie',
	'STAGE_ADMINISTRATOR'		=> 'Detalii administrator',
	'STAGE_ADVANCED'			=> 'Setari avansate',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Setarile din aceasta pagina sunt necesare numai pentru a fi definite daca stiti ca este necesar altceva decat valorile initiale. Daca sunteti nesigur, continuati cu pasul urmator, acestea pot fi modificate ulterior din Panoul administratorului.',
	'STAGE_CONFIG_FILE'			=> 'Fisierul de configurare',
	'STAGE_CREATE_TABLE'		=> 'Creaza tabelele bazei de date',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Baza de date folosita de catre phpBB 3.0 a fost creata si populata cu datele initiale. Continuati cu pasul urmator pentru a finaliza instalarea phpBB.',
	'STAGE_DATABASE'			=> 'Setari baza de date',
	'STAGE_FINAL'				=> 'Ultima etapa',
	'STAGE_INTRO'				=> 'Introducere',
	'STAGE_IN_PROGRESS'			=> 'Conversie in progres',
	'STAGE_REQUIREMENTS'		=> 'Cerinte',
	'STAGE_SETTINGS'			=> 'Setari',
	'STARTING_CONVERT'			=> 'Incepe procesul de conversie',
	'STEP_PERCENT_COMPLETED'	=> 'Pasul <strong>%d</strong> din <strong>%d</strong>',
	'SUB_INTRO'					=> 'Introducere',
	'SUB_LICENSE'				=> 'Licenta',
	'SUB_SUPPORT'				=> 'Suport',
	'SUCCESSFUL_CONNECT'		=> 'Conexiune efectuata cu succes',
	'SUPPORT_BODY'				=> 'Suportul total va fi oferit gratuit pentru versiunea curenta stabila a phpBB3. Acesta include:</p><ul><li>instalare</li><li>configurare</li><li>intrebari tehnice</li><li>probleme legate de erori posibile in software</li><li>actualizari de la versiunile de tip candidat (RC) la ultima versiune stabila</li><li>conversia de la phpBB 2.0.x la phpBB3</li><li>conversia de la alt software pentru forum la phpBB3 (va rugam sa consultati <a href="http://www.phpbb.com/community/viewforum.php?f=65">Forumul de convertoare</a>)</li></ul><p>Noi incurajam utilizatorii care inca ruleaza versiunile beta ale phpBB3 sa-si inlocuiasca instalarile o copie proaspata a ultimei versiuni.</p><h2>MOD-uri / Stiluri</h2><p>Pentru problemele legate de MOD-uri, va rugam sa scrieti in <a href="http://www.phpbb.com/community/viewforum.php?f=81">Forumul de MOD-ificari</a>.<br />Pentru problemele legate de stiluri, sabloane si seturi de imagini, va rugam sa scrieti in <a href="http://www.phpbb.com/community/viewforum.php?f=80">Forumul de stiluri</a>.<br /><br />Daca intrebarea este legata de un pachet anume, va rugam sa scrieti in direct in subiectul dedicat pachetului.</p><h2>Cum se obtine suportul</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Pachetul de bun venit al phpBB</a><br /><a href="http://www.phpbb.com/support/">Sectiune suport</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Ghid scurt de inceput</a><br /><br />. Pentru a va asigura ca sunteti la zi cu ultimele stiri si versiuni, <a href="http://www.phpbb.com/support/">inscrieti-va la lista noastra de email</a>?<br /><br />',
	'SYNC_FORUMS'				=> 'Incepe sincronizarea forumurilor',
	'SYNC_POST_COUNT'			=> 'Sincronizeaza numararea mesajelor',
	'SYNC_POST_COUNT_ID'		=> 'Sincronizeaza numararea mesajelor de la <var>entry</var> %1$s la %2$s.',
	'SYNC_TOPICS'				=> 'Incepe sincronizarea subiectelor',
	'SYNC_TOPIC_ID'				=> 'Sincronizeaza subiectele de la <var>topic_id</var> $1%s la $2%s',

	'TABLES_MISSING'			=> 'Nu s-au putut gasi aceste tabele<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefixul pentru tabele in baza de date',
	'TABLE_PREFIX_SAME'			=> 'Prefixul tabelelor trebuie sa fie cel folosit de catre softul din care faceti conversia.<br />» Prefixul tabelelor specificat a fost %s.',
	'TESTS_PASSED'				=> 'Testele au fost trecute',
	'TESTS_FAILED'				=> 'Testele au esuat',

	'UNABLE_WRITE_LOCK'			=> 'Nu s-a putut scrie fisierul de inchidere',
	'UNAVAILABLE'				=> 'Nu este disponibil',
	'UNWRITABLE'				=> 'Nu poate fi scris',
	'UPDATE_TOPICS_POSTED'		=> 'Genereaza informatiile subiectelor publicate',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'O eroare a aparut in timp ce se generau informatiile subiectelor publicate. Poti reincerca efectuarea acestui pas din Panoul administratorului dupa ce procesul de conversie este finalizat.',
	'VERIFY_OPTIONS'			=> 'Verificarea optiunilor de conversie',
	'VERSION'					=> 'Versiune',

	'WELCOME_INSTALL'			=> 'Bine ati venit la instalarea phpBB3',
	'WRITABLE'					=> 'Poate fi scris',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Toate fisiere sunt actualizate cu ultima versiune a phpBB. Acum trebuie <a href="../ucp.php?mode=login">sa va autentificati pe forum</a> si sa verificati daca totul decurge normal. Nu uitati sa stergi, redenumiti sau sa mutati directorul de instalare!',
	'ARCHIVE_FILE'				=> 'Sursa fisierelor din arhiva',

	'BACK'		=> 'Inapoi',
	'BINARY_FILE'		=> 'Fisier binar',
	'BOT'				=> 'Paianjen/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'Metoda folosita pentru a fi siguri ca un nume de utilizator nu este folosit de mai multi utilizatori a fost schimbata. Sunt cativa utilizatori care au acelasi nume cand se face comparatia cu noua metoda. Trebuie sa stergeti sau sa redenumiti acesti utilizatori pentru a fi sigura ca fiecare nume este folosit de catre un singur utilizator inainte de a putea continua.',
	'CHECK_FILES'					=> 'Verifica fisiere',
	'CHECK_FILES_AGAIN'				=> 'Verifica din nou fisiere',
	'CHECK_FILES_EXPLAIN'			=> 'La pasul urmator toate fisierele vor fi verificate cu fisierele actualizate - aceasta operatie poate dura ceva timp daca este prima verificare a fisierelor.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Potrivit bazei de date versiunea proprie este actualizata la zi. Poate doriti sa continuati cu verificarea fisierelor pentru a va asigura ca toate fisierele sunt cu adevarat actualizate la zi cu ultima versiune a phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Continua procesul de actualizare',
	'COLLECTED_INFORMATION'			=> 'Informatie fisier',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Lista de mai jos arata informatii despre fisierele care trebuie actualizate. Va rugam sa cititi informatiile din fata fiecarui bloc de stare pentru a vedea ce inseamna acestea si ce puteti face pentru a efectua o actualizare reusita.',
	'COLLECTING_FILE_DIFFS'			=> 'Colecteaza diferentele dintre fisiere',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Acum trebuie sa va <a href="../ucp.php?mode=login">autentificati pe forumul propriu</a> si sa verificati daca totul functioneaza normal. Nu uitati sa stergeti, redenumiti sau sa mutati directorul de instalare!',
	'CONTINUE_UPDATE_NOW'			=> 'Continua acum procesul de actualizare',
	'CURRENT_FILE'					=> 'Inceputul fisierului original curent',
	'CURRENT_VERSION'				=> 'Versiunea curenta',

	'DATABASE_TYPE'						=> 'Tipul bazei de date',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Fisierul de actualizare a bazei de date din directorul de instalare nu este actualizat. Va rugam sa va asigurati ca ati incarcat versiunea corecta a fiserului.',
	'DELETE_USER_REMOVE'				=> 'Sterge utilizatorul si elimina mesajele',
	'DELETE_USER_RETAIN'				=> 'Sterge utilizatorul dar pastreaza mesajele',
	'DESTINATION'						=> 'Fisierul destinatie',
	'DIFF_INLINE'						=> 'In linie',
	'DIFF_RAW'							=> 'Diferente neprelucrate unite',
	'DIFF_SEP_EXPLAIN'					=> 'Sfarsitul fisierului original curent / Inceputul noului fisier actualizat',
	'DIFF_SIDE_BY_SIDE'					=> 'Unul langa altul',
	'DIFF_UNIFIED'						=> 'Diferente unite',
	'DO_NOT_UPDATE'						=> 'Nu actualiza acest fisier',
	'DONE'								=> 'Gata',
	'DOWNLOAD'							=> 'Descarca',
	'DOWNLOAD_AS'						=> 'Descarca sub un nume nou',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Descarca arhiva cu fisierele modificate',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Odata descarcata ar trebui sa desfaceti arhiva. Veti gasi fisierele modificate pe care trebuie sa le incarcati in radacina directorului phpBB. Va rugam sa incarcati fisierele in locatia lor respectiva. Dupa ce ati incarcat toate fisierele, va rugam sa verificati din nou fisierele cu celalalt buton de mai jos.',

	'ERROR'		=> 'Eroare',
	'EDIT_USERNAME'	=> 'Modifica nume de utilizator',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Fisierul este deja actualizat la zi',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Filsierul nu poate fi verificat pentru stabilirea diferentelor',
	'FILE_USED'						=> 'Informatii folosite din',			// Single file
	'FILES_CONFLICT'				=> 'Fisiere de conflict',
	'FILES_CONFLICT_EXPLAIN'		=> 'Urmatoarele fisiere sunt modificate si nu reprezinta fisierele originale din versiunea veche. phpBB a stabilit ca aceste fisiere creaza conflicte si daca s-a incercat sa fie unite. Va rugam sa investigati confictele si sa incercati sa le rezolvati manual sau continuat sa le actualizati folosind metoda preferata de unire. Daca rezolvati conflictele manual, verificati din nou fisierele dupa ce le-ati modificat. De asemenea, puteti sa alegeti metoda preferata de unire pentru fiecare fisier. Primul va rezulta intr-un fisier unde liniile de conflict din versiunea veche a fisierului vor fi pierdute, cealalta va rezulta in pierderea schimbarilor din fisierul nou.',
	'FILES_MODIFIED'				=> 'Fisiere modificate',
	'FILES_MODIFIED_EXPLAIN'		=> 'Urmatoarele fisiere sunt modificate si nu reprezinta fisierele originale din versiunea veche. Fisierul actualizat va fi rezultatul unirii intre modificarile prpprii si noul fisier.',
	'FILES_NEW'						=> 'Fisiere noi',
	'FILES_NEW_EXPLAIN'				=> 'Urmatoarele fisiere nu exista in instalare in momentul de fata. Aceste fisiere vor fi adaugate la instalare',
	'FILES_NEW_CONFLICT'			=> 'Fisiere de conflict noi',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Urmatoarele fisiere sunt noi in ultima versiune dar s-a determinat ca exista deja un fisier cu acelasi nume in aceeasi pozitie. Acest fisier va fi suprascris cu fisierul  nou.',
	'FILES_NOT_MODIFIED'			=> 'Fisiere nemodificate',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Urmatoarele fisiere nu sunt modificate si reprezinta fisierele originale ale phpBB din versiunea pe care vreti sa o actualizati.',
	'FILES_UP_TO_DATE'				=> 'Fisiere deja actualizate',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Urmatoarele fisiere sunt deja actualizate la zi si nu mai necesita actualizarea.',
	'FTP_SETTINGS'					=> 'Setari FTP',
	'FTP_UPDATE_METHOD'				=> 'Incarcare FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Fisierele actualizate gasite sunt incompatibile cu versiunea instalata. Versiunea instalata este %1$s si fisierul actualizat este pentru actualizarea phpBB %2$s la %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Fisierele actualizate sunt incomplete',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Actualizarea bazei de date a fost efectuata cu succes. Acum trebuie sa continuati procesul de actualizare.',

	'KEEP_OLD_NAME'		=> 'Pastreaza numele de utilizator',

	'LATEST_VERSION'		=> 'Ultima versiune',
	'LINE'					=> 'Linie',
	'LINE_ADDED'			=> 'Adaugat',
	'LINE_MODIFIED'			=> 'Modificat',
	'LINE_REMOVED'			=> 'Eliminat',
	'LINE_UNMODIFIED'		=> 'Nemodificat',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Pentru a actualiza instalarea trebuie mai intai sa va autentificati.',

	'MAPPING_FILE_STRUCTURE'	=> 'Pentru a usura incarcarea, aici sunt locatiile fisierelor care mapeaza instalarea phpBB.',
	
	'MERGE_MODIFICATIONS_OPTION'	=> 'Uneste modificarile',	
	
	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Nu uni - foloseste fisierul nou',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Nu uni - foloseste fisierul curent instalat ',
	'MERGE_MOD_FILE_OPTION'		=> 'Uneste diferentele si foloseste codul modificat in cadrul blocului de conflict',
	'MERGE_NEW_FILE_OPTION'		=> 'Uneste diferentele si foloseste codul noului fisier in cadrul blocului de conflict',
	'MERGE_SELECT_ERROR'		=> 'Modurile de unire a fisierelor de conflict nu sunt corect selectate.',
	'MERGING_FILES'				=> 'Unire diferente',
	'MERGING_FILES_EXPLAIN'		=> 'Acum se colecteaza modificarile fisierelor finale.<br /><br />Va rugam sa asteptati pana cand phpBB a completat toate operatiunile efectuate pe fisierele schimbate.',

	'NEW_FILE'						=> 'Sfarsitul fisierului nou actualizat',
	'NEW_USERNAME'					=> 'Nume de utilizator nou',
	'NO_AUTH_UPDATE'				=> 'Nu sunteti autorizat sa efectuati actualizarea',
	'NO_ERRORS'						=> 'Nicio eroare',
	'NO_UPDATE_FILES'				=> 'Urmatoarele fisiere nu au fost actualizate',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Urmatoarele fisiere sunt noi sau modificate dar directorul in care ele sunt localizate nu a putut fi gasit in instalare. Daca aceasta lista contine fisierele altor directoare decat language/ sau styles/ atunci s-ar putea ca va fi modificat structura directorului iar actualizarea sa fie incompleta.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Nu a fost gasit niciun director valid pentru actualizare, va rugam sa va asigurati ca ati incarcat fisierele relevante.<br /><br />Instalarea pare sa <strong>nu</strong> fie actualizata la zi. Actualizarile sunt disponibile penntru versiunea phpBB proprie %1$s, va rugam sa vizitati <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a> pentru a obtine pachetul corect in vederea actualizarii de la versiunea %2$s la versiunea %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Versiunea proprie este actualizata la zi. Nu este nevoie sa rulati actualizarea. Daca doriti sa faceti o verificare de integritate a fisierelor proprii, asigurati-va ca ati incarcat corect fisierele de actualizare.',
	'NO_UPDATE_INFO'				=> 'Informatiile din fisierul de actualizare nu au putut fi gasite.',
	'NO_UPDATES_REQUIRED'			=> 'Nu este necesara nicio actualizare',
	'NO_VISIBLE_CHANGES'			=> 'Nicio schimbare vizibila',
	'NOTICE'						=> 'Retineti',
	'NUM_CONFLICTS'					=> 'Numarul conflictelor',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Acum aveti diferente in %1$d din cele %2$d fisiere ce au fost verificate.<br />Va rugam sa asteptati pana cand toate fisierele vor fi verificate.',
	
	'OLD_UPDATE_FILES'		=> 'Fisierele de actualizare nu sunt actualizate la zi. Fisierele de actualizare gasite sunt pentru actualizarea phpBB %1$s la phpBB %2$s dar ultima versiune a phpBB este %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Pachetul curent actualizeaza la versiunea',
	'PERFORM_DATABASE_UPDATE'			=> 'Efectueaza actualizarea bazei de date',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Mai jos veti gasi un buton catre scriptul de actualizare a bazei de date. Actualizarea bazei de date poate sa dureze ceva vreme, asa ca va rugam sa nu opriti procesul daca pare sa se blocheze. Dupa ce actualizarea bazei de date s-a finalizat, urmati instructiunile pentru a continua procesul de actualizare.',
	'PREVIOUS_VERSION'					=> 'Versiunea anterioara',
	'PROGRESS'							=> 'Progres',

	'RESULT'					=> 'Rezultat',
	'RUN_DATABASE_SCRIPT'		=> 'Actualizeaza acum baza de date',

	'SELECT_DIFF_MODE'			=> 'Selectati modul pentru diferente',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Selectati formatul de descarcare al arhivei',
	'SELECT_FTP_SETTINGS'		=> 'Selectati setarile FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Arata diferente/conflicte',
	'SHOW_DIFF_FINAL'			=> 'Arata fisierul rezultat',
	'SHOW_DIFF_MODIFIED'		=> 'Arata diferentele unite',
	'SHOW_DIFF_NEW'				=> 'Arata continutul fisierului',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Arata diferente',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Arata diferente',
	'SOME_QUERIES_FAILED'		=> 'Cateva interogari au esuat, declaratiile si erorile sunt afisate mai jos',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Probabil nu este cazul sa va ingrijorati, actualizarea va continua. Ar trebui ca aceasta eroare sa se termine, puteti cauta ajutor pe forumurile noastre de suport. Consultati sectiunea <a href="../docs/README.html">Citeste</a> pentru detalii despre cum sa obtineti sfaturi.',
	'STAGE_FILE_CHECK'			=> 'Verifica fisiere',
	'STAGE_UPDATE_DB'			=> 'Actualizeaza baza de date',
	'STAGE_UPDATE_FILES'		=> 'Actualizeaza fisiere',
	'STAGE_VERSION_CHECK'		=> 'Verificare versiune',
	'STATUS_CONFLICT'			=> 'Fisierul modificat produce conflicte',
	'STATUS_MODIFIED'			=> 'Fisierul modificat',
	'STATUS_NEW'				=> 'Noul fisier',
	'STATUS_NEW_CONFLICT'		=> 'Conflictele noului fisier',
	'STATUS_NOT_MODIFIED'		=> 'Fisierul nu a fost modificat',
	'STATUS_UP_TO_DATE'			=> 'Fisier deja actualizat',
	
	'TOGGLE_DISPLAY'			=> 'Arata/ascunde lista fisierelor',

	'UPDATE_COMPLETED'				=> 'Actualizare completa',
	'UPDATE_DATABASE'				=> 'Actualizare baza de date',
	'UPDATE_DATABASE_EXPLAIN'		=> 'In urmatoarea etapa va fi actualizata baza de date.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Schema actualizarii bazei de date',
	'UPDATE_FILES'					=> 'Actualizare fisiere',
	'UPDATE_FILES_NOTICE'			=> 'Va rugam sa va asigurati ca ati actualizat fisierele forumului propriu, acest fisier va actualizeaza doar baza de date.',
	'UPDATE_INSTALLATION'			=> 'Actualizeaza instalarea phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Cu aceasta optiune, este posibil sa actualizati instalarea phpBB la ultima versiune.<br />In timpul procesului toate fisierele proprii vor fi verificate pentru integritatea lor. Puteti revizui tote diferentele si fisierele inainte de actualizare.<br /><br />Actualizarea propriu zisa a fisierului se poate efectua in doua moduri diferite.</p><h2>Actualizare manuala</h2><p>Cu aceasta actualizare doar descarcati setul personal al fisierelor modificate pentru a va asigura ca nu pierdeti modificarile fisierelor pe care le-ai efectuat. Dupa ce ati descarcat acest pachet trebuie sa incarcati manual fisierele in locatia corecta din directorul radacina al phpBB. Odata ce este gata, puteti porni din nou procesul de verificare al fisierelor ca sa vedeti daca ati mutat fisierele in locatia corecta.</p><h2>Actualizare automata cu FTP</h2><p>Aceasta metoda este similara cu prima dar fara a fi necesara descarcarea si incarcarea proprie a fisierelor modificate. Aceste operatii vor fi efectuate pentru dumneavoastra. Pentru a folosi aceasta metoda trebuie sa stiti detalile de autentificare pe FTP dn moment ce veti fi intrebat de ele. Odata ce ati terminat, vei fi redirectionat catre etapa de verificare a fisierelor pentru a va asigura ca totul s-a actualizat corect.',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Anunt de lansare</h1>

		<p>Va rugam sa cititi <a href="%1$s" title="%1$s">anunturile relatarilor pentru ultima versiune</a> inainte de a continua procesul de actualizare, s-ar putea sa contina informatii folositoare. De asemenea contine link-urile pentru descarcarea completa precum si jurnalul schimbarilor.</p>

		<br />

		<h1>Cum sa actualizati instalarea cu Pachetul de actualizate automata (Automatic Update Package)</h1>

		<p>Modul recomandat pentru a actualiza instalarea afisata aici este disponibil numai pentru pachetul de actualizare automata. De asemenea puteti sa actualizati instalarea folosind metodele afisate in documentul INSTALL.html. Pasii pentru actualizarea automata a phpBB3 sunt:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Accesati <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">pagina de descarcari a phpBB.com</a> si descarcati arhiva "Automatic Update Package".<br /><br /></li>
			<li>Dezarhivati arhiva.<br /><br /></li>
			<li>Incarcati directorul complet de instalare dezarhivat in radacina directorului phpBB (unde este localizat fisierul config.php).<br /><br /></li>
		</ul>

		<p>Odata incarcat, forumul propriu va fi offline pentru utilizatorii normali cat timp directorul install incarcat va fi prezent.<br /><br />
		<strong><a href="%2$s" title="%2$s">Acuma porniti procesul de actualizare accesand prin browser directorul install</a>.</strong><br />
		<br />
		Veti fi ghidat in timpul procesului de actualizare. Veti fi notificat odata ce actualizarea va fi efectuata cu succes.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>A fost gasita o actualizare incompleta</h1>

		<p>phpBB a detectat o actualizare automata incompleta. Va rugam sa va asigurati ca ati urmat fiecare pas din actualizarea automata. Mai jos veti gasi un link ca sa reluati actualizarea sau puteti sa accesati direct directorul install.</p>
	',
	'UPDATE_METHOD'					=> 'Metoda de incarcare',
	'UPDATE_METHOD_EXPLAIN'			=> 'Puteti alege metoda preferata de actualizare. Folosind optiunea Incarcare prin FTP vi se va pune la dispozitie un formular unde trebuie sa introduceti detaliile contului FTP. Cu aceasta metoda, fisierele vor fi mutate automat catre noua lor locatie iar copiile de siguranta (backup) ale fisierelor vechi vor fi create intr-un fisier cu extensia .bak. Daca alegeti sa descarcati fisierele modificate, mai tarziu le puteti dezarhiva si incarca manual in locatia lor corecta.',
	'UPDATE_REQUIRES_FILE'			=> 'Aplicatia de actualizare necesita ca urmatorul fisier sa fie prezent: %s',
	'UPDATE_SUCCESS'				=> 'Actualizarea a fost efectuata cu succes',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Toate fisierele au fost actualizate cu succes. Urmatorul pas impune verficarea din nou a fisierelor pentru a va asigura ca fisierele au fost actualizate corect.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Actualizeaza versiunea si optimizeaza tabelele',
	'UPDATING_DATA'					=> 'Actualizeaza datele',
	'UPDATING_TO_LATEST_STABLE'		=> 'Actualizeaza baza de date la ultima versiune stabila',
	'UPDATED_VERSION'				=> 'Versiune actualizata',
	'UPLOAD_METHOD'					=> 'Metoda de incarcare',

	'UPDATE_DB_SUCCESS'				=> 'Actualizarea bazei de date a fost efectuata cu succes.',
	'USER_ACTIVE'					=> 'Utilizator activ',
	'USER_INACTIVE'					=> 'Utilizator inactiv',

	'VERSION_CHECK'				=> 'Verificare versiune',
	'VERSION_CHECK_EXPLAIN'		=> 'Verifica pentru a vedea daca versiunea phpBB pe care o folositi este la zi.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Versiunea phpBB nu este la zi. Va rugam sa continuati procesul de actualizare.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Versiunea phpBB nu este la zi.<br />Mai jos veti gasi un link catre anunturile de lansare a ultimelor versiuni, dar si instructiunile pentru efectuarea actualizarii.',
	'VERSION_UP_TO_DATE'		=> 'Instalarea este la zi, nicio actualizare nu este valabila pentru versiunea phpBB curenta folosita. Puteti continua pentru a efectua o verificare de validare a fisierelor.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Instalarea este la zi, nicio actualizare nu este valabila pentru versiunea phpBB curenta folosita. Nu este necesara actualizarea instalarii.',
	'VIEWING_FILE_CONTENTS'		=> 'Vizualizeaza continutul fisierelor',
	'VIEWING_FILE_DIFF'			=> 'Vizualizeaza diferentele fisierelor',

	'WRONG_INFO_FILE_FORMAT'	=> 'Informatia formatului fisierului este gresita',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Multumim, Conducerea',
	'CONFIG_SITE_DESC'				=> 'Un text scurt pentru a descrie forumul propriu',
	'CONFIG_SITENAME'				=> 'yourdomain.com',

	'DEFAULT_INSTALL_POST'			=> 'Acesta este un mesaj exemplu din instalarea phpBB3. Totul pare sa functioneze normal. Puteti sterge acest mesaj daca doriti si continua configurarea forumului. In timpul procesului de instalare, pe prima categorie si primul forum este atribuit un set de permisiuni potrivit grupurilor predefinite de administratori, roboti, moderatori globali, vizitatori, utilizatori inregistrati si utilizatori inregistrati COPPA. De asemenea, daca alegeti sa stergeti prima categorie si primul forum, nu uitati sa stabiliti permisiuni pentru toate aceste grupuri de utilizatori pe toate categoriile si forumurile pe care le creati. Este recomandat sa redenumiti prima categorie si primul forum si sa copiati permisiunile de la acestea cand creati categorii si forumuri noi. Distractie maxima!',

	'EXT_GROUP_ARCHIVES'			=> 'Arhive',
	'EXT_GROUP_DOCUMENTS'			=> 'Documente',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Fisierele descarcabile',
	'EXT_GROUP_FLASH_FILES'			=> 'Fisierele Flash',
	'EXT_GROUP_IMAGES'				=> 'Imagini',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Text simplu',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'Prima mea categorie',
	'FORUMS_TEST_FORUM_DESC'		=> 'Descrierea primului forum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Primul forum propriu',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administratorul site-ului',
	'REPORT_WAREZ'					=> 'Acest mesaj contine legaturi catre aplicatii ilegale sau piratate.',
	'REPORT_SPAM'					=> 'Mesajul raportat are drept scop doar reclama pentru un alt site web sau alt produs.',
	'REPORT_OFF_TOPIC'				=> 'Mesajul raportat este offtopic.',
	'REPORT_OTHER'					=> 'Mesajul raportat nu se potriveste in nicio alta categorie, va rugam sa folositi campul de descriere.',

	'SMILIES_ARROW'					=> 'Sageata',
	'SMILIES_CONFUSED'				=> 'Confuz',
	'SMILIES_COOL'					=> 'Misto',
	'SMILIES_CRYING'				=> 'Plangand sau Foarte suparat',
	'SMILIES_EMARRASSED'			=> 'Rusinat',
	'SMILIES_EVIL'					=> 'Rau sau Foarte suparat',
	'SMILIES_EXCLAMATION'			=> 'Exclamare',
	'SMILIES_GEEK'					=> 'Tocilar',
	'SMILIES_IDEA'					=> 'Idee',
	'SMILIES_LAUGHING'				=> 'Razand',
	'SMILIES_MAD'					=> 'Suparat',
	'SMILIES_MR_GREEN'				=> 'Dl. Green',
	'SMILIES_NEUTRAL'				=> 'Neutru',
	'SMILIES_QUESTION'				=> 'Intrebare',
	'SMILIES_RAZZ'					=> 'Tachineaza',
	'SMILIES_ROLLING_EYES'			=> 'Ochi rostogolindu-se',
	'SMILIES_SAD'					=> 'Trist',
	'SMILIES_SHOCKED'				=> 'Socat',
	'SMILIES_SMILE'					=> 'Zambet',
	'SMILIES_SURPRISED'				=> 'Surprins',
	'SMILIES_TWISTED_EVIL'			=> 'Diavol mic',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Foarte fericit',
	'SMILIES_WINK'					=> 'Clipire',

	'TOPICS_TOPIC_TITLE'			=> 'Bine ati venit in phpBB3',
));

?>