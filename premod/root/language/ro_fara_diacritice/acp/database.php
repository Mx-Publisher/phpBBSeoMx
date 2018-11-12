<?php
/**
*
* acp_database [Romana]
*
* @package language
* @version $Id: database.php,v 1.24 2007/08/13 12:14:06 acydburn Exp $
* @translate $Id: database.php,v 1.24 2007/12/29 17:05:00 www.phpbb.ro (skeleton) Exp $
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Aici puteti face copii de rezerva ale tuturor datelor ce tin de phpBB. Datele se pot stoca in directorul <samp>store/</samp> sau se pot descarca direct. Daca serverul dumneavoastra suporta, puteti comprima fisierul pentru a reduce dimensiunea sa inainte de a efectua operatiunea de descarcare.',
	'ACP_RESTORE_EXPLAIN'	=> 'Aceasta va efectua o resturare completa a tuturor tabelelor phpBB dintr-un fisier salvat. Daca serverul dumneavoastra suporta, puteti folosi un fisier text comprimat gzip sau bzip2, iar acesta va fi decomprimat automat. <strong>ATENTIE:</strong> Aceasta procedura va rescrie orice informatie deja existenta. Procesul de restaurare poate dura un timp indelungat; va rugam nu parasiti aceasta pagina pana cand restaurarea nu se finalizeaza. Fisierele de siguranta sunt stocare in directorul <samp>store/</samp> si teoretic sunt generate de functionalitatea de restaurare a phpBB-ului. Procesul de restaurare a copiilor de siguranta ce nu au fost create in sistem poate sau nu poate sa functioneze corect.',

	'BACKUP_DELETE'		=> 'Fisierul de backup a fost sters cu succes.',
	'BACKUP_INVALID'	=> 'Fisierul selectat pentru backup nu este valid.',
	'BACKUP_OPTIONS'	=> 'Optiuni de Salvare (Backup)',
	'BACKUP_SUCCESS'	=> 'Fisierul de backup a fost creat cu succes.',
	'BACKUP_TYPE'		=> 'Tip de backup',

	'DATABASE'         			=> 'Instrumentele bazei de date',
	'DATA_ONLY'	          		=> 'Doar datele',
	'DELETE_BACKUP'		        => 'Sterge backup',
	'DELETE_SELECTED_BACKUP'	=> 'Sunteti sigur ca vreti sa stergeti copia de siguranta selectata?',
	'DESELECT_ALL'      		=> 'Demarcheaza tot',
	'DOWNLOAD_BACKUP'       	=> 'Descarca backup',

	'FILE_TYPE'			=> 'Tip fisier',
	'FULL_BACKUP'		=> 'Tot',

	'RESTORE_FAILURE'		=> 'Fisierul de backup s-ar putea sa fie corupt.',
	'RESTORE_OPTIONS'		=> 'Optiuni restaurare',
	'RESTORE_SUCCESS'		=> 'Baza de date a fost restaurata cu succes.<br /><br />Forumul dumneavoastra va trebui sa revina la stadiul in care a fost cand a fost salvata copia de siguranta.',

	'SELECT_ALL'			=> 'Marcheaza tot',
	'SELECT_FILE'			=> 'Marcheaza fisier',
	'START_BACKUP'			=> 'Porneste backup',
	'START_RESTORE'			=> 'Porneste restaurare',
	'STORE_AND_DOWNLOAD'	=> 'Salveaza fisier si apoi descarca',
	'STORE_LOCAL'			=> 'Salveaza fisier local',
	'STRUCTURE_ONLY'		=> 'Doar structura',

	'TABLE_SELECT'		=> 'Marcheaza tabel',
	'TABLE_SELECT_ERROR'=> 'Trebuie sa selectati cel putin un tabel.',
));

?>