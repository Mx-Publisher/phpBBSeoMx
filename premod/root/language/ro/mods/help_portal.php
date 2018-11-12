<?php
/**
*
* en/mods/help_portal
*
* Built with the FAQ Manager addon by EXreaction
* http://www.lithiumstudios.org/phpBB3/viewtopic.php?f=31&t=464
*
* @name help_portal.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_faq_manager.php,v 1.1.2 2011/10/10 portalxl group Exp $
*
* @copyright (c) 2007, 2011  Portal XL Group
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

$help = array(
	array(
		0 => '--',
		1 => '<img src="data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub//ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExKcppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7" width="16" height="14" alt="embedded folder icon" /> Introduction'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Portal XL 5.0?',
		1 => '<p>Portal XL 5.0 ~ Plain is a flexible and powerful portal solution which is dynamic, advanced and complete in features and configuration via phpBB3\'s ACP in a quick and efficient way. <br />
<br />Portal XL 5.0 ~ Plain is a phpBB3 value-ad that provides a portal front end to your phpBB 3.0.x forum application.<br />
<br />

<strong>Minimum Requirements</strong><br /><br />

Portal XL 5.0 ~ Plain has a few requirements which must be met before you are able to install and use it.<br /><br />

<ul>    
    <li>A webserver or web hosting account running on any major Operating System with support for PHP</li>
    <li>A SQL database system, one of:</li>
    <li>MySQL 3.23 or above (MySQLi supported)</li>
    <li>PHP 4.3.3+ (>=4.3.3, >4.4.x, >5.x.x, >6.0-dev (compatible)) with support for the database you intend to use.</li>
    <li>getimagesize() function need to be enabled</li>
    <li>These optional presence of the following modules within PHP will provide access to additional features, but they are not required.</li>
    <li>zlib Compression support</li>
    <li>Remote FTP support</li>
    <li>XML support</li>
    <li>Imagemagick support</li>
    <li>GD Support</li>
</ul>

The presence of each of these optional modules where checked during the installation process of phpBB 3.0.x already.<br /><br />

<strong>Available packages</strong><br />
With this release, there are two packages available.<br /><br />

<ul>
<li>  <strong>Plain Package</strong><br />
      This version is the basic Portal XL 5.0 without any third party mods on board and contains source- and english language files along phpBB 3.0.x.
</li>
<li>  <strong>Premod Package</strong><br />
      This version is the pre-modified Portal XL 5.0 which includes several third party modifications and contains source-and english language files along phpBB 3.0.x.
</li>
</ul>

Select whichever package is most suitable for you. Do not mix up both of this versions as you can expect really strange errors!<br />
Please ensure you read the <a href="http://www.portalxl.nl/forum/docs/PORTAL_XL_INSTALL.html">Portal XL 5.0</a> installation document before proceeding with installation or updates!</p>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Who wrote this Portal?',
		1 => '<p>This software (in its unmodified form) is produced, released and is copyright <a href="http://www.portalxl.nl/forum/">Portal XL Group</a>. It is made available under the GNU General Public License and may be freely distributed.</p>'
	),
	array(
		0 => '--',
		1 => '<img src="data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub//ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExKcppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7" width="16" height="14" alt="embedded folder icon" /> Portal XL 5.0 Installation'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Installation script Plain version!',
		1 => '<p>Description of the first six tabs of the installation script of our Portal XL 5.0 Plain version.<br />
    <br />
    Tab "<strong>INSTALL</strong>" is meant to create all new database entries for the Portal XL 5.0 Plain version and only those.<br />
    Tab "<strong>UPDATE</strong>" is meant for updating through a new version of Portal XL 5.0 Plain if there is one released.<br />
    Tab "<strong>REMOVE</strong>" will remove Portal XL 5.0 Plain without any remnants from your database.<br />
    Tab "<strong>BBCODE</strong>" will install custom bbCodes into your database.<br />
    Tab "<strong>CHMOD</strong>" will try to CHMOD  directories or files for you if  access is granted for such a procedure by your hosting company. </p>
<p>In case of returning through a plain phpBB3 choose tab "<strong>REMOVE</strong>", delete all files and folders in your forum directory except of file <strong>config.php</strong>, upload a fresh phpBB3 (remove file <strong>config.php</strong> and directory <strong>\install\</strong> from that package). <em style="color:#00F; font-weight:bold;">Important</em>: Refresh forums cache, styles cache and browsers cache. Ready!</p>
<p>ATTENTION: if you have attachments in your messages do <em><strong>NOT</strong></em> delete directory <strong>\files\</strong> in your forum root.<br />
    Users avatars are stored in directory <strong>\images\avatars\<strong>upload</strong>\</strong>, do <em><strong>NOT</strong></em> delete this folder if users have avatars defined.<br />
    Having additional Portal XL 5.0 Plain styles installed? Delete all additional styles except of both default once (prosilver, subsilver2) from ACP -> Styles first to overcome error messages like "Style data can not be found".<br />
</p>
<p>Note: as phpBB3 does CHMOD file config.php to 0644 (read only) by default, it is advised to change this to 0777 (write all) before invoking the Portal XL 5.0 installer to have that file writable during the installation procedure of Portal XL 5.0.</p>
<p>For Portal XL 5.0 Plain on *NIX related systems change the permissions on the following directories to be writeable by all (777 or -rwxrwxrwx within your FTP Client): <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/store/</strong> to <span style="color:#F00; font-weight:bold;">0777</span></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/cache/</strong> to <span style="color:#F00; font-weight:bold;">0777</span></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/files/</strong> to <span style="color:#F00; font-weight:bold;">0777</span></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/images/avatars/upload</strong> to <span style="color:#F00; font-weight:bold;">0777</span></code>, files <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/images/counter/ip.txt</strong> to <span style="color:#F00; font-weight:bold;">0666</span></code> and at least <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/config.php</strong> to <span style="color:#F00; font-weight:bold;">0644</span></code>. </p>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Installation script Premod version!',
		1 => '<p>The first six tabs of the installation script are as known from our <a href="faq.php?mode=portal#f1r0">Portal XL 5.0 Plain</a> version. 
<ul>		
	<li>Step of <strong>Tab "INSTALL"</strong> must have be done before installing the additional Portal XL 5.0 Premod database changes into your database.</li> 
	<li>If a recent Portal XL 5.0 Plain (Basic) version is installed into your database you can proceed with step <strong>"UPGRADE PREMOD"</strong>.</li>
</ul>    
    Tab seven "<strong>UPGRADE PREMOD</strong>" is meant to create all new database entries for the premod and only those.<br />
    Tab eight "<strong>UPGRADE REMOVE</strong>" is for removing those entries including them from the <em>standard</em> installation without leaving any remnant.<br />
</p><br />
<p>Note: as phpBB3 does CHMOD file config.php to 0644 (read only) by default, it is advised to change this to 0777 (write all) before invoking the Portal XL 5.0 installer to have that file writable during the installation procedure of Portal XL 5.0.</p>
<p><strong>Attention</strong>! Tab eight "<strong>UPGRADE REMOVE</strong>" will uninstall the Portal XL 5.0 Premod completely from your database.</p>
<strong>Uninstallation of Portal XL 5.0 Premod!</strong>
<p>In case of returning to a plain phpBB3 choose tab "<strong>UPGRADE REMOVE</strong>", delete all files and folders in your forum directory except <strong>config.php</strong>, upload a fresh phpBB3 (remove file <strong>config.php</strong> and directory <strong>\install\</strong> from that package). <em style="color:#00F; font-weight:bold;">Important</em>: Refresh forums cache, styles cache and browsers cache. Ready!</p>
<p>To get back to a standard Portal XL 5.0 Plain choose tab "<strong>INSTALL</strong>" to install the database changes again, delete all files and folders in your forum directory except of file <strong>config.php</strong>, upload a fresh phpBB3 (remove file <strong>config.php</strong> and directory <strong>\install\</strong> from that package) have the default files of Portal XL 5.0 Plain on hand for upload (remove directory <strong>\install\</strong> from that package) to replace the phpBB3 files with. <em style="color:#00F; font-weight:bold;">Important</em>: Refresh forums cache, styles cache and browsers cache. Ready!</p>
<p>ATTENTION: if you have attachments in your messages do <em><strong>NOT</strong></em> delete directory <strong>\files\</strong> in your forum root.<br />
    Users avatars are stored in directory <strong>\images\avatars\<strong>upload</strong>\</strong>, do <em><strong>NOT</strong></em> delete this folder if users have avatars defined.<br />
    Having additional Portal XL 5.0 Premod styles installed? Delete all additional styles except of both default once (prosilver, subsilver2) from ACP -> Styles first to overcome error messages like "Style data can not be found".<br />
</p>
<p>For Portal XL 5.0 Premod change the permissions on the following directories to be writeable by all (777 or -rwxrwxrwx within your FTP Client): <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/store/</strong> to <span style="color:#F00; font-weight:bold;">0777</span></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/cache/</strong> and all their sub folders to <span style="color:#F00; font-weight:bold;">0777</span></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/files/</strong> to <span style="color:#F00; font-weight:bold;">0777</span></code>,<code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/images/avatars/upload</strong> to <span style="color:#F00; font-weight:bold;">0777</span></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/dl_mod/thumbs/</strong> and all their sub folders to <span style="color:#F00; font-weight:bold;">0777</span></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/dl_mod/downloads/</strong> and all their sub folders to <span style="color:#F00; font-weight:bold;">0777</span></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/phpbb_seo/cache/</strong> to <span style="color:#F00; font-weight:bold;">0777</span></code> <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/gym_sitemaps/cache/</strong> to <span style="color:#F00; font-weight:bold;">0777</span></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/arcade</strong></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/arcade/gamedata</strong></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/arcade/games</strong></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/arcade/install</span></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/images/att_thumbs</strong></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/images/img_thumbs</strong></code>, <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/images/counter/ip.txt</strong> to <span style="color:#F00; font-weight:bold;">0666</span></strong></code> and at least <code style="color: #006600; font-weight: normal; font-family: \'Courier New\', monospace; border-color: #D1D7DC; border-width: 1px; border-style: solid; background-color: #FAFAFA;"><strong>/config.php</strong> to <span style="color:#F00; font-weight:bold;">0644</span></code>.</p>'
	),
	array(
		0 => '--',
		1 => '<img src="data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub//ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExKcppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7" width="16" height="14" alt="embedded folder icon" /> Portal XL 5.0 Set-up'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> General block switch settings',
		1 => 'There are seven settings possible here:<br /><br />
		<ul>
		<li><strong>Automatically picture resize (pixel):</strong> Resize of pictures using the img-tag in messages which are placed as portal news. Recommended value 400px. To not resize signatures increase the value accordingly to the width of your signature plus some extra pixels.</li>
		<li><strong>Limit of displayed on-line friends:</strong> Limit display of on-line friends in block online_friends.html to a certain value (default is 8).</li>
		<li><strong>Limit of displayed last visited users:</strong> Limit display of last visited users in block whos_online.html to a certain value (default is 5).</li>
		<li><strong>Sort order portal news messages:</strong> This switch will affect the display order of messages in blocks such as announcemts, news etc. Yes = Latest message/reply first, No = First topic first.</li>
		<li><strong>Board wide tool tips:</strong> Display board wide tool tips Yes/No? The mouse over effect which shows title descriptions of images/links etc.</li>
		<li><strong>Portal Drag and Drop options:</strong> Possible switches are Yes/No? Globally enable/disable the Drag and Drop function of blocks in portal/index.</li>
		</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Announcements settings',
		1 => 'There are two sections here:<br /><br />
Announcements settings
		<ul>
		<li><strong>Number of announcements on Portal:</strong> 0 means infinite.</li>
		<li><strong>Number of days to display the announcement:</strong> 0 means infinite.</li>
		<li><strong>Max length of announcements:</strong> This value counts the characters that will be allowed to be displayed. 0 means infinite.</li>
		<li><strong>Global announcements forum ID:</strong> Forum we pull the articles from (you MUST specify a forum ID), separate by comma for multi-forums, eg. 1,2,5. Do not leave this field empty, 0 is required than.</li>
		</ul>
Announcements pagination settings
		<ul>
		<li><strong>Article repository:</strong> Display pagination Yes/No?.<br />If enabled the article page numbers will be displayed under the last article in the block.</li>
		<li><strong>Show all types of messages:</strong> Display all messages Yes/No?<br />All types of articles such as announcement, global announcement, sticky and normal will be counted in for the news section. The announcement section will count in global announcements and announcements only.</li>
		<li><strong>Pagination permissions:</strong> Allow permissions Yes/No? This switch is not in use yet!</li>
		</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> News settings',
		1 => 'There are two sections here:<br /><br />
News settings
		<ul>
		<li><strong>Number of news on Portal:</strong> 0 means infinite.</li>
		<li><strong>Number of days to display the news:</strong> 0 means infinite.</li>
		<li><strong>Max length of news:</strong> This value counts the characters that will be allowed to be displayed. 0 means infinite.</li>
		<li><strong>Global news forum ID:</strong> Forum we pull the articles from (you MUST specify a forum ID), separate by comma for multi-forums, eg. 1,2,5. Do not leave this field empty, 0 is required than.</li>
		</ul>
News pagination settings
		<ul>
		<li><strong>Article repository:</strong> Display pagination Yes/No?.<br />If enabled the article page numbers will be displayed under the last article in the block.</li>
		<li><strong>Show all types of messages:</strong> Display all messages Yes/No?<br />All types of articles such as news, global news, sticky and normal will be counted in for the news section. The news section will count in global news and news only.</li>
		<li><strong>Pagination permissions:</strong> Allow permissions Yes/No? This switch is not in use yet!</li>
		</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Recent topics settings',
		1 => 'Here you can change your recent topics information and certain specific options:<br /><br />
		<ul>
		<li><strong>Limit of recent announcements/hot topics:</strong> 0 means infinite. Installation default is 10. Here you can set how much topics will be shown in several of the blocks.</li>
		<li><strong>Character limit for recent topic headers:</strong> 0 means infinite. Installation default is 10. This setting will shorten topic header descriptions in several blocks to not overstretch the block lay-out.</li>
		</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Wordgraph settings',
		1 => 'Here you can change your wordgraph information and certain specific options:<br /><br />
		<ul>
		<li><strong>How many words to display:</strong> 0 means infinite. Installation default is 50.</li>
		<li><strong>Include count values to display:</strong> Display count values per word eg. (25) Yes/No? . Installation default is No. This will show how often a word is counted in your database. The value will displayed after the word match.</li>
		<li><strong>Used aspect ratio word size:</strong> Installation default is 2. Change the aspect ratio (bigger/smaller) word size (default=4). This setting is relative to the value of displayed words. The more words, the more aspect ratio you can choose to make the words bigger.</li>
		</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Paypal settings',
		1 => 'Here you can change your Paypal information and certain specific options:<br /><br />
		<ul>
		<li><strong>Display paypal center:</strong> Display this block Yes/No?</li>
		<li><strong>Display paypal small:</strong> Display this block Yes/No?</li>
		<li><strong>Paypal account to use:</strong> Enter your Paypal e-mail address you used for your account eg. xxx@xxx.com.</li>
		</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Attachments settings',
		1 => 'Here you can change your attachments information and certain specific options:<br /><br />
		<ul>
		<li><strong>Limit of displayed attachments:</strong> 0 means infinite. Installation default is 10. This value affects several of the used blocks to show how much rows of information in a certain block will be displayed.</li>
		</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Latest members settings',
		1 => 'Here you can change your latest members information and certain specific options:<br /><br />
		<ul>
		<li><strong>Limit of displayed latest members:</strong> 0 means infinite. Installation default is 10. This value show how much rows of members will be displayed in the block.</li>
		</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Poll/Survey settings',
		1 => 'Here you can change your poll information and certain specific options:<br /><br />
		<ul>
		<li><strong>Display poll from which topic ID:</strong> Installation default is 0. Topic ID (topic number) that holds the actual poll which you would like to display the info from, set to 0 (do not leave that field empty) to pull nothing.</li>
		<li><strong>Display poll from which forum ID:</strong> Installation default is 2. Forum ID (forum number) that holds the actual poll which you would like to display the info from, set to 0 (do not leave that field empty) to pull nothing.</li>
		<li><strong>Display poll from which post ID:</strong> Installation default is 0. Post ID (post number) that holds the actual poll which you would like to display the info from, set to 0 (do not leave that field empty) to pull nothing.</li>
		</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Visiting Bots settings',
		1 => 'Here you can change your visiting bots information and certain specific options:<br /><br />
		<ul>
		<li><strong>How many bots to display:</strong> 0 means infinite. Installation default is 8.</li>
		</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Most poster settings',
		1 => 'Here you can change your most poster information and certain specific options:<br /><br />
		<ul>
		<li><strong>How many most posters to display:</strong> 0 means infinite. Installation default is 8.</li>
		</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Welcome settings',
		1 => 'Here you can change your most poster information and certain specific options:<br /><br />
		<ul>
		<li><strong>Welcome message guest users:</strong> Change the welcome messages for guest users. Max. 2000 characters (html allowed)! All text after that limit will be cut off automatically.</li>
		<li><strong>Welcome message registered users:</strong> Change the welcome messages for registered users. Max. 2000 characters (html allowed)! All text after that limit will be cut off automatically.</li>
		</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Weather settings',
		1 => 'Weather settings for wetter.com from Germany
		<ul>
		<li><strong>Display weather for German wetter.com:</strong> Installation default is No.</li>
		<li><strong>Your zip code:</strong> Enter your local zip code here to display your area weather from German wetter.com</li>
		</ul>
Weather settings for alternate weather sites, you can define 3 different site in each of the three windows.
		<ul>
		<li><strong>Your alternate weather URL:</strong> Paste your complete weather URL inhere to link to your alternate area weather. Leave empty for no display.</li>
		</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Scroll Message',
		1 => 'The marquee tag is a non-standard HTML markup element type which causes text onscreen to scroll from right to left across the screen. The default width of the MARQUEE element is equal to the width of its parent element.<br /><br />
		<ul>
		<li><strong>Display scroll message?:</strong> Display this block Yes/No? Installation default is Yes.</li>
		<li><strong>Display scroll/marquee effect?:</strong> Display this block Yes/No? Installation default is Yes.</li>
		<li><strong>Text color:</strong> HEX or named colors are allowed such as #ffffff for white, or color names like vilolet. Default is #ff0000.</li>
		<li><strong>Font size:</strong> Font size for the text in pixel. Default is 10px.</li>
		<li><strong>Scroll direction:</strong> Scroll direction for the text. This attribute controls the direction of scrolling. Permissible values are left, right, up and down specifying the end of the box that the scroll starts from.</li>
		<li><strong>Scroll amount:</strong> This controls the amount of movement (in pixels) between the successive displays that give the impression of animation.</li>
		<li><strong>Scroll delay:</strong> This controls the delay (in milliseconds) between the successive displays that give the impression of animation.</li>
		<li><strong>Scroll align:</strong> This tag can take one of the values top, middle and bottom. It controls the positioning of the marquee display box relative to the current text in exactly the same manner as the img tag\'s align attribute.</li>
		<li><strong>Scroll behavior:</strong> This tag controls the behaviour of the displayed text. There are three possible values. Text scrolling starts as soon as the page is downloaded, not when the user firsts scrolls the marquee into view.
                    <br /><strong>Options</strong>:
                    <br /><strong>~</strong> scroll text scrolls across display and re-appears from the other end when it has disappeared from one end. This is the default behaviour.
                    <br /><strong>~</strong> slide this is similar to scroll except that when the sliding text reaches the far end of the box, it disappears and restarts at the starting end of the box. If the display is not looping then the text remains positioned at the far end of the box.
                    <br /><strong>~</strong> alternate text "bounces" between the ends of the box.</li>
		<li><strong>Scroll bgcolor:</strong> This tag controls the background colour of the display box.</li>
		<li><strong>Scroll height:</strong> This controls the height of the display box.</li>
		<li><strong>Scroll width:</strong> This controls the width of the display box.</li>
		<li><strong>Scroll hspace:</strong> This controls the horizontal space around the display box.</li>
		<li><strong>Scroll vspace:</strong> This controls the vertical space around the display box.</li>
		<li><strong>Scroll loop:</strong> The value of this attribute controls the number of display cycles. The values -1 and infinite both mean continue indefinitely.</li>
		</ul>
Scrollable Text.
		<ul>
		<li><strong>Scroll message text:</strong> Add/change a scrollable message here. Up to 1000 characters plain text is possible, html is allowed, cookies are enabled! All text after the character limit will be cut off automatically.</li>
		</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Counter settings',
		1 => 'Settings for animate digits IP tracking counter.<br /><br />
Counter display settings:<br />
		<ul>
		<li><strong>Counter display mode:</strong> Select display modes for counter. Note: You have always to click/activate Display as images or Display as text, before saving changes made to other settings below.</li>
		</ul>
Counter digits settings:<br />
		<ul>
		<li><strong>Digits path:</strong> Path of digits under your phpBB root dir. Default is images/counter/digits</li>
		<li><strong>Animate digits path:</strong> Path of animate digits under your phpBB root dir. Default is images/counter/digits_ani</li>
		<li><strong>Number of digits:</strong> Number of digits which you want to display in counter.</li>
		<li><strong>Digits width:</strong> Width of digits.</li>
		<li><strong>Digits height:</strong> Height of digits.</li>
		</ul>
Counter IP blocking settings:<br />
		<ul>
		<li><strong>Allow blocking IP:</strong> Allow tracking/blocking IP addresses from counter. This option will make your counter work correctly: hits will not increase if any users refresh their browser in blocking time which you can setting below.</li>
		<li><strong>IP blocking time:</strong> Number of seconds the counter tracking/blocking every IP addresses.</li>
		<li><strong>IP log file:</strong> Path of IP log file under your phpBB root dir. Default is images/counter/ip.txt. Required if you enabled Allow blocking IP option.</li>
		</ul>'
	),
	array(
		0 => '--',
		1 => '<img src="data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub//ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExKcppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7" width="16" height="14" alt="embedded folder icon" /> Portal XL 5.0 Blocks Set-up'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Block management portal',
		1 => '<p>From this form, you can create/edit/move/delete blocks and block items for portal view. The portal does have three sections of powerful block management which do behave apart from each other. That way you have the ability to have different blocks on different forum pages like portal, index, viewforum/viewtopic. All directions are allowed to move your blocks into. There are five columns available to place your blocks in, top, left, centre, right and bottom. The positions of different blocks will have the same arrangement on public page, as you will see on your setup page.</p>
Edit/change a column width:
<ul>
    <li><strong>Display column layout on portal:</strong> Enable/Disable Yes/No? This main switch is able to switch on/off the left and right columns by one click without the use of the options below, centre column will resize to full forum width.</li>
    <li><strong>Left column width:</strong> Change the width of left portal column in pixel, recommended value is 180. For styles using a special mark up it can be necessary to increase or decrease that value.</li>
    <li><strong>Left column active:</strong> Enable/Disable left portal column Yes/No?</li>
    <li><strong>Right column width:</strong> Change the width of right portal column in pixel, recommended value 180. For styles using a special mark up it can be necessary to increase or decrease that value.</li>
    <li><strong>Right column active:</strong> Enable/Disable right portal column Yes/No?</li>
</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Description of the block management icons',
		1 => '<p>The available icons will differ on different blocks. The centre block will carry out all icons as that column does have the ability to move out in any direction immediately.</p>
<ul>
    <li><img src="./adm/images/icon_edit.gif" width="16" height="16" alt="Edit Block" /> Edit Block</li>
    <li><img src="./adm/images/icon_move_left.gif" width="16" height="16" alt="Move to column on it left" /> Move to column on its left</li>
    <li><img src="./adm/images/icon_up_disabled.gif" width="16" height="16" alt="Option is disabled for the moment" /> Option is disabled for the moment</li>
    <li><img src="./adm/images/icon_down.gif" width="16" height="16" alt="Move down the block one row" /> Move down the block one row</li>
    <li><img src="./adm/images/online.png" width="16" height="16" alt="Block enabled" /> Block enabled (using resources). </li>
    <li><img src="./adm/images/offline.png" width="16" height="16" alt="Block disabled" /> Block disabled (not using resources). </li>
    <li><img src="./adm/images/icon_move_top.gif" width="16" height="16" alt="Move up one step to the upper column" /> Move up one step to the upper column</li>
    <li><img src="./adm/images/icon_move_bottom.gif" width="16" height="16" alt="Move down one step to lower column" /> Move down one step to lower column</li>
    <li><img src="./adm/images/icon_move_right.gif" width="16" height="16" alt="Move to column on its right" /> Move to column on its right</li>
    <li><img src="./adm/images/icon_delete.gif" width="16" height="16" alt="Delete Block" /> Delete Block</li>
</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Edit/Create a block',
		1 => '<p>The main creation/edit part to have pre-defined or custom blocks on hand for use in any of the block sections</p>
<ul>
    <li><strong>Name of block:</strong> Unique name for your block. This name will be displayed in Title of your block on the portal\'s frontpage.</li>
    <li><strong>Image displayed in block header:</strong> Choose a icon to use in front of the block description. If you don\'t like a icon on that place choose blank.gif than.</li>
    <li><strong>Available mini icons:</strong> Preview of available mini icons you can choose from (images have placed in the folder <strong>/portal/images/icon_menu/</strong> if you would like to add more mini icons). Recommended icon size is 16px x 16px. Allowed file extensions are .gif, .jpg and .png.</li>
    <li><strong>Content:</strong> Content of the custom block content goes inhere. Html is allowed in this box. If you use this field to customize your portal block you must choose blank_custom_block.html as Html file from the drop down option to display the content in a block. blank_custom_block.html can be chosen as often as you need.</li>
    <li><strong>Html file:</strong> Select a pre-defined block (*.html file) for block use.</li>
    <li><strong>Position:</strong> Define to which column this block should be added to. Possible options are top, left, center, right and bottom.</li>
    <li><strong>Block permissions:</strong> Set who can see the block. Possible options are All, Registered, Moderator, Administrator and Guest.</li>
    <li><strong>Block Activation:</strong> Display this block Yes/No? Note: if a block is disabled no server resources should be used due to the included automatic block switch management.</li>
</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Creating custom blocks of your own',
		1 => '<p>The block management is written that way you can easily add your own made blocks into. To clear it more out follow the guide below.</p>
<ul>
    <li>The custom php block goes into directory <strong>\portal\block\</strong>, like <strong>name-of-the-new-php-file.php</strong>.</li>
    <li>The corresponding html block into directory <strong>\template\portal\block\</strong>, like <strong>name-of-the-new-html-file.html</strong> of your style (place the new html file in all styles you have installed, otherwise you will get a error message of missing template file when certain style is used by other users).</li>
    <li>Hint: use <strong>\portal\block\blank_block.php</strong> to fill with your code, choose a unique name for your custom block and save, use the same file name for both block files changing the extension only.</li>
    <li>In the \'body\' part of your new php file change <strong>blank_block.html</strong> against <strong>name-of-the-new-html-file.html</strong>.</li>
    <li>When done your custom block will be available in portal\'s block management from on that moment.</li>
    <li>Important: refresh cache if needed!</li>
</ul>'
	),
	array(
		0 => '--',
		1 => '<img src="data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub//ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExKcppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7" width="16" height="14" alt="embedded folder icon" /> Portal XL 5.0 Menus Set-up'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Navigation Menu',
		1 => '<p>From this form, you can create/edit/move/delete a custom Menu Item. Icons for use in this menu are placed in directory <strong>/portal/images/icon_menu/</strong>. Recommended icon size is 16px x 16px. Allowed file extensions are .gif, .jpg and .png. Add as many icons as you like but keep in mind the preview will show them all, which will stretch the Available mini icons window in the edit menu or add menu section. Path is relative to the forums root directory, i.e. "<strong>http://www.yourdomain.com/</strong>" for a external link. Internal links can be added like "<strong>portal.php</strong>" to call a certain file from your site, or "<strong>memberlist.php?mode=leaders</strong>" or "<strong>faq.php?mode=portal</strong>" etc. to call a certain function of your forum from out of the navigation menu.</p>
<ul>
    <li><strong>Image displayed in Menu links:</strong> Choose a icon from the drop down to use in front of the menu link. If you don\'t like a icon on that place choose <strong>blank.gif</strong> than.</li>
    <li><strong>Available mini icons:</strong> Preview of available mini icons you can choose from (images have placed in folder <strong>/portal/images/icon_menu/</strong> if you like to add more mini icons).</li>
    <li><strong>Link name displayed in Portal menu:</strong> This will be the name of the click able menu link.</li>
    <li><strong>Url of opening window:</strong> The url can be written as followed. Example: index.php for internal links, http://google.com for external links.</li>
    <li><strong>Determines who can view the link on the portal:</strong> Set who can see the link. Possible options are All, Registered, Moderator, Administrator and Guest.</li>
    <li><strong>Open in:</strong> Determines how this link will be opened. <strong>Yes</strong> = in new window, <strong>No</strong> = in same window</li>
</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Create a Menu placeholder using HTML',
		1 => '<p>A Menu place holder is very simple to realize by embedding html into the "Link name displayed in Portal menu:" field.</p>
			  <p>When your Menu place holder is created, move the new entry up or down into the desired position.</p>'
	),
	array(
		0 => '--',
		1 => '<img src="data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub//ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExKcppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7" width="16" height="14" alt="embedded folder icon" /> Portal XL 5.0 Quotations Set-up'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Quotation management',
		1 => '<p>From this form, you can create/edit/delete Quotes. You can add as many quotations as you like to show in this block, but there is a limit for random display of 1 quote set.</p>
Adding or editing a quote
<ul>
    <li><strong>Quotation:</strong> Text of your quotation goes inhere.</li>
    <li><strong>Author:</strong> Name of the original author, place Unknown if not known.</li>
</ul>'
	),
	array(
		0 => '--',
		1 => '<img src="data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub//ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExKcppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7" width="16" height="14" alt="embedded folder icon" /> Portal XL 5.0 Links Set-up'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Links management',
		1 => '<p>From this form, you can create/edit/move/delete a custom link Item. Icons for use in this menu are placed in directory <strong>/portal/images/icon_links/</strong>. Recommended icon size is 16px x 16px. Allowed file extensions are .gif, .jpg and .png. Add as many icons as you like but keep in mind the preview will show them all, which will stretch the Available mini icons window in the edit menu or add menu section. Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/" for a external link.</p>
Edit link
<ul>
    <li><strong>Image displayed in links block:</strong> Choose a icon to use in front of the link.</li>
    <li><strong>Available mini icons:</strong> Preview of available mini icons you can choose from (images have placed in folder <strong>/portal/images/icon_menu/</strong> if you like to add more mini icons).</li>
    <li><strong>Link name displayed in portal links block:</strong> This will be the name of the click able link.</li>
    <li><strong>Url of opening window:</strong> The url can be written as followed. Example: index.php for internal links, http://google.com for external links.</li>
    <li><strong>Determines who can view the link on the portal:</strong> Set who can see the link. Possible options are All, Registered, Moderator, Administrator and Guest.</li>
</ul>'
	),
	array(
		0 => '--',
		1 => '<img src="data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub//ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExKcppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7" width="16" height="14" alt="embedded folder icon" /> Portal XL 5.0 Banners Set-up'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Partners management 88x31px',
		1 => '<p>From this form you can create/edit/delete a partners Items. Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/" for a external link. Internal links to banners can be added like "<strong>portal/images/banners/88x31/</strong>yourdomain.com.gif". Max image size 88x31 pixel, bigger images will be resized to that value in the portal block. You can add as much partners as you like to show in this block, set your limit for random display of the logo\'s below.</p>
Displayed simultaneously banners
<ul>
    <li><strong>Displayed simultaneously banners:</strong> Set how many banners will be shown in this block by random.</li>
</ul>
Adding or editing a partner
<ul>
    <li><strong>Site url:</strong> Partner Site url, Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/".</li>
    <li><strong>Logo url:</strong> Partner Logo url, Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/".</li>
    <li><strong>Description:</strong> Partner description such as main directive or thema of that site.</li>
</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Banners management horizontal 400x60px',
		1 => '<p>From this form, you can create/edit/delete a banners Items. Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/", like "<strong>portal/images/banners/400x60/</strong>yourdomain.com.gif" for horizontal banners. Max image size 400x60px, bigger images will be resized to that value. You can add as many banners as you like to show in this block, there is a limit for random display of 1 logo set. ACP view of banners is resized to half of the real size. Public view of banners is set to 400px x 60px automatically.</p>
<ul>
    <li><strong>Site url:</strong> Banner Site url, Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/".</li>
    <li><strong>Logo url horizontal 400x60px:</strong> Banner Logo url, Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/".</li>
    <li><strong>Description:</strong> Banner description such as main directive or theme of that site.</li>
</ul>'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Banners management vertical 130x600px',
		1 => '<p>From this form, you can create/edit/delete a banners Items. Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/", like "<strong>portal/images/banners/130x600/</strong>yourdomain.com.gif" for vertical banners. Max image size 130x600px, bigger images will be resized to that value in the portal block. You can add as many banners as you like to show in this block, there is a limit for random display of 1 logo set. ACP view of banners is resized to half of the real size. Public view of banners is set to 130px x 600px automatically.</p>
<ul>
    <li><strong>Site url:</strong> Banner Site url, Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/".</li>
    <li><strong>Logo url vertical 130x600px:</strong> Banner Logo url, Path is relative to the forums root directory, i.e. "http://www.yourdomain.com/".</li>
    <li><strong>Description:</strong> Banner description such as main directive or theme of that site.</li>
</ul>'
	),
	array(
		0 => '--',
		1 => '<img src="data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub//ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExKcppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7" width="16" height="14" alt="embedded folder icon" /> Portal XL 5.0 Mods Page Set-up'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Manage Mod\'s Database',
		1 => '<p>From this form you can maintain your Mod\'s Database, create/edit/delete Mod\'s from here. This section gives credits to authors which mod is added as value add through the forum setup.</p>
Adding or editing a mod
<ul>
    <li><strong>Mod Title:</strong> Short but descriptive title of the Mod.</li>
    <li><strong>Version:</strong> Version number eg. 0.4B5.</li>
    <li><strong>Version Type:</strong> Alpha, Beta, Dev or RC*.</li>
    <li><strong>Description:</strong> Description of your Mod goes inhere. A clear description can be taken from a mod\'s install description most of the time.</li>
    <li><strong>Author:</strong> Name of the original author, place Unknown if not known.</li>
    <li><strong>URL:</strong> Specify a site URL for this modification (link to mod -description or -topic).</li>
    <li><strong>Download:</strong> Specify a download URL for this modification (direct link to download from).</li>
</ul>'
	),
	array(
		0 => '--',
		1 => '<img src="data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub//ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExKcppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7" width="16" height="14" alt="embedded folder icon" /> Portal XL 5.0 Forum Adds Set-up'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Forum Advertisement management',
		1 => '<p>The forum advertisement\'s can be managed here. You can add as many advertisement\'s as you like to show in viewtopic, all entries will be displayed randomly.</p>
Add advertisement
<ul>
    <li><strong>Name:</strong> Name of the advertisement which should be used as header description.</li>
    <li><strong>Ad\'s content:</strong> Content for use in the advertisement. Use of smiles and html is allowed here.</li>
    <li><strong>Forums:</strong> Fill in the ID of the forum or forums that can show this advertisement, several forums must be separated by a comma.</li>
    <li><strong>Forums:</strong> Show in all Forums? Yes/No?</li>
    <li><strong>Active:</strong> Show the advertisement? Yes/No/Guest only?</li>
    <li><strong>Ad\'s views:</strong> The amount of views for this advertisement. Reset to 1 if the value of max. views is reached to enable that announcement again. Example: given max. views is 100, the counter will count till 101 and will disable that announcement automatically.</li>
    <li><strong>Max. views:</strong> The maximum amount of views for this advertisement. If set to 100 the views counter will count till 101 and will disable that announcement automatically.</li>
    <li><strong>Position:</strong> From which position in viewtopic screen should the advertisement to be displayed? Possible choices are "After the first post", "After each post", "Above the posts" and "Under the posts".</li>
</ul>'
	),
	array(
		0 => '--',
		1 => '<img src="data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub//ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExKcppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7" width="16" height="14" alt="embedded folder icon" /> Portal XL 5.0 News Feeds Set-up'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Manage RSS Feed\'s Database',
		1 => '<p>From this form you can maintain your RSS Feed\'s Database, create/edit/delete rivers of news Feed\'s from here to show on portal\'s, index or viewforum/viewtopic page.</p>
General feeds settings
<ul>
    <li><strong>Cache time:</strong> Maximum age of the cache file for a feed before it is updated, in seconds (default is 1 hour = 60 minutes = 3600 seconds). Default is 3600.</li>
    <li><strong>Items limit:</strong> Maximum items/rows to show for a single feed. Default is 5.</li>
    <li><strong>Random limit:</strong> Maximum feeds to randomize in the block. Default is 4.</li>
</ul>
Adding or editing a feed
<ul>
    <li><strong>Feed Title:</strong> Short but descriptive title of the Feed which will be show as header description.</li>
    <li><strong>Feed URL:</strong> Specify a site URL for this feed (link to feed -description or -topic). This must be a valid xml or rss link.</li>
    <li><strong>Show Yes/No?:</strong> Show this feed Yes/No?:</li>
    <li><strong>Show this feed on which position?:</strong> Specify on wich side of the RSS block this entry will appear. Left or right position.</li>
</ul>'
	),
	array(
		0 => '--',
		1 => '<img src="data:image/gif;base64,R0lGODlhEAAOALMAAOazToeHh0tLS/7LZv/0jvb29t/f3//Ub//ge8WSLf/rhf/3kdbW1mxsbP//mf///yH5BAAAAAAALAAAAAAQAA4AAARe8L1Ekyky67QZ1hLnjM5UUde0ECwLJoExKcppV0aCcGCmTIHEIUEqjgaORCMxIC6e0CcguWw6aFjsVMkkIr7g77ZKPJjPZqIyd7sJAgVGoEGv2xsBxqNgYPj/gAwXEQA7" width="16" height="14" alt="embedded folder icon" /> Portal XL 5.0 Acronyms Set-up'
	),
	array(
		0 => '<img src="data:image/gif;base64,R0lGODlhCwALAIABAP8AAP///yH5BAEAAAEALAAAAAALAAsAAAIRjI+pB7DW2oox0cquxfv5bxQAOw==" width="10" height="10" alt="" border="0" /> Acronym and abbreviation management',
		1 => '<p>From this form, you can create/edit/delete acronyms. Acronyms and initialisms are abbreviations, such as NATO, laser, and IBM, that are formed using the initial letters of words or word parts in a phrase or name. Acronyms and initialisms are usually pronounced in a way that is distinct from that of the full forms for which they stand: as the names of the individual letters (as in IBM), as a word (as in NATO), or as a combination (as in IUPAC). You can add as many acronyms as you like to process.</p>
General acronym settings
<ul>
    <li><strong>Allow acronyms:</strong> Activate acronyms boardwide Yes/No?</li>
</ul>
Adding or editing a acronym
<ul>
    <li><strong>Acronym:</strong> Initial letters of words or word parts of your acronym goes inhere.</li>
    <li><strong>Acronym phrase:</strong> Phrase output of the above acronym.</li>
    <li><strong>Url to link to:</strong> Ad here a link the acronym should point to.</li>
</ul>'
	),
);

?>