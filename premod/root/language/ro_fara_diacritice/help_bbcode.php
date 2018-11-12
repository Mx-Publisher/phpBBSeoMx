<?php
/** 
*
* help_bbcode [Romana]
*
* @package language
* @version $Id: help_bbcode.php,v 1.27 2007/10/04 15:07:24 acydburn Exp $
* @translate $Id: help_bbcode.php,v 1.27 2008/01/03 15:02:00 www.phpbb.ro (shara21jonny) Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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

$help = array(
	array(
		0 => '--',
		1 => 'Introducere'
	),
	array(
		0 => 'Ce este codul BB?',
		1 => 'Codul BB este o implementare speciala a HTML-ului. Daca puteti folosi codul BB sau nu in mesajele dumneavoastra, este alegerea administratorului. In plus, puteti dezactiva codul BB de la mesaj la mesaj din formularul de publicare. Codul BB este similar cu HTML-ul, balizele (tag-urile) sunt scrise intre paranteze patrate [ si ] decat intre &lt; si &gt; si ofera un control mai bun asupra a ce si cum este afisat. In functie de stilul pe care il folositi, puteti descoperi ca adaugarea de cod BB la mesajele dumneavoastra este mai usoara printr-o interfata de butoane deasupra zonei de scris din formularul de publicare. Chiar si asa probabil ca veti gasi acest ghid folositor.'
	),
	array(
		0 => '--',
		1 => 'Formatarea textului'
	),
	array(
		0 => 'Cum sa creati text ingrosat, cursiv (italic) si subliniat',
		1 => 'Codul BB include balize (taguri) pentru a va permite sa schimbati rapid stilul textului dumneavoastra. Acest lucru poate fi obtinut in urmatoarele moduri: <ul><li>Pentru a face o parte de text ingrosat (bold), includeti-o intre <strong>[b][/b]</strong>, spre exemplu:<br /><br /><strong>[b]</strong>Salut<strong>[/b]</strong><br /><br /> va deveni <strong>Salut</strong></li><li>Pentru subliniere, folositi <strong>[u][/u]</strong>, spre exemplu:<br /><br /><strong>[u]</strong>Buna dimineata<strong>[/u]</strong><br /><br />devine <span style="text-decoration: underline">Buna dimineata</span></li><li>Pentru a scrie cu font cursiv (italic), folositi <strong>[i][/i]</strong>, spre exemplu:<br /><br /><strong>[i]</strong>Super!<strong>[/i]</strong><br /><br />va deveni <i>Super!</i></li></ul>'
	),
	array(
		0 => 'Cum sa schimbati culoarea textului sau marimea',
		1 => 'Pentru a schimba culoarea sau marimea textului dumneavoastra, puteti folosi mai multe balize (taguri). Tineti minte ca felul cum apare mesajul depinde de browser-ul si sistemul celui ce vizualizeaza: <ul><li>Schimbarea culorii textului se face prin trecerea intre <strong>[color=][/color]</strong>. Puteti specifica fie o culoare cunoscuta, in limba engleza, (<i>red</i> pentru rosu, <i>blue</i> pentru albastru, <i>yellow</i> pentru galben) sau un triplet hexazecimal, ca #FFFFFF, #000000. Spre exemplu, pentru a scrie cu rosu, veti putea folosi:<br /><br /><strong>[color=red]</strong>Salut!<strong>[/color]</strong><br /><br />sau<br /><br /><strong>[color=#FF0000]</strong>Salut!<strong>[/color]</strong><br /><br />Ambele vor avea ca rezultat <span style="color:red">Salut!</span></li><li>Schimbarea marimii textului este facuta in acelasi fel, folosind <strong>[size=][/size]</strong>. Aceasta baliza depinde de stilul pe care l-a selectat utilizatorul, dar formatul recomandat este o valoare numerica reprezentand marimea textului in procente, pornind de la 20 (extrem de mic) si pana la 200 (foarte mare), marime standard. Spre exemplu:<br /><br /><strong>[size=30]</strong>MIC<strong>[/size]</strong><br /><br />in general va avea ca rezultat <span style="font-size:30%;">MIC</span><br /><br />in vreme ce:<br /><br /><strong>[size=200]</strong>ENORM!<strong>[/size]</strong><br /><br />va fi <span style="font-size:200%;">ENORM!</span></li></ul>'
	),
	array(
		0 => 'Pot combina balizele (tag-urile) de formatare?',
		1 => 'Desigur. Spre exemplu, pentru a atrage atentia cuiva, ati putea sa scrieti:<br /><br /><strong>[size=200][color=red][b]</strong>PRIVESTE-MĂ!<strong>[/b][/color][/size]</strong><br /><br />va afisa <span style="color:red;font-size:200%;"><strong>PRIVESTE-MĂ!</strong></span><br /><br />Totusi, nu va recomandam sa scrieti prea mult text astfel! Tineti minte ca depinde de dumneavoastra sa va asigurati ca balizele sunt inchise corect. Spre exemplu, urmatoarea secventa este incorecta:<br /><br /><strong>[b][u]</strong>Asa este gresit<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Citate si text cu latime fixa'
	),
	array(
		0 => 'Citarea textului in raspunsuri',
		1 => 'Exista doua modalitati de a cita textul, cu referinta si fara.<ul><li>Cand utilizati functia de citare la raspunsul mesajului, ar trebui sa observati ca mesajul respectiv este adaugat in fereastra de publicare, inclus intr-un bloc <strong>[quote=&quot;&quot;][/quote]</strong>. Aceasta metoda va va permite sa il citati cu referinta la o persoana sau orice altceva doriti sa scrieti! Spre exemplu, pentru a cita o parte de text scrisa de Dl. Ionescu, ati scrie:<br /><br /><strong>[quote=&quot;Dl. Ionescu&quot;]</strong>Textul scris de Dl. Ionescu<strong>[/quote]</strong><br /><br />La rezultat se va adauga automat &quot;Dl. Ionescu a scris:&quot; inainte de textul actual. Tineti minte ca <strong>trebuie</strong> sa includeti ghilimelele &quot;&quot; in jurul numelui pe care il citati. Acestea nu sunt optionale.</li><li>A doua metoda va permite sa citati fara un autor. Pentru a folosi acest lucru, introduceti textul intre balizele <strong>[quote][/quote]</strong>. Cand veti vizaliza mesajul, va arata pur si simplu textul in blocul de citat.</li></ul>'
	),
	array(
		0 => 'Generarea de cod sau de text cu marime fixa',
		1 => 'Daca doriti sa scrieti o bucata de cod sau - de fapt - orice altceva care are nevoie de o latime fixa, cum ar fi un font de tip Courier, ar trebui sa introduceti textul intre balize <strong>[code][/code]</strong>, spre exemplu:<br /><br /><strong>[code]</strong>echo &quot;O bucata de cod&quot;;<strong>[/code]</strong><br /><br />Toate formatarile folosite intre balizele <strong>[code][/code]</strong> sunt retinute cand cititi mesajul mai tarziu. Sintaxa PHP highlighting poate fi activata folosind <strong>[code=php][/code]</strong> si este recomandata cand scrieti cod PHP pentru ca poate fi citit cu usurinta.'
	),
	array(
		0 => '--',
		1 => 'Generarea listelor'
	),
	array(
		0 => 'Crearea unei liste neordonate',
		1 => 'Codul BB include doua tipuri de liste, neordonate si ordonate. In mare, sunt la fel cu echivalentele lor HTML. O lista neordonata afiseaza fiecare obiect din lista secvential, adaugandu-le un alineat si un caracter <i>bullet</i>. Pentru a crea o lista neordonata, folositi <strong>[list][/list]</strong> si definiti fiecare obiect din lista folosind <strong>[*]</strong>. Spre exemplu, pentru a va lista culorile preferate, ati putea folosi:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>rosu<br /><strong>[*]</strong>albastru<br /><strong>[*]</strong>galben<br /><strong>[/list]</strong><br /><br />Aceasta va genera urmatoarea lista:<ul><li>rosu</li><li>albastru</li><li>galben</li></ul>'
	),
	array(
		0 => 'Crearea unei liste ordonate',
		1 => 'Al doilea tip de lista, lista ordonata, va ofera controlul asupra a ceea ce este afisat inaintea fiecarui obiect. Pentru a crea o lista ordonata, folositi <strong>[list=1][/list]</strong> pentru o lista numerica sau <strong>[list=a][/list]</strong> pentru o lista alfabetica. Ca si la listele neordonate, obiectele sunt indicate folosind <strong>[*]</strong>. Spre exemplu:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Mergi la magazin<br /><strong>[*]</strong>Cumpara un calculator nou<br /><strong>[*]</strong>Tipa la calculator cand se blocheaza<br /><strong>[/list]</strong><br /><br />va genera urmatoarele:<ol style="list-style-type: arabic-numbers"><li>Mergi la magazin</li><li>Cumpara un calculator nou</li><li>Tipa la calculator cand se blocheaza</li></ol>Pe cand pentru o lista alfabetica veti folosi:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Primul raspuns posibil<br /><strong>[*]</strong>Al doilea raspuns posibil<br /><strong>[*]</strong>Al treilea raspuns posibil<br /><strong>[/list]</strong><br /><br />avand ca rezultat:<ol style="list-style-type: lower-alpha"><li>Primul raspuns posibil</li><li>Al doilea raspuns posibil</li><li>Al treilea raspuns posibil</li></ol>'
	),
	array(
		0 => '--',
		1 => 'Crearea legaturilor'
	),
	array(
		0 => 'Legatura catre alt site',
		1 => 'Codul BB ofera multe modalitati de creare a legaturilor URI (Uniform Resource Indicators), cunoscute mai bine ca URL-uri.<ul><li>Prima din acestea foloseste baliza <strong>[url=][/url]</strong> si orice veti scrie dupa semnul egal va determina continutul acelei balize sa se comporte ca un URL. Spre exemplu, o legatura catre phpBB.ro ar fi:<br /><br /><strong>[url=http://www.phpbb.ro/]</strong>Vizitati phpBB!<strong>[/url]</strong><br /><br />Rezultatul ar fi urmatoarea legatura: <a href="http://www.phpbb.ro/">Vizitati phpBB!</a>. Veti observa ca legatura se va deschide in aceeasi fereastra sau intr-o fereastra noua depinzand de optiunile din browserele utilizatorilor.</li></li>Daca doriti sa fie afisat chiar URL-ul, atunci puteti sa scrieti:<br /><br /><strong>[url]</strong>http://www.phpbb.ro/<strong>[/url]</strong><br /><br />Acesta va genera urmatoarea legatura: <a href="http://www.phpbb.ro/">http://www.phpbb.ro/</a></li><li>Alte facilitati phpBB includ si ceva numit <i>legaturi magice</i>, care va transforma un URL corect din punct de vedere sintactic intr-o legatura fara ca dumneavoastra sa specificati vreo baliza sau sa incepeti cu http://. Spre exemplu, daca veti scrie www.phpbb.ro in mesaj, acesta va deveni automat <a href="http://www.phpbb.ro/">www.phpbb.ro</a> cand vizualizati mesajul.</li><li>Acelasi lucru se intampla si cu adresele de e-mail. Puteti folosi o adresa explicit, spre exemplu:<br /><br /><strong>[email]</strong>cineva@domeniu.adr<strong>[/email]</strong><br /><br />care va afisa <a href="mailto:cineva@domeniu.adr">cineva@domeniu.adr</a> sau puteti sa scrieti cineva@domeniu.adr in mesajul dumneavostra si va fi automat convertit cand il veti vizualiza.</li></ul>La fel ca tag-urile codului BB, puteti folosi pentru URL-uri orice tip de tag, ca <strong>[img][/img]</strong> (cititi punctul urmator), <strong>[b][/b]</strong> etc. Ca si in cazul balizelor de formatare, depinde de dumneavoastra sa va asigurati de ordinea corecta de deschidere si inchidere. Spre exemplu:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">nu</span> este corect, lucru care ar putea duce la stergerea mesajului, asa ca aveti mare grija.'
	),
	array(
		0 => '--',
		1 => 'Afisarea imaginilor in mesaje'
	),
	array(
		0 => 'Adaugarea unei imagini in mesaj',
		1 => 'Codul BB include o baliza pentru includerea imaginilor in mesajele dumneavoastra. Doua lucruri foarte importante trebuie tinute minte atunci cand folositi aceasta baliza: multi utilizatori nu apreciaza afisarea multor imagini intr-un mesaj si imaginea trebuie sa fie deja disponibila pe internet (nu poate exista doar pe calculatorul dumneavoastra, doar daca nu rulati un server de web!). Pentru a afisa o imagine, trebuie sa inchideti URL-ul imaginii in balize <strong>[img][/img]</strong>. Spre exemplu:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Asa cum s-a vazut in sectiunea anterioara despre URL-uri, puteti include o imagine intr-o baliza <strong>[url][/url]</strong> daca doriti, spre exemplu:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />ar genera:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Adaugarea atasamentelor intr-un mesaj',
		1 => 'Atasamentele pot acuma sa fie puse in orice parte a mesajului, folosind noul cod BB <strong>[attachment=][/attachment]</strong>, daca functionalitatea atasamentelor a fost activata de catre administratorul forumului si daca vi s-au atribuit permisiunile necesare sa creeati atasamente. La scrierea mesajului exista o casuta drop-down (respectiv un buton) pentru plasarea atasamentelor in linie.'
	),
	array(
		0 => '--',
		1 => 'Diverse'
	),
	array(
		0 => 'Pot sa imi adaug propriile balize (tag-uri)?',
		1 => 'Daca sunteti un administrator al forumului si aveti permisiunile necesare, puteti sa adaugati coduri BB din sectiunea de coduri BB personalizabile.'
	)
);

?>