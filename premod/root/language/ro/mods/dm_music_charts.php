<?php

/**
* dm_music_charts [ENGLISH]
*
* @package language
* @version $Id: dm_music_charts.php 144 2011-01-30 03:01:22Z femu $
* @copyright (c) 2010 femu - http://die-muellers.org
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
//
// Some characters you may want to copy&paste:
// ’ » „ “ — …
//

$lang = array_merge($lang, array(
	'DM_MC_ADD_SONG'					=> 'Add a new Song',
	'DM_MC_ADDED_BY'					=> 'Added by',
	'DM_MC_ADDED_TIME'					=> '<i>Added on: <strong>%1$s</strong></i>',
	'DM_MC_ALL_TITLE'					=> 'The Charts - All Songs',
	'DM_MC_ALREADY_EXISTS_ERROR'		=> 'The song <strong>%1$s</strong> from <strong>%2$s</strong> already exists. Please select another song to add.',
	'DM_MC_ALREADY_VOTED'				=> 'You already voted for this song',
	'DM_MC_ANNOUNCE_MSG'				=> 'Hello everybody,

there was a new song added to the Music Charts!

<img src=%4$s height=100px style="float: left; margin-right: 10px;">Title: <strong>%1$s</strong>
Artist: <strong>%2$s</strong>

Click <strong>%3$s<strong> to go the list of the newest songs!

Have fun watching and listening the new song and don\'t forget to vote!',
	'DM_MC_ANNOUNCE_TITLE'				=> '[NEW] %1$s of %2$s',
	'DM_MC_ARTIST_ERROR'				=> 'You have to enter an artist!',
	'DM_MC_BACKLINK'					=> '%sBack to the Chart Overview%s',
	'DM_MC_BACKLINK_ADD'				=> '<br /><br />%sBack to the adding page%s',
	'DM_MC_BEST_POS'					=> 'Best Ranking',
	'DM_MC_BONUS_WINNER'				=> 'The random winner of the bonus price from those users, who voted, is: %1$s<br /><br />Congratulations for the bonus of <strong>%2$s %3$s</strong>!',
	'DM_MC_BONUS_WINNER_HEADER'			=> 'Congratulations',
	'DM_MC_CHARTS'						=> 'The Charts - Top %s',
	'DM_MC_CHART_NEWEST'				=> 'The Charts - The %1$s newest Songs',
	'DM_MC_CLICK_LINK'					=> 'Click %shere%s to return to the Charts',
	'DM_MC_CLICK_VIDEO'					=> 'Click here to watch the video!',
	'DM_MC_COPYRIGHT'					=> '<strong>Powered by DM Music Charts</strong><br />&copy; 2010, 2011 by femu at <a href="http://www.die-muellers.org" onclick="window.open(this.href); return false">Die Muellers Dot Org</a>',
	'DM_MC_COUNT_ERROR'					=> 'Sorry. We have reached our max. allowed number of entries.<br />Please try again later or ask the Admin to remove some older entries in order to give you the possibility to enter new songs.',
	'DM_MC_COVER_FORMAT_ERROR'			=> 'The link to the album cover has to start with <strong>http://</strong>!',
	'DM_MC_CURR_POS'					=> 'Current',
	'DM_MC_DELETE_SONG'					=> 'Delete Song',
	'DM_MC_DELETE_SONG_REGULAR'			=> 'Are you sure you want to delete this song?',
	'DM_MC_DELETE_SONG_UPS'				=> 'Are you sure you want to delete this song and remove the %1$s, which the user received for it?',
	'DM_MC_DELETE_SUCCESS'				=> 'The song <strong>%1$s</strong> was successfully deleted.',
	'DM_MC_EDIT_SONG'					=> 'Edit your entry',
	'DM_MC_EMBED_FORMAT_ERROR'			=> 'The embedded code has to start with something like <strong>object</strong> or <strong>iframe</strong>!',
	'DM_MC_FIELDS_ERROR'				=> 'You have to enter at least a song title and an artist!',
	'DM_MC_FIRST'						=> '1st Place',
	'DM_MC_FROM'						=> 'from',
	'DM_MC_GOTO_WEB'					=> 'Goto the web site of %1$s',
	'DM_MC_GO_CHARTS'					=> 'here',
	'DM_MC_HEADER'						=> 'DM Music Charts - Your Charts over here',
	'DM_MC_HEADER_EXPLAIN'				=> 'Here you can create your own charts and rate them. Every registered user can add songs and every registered user can vote for them. Within the running voting period you only can vote once per song. As soon as the current period ends, you may vote again for your favourite songs. <strong>Of course you can vote for different songs, not only one!<br /><br />%2$s</strong><br /><br />The current voting period ends on: <strong>%1$s</strong><br /><br /><br /><strong>Have fun and good luck for your favourites!</strong>',
	'DM_MC_HOT'							=> 'Top',
	'DM_MC_INDEX_WINNER'				=> 'The last Music-Charts winners from',
	'DM_MC_LAST'						=> 'Last Winners',
	'DM_MC_LAST_POS'					=> 'Last Ranking',
	'DM_MC_LAST_WINNERS'				=> 'The winners from the last voting period',
	'DM_MC_LAST_WINNERS_PORTAL'			=> 'The winners from the last Music Charts voting period',
	'DM_MC_MULTI'						=> '%1$s Songs',
	'DM_MC_MULTI_VOTERS'				=> '<strong>Currently %1$s users voted in our Charts</strong>.',
	'DM_MC_NEEDED'						=> 'Fields marked with [*] have to be filled. All other fields are optional.',
	'DM_MC_NEWEST_XX'					=> 'The %1$s newest songs',
	'DM_MC_NEWEST_PERIOD'				=> 'The newest songs, which were added during the current period',
	'DM_MC_NEW_PLACED'					=> 'This song was added new',
	'DM_MC_NEW_SONG'					=> 'New Song',
	'DM_MC_NOT'							=> 'Flop',
	'DM_MC_NOT_LOGGED_IN'				=> 'You need to be logged in, in order to vote',
	'DM_MC_NO_CHARTS'					=> 'Sorry, currently there are no charts to show',
	'DM_MC_NO_SONGS'					=> 'No entries available',
	'DM_MC_NO_VOTES'					=> 'Nobody voted during the last period. Therefore we have no lucky winners.',
	'DM_MC_NO_VOTERS'					=> '<strong>Currently no user voted in our Charts.</strong>',
	'DM_MC_NO_WINNER'					=> 'No winners yet',
	'DM_MC_OWN_CHARTS'					=> 'Charts added',
	'DM_MC_OWN_MULTI'					=> 'Added <strong>%s</strong> songs up to now',
	'DM_MC_OWN_NO_CHARTS'				=> 'Didn\'t add any song up to now',
	'DM_MC_OWN_SINGLE'					=> 'Added <strong>1</strong> song up to now',
	'DM_MC_PERIOD'						=> 'Voting Period: <strong>%1$s %2$s</strong>',
	'DM_MC_PICTURE_HOT_TITLE'			=> 'Click here, if you like the song from %1$s',
	'DM_MC_PICTURE_NOT_TITLE'			=> 'Click here, if you don\'t like the song from %1$s',
	'DM_MC_PICTURE_TITLE'				=> 'The album cover for the song %1$s',
	'DM_MC_PM_MESSAGE'					=> 'Hello %1$s,<br /><br />congratulations for your  <strong>%2$s. place</strong> in the DM Music Charts!<br /><br />The song <strong>%3$s</strong> from <strong>%4$s</strong> you posted in the charts, was voted to the %2$s. place from the users of our board during the last voting period!',
	'DM_MC_PM_MESSAGE_UPS'				=> 'Hello %1$s,<br /><br />congratulations for your  <strong>%2$s. place</strong> in the DM Music Charts!<br /><br />The song <strong>%3$s</strong> from <strong>%4$s</strong> you posted in the charts, was voted to the %2$s. place from the users of our board during the last voting period!<br /><br />As a little gift, we are happy to say, that you earned <strong>%5$s %6$s</strong> for this.',
	'DM_MC_PM_SUBJECT'					=> 'Congratualations to the %s. place!',
	'DM_MC_PM_VOTERS_SUBJECT'			=> 'Congratualations to the bonus winner!',
	'DM_MC_PM_VOTERS_MESSAGE'			=> 'Hello %1$s,<br /><br />out of all users, which take part in the Music Charts, you are the lucky winner of the bonus of <strong>%2$s %3$s</strong>.<br /><br />Have fun and stay with us in the next election!',
	'DM_MC_PORTAL_ARTIST'				=> 'Artist',
	'DM_MC_PORTAL_GOTO'					=> 'Click here to go the Charts',
	'DM_MC_PORTAL_HEADER'				=> 'Recent Music Charts',
	'DM_MC_PORTAL_POSTER'				=> 'posted by',
	'DM_MC_PORTAL_TITLE'				=> 'Title',
	'DM_MC_RANK'						=> 'Rank',
	'DM_MC_RANK_ASC'					=> 'If songs have the same voting, then songs, which were rated <strong>higher</strong> in the last voting period, will have the preferred ranking!',
	'DM_MC_RANK_DESC'					=> 'If songs have the same voting, then songs, which were rated <strong>lower</strong> in the last voting period, will have the preferred ranking',
	'DM_MC_RATE'						=> 'Rating',
	'DM_MC_REQUIRED'					=> 'Fields marked with a <strong>[*]</strong> have to be filled!',
	'DM_MC_REQUIRED_ALBUMCOVER_ERROR'	=> 'You have to enter a <strong>link to a cover</strong> for the album!',
	'DM_MC_REQUIRED_ALBUM_ERROR'		=> 'You have to enter an <strong>album</strong> to the song!',
	'DM_MC_REQUIRED_VIDEO_ERROR'		=> 'You have to enter an <strong>embedded code</strong> to a video clip of the song!',
	'DM_MC_REQUIRED_WEBSITE_ERROR'		=> 'You have to enter a <strong>link to the website</strong> of the artist!',
	'DM_MC_REQUIRED_YEAR_ERROR'			=> 'You have to enter the <strong>publishing year</strong> for the song!',
	'DM_MC_SECOND'						=> '2nd Place',
	'DM_MC_SHOW_ALL'					=> 'Show all %1$s Songs',
	'DM_MC_SHOW_VIDEO'					=> 'Watch the video for the song %1$s',
	'DM_MC_SINGLE'						=> '1 Song',
	'DM_MC_SINGLE_VOTER'				=> '<strong>Currently only one user voted in our Charts.</strong>',
	'DM_MC_SONG'						=> 'Title',
	'DM_MC_SONG_ADDED'					=> 'Your song was successfully added.<br />',
	'DM_MC_SONG_ADDED_UPS'				=> 'Your song was successfully added and you earned <strong>%1$s %2$s</strong> for it.<br />',
	'DM_MC_SONG_ALBUM'					=> 'Album',
	'DM_MC_SONG_ALBUM_EXPLAIN'			=> 'Name of the album from which the song was extracted',
	'DM_MC_SONG_ALBUM_PICTURE'			=> 'Album Cover',
	'DM_MC_SONG_ALBUM_PICTURE_EXPLAIN'	=> 'Enter here the complete link to the album cover image (ie. http://www.yourdomain.com/images/cover.jpg)',
	'DM_MC_SONG_ARTIST'					=> 'Name of the artist or the band',
	'DM_MC_SONG_ARTIST_ADD'				=> '[*] Name of Artist or Band Name',
	'DM_MC_SONG_ARTIST_EXPLAIN'			=> 'Enter here the name of the artist or the band name',
	'DM_MC_SONG_EDIT_SUCCESS'			=> 'The song <strong>%1$s</strong> was successfully edited.',
	'DM_MC_SONG_TITLE'					=> 'Title',
	'DM_MC_SONG_TITLE_ADD'				=> '[*] Title',
	'DM_MC_SONG_TITLE_EXPLAIN'			=> 'Enter here the title of the song',
	'DM_MC_SONG_VIDEO'					=> 'Video Clip',
	'DM_MC_SONG_VIDEO_EXPLAIN'			=> 'Enter here the embedded code, which you receive ie. with YouTube. Take care, that the dimension of the video don\'t exceed <strong>640 x 505</strong> (you can see the dimension inside the embedded code)!<br /><br />To fill the video window, you can change the video size doing following calculation. If the size is ie. 400 x 291, calculate the new size as 640 x (640 multiplied with 291 devided through 400). So you will get the new size as 640 x 466. This way the aspect ratio will remain the same!<br /><br /><strong>Please take care, that you don\'t violate any copyrights!</strong>',
	'DM_MC_SONG_WEBSITE'				=> 'Web Site',
	'DM_MC_SONG_WEBSITE_EXPLAIN'		=> 'Enter here the link to the homepage of the artist or the band (complete incl. http://)',
	'DM_MC_SONG_YEAR'					=> 'Year',
	'DM_MC_SONG_YEAR_EXPLAIN'			=> 'The year where the song or the album was published',
	'DM_MC_THIRD'						=> '3rd Place',
	'DM_MC_TITLE'						=> 'DM Music Charts',
	'DM_MC_TITLE_ERROR'					=> 'You have to enter a song title!',
	'DM_MC_TITLE_SHORT'					=> 'Music Charts',
	'DM_MC_TOP_TEN'						=> 'Show Top %s',
	'DM_MC_TOP_XX'						=> 'The Top %1$s',
	'DM_MC_USER'						=> 'User',
	'DM_MC_VIDEO_EXIST_ERROR'			=> 'The entered video ID from the DM Video mod does not exist. Please check your entry!',
	'DM_MC_VIDEO_NO'					=> 'DM Video ID',
	'DM_MC_VIDEO_NO_EXPLAIN'			=> 'The DM Video Mod is installed over here. If the video you might like to add, already exists over here, you can simply enter the video ID over here. To get the ID, please check the link for the video in your browser. Take the number after the v=. If you use this option, you don\'t have to enter the embedded code.',
	'DM_MC_VIEWONLINE'					=> 'Is watching the Music Charts',
	'DM_MC_VOTE_CHECK_FIRST'			=> '<br /><br />Hello %1$s,<br /><br />
	the new rating period for the Music Charts has just started! Take the opportunity and go directly to the charts and rate your favourites. If there\'s nothing you like, just add your own song.<br /><br /><strong>Thanks a lot!</strong>',
	'DM_MC_VOTE_CHECK_LINK'				=> '<strong>%sClick here to go to the Charts!%s</strong><br /><br />',
	'DM_MC_VOTE_CHECK_SECOND'			=> '<br /><br />Hello %1$s,<br /><br />
	the current rating period for the Music Charts is running out shortly! Please take a short moment to visit the charts and check, if there are new songs, which you haven\'t rated yet.<br /><br /><strong>Thanks a lot!</strong>',
	'DM_MC_VOTE_SUCCESS'				=> '<strong>Your voting was successfully set!</strong><br /><br />Thanks a lot for your voting for the song <strong>%1$s</strong> from <strong>%2$s</strong>.<br />You can vote again for this song as soon as the current period ends and the voting table was reset.',
	'DM_MC_VOTE_SUCCESS_UPS'			=> '<strong>Your voting was successfully set!</strong><br /><br />Thanks a lot for your voting for the song <strong>%1$s</strong> from <strong>%2$s</strong>.<br />You received <strong>%3$s %4$s</strong> for your voting!<br /><br />You can vote again for this song as soon as the current period ends and the voting table was reset.',
	'DM_MC_VOTED_USERS_MULTI'			=> 'Following users already voted: ',
	'DM_MC_VOTED_USERS_SINGLE'			=> 'Following user already voted: ',
	'DM_MC_WEBSITE_FORMAT_ERROR'		=> 'The link to the webpage of the artist has to start with <strong>http://</strong>!',
	'DM_MC_WON'							=> 'Earnings',
	'DM_MC_WON_VALUE'					=> '%1$s %2$s',
	'DM_MC_YEAR_FORMAT_ERROR'			=> 'The year of the song should really be somewhere between the <strong>20. or 21. century</strong>!',

	'UMIL_DM_MC_INSTALL_SUCCESFUL'		=> 'The installation was done successfully and also the tables were filled with some basic values.',
	'UMIL_DM_MC_NAME'					=> 'DM Music Charts',
	'UMIL_DM_MC_REMOVE_ENTRIES'			=> 'Entries were successfully removed',
	
	'DM_MUSIC_CHARTS'					=> 'Music Charts',
));

?>