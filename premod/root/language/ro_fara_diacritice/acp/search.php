<?php
/**
*
* acp_search [Romana]
*
* @package language
* @version $Id: search.php,v 1.21 2007/10/04 15:07:24 acydburn Exp $
* @translate $Id: search.php,v 1.21 2008/01/13 17:05:00 www.phpbb.ro (shara21jonny) Exp $
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
    'ACP_SEARCH_INDEX_EXPLAIN'                => 'Aici puteti administra indecsii cautarii din spatele aplicatiei. Din moment ce in mod normal folositi doar unul singur in backend, ar trebui sa stergeti toti indecsii pe care nu-i folositi. Dupa ce modificati unele din setarile de cautare (de exemplu numarul minim/maxim de caractere) s-ar putea sa se justifice recrearea indexului astfel incat sa reflecte aceste schimbari.',
    'ACP_SEARCH_SETTINGS_EXPLAIN'            => 'Aici puteti defini ce cautare backend va fi folosita pentru indexarea mesajelor si efectuarea cautarilor. Puteti specifica numeroase optiuni care pot influenta cat de multa procesare necesita aceste actiuni. Unele dintre aceste setari sunt aceleasi pentru toate motoarele de cautare backend.',

    'COMMON_WORD_THRESHOLD'                    => 'Limita pentru cuvant comun',
    'COMMON_WORD_THRESHOLD_EXPLAIN'            => 'Cuvintele ce sunt continute intr-un procent mai mare in toate mesagele vor fi privite ca fiind comune. Cuvintele comune sunt ignorate in interogarile de cautare. Setati 0 pentru a dezactiva. Are efect doar daca sunt mai mult de 100 de mesaje.',
    'CONFIRM_SEARCH_BACKEND'                => 'Sunteti sigur ca doriti sa treceti la un alta cautare in backend? Dupa ce schimbati cautarea din backend, va trebui sa creati un index pentru noua cautare. Daca nu planuiti schimbarea inapoi a vechiului sistem de cautare backend, puteti de asemenea sa stergeti toate vechile indexuri de backend pentru a elibera resursele sistemului.',
    'CONTINUE_DELETING_INDEX'                => 'Continua procesul de stergere a indexului anterior',
    'CONTINUE_DELETING_INDEX_EXPLAIN'        => 'A inceput procesul de stergere al unui index. Pentru a accesa pagina indexului de cautare trebuie sa se finalizeze sau sa anulati cererea.',
    'CONTINUE_INDEXING'                        => 'Continua procesul de indexare anterior',
    'CONTINUE_INDEXING_EXPLAIN'                => 'A inceput un proces de indexare. Pentru a accesa pagina indexului de cautare trebuie sa se finalizeze sau sa anulati cererea.',
    'CREATE_INDEX'                            => 'Creaza index',

    'DELETE_INDEX'                            => 'Sterge index',
    'DELETING_INDEX_IN_PROGRESS'            => 'Stergerea indexului este in progres',
    'DELETING_INDEX_IN_PROGRESS_EXPLAIN'    => 'Cautarea backend isi curata indexul. Aceasta operatie poate dura cateva minute.',

    'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'    => 'Textul MySQL al backend-ului poate fi folosit doar cu versiunea MySQL4 sau alta mai noua.',
    'FULLTEXT_MYSQL_NOT_MYISAM'                => 'Textul MySQL pentru indecsi poate fi folosit doar cu tabele MyISAM.',
    'FULLTEXT_MYSQL_TOTAL_POSTS'            => 'Numarul total al mesajelor indexate',
    'FULLTEXT_MYSQL_MBSTRING'                => 'Suport pentru caracterele ne-latine UTF-8 folosind mbstring:',
    'FULLTEXT_MYSQL_PCRE'                    => 'Suport pentru caracterele ne-latine UTF-8 folosind PCRE:',
    'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'        => 'Daca PCRE nu are proprietati de caracter unicod, cautarea backend va incerca sa foloseasca motorul expresiilor mbstring.',
    'FULLTEXT_MYSQL_PCRE_EXPLAIN'            => 'Cautarea backend necesita proprietatile de caracter unicod PCRE, disponibile numai in PHP 4.4, 5.1 sau mai nou, daca vreti sa cautati caractere ne-latine.',

    'GENERAL_SEARCH_SETTINGS'                => 'Setari generale de cautare',
    'GO_TO_SEARCH_INDEX'                    => 'Mergi la pagina principala de cautare',

    'INDEX_STATS'                            => 'Statistici index',
    'INDEXING_IN_PROGRESS'                    => 'Indexare in progres',
    'INDEXING_IN_PROGRESS_EXPLAIN'            => 'Momentan cautarea backend indexeaza toate mesajele de pe forum. Aceast proces poate dura de la cateva minute la cateva ore, in functie de dimensiunile forumului.',

    'LIMIT_SEARCH_LOAD'                        => 'Limita de incarcare a sistemului cu pagina de cautare',
    'LIMIT_SEARCH_LOAD_EXPLAIN'                => 'Daca este depasita limita de 1 minut pentru incarcarea sistemului, paginile de cautare vor fi inchise, 1.0 egal ~100% utilizarea unui procesor. Aceasta functioneaza numai pe serverele UNIX.',

    'MAX_SEARCH_CHARS'                        => 'Numarul maxim de caractere indexate de catre cautare',
    'MAX_SEARCH_CHARS_EXPLAIN'                => 'Cuvintele cu nu mai mult de atatea caractere vor fi indexate pentru cautare.',
    'MIN_SEARCH_CHARS'                        => 'Numarul minim de caractere indexate de catre cautare',
    'MIN_SEARCH_CHARS_EXPLAIN'                => 'Cuvintele cu cel putin atatea caractere vor fi indexate pentru cautare.',
    'MIN_SEARCH_AUTHOR_CHARS'                => 'Numarul minim de caractere pentru numele autorului',
    'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'        => 'Utilizatorii trebuie sa introduca cel putin atatea caractere pentru nume atunci cand efectueaza o cautare dupa autor folosind un wildcard. Daca numele de utilizator al autorului este mai scurt decat acest numar, puteti in continuare cauta mesajele autorului specificand numele complet de utilizator.',

    'PROGRESS_BAR'                            => 'Bara de progres',

    'SEARCH_GUEST_INTERVAL'                    => 'Intervalul de flood al vizitatorilor pentru cautare',
    'SEARCH_GUEST_INTERVAL_EXPLAIN'            => 'Numarul de secunde pe care vizitatorii trebuie sa-l astepte intre cautari. Daca un vizitator efectueza o cautare, atunci toti ceilalti vizitatori trebuie sa astepe pana trece acest interval.',
    'SEARCH_INDEX_CREATE_REDIRECT'            => 'Au fost indexate toate mesajele pana la id-ul mesajului %1$d, din care %2$d mesaje au fost in aceasta etapa.<br />Rata curenta a indexarii este de aproximativ %3$.1f mesaje pe secunda.<br />Indexare in progres…',
    'SEARCH_INDEX_DELETE_REDIRECT'            => 'Au fost scoase din indexul cautarii toate mesajele pana la id-ul mesajului %1$d .<br />Stergere in progres…',
    'SEARCH_INDEX_CREATED'                    => 'Toate mesajele au fost indexate cu succes in baza de date a forumului.',
    'SEARCH_INDEX_REMOVED'                    => 'Indexul de cautare a fost sters cu succes.',
    'SEARCH_INTERVAL'                        => 'Intervalul de flood al utilizatorilor pentru cautare',
    'SEARCH_INTERVAL_EXPLAIN'                => 'Numarul de secunde pe care utilizatorii trebuie sa-l astepte intre cautari. Intervalul este independent pentru fiecare utilizator.',
    'SEARCH_STORE_RESULTS'                    => 'Marimea cache pentru rezultatele cautarii',
    'SEARCH_STORE_RESULTS_EXPLAIN'            => 'Cache-ul de la rezultatele cautarii va expira dupa acest timp, in secunde. Atribuiti valoarea 0 daca doriti sa dezactivati cache-ul pentru cautari.',
    'SEARCH_TYPE'                            => 'Cautare backend',
    'SEARCH_TYPE_EXPLAIN'                    => 'phpBB permite sa alegeti backend-ul folosit pentru cautarea textelor in cuprinsul mesajelor. Initial cautarile vor folosi propriul text de cautare phpBB.',
    'SWITCHED_SEARCH_BACKEND'                => 'Ati inlocuit cautarea backend. Pentru a putea folosi noi cautari backend ar trebui sa va asigurati ca exista un index pentru backend-ul ales.',

    'TOTAL_WORDS'                            => 'Numarul total de cuvinte indexate',
    'TOTAL_MATCHES'                            => 'Numarul total al cuvantului pentru a scrie relatii indexate',

    'YES_SEARCH'                            => 'Permite facilitatile cautarii',
    'YES_SEARCH_EXPLAIN'                    => 'Permite utilizatorilor sa efectueze cautari incluzand cautarea membrilor.',
    'YES_SEARCH_UPDATE'                        => 'Permite actualizarea textului',
    'YES_SEARCH_UPDATE_EXPLAIN'                => 'Actualizarea indecsilor text se face in timpul scrierii, aceasta optiune este suprascrisa daca este dezactivata cautarea.',
));

?>