<?php
/** 
*
* acp_permissions [Romana]
*
* @package language
* @version $Id: permissions.php 8479 2008-03-29 00:22:48Z naderman $
* @translate $Id: permissions.php, 8479 2008-05-19 20:49:11 www.phpbb.ro (shara21jonny) Exp $
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Permisiunile sunt impartite si grupate in patru mari sectiuni majore, dupa cum urmeaza:</p>

		<h2>Permisiuni Globale</h2>
		<p>Sunt folosite pentru a controla accesul la un nivel global si se aplica la intreagul forum. Ele sunt ulterior impartite in Permisiuni Utilizatori, Permisiuni Grupuri, Administratori si Moderatori Globali.</p>

		<h2>Permisiuni Forum</h2>
		<p>Sunt folosite pentru a controla accesul pe fiecare forum. Ele sunt ulterior impartite in Permisiuni Forum, Moderatori Forum, Permisiuni Utilizatori Forum si Permisiuni Grupuri.</p>

		<h2>Permisiuni Roluri</h2>
		<p>Sunt folosite pentru a crea seturi diferite de permisiuni pentru diferite tipuri de permisiuni, mai tarziu fiind capabile sa fie alocate pe fundamentul rolurilor. Rolurile standard trebuie sa acopere administrarea forumurilor mari si mici, totusi in interiorul fiecaruia dintre cele patru divizii puteti adauga/modifica/sterge rolurile asa cum credeti ca e mai bine.</p>

		<h2>Permisiuni Masti</h2>
		<p>Sunt folosite pentru a vedea permisiunile efective alocate pentru Utilizatori, Moderatori (Locali si Globali), Administratori sau Forumuri.</p>
	
		<br />

		<p>Pentru informatii suplimentare legate de configurarea si administrarea permisiunilor forumului phpBB3 propriu, va rugam sa vizitati <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Capitolul 1.5 al Ghidului nostru de Start Rapid</a>.</p>
	',

	'ACL_NEVER'				=> 'Niciodata',
	'ACL_SET'				=> 'Configurare permisiuni',
	'ACL_SET_EXPLAIN'		=> 'Permisiunile sunt bazate pe un simplu sistem <samp>DA</samp>/<samp>NU</samp>. Optiunea <samp>NICODATA</samp> specificata pentru un utilizator sau grup utilizatori inlocuieste orice alta valoare atribuita. Daca nu doriti sa atribuiti o valoare pentru o optiune acestui utilizator sau grup selectati <samp>NU</samp>. Daca valorile sunt atribuite pentru aceasta optiune, ele vor fi folosite in preferinte, altfel <samp>NICIODATA</samp> este asumat. Toate obiectele marcate (cu o casuta de marcaj in fata lor) vor copia permisiunile pe care le-ati definit.',
	'ACL_SETTING'			=> 'Configurari',

	'ACL_TYPE_A_'			=> 'Permisiuni administrative',
	'ACL_TYPE_F_'			=> 'Permisiuni forum',
	'ACL_TYPE_M_'			=> 'Permisiuni de moderare',
	'ACL_TYPE_U_'			=> 'Permisiuni utilizator',

	'ACL_TYPE_GLOBAL_A_'	=> 'Permisiuni administrative',
	'ACL_TYPE_GLOBAL_U_'	=> 'Permisiuni utilizator',
	'ACL_TYPE_GLOBAL_M_'	=> 'Permisiuni moderator global',
	'ACL_TYPE_LOCAL_M_'		=> 'Permisiuni moderator forum',
	'ACL_TYPE_LOCAL_F_'		=> 'Permisiuni forum',
	
	'ACL_NO'				=> 'Nu',
	'ACL_VIEW'				=> 'Vizualizare permisiuni',
	'ACL_VIEW_EXPLAIN'		=> 'Aici puteti vedea permisiunile efective pe care le are un utilizator sau grup. Un patrat rosu arata ca utilizatorul sau grupul nu are permisiune, un patrat verde arata ca utilizatorul sau grupul are permisiune.',
	'ACL_YES'				=> 'Da',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Aici puteti atribui drepturi de administrator pentru utilizatori sau grupuri. Toti utilizatorii cu drepturi de administrator pot vedea panoul de administrare.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Aici puteti aloca utilizatori si grupuri de utilizatori ca si moderatori de forum. Pentru a atribui accesul utilizatorilor la forumuri, pentru a defini drepturile globale de moderare sau administrare, va rugam sa folositi pagina potrivita.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Aici puteti modifica ce utilizatori sau grupuri pot accesa anumite forumuri. Pentru a aloca moderatori sau a defini administratori va rugam folositi pagina potrivita.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Aici puteti aloca drepturi de moderatori globali pentru utilizatori sau grupuri. Acesti moderatori sunt ca si cei obisnuiti numai ca au acces de moderare pe toate forumurile.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aici puteti atribui permisiuni pe forum pentru grupuri.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Aici puteti atribui permisiuni globale pentru grupuri - permisiuni utilizatori, permisiuni globale de moderare si permisiuni administrative. Permisiunile utilizatorilor includ capabilitatea de a folosi imagini asociate (avatar), de a trimite mesaje private, etc. Permisiunile moderatorului global sunt de tipul aprobare mesaje, administrare subiecte, administrare restrictii iar cele administrative sunt de tipul modificare permisiuni, definire coduri BB personalizate, administrare forumuri etc. Permisiunile individuale ale utilizatorilor ar trebui schimbate numai in situatii rare, metoda preferata fiind aceea de a pune utilizatorul in grupuri si a atribui permisiunile grupului respectiv.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Aici puteti administra rolurile pentru permisiuni administrative. Rolurile sunt permisiuni efective, daca schimbati un rol, atunci elementele ce au acest rol isi vor schimba de asemenea permisiunile.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Aici puteti administra rolurile pentru permisiuni forum. Rolurile sunt permisiuni efective, daca schimbati un rol, atunci elementele ce au acest rol isi vor schimba de asemenea permisiunile.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Aici puteti administra rolurile pentru permisiuni de moderare. Rolurile sunt permisiuni efective, daca schimbati un rol, atunci elementele ce au acest rol isi vor schimba de asemenea permisiunile.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Aici puteti administra rolurile pentru permisiuni de utilizator. Rolurile sunt permisiuni efective, daca schimbati un rol, atunci elementele ce au acest rol isi vor schimba de asemenea permisiunile.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aici puteti atribui permisiuni pe forum pentru utilizatori.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Aici puteti atribui permisiuni globale pentru utilizatori - permisiuni utilizatori, permisiuni moderatori globali si permisiuni administratori. Permisiunile utilizatorilor includ posibilitatea de a folosi imagini asociate (avatar), de a trimite mesaje private, etc; permisiunile moderatorului global includ posibilitatea de a aproba mesaje, de a administra subiecte si interdictii si, in cele din urma, permisiunile administrative includ posibilitatea de a modifica permisiunile, de a defini coduri BB specifice, de a administra forumuri, etc. Pentru a schimba aceste configurari pentru un numar mai mare de utilizatori, sistemul de permisiuni pentru grupuri este metoda preferata. Permisiunile utilizatorilor ar trebui schimbate numai in ocazii rare, metoda preferata fiind aceea de a asocia utilizatorii in grupuri si pentru a atribui permisiunile pentru intregul grup.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Aici puteti vedea permisiunile administrative efective atribuite utilizatorilor/grupurilor selectate.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Aici puteti vedea permisiunile globale de moderare atribuite utilizatorilor/grupurilor selectate.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Aici puteti vedea permisiunile forumului atribuite utilizatorilor/grupurilor selectate.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Aici puteti vedea permisiunile moderatorului de forum atribuite utilizatorilor/grupurilor selectat.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Aici puteti vedea permisiunile efective ale utilizatorului atribuite pentru utilizatorii/grupurile selectate.',

	'ADD_GROUPS'				=> 'Adauga grupuri',
	'ADD_PERMISSIONS'			=> 'Adauga permisiuni',
	'ADD_USERS'					=> 'Adauga utilizatori',
	'ADVANCED_PERMISSIONS'		=> 'Permisiuni avansate',
	'ALL_GROUPS'				=> 'Selecteaza toate grupurile',
	'ALL_NEVER'					=> 'Toate <samp>NICIODATA</samp>',
	'ALL_NO'					=> 'Toate <samp>NU</samp>',
	'ALL_USERS'					=> 'Selecteaza toti utilizatorii',
	'ALL_YES'					=> 'Toate <samp>DA</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Aplica toate permisiunile',
	'APPLY_PERMISSIONS'			=> 'Aplica permisiuni',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Rolul si permisiunile definite pentru acest element vor fi aplicate pentru acesta dar si pentru toate celelalte selectate.',
	'AUTH_UPDATED'				=> 'Permisiunile au fost actualizate',

	'CREATE_ROLE'				=> 'Creaza rol',
	'CREATE_ROLE_FROM'			=> 'Foloseste configurarile de la…',
	'CUSTOM'					=> 'Personalizat…',

	'DEFAULT'					=> 'Initial',
	'DELETE_ROLE'				=> 'Sterge rol',
	'DELETE_ROLE_CONFIRM'		=> 'Sunteti sigur ca doriti sa stergeti aceast rol? Elementele ce au asociat aceast rol <strong>NU-SI</strong> vor pierde configurarile permisiunilor.',
	'DISPLAY_ROLE_ITEMS'		=> 'Vizualizeaza elementele ce folosesc aceast rol',

	'EDIT_PERMISSIONS'			=> 'Modifica permisiuni',
	'EDIT_ROLE'					=> 'Modifica rol',

	'GROUPS_NOT_ASSIGNED'		=> 'Nici un grup nu are aceast rol',

	'LOOK_UP_GROUP'				=> 'Vizualizare grup utilizatori',
	'LOOK_UP_USER'				=> 'Vizualizare utilizator',

	'MANAGE_GROUPS'		=> 'Administreaza grupuri',
	'MANAGE_USERS'		=> 'Administreaza utilizatori',

	'NO_AUTH_SETTING_FOUND'		=> 'Configurarile permisiunilor nu sunt definite.',
	'NO_ROLE_ASSIGNED'			=> 'Niciun rol atribuit…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Alocand acest rol nu va schimba permisiunile din dreapta. Daca vreti sa eliminati toate permisiunile ar trebui sa foloseiti legatura “Toate <samp>NU</samp>” .',
	'NO_ROLE_AVAILABLE'			=> 'Niciun rol nu este disponibil',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Dati un nume rolului.',
	'NO_ROLE_SELECTED'			=> 'Rolul nu poate fi gasit.',
	'NO_USER_GROUP_SELECTED'	=> 'Nu ati selectat un utilizator sau grup.',

	'ONLY_FORUM_DEFINED'	=> 'Ati selectat doar forumuri in selectia proprie. Trebuie sa selectati si cel putin un utilizator sau un grup.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Rolul si permisiunile vor fi de asemenea aplicate tuturor obiectelor selectate',
	'PLUS_SUBFORUMS'				=> '+Subforumuri',

	'REMOVE_PERMISSIONS'			=> 'Sterge permisiuni',
	'REMOVE_ROLE'					=> 'Sterge rol',
	'RESULTING_PERMISSION'			=> 'Rezultand permisiuni',
	'ROLE'							=> 'Rol',
	'ROLE_ADD_SUCCESS'				=> 'Rol adaugat cu succes.',
	'ROLE_ASSIGNED_TO'				=> 'Utilizatori/Grupuri asociate pentru %s',
	'ROLE_DELETED'					=> 'Rol sters cu succes.',
	'ROLE_DESCRIPTION'				=> 'Descriere rol',

	'ROLE_ADMIN_FORUM'			=> 'Administrator forum',
	'ROLE_ADMIN_FULL'			=> 'Administrator total',
	'ROLE_ADMIN_STANDARD'		=> 'Administrator standard',
	'ROLE_ADMIN_USERGROUP'		=> 'Administrator de utilizator si grupuri',
	'ROLE_FORUM_BOT'			=> 'Acces robot',
	'ROLE_FORUM_FULL'			=> 'Acces total',
	'ROLE_FORUM_LIMITED'		=> 'Acces limitat',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Acces limitat + Chestionare',
	'ROLE_FORUM_NOACCESS'		=> 'Fara acces',
	'ROLE_FORUM_ONQUEUE'		=> 'In lista de asteptare pentru moderare',
	'ROLE_FORUM_POLLS'			=> 'Acces standard + Chestionare',
	'ROLE_FORUM_READONLY'		=> 'Acces doar pentru vizualizare',
	'ROLE_FORUM_STANDARD'		=> 'Acces standard',
	'ROLE_MOD_FULL'				=> 'Moderator total',
	'ROLE_MOD_QUEUE'			=> 'Moderator al listei de asteptare',
	'ROLE_MOD_SIMPLE'			=> 'Moderator simplu',
	'ROLE_MOD_STANDARD'			=> 'Moderator standard',
	'ROLE_USER_FULL'			=> 'Toate facilitatile',
	'ROLE_USER_LIMITED'			=> 'Permisiuni limitate',
	'ROLE_USER_NOAVATAR'		=> 'Fara avatar',
	'ROLE_USER_NOPM'			=> 'Fara mesaje private',
	'ROLE_USER_STANDARD'		=> 'Facilitati standard',
	
	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Poate accesa panoul de administrare al forumului si setarile de permisiuni.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Are acces la toate functiile de administrare ale acestui forum.<br />Nu este recomandat.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Are acces la majoritatea functionalitatilor de administrare, dar ii este permis accesul la optiunile serverului si sistemului asociat.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Poate administra grupurile si utilizatorii: poate schimba permisiuni, setari, administra restrictii si ranguri.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Acest rol este recomandat pentru roboti si paianjeni de cautare.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Poate folosi toate optiunile forumului, inclusiv publicarea anunturilor si a mesajelor importante. De asemenea, poate ignora limita de flood.<br />Nu este recomandat pentru utilizatorii normali.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Poate folosi cateva dintre optiunile forumului, dar nu poate atasa fisiere sau folosi iconite pentru mesaje.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'La fel ca si la accesul limitat, dar poate crea chestionare.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Nu poate accesa sau vizualiza forumul.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Poate folosi majoritatea optiunilor, inclusiv atasamentele, dar mesajele si subiectele trebuie aprobate de catre un moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'La fel ca si la accesul standard, dar poate crea chestionare.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Poate citi forumul, dar nu poate crea subiecte noi sau raspunde mesajelor.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Poate folosi majoritatea optiunilor forumului, inclusiv atasamentele si stergerea propriilor subiecte, dar nu-si poate inchide propriile subiecte sau crea chestionare.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Poate folosi toate optiunile de moderare, inclusiv banarea.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Poate folosi lista de moderare pentru validarea si modificarea mesajelor, dar nimic altceva.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Poate folosi pentru subiecte doar actiunile de baza. Nu poate trimite avertismente sau folosi lista de moderare.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Poate folosi majoritatea optiunilor de moderare, dar nu poate interzice utilizatorii sau schimba autorul mesajului.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Poate folosi toate optiunile valabile pentru utilizatori, incluzand schimbarea numelui sau ignorarea limitei de flood.<br />Nu este recomandat.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Poate accesa unele optiuni ale utilizatorului. Atasamentele, e-mailurile sau mesajele instante nu sunt permise.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Are optiuni limitate si nu poate folosi optiunea de imagine asociata (avatar).',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Are optiuni limitate si nu poate folosi mesaje private.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Poate accesa majoritatea, dar nu toate optiunile utilizatorului. De exemplu, nu poate schimba numele sau ignora limita de flood.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Puteti specifica o scurta explicatie pentru ce foloseste acest rol sau pentru ce inseamna. Textul pe care il introduceti aici va fi afisat de asemenea in cadrul ferestrelor cu permisiuni.',
	'ROLE_DESCRIPTION_LONG'			=> 'Descrierea rolului este prea lunga, te rugam sa te limitezi la 4000 caractere.',
	'ROLE_DETAILS'					=> 'Detalii rol',
	'ROLE_EDIT_SUCCESS'				=> 'Rol modificat cu succes.',
	'ROLE_NAME'						=> 'Nume rol',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Acest nume de rol <strong>%s</strong> exista deja pentru tipul de permisiune specificat.',
	'ROLE_NOT_ASSIGNED'				=> 'Rolul nu a fost inca alocat.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Forumul/Forumurile selectate nu exista.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Grupul/Grupurile selectate nu exista.',
	'SELECTED_USER_NOT_EXIST'		=> 'Utilizatorul/Utilizatorii selectati nu exista.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Forumul pe care il alegeti aici va include toate subforumurile in aceasta selectie.',
	'SELECT_ROLE'					=> 'Selecteaza rol',
	'SELECT_TYPE'					=> 'Selecteaza tip',
	'SET_PERMISSIONS'				=> 'Selecteaza permisiuni',
	'SET_ROLE_PERMISSIONS'			=> 'Specifica permisiuni rol',
	'SET_USERS_PERMISSIONS'			=> 'Specifica permisiuni utilizatori',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Specifica permisiuni utilizatori forum',

	'TRACE_DEFAULT'					=> 'Initial, fiecare permisiune este <samp>NU</samp> (nu este specificata). Asa ca permisiunile pot fi suprascrise de catre alte configurari.',
	'TRACE_FOR'						=> 'Urma pentru',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Permisiunea grupului pentru acest forum este <samp>NICIODATA</samp> ca si rezultatul total, asa ca vechiul rezultat este pastrat.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Permisiunea grupului pentru acest forum este <samp>NICIODATA</samp> ca si rezultatul total asa ca vechiul rezultat este pastrat.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Permisiunea grupului este setata pentru <samp>NICIODATA</samp> care devine noua valoare totala pentru ca nu a fost specificata inca (specifica <samp>NU</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Permisiunea grupului pentru acest forum este <samp>NICIODATA</samp> care devine noua valoare totala pentru ca nu a fost specificata inca (specifica <samp>NU</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Permisiunea grupului este <samp>NICIODATA</samp> care suprascrie toate optiunile <samp>DA</samp> cu <samp>NICIODATA</samp> pentru acest utilizator.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Permisiunea grupului pentru acest forum este <samp>NICIODATA</samp> care suprascrie toate optiunile <samp>DA</samp> cu <samp>NICIODATA</samp> pentru acest utilizator.',
	'TRACE_GROUP_NO'				=> 'Permisiunea este <samp>NU</samp> pentru acest grup, asa ca toata valoare veche va fi pastrata.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Permisiunea este <samp>NU</samp> pentru acest grup in forum astfel incat toata valoare veche va fi pastrata.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Aceasta permisiune de grup este <samp>DA</samp> dar totalul <samp>NICIODATA</samp> nu poate fi suprascris.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Aceasta permisiune de grup pentru forum este <samp>DA</samp> dar totalul <samp>NICODATA</samp> nu poate fi suprascris.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Aceasta permisiune de grup este <samp>DA</samp> care devine noua valoare totala deoarece inca nu a fost setata (specifica <samp>NU</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Aceasta permisiune de grup pentru forum este <samp>DA</samp> care devine devine noua valoare totala pentru ca inca nu a fost setata (specifica <samp>NO</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Aceasta permisiune de grup este <samp>DA</samp> si totalul permisiunii este deja specificat pentru <samp>DA</samp>, asa ca rezultatul total este pastrat.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Aceasta permisiune de grup pentru forum este <samp>DA</samp> si permisiunea totala este deja specificata pentru <samp>DA</samp>, asa ca rezultatul total este pastrat.',
	'TRACE_PERMISSION'				=> 'Urmareste permisiune - %s',
	'TRACE_RESULT'					=> 'Urmareste rezultat',
	'TRACE_SETTING'					=> 'Urmareste configurare',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Permisiunile utilizatorulul independente de forum sunt evaluate la <samp>DA</samp> dar totalul este deja setat la <samp>DA</samp>, asa ca rezultatul total va fi pastrat. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Permisiunile utilizatorulul independente de forum sunt evaluate la <samp>DA</samp> care suprascrie rezultatul local curent <samp>NICIODATA</samp>. %sTrace global permission%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Permisiunile utilizatorulul independente de forum sunt evaluate la  <samp>NICIODATA</samp> care nu influenteaza permisiunea locala. %sTrace global permission%s',
	
	'TRACE_USER_FOUNDER'					=> 'Utilizatorul are specificat tipul de fondator, de aceea permisiunile administratorilor sunt specificate initial la valoarea <samp>DA</samp>.',
	'TRACE_USER_KEPT'						=> 'Permisiunea utilizatorului este <samp>NU</samp> asa ca vechea valoare totala este pastrata.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Permisiunea utilizatorului pentru acest forum este <samp>NU</samp> asa ca valoarea totala veche este pastrata.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Permisiunea utilizatorului este <samp>NICIODATA</samp> si valoarea totala este setata la <samp>NICIODATA</samp>, asa ca nimic nu este schimbat.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Permisiunea utilizatorului pentru acest forum este <samp>NICIODATA</samp> iar valoarea totala este setata la  <samp>NICODATA</samp>, asa ca nimic nu este schimbat.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Permisiunea utilizatorului este <samp>NICIODATA</samp> care devin valorile totale deoarece au fost setate la NU.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Permisiunea utilizatorului pentru acest forum este <samp>NICIODATA</samp> care devin valorile totale deoarece au fost setate la NU.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Permisiunea utilizatorului este <samp>NICIODATA</samp> si le suprascrie pe cele anterioare <samp>DA</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Permisiunea utilizatorului pentru acest forum este <samp>NICIODATA</samp> si suprascrie permisiunile precedente <samp>DA</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Permisiunea utilizatorului este <samp>NU</samp> iar valoarea totala a fost setata la NU asa ca initial este la <samp>NICIODATA</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Permisiunea utilizatorului pentru acest forum este <samp>NU</samp> iar valoarea totala a fost setata la NU asa ca initial este <samp>NICIODATA</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Permisiunea utilizatorului este <samp>DA</samp> dar cele totale <samp>NICIODATA</samp> nu pot fi suprascrise.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Permisiunea utilizatorului pentru acest forum este <samp>DA</samp> dar totalul <samp>NICODATA</samp> nu poate fi suprascris.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Permisiunea utilizatorului este <samp>DA</samp> care devine valoarea totala deoarece a fost setat la <samp>NU</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Permisiunea utilizatorului pentru acest forum este <samp>DA</samp> care devin valoarea totala pentru ca a fost setat la <samp>NU</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Permisiunea utilizatorului este <samp>DA</samp> iar valoarea totala este setata la <samp>DA</samp>, asa ca nu s-a schimbat nimic.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Permisiunea utilizatorului pentru acest forum este <samp>DA</samp> iar valoarea totala este setata la <samp>YES</samp>, asa ca nimic nu va fi schimbat.',
	'TRACE_WHO'								=> 'Cine',
	'TRACE_TOTAL'							=> 'Total',

	'USERS_NOT_ASSIGNED'			=> 'Niciun utilizator asociat acestui rol',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'este un membru al urmatoarelor grupuri predefinite',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'este un membru al urmatoarelor grupuri de utilizatori definite ',

	'VIEW_ASSIGNED_ITEMS'	=> 'Vizualizare elementele asociate',
	'VIEW_LOCAL_PERMS'		=> 'Permisiuni locale',
	'VIEW_GLOBAL_PERMS'		=> 'Permisiuni globale',
	'VIEW_PERMISSIONS'		=> 'Vizualizare permisiuni',

	'WRONG_PERMISSION_TYPE'	=> 'Tipul de permisiuni selectat este gresit.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Specificatiile de permisiune sunt intr-un format gresit, phpBB nu poate sa le proceseze corect.',
));

?>