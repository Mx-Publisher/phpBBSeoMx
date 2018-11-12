<?php
/** 
*
* @name portal_xl.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: portal_xl.php,v 1.2 2009/05/15 22:13:03 portalxl group Exp $
*
* @copyright (c) 2007, 2011 PortalXL Group
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
// ’ » “ ” …
//
global $config, $user;

$lang = array_merge($lang, array(

	// general definitions
	'PORTAL'			=> 'Portal',
	'PORTAL_INDEX'		=> 'Portal index',
	'ANNOUNCMENTS'		=> 'Announcements',
	'NEWS'			    => 'News',
	'POLL'			    => 'Poll',
	'NO_POLL'			=> 'No poll available',
	'READ_FULL'			=> 'Read all',
	'NO_NEWS'			=> 'No news',
	'POSTED_BY'			=> 'Poster',
	'COMMENTS'			=> 'Comments',
	'VIEW_COMMENTS'		=> 'View comments',
	'POST_REPLY'		=> 'Write comments',
	'CLOCK'				=> 'Clock',
	'TOPIC_VIEWS'		=> 'Views',
	'FORUMS'		    => 'Forums',
	'EXPAND'		    => 'Expand',
	'COLLAPSE'		    => 'Collapse',
	'INVERT'		    => 'Invert',
	'LEFTCOL'		    => 'Left +/-',
	'RIGHTCOL'		    => 'Right +/-',

	// who is online
	'WIO_TOTAL'			=> 'Total',
	'WIO_REGISTERED'	=> 'Registered',
	'WIO_HIDDEN'		=> 'Hidden',
	'WIO_GUEST'			=> 'Guest',
	//'RECORD_ONLINE_USERS'=> 'View record: <strong>%1$s</strong><br />%2$s',

	// welcome
	'WELCOME'			=> 'Welcome',
	
	// mp3 player
	'MEDIA_PLAYER'			=> 'Media player',
	'MEDIA_PLAYER_POPUP'	=> 'Media player',
	'MEDIA_UPLOAD'			=> 'Upload media',
	'MEDIA_PLAYER_VERSION'	=> 'Media Player 2010',

	// user menu
	'USER_MENU'			=> 'User menu',
	'UM_LOG_ME_IN'		=> 'Remember me',
	'UM_HIDE_ME'		=> 'Hide me',
	'UM_MAIN_SUBSCRIBED'=> 'Subscribed',
	'UM_BOOKMARKS'		=> 'Bookmarks',

	// statistic
	'ST_NEW'				=> 'New',
	'ST_NEW_POSTS'			=> 'Post',
	'ST_NEW_TOPICS'			=> 'Topic',
	'ST_NEW_ANNS'			=> 'Announcement',
	'ST_NEW_STICKYS'		=> 'Sticky',
	'ST_TOP'				=> 'Total',
	'ST_TOP_ANNS'			=> 'Announcement',
	'ST_TOP_STICKYS'		=> 'Sticky',
	'ST_TOT_ATTACH'			=> 'Attachments',
	'ST_TOT_FILES'			=> 'Files(s)',
	'ST_PORTAL_STARTDATE'	=> 'Startdate',

	'FILES_ATTACHMENTS'		=> 'Attachments statistics',
	'FILES_PER_DAY'			=> 'Attachments per day',
	'FILES_PER_POST'		=> 'Attachments per post',
	'FILES_PER_TOPIC'		=> 'Attachments per topic',
	'FILES_PER_USER'		=> 'Attachments per user',

	// visit counter
	'ST_TOT_VISIT'				=> 'Total visits',
	'ST_LAT_VISIT'				=> 'Your IP',

	// attachments
	'TOP_COUNT'         		=> 'Dowloaded',
	'TOP_DATE'         			=> 'Posted on',
	'TOP_FILENAME'         		=> 'Files',
	'TOP_FILESIZE'         		=> 'Size',
	'TOP_TEL'         			=> 'Top Downloadings',
	'TOP_X'         			=> 'Times',
	'VIEW_TOPIC_ATTACHMENTS' 	=> 'Total attachments',

	// search
	'SH'		=> 'go',
	'SH_SITE'	=> 'forums',
	'SH_POSTS'	=> 'posts',
	'SH_AUTHOR'	=> 'author',
	'SH_ENGINE'	=> 'search engines',
	'SH_ADV'	=> 'advanced search',
	
	// recent
	'RECENT_TOPIC'		=> 'Recent topics',
	'RECENT_ANN' 		=> 'Announcements',
	'RECENT_HOT_TOPIC' 	=> 'Recent replies',
	'LAST_REPLIED'      => 'Last replied',
   	'BY'            	=> 'By',
   	'ON'            	=> 'On',
   
	// random member
	'RND_MEMBER'	=> 'Random member',
	'RND_JOIN'		=> 'Join',
	'RND_POSTS' 	=> 'Posts',
	'RND_OCC' 		=> 'Occupation',
	'RND_FROM' 		=> 'Location',
	'RND_WWW' 		=> 'Web page',

	// random banners
	'RND_B_BANNERS'	=> 'Random Links', // normal banners (88x31) on portal
	'RND_H_BANNERS'	=> 'Random Banner', // horizontal banners ( ) on portal
	'RND_V_BANNERS'	=> 'Random Banner', // vertical banners (130x600) on portal
	
	// random member
	'GOOGLE_ADDS'		=> 'Google/Partner Adds',
	'GOOGLE_ADDS_TXT'	=> 'Place your adds inhere!',

	// most poster
	'MOST_POSTER' => 'Top poster',

	// links
	'LINKS' => 'Links',

	// latest members
	'LATEST_MEMBERS' => 'Latest members',

	// make donation
	'DONATION' 		=> 'Make donation',
	'DONATION_TEXT' => 'is a formation suplying services with no intention of any revenue. Anyone who wants to support this formation can do it by donating so that the cost of server, the domain and etc. could be paid of. <br /><br />This site does not "sell" any product, software, service, or reward. Please note that donating means that you are supporting this site with a gift.',
	'PAY_MSG'		=> 'After selecting the amount which you want to donate from the menu, you can go on by clicking on the picture of PayPal.',
	'PAY_ITEM' 		=> 'Make donation',
	'CURRENCY_MSG' 	=> 'Choose Currency: ',
	'AMOUNT_MSG' 	=> 'Choose  amount you wish to donate: ',
	'CLICK_MSG' 	=> 'Click to donate',

	// main menu
	'M_MENU' 		=> 'Menu',
	'M_CONTENT' 	=> 'Content',
	'M_ACP' 		=> 'ACP', // short name
	'M_MCP' 		=> 'MCP', // short name
	'M_HELP' 		=> 'Help',
	'M_BBCODE' 		=> 'BBCode FAQ',
	'M_TERMS' 		=> 'Term of use',
	'M_PRV' 		=> 'Privacy policy',
	'M_SEARCH' 		=> 'Search',

	// link us
	'LINK_US' 		=> 'Link to us',
	'LINK_US_TXT' 	=> 'Please feel free to link to <strong>%s</strong>. Use the following HTML:',

	// friends
	'FRIENDS'				=> 'Friends',
	'FRIENDS_OFFLINE'		=> 'Offline',
	'FRIENDS_ONLINE'		=> 'Online',
	'NO_FRIENDS'			=> 'No friends currently defined',
	'NO_FRIENDS_OFFLINE'	=> 'No friends offline',
	'NO_FRIENDS_ONLINE'		=> 'No friends online',
	
	// last bots
	'LAST_VISITED_BOTS'		=> 'Last %s visited bots',
	
	// wordgraph
   	'WORDGRAPH'				=> 'Wordgraph',
   
	// change style
   	'BOARD_STYLES'			=> 'Board styles',
   	'VIEW_STYLES'			=> 'View style',
   	'TOTAL_STYLES'			=> 'Available styles',
    'STYLE_SELECT'          => 'Select style',
	
	// team
	'NO_ADMINISTRATORS_P'	=> 'No administrators',
	'NO_MODERATORS_P'		=> 'No moderators',

	// chatbox
    'CHAT'                  => 'Chatbox',
	'VIEWING_CHAT'          => 'Viewing chatbox',
	'CHAT_EXPLAIN'			=> 'Chat Center',

	// weather
   	'PORTAL_WEATHER'         => 'Weather',

	// syndicate
   	'PORTAL_SYNDICATE'       => 'Syndicate',

	// navx
   	'PORTAL_NAVX'            => 'Navigate-X',

	// last visitors
   	'L_LAST_VISIT' 			=> 'Last %s registered visitors',

   	// Visit Counter
   	'VISIT_COUNTER_1' 		=> 'This board has <b>%d</b> visitors in total since %s',
	'VISIT_COUNTER_2'		=> 'This board has <b>%d</b> visitors in total since Sunday, March 16, 2007',
	'VISIT_COUNTER_3'		=> 'This site has <b>%d</b> page views in total since %s',
   	'VISIT_COUNTER' 		=> 'Visit counter',

   	// gallery
   	'L_GALLERY'         	=> 'Picture gallery',

   	// forum categories
	'FCATEGORIES'			=> 'Forum Categories',
	
	// actual topics scroll block
	'RECENT_ACTUAL_TOPIC'		=> 'Recent topics',
	'RECENT_ACTUAL_ANN' 		=> 'Recent announcements',
	'RECENT_ACTUAL_HOT_TOPIC' 	=> 'Recent popular topics',
    'RECENT_ACTUAL_ANN_NO'      => 'Sorry, there were no announcements found',
	 	
   	// similar topics
	'SIMILAR_TOPICS'			=> 'Similar topics',
	
   	// downloads
	'L_DOWNLOADS'				=> 'Free downloads',

   	// jumpbox RC4
	'RETURN_TO_SEARCH_ADV'	    => 'Return to advanced search',
	'RETURN_TO'					=> 'Return to',
	
   	// php info
	'PHP_INFO_EXPLAIN'			=> 'Server Info',
	'DATABASE_SERVER_INFO'		=> 'Database Server',
	'GZIP_COMPRESSION'			=> 'GZip Compression ',
	'OFF'						=> 'Off',
	'ON'						=> 'On',
	'OS_INFO'					=> 'Operating system',
	'PHP_INFO'					=> 'Script compiler',
	'WEBSERVER_INFO'			=> 'Webserver type',
	
    //Last Visit MOD
	'LAST_VISITS'				=> 'Last Visits',
	'NO_LASTVISIT_USERS' 		=> 'No registered users',
	
	'GUEST_VISITS_TOTAL'			=> '%d guests',
	'GUEST_VISITS_ZERO_TOTAL'	=> '0 guests',
	'GUEST_VISIT_TOTAL'			=> '%d guest',

	'HIDDEN_VISITS_TOTAL'		=> '%d hidden and ',
	'HIDDEN_VISITS_ZERO_TOTAL'	=> '0 hidden and ',
	'HIDDEN_VISIT_TOTAL'		=> '%d hidden and ',

	'LASTVISIT_VISITS_TOTAL'		=> 'In total there were <strong>%d</strong> users online within the past 24 hours :: ',
	'LASTVISIT_VISITS_ZERO_TOTAL'	=> 'In total there were <strong>0</strong> users online within the past 24 hours  :: ',
	'LASTVISIT_VISIT_TOTAL'			=> 'In total there was <strong>%d</strong> user online within the past 24 hours :: ',
	
	'REG_VISITS_TOTAL'			=> '%d registered, ',
	'REG_VISITS_ZERO_TOTAL'		=> '0 registered, ',
	'REG_VISIT_TOTAL'			=> '%d registered, ',

    // quotes
	'QUOTES_INFO'			    => 'Quotes of the day',

    // partners
	'PARTNERS_INFO'			    => 'Affiliates',

    // scroll message
    'SCROLL_MESSAGE' 			=> 'Info Message',

    // crawler linker
    'CRAWLER_LINKS_TOTAL' 		=> 'Crawler links total',
    'CRAWLER_LINKS' 			=> 'Crawler Feeds',

    // portal mods
	'MODS_DATABASE'				=> 'Mods Database',
	'MODS_DATABASE_EXPLAIN'		=> 'You can maintain your Mods Database here. Add, Edit or Delete Mods to and from the database.',
	'MOD_ADD'					=> 'Add Mod',
	'MOD_ADDED'					=> 'New Mod successfully added.',
	'MOD_DELETED'				=> 'Mod successfully deleted.',
	'MOD_EDIT'					=> 'Edit Mods',
	'MOD_EDIT_EXPLAIN'			=> 'Here you can add or edit an existing Mod entry. The Title and version number are required. You will also be able to enter details of where the Mod can be downloaded from and where the Mod itself can be found.',
	'BOT_NAME'					=> 'Bot name',
	'BOT_NAME_EXPLAIN'			=> 'Used only for your own information.',
	'MOD_NAME_TAKEN'			=> 'The Title is already in use in the Mods Database and can’t be used again.',
	'MOD_UPDATED'				=> 'Existing Mod updated successfully.',
	'ERR_MOD_NO_MATCHES'		=> 'You must supply at least the Mod Title and Mod Version for this Mod entry.',
	'NO_MOD'					=> 'Found no Mod with the specified ID.',
	'MOD_TITLE'					=> 'Mod Title',
	'MOD_VERSION'				=> 'Version',
	'MOD_VERSION_TYPE'			=> 'Version Type',
	'MOD_VERSION_TYPE_EXPLAIN'	=> 'Beta, Alpha, Dev or RC*',
	'MOD_DESC'					=> 'Description',
	'MOD_AUTHOR'				=> 'Author',
	'MOD_URL'					=> 'Location',
	'MOD_VISIT_WEBSITE'			=> 'URL Link where Mod is published',
	'MOD_DOWNLOAD_MOD'			=> 'URL Link where Mod can be downloaded',
	'MOD_LIST_MOD'				=> '1 Mod installed',
	'MOD_LIST_MODS'				=> '%s Mods installed',
	'SORT_MOD_TITLE'            => 'Sort by Mod Title',
	'SORT_MOD_VERSION'          => 'Sort by Mod Version',
	'SORT_MOD_AUTHOR'           => 'Sort by Mod Author',
	'VIEWING_PORTAL'			=> 'Viewing portal',
	'DOWNLOAD_MOD'				=> 'Download',

	// Portal Pages
  	'PAGES_LIST_TITLE' 			=> 'Portal Pages',
  	'PAGES_NOT_EXIST' 			=> 'That page doesn\'t exist.',
  	'PAGES_NONE_EXIST' 			=> 'No pages exist.',
  	'PAGES_QUERY_FAILED' 		=> 'Couldn\'t query pages.',
  	'PAGES_VIEW_FULL' 			=> 'View portal page',

	// Boardwide definitions for RSS 2 links
  	'RSS_FEED_FORUM' 			=> 'RSS 2 Feed Forum',
  	'RSS_FEED_ATTACHMENTS' 		=> 'RSS 2 Feed Attachments',
  	'RSS_FEED_DOWNLODS' 		=> 'RSS 2 Feed Downloads',
  	'RSS_FEED_KB' 				=> 'RSS 2 Feed Knowledge Base',
  	'RSS_FEED_GALLERY' 			=> 'RSS 2 Feed Gallery',
  	'RSS_FEED_ARCADE' 			=> 'RSS 2 Feed Arcade',
  	'RSS_FEED_VIDEO' 			=> 'RSS 2 Feed Video',

	// corrected/added since 0.4B5 
	'NO_ANNOUNCEMENTS'			=> 'No announcements',
	'FILEBASE_TITLE_VISIT'		=> 'Visit filebase',
   	'LAST_ON' 				    => 'Last visit', // ajax userinfo
  	'RSS_FEEDS' 				=> 'RSS Syndication',

	// corrected/added since RC1
	'OPEN_CLOSE_COLUMNS'		=> 'Open/Close all columns',
	
	// corrected/added since RC2 below
	'ACRONYM'					=> 'Acronyms',
	'ACRONYMS'					=> 'Acronyms and abbreviations',
	'ACRONYM_TOTAL'				=> 'Total acronyms in database',
	'ACRONYM_REPLACEMENT'		=> 'Acronym replacement',
	'ACRONYM_URL'				=> 'Acronym url',
	'TOTAL_FILES_COUNT'			=> 'Total files in database',
	'ST_TOT_ACTIVE_POSTERS'		=> 'Active posters',
	'ST_TOT_ATTACH_SIZE'		=> 'Attachsize',
	'ST_TOT_FILES_SIZE'			=> 'Filessize',
	'ST_TOT_ACRONYM'			=> 'Acronyms',
	'ST_TOT_FLAGS'				=> 'Flags',
	'ST_TOT_PICTURES'			=> 'Pictures',
	'ST_TOT_KB_ARTICLES'		=> 'KB articles',
	'ST_TOT_POSTS'				=> 'Posts',
	'ST_TOT_TOPICS'				=> 'Topics',
	'ST_TOT_CHAT_USERS'			=> 'Users on chat',
	'ST_TOT_THANKS_USERS'		=> 'User thanked',

	 // gender statistics
	'USER_GENDERS'				=> 'User genders',
	'USERS_WITH_GENDER'			=> 'Users who have specified their gender',
	'MALE_FEMALE_RATIO'			=> 'Male/Female ratio',
	'MALE_COUNT'				=> 'Male members',
	'FEMALE_COUNT'				=> 'Female members',
	
	'IMG_SIZE_ALTERED'			=> 'Image size may be altered to fit in window.<br /> Click on the image to open it in it\'s original size.',
	'RETURN_PORTAL'				=> '%sReturn to the portal page%s',
	'KB_RECENT_ARTICLES'		=> 'KnowledgeBase recent articles',
	'FILEBASE_TITLE'			=> 'Filebase',

	// corrected/added since RC3 below
	'IMPORTANT_NEWS'			=> 'Global Announcement',
   	'TOTAL_NEWS'				=> 'Total News',
   	'TOTAL_ANNOUNCEMENTS'		=> 'Total Announcement(s)',
   	'NO_PICS'					=> 'No pictures available',

	// corrected/added since RC4 below
	// Recent Topics
	'RECENT_SHOWING_POSTS'		=> 'Showing posts from:',
	'RECENT_SELECT_MODE'		=> 'Select mode',
	'RECENT_TOPICS'				=> 'Recent Topics',
	'RECENT_TODAY'				=> 'Today',
	'RECENT_YESTERDAY'			=> 'Yesterday',
	'RECENT_LAST24'				=> 'Last 24 Hours',
	'RECENT_LASTWEEK'			=> 'Last Week',
	'RECENT_DAYS'				=> 'Days',
	'RECENT_LASTXDAYS'			=> 'Last %s days',
	'RECENT_LAST'				=> 'Last',
	'RECENT_FIRST'				=> 'started at %s',
	'RECENT_FIRST_POSTER'		=> ' by %s',
	'RECENT_SELECT_MODE'		=> 'Select mode:',
	'RECENT_TITLE_ONE'			=> '<font size=4>%s</font> topic %s', // %s = topics; %s = sort method
	'RECENT_TITLE_MORE'			=> '<font size=4>%s</font> topics %s', // %s = topics; %s = sort method
	'RECENT_TITLE_TODAY'		=> ' from today',
	'RECENT_TITLE_YESTERDAY'	=> ' from yesterday',
	'RECENT_TITLE_LAST24'		=> ' from the last 24 hours',
	'RECENT_TITLE_WEEK'			=> ' from the last week',
	'RECENT_TITLE_LASTXDAYS'	=> ' from the last %s days', // %s = days
	'RECENT_NO_TOPICS'			=> 'No topics were found.',
	'RECENT_WRONG_MODE'			=> 'You´ve selected a wrong mode.',
	'RECENT_CLICK_RETURN'		=> 'Click %shere%s to return to recent site.',
	'TOTAL_RECENT_TOPICS'		=> '%s recent topics found',

	// corrected/added since 0.2 
	'NO_IMPORTANT_NEWS'			=> 'No announcements',
	'GOOGLE_BACK_TO_ENGLISH'	=> 'Return',
	'FORUM_STYLE'				=> 'Forum style',
	'BACK_TO_TOP'			    => 'Top',
	'BACK_TO_BOTTOM'		    => 'Bottom',
	
	// bbCode tags
   	'BBCODETAGS'				=> 'bbCode Tags',
   
	// change language
   	'BOARD_LANGUAGE'			=> 'Board languages',
   	'VIEW_LANGUAGE'				=> 'View language',
   	'TOTAL_LANGUAGE'			=> 'Available languages',
    'LANGUAGE_SELECT'          	=> 'Select language',

	// phpBB Gallery
  	'RANDOM_PIC' 				=> 'Random pictures',
  	'TOTAL_IMAGES' 				=> 'Pictures are in our',
  	'TOTAL_PICVIEW' 			=> 'views, ',
  	'TOTAL_RATEPOINT' 			=> 'rating points, ',
  	'TOTAL_PICVOTES' 			=> 'voting points.',
  	'NEWEST_PIC' 				=> 'Newest picture',
  	'NEWEST_PICS' 				=> 'Newest pictures',
  	'PIC_TITLE' 				=> 'Title',
  	'PIC_RECEIVED' 				=> 'Received',
  	'PIC_POSTER' 				=> 'Poster',
  	'LOGIN_LOGOUT_GALLERY' 		=> 'Login to view the pictures',
  	'PIC_COMMENTS' 				=> 'Comments',
  	'NEW_PIC_COMMENTS' 			=> 'newest comments',
  	'NO_NEW_PIC_COMMENTS' 		=> 'no comments',
  	'RECENT_PUBLIC_PICS' 		=> 'Recent pictures',
	
	// portal i18n widgets/blocks
   	'WIDG_EDIT_TEXT'			=> 'Edit',
   	'WIDG_CLOSE_TEXT'			=> 'Close',
   	'WIDG_EXTENT_TEXT'			=> 'Extend',
   	'WIDG_COLLAPSE_TEXT'		=> 'Collapse',
   	'WIDG_CANCEL_TEXT'		    => 'Cancel',
	'WIDG_EDIT'					=> 'Edit this block',
	'WIDG_CLOSE'				=> 'Close this block',
	'WIDG_REMOVE'				=> 'Remove this block?',
	'WIDG_CANCEL'				=> 'Cancel edition',
	'WIDG_EXTENT'				=> 'Extend this block',
	'WIDG_COLLAPSE'				=> 'Collapse this block',
 
	 // Highslide JS
	'HIGHSLIDE_LOADINGTEXT'		=> 'Loading...',
	'HIGHSLIDE_LOADINGTITLE'	=> 'Click to cancel',
	'HIGHSLIDE_FOCUSTITLE'		=> 'Click to bring to front',
	'HIGHSLIDE_FULLEXPANDTITLE'	=> 'Expand to actual size',
	'HIGHSLIDE_FULLEXPANDTEXT'	=> 'Full size',
	'HIGHSLIDE_CREDITSTEXT'		=> 'Powered by <i>Highslide JS</i>',
	'HIGHSLIDE_CREDITSTITLE'	=> 'Go to the Highslide JS homepage',
	'HIGHSLIDE_PREVIOUSTEXT'	=> 'Previous',
	'HIGHSLIDE_PREVIOUSTITLE'	=> 'Previous (arrow left)',
	'HIGHSLIDE_NEXTTEXT'		=> 'Next',
	'HIGHSLIDE_NEXTTITLE'		=> 'Next (arrow right)',
	'HIGHSLIDE_MOVETITLE'		=> 'Move',
	'HIGHSLIDE_MOVETEXT'		=> 'Move',
	'HIGHSLIDE_CLOSETEXT'		=> 'Close',
	'HIGHSLIDE_CLOSETITLE'		=> 'Close (esc)',
	'HIGHSLIDE_RESIZETITLE'		=> 'Resize',
	'HIGHSLIDE_PLAYTEXT'		=> 'Play',
	'HIGHSLIDE_PLAYTITLE'		=> 'Play slideshow (spacebar)',
	'HIGHSLIDE_PAUSETEXT'		=> 'Pause',
	'HIGHSLIDE_PAUSETITLE'		=> 'Pause slideshow (spacebar)',
	'HIGHSLIDE_NUMBER'			=> 'Image %1 of %2',
	'HIGHSLIDE_RESTORETITLE'	=> 'Click to close image, click and drag to move. Use arrow keys for next and previous.',

	// Signatures, use short words as the space is limited
	'SIG_STATISTICS_FOR'		=> 'Statistics for',
	'SIG_PHPBB_VERSION'			=> 'phpBB Version:',
	'SIG_PORTALXL_VERSION'		=> '- Portal XL Version:',
	'SIG_MEMBERS'				=> 'Members:',
	'SIG_ONLINE'				=> 'Online:',
	'SIG_DOMAIN'				=> '- Your IP:',
	'SIG_TOTAL_POSTS'			=> 'Total posts:',
	'SIG_POSTS_IN'				=> 'posts in',
	'SIG_TOPICS'				=> 'topics',
	'SIG_TOPICS_CAPS'			=> 'Topics:',
	'SIG_NEWEST_MEMBER'			=> 'Newest Member:',
	'SIG_WELCOME_BACK'			=> 'Welcome back',
	'SIG_RANK'					=> 'Rank:',
	'SIG_POSTS'					=> 'Posts:',
	'SIG_MEMBER_FOR'			=> 'Member for',
	'SIG_POST_PERCENTAGE'		=> 'Post percentage:',
	'SIG_LAST_VISITED'			=> 'Last visited:',
	'SIG_AGE'					=> 'Age:',
	'SIG_DAYS'					=> 'days',
	'SIG_TIMEPLAYED'			=> 'Time Gaming - ',
	'SIG_USERWINS'				=> 'Total Wins - ',
	'SIG_TOTALGAMES'			=> 'Games - ',
	'SIG_GAMESPLAYED'			=> 'Total Plays - ',
	
	// 06-10-2009 new entries portal pages
	'TOTAL_PAGE_PAGES'		    => 'Total pages',
	
	// Thanks
	'MOST_THANKS'				=> 'Most Thanks',
	'THANK_GIVEN'				=> 'Out',
	'THANK_RECEIVED'			=> 'In',
	
	// Gender posts
	'ST_TOT_MALE_GENDER_POSTS'	=> 'Male posts',
	'ST_TOT_FEMALE_GENDER_POSTS'=> 'Female posts',
	'ST_TOT_UNDEF_GENDER_POSTS'	=> 'Undefined posts',
	
	// Show voters			
	'TOTAL_HAVE_VOTED'			=> 'Have voted',
	
	// Ranks page		
    'NO_RANKS'        => 'No ranks installed on this forum.',
    'RANKS_TITLE'     => 'Ranks List',
    'RANK_EDIT'       => 'Edit rank',
    'RANKS'           => 'Ranks Page',
    'RANK_ID'         => '#',
    'RANK_TITLE'      => 'Rank Title',
    'RANK_MIN'        => 'Minimum Posts',
    'RANK_IMAGE'      => 'Rank Image',
	'RANK_COUNT'	  => '1 Rank installed',
	'RANK_COUNT'      => '%s Ranks installed',
	
 	// Smiles page		
    'NO_SMILES'       => 'No smiles installed on this forum.',
    'SMILES_TITLE'    => 'Smiles List',
    'SMILEY_ID'       => '#',
    'SMILEY_CODE'     => 'Smiley Code',
    'SMILEY_IMG'      => 'Smiley Image',
    'SMILEY_DESC'     => 'Smiley Emotion',
	'SMILIEY_COUNT'	  => '1 Smile installed',
	'SMILIEY_COUNT'   => '%s Smiles installed',
	
 	// Guest Hide BBCode MOD	
	'HIDE_REG' 		=> 'Available only to registered users.',
	'HIDE_ON' 		=> '<strong>Hidden text</strong>: ON',
	'HIDE_OFF' 		=> '<strong>Hidden text</strong>: OFF',
  
	// script welcome message login block
	'WELCOME_MORNING'	=> 'Good morning ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']) . '!',
	'WELCOME_AFTERNOON'	=> 'Good afternoon ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']). '!',
	'WELCOME_EVENING'	=> 'Good evening ' . get_username_string('full', $user->data['user_id'], $user->data['username'], $user->data['user_colour']) . '!',
	'WELCOME_GENERAL'	=> 'Welcome @ ' . $config['sitename'] . ' ',
	// script welcome message login block
	
	// SEO meta keyword dispaly in viewtopic		
	'COMMON_SEARCH_TERMS'	=> 'Keywords for this topic',
	
	// Naviagtion pop-up menu entries		
	'LOGIN_PORTAL_INFO'	    	=> 'In order to login you must be registered. Please be aware that to use most of the functions of this site you will need to register your details. The board administrator may also grant additional permissions to registered users. Please ensure you read any forum rules as you navigate around the board.',
	'LOGIN_MORE_PORTAL_INFO'	=> 'More login info...',
	'LOGOUT_PORTAL_INFO'		=> 'Be sure to check this website as often as possible. We will be posting changes and additions throughout the week. Thank you for your time visiting ' . $config['sitename'] . ', and we hope you will bookmark this site!',
	'LOGOUT_MORE_PORTAL_INFO'	=> 'More logout info...',

	// Reset closed/deleted blocks to default state
	'PORTAL_RESET_BLOCKS'		=> 'Reset blocks',
	'PORTAL_WIDGET_STATES'		=> 'Widget states',
	'PORTAL_OPEN_COLUMNS'		=> 'Show all columns',
	'PORTAL_CLOSE_COLUMNS'		=> 'Hide all columns',
	'PORTAL_OPEN_MENUS'		    => 'Show Widgets menus',
	'PORTAL_CLOSE_MENUS'		=> 'Hide Widgets menus',
	
	// Viewtopic user information dropdown		
	'USERS_INFORMATION'			=> 'Users Information',

	// Paypal Currencies
	'PAYPAL_CURRENCY_GBP'		=> 'Pounds Sterling (GBP)',
	'PAYPAL_CURRENCY_USD'		=> 'U.S. Dollars (USD)',
	'PAYPAL_CURRENCY_EUR'		=> 'Euros (EUR)',
	'PAYPAL_CURRENCY_AUD'		=> 'Australian Dollars (AUD)',
	'PAYPAL_CURRENCY_CAD'		=> 'Canadian Dollars (CAD)',
	'PAYPAL_CURRENCY_CZK'		=> 'Czech Koruna (CZK)',
	'PAYPAL_CURRENCY_DKK'		=> 'Danish Kroner (DKK)',
	'PAYPAL_CURRENCY_HKD'		=> 'Hong Kong Dollars (HKD)',
	'PAYPAL_CURRENCY_HUF'		=> 'Hungarian Forint (HUF)',
	'PAYPAL_CURRENCY_NZD'		=> 'New Zealand Dollars (NZD)',
	'PAYPAL_CURRENCY_NOK'		=> 'Norwegian Kroner (NOK)',
	'PAYPAL_CURRENCY_PLN'		=> 'Polish Zlotych (PLN)',
	'PAYPAL_CURRENCY_SGD'		=> 'Singapore Dollars (SGD)',
	'PAYPAL_CURRENCY_SEK'		=> 'Swedish Kronor (SEK)',
	'PAYPAL_CURRENCY_CHF'		=> 'Swiss Francs (CHF)',
	'PAYPAL_CURRENCY_JPY'		=> 'Yen (JPY)',
	
 	// bbCodes page		
    'NO_BBCODES'       			=> 'No bbCodes installed on this forum.',
    'BBCODES_TITLE'    			=> 'bbCodes List',
    'BBCODE_ID'       			=> '#',
    'BBCODE_DISPLAY'       		=> 'Active',
    'BBCODE_CODE'     			=> 'bbCode tag',
    'BBCODE_TPL'     			=> 'bbCode html',
    'BBCODE_HELP'     			=> 'bbCode helpline',
    'BBCODE_ICON'     			=> 'Icon',
	'BBCODE_COUNT'	  			=> '1 bbCode installed',
	'BBCODE_COUNT'   			=> '%s bbCodes installed',

    // zodiacs
    'ZODIAC'                    => 'Zodiacs',

    // Referers block
    'REFERER_PAGE_TITLE'        => 'Referers',
    'REF_HTTP_HOST'             => 'Host',
    'REF_HTTP_IP'               => 'IP',
    'REF_HTTP_PROXY'            => 'Proxy',
    'REF_HHTP_LASTVISIT'        => 'Last visit',
    'REF_HITS'             		=> 'Hits',
    'REF_TOTAL'            		=> 'Total referers',

    // Anniversaries
    'ANNIVERSARY_LIST'          => 'Anniversaries',
    'ANNIVERSARY_TXT'   	    => 'who registered on the site exactly (X) years ago today!',
    'NO_ANNIVERSARIES'          => 'No anniversaries today.',

    // Music Charts
	'DM_MUSIC_CHARTS'			=> 'Music Charts',
	
 	// Referer page		
    'NO_REFERER'       			=> 'No referers found for this forum.',
    'REFERER_TITLE'    			=> 'Referers',
    'REFERER_IP'    			=> 'IP',
    'REFERER_PROXY'       		=> 'Proxy',
    'REFERER_HOST'     			=> 'Host',
    'REFERER_LASTVISIT'      	=> 'Last visit',
    'REFERER_HITS'     			=> 'Hits',
	'REFERER_HTTP_HOST'	  		=> 'Host URL',
	'REFERER_COUNT'	  			=> '1 Referer found',
	'REFERER_COUNT'   			=> '%s Referers found',

	/**
	* DO NOT REMOVE or CHANGE (text translation is allowed)!
	*/
	'PORTAL_COPY' 			=> '&copy; 2007, 2011 PortalXL Group, the original insane crazy Portal for phpBB3',
	'PORTAL_VERSION' 		=> 'Portal XL 5.0 ~ ',
	));

?>