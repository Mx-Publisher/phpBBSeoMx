<?php
/** 
*
* acp_attachments [Romana]
*
* @package language
* @version $Id: attachments.php,v 1.31 2007/10/04 15:07:24 acydburn Exp $
* @translate $Id: attachments.php,v 1.31 2007/12/29 17:05:00 www.phpbb.ro (Ro Silviu) Exp $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Aici puteti configura setarile pentru atasamente si categoriile speciale asociate.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Aici puteti adauga, sterge, modifica sau scoate din functiune grupurile de extensii. Optiunile includ alocarea categoriilor speciale, schimbarea mecanismului de descarcare si definirea unei iconite pentru incarcare care va fi afisata in fata atasamentelor ce apartin acelui grup.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Aici puteti administra extensiile permise. Pentru a activa o extensie, apelati la panoul de administrare al grupurilor de extensii. Nu recomandam permiterea extensiilor pentru scriping de genul <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> si asa mai departe.',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Aici puteti vedea fisierele din directorul cu atasamente care nu sunt asociate cu vreun mesaj. Acest lucru se poate intampla cand utilizatorii ataseaza fisiere, dar nu trimit mesajul. Puteti sterge sau atasa aceste fisiere unor mesaje existente. Atasarea unui fisier la un mesaj existent necesita ID-ul mesajului, care trebuie determinat manual de catre dumneavoastra. Aceasta va asocia un atasament deja incarcat unui mesaj trimis.',
	'ADD_EXTENSION'						=> 'Adauga extensie',
	'ADD_EXTENSION_GROUP'				=> 'Adauga grup de extensii',
	'ADMIN_UPLOAD_ERROR'				=> 'Erori in timpul atasarii fisierului: “%s”',
	'ALLOWED_FORUMS'					=> 'Forumuri permise',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Capabil sa foloseasca extensiile specificate in forumurile selectate (sau la toate daca sunt selectate).',
	'ALLOWED_IN_PM_POST'				=> 'Permis',
	'ALLOW_ATTACHMENTS'					=> 'Permite atasamente',
	'ALLOW_ALL_FORUMS'					=> 'Permite toate forumurile',
	'ALLOW_IN_PM'						=> 'Permis in mesaje private',
	'ALLOW_PM_ATTACHMENTS'				=> 'Permite atasamente in mesaje private',
	'ALLOW_SELECTED_FORUMS'				=> 'Doar forumuri selectate mai jos',
	'ASSIGNED_EXTENSIONS'				=> 'Extensii alocate',
	'ASSIGNED_GROUP'					=> 'Grupuri de extensii alocate',
	'ATTACH_EXTENSIONS_URL'				=> 'Extensii',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grupuri de extensii',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Marimea maxima a fisierelor',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Marimea maxima a unui fisier, 0 inseamna nelimitat.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Marimea maxima a fisierelor in mesaje private',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Spatiu maxim alocat fiecarui utilizator pentru atasamente in mesaje private, 0 inseamna nelimitat.',
	'ATTACH_ORPHAN_URL'					=> 'Atasamente orfane',
	'ATTACH_POST_ID'					=> 'ID-ul mesajului',
	'ATTACH_QUOTA'						=> 'Limita totala pentru atasamente',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Spatiu maxim alocat pentru atasamente, 0 inseamna nelimitat.',
	'ATTACH_TO_POST'					=> 'Ataseaza fisier la mesaj',

	'CAT_FLASH_FILES'			=> 'Fisiere Flash',
	'CAT_IMAGES'				=> 'Imagini',
	'CAT_QUICKTIME_FILES'		=> 'Media in format Quicktime',
	'CAT_RM_FILES'				=> 'Stream-uri in format Real Media ',
	'CAT_WM_FILES'				=> 'Stream-uri in format Window Media',
	'CREATE_GROUP'				=> 'Creaza un nou grup',
	'CREATE_THUMBNAIL'			=> 'Creaza imagine micsorata',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Creaza imagine micsorata in toate situatiile posibile.',

	'DEFINE_ALLOWED_IPS'			=> 'Defineste IP-uri/nume de host-uri permise',
	'DEFINE_DISALLOWED_IPS'			=> 'Defineste IP-uri/nume de host-uri nepermise',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Pentru a specifica mai multe IP-uri/nume de host-uri, fiecare trebuie scrise pe o noua linie. Pentru a specifica o clasa de IP-uri, separati primul si ultimul cu o cratima (-). Pentru a specifica un <i>wildcard</i>, folositi “*”',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Poti elimina (sau include) mai multe adrese IP intr-un pas folosind combinatia potrivita a mouse-ulului si tastaturii calculatorului si browser-ului. IP-urile excluse au un fundal albastru.',
	'DISPLAY_INLINED'				=> 'Afiseaza imaginile in linie',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Daca este setat pe Nu, imaginile atasate vor aparea ca link-uri.',
	'DISPLAY_ORDER'					=> 'Ordinea afisarii atasamentelor',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Afiseaza atasamentele in functie de timp.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Editeaza grupul de extensii',
	'EXCLUDE_ENTERED_IP'			=> 'Faciliteaza excluderea IP-urilor/numelor de host introduse.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Exclude IP din IP-urile/numele de host permise',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Exclude IP din IP-urile/numele de host nepermise',
	'EXTENSIONS_UPDATED'			=> 'Extensii actualizate cu succes',
	'EXTENSION_EXIST'				=> 'Extensia %s exista deja',
	'EXTENSION_GROUP'				=> 'Grup de extensii',
	'EXTENSION_GROUPS'				=> 'Grupuri de extensii',
	'EXTENSION_GROUP_DELETED'		=> 'Grup de extensii sters cu succes.',
	'EXTENSION_GROUP_EXIST'			=> 'Grupul de extensii %s exista deja',

	'GO_TO_EXTENSIONS'		=> 'Du-te la ecranul de administrare al extensiilor',
	'GROUP_NAME'			=> 'Numele grupului',

	'IMAGE_LINK_SIZE'			=> 'Dimensiunile link-ului catre imagine',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Afiseaza imaginea atasata ca link daca imaginea este mai mare ca aceasta. Pentru a dezactiva acest mecanism, setati valori 0px cu 0px.',
	'IMAGICK_PATH'				=> 'Calea catre Imagemagick',
	'IMAGICK_PATH_EXPLAIN'		=> 'Calea completa catre convertorul imagemagick, de exemplu. <samp>/usr/bin/</samp>',

	'MAX_ATTACHMENTS'				=> 'Numarul maxim de atasamente pe mesaj',
	'MAX_ATTACHMENTS_PM'			=> 'Numarul maxim de atasamente pe mesaj privat',
	'MAX_EXTGROUP_FILESIZE'			=> 'Marimea maxima a fisierelor',
	'MAX_IMAGE_SIZE'				=> 'Dimensiunile maxime ale imaginilor',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Dimensiunile maxime ale imaginilor. Pentru a dezactiva verificarea dimensiunii, setati ambele valori 0px cu 0px.',
	'MAX_THUMB_WIDTH'				=> 'Latimea maxima a imaginilor micsorate in pixeli',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Imaginile micsorate generate nu vor avea latimea mai mare decat valoarea setata aici.',
	'MIN_THUMB_FILESIZE'			=> 'Marimea minima a imaginilor micsorate',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Nu genereaza o imagine micsorata daca imaginea este mai mica decat valoarea setata aici.',
	'MODE_INLINE'					=> 'In linie',
	'MODE_PHYSICAL'					=> 'Fizic',

	'NOT_ALLOWED_IN_PM'			=> 'Doar pemis in mesaje',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Nepermis',
	'NOT_ASSIGNED'				=> 'Nealocat',
	'NO_EXT_GROUP'				=> 'Niciunul/una',
	'NO_EXT_GROUP_NAME'			=> 'Niciun nume de grup specificat',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Niciun grup de extensii specificat.',
	'NO_FILE_CAT'				=> 'Niciunul/una',
	'NO_IMAGE'					=> 'Nicio imagine',
	'NO_THUMBNAIL_SUPPORT'		=> 'Suportul imaginilor micsorate a fost dezactivat. Pentru o functionare corespunzatoare o extensie GD trebuie sa fie disponibila sau Imagemagick trebuie sa fie instalat. Nici una nu a putut fi gasita.',
	'NO_UPLOAD_DIR'				=> 'Directorul pentru incarcari specificat nu exista.',
	'NO_WRITE_UPLOAD'			=> 'Nu exista permisiuni de scriere in directorul pentru incarcari specificat. Modificati permisiunile pentru a permite server-ului sa scrie in acest director.',

	'ONLY_ALLOWED_IN_PM'	=> 'Permis doar in mesajele private',
	'ORDER_ALLOW_DENY'		=> 'Permite',
	'ORDER_DENY_ALLOW'		=> 'Nu permite',

	'REMOVE_ALLOWED_IPS'		=> 'Sterge sau exclude IP-uri/nume de host-uri <em>permise</em>',
	'REMOVE_DISALLOWED_IPS'		=> 'Sterge sau exclude IP-uri/nume de host-uri <em>nepermise</em>',

	'SEARCH_IMAGICK'				=> 'Cauta Imagemagick',
	'SECURE_ALLOW_DENY'				=> 'Permite/Nu permite lista',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Schimba mecanismul standard cand descarcarile securizate sunt activate in lista de Permise/interzise: <strong>whitelist</strong> (permise) sau <strong>blacklist</strong> (interzise).',
	'SECURE_DOWNLOADS'				=> 'Permite descarcarea securizata',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Aceasta optiune limiteaza descarcarile doar IP-urilor/numelor de host definite.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Descarcarile securizate sunt dezactivate. Setarea de mai jos va fi aplicata dupa activarea descarcarilor securizate.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'Lista de IP-uri a fost actualizata cu succes.',
	'SECURE_EMPTY_REFERRER'			=> 'Permite vizite fara referinta',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Descarcarile securizate se bazeaza pe referinte. Vreti sa permiteti descarcarile in cazul in care referinta este omisa?',
	'SETTINGS_CAT_IMAGES'			=> 'Setarile categoriei cu imagini',
	'SPECIAL_CATEGORY'				=> 'Categorie speciala',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'La categoriile speciale difera modul in care sunt prezentate in interiorul mesajelor.',
	'SUCCESSFULLY_UPLOADED'			=> 'Incarcarea a fost terminata cu succes',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Grup de extensii adaugat cu success',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Grup de extensii actualizat cu succes',

	'UPLOADING_FILES'				=> 'Fisiere in curs de incarcare',
	'UPLOADING_FILE_TO'				=> 'Fisierul “%1$s” este incarcat la mesajul cu numarul %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Nu va este permis sa incarcati fisiere in forumul “%s”',
	'UPLOAD_DIR'					=> 'Director pentru incarcari',
	'UPLOAD_DIR_EXPLAIN'			=> 'Calea de stocare pentru atasamente. Retineti ca daca schimbati directorul in timp ce deja aveti atasamente incarcate, va trebui sa copiati manual aceste fisiere in noua lor locatie.',
	'UPLOAD_ICON'					=> 'Iconita pentru incarcare',
	'UPLOAD_NOT_DIR'				=> 'Locatia specificata pentru incarcare nu este un director.',
));

?>