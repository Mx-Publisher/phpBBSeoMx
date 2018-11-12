<?php
/**
*
* help_arcade [English]
*
* @package language
* @version $Id: help_arcade.php 1663 2011-09-22 12:09:30Z killbill $
* @copyright (c) 2010-2011 http://www.phpbbarcade.com
* @copyright (c) 2011 http://jatek-vilag.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
		1 => 'General',
	),
	array(
		0 => 'What features are included in phpBB Arcade?',
		1 => '<ul><li>Extensive games support</li>
		<li>Unlimited categories, sub-categories and links (mimics phpBB3 forums)</li>
		<li>Full ACP and UCP modules</li>
		<li>Administrator permissions for ACP modules</li>
		<li>Global arcade based permissions</li>
		<li>Local category based permissions</li>
		<li>Password protected categories</li>
		<li>Age protected categories</li>
		<li>Facebook like integration</li>
		<li>Very simple game install</li>
		<li>Automatically convert IBPro game tar files</li>
		<li>phpBB3 Who is Online integration</li>
		<li>Show who is playing what game</li>
		<li>Favorite games system</li>
		<li>Built in game download system</li>
		<li>Statistics</li>
		<li>Rating system</li>
		<li>Comments system</li>
		<li>Reporting system</li>
		<li>Play games regular or in pop up window</li>
		<li>Search system</li>
		<li>Points system integration</li>
		<li>Plus more....</li></ul>',
	),
	array(
		0 => 'What styles are supported?',
		1 => '<ul>
		<li>prosilver</li>
		<li><a href="http://www.phpbb.com/customise/db/style/prosilver_special_edition/">prosilver Special Edition</a></li>
		<li>subsilver2</li>
		</ul>',
	),
	array(
		0 => 'What languages are supported?',
		1 => 'All supported languages for the current release of the arcade can be found <a href="http://phpbbarcade.origon.dk/viewforum.php?f=7">here</a>.',
	),
	array(
		0 => 'What about other languages and styles?',
		1 => 'If you translate the phpBB Arcade to your language or create the template files for another style I would appreciate if you submitted them to me <a href="http://phpbbarcade.origon.dk/viewforum.php?f=3">here</a>. Keep in mind that many styles are based off of prosilver or subsilver2 so for the most part you can just upload the arcade template files from the style its based off of to the template folder of the style you are using.',
	),
	array(
		0 => 'Can I use style specific images inside the arcade?',
		1 => 'Yes. Any image located inside the default image path can be style specific. All you have to do is place an image of the same name inside the “your_style\theme\images\arcade\” folder. If a style does not have a specific image the default image will be used. This also applies to category images. To use style specific category images first choose the default image while creating/editing the category and then upload an image with the same name to the “your_style\theme\images\arcade\cats\” folder.',
	),
	array(
		0 => '--',
		1 => 'Installation/Updating',
	),
	array(
		0 => 'What databases does the phpBB Arcade support?',
		1 => 'The arcade should work correctly with any database that is supported by phpBB3.',
	),
	array(
		0 => 'How do I install the phpBB Arcade?',
		1 => 'There are some edits required to the core of phpBB3 and there is an included installer that takes care of all the database changes and adds the ACP and UCP Modules. Make sure to either user AutoMOD or manually follow the MODX install file for the core and style edits.',
	),
	array(
		0 => 'How do I uninstall the phpBB Arcade?',
		1 => 'Undo all the file edits you made for the arcade and then run the installer and choose the option to uninstall the arcade.',
	),
	array(
		0 => 'How do I update phpBB Arcade to the latest version?',
		1 => 'Download the latest package. Upload all the new files overwriting the old. Open the modx update files, located inside the contrib/update folder, for the core and style edits and make the required changes. Then run the included install script. Choose the option to update to latest version and when complete move/rename/remove the install folder from your server.<br /><br />So for example if you are currently at 1.1.0 and want to update to 1.1.2:
			<ul>
				<li>Upload all the new files overwriting the old files</li>
				<li>Look inside the contrib/update folder and follow <strong>update110-111.xml</strong> and then <strong>update111-112.xml</strong>. Also follow the style edits, if any, in the same order.</li>
				<li>Run the installer and select the option to update to the latest version</li>
			</ul><br />
			Please note that if you are using phpBB Arcade 1.0.x that updates will only be supported from the latest stable version.',
	),
	array(
		0 => 'How can I check to make sure everything is edited?',
		1 => 'Make sure you running the latest version of the arcade. Open the install script in your web browser and select the tab that says "Verify", this will check to make sure the arcade is fully installed.',
	),
	array(
		0 => '--',
		1 => 'Scoring',
	),
	array(
		0 => 'Why won\'t my scores save?',
		1 => 'The first thing to check is that the game is of a type supported by the arcade and that the score variable is set correctly. The next thing to check it to make sure you have edited <strong>index.php</strong> correctly. If it is not edited correctly then IBPro games will not submit scores. The last thing to check is the cookie settings in the acp. If your site url is <strong>http://www.example.com</strong> then the cookie domain should be <strong>.example.com</strong>.',
	),
	array(
		0 => 'Why am I shown the following message after playing a game, "The score submission method does not match the game type"?',
		1 => 'The game scoretype is set incorrectly for that game. If you view the arcade error log in the ACP you should see the game. Look for an error type of "Stored and submitted game type do not match". Here you will see the game scoretype (correct) and submitted game scoretype (wrong). Edit the game to set the correct game scoretype.',
	),
	array(
		0 => 'Why can\'t guests submit scores even though they have the correct permissions?',
		1 => 'Even if you give the guest usergroup the correct permission they cannot submit scores to the arcade. This is by design.',
	),
	array(
		0 => 'How do I enable "Test mode" for a category?',
		1 => 'Goto the "Manage arcade" ACP module. Click edit on the category you want to enable "Test mode" and then set the "Test mode" option to yes.',
	),
	array(
		0 => 'What does "Test mode" do?',
		1 => 'This will now allow you to play games in a category and have no data or scores saved. This allows you to test out games to make sure they function correctly. Once finished with a game you will be displayed a message detailing what would have occured. If you are an administrator and DEBUG_EXTRA is enabled you will also see more detailed information.',
	),
	array(
		0 => '--',
		1 => 'Games',
	),
	array(
		0 => 'What game types are supported?',
		1 => 'The arcade supports the following game types:<br /><ul><li>Activity Mod</li><li>Arcade Room</li><li>V3 Arcade</li><li>IBPro</li><li>IBPro ArcadeLib</li><li>IBPro V3</li><li>None scoring games</li></ul>',
	),
	array(
		0 => 'What is the easiest way to install games?',
		1 => 'The easiest way would be to use games that are already in phpBB Arcade or IBPro tar format. You could also use games packaged for the Arcade room if they contain an xml file. The arcade will automatically detect the type of game that you are uploading or unpacking and convert it to the correct format to be installed.',
	),
	array(
		0 => 'What is required for the game to be installed?',
		1 => 'Games you put together yourself need to be uploaded to (by default) <strong>http://www.example.com/phpBB/arcade/games/</strong> inside a folder that has the same name as the swf file name. If the flash file is named <strong>test.swf</strong>. Inside the <strong>http://www.example.com/phpBB/arcade/games/</strong> would be a folder called <strong>test</strong>.<br /><br />Inside this folder would be:<br /><ul><li>test.swf (flash)</li><li>test.gif (50px by 50 px)</li><li>test.php (install file, if not present game will not install)</li><li>index.htm (blank html file)</li></ul>',
	),
	array(
		0 => 'How can I install a game?',
		1 => 'There are three ways to install a game.<br /><ul><li>If you download the game using the phpBB Arcade\'s built in download system you will be provided with a compressed folder that you can upload via FTP to <strong>http://www.example.com/phpBB/arcade/install</strong> and install through the ACP.</li><li>If you download the game using the phpBB Arcade\'s built in download system you will be provided with a compressed folder that you can upload via the ACP Upload/Unpack module. Once uploaded the game will be unpacked automatically and you will be able to add the game to the arcade.</li><li>Another option is to upload all the files in the correct location on the server and then go to the ACP and install the game.</li></ul>',
	),
	array(
		0 => 'Can I create my own compressed file to install a game?',
		1 => 'Yes. The process is very easy. All you need to do is create a folder with the same name as the swf file and in that folder place the gamename.swf, gamename.gif, gamename.php and index.htm files. Then zip the folder and make sure that it has same name as the swf file.',
	),
	array(
		0 => 'Is there a sample install file?',
		1 => 'Yes.<br /><textarea rows="30" cols="30" readonly="readonly" onclick="this.focus(); this.select();"><?php
/**
*	phpBB Arcade Game Installation File
*
*	Below is some information on parameters that must be set for a game to
*	be installed into the arcade. You need this file for the game to show
*	up inside the phpBB Arcade ACP to install.
*
*	The only items that need to be set are the name, description, type,
*	width, height and scoretype.
*
*	The arcade supports 7 types of games. (Activity Mod, IBPro, IBPro arcadelib,
*	V3Arcade, IBProV3, Arcade room and games that do not submit scores)
*	Use the following constants for the type:
*
*	AMOD_GAME
*	AR_GAME
*	IBPRO_GAME
*	IBPRO_ARCADELIB_GAME
*	V3ARCADE_GAME
*	IBPROV3_GAME
*	NOSCORE_GAME
*
*	The scoretype should be set using the following constants:
*
*	SCORETYPE_HIGH
*	SCORETYPE_LOW
*
*	SCORETYPE_HIGH is for games that score so that the best score is
*	the highest. SCORETYPE_LOW is for games that score so that the
*	best score is the lowest.
*/

if (!defined(\'IN_PHPBB\'))
{
	exit;
}

$game_file = basename(__FILE__, \'.\' . $phpEx);

$game_data = array(
	\'game_name\'		=> \'Snake 3\',
	\'game_desc\'		=> \'Just another snake clone except this is part 2 lol!\',
	\'game_image\'		=> $game_file . \'.gif\',
	\'game_swf\'		=> $game_file . \'.swf\',
	\'game_scorevar\'	=> $game_file,
	\'game_type\'		=> IBPROV3_GAME,
	\'game_width\'		=> 360,
	\'game_height\'		=> 300,
	\'game_scoretype\'	=> SCORETYPE_HIGH
);
?></textarea>',
	),
	array(
		0 => 'Do I have to create the install file by hand?',
		1 => 'No, although its possible there are two tools in the phpBB Arcade ACP that will help in this task.<br /><ul><li>There is a tool to create and install file from scratch. Just enter all the required information and you can have the install file downloaded, displayed or created on the server.</li><li>There is a tool to download or view existing install files from the games already installed.</li></ul>',
	),
	array(
		0 => 'Where did the extra files go that used to be in the install file?',
		1 => 'The arcade now automatically detects if a game has extra files located outside the game folder and adds them to the download without the need to list them.',
	),
	array(
		0 => 'How do I delete games?',
		1 => 'You are able to delete games by clicking the "Manage arcade" module in the acp. You can also use the "Edit games" module to select a game to delete. You will be given the option to remove the files from the server when you delete the game. For this to work you must make sure you have the correct permissions set on the server to delete files. Only use this option if you do not plan on reinstalling the game.',
	),
	array(
		0 => '--',
		1 => 'Arcade ACP Modules',
	),
	array(
		0 => 'What ACP Modules does phpBB Arcade have?',
		1 => 'The arcade includes the following ACP Modules:<br /><br /><strong>Configuration</strong><br />
				<ul>
					<li><strong>General settings</strong> - Control general settings for the arcade</li>
					<li><strong>Game settings</strong> - Control game settings for the arcade</li>
					<li><strong>Feature settings</strong> - Control feature settings for the arcade</li>
					<li><strong>Page settings</strong> - Control page settings for the arcade</li>
					<li><strong>Path settings</strong> - Control path settings for the arcade</li>
				</ul><br />
				<strong>Manage arcade</strong><br />
				<ul>
					<li><strong>Manage categories</strong> - Add, edit, delete, move and resync categories and games</li>
					<li><strong>Edit scores</strong> - Edit scores for any of the games</li>
					<li><strong>View errors</strong> - View any errors logged by the arcade</li>
					<li><strong>View reports</strong> - View any reports submitted by users about a game</li>
					<li><strong>User guide</strong> - Displays the arcade user guide</li>
				</ul><br />
				<strong>Manage games</strong><br />
				<ul>
					<li><strong>Add games</strong> - Add a game to the arcade, multiple games can be added to a category at once</li>
					<li><strong>Backup games</strong> - Backup all the games in the selected categories</li>
					<li><strong>Create game install file</strong> - Create new install file to download/view/save on server or download/view existing games install file</li>
					<li><strong>Download games</strong> - Download games from sites that are hosting game downloads ready to use with the arcade</li>
					<li><strong>Download Statistics</strong> - View statistics of the download system</li>
					<li><strong>Edit games</strong> - Edit any details about a game</li>
					<li><strong>Upload/Unpack games</strong> - Uploads and extracts compressed games downloaded from built in download system or to correct folder(s) to install</li>
					<li><strong>Install games</strong> - Install games to a specified category</li>
				</ul><br />
				<strong>Permission roles</strong><br />
				<ul>
					<li><strong>Category roles</strong> - Manage the roles for arcade category permissions</li>
					<li><strong>User roles</strong> - Manage the roles for arcade user permissions</li>
				</ul><br />
				<strong>Global permissions</strong><br />
				<ul>
					<li><strong>Users’ permissions</strong> - Assign global arcade permissions to users</li>
					<li><strong>Groups’ permissions</strong> - Assign global arcade permissions to groups</li>
				</ul><br />
				<strong>Category based permissions</strong><br />
				<ul>
					<li><strong>Category permissions</strong> - Manage which users and groups can access which arcade categories</li>
					<li><strong>Users’ category permissions</strong> - Assign arcade permissions to users</li>
					<li><strong>Groups’ category permissions</strong> - Assign arcade permissions to groups</li>
					<li><strong>Copy category permissions</strong> - Copy category permissions from one category to one or more other categories</li>
				</ul><br />
				<strong>Permission masks</strong><br />
				<ul>
					<li><strong>View user-based permissions</strong> - View the effective user permissions assigned to the selected users/groups.</li>
					<li><strong>View category-based permissions</strong> - view the arcade permissions assigned to the selected users/groups and categories.</li>
				</ul>',
	),
	array(
		0 => 'How come I cannot see all the ACP modules for the arcade?',
		1 => 'To see all the modules you need to be set as a founder or have the correct administrative permissions set. If you still cannot see all the modules then most likely there are duplicate auth options in the acl_options table. Please run the install check for a list of duplicate values.',
	),
	array(
		0 => 'Where are the permissions to set?/Why don\'t I have permission to view/use the phpBB Arcade?',
		1 => 'Once the arcade is installed, you will need to set the permissions to use it. The arcade uses category based permissions that mimic the forum based permissions that phpBB3 uses, including the use of roles. You will need to set global arcade user/group permissions as well. Also, you can use administrator permissions to set user/group access to phpBB Arcade ACP modules.',
	),
	array(
		0 => 'Why can\'t I add any games?',
		1 => 'To add games you first must make sure that there are categories created to add them too. Use the <strong>Manage arcade</strong> ACP Module to do this. Creating them is very similar to creating forums in phpBB3.',
	),
	array(
		0 => 'How do I provide game downloads to others?',
		1 => 'The ability to download games is controlled by the arcade permissions. Set the permission how you want and people browsing the arcade will see the download links when viewing the games in the categories. To make it easier to download the games you can enable the download listing setting in the phpBB Arcade ACP settings. This will allow others to use the "Download games" ACP module to access the downloads on your site.',
	),
	array(
		0 => 'How do I use the "Download games" module?',
		1 => 'All you have to do is enter the url to the phpBB forum root of the site that is offering arcade downloads from their installation of the phpBB Arcade. You will then see a listing of games available to download. If the game is highlighted in green, this is because the same game was found on your server. Please keep in mind that the downloads are still controlled by the permissions on the site you are downloading them from. So you might have to be logged in and/or part of a special usergroup to download games. Contact the site admininstrator if you have any questions.<br /><br /><a href="http://img26.imageshack.us/f/dlgamesss.png"><img src="http://img26.imageshack.us/img26/9586/dlgamesss.th.png" alt="Download games" title="Download games" /></a>',
	),
	array(
		0 => 'Why doesn\'t the "Download games" module ever find any games?',
		1 => 'This module needs to have <strong>"allow_url_fopen"</strong> set to on or PHP\'s <strong>cURL library</strong> installed. This can be checked by viewing the phpinfo() of your server. If the value for <strong>"allow_url_fopen"</strong> is off and the <strong>cURL library</strong> is not installed the module will not work.',
	),
	array(
		0 => '--',
		1 => 'Points Systems',
	),
	array(
		0 => 'What points systems are supported?',
		1 => '<ul>
		<li>Cash Mod</li>
		<li>Points System</li>
		<li>Simple Points System</li>
		<li>Ultimate Points System</li>
		</ul>',
	),
	array(
		0 => 'How does the points system integration work?',
		1 => 'You can set a cost and reward per game, category or global setting. You can use any combination of these. The game settings override the category settings which override the global settings. There is also a jackpot setting. This setting can also be set globally, per category or per game. Every time the user plays and does not win the cost is put into the jackpot. The jackpot is not increased if the user did not pay to play the game. The jackpot can be manually set by editing the game in the acp. You can also set games cost and/or reward to -1 to have the game be free and/or reward nothing.',
	),
	array(
		0 => '--',
		1 => 'Display arcade data outside arcade',
	),
	array(
		0 => 'How do I display the arcade data on external pages?',
		1 => 'You must have the following lines of code to display the arcade data properly:<br />
<textarea rows="6" cols="30" readonly="readonly" onclick="this.focus(); this.select();">include($phpbb_root_path . \'arcade/includes/common.\' . $phpEx);
// Initialize arcade auth
$auth_arcade->acl($user->data);
// Initialize arcade class
$arcade = new arcade(false);</textarea><br /><br />Also make sure to use the following functions to display data:
	<ul>
	<li><strong>$arcade->number_format()</strong> - All numbers displayed should go through this function to make sure they are displayed correctly to the user</li>
	<li><strong>$arcade->time_format()</strong> - Convert a time in seconds to days/hours/mins/secs</li>
	<li><strong>$arcade->get_username_string()</strong> - Correctly link to arcade profile and color a username</li>
	</ul>',
	),
	array(
		0 => 'Is there a sample portal block file?',
		1 => 'Yes, the following sample will display the newest games, total games and the latest highscores.<br /><br />Block php code:<br />
<textarea rows="20" cols="30" readonly="readonly" onclick="this.focus(); this.select();">if (file_exists($phpbb_root_path . \'arcade/includes/common.\' . $phpEx))
{
	include($phpbb_root_path . \'arcade/includes/common.\' . $phpEx);
	// Initialize arcade auth
	$auth_arcade->acl($user->data);
	// Initialize arcade class
	$arcade = new arcade(false);

	foreach ($arcade->newest_games as $newest_games)
	{
		$template->assign_block_vars(\'newest_games\', array(
			\'U_GAME_PLAY\'	=> $arcade->url("mode=play&amp;g={$newest_games[\'game_id\']}#game_top"),
			\'GAME_IMAGE\'	=> ($newest_games[\'game_image\'] != \'\') ? $arcade->url("img={$newest_games[\'game_image\']}") : \'\',
			\'GAME_NAME\'		=> $newest_games[\'game_name\'],
		));
	}

	$total_games = sizeof($arcade->games);
	if ($total_games > 1)
	{
		$total_games = sprintf($user->lang[\'ARCADE_TOTAL_GAMES\'], $arcade->number_format($total_games));
	}
	else if ($total_games == 1)
	{
		$total_games = sprintf($user->lang[\'ARCADE_TOTAL_GAME\'], $arcade->number_format($total_games));
	}

	$total_games_played = \'\';
	if ($arcade->totals[\'games_played\'] > 1)
	{
		$total_games_played = sprintf($user->lang[\'ARCADE_TOTAL_PLAYS\'], $arcade->number_format($arcade->totals[\'games_played\']), $arcade->time_format($arcade->totals[\'games_time\']));
	}
	else if ($arcade->totals[\'games_played\'] == 1)
	{
		$total_games_played = sprintf($user->lang[\'ARCADE_TOTAL_PLAY\'], $arcade->number_format($arcade->totals[\'games_played\']), $arcade->time_format($arcade->totals[\'games_time\']));
	}

	$template->assign_vars(array(
		\'S_ARCADE_BLOCK\'		=> true,
		\'TOTAL_GAMES\'			=> $total_games,
		\'TOTAL_GAMES_PLAYED\'	=> $total_games_played,
	));

	// Start of Lastest highscores
	foreach ($arcade->latest_highscores as $latest_highscore)
	{
		$latest_scoreuser = $arcade->get_username_string(\'full\', $latest_highscore[\'game_highuser\'], $latest_highscore[\'username\'], $latest_highscore[\'user_colour\']);
		$latest_score = sprintf($user->lang[\'ARCADE_WELCOME_SCORE\'], $arcade->number_format($latest_highscore[\'game_highscore\']), $user->format_date($latest_highscore[\'game_highdate\']));
		$game_url = \'&lt;a href="\' . $arcade->url(\'mode=play&amp;g=\' . $latest_highscore[\'game_id\'] . \'#game_top\') . \'"&gt;\' . $latest_highscore[\'game_name\'] . \'&lt;/a&gt;\';
		$game_url_tooltip = \'&lt;a class="tooltip" href="\' . $arcade->url(\'mode=play&amp;g=\' . $latest_highscore[\'game_id\'] . \'#game_top\') . \'"&gt;\' . $latest_highscore[\'game_name\'] . \'&lt;span class="aheader"&gt;\' . $latest_score . \'&lt;/span&gt;&lt;/a&gt;\';

		$template->assign_block_vars(\'latest_scores\', array(
			\'HEADING_CHAMP\' 			=> sprintf($user->lang[\'ARCADE_WELCOME_CHAMP\'], $latest_scoreuser, $game_url),
			\'HEADING_CHAMP_SCORE\'		=> $latest_score,
			\'HEADING_CHAMP_TOOLTIP\' 	=> sprintf($user->lang[\'ARCADE_WELCOME_CHAMP\'], $latest_scoreuser, $game_url_tooltip),
		));
	}
	// End Lastest Highscores
}</textarea><br /><br />Block html code:<br />
<textarea rows="15" cols="30" readonly="readonly" onclick="this.focus(); this.select();"><!-- IF S_ARCADE_BLOCK -->
&lt;h3&gt;{L_ARCADE}&lt;/h3&gt;
&lt;div class="panel"&gt;
	&lt;div class="inner"&gt;&lt;span class="corners-top"&gt;&lt;span&gt;&lt;/span&gt;&lt;/span&gt;
		&lt;div class="content"&gt;
			<!-- BEGIN newest_games -->
				&lt;p style="margin: 4px;"&gt;<!-- IF newest_games.GAME_IMAGE -->&lt;a href="{newest_games.U_GAME_PLAY}"&gt;&lt;img src="{newest_games.GAME_IMAGE}" alt="{newest_games.GAME_NAME}" title="{newest_games.GAME_NAME}" width="20" height="20" style="vertical-align: middle;" /&gt;&lt;/a&gt;<!-- ENDIF -->&nbsp;{newest_games.GAME_NAME}&lt;/p&gt;
			<!-- END newest_games -->
			<!-- IF TOTAL_GAMES -->
			&lt;br /&gt;
			&lt;p style="text-align: center;">{TOTAL_GAMES}<!-- IF TOTAL_GAMES_PLAYED -->&nbsp;&nbsp;{TOTAL_GAMES_PLAYED}<!-- ENDIF -->&lt;/p>
			<!-- ENDIF -->
			<!-- IF .latest_scores -->
				&lt;ul&gt;
			<!-- BEGIN latest_scores -->
					&lt;li&gt;{latest_scores.HEADING_CHAMP}&lt;/li&gt;
			<!-- END latest_scores -->
				&lt;/ul&gt;
			<!-- ELSE -->
				&lt;div style="text-align: center;">{L_ARCADE_NO_LATEST_HIGHSCORES}&lt;/div&gt;
			<!-- ENDIF -->
		&lt;/div&gt;
	&lt;span class="corners-bottom">&lt;span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;
<!-- ENDIF --></textarea>',
));

?>