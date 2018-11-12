<?php

/**
* info_acp_dm_music_charts [English]
*
* @package language
* @version $Id: info_acp_dm_music_charts.php 144 2011-01-30 03:01:22Z femu $
* @copyright (c) 2010 femu - http://die-muellers.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
//
// Some characters you may want to copy&paste:
// ’ » „ “ — …
//

$lang = array_merge($lang, array(
	'DM_MC_ACP_PAGE'					=> 'Number of entires per page (im ACP)',
	'DM_MC_ACP_PAGE_EXPLAIN'			=> 'Enter here how much entries you like to see per page in the ACP.',
	'DM_MC_ADD'							=> 'Add',
	'DM_MC_ALL_CHARTS'					=> 'All entries',
	'DM_MC_ANNOUNCE_SETTINGS'			=> 'Announcement Settings',
	'DM_MC_CHECK_1_ENABLE'				=> 'Inform user about new period?',
	'DM_MC_CHECK_1_ENABLE_EXPLAIN'		=> 'Check, if the users should be informed that a new rating period started. This message will be shown only once to the users.',
	'DM_MC_CHECK_2_ENABLE'				=> 'Inform the users short before the end of the period?',
	'DM_MC_CHECK_2_ENABLE_EXPLAIN'		=> 'Check, if the users should see a reminder message, if the current period is short before ending. You will need the below time. This message will be shown only once to the users. <strong>Above option needs to be enabled too!</strong>',
	'DM_MC_CHECK_TIME'					=> 'Time frame',
	'DM_MC_CHECK_TIME_EXPLAIN'			=> 'Enter here how many hours before the end of the period the users should be informed (if above option is enabled). Enter the time in hours (ie. 24)!',
	'DM_MC_CLICK_RETURN'				=> 'Click %shere%s to return to the Charts Management',
	'DM_MC_CONFIG'						=> 'Configuration',
	'DM_MC_CONFIG_ANNOUNCE_ENABLE'		=> 'Announce new Charts Songs',
	'DM_MC_CONFIG_ANNOUNCE_ENABLE_EX'	=> 'Set to Yes, if you like to announce new songs in below selected forum',
	'DM_MC_CONFIG_ANNOUNCE_FORUM'		=> 'Select a forum',
	'DM_MC_CONFIG_ANNOUNCE_FORUM_EX'	=> 'Select her the forum, in which new songs should be announced',
	'DM_MC_CONFIG_EXPLAIN'				=> 'Here you can set or edit different values. Please read every explanation very carefully!',
	'DM_MC_CONFIG_MAIN_SETTINGS'		=> 'Settings',
	'DM_MC_CONFIG_OK'					=> 'The Chart Configuration was successfully updated.',
	'DM_MC_CONFIG_TITLE'				=> 'DM Music Charts Configuration',
	'DM_MC_CONFIG_UPDATED'				=> 'The configuration was usccessfully updated.',
	'DM_MC_CONF_CLICK_RETURN'			=> 'Click %shere%s to return to the Charts Configuration.',
	'DM_MC_DBASE_OK'					=> 'Song was edited successfully.',
	'DM_MC_DEFAULT_SORT'				=> 'Voting direction',
	'DM_MC_DEFAULT_SORT_EXPLAIN'		=> 'Here you can set, how the results are display, if the songs have the same results. <strong>Ascending</strong> means, that songs with a higher rating during the last period are put in front (so better ranking) and <strong>Descending</strong> means, that songs with lower rating will get the preferred ranking.',
	'DM_MC_DELETED'						=> 'The entry was successfully deleted',
	'DM_MC_DELETE_OK'					=> 'Song was deleted successfully.',
	'DM_MC_EDIT'						=> 'Edit song',
	'DM_MC_FIRST'						=> '%1$s for the 1st place',
	'DM_MC_FROM_NAME'					=> 'posted by',
	'DM_MC_HOURS'						=> 'hour(s)',
	'DM_MC_LAST_RANK'					=> 'last position',
	'DM_MC_LAST_VOTERS_WINNER_ID'		=> 'User-ID of the last bonus winner',
	'DM_MC_LAST_VOTERS_WINNER_ID_EX'	=> 'Here you can see the user ID of the last bonus winner',
	'DM_MC_MANAGE'						=> 'Manage Charts',
	'DM_MC_MAX_ENTRIES'					=> 'Max. allowed entries',
	'DM_MC_MAX_ENTRIES_EXPLAIN'			=> 'Enter here the max. number of entries, which are allowed in the Charts. The same value is used for the option <strong>Show All</strong>. This value needs to be higher than the value for the Top XX! 0 means unlimited.',
	'DM_MC_MAX_LAST'					=> 'Number of newest songs',
	'DM_MC_MAX_LAST_EXPLAIN'			=> 'Enter here the number of songs, which you like to display as newest.',
	'DM_MC_MAX_PER_PAGE'				=> 'Number of entries per page (Users)',
	'DM_MC_MAX_PER_PAGE_EXPLAIN'		=> 'Enter here the number of entries, which should be shown per page, if the user clicks <strong>Show all songs</strong>.',
	'DM_MC_MAX_TOP'						=> 'Number of entries for the Top XX',
	'DM_MC_MAX_TOP_EXPLAIN'				=> 'Enter here the number of entries, which should be shown as Top XX. So something like Top 5, Top 10, etc. Keep in mind, that this value should be smaller, than the value for max. allowed entries.',
	'DM_MC_MULTI'						=> '%1$s entries',
	'DM_MC_NEED_ARTIST'					=> 'You need to enter an artist',
	'DM_MC_NEED_DATA'					=> 'There are missing needed datas',
	'DM_MC_NEED_TITLE'					=> 'You need to enter a title',
	'DM_MC_NEXT_RESET'					=> 'Next reset date',
	'DM_MC_NEXT_RESET_EXPLAIN'			=> 'Here you can see, when the Charts will be reset the next time. If you change the start time above, you might need to save the configuration twice, until you see the correct reset date!',
	'DM_MC_NO_BONUS_WINNER'				=> 'Es gibt keinen Eintrag',
	'DM_MC_NO_ENTRY'					=> 'No entries',
	'DM_MC_PAGE_DESC'					=> 'Here you can edit or delete the entries the users made on the Charts page.',
	'DM_MC_PAGE_TITLE'					=> 'DM Music Charts Management',
	'DM_MC_PERIOD'						=> 'Period in weeks',
	'DM_MC_PERIOD_EXPLAIN'				=> 'Enter here the weekly time in seconds (<strong>on a per week basis</strong>). So one week is 604800 seconds.',
	'DM_MC_PM'							=> 'Private Message',
	'DM_MC_PM_ENABLE'					=> 'PM for the winners?',
	'DM_MC_PM_ENABLE_EXPLAIN'			=> 'Set here, if you would like to send a PM to the lucky winners of the election and also the random of the bonus price (if enabled).',
	'DM_MC_PM_EXPLAIN'					=> 'Here you can do some settings for sending private messages.',
	'DM_MC_PM_USER'						=> 'Charts Manager',
	'DM_MC_PM_USER_EXPLAIN'				=> 'Enter here the ID of the user, from which the PM is sent to the winners.',
	'DM_MC_POINTS_PER_VOTE'				=> '%s per vote',
	'DM_MC_POINTS_PER_VOTE_EXPLAIN'		=> 'Enter here how much %s the user will receive for each vote they give (0 = deactivate this ooption)',
	'DM_MC_RANKING'						=> '%1$s for the three Top songs',
	'DM_MC_RANKING_EXPLAIN'				=> 'Here you can give %1$s for the three best song within a period. The will be given to the users, who posted the songs.',
	'DM_MC_REALLY_DELETE'				=> 'Are you sure you want delete the selected entry?',
	'DM_MC_REQUIRED'					=> 'Required Fields',
	'DM_MC_REQUIRED_ALBUM'				=> 'Album to the song',
	'DM_MC_REQUIRED_ALBUMCOVER'			=> 'Album Cover',
	'DM_MC_REQUIRED_EXPLAIN'			=> 'Here you can set, if you want additional fileds marked as required. These fields will then be marked with [*] in the adding page and they also will be proofed, if they are filled.',
	'DM_MC_REQUIRED_VIDEO'				=> 'Video Clip',
	'DM_MC_REQUIRED_WEBSITE'			=> 'Link to the website of the artist',
	'DM_MC_REQUIRED_YEAR'				=> 'Publishes year',
	'DM_MC_SECOND'						=> '%1$s for the 2nd place',
	'DM_MC_SINGLE'						=> '1 entry',
	'DM_MC_SONG_ALBUM'					=> 'Album',
	'DM_MC_SONG_ALBUM_EXPLAIN'			=> 'Enter here the title of the album, which the song is extracted from.',
	'DM_MC_SONG_ARTIST'					=> 'Artist',
	'DM_MC_SONG_ARTIST_EXPLAIN'			=> 'Enter the name of artist or the band',
	'DM_MC_SONG_PICTURE'				=> 'Album Cover Image',
	'DM_MC_SONG_PICTURE_EXPLAIN'		=> 'Enter here the link to the album cover image, if available (use the complete link incl. http://. Don\'t use backlinks and keep the copyrights in mind!)',
	'DM_MC_SONG_TITLE'					=> 'Title',
	'DM_MC_SONG_TITLE_EXPLAIN'			=> 'Enter here the title of the song',
	'DM_MC_SONG_URL'					=> 'Web Site',
	'DM_MC_SONG_URL_EXPLAIN'			=> 'Enter here the complete link to the web site of the artist.',
	'DM_MC_SONG_VIDEO'					=> 'Video',
	'DM_MC_SONG_VIDEO_EXPLAIN'			=> 'Enter here the embedded code, which can receive ie. with YouTube. Take care, that the dimesion of the video don\'t exceed <strong>640x505</strong> (you can see the dimension inside the embedded code)!<br /><br /><strong>Please take care, that you don\'t violate any copyrights!</strong>',
	'DM_MC_SONG_VIDEO_ID'				=> 'DM Video ID',
	'DM_MC_SONG_VIDEO_ID_EXPLAIN'		=> 'The DM Video Mod is installed over here. If the video you might like to add, already exists over here, you can simply enter the video ID over here. To get the ID, please check the link for the video in your browser. Take the number after the v=. If you use this option, you don\'t have to enter the embedded code.',
	'DM_MC_SONG_YEAR'					=> 'Year',
	'DM_MC_SONG_YEAR_EXPLAIN'			=> 'Enter here the year, where the song or the album was recorded.',
	'DM_MC_STARTING_TIME'				=> 'Start Time',
	'DM_MC_STARTING_TIME_EXPLAIN'		=> 'Enter here the start time (based on the time of your board timezone), which will be the basis for the end period calculation. If your personal timezone differs, you will see another time in the brackets than you entered! <strong>Please use the UNIX time format!</strong> To find out the correct value, go to <a href="http://unixtime.de" onclick="window.open(this.href); return false">Unixtime.de</a>. Here you can convert the time vice versa. The calculation will then use this value and the period value to calculate the ending time for the current voting period. A manual entry is only needed when you start the charts. Later on, the values are set automatically!',
	'DM_MC_THIRD'						=> '%1$s for the 3rd place',
	'DM_MC_TITLE'						=> 'DM Music Charts',
	'DM_MC_UPDATED'						=> 'The entry was successfully edited',
	'DM_MC_UPS'							=> '%1$s for adding a new song',
	'DM_MC_UPS_EXPLAIN'					=> 'Since the Ultimate Points Mod is installed, you may set how much %1$s the user will receive, when he/she add a new song. Set 0 to disable this feature.',
	'DM_MC_UPS_TITLE'					=> 'Ultimate Points',
	'DM_MC_UPS_TITLE_EXPLAIN'			=> 'Since you have the Ultimate Points Mod (UPS) installed, you may configure some additional settings.',
	'DM_MC_VOTERS_POINTS'				=> '%s for the winner of the voters',
	'DM_MC_VOTERS_POINTS_EXPLAIN'		=> 'Here you can set an amount of %s, which the winner of the users, which voted, will receive (0 = deactivates this function)',
	'DM_MC_WEEK'						=> '1 week',
	'DM_MC_WEEKS'						=> '%1$s weeks',
	'DM_MC_WINNERS_PER_PAGE'			=> 'Winners per page',
	'DM_MC_WINNERS_PER_PAGE_EXPLAIN'	=> 'Enter here, how much of the winners should be shown on the winners page',

	'LOG_ADMIN_CHART_CONFIG_UPDATED'	=> 'Updated the DM Music Charts configuration',
	'LOG_ADMIN_CHART_DELETED'			=> 'Deleted the DM Music Chart entry <strong>%1$s</strong>',
	'LOG_ADMIN_CHART_RESET'				=> '<strong>Started the automatic reset of the DM Music Charts</strong>',
	'LOG_ADMIN_CHART_UPDATED'			=> 'Updated the DM Music Chart entry <strong>%1$s</strong>',

	'LOG_USER_ADDED_SONG'				=> 'Added the song <strong>%1$s</strong>.',
	'LOG_USER_EDITED_SONG'				=> 'Edited the song <strong>%1$s</strong>.',

	'UMIL_DM_MC_INSTALL_SUCCESFUL'		=> 'The installation and the filling of the database with basic values was successful.',
	'UMIL_DM_MC_NAME'					=> 'DM Music Charts',
	'UMIL_DM_MC_REMOVE_ENTRIES'			=> 'Entries were successfully removed',
	
	'DM_MUSIC_CHARTS'					=> 'Music Charts',
));

?>