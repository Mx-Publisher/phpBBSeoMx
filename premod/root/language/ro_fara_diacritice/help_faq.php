<?php
/**
*
* help_faq [Romana]
*
* @package language
* @version $Id: help_faq.php 8479 2008-03-29 00:22:48Z naderman $
* @translate $Id: help_faq.php 8479 2008-02-23 20:49:11 www.phpbb.ro (Ro Silviu) Exp $
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
		1 => 'Probleme de autentificare si inregistrare'
	),
	array(
		0 => 'De ce nu ma pot autentifica?',
		1 => 'Acest lucru se poate intampla din mai multe motive. In primul rand verificati daca ati specificat corect numele de utilizator si parola. Daca da, contactati un administrator al forumului ca sa fiti sigur ca nu aveti interdictie pe forum. De asemenea, este posibil ca proprietarul site-ului sa aiba o eroare de confirgurare ce trebuie reparata.'
	),
	array(
		0 => 'De ce trebuie sa ma inregistrez?',
		1 => 'S-ar putea sa nu fie nevoie, depinde de adminstratorul forumului daca e nevoie sa va inregistrati sau nu pentru a scrie mesaje. Oricum, inregistrarea va va oferi acces la optiuni care nu sunt disponibile vizitatorilor cum ar fi imagini asociate, mesaje private, trimiterea de email-uri altor utilizatori, inscrierea in grupuri  etc. Dureaza doar cateva momente, asa ca va recomandam sa va inregistrati.'
	),
	array(
		0 => 'De ce sunt scos afara din forum automat?',
		1 => 'Daca nu activati optiunea <i>Autentifica-ma automat la fiecare vizita</i> atunci cand va autentificati, veti fi autentificat doar pentru o perioada de timp prestabilita. Aceasta masura previne ca altcineva sa se foloseasca de contul dumneavoastra. Pentru a ramane autentificat tot timpul, bifati aceasta optiune la autentificare. Acest lucru nu este recomandat daca accesati forumul de la un calculator public, cum ar fi de la o biblioteca, internet cafe, laborator de calculatoare (la liceu/universitate etc.). Daca nu vedeti aceasta optiune, inseamna ca a fost dezactivata de catre un adminstrator al forumului.'
	),
	array(
		0 => 'Cum fac sa nu imi apara numele de utilizator in lista de utilizatori conectati?',
		1 => 'In profilul dumneavoastra veti gasi o optiune <i>Ascunde indicatorul de conectare</i>. Daca veti seta aceasta optiune pe <i>Da</i> veti fi vizibil doar pentru administratori, moderatori si pentru dumneavoastra. Veti fi numarat ca utilizator ascuns.'
	),
	array(
		0 => 'Mi-am pierdut parola!',
		1 => 'Nu intrati in panica! Parola dumneavoastra nu poate fi refacuta, dar poate fi resetata usor. Pentru a realiza acest lucru, mergeti la pagina de autentificare si folositi legatura <i>Am uitat parola</i>. Urmati instructiunile si in scurt timp ar trebui sa va puteti autentifica.'
	),
	array(
		0 => 'Sunt inregistrat dar nu ma pot autentifica!',
		1 => 'Mai intai verificati daca ati specificat corect numele de utilizator si parola. Daca sunt corecte, atunci s-a intamplat o situatie din doua posibile. Daca este activata optiunea COPPA si ati specificat la inregistrare ca aveti sub 13 ani, atunci va trebui sa urmati instructiunile primite. Unele forumuri obliga ca utilizatorii noi sa fie activati; astfel contul trebuie activat fie de catre dumneavoastra personal, fie de catre un administrator inainte de a va puteti autentifica. Aceasta informatie a fost prezentata la inregistrare. Daca ati primit un email atunci urmati instructiunile. Daca nu, e posibil sa fi specificat o adresa de e-mail incorecta sau mesajul a fost prelucrat de un filtru de spam. Daca sunteti sigur ca adresa de e-mail folosita este corecta atunci incercati sa contactati un administrator.'
	),
	array(
		0 => 'M-am inregistrat cu ceva timp in urma dar acum nu ma mai pot autentifica?!',
		1 => 'Verificati-va mesajul pe care l-ati primit cand v-ati inregistrat pentru a verifica numele de utilizator si parola; apoi incercati din nou sa va autentificati. Este posibil ca un administrator sa fi dezactivat sau sa fi sters contul dumneavoastra dintr-un motiv sau altul. De asemenea, multe forumuri sterg periodic utilizatorii care nu au activat pe o perioada lunga de timp pentru a reduce dimensiunea bazei de date. Daca s-a intamplat acest lucru, incercati sa va inregistrati din nou si sa va implicati mai mult in discutii.'
	),
	array(
		0 => 'Ce este COPPA?',
		1 => 'COPPA, sau "Child Online Privacy and Protection Act of 1998" (Actul penrtu protectia copiilor pe Internet din 1998) este o lege din Statele Unite care solicita site-urile care pot colecta informatii personale de la minorii sub varsta 13 ani sa obtina acordul scris al parintilor sau alta metoda legala prin care tutorele legal isi da acordul pentru colectarea informatiilor personale de la minorul cu varsta sub 13 ani. Daca nu sunteti sigur daca acest lucru este aplicabil dumneavoastra - ca un utilizator ce se inregistreaza - sau acestui site pe care incercati sa va inregistrati, contactati un consilier legal pentru asistenta. Retineti ca echipa phpBB nu poate furniza sfaturi juridice si nu este un punct de contact pentru implicatii legale de orice fel cu exceptia celor specificate mai jos.',
	),
	array(
		0 => 'De ce nu ma pot inregistra?',
		1 => 'Este posibil ca proprietarul site-ului sa fi interzis adresa IP de pe care intrati sau sa fi dezactivat numele de utilizator pe care incercati sa-l inregistrati. De asemenea, inregistrarile noi ar putea fi dezactivate de catre proprietarul site-ului pentru a preveni vizitatorii noi sa se inregistreze. Contactati un administrator al forumului pentru asistenta.',
	),
	array(
		0 => 'Ce face optiunea “Sterge toate cookie-urile forumului”?',
		1 => 'Aceasta optiune va sterge toate cookie-urile create de catre phpBB care va tin autentificat pe forum. De asemenea, permite functionalitati ca de exemplu citirea urmei daca acest lucru a fost activat de catre proprietarul forumului. Daca aveti probleme cu autentificarea sau dezautentificarea pe forum, stergerea cookie-urilor forumului poate ajuta intr-o astfel de sitatie',
	),
	array(
		0 => '--',
		1 => 'Setarile si preferintele utilizatorului'
	),
	array(
		0 => 'Cum imi schimb setarile?',
		1 => 'Toate setarile dumneavoastra (daca sunteti inregistrat) sunt pastrate in baza de date. Pentru a le modifica, folositi Panoul utilizatorului; in general un link poate fi gasit in partea superioara a paginilor forumului. Acest lucru va va permite sa va schimbati toate setarile si preferintele.'
	),
	array(
		0 => 'Orele nu sunt corecte!',
		1 => 'S-ar putea ca dumneavoastra sa vedeti orele afisate dintr-o zona cu fus orar diferit fata de cea in care sunteti. Daca este asa, folositi Panoul utilizatorului pentru a schimba specifica fusul orar in concordanta cu zona in care va aflati, cum ar fi Bucuresti, Londra, Paris, etc. Retineti ca schimbarea zonei de fus orar, ca majoritatea setarilor, poate fi facuta doar de catre utilizatorii inregistrati. Daca nu sunteti inregistrat, acesta este un moment bun sa o faceti.'
	),
	array(
		0 => 'Am schimbat zona de fus orar, dar ora tot este gresita!',
		1 => 'Daca sunteti sigur ca ati setat zona de fus orar si ora de vara/DST corect dar ora inca este inca incorecta, atunci tipul setat pe ceasul serverului este incorect. Va rugam sa contactati un administrator pentru a corecta problema.'
	),
	array(
		0 => 'Limba mea nu este in lista!',
		1 => 'Fie administratorul nu a instalat limba dumneavoastra sau nimeni nu a tradus inca acest forum in limba dumneavoastra. Incercati sa-l intrebati pe administratorul forumului daca poate instala limba de care aveti nevoie. Daca pachetul de limba nu exista, sunteti liber sa creati o noua traducere. Mai multe informatii pot fi gasite pe site-ul grupului phpBB (folositi link-ul din partea inferioara a paginilor forumului)'
	),
	array(
		0 => 'Cum pot afisa o imagine sub numele meu de utilizator?',
		1 => 'Sunt doua imagini ce pot aparea sub numele de utilizator cand vizualizati mesajele. In funtie de stilul folosit, prima poate fi o imagine asociata cu rangul dumneavoastra, in general acestea luand forma de stele, blocuri sau puncte indicand cate mesaje ati scris sau statutul dumneavoastra pe forum. A doua, de obicei o imagine mai mare, este cunoscuta sub numele de avatar (imagine asociata) si este, in general, unica sau personala fiecarui utilizator. Administratorul decide daca sa activeze imaginile asociate si are posibilitatea de a alege modalitatea prin care imaginile asociate pot fi folosite. Daca nu puteti folosi imaginile asociate, atunci contactati un administrator al forumului si intrebati-l despre motivele care au dus la aceasta decizie.'
	),
	array(
		0 => 'Care este rangul meu si cum il pot schimba?',
		1 => 'Rangurile, care apar sub numele dumneavoastra de utilizator, indica numarul de mesaje pe care le-ati scris sau identifica anumiti utilizatori (de exemplu moderatorii si administratorii). In general, nu puteti schimba direct denumirea rangurilor forumului fata de cum au fost specificate de catre administratorul forumului. Va rugam, sa nu abuzati de forum scriind mesaje inutile doar pentru a va creste rangul. Majoritatea forumurilor nu vor tolera acest lucru si moderatorii sau administratorii va vor scadea pur si simplu numarul de mesaje scrise.'
	),
	array(
		0 => 'De ce cand folosesc legatura de email al unui utilizator imi cere sa ma autentific?',
		1 => 'Doar utilizatorii inregistrati pot trimite mesaje altor utilizatori prin formularul incorporat de mail si doar daca administratorul a activat aceasta facilitate. Acest lucru se intampla pentru a preveni folosirea malitioasa a sistemului de mesagerie de catre utilizatorii anonimi.'
	),
	array(
		0 => '--',
		1 => 'Probleme de scriere/publicare al mesajelor'
	),
	array(
		0 => 'Cum deschid un subiect in forum?',
		1 => 'Pentru a deschide un subiect nou in forum, apasati pe butonul specific, fie din forum, fie pe ecranul cu subiecte. Este posibil sa fie nevoie sa va inregistrati inainte de a scrie un mesaj. Facilitatile care va sunt disponibile sunt trecute in partea de jos a ecranului. Exemplu: Puteti crea subiecte noi in acest forum, Puteti vota in sondaje, etc.'
	),
	array(
		0 => 'Cum pot modifica sau sterge un mesaj?',
		1 => 'In afara cazului in care sunteti administratorul sau moderatorul forumului, puteti modifica sau sterge doar propriile mesajele. Puteti modifica un mesaj - uneori doar pentru o scurta perioada dupa publicare - apasand butonul <i>Modifica</i> asociat mesajulului respectiv. Daca cineva a raspuns la mesaj, veti observa o mica sectiune de text sub mesaj cand reveniti la subiect care arata de cate ori ati modificat acel mesaj impreuna cu data si ora modificarii. Aceasta va aparea doar daca cineva a raspuns la subiect; nu va aparea daca un moderator sau administrator a modificat mesajul, acestia ar trebui sa lase un mesaj in care sa spuna ce si de ce au modificat. Retineti ca utilizatorii normali nu pot sterge un mesaj odata ce cineva a raspuns.'
	),
	array(
		0 => 'Cum pot sa imi adaug semnatura la mesaj?',
		1 => 'Pentru a adauga o semnatura trebuie intai sa va creati una folosind Panoul utilizatorului. Odata ce semnatura este creata, puteti sa bifati optiunea <i>Ataseaza o semnatura</i> din formularul de publicare pentru a va adauga semnatura. Puteti, de asemenea, sa va adaugati automat semnatura la toate mesajele bifand optiunea corespunzatoare din profil. Daca procedati astfel, puteti sa preveniti adaugarea semnaturii unor anumite mesaje daca stergeti bifa respectiva din formularul de publicare.'
	),
	array(
		0 => 'Cum pot crea un sondaj?',
		1 => 'Cand creati un subiect nou sau modificati primul mesaj al unui subiect, ar trebui sa vedeti o sectiune <i>Creare chestionar</i> sub zona principala de publicare; daca nu vedeti acest lucru probabil ca nu aveti privilegiile de acces necesare pentru a crea sondaje. Introduceti un titlu pentru chestionar si cel putin doua optiuni in campul text corespunzator avand grija sa specificati o optiune pe fiecare rand. Puteti sa specificati numarul de optiuni pe care utilizatorul de poate selecta in timpul votarii folosind “Optiuni per utilizator”, valabilitatea in zile a sondajului (0 inseamna un sondaj permanent) si in cele din urma optiunea ce pemite utilizatorilor sa-si schimbe voturile.'
	),
	array(
		0 => 'De ce nu pot adauga mai multe optiuni la sondaj?',
		1 => 'Limita pentru optiunile sondajului este specificata de catre administratorul forumului. Daca simtiti ca aveti nevoie sa adaugati optiuni suplimentare sondajului decat limita permisa, atunci contactati administratorul forumului.'
	),
	array(
		0 => 'Cum modific sau sterg un sondaj?',
		1 => 'Ca si in cazul mesajelor, sondajele pot fi modificate doar de catre autorul acestora, un moderator sau de catre un administrator. Pentru a modifica un sondaj, efectuati un click pe primul mesaj din subiect; acesta este intotdeauna asociat cu sondajul. Daca nimeni nu a votat, atunci utilizatorii pot sterge sau modifica orice optiuni ale sondajului. Totusi, daca membrii si-au exprimat optiunile deja, doar moderatorii sau administratorii il pot modifica sau sterge. Acest lucru previne schimbarea optiunilor sondajului inainte de finalizarea acestuia.'
	),
	array(
		0 => 'De ce nu pot sa accesez un forum?',
		1 => 'Unele forumuri pot fi limitate pentru anumiti utilizatori sau grupuri de utilizatori. Pentru a vedea, citi, publica, etc. este nevoie probabil de permisiuni speciale. Contactati un moderator sau pe administratorul forumului pentru a va da acces.'
	),
	array(
		0 => 'De ce nu pot adauga atasamente?',
		1 => 'Abilitatea de a adauga atasamente se poate face pe baza de forum, grup, sau utilizator. Administratorul forumului poate a dezactivat atasarea fisierelor in forumul in care vreti sa scrieti, sau poate doar anumite grupuri pot atasa fisiere. Contactati administratorul forumului daca nu stiti sigur de ce nu puteti adauga atasamente.'
	),
	array(
		0 => 'De ce am primit un avertisment?',
		1 => 'Fiecare administrator are propriile reguli pentru forumul sau. Daca ati incalcat o regula, vi se poate da un avertisment. Retineti ca aceasta este decizia administratorului si grupul phpBB nu are nimic de-a face cu avertismentele acordate pe site-ul in cauza. Contactati administratorul forumului daca nu stiti sigur de ce ati primit un avertisment.'
	),
	array(
		0 => 'Cum pot raporta mesaje unui moderator?',
		1 => 'Daca administratorul a permis aceasta faclitate, mesajul cu pricina ar trebui sa includa un buton pentru raportarea lui. Dand click pe acest buton,veti fi indrumat cu pasii necesari pentru raportarea mesajului.'
	),
	array(
		0 => 'Pentru ce este butonul "Salvare" la deschiderea unui subiect?',
		1 => 'Aceasta optiune va da posibilitatea sa salvati pasaje in vederea finalizarii si publicarii lor in viitor. Pentru a reincarca un pasaj salvat, folositi Panoul utilizatorului.'
	),
	array(
		0 => 'De ce mesajul meu trebuie sa fie aprobat?',
		1 => 'Administratorul forumului poate a decis ca mesajele din forumul in care scrieti trebuie sa necesite o revizuire inainte sa fie publicate. De asemenea, este posibil ca administratorul sa va fi adaugat intr-un grup de utilizatori ale caror mesaje recesita revizuire inainte de a fi publicate. Va rugam sa contactati administratorul pentru mai multe detalii.'
	),
	array(
		0 => 'Cum imi promovez subiectul?',
		1 => 'In momentul vizualizarii, apasand pe legatura “Ridica acest subiect” puteti "promova" subiectul curent in partea superioara a forumului pe prima pagina. Daca nu vedeti aceasta optiune, inseamna ca promovarea subiectelor poate fi dezactivata sau timpul permis intre promovari nu a fost atins. De asemenea, puteti mai simplu sa promovati subiectul respectiv prin adaugarea unui raspuns. Totusi, asigurati-va ca respectati regulile forumului cand procedati astfel.'
	),
	array(
		0 => '--',
		1 => 'Formatari si tipuri de subiecte'
	),
	array(
		0 => 'Ce este codul BB?',
		1 => 'Codul BB este o implementare speciala a HTML-ului oferind un control marit al formatarii pe anumite obiecte din cadrul unui mesaj. Posibilitatea de a folosi codul BB este data de decizia administratorului dar poate fi dezactivat acest cod de la mesaj la mesaj din formularul de publicare. Codul BB este similar ca stil cu HTML-ul dar balizele (tag-urile) sunt inchise in paranteze patrate [ si ] mai degraba decat &lt; si &gt;. Pentru mai multe informatii despre codul BB, consultati ghidul care poate fi accesat din pagina de publicare.'
	),
	array(
		0 => 'Pot folosi HTML?',
		1 => 'Nu. Nu se poate folosi cod HTML care sa fie trimis la browser ca si cod HTML. Majoritatea formatarilor intretinute de HTML sunt posibile folosind cod BB.'
	),
	array(
		0 => 'Ce sunt Zambetele?',
		1 => 'Zambetele sau iconitele emotive sunt imagini mici care pot fi folosite pentru a exprima anumite sentimente folosind un cod scurt. Spre exemplu :) inseamna vesel , :( inseamna trist. Lista completa a iconitelor emotive poate fi consultata in formularul de publicare. Incercati totusi sa nu folositi prea multe iconite emotive pentru ca pot face un mesaj greu de citit si un moderator s-ar putea hotari sa le scoata din mesaj sau sa stearga mesajul cu totul. De asemenea, administratorul forumului poate sa specifice o limita a numarului de zambete ce se pot folosi in cadrul unui mesaj.'
	),
	array(
		0 => 'Pot publica imagini?',
		1 => 'Da, imaginile pot fi afisate in mesajele dumneavoastra. Daca administratorul a permis atasamentele, puteti sa incarcati imaginile direct pe forum. Altfel, puteti folosi o legatura catre o imagine stocata pe un server accesibil publicului, cum ar fi http://www.examplu.com/imaginea-mea.gif. Nu puteti sa creati legaturi cu imagini de pe calculatorul dumneavoastra (doar daca este un server public), nici cu imagini stocate in spatele unui mecanism de autentificare, cum ar fi casutele de e-mail, site-uri protejate cu parola, etc. Pentru a afisa imaginea, folositi eticheta codului BB [img].'
	),
	array(
		0 => 'Ce sunt anunturile globale?',
		1 => 'Anunturile globale contin informatii importante si este indicat sa le cititi cat de curand posibil. Anunturile globale vor aparea in partea de sus a fiecarei pagini de forum si in interiorul panoului de control al utilizatorului. Permisiunea de a publica anunturi globale este acordata de catre administratorul forumului.'
	),
	array(
		0 => 'Ce sunt anunturile?',
		1 => 'Anunturile deseori contin informatii importante referitoare la forumul pe care il parcurgeti si ar trebui citite cat de curand posibil. Anunturile apar in partea de sus a fiecarei pagini in forumul de care apartin. La fel ca anunturile globale, permisiunea de a publica anunturi este acordata de catre administratorul forumului.'
	),
	array(
		0 => 'Ce sunt subiectele importante?',
		1 => 'Subiectele importante apar sub anunturi in forum si doar pe prima pagina. Deseori, sunt destul de importante si ar trebui sa le cititi cat de curand posibil. Ca si cu anunturile, permisiunea de a publica subiecte importante este acordata de catre administratorul forumului.'
	),
	array(
		0 => 'Ce sunt subiectele blocate/incuiate?',
		1 => 'Subiectele blocate sunt subiectele unde utilizatorii nu mai pot raspunde si orice sondaj continut s-a inchis automat. Subiectele pot fi inchise din mai multe motive si au fost setate astfel de catre moderatorii sau administratorii forumului. De asemenea, ati putea sa va inchideti propriile subiecte doar daca administratorul forumului v-a acordat aceasta permisiune.'
	),
	array(
		0 => 'Ce sunt iconitele de subiect?',
		1 => 'Aceste iconite sunt imagini de mici dimensiuni asociate cu mesaje pentru a indica continutul acestora. Posibilitatea de a folosi aceste imagini depine de perminiunile setate de catre administrator.'
	),
	array(
		0 => '--',
		1 => 'Niveluri de utilizatori si grupuri'
	),
	array(
		0 => 'Cine sunt administratorii?',
		1 => 'Administratorii sunt membrii asociati cu cel mai mare nivel de control asupra intregului forum. Acesti utilizatori pot controla toate operatiunile forumului incluzand permisiunile de acces, excluderea utilizatorilor, crearea grupurilor sau a moderatorilor, etc. in functie de permisiunile primite de la fondatorul forumului. De asemenea, au capacitatea de moderare completa in toate formurile in functie de permisiunile primite de la fondatorul forumului.'
	),
	array(
		0 => 'Cine sunt moderatorii?',
		1 => 'Moderatorii sunt persoane (sau grupuri de persoane) a caror menire este sa aiba grija de forumuri in mod constant. Acestia au autoritatea de a modifica sau sterge mesajele si de a bloca, debloca, muta, sterge si imparti subiectele in forumurile pe care le modereaza. In mod general, moderatorii exista pentru a avea grija ca utilizatorii sa nu scrie pe langa subiect sau sa publice mesaje abuzive sau ofensatoare.'
	),
	array(
		0 => 'Ce sunt grupurile de utilizatori?',
		1 => 'Grupurile de utilizatori sunt grupari de utilizatori ce impart comunitatea in sectiuni ce pot fi controlate de catre administratorii forumului. Fiecare utilizator poate apartine mai multor grupuri si fiecare grup are drepturi de acces individuale. Acest lucru usureaza munca administratorilor daca doresc sa schimbe permisiunile pentru mai multi utilizatori deodata ca de exemplu: schimbarea permisiunilor de moderare sau acordarea accesului utilizatorilor la un forum privat.'
	),
	array(
		0 => 'Unde pot fi gasite grupurile de utilizatori si cum pot sa ma asociez unuia?',
		1 => 'Puteti vedea toate grupurile de utilizatori folosind link-ul “Grupuri de utilizatori” din cadrul Panoului de control al utilizatorului. Pentru a va asocia unui grup, folositi butonul corespunzator. Nu toate grupurile sunt deschise. Unele necesita aprobare pentru a va alatura grupului, unele sunt inchise si altele pot fi chiar ascunse. Daca grupul este deschis, puteti sa va inscrieti apasand butonul adecvat. Daca grupul necesita aprobare pentru inscriere, puteti cere acest lucru apasand butonul adecvat. Moderatorul grupului va trebui sa aprobe cererea dumneavoastra si este posibil sa fiti intrebat care sunt motivele pentru care doriti sa va alaturati grupului. Va rugam sa nu hartuiti un moderator de grup daca va respinge cererea pentru ca are motive intemeiate.'
	),
	array(
		0 => 'Cum pot deveni moderatorul unui grup de utilizatori?',
		1 => 'De obiecei un moderator al grupului de utilizatori este numit cand grupul este creat de catre un administrator al forumului. Daca doriti sa creati un grup de utilizatori, atunci primul lucru pe care trebuie sa il faceti este sa luati legatura cu un administrator; incercati sa-i trimiteti un mesaj privat.'
	),
	array(
		0 => 'De ce grupurile de utilizatori apar in culori diferite?',
		1 => 'Este posibil ca administratorul sa asocieze o culoare membrilor unui grup pentru a face mai usoara identificarea acestora.'
	),
	array(
		0 => 'Ce este un “Grup implicit”?',
		1 => 'Daca sunteti membrul a mai multor grupuri, grupul implicit este folosit pentru a determina culoarea si rangul grupului ce ar trebui sa vi se afiseze. Administratorul forumului va poate da permisiunea sa schimbati grupul implicit in panoul dumneavoastra de administrare.'
	),
	array(
		0 => 'Ce este pagina "Echipa"?',
		1 => 'Aceasta pagina va furnizeaza o lista cu conducerea forumului, incluzand administratorii si moderatorii si alte detalii ca de exemplu forumurile pe care le modereaza.'
	),
	array(
		0 => '--',
		1 => 'Mesaje private'
	),
	array(
		0 => 'Nu pot trimite mesaje private!',
		1 => 'Exista trei posibile motive: nu sunteti inregistrat si/sau autentificat, administratorul forumului a dezactivat mesageria privata pentru toti utilizatorii sau administratorul forumului v-a restrictionat folosirea mesajelor private. Contactati un administrator al forumului pentru mai multe informatii.'
	),
	array(
		0 => 'Tot primesc mesaje private nedorite!',
		1 => 'Puteti bloca un utilizator sa va trimita mesaje private folosind regulile de mesagerie din Panoul utilizatorului. Daca primiti mesaje private abuzive de la un anumit utilizator, contactati un administrator al forumului; el are puterea de a restrictiona folosirea mesajelor private pentru anumiti utilizatori.'
	),
	array(
		0 => 'Am primit spam-uri sau mesaje abuzive de la cineva din forum!',
		1 => 'Ne pare rau sa auzim acest lucru. Optiunea de trimitere a unui mesaj electronic include masuri de siguranta pentru a observa care utilizatori trimit astfel de mesaje. Ar trebui sa trimiteti administratorului o copie completa a mesajului primit. Este foarte important ca acesta sa includa antetul ce contine detalii despre utilizatorul care a trimis mesajul. Astfel, administratorul forumului poate actiona in consecinta.'
	),
	array(
		0 => '--',
		1 => 'Prieteni si persoane neagreate'
	),
	array(
		0 => 'Ce este lista de prieteni si persoane neagreate?',
		1 => 'Puteti folosi aceste liste pentru a organiza ceilalti membrii de pe forum. Utilizatorii adaugati listei de prieteni vor fi afisati in panoul dumneavoastra de control pentru acces rapid la trimiterea mesajelor private si vizualizarea statutului lor (Conectat/Neconectat). Depinzand de stilul folosit, mesajele lor pot fi scoase in evidenta. Daca adaugati un utilizator in lista cu persoane neagreate, mesajele acestuia vor ascunse.'
	),
	array(
		0 => 'Cum pot adauga/sterge utilizatori in listele mele de prieteni sau persoane neagreate?',
		1 => 'Puteti adauga utilizatori in doua moduri. In cadrul fiecarui profil al utilizatorului, exista un link pentru a-i adauga in lista de prienteni sau persoane neagreate. Alternativ, puteti adauga direct prin introducerea numelelor de utilizatori din Panoul utilizatorului. Din aceeasi pagina puteti sa si stergeti nume din lista.'
	),
	array(
		0 => '--',
		1 => 'Cautand in forumuri'
	),
	array(
		0 => 'Cum pot sa caut intr-un forum sau forumuri?',
		1 => 'Aceasta operatie poate fi efectuata prin introducerea termenului cautat in casuta de cautare aflata pe prima pagina, pagina unui forum sau a unui subiect. Cautarea avansata poate fi accesata folosind link-ul “Cautare avansata” localizat pe toate paginile forumului.'
	),
	array(
		0 => 'De ce cautarea mea returneaza nici un rezultat?',
		1 => 'Cautarea efectuata a fost probabil prea vaga si a inclus multi termeni comuni care nu sunt indexati de phpBB3. Fiti mai specific si folositi optiunile disponibile in formularul de cautare avansata.'
	),
	array(
		0 => 'De ce cautarea mea returneaza o pagina goala!?',
		1 => 'Cautarea efectuata a returnat prea multe rezultate pentru webserver sa le manipuleze. Folositi “Cautare avansata” si fiti mai specific in termenii folositi si forumurile in care cautarea este efectuata.'
	),
	array(
		0 => 'Cum pot cauta utilizatori?',
		1 => 'Duceti-va la sectiunea “Membri” si folositi legatura “Cauta un membru”.'
	),
	array(
		0 => 'Cum pot gasi mesajele si subiectele mele?',
		1 => 'Pentru a afisa mesajele dumneavoastra folositi legatura “Cauta mesajele utilizatorului” din Panoul utilizatorului sau din pagina de profil. Pentru a va cauta subiectele proprii, folositi pagina de cautare avansata si introduceti optiunile adecvate.'
	),
	array(
		0 => '--',
		1 => 'Insemnarea si inscrierea la subiecte'
	),
	array(
		0 => 'Care este diferenta dintre a insemna si a inscrie?',
		1 => 'Insemnarea in phpBB3 este foarte asemanatoare cu insemnarea in navigatorul dumneavoastra web. Nu sunteti notificat cand este publicat un raspuns, dar va puteti intoarce mai tarziu la subiect. Inscriindu-va, veti fi notificat cand va fi publicat un raspuns in subiectul respectiv sau in forum in functie de metodele si optiunile preferate.'
	),
	array(
		0 => 'Cum ma pot inscrie la anumite subiecte sau forumuri?',
		1 => 'Pentru a va inscrie la un anumit forum, odata intrat in acel forum, folositi link-ul "Abonare forum". Pentru a va inscrie la un subiect, raspundeti la acel subiect si marcati casuta de abonare sau puteti folosi legatura “Abonare subiect” din cadrul subiectului.'
	),
	array(
		0 => 'Cum imi pot sterge inscrierile?',
		1 => 'Pentru a va sterge o inscriere, mergeti in  Panoul utilizatorului si folositi legaturile catre inscrieri.'
	),
	array(
		0 => '--',
		1 => 'Atasamente'
	),
	array(
		0 => 'Ce atasamente sunt permise pe acest forum?',
		1 => 'Fiecare administrator de forum poate permite sau restrictiona anumite tipuri de atasamente. Daca nu sunteti sigur ce este permis sa incarcati, contactati administratorul forumului pentru asistenta.'
	),
	array(
		0 => 'Cum pot gasi toate atasamentele mele?',
		1 => 'Pentru a gasi lista atasamentelor incarcate de dumneavoastra, mergeti in Panoul utilizatorului si folositi legaturile catre sectiunea de atasamente.'
	),
	array(
		0 => '--',
		1 => 'Intrebari despre phpBB 3'
	),
	array(
		0 => 'Cine a scris acest program?',
		1 => 'Acest program (in forma sa nemodificata) este produs, lansat si aflat sub copyright-ul <a href="http://www.phpbb.com/" target="_blank">grupului phpBB</a>. Este disponibil sub Licenta Generala Publica GNU si poate fi distribuit gratuit. Folositi link-ul pentru mai multe detalii.'
	),
	array(
		0 => 'De ce nu este facilitatea X disponibila?',
		1 => 'Acest program a fost scris si licentiat de catre grupul phpBB. In cazul in care considerati ca o facilitate trebuie sa fie adaugata, va rugam sa vizitati site-ul phpBB.com si sa vedeti ce are de spus grupul phpBB. Va rugam sa nu publicati cereri de facilitati pe forumurile de la phpbb.com, pentru ca grupul phpBB foloseste sourceforge pentru a delega sarcinile legate de noile facilitati. Va rugam sa consultati aceste forumuri si sa vedeti, daca exista, care este pozitia noastra legata de o facilitate si sa urmati procedura explicata acolo.'
	),
	array(
		0 => 'Cu cine iau legatura pentru probleme juridice si/sau abuzuri legate de acest program?',
		1 => 'Oricare din administratorii afisati in sectiunea “Echipa” ar trebui sa fie un punct de contact potrivit pentru reclamatiile dumneavoastra. Daca nu primiti raspuns, ar trebui sa luati legatura cu posesorul domeniului (efectuati o <a href="http://www.google.com/search?q=whois">interogare whois</a>) sau, daca acesta este pe un domeniu gratuit (de exemplu: Yahoo!, free.fr, f2s.com, etc.), conducerea sau departamentul pentru abuzuri al serviciului respectiv. Va rugam sa retineti ca grupul phpBB <strong>nu are absolut nici un fel de control</strong> si nu poate fi tras la raspundere pentru cum, unde sau de catre cine este folosit acest program. Nu luati legatura cu grupul phpBB pentru probleme juridice care <strong>nu sunt legate direct</strong> de site-ul phpbb.com sau de program in sine. Daca trimiteti un mesaj catre grupul phpBB <strong>despre orice folosire a unui tert</strong> a acestui program, ar trebui sa asteptati un tert raspuns sau niciun raspuns.'
	)
);

?>