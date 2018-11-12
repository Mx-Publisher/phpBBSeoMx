<?PHP
/** 
*
* portal_xl_install.php [English]
*
* @package language for phpBB3 Portal XL
* @version $Id: portal_xl_install.php,v 2.0 2011/08/30 portalxl group Exp $
* @copyright (c) 2011 PortalXL Group
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

$lang = array_merge($lang, array(
	// Portal XL Convert Procedure
	'PORTAL_CONVERT'				=> 'Portal XL Converting',
	'PORTAL_CONVERT_BASIC_FINISHED'	=> 'The database tables are now updated for the new text functions of the phpBB 3.<br />Not the script will convert the text themselves.<br /><br />To avoid timeout errors and malfunctions while converting the texts, the script will permanently restart itself. Please do not close the browser until the script have finished the conversion.<br /><br />But if you will get an interruption of this procedure, restart the script again to continue.<br /><br />Please be patient while the script will convert the texts and wait for the closing message, because in addition for the number of texts which must be converted, the script may take some minutes to do all the work.',
	'PORTAL_CONVERT_DATABASE'		=> 'Convert database',
	'PORTAL_CONVERT_NOT_POSSIBLE'	=> '<strong>Conversion not possible!</strong><br /><br />This release of Portal XL can not be converted to Portal XL 4.0 Premod as it seem not to be on recommended state.<br /><br />The release must have as minimum Portal XL <strong>Premod RC2</strong><br />Your current release carries version Portal XL <strong>%1$s</strong>.<br /><br />If your release does carrie out at least Portal XL Premod RC2, you will be able to update after.',
	'PORTAL_CONVERT_PROCEDURE'		=> 'Currently %1$s from %2$ datasets are updated.<br /><br />Please click on the button below to continue or wait a moment till the script restarts itself.',
	'PORTAL_CONVERT_TODO'			=> 'From on here all existing database tables in use by Portal XL 5.0 Plain will be converted to the latest workflow of Portal XL 4.0 Premod RC5.<br /><br />To start the conversion procedure, click on the button below.<br /><br />Please be patient while proceeding, because it can take some time to the number of conversions to make.',
	'PORTAL_FINAL_CONVERT_STEP'		=> 'Conversion of all existing database tables in use by Portal XL is finished now.<br />To finish the complete procedure and using the MOD at the end there is one last step needed to do. Please click for this on the button below to do this last part.',

	// Portal XL Installation Procedure
	'PORTAL_INSTALL'				=> 'Portal XL Installation',

	'PORTAL_INSTALL_EXPLAIN'		=> '<p>Welcome to the Portal XL Installation Wizard<br />This is the installation part of Portal XL basic part. Your insane crazy ass-kicking portal system for phpBB 3.0.x.</p> 
	<p>In order for this installation to work successfully the following procedures are recommended:</p>
	<ul>
		<li>Make sure you did copy/upload/overwrite from archive all content of directory <strong><span style="color:#FF0000;">\root\</span></strong> to your phpBB 3.0.x root eg. <strong><span style="color:#FF0000;">\forum\</span></strong> only (you did already)!</li>
	</ul>
	<ul>
		<li><em><strong><span style="color:#009900;">File permissions CHMOD</span></strong></em><br />
		<em><strong>After installation</strong> you should check all CHMOD\'s on files and directories for *NIX related servers.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> into</span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">777</span> into</span></strong> (Some servers require 0755 executable not 0777 writable):<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> and all their subfolders<br />
		<strong>/dl_mod/downloads</strong> and all their subfolders<br />
		<strong>/gallery/images</strong> and all their subfolders<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		<strong>/images/att_thumbs</strong><br />
		<strong>/images/img_thumbs</strong><br />
		</li>
	</ul>
	<p>To begin the installation press the "Proceed to next step" button below.</p>',
	
	'PORTAL_INSTALL_NEXT'			=> 'The database tables are now successfull created.<br /><br />Click on the button below to run the next step for writing the default values into these tables.',
	'PORTAL_INSTALL_FINISHED'		=> 'Portal XL (Basic) Installation finished',
	'PORTAL_INSTALL_INTRO'			=> 'Welcome to the Portal XL (Basic) Installation',

	'PORTAL_INSTALL_FINISHED_EXPLAIN'	=> '
		<p>You have now successfully installed Portal XL 5.0 Basic %1$s. From here, you will be guided finishing the Portal XL Premod installation part.</p>
		<h2>Go live with your Portal XL in a few seconds!</h2>
		<p>Take some time to examine the options available to you. Remember that help is available online via the <a href="http://www.portalxl.nl/forum/">Portal XL Home</a> and the <a href="http://www.portalxl.nl/forum/index.php">support forums</a>.</p><br />
		<p><strong style="text-transform: uppercase; font-size:13px; color: #FF0000;">Attention:</strong></span> To complete this installation you have to click the button below to proceed installing the Portal XL Premod part now.</p>',

	'PORTAL_INSTALL_NOT_POSSIBLE'	=> '<strong>Installation not possible!</strong><br /><br />The script found an existing installation, so you can not use the installation script again.',

	'PORTAL_OVERVIEW_BODY'			=> 'This is the newest <strong>Free</strong> release of phpBB3 Portal XL which is a flexible and powerful portal solution for your phpBB 3.0.x forum with lots of great and advanced features.<br /><br /> 
	This portal strives to be highly customizeable aswell as include a useful amount of addons. At the same time, we will offer a quick and efficient alternative to other phpBB3 related portal\'s. We do not claim to become a reference portal or mod for phpBB3 and we don\'t maintain to be professionals. We are modding this just for fun in our spare time, even if we are trying to do our best to have a professional looking package with as few bugs as possible and without need of any scripting knowledge required from the admin.
	<p>Memorable release data of phpBB3 Portal XL
	<ul>
		<li>Portal XL 5.0 RC4-Plain (26-02-2008 first public release Plain (basic) version by user request)</li>
		<li>Portal XL 5.0 Plain (12-04-2008)</li>
		<li>Portal XL 5.0 Plain 0.1 (31-05-2008)</li>
		<li>Portal XL 5.0 Plain 0.2 (31-10-2008)</li>
		<li>Portal XL 5.0 Plain 0.2 (01-06-2009) update to pbpBB 3.0.5</li>
		<li>Portal XL 5.0 Plain 0.2 (24-11-2009) update to pbpBB 3.0.6</li>
		<li>Portal XL 5.0 Plain 0.2 (02-03-2010) update to pbpBB 3.0.7</li>
		<li>Portal XL 5.0 Plain 0.2 (21-11-2010) update to pbpBB 3.0.8</li>
		<li>Portal XL 5.0 Plain 0.2 (12-07-2011) update to pbpBB 3.0.9</li>
		<li>Portal XL 5.0 Plain 0.2 (05-01-2012) update to pbpBB 3.0.10</li>
	</ul>
	<ul>
		<li>Portal XL 5.0 Premod 0.2 (05-06-2009) update to pbpBB 3.0.5</li>
		<li>Portal XL 5.0 Premod 0.3 (22-11-2009) update to pbpBB 3.0.6</li>
		<li>Portal XL 5.0 Premod 0.3 (01-03-2010) update to pbpBB 3.0.7</li>
		<li>Portal XL 5.0 Premod 0.3 (28-11-2010) update to pbpBB 3.0.8</li>
		<li>Portal XL 5.0 Premod 0.4 (01-08-2011) update to pbpBB 3.0.9</li>
		<li>Portal XL 5.0 Premod 0.4 (08-01-2012) update to pbpBB 3.0.10</li>
	</ul>
	</p><br />Please choose from the available tabs what you want to do.',
	
	'PORTAL_SQL_UPDATE_DONE'		=> '<strong>Done database action:</strong><br />',

	'PORTAL_SUB_SUPPORT'			=> 'General Portal Support',
	'PORTAL_SUPPORT_BODY'			=> 'Support will be provided for the current stable release of Portal XL 5.0 Premod, free of charge. <p>This includes:</p><p><ul><li>installation</li><li>configuration</li><li>technical questions</li><li>problems relating to potential bugs in the software</li></ul></p><p>Usage of Beta-Versions is limited recommended. If there are updates, it\'s recommended to update as soon as possible.</p><p>Support is given on: </p><ul><li><a href="http://www.portalxl.nl/forum/" target="_blank">www.portalxl.nl</a></li></ul><br />As we are unable to know what is changed/modded to your existing phpBB3 setup before, we are not able in any way to support custom changes. Remember, using this package can lead to lost of already changed code or added mod\'s.',

	// Portal XL Update Procedure
	'PORTAL_UPDATE'					=> 'Portal XL Update',
	'PORTAL_UPDATE_SUCCESS'			=> 'Congratulation!<br />The update of the database settings from the Portal XL is finished.<br /><br />You can now go on to install the remaining parts from the install instruction of Portal XL into your forum.<br /><br />
		You have copied/uploaded all Premod 0.4 files already in place? If not do it now! Do not worry about remnants of 0.3. All essential files will be overwritten/replaced.<br /> Note: Links below will open in a new window. Ignore possible errors. Close every window when ready.
		<ul>
			<li>1) Update the phpBB 3.0.10 database <a href="database_update.php" target="_blank"><strong>[ phpBB 3.0.10 database ]</strong></a>.</li>
			<li>2) Install the new KB mod <a href="../kb.php" target="_blank"><strong>[ KB Installation ]</strong></a>. File premod_mini_kb_convertor.php is in your forum main directory.</li>
			<li>3) Update the download mod database <a href="database_download.php" target="_blank"><strong>[ Download mod database ]</strong></a>.</li>
			<li>4) Update the auto dnsbl mod database <a href="database_auto_dnsbl.php" target="_blank"><strong>[ Auto dnsbl mod ]</strong></a>.</li>
			<li>5) Update phpBB Gallery mod <a href="../install_gallery/index.php" target="_blank"><strong>[ Update phpBB Gallery ]</strong></a>.</li>
			<li>6) Update arade mod <a href="../install_arcade/index.php" target="_blank"><strong>[ Update Arcade ]</strong></a>.</li>
		</ul>
		When ready, please delete folders <strong>/install_arcade/</strong>, <strong>/install_gallery/</strong> and <strong>/install_portal/</strong> from your forum root to avoid security issues.
		<br /><br /><a href="../portal.php"><strong>[ Go to portal ]</strong></a><br />',
	'PORTAL_UPDATE_BASIC_FINISHED'	=> 'The database tables are now updated for the new text functions of the phpBB 3.<br />Not the script will convert the text themselves.<br /><br />To avoid timeout errors and malfunctions while converting the texts, the script will permanently restart itself. Please do not close the browser until the script have finished the conversion.<br /><br />But if you will get an interruption of this procedure, restart the script again to continue.<br /><br />Please be patient while the script will convert the texts and wait for the closing message, because in addition for the number of texts which must be converted, the script may take some minutes to do all the work.',
	'PORTAL_UPDATE_DATABASE'		=> 'Update database for the Portal XL',
	'PORTAL_UPDATE_NOT_POSSIBLE'	=> '<strong>Update not possible!</strong><br /><br />This release of Portal XL can not be updated as it seem to be on recommended state.<br /><br />Your current release carries version Portal XL 5.0 <strong>%1$s</strong>. <br /><br /><strong style="text-transform: uppercase;">Note:</strong> If you are unsure which Portal XL 5.0 Premod version you use please proceed to tab "<a href="index.php?mode=update">UPDATE TO LATEST</a>" to apply the latest database changes.',
	'PORTAL_UPDATE_PROCEDURE'		=> 'Currently %1$s from %2$ datasets are updated.<br /><br />Please click on the button below to continue or wait a moment till the script restarts itself.',
	'PORTAL_UPDATE_TODO'			=> 'From on here all existing database tables in use by Portal XL will be updated to the latest workflow.<br /><br />To start the update procedure, click on the button below.<br /><br />Please be patient while proceeding, because it can take some time to the number of updates to make.',
	'PORTAL_FINAL_UPDATE_STEP'		=> 'The existing tables from Portal XL are now up to date.<br />To get correct displayed texts on your forum the datasets needs to be converted now.<br /><br />Click on the button below to continue now with the converting.',

	// Portal XL Remove Database Entries Procedure
	'PORTAL_REMOVE'					=> 'Portal XL Remove',
	'PORTAL_REMOVE_NOT_POSSIBLE'	=> '<strong>Remove not possible!</strong><br /><br />Your version release of this Portal: <strong>%1$s</strong><br /><br />The Portal XL must at least have the release <strong>%1$s</strong>, to be able to remove all database tables.<br /><br />Please update the Portal manually to this release, before you can use this script again.',
	'PORTAL_REMOVE_SUCCESS'			=> 'Congratulation!<br />Remove of the database entries from Portal XL is finished.<br /><br />You can now go on to remove remaining parts of Portal XL from your forum.<br /><br />Please delete the folder /install_portal/ from your forum root to avoid security issues.',

	'PORTAL_REMOVE_TODO'			=> 'Portal XL will be removed from your database, it is save to delete all Portal XL related files, as there are (related to your root), if this step is completed:
	<ul>
		<li>in folder <span style="color:#009900;">/adm/style/</span> remove all <span style="color:#FF0000;">acp_portal*.html</span>.</li>
		<li>in folder <span style="color:#009900;">/includes/acp/</span> remove all <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>in folder <span style="color:#009900;">/includes/acp/info/</span> remove  all <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>in folder <span style="color:#009900;">/language/en/</span> remove <span style="color:#FF0000;">portal.php</span></li>
		<li>in folder <span style="color:#009900;">/language/en/acp/</span> remove all <span style="color:#FF0000;">portal_*.php</span></li>
		<li>in folder <span style="color:#009900;">/language/en/mods/</span> remove <span style="color:#FF0000;">portal_xl_average_statistics.php</span></li>
		<li>remove main folder <span style="color:#009900;">/portal/</span></strong></li>
		<li>remove all <span style="color:#009900;">/portal/</span> folders (do this for every style installed) under <span style="color:#009900;">/styles/stylename/template/</span></li>
		<li>in root replace <span style="color:#FF0000;">.htaccess</span> by the original one from phpBB 3.0.x, remove <span style="color:#FF0000;">portal.php</span>, <span style="color:#FF0000;">portal_pages.php</span> and <span style="color:#FF0000;">robots.txt</span>.</li>
		<li>additional to the above all custom bbcodes installed by use of this installer will be removed.</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Note:</strong> Before proceeding re-upload a original phpBB 3.0.x distribution to overwrite files which have been changed for use of Portal XL, but bear in mind before uploading anything to be sure to have removed folder <span style="color:#009900;">/install/</span> and file <span style="color:#FF0000;">config.php</span> from the original phpBB 3.0.x package.</p>
	<p>Thank you for using Portal XL.</p><br /><br />',
	
	'PORTAL_SQL_REMOVE_DONE'		=> '<strong>Done database action:</strong><br />',
	'PORTAL_FINAL_REMOVE_STEP'		=> 'All existing database entries and tables in use by Portal XL where removed.<br /><br />Click on the button below to continue or wait some seconds to automatically redirect to the next step.',
	'REMOVE_DATABASE'				=> 'Proceed to Remove',
	'STAGE_REMOVE_DB'				=> 'Removing Database',

	// Portal XL CHMOD Directories
	'PORTAL_CHMOD'					=> 'Portal XL CHMOD',
	'PORTAL_CHMOD_NOT_POSSIBLE'		=> '<strong>CHMOD not possible!</strong><br /><br />Your version release of this Portal: <strong>%1$s</strong><br /><br />The Portal XL must at least have the release <strong>%1$s</strong>, to be able to CHMOD all directories used by Portal XL.<br /><br />Please update the Portal manually to this release, before you can use this script again.',
	'PORTAL_CHMOD_SUCCESS'			=> 'Congratulation!<br />CHMOD to folders and files was successful.',

	'PORTAL_CHMOD_TODO'				=> 'Portal XL\'s installation Wizard will try to CHMOD / Rename following directories or files for you if acces is granted for such a procedure by your hosting company:
	<ul>
		<li><em><strong><span style="color:#009900;">File permissions CHMOD</span></strong></em><br />
		<em><strong>After installation</strong> you should check all CHMOD\'s on files and directories for *NIX related servers.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> into</span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">777</span> into</span></strong> (Some servers require 0755 executable not 0777 writable):<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> and all their subfolders<br />
		<strong>/dl_mod/downloads</strong> and all their subfolders<br />
		<strong>/gallery/images</strong> and all their subfolders<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		<strong>/images/att_thumbs</strong><br />
		<strong>/images/img_thumbs</strong><br />
		</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Note:</strong> As usual, before proceeding have a recent backup of your files.</p><br /><br />',

	'PORTAL_CHMOD_DONE'			=> '<strong>Done database action:</strong><br />',
	'PORTAL_FINAL_CHMOD_STEP'	=> 'All existing directories and files in use by Portal XL where CHMOD set.<br /><br />Click on the button below to continue or wait some seconds to automatically redirect to the next step.',
	'PORTAL_CHMOD_FILES'		=> 'Proceed to CHMOD',

	'STAGE_CHMOD_FILES'			=> 'CHMOD in action...<br />
	<ul>
		<li><em><strong><span style="color:#009900;">File permissions CHMOD</span></strong></em><br />
		<em><strong>After installation</strong> you should check all CHMOD\'s on files and directories for *NIX related servers.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> into</span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">777</span> into</span></strong> (Some servers require 0755 executable not 0777 writable):<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> and all their subfolders<br />
		<strong>/dl_mod/downloads</strong> and all their subfolders<br />
		<strong>/gallery/images</strong> and all their subfolders<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		<strong>/images/att_thumbs</strong><br />
		<strong>/images/img_thumbs</strong><br />
		</li>
	</ul>
	After clicking the button you will not be able to acces this installer anymore due to rename of folder <strong>/install/</strong> to <strong>/_install/</strong>. If you need the installer again rename folder <strong>/_install/</strong> than or access the renamed directory directly.<br /><br />Click the button below to continue.',

	// Portal XL BBCODE Import
	'PORTAL_BBCODE'					=> 'Portal XL Custom bbCode',
	'PORTAL_BBCODE_NOT_POSSIBLE'		=> '<strong>Adding custom bbCodes is not possible!</strong><br /><br />Your version release of this Portal: <strong>%1$s</strong><br /><br />The Portal XL must at least have the release <strong>%1$s</strong>, to be able to BBCODE all directories used by Portal XL.<br /><br />Please update the Portal manually to this release, before you can use this script again.',
	'PORTAL_BBCODE_SUCCESS'			=> 'Congratulation!<br />Adding custom bbCodes to database was successful.',

	'PORTAL_BBCODE_TODO'				=> 'Welcome to the Portal XL custom bbCode installation Wizard.<br /><br />Portal XL will install following custom bbCodes into your database:
	<ul>
		<li><span style="color:#009900;">Insert spoiler: [spoiler]your text here[/spoiler]</span></li>
		<li><span style="color:#009900;">Insert iframe: [iframe]http://url.here[/iframe]</span></li>
		<li><span style="color:#009900;">Insert youtube: [youtube]videonumber[/youtube]</span></li>
		<li><span style="color:#009900;">Insert GVideo: [GVideo]videonumber[/GVideo]</span></li>
		<li><span style="color:#009900;">Insert myvideo: [myvideo]videonumber[/myvideo]</span></li>
		<li><span style="color:#009900;">Insert clipfish: [clipfish]videonumber[/clipfish]</span></li>
		<li><span style="color:#009900;">Insert myspace: [myspace]videonumber[/myspace]</span></li>
		<li><span style="color:#009900;">Insert gametrailers: [gametrailers]trailernumber[/gametrailers]</span></li>
		<li><span style="color:#009900;">Insert center: [center]your text[/center]</span></li>
		<li><span style="color:#009900;">Insert strike: [strike]your text[/strike]</span></li>
		<li><span style="color:#009900;">Insert bgcolor: [bgcolor=red]your text[/bgcolor]</span></li>
		<li><span style="color:#009900;">Insert hidden link: [hiddenlink=http//url.her]your text[/hiddenlink]</span></li>
		<li><span style="color:#009900;">Insert offtopic: [offtopic]your text[/offtopic]</span></li>
		<li><span style="color:#009900;">Insert marquee: [marquee=color here]your text[/marquee]</span></li>
		<li><span style="color:#009900;">Insert intended text: [tab=number here]your text[/tab]</span></li>
		<li><span style="color:#009900;">Insert Highslide Img: [hsimg]link to image[/hsimg]</span></li>
		<li><span style="color:#009900;">Insert align: [align=direction]your text[/align]</span></li>
		<li><span style="color:#009900;">Insert mailto: [mail=e-mail addres]e-mail addres[/mail]</span></li>
		<li><span style="color:#009900;">Insert horizontal ruler: [hr][/hr]</span></li>
		<li><span style="color:#009900;">Insert line break: [br][/br]</span></li>
		<li><span style="color:#009900;">Insert WMV: [wmv]http://wmv_url[/wmv]</span></li>
		<li><span style="color:#009900;">Insert super script: [sup]your text[/sup]</span></li>
		<li><span style="color:#009900;">Insert Flash video: [flash_i]your url[/flash_i]</span></li>
		<li><span style="color:#009900;">Insert stream: [stream]your url[/stream]</span></li>
		<li><span style="color:#009900;">Insert FLV: [flv]your url[/flv]</span></li>
		<li><span style="color:#009900;">Insert Real Media: [rm]your url[/rm]</span></li>
		<li><span style="color:#009900;">Insert MOV: [mov]your url[/mov]</span></li>
		<li><span style="color:#009900;">Insert Column: [col=collumn1]collumn2[/col]</span></li>
		<li><span style="color:#009900;">Insert Aligntable: [aligntable =align,width,marginleft,marginright,border,brdcolor,bkgrdcolor]{TEXT}[/aligntable]</span></li>
		<li><span style="color:#009900;">Insert Think Female: [think_f]Text here[/think_f]</span></li>
		<li><span style="color:#009900;">Insert Think Male: [think_m]Text here[/think_m]</span></li>
		<li><span style="color:#009900;">Insert Schild: [schild]your text[/schild] - This inserts your text into a smile sign</span></li>
		<li><span style="color:#009900;">[schild={SIMPLETEXT1},{NUMBER},{SIMPLETEXT2},{SIMPLETEXT3}]{TEXT}[/schild]</span></li>
		<li><span style="color:#009900;">Insert Album: [album]Picture ID[/album]</span></li>
		<li><span style="color:#009900;">Insert Tr: [tr]content[/tr]</span></li>
		<li><span style="color:#009900;">Insert Tdo: [tdo=colspan number]content[/tdo]</span></li>
		<li><span style="color:#009900;">Insert Td: [td]content[/td]</span></li>
		<li><span style="color:#009900;">Insert Table: [table]content[/table]</span></li>
		<li><span style="color:#009900;">Insert Google Map: [googlemap]Usermap-URL[/googlemap]</span></li>
		<li><span style="color:#009900;">Insert Guest Hide Text: [hide]text[/hide]</span></li>
	</ul>
	<p><strong style="text-transform: uppercase;">Note:</strong> As usual, before proceeding have a recent backup of your database.</p><br /><br />',

	'PORTAL_SQL_BBCODE_DONE'			=> '<strong>Done database action:</strong><br />',
	'PORTAL_FINAL_BBCODE_STEP'		=> 'Update bbCodes to database where set.<br /><br />Click on the button below to continue.',
	'BBCODE_DATABASE'				=> 'Proceed to BBCODE',

	'STAGE_BBCODE_DB'				=> 'BBCODE in action...<br />
	<ul>
		<li><em><strong><span style="color:#009900;">File permissions CHMOD</span></strong></em><br />
		<em><strong>After installation</strong> you should check all CHMOD\'s on files and directories for *NIX related servers.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> into</span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">777</span> into</span></strong> (Some servers require 0755 executable not 0777 writable):<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> and all their subfolders<br />
		<strong>/dl_mod/downloads</strong> and all their subfolders<br />
		<strong>/gallery/images</strong> and all their subfolders<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		<strong>/images/att_thumbs</strong><br />
		<strong>/images/img_thumbs</strong><br />
		</li>
	</ul>
	After clicking the button you will not be able to acces this installer anymore due to rename of folder <strong>/install/</strong> to <strong>/_install/</strong>. If you need the installer again rename folder <strong>/_install/</strong> than or access the renamed directory directly.<br /><br />Click the button below to continue.',

   'PORTAL_FINAL_MODULE_STEP'		=> 'Update of the database modules table where set.<br /><br />Click on the button below to continue.',
   'PORTAL_FINAL_CONFIGFILE_STEP'	=> 'Update of the file config.php in your forum root where set.<br /><br />Click on the button below to continue.',
   'PORTAL_SQL_MODULE_DONE'			=> '<strong>Done database action:</strong><br />',

   'STAGE_INSERT_DATA'				=> 'Insert default values',
   'STAGE_POPULATE_DB'				=> 'The database tables are available.<br /><br />Click on the button below to populate the tables with data.',
   'STAGE_CHMOD'					=> 'CHMOD files',
   'STAGE_BBCODE'					=> 'bbCode Import',
   'STAGE_INSERT_MODULES'			=> 'Insert Modules',
   'PORTAL_NOT_INSTALLED'			=> 'No Portal installation found',
   'PORTAL_NOT_INSTALLED_EXPLAIN'	=> 'A default installation of Portal XL is required, please <a href="%s">proceed by first installing Portal XL</a>.',

	// Portal XL version check
	'VERSION_CHECK'					=> 'Version check',
	'VERSION_CHECK_EXPLAIN'			=> 'Checks to see if the version of Portal XL you are currently running is up to date.',
	'VERSION_UP_TO_DATE_ACP'		=> 'Your installation is up to date, no updates are available for your version of Portal XL. You do not need to update your installation.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Your version of Portal XL is not up to date.<br />Below you will find a link to the release announcement for the latest version as well as instructions on how to perform the update.',
	'CURRENT_VERSION'				=> 'Current version',
	'LATEST_VERSION'				=> 'Latest version',
	'UPDATE_INSTRUCTIONS'			=> '
		<h2>How to update your installation with the Latest Package</h2>

		<p>The recommended way of updating your installation listed here is only valid for the latest package. You are also able to update your installation using the methods listed within the \docs\PORTAL_XL_INSTALL.html document. The steps for updating Portal XL are:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Go to the <a href="http://www.portalxl.nl/forum/" title="http://www.portalxl.nl/forum/">Portal XL downloads page</a> and download the "Latest Package" archive.<br /></li>
			<li>Unpack the archive.<br /></li>
			<li>Upload the complete \root\ folder (retain directory structure) to your phpBB root directory (where your config.php file is).<br /></li>
			<li>Browse to \install\index.php to start the installation script and choose tab "Update"<br /></li>
			<li>Refresh cache and style(s) when done!<br /></li>
		</ul>
	',

	// Portal XL Upgrade to Premod Procedure
	'PORTAL_UPGRADE'				=> 'Portal XL 5.0 Plain Upgrade to Premod',
	'PORTAL_UPGRADE_SUCCESS'		=> '<br /><strong>Congratulation</strong>!<br />The upgrade of the database settings for Portal XL 5.0 Premod are finished.<br /><br />Please delete the folder <strong>/install_portal/</strong> from your forum root to avoid security issues when installation of additional mods is done!<br /><br /><strong style="text-transform: uppercase; font-size:13px; color: #FF0000;">Attention:</strong> Next steps will guide you to installation of additional third party modifications. These steps are obligated to have the Portal XL Premod fully operational. <br /><br /><strong style="text-transform: uppercase;">Note:</strong> If the Arcade and phpBB Gallery databases are not removed* you can ignore this step! <br /><br />*( Portal XL\'s installation routines will never touch that part ) <br /><br />Click the button below to proceed.',
	'PORTAL_UPGRADE_BASIC_FINISHED'	=> 'The database tables are now upgraded for the new text functions of the phpBB 3.<br />Not the script will convert the text themselves.<br /><br />To avoid timeout errors and malfunctions while converting the texts, the script will permanently restart itself. Please do not close the browser until the script have finished the conversion.<br /><br />But if you will get an interruption of this procedure, restart the script again to continue.<br /><br />Please be patient while the script will convert the texts and wait for the closing message, because in addition for the number of texts which must be converted, the script may take some minutes to do all the work.',
	'PORTAL_UPGRADE_DATABASE'		=> 'Update database for the Portal XL',
	'PORTAL_UPGRADE_NOT_POSSIBLE'	=> '<strong>Update not possible!</strong><br /><br />This release of Portal XL can not be upgraded as it seem to be on recommended state.<br /><br />Your current release carries version Portal XL 5.0 <strong>%1$s</strong>',
	'PORTAL_UPGRADE_PROCEDURE'		=> 'Currently %1$s from %2$ datasets are upgraded.<br /><br />Please click on the button below to continue or wait a moment till the script restarts itself.',
	'PORTAL_UPGRADE_TODO'			=> 'From on here all existing database tables will be upgraded to the latest workflow of Portal XL 5.0 Premod.<br /><br />
		<ul>
		<li>Make sure you did copy/upload/overwrite from archive all content of directory <strong><span style="color:#FF0000;">\root\</span></strong> to your phpBB 3.0.x root eg. <strong><span style="color:#FF0000;">\forum\</span></strong> only (you did already)!</li>
	</ul>
	<ul>
		<li><em><strong><span style="color:#009900;">File permissions CHMOD</span></strong></em><br />
		<em><strong>After installation</strong> you should check all CHMOD\'s on files and directories for *NIX related servers.</em><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">0644</span> into</span></strong>:<br />
		<strong>config.php</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">666</span> into</span></strong>:<br />
		<strong>/images/counter/ip.txt</strong><br /><br />
		<strong><span style="color:#009900;">CHMOD <span style="color:#FF0000;">777</span> into</span></strong> (Some servers require 0755 executable not 0777 writable):<br />
		<strong>/cache</strong><br />
		<strong>/store</strong><br />
		<strong>/files</strong><br />
		<strong>/images/avatars/upload</strong><br />
		<strong>/dl_mod/thumbs</strong> and all their subfolders<br />
		<strong>/dl_mod/downloads</strong> and all their subfolders<br />
		<strong>/gallery/images</strong> and all their subfolders<br />
		<strong>/phpbb_seo/cache</strong><br />
		<strong>/gym_sitemaps/cache</strong><br />
		<strong>/arcade</strong><br />
		<strong>/arcade/gamedata</strong><br />
		<strong>/arcade/games</strong><br />
		<strong>/arcade/install</strong><br />
		<strong>/images/att_thumbs</strong><br />
		<strong>/images/img_thumbs</strong><br />
		</li>
	</ul>
	<br /><br />To start the upgrade procedure, click on the button below.<br /><br />Please be patient while proceeding, because it can take some time to the number of upgrades to make.',
	'PORTAL_FINAL_UPGRADE_STEP'		=> 'The existing tables from Portal XL are now up to date.<br />To get correct displayed texts on your forum the datasets needs to be converted now.<br /><br />Click on the button below to continue now with the converting.',

	// Portal XL Remove Database Entries Procedure
	'PORTAL_REMOVE_UPGRADE'					=> 'Portal XL 5.0 Premod Remove',
	'PORTAL_REMOVE_UPGRADE_NOT_POSSIBLE'	=> '<strong>Remove not possible!</strong><br /><br />Your version release of this Portal: <strong>%1$s</strong><br /><br />The Portal XL 5.0 Premod must at least have the release <strong>Premod 0.2</strong>, to be able to remove all database entries.<br /><br />Please update the Portal manually to this release, before you can use this script again.',
	'PORTAL_REMOVE_UPGRADE_SUCCESS'			=> 'Congratulation!<br />Remove of the database entries from Portal XL 5.0 Premod is finished.<br /><br />You can now go on to remove remaining parts of Portal XL 5.0 Premod from your forum.<br /><br />Please delete the folder /install_portal/ from your forum root to avoid security issues.',

	'PORTAL_REMOVE_UPGRADE_TODO'			=> 'Portal XL 5.0 Premod will be removed from your database completely, it is save to delete all Portal XL 5.0 Premod related files, as there are (related to your root), if this step is completed:
	<ul>
		<li>in folder <span style="color:#009900;">/adm/style/</span> remove all <span style="color:#FF0000;">acp_portal*.html</span>.</li>
		<li>in folder <span style="color:#009900;">/includes/acp/</span> remove all <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>in folder <span style="color:#009900;">/includes/acp/info/</span> remove  all <span style="color:#FF0000;">acp_portal*.php</span></li>
		<li>in folder <span style="color:#009900;">/language/en/</span> remove <span style="color:#FF0000;">portal.php</span></li>
		<li>in folder <span style="color:#009900;">/language/en/acp/</span> remove all <span style="color:#FF0000;">portal_*.php</span></li>
		<li>in folder <span style="color:#009900;">/language/en/mods/</span> remove <span style="color:#FF0000;">portal_xl_average_statistics.php</span></li>
		<li>remove main folder <span style="color:#009900;">/portal/</span></strong></li>
		<li>remove all <span style="color:#009900;">/portal/</span> folders (do this for every style installed) under <span style="color:#009900;">/styles/stylename/template/</span></li>
		<li>in root replace <span style="color:#FF0000;">.htaccess</span> by the original one from phpBB 3.0.x, remove <span style="color:#FF0000;">portal.php</span>, <span style="color:#FF0000;">portal_pages.php</span> and <span style="color:#FF0000;">robots.txt</span>.</li>
		<li>additional to the above all custom bbcodes installed by use of this installer will be removed.</li>
	</ul>
	<p><strong style="text-transform: uppercase;">Note:</strong> Before proceeding re-upload a original phpBB 3.0.x distribution to overwrite files which have been changed for use of Portal XL 5.0 Premod, but bear in mind before uploading anything to be sure to have removed folder <span style="color:#009900;">/install/</span> and file <span style="color:#FF0000;">config.php</span> from the original phpBB 3.0.x package.</p>
	<p><strong style="text-transform: uppercase; color:#FF0000;">Attention:</strong> Removing Portal XL Premod database entries will never remove phpBB Gallery, Arcade Mod and Knowledge Base! To remove database entries of those mod\'s you have to use the original installation scripts of those mod\'s or remove manually from databse.</p>	
	<p>Thank you for using Portal XL 5.0 Premod.</p><br /><br />',
	
	'PORTAL_FINAL_REMOVE_UPGRADE_STEP' 		=> 'All existing database entries and tables in use by Portal XL 5.0 Premod where removed.<br /><br />Click on the button below to continue or wait some seconds to automatically redirect to the next step.',
    'PORTAL_UPGRADE_NOT_INSTALLED_EXPLAIN'	=> 'A default installation of Portal XL is required, please <a href="%s">proceed by first installing Portal XL</a>.',

	// Portal XL additional third party mods
	'STAGE_ADDITIONAL'							=> 'Additional Mods',
	'PORTAL_ADDITIONAL_THIRD_PARTY_MODS'		=> 'Portal XL additional mods',
	'PORTAL_ADDITIONAL_THIRD_PARTY_MODS_BODY'	=> 'With this option, it is possible to first time install third party modifications into your your Portal XL 5.0 Premod forum.<br /><span style="color:#FF0000;"><strong>All steps below are required for proper working of Portal XL 5.0 Premod! Follow the given steps exactly to avoid errors.</strong></span>
	<hr>
	<h1 style="color:#009900;">&#8226; Step 1 PhpBB3 Knowledge Base Mod 1.0.2</h1>
	<p>
	  With this option, it is possible to first time install PhpBB3 Knowledge Base Mod 1.0.2 to your Portal XL 5.0 Premod forum.
	  <br />Be sure file <strong>kb.php</strong> (part of Portal XL\'s Premod package) is uploaded into your forum main directory correctly.
	  <br /><br />Full support will be provided for the current stable release of PhpBB3 Knowledge Base Mod 1.0.2, free of charge.
	  <br />Support is given on the following board.</p><ul><li><a href="http://kb.softphp.dk/" target="_blank">PhpBB3 Knowledge Base 1.0.2</a></li></ul>
	  <br />If the button below fails, browse to <strong>kb.php</strong> (append to your forums url) and start the installation script this way. Clicking the button you will be directed to a new page!
	  <br /><br /><div align="center"><a href="../kb.php" target="_blank" class="button1">Proceed here to install PhpBB3 Knowledge Base Mod 1.0.2</a></div>
	</p><br />
	<hr>
	<h1 style="color:#009900;">&#8226; Step 2 phpBB Arcade</h1>
	<p>
	  With this option, it is possible to first time install phpBB Arcade to your Portal XL 5.0 Premod forum.
	  <br />Be sure directory <strong>\install_arcade\</strong> (part of Portal XL\'s Premod package) is uploaded into your forum main directory correctly.
	  <br /><br />Full support will be provided for the current stable release of phpBB Arcade, free of charge.
	  <br />Support is given on the following board.</p><ul><li><a href="http://www.jeffrusso.net/forum/viewforum.php?f=20" target="_blank">JeffRusso.net phpBB Arcade</a></li></ul>
	  <br />If the button below fails, browse to <strong>install_arcade/index.php</strong> (append to your forums url) and start the installation script this way. Clicking the button you will be directed to a new page!
	  <br /><br /><div align="center"><a href="../install_arcade/index.php" target="_blank" class="button1">Proceed here to install phpBB Arcade</a></div>
	</p><br />
	<hr>
	<h1 style="color:#009900;">&#8226; Step 3 phpBB Gallery</h1>
	<p>
	  With this option, it is possible to first time install phpBB Gallery to your Portal XL 5.0 Premod forum.
	  <br />Be sure directory <strong>\install_gallery\</strong> (part of Portal XL\'s Premod package) is uploaded into your forum main directory correctly.
	  <br /><br />Full support will be provided for the current stable release of phpBB Gallery, free of charge.
	  <br />Support is given on the following boards.</p><ul><li><a href="http://www.flying-bits.org/" target="_blank">flying-bits.org - MOD-Autor nickvergessen\'s board</a></li><li><a href="http://www.phpbb.de/" target="_blank">phpbb.de</a></li><li><a href="http://www.phpbb.com/" target="_blank">phpbb.com</a></li></ul>
	  <br />If the button below fails, browse to <strong>install_gallery/index.php</strong> (append to your forums url) and start the installation script this way. Clicking the button you will be directed to a new page!
	  <br /><br /><div align="center"><a href="../install_gallery/index.php" target="_blank" class="button1">Proceed here to install phpBB Gallery</a></div>
	</p><br />
	<hr>
	<h1 style="color:#009900;">&#8226; Step 5 phpBB Mod Gym sitemaps</h1>
	<p>
	  With this option, it is possible to first time install phpBB Mod Gym sitemaps to your Portal XL 5.0 Premod forum.
	  <br />Be sure directory <strong>\gym_sitemaps\</strong> and <strong>\umil\</strong> (part of Portal XL\'s Premod package) is uploaded into your forum main directory correctly.
	  <br /><br />Full support will be provided for the current stable release of phpBB Mod Gym sitemaps, free of charge.
	  <br />Support is given on the following board.</p><ul><li><a href="http://www.phpbb-seo.com/en/forum.html" target="_blank">phpBB Mod Gym sitemaps</a></li></ul>
	  <br />If the button below fails, browse to <strong>gym_sitemaps/gym_install.php</strong> (append to your forums url) and start the installation script this way. Clicking the button you will be directed to a new page!
	  <br /><br /><div align="center"><a href="../gym_sitemaps/gym_install.php" target="_blank" class="button1">Proceed here to install phpBB Mod Gym sitemaps</a></div>
	</p><br />
 	<hr>
	<p><strong style="text-transform: uppercase;">Note:</strong> If all additional installations are done delete all installation diretories and directory \umil\, you can savely leave this page installing optional custom <a href="index.php?mode=bbcode">bbcodes</a> or login to your Portal XL 5.0 Premod <a href="../ucp.php?mode=login">forum</a>.</p>',

	// Tabs language definitions
	'CAT_UPGRADE_PREMOD'	=> 'Upgrade to Premod',
	'CAT_OVERVIEW'			=> 'Overview',
	'CAT_INSTALL'			=> 'Install Basic',
	'CAT_UPDATE'			=> 'Update to latest',
	'CAT_UPGRADE_REMOVE'	=> 'Remove Portal',
	'CAT_BBCODE'			=> 'Custom bbCode',

));
?>