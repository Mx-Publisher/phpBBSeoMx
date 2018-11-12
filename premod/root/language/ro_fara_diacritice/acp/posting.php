<?php
/**
*
* acp_posting [Romana]
*
* @package language
* @version $Id: posting.php 8479 2008-03-29 00:22:48Z naderman $
* @translate $Id: posting.php, 8479 2008-05-19 20:49:11 www.phpbb.ro (shara21jonny) Exp $
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'Codul BB este o implementare speciala de tip HTML oferind un control mai mare asupra a ce si cum este afisat. Din aceasta pagina puteti adauga, sterge si modifica codurile BB personalizate.',
	'ADD_BBCODE'				=> 'Adauga un cod BB nou',

	'BBCODE_ADDED'				=> 'Codul BB a fost adaugat cu succes.',
	'BBCODE_EDITED'				=> 'Codul BB a fost modificat cu succes.',
	'BBCODE_NOT_EXIST'			=> 'Codul BB pe care l-ati selectat nu exista.',
	'BBCODE_HELPLINE'			=> 'Asistenta',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Acest camp contine efectul de text "mouseover" al codului BB',
	'BBCODE_HELPLINE_TEXT'		=> 'Text asistenta',
	'BBCODE_INVALID_TAG_NAME'	=> 'Numele etichetei de codul BB pe care l-ati selectat exista deja.',
	'BBCODE_INVALID'			=> 'Codul BB este construit intr-o forma invalida.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Codul BB dumneavoastra personalizat trebuie sa contina ambele etichete, de deschidere si de inchidere.',
	'BBCODE_TAG'				=> 'Eticheta',
	'BBCODE_TAG_TOO_LONG'		=> 'Numele etichetei pe care ati selectat-o este prea lung.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Definitia etichetei pe care ati specificat-o este prea lunga, va rugam sa scurtati definitia etichetei.',
	'BBCODE_USAGE'				=> 'Folosire cod BB',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={CULOARE}]{TEXT}[/highlight]<br /><br />[font={TEXTSIMPLU1}]{TEXTSIMPLU2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Aici definiti cum sa folositi codul BB. Inlocuiti orice variabila de citire cu simbolul corespunzator (%svezi mai jos%s)',

	'EXAMPLE'						=> 'Exemplu:',
	'EXAMPLES'						=> 'Exemple:',

	'HTML_REPLACEMENT'				=> 'Schimbare HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {CULOARE};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {TEXTSIMPLU1};"&gt;{TEXTSIMPLU2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Aici puteti defini modul de substituire al HTML-ului inital. Nu uitati sa puneti inapoi simbolurile folosite mai sus!',

	'TOKEN'					=> 'Simbol',
	'TOKENS'				=> 'Simboluri',
	'TOKENS_EXPLAIN'		=> 'Simbolurile sunt locuri de pastrare pentru specificatiile utilizatorului. Specificatiile vor fi validate doar daca se potrivesc cu definita corespondenta. Daca e nevoie, le puteti numerota adaugand un numar ca ultimul caracter intre acolade, de exemplu {TEXT1}, {TEXT2}.<br /><br />In cadrul inclocuirii HTML-ului puteti folosi orice sir de limbaj prezent in directorul language/ ca si acesta: {L_<em>&lt;NUMESIR&gt;</em>} unde <em>&lt;NUMESIR&gt;</em> este numele sirului translatat pe care vreti sa il adaugati. De exemplu, {L_WROTE} va fi afisat ca &quot;scrie&quot; sau corespunzator cu traducerea locala a utilizatorului',
	'TOKEN_DEFINITION'		=> 'Ce poate fi?',
	'TOO_MANY_BBCODES'		=> 'Nu puteti crea niciun cod BB. Trebuie sa stergeti unul sau mai multe coduri BB iar apoi incercati din nou.',

	'tokens'	=>	array(
		'TEXT'			=> 'Orice text, inclusiv caractere straine, numere, etc… Ar trebui sa nu folositi acest simbol in etichetele HTML. Mai degraba incercati sa folositi IDENTIFICATOR sau TEXTSIMPLU ',
		'SIMPLETEXT'	=> 'Caracterele din alfabetul latin (A-Z), numere, spatii, virgule, puncte, minus, plus, cratima si liniuta de subliniere',
		'IDENTIFIER'	=> 'Caracterele din alfabetul latin (A-Z), numere, cratima si liniuta de subliniere',
		'NUMBER'		=> 'Orice serie de numere',
		'EMAIL'			=> 'O adresa de email valida',
		'URL'			=> 'Un adresa web valida ce foloseste orice protocol (http, ftp, etc… nu poate fi folosit pentru scripturi java). Daca nu este specificat, &quot;http://&quot; este adaugat sirului ca si prefix',
		'LOCAL_URL'		=> 'O adresa web locala. Adresa web trebuie sa fie relativa la pagina subiectului si nu poate contine un nume de server sau protocol',
		'COLOR'			=> 'O culoare HTML, poate fi in forma numerica <samp>#FF1234</samp> sau o <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">cuvant cheie pentru culoare CSS</a> la fel ca <samp>fucsie</samp>  sau <samp>ChenarInactiv</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Din aceasta pagina puteti adauga, sterge sau modifica iconitele utilizatorilor pe care le pot adauga subiectelor sau mesajelor proprii. Aceste iconite sunt in general afisate langa titlurile subiectelor cand se afiseaza forumul sau langa titlul mesajului cand se afiseaza subiectul. De asemenea, puteti instala si crea un nou pachet pentru iconite.',
	'ACP_SMILIES_EXPLAIN'	=> 'Zambetele si iconitele emotive sunt de obicei mici, uneori imaginile animate sunt folosite pentru a exprima o emotie sau un sentiment. Din aceasta pagina puteti adauga, sterge si modifica iconitele emotive pe care utilizatorii le pot folosi in replicile sau mesajele lor private. De asemenea, puteti instala si crea un nou pachet pentru zambete.',
	'ADD_SMILIES'			=> 'Adauga mai multe zambete',
	'ADD_SMILEY_CODE'		=> 'Adauga cod de zambet aditional',
	'ADD_ICONS'				=> 'Adauga mai multe iconite',
	'AFTER_ICONS'			=> 'Dupa %s',
	'AFTER_SMILIES'			=> 'Dupa %s',

	'CODE'						=> 'Cod',
	'CURRENT_ICONS'				=> 'Iconite curente',
	'CURRENT_ICONS_EXPLAIN'		=> 'Alegeti ce sa faceti cu iconitele instalate',
	'CURRENT_SMILIES'			=> 'Zambete curente',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Alegeti ce sa faceti cu zambetele instalate',

	'DISPLAY_ON_POSTING'		=> 'Afiseaza in pagina cu mesaje',
	'DISPLAY_POSTING'			=> 'Pe pagina de raspuns',
	'DISPLAY_POSTING_NO'		=> 'Nu pe pagina de raspuns',
	
	

	'EDIT_ICONS'				=> 'Modificare iconite',
	'EDIT_SMILIES'				=> 'Modificare zambete',
	'EMOTION'					=> 'Emotie',
	'EXPORT_ICONS'				=> 'Exporta si descarca icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sAccesand acest link, configuratia pentru iconitele instalate va fi adaugata in fisierul <samp>icons.pak</samp> care odata descarcat poate fi folosit pentru a crea un fisier de tip <samp>.zip</samp> or <samp>.tgz</samp> continand toate iconitele proprii plus acest fisier de configurare <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Exporta si descarca smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sAccesand acest link, configuratia pentru zambetele instalate va fi adaugata in fisierul <samp>smilies.pak</samp> care odata descarcat poate fi folosit pentru a crea un fisier de tip <samp>.zip</samp> or <samp>.tgz</samp> continand toate zambetele proprii plus acest fisier de configurare <samp>smilies.pak</samp>%s.',

	'FIRST'			=> 'Primul',

	'ICONS_ADD'				=> 'Adauga o iconita',
	'ICONS_NONE_ADDED'		=> 'Nicio iconita nu a fost adaugata.',
	'ICONS_ONE_ADDED'		=> 'Iconita a fost adaugata cu succes.',
	'ICONS_ADDED'			=> 'Iconitele au fost adaugate cu succes.',
	'ICONS_CONFIG'			=> 'Configurare iconita',
	'ICONS_DELETED'			=> 'Iconita a fost stearsa cu succes.',
	'ICONS_EDIT'			=> 'Modifica iconita',
	'ICONS_ONE_EDITED'		=> 'Iconita a fost actualizata cu succes.',
	'ICONS_NONE_EDITED'		=> 'Nici o iconita nu a fost actualizata.',
	'ICONS_EDITED'			=> 'Iconitele au fost actualizate cu succes.',
	'ICONS_HEIGHT'			=> 'Inaltime iconita',
	'ICONS_IMAGE'			=> 'Imagine iconita',
	'ICONS_IMPORTED'		=> 'Pachetul de iconite a fost instalat cu succes.',
	'ICONS_IMPORT_SUCCESS'	=> 'Pachetul de iconite a fost importat cu succes.',
	'ICONS_LOCATION'		=> 'Locatie iconita',
	'ICONS_NOT_DISPLAYED'	=> 'Urmatoarele iconite nu sunt afisate in pagina de raspuns',
	'ICONS_ORDER'			=> 'Ordine iconite',
	'ICONS_URL'				=> 'Fisier imagine iconita',
	'ICONS_WIDTH'			=> 'Latime iconita',
	'IMPORT_ICONS'			=> 'Instalare pachet iconite',
	'IMPORT_SMILIES'		=> 'Instalare pachet zambete',

	'KEEP_ALL'			=> 'Pastreaza tot',

	'MASS_ADD_SMILIES'	=> 'Adauga mai multe zambete',

	'NO_ICONS_ADD'		=> 'Nu sunt iconite disponibile pentru adaugare.',
	'NO_ICONS_EDIT'		=> 'Nu sunt iconite disponibile pentru modificare.',
	'NO_ICONS_EXPORT'	=> 'Nu aveti iconite cu care sa creati un pachet.',
	'NO_ICONS_PAK'		=> 'Nu a fost gasit niciun pachet de iconite.',
	'NO_SMILIES_ADD'	=> 'Nu sunt zambete disponibile pentru adaugare.',
	'NO_SMILIES_EDIT'	=> 'Nu sunt zambete disponibile pentru modificare.',
	'NO_SMILIES_EXPORT'	=> 'Nu aveti zambete cu care sa creati un pachet.',
	'NO_SMILIES_PAK'	=> 'Nu a fost gasit niciun pachet de zambete.',

	'PAK_FILE_NOT_READABLE'		=> 'Nu s-a putut citi fisierul <samp>.pak</samp>.',

	'REPLACE_MATCHES'	=> 'Inlocuieste potrivirile',

	'SELECT_PACKAGE'			=> 'Selecteaza un fisier pachet',
	'SMILIES_ADD'				=> 'Adauga un zambet nou',
	'SMILIES_NONE_ADDED'		=> 'Nu a fost adaugat niciun zambet.',
	'SMILIES_ONE_ADDED'			=> 'Zambetul a fost adaugat cu succes.',
	'SMILIES_ADDED'				=> 'Zambetele au fost adaugate cu succes.',
	'SMILIES_CODE'				=> 'Cod zambet',
	'SMILIES_CONFIG'			=> 'Configuratie zambet',
	'SMILIES_DELETED'			=> 'Zambetul a fost sters cu succes.',
	'SMILIES_EDIT'				=> 'Modifica zambet',
	'SMILIE_NO_CODE'			=> 'Zambetul “%s” a fost ignorat pentru ca niciun cod nu a fost specificat.',
	'SMILIE_NO_EMOTION'			=> 'Zambetul “%s” a fost ignorat pentru ca nicio emotie nu a fost specificata.',
	'SMILIES_NONE_EDITED'		=> 'Nu a fost actualizat niciun zambet.',
	'SMILIES_ONE_EDITED'		=> 'Zambetul a fost actualizat cu succes.',
	'SMILIES_EDITED'			=> 'Zambetul a fost updatat cu succes.',
	'SMILIES_EMOTION'			=> 'Emotie',
	'SMILIES_HEIGHT'			=> 'Inaltime zambet',
	'SMILIES_IMAGE'				=> 'Imagine zambet',
	'SMILIES_IMPORTED'			=> 'Pachetul de zambete a fost instalat cu succes.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Pachetul de zambete a fost importat cu succes.',
	'SMILIES_LOCATION'			=> 'Locatie zambet',
	'SMILIES_NOT_DISPLAYED'		=> 'Urmatoarele zambete nu sunt afisate in pagina de raspuns',
	'SMILIES_ORDER'				=> 'Ordine zambete',
	'SMILIES_URL'				=> 'Fisier imagine zambet',
	'SMILIES_WIDTH'				=> 'Latime zambet',

	'WRONG_PAK_TYPE'	=> 'Pachetul specificat nu contine datele corespunzatoare.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Din acest panou de control puteti adauga, sterge si actualiza cuvinte care automatic vor fi cenzurate in forumurile proprii. In plus, utilizatorii nu vor avea voie sa se inregistreze cu nume ce contin aceste cuvinte. Wildcardurile (*) sunt acceptate in campul de cuvinte, de exemplu *test* va fi gasit detestabil, test* va fi gasit testare, *test va fi gasit detest.',
	'ADD_WORD'				=> 'Adauga un cuvant nou',

	'EDIT_WORD'		=> 'Modificare cuvant cenzurat',
	'ENTER_WORD'	=> 'Trebuie sa specificati un cuvant si inlocuitorul acestuia.',

	'NO_WORD'	=> 'Niciun cuvant nu a fost selectat pentru modificare.',

	'REPLACEMENT'	=> 'Inlocuire',

	'UPDATE_WORD'	=> 'Actualizare cuvant cenzurat',

	'WORD'				=> 'Cuvant',
	'WORD_ADDED'		=> 'Cuvantul cenzurat a fost adaugat cu succes.',
	'WORD_REMOVED'		=> 'Cuvantul cenzurat selectat a fost sters cu succes.',
	'WORD_UPDATED'		=> 'Cuvantul cenzurat selectat a fost actualizat cu succes.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Utilizand aceast formular puteti adauga, modifica, vizualiza si sterge ranguri. De asemenea, puteti crea ranguri speciale care pot fi aplicate unui utilizator prin sectiunea Panoul utilizatorului.',
	'ADD_RANK'				=> 'Adauga un rang nou',

	'MUST_SELECT_RANK'		=> 'Trebuie sa selectati un rang.',
	
	'NO_ASSIGNED_RANK'		=> 'Nu a fost atribuit niciun rang special.',
	'NO_RANK_TITLE'			=> 'Nu ati specificat un titlu pentru rang.',
	'NO_UPDATE_RANKS'		=> 'Rangul a fost sters cu succes. Oricum conturile utilizatorilor ce folosesc acest rang nu au fost actualizate.  Va trebui sa resetati manual rangul pentru aceste conturi.',

	'RANK_ADDED'			=> 'Rangul a fost adaugat cu succes.',
	'RANK_IMAGE'			=> 'Imagine rang',
	'RANK_IMAGE_EXPLAIN'	=> 'Foloseste la a defini o imagine mica asociata cu rangul. Calea este relativa catre directorul radacina al forumului phpBB.',
	'RANK_MINIMUM'			=> 'Numar minim de mesaje',
	'RANK_REMOVED'			=> 'Rangul a fost sters cu succes.',
	'RANK_SPECIAL'			=> 'Seteaza ca rang special',
	'RANK_TITLE'			=> 'Titlu rang',
	'RANK_UPDATED'			=> 'Rangul a fost actualizat cu succes.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Aici puteti controla numele de utilizatori ce nu pot fi folosite.  Numele dezactivate ale utilizatorilor pot contine un wildcard pentru *. Retineti ca nu puteti dezactiva un nume de utilizator ce este deja inregistrat, mai intai trebuie sa il stergeti, apoi sa-l dezactivati.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Puteti dezactiva un nume utilizator folosind caracterul wildcard * pentru a se potrivi cu orice caracter',
	'ADD_DISALLOW_TITLE'	=> 'Adauga un nume utilizator dezactivat',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Puteti dezactiva un nume utilizator selectand numele din lista si accesand Trimite.',
	'DELETE_DISALLOW_TITLE'		=> 'Sterge un nume utilizator dezactivat',
	'DISALLOWED_ALREADY'		=> 'Numele specificat nu poate fi dezactivat. Fie exista deja in lista, exista in lista cuvintelor cenzurate, fie se potriveste cu un nume de uzilizator deja prezent.',
	'DISALLOWED_DELETED'		=> 'Numele utilizatorului dezactivat a fost sters cu succes.',
	'DISALLOW_SUCCESSFUL'		=> 'Numele utilizatorului dezactivat a fost adaugat cu succes.',

	'NO_DISALLOWED'				=> 'Niciun nume utilizator nu este dezactivat',
	'NO_USERNAME_SPECIFIED'		=> 'Nu ati selectat sau introdus un nume utilizator.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Aici puteti administra motivele folosite in raportari mesaje si contestari cand se dezaproba mesajele. Exista un motiv initial (marcat cu *) pe care nu puteti sa il stergeti, acesta fiind folosit normal pentru mesajele private daca niciun motiv nu se potriveste.',
	'ADD_NEW_REASON'		=> 'Adauga motiv nou',
	'AVAILABLE_TITLES'		=> 'Titlurile motivelor localizate disponibile',
	
	'IS_NOT_TRANSLATED'			=> 'Motivul <strong>nu</strong> a fost localizat.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Motivul <strong>nu</strong> a fost localizat. Daca vreti sa specificati varianta localizata, specificati cheia corecta din fisierele de limba, sectiunea motivelor raportarilor.',
	'IS_TRANSLATED'				=> 'Motivul a fost localizat.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Motivul a fost localizat. Daca titlul specificat exista si in fisierele de limba, sectiunea motivelor raportarilor, vor fi folosite forma localizata a titlului si descrierea acestuia.',
	
	'NO_REASON'					=> 'Motivul nu a putut fi gasit.',
	'NO_REASON_INFO'			=> 'Trebuie sa specificati un titlu si o descriere pentru acest motiv.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Nu puteti sterge motivul initial “Altele”.',

	'REASON_ADD'				=> 'Adauga motive raportari/constestari',
	'REASON_ADDED'				=> 'Motivul raportarii/contestarii a fost adaugat cu succes.',
	'REASON_ALREADY_EXIST'		=> 'Un motiv cu acest titlu exista deja, specificati un alt titlu pentru acest motiv.',
	'REASON_DESCRIPTION'		=> 'Descriere motiv',
	'REASON_DESC_TRANSLATED'	=> 'Descrierea motivului afisata',
	'REASON_EDIT'				=> 'Modifica motiv de raportare/contestare',
	'REASON_EDIT_EXPLAIN'		=> 'Aici puteti adauga sau modifica un motiv. Daca motivul este tradus, versiunea localizata este folosita in locul descrierii specificate aici.',
	'REASON_REMOVED'			=> 'Motivul de Raportare/Contestare a fost sters cu succes.',
	'REASON_TITLE'				=> 'Titlu motiv',
	'REASON_TITLE_TRANSLATED'	=> 'Titlu motiv afisat',
	'REASON_UPDATED'			=> 'Motivul de Raportare/Contestare a fost actualizat cu succes.',

	'USED_IN_REPORTS'		=> 'Folosit in rapoarte',
));

?>