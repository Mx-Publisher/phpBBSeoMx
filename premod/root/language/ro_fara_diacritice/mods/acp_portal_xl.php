<?php
/** 
*
* @name acp_portal_xl.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: acp_portal_xl.php,v 1.2 2009/05/15 22:32:06 portalxl group Exp $
*
* @copyright (c) 2007, 2011 PortalXL Group
* @license http://opensource.org/licenses/gpl-2.0.php The GNU General Public License (GPL)
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

$lang = array_merge($lang, array(

   'ACP_PORTAL_INFO'                  			=> 'Portal Administration',
   'ACP_PORTAL_INFO_EXPLAIN'           			=> 'Thank you for choosing Portal XL 5.0 as your portal solution. On this site you can manage the portal of your board. The screens inhere will give you a quick overview of all the various portal settings. The links on the left hand side of this screen allow you to control every aspect of your portal experience. ACP settings by DaMysterious 2007.<br />
    <div class="successbox">
	<h3>Author Notes</h3>
	<p>Creating, maintaining and updating this MOD required/requires a lot of time and effort.<br />
	   If you appreciate PortalXL and feel the desire to express your thanks through a donation this would be greatly appreciated.<br /> 
	   PortalXL\'s Paypal ID is <strong>portalxl@xs4all.nl</strong>, or visit our special PortalXL donation page <a href="http://www.portalxl.nl/PORTAL_XL_Paypal_Donation.html" target="_blank">here</a>.<br /><br />
	   The suggested minimum donation amount for this MOD is Euro 25.00 (any higher amount will help more).<br />
	   If you are a registered user of the portalxl.nl forum, please leave your forum name/alias as comment so your level can be raised up in exchange.</p>
	</div><p>',

	// announcements
   'ACP_PORTAL_ANNOUNCE_INFO'           		=> 'Portal Announcements',
   'ACP_PORTAL_ANNOUNCE_SETTINGS'               => 'Announcements settings',
   'ACP_PORTAL_ANNOUNCE_SETTINGS_EXPLAIN'       => 'Here you can change your announcement information and certain specific options.',
   'PORTAL_ANNOUNCMENTS'                       	=> 'Display announcements',
   'PORTAL_ANNOUNCMENTS_EXPLAIN'                => 'Display this block Yes/No?',
   'PORTAL_NUMBER_OF_ANNOUNCMENTS'             	=> 'Number of announcements on Portal',
   'PORTAL_NUMBER_OF_ANNOUNCMENTS_EXPLAIN'      => '0 means infinite',
   'PORTAL_ANNOUNCMENTS_DAY'                   	=> 'Number of days to display the announcement',
   'PORTAL_ANNOUNCMENTS_DAY_EXPLAIN'           	=> '0 means infinite',
   'PORTAL_ANNOUNCMENTS_LENGTH'                	=> 'Max length of announcements.',
   'PORTAL_ANNOUNCMENTS_LENGTH_EXPLAIN'       	=> 'This value counts the characters that will be allowed to be displayed. 0 means infinite.',
   'PORTAL_GLOBAL_ANNOUNCMENTS_FORUM'          	=> 'Global announcements forum ID',
   'PORTAL_GLOBAL_ANNOUNCMENTS_FORUM_EXPLAIN'   => 'Forum we pull the articles from (you MUST specify a forum ID), separate by comma for multi-forums, eg. 1,2,5. Do not leave this field empty, 0 is required than.',

	// news
   'ACP_PORTAL_NEWS_INFO'                  		=> 'Portal News',
   'ACP_PORTAL_NEWS_SETTINGS'                  	=> 'News settings',
   'ACP_PORTAL_NEWS_SETTINGS_EXPLAIN'       	=> 'Here you can change your news information and certain specific options.',
   'PORTAL_NEWS'                              	=> 'Display news',
   'PORTAL_NEWS_EXPLAIN'                        => 'Display this block Yes/No?',
   'PORTAL_SHOW_ALL_NEWS'                     	=> 'Show all of the articles in this forum',
   'PORTAL_SHOW_ALL_NEWS_EXPLAIN'             	=> 'Including Stickies, announcements, and Global announcements?',
   'PORTAL_NUMBER_OF_NEWS'                    	=> 'Number of news articles on Portal',
   'PORTAL_NUMBER_OF_NEWS_EXPLAIN'            	=> '0 means infinite',
   'PORTAL_NEWS_LENGTH'                       	=> 'Max length of news article.',
   'PORTAL_NEWS_LENGTH_EXPLAIN'               	=> 'This value counts the characters that will be allowed to be displayed. 0 means infinite.',
   'PORTAL_NEWS_FORUM'                        	=> 'News Forum ID',
   'PORTAL_NEWS_FORUM_EXPLAIN'             		=> 'Forum we pull the articles from (you MUST specify a forum ID), separate by comma for multi-forums, eg. 1,2,5. Do not leave this field empty, 0 is required than.',

	// recent topics
   'ACP_PORTAL_RECENT_INFO'                  	=> 'Portal Recent topics',	
   'ACP_PORTAL_RECENT_SETTINGS'                 => 'Recent topics settings',	
   'ACP_PORTAL_RECENT_SETTINGS_EXPLAIN'       	=> 'Here you can change your recent topics information and certain specific options.',
   'PORTAL_RECENT'                  			=> 'Display recent topics',
   'PORTAL_RECENT_EXPLAIN'                  	=> 'Display this block Yes/No? <br /> This three-tab upper center block includes Announcements, Popular Topics and Topics. Choosing "No" will disable the whole block.',
   'PORTAL_MAX_TOPIC'                          	=> 'Limit of recent announcements/hot topics',
   'PORTAL_MAX_TOPIC_EXPLAIN'                   => '0 means infinite',
   'PORTAL_RECENT_TITLE_LIMIT'                 	=> 'Character limit for recent topic headers',
   'PORTAL_RECENT_TITLE_LIMIT_EXPLAIN'          => '0 means infinite',
   
	// paypal
   'ACP_PORTAL_PAYPAL_INFO'                  	=> 'Portal Paypal',	
   'ACP_PORTAL_PAYPAL_SETTINGS'                 => 'Paypal settings',
   'ACP_PORTAL_PAYPAL_SETTINGS_EXPLAIN'       	=> 'Here you can change your Paypal information and certain specific options.',
   'PORTAL_PAY_C_BLOCK'                        	=> 'Display paypal center',
   'PORTAL_PAY_C_BLOCK_EXPLAIN'                 => 'Display this block Yes/No?',
   'PORTAL_PAY_S_BLOCK'                        	=> 'Display paypal small',
   'PORTAL_PAY_S_BLOCK_EXPLAIN'                 => 'Display this block Yes/No?',
   'PORTAL_PAY_ACC'                            	=> 'Paypal account to use',
   'PORTAL_PAY_ACC_EXPLAIN'                     => 'Enter your Paypal e-mail address you used for your account eg. xxx@xxx.com',

	// last member
   'ACP_PORTAL_MEMBERS_INFO'               		=> 'Portal Latest members',
   'ACP_PORTAL_MEMBERS_SETTINGS'                => 'Latest members settings',
   'ACP_PORTAL_MEMBERS_SETTINGS_EXPLAIN'       	=> 'Here you can change your latest members information and certain specific options.',
   'PORTAL_LATEST_MEMBERS'                  	=> 'Display latest members',
   'PORTAL_LATEST_MEMBERS_EXPLAIN'              => 'Display this block Yes/No?',
   'PORTAL_MAX_LAST_MEMBER'                    	=> 'Limit of displayed latest members',
   'PORTAL_MAX_LAST_MEMBER_EXPLAIN'             => '0 means infinite',
   
	// bots
   'ACP_PORTAL_BOTS_INFO'                    	=> 'Portal Visiting Bots',
   'ACP_PORTAL_BOTS_SETTINGS'                   => 'Visiting Bots settings',
   'ACP_PORTAL_BOTS_SETTINGS_EXPLAIN'       	=> 'Here you can change your visiting bots information and certain specific options.',
   'PORTAL_LOAD_LAST_VISITED_BOTS'             	=> 'Display visiting bots',
   'PORTAL_LOAD_LAST_VISITED_BOTS_EXPLAIN'      => 'Display this block Yes/No?',
   'PORTAL_LAST_VISITED_BOTS_NUMBER'           	=> 'How many bots to display',
   'PORTAL_LAST_VISITED_BOTS_NUMBER_EXPLAIN'    => '0 means infinite',
   
	// polls   
   'ACP_PORTAL_POLLS_INFO'                    	=> 'Portal Poll',	
   'ACP_PORTAL_POLLS_SETTINGS'                  => 'Poll settings',
   'ACP_PORTAL_POLLS_SETTINGS_EXPLAIN'       	=> 'Here you can change your poll information and certain specific options.',
   'PORTAL_POLL_TOPIC'                         	=> 'Display polls',
   'PORTAL_POLL_TOPIC_EXPLAIN'                  => 'Display this block Yes/No?',
   'PORTAL_POLL_TOPIC_ID'                      	=> 'Display poll from which topic ID',
   'PORTAL_POLL_TOPIC_ID_EXPLAIN'             	=> 'Topic ID (topic number) that holds the actual poll which you would like to display the info from, set to 0 (do not leave that field empty) to pull nothing.',
   'PORTAL_POLL_FORUM_ID'                      	=> 'Display poll from which forum ID',
   'PORTAL_POLL_FORUM_ID_EXPLAIN'             	=> 'Forum ID (forum number) that holds the actual poll which you would like to display the info from, set to 0 (do not leave that field empty) to pull nothing.',
   'PORTAL_POLL_POST_ID'                      	=> 'Display poll from which post ID',
   'PORTAL_POLL_POST_ID_EXPLAIN'             	=> 'Post ID (post number) that holds the actual poll which you would like to display the info from, set to 0 (do not leave that field empty) to pull nothing.',

	// most poster
   'ACP_PORTAL_MOST_POSTER_INFO'                => 'Portal Most poster',
   'ACP_PORTAL_MOST_POSTER_SETTINGS'            => 'Most poster settings',
   'ACP_PORTAL_MOST_POSTER_SETTINGS_EXPLAIN'    => 'Here you can change your most poster information and certain specific options.',
   'PORTAL_TOP_POSTERS'                  		=> 'Display most/top posters',
   'PORTAL_TOP_POSTERS_EXPLAIN'                 => 'Display this block Yes/No?',
   'PORTAL_MAX_MOST_POSTER'                    	=> 'How many most posters to display',
   'PORTAL_MAX_MOST_POSTER_EXPLAIN'             => '0 means infinite',

	// left and right column width 
   'ACP_PORTAL_COLLUMN_WIDTH_INFO'              => 'Portal Collumn width',
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS'          => 'Left and right column width settings',	
   'ACP_PORTAL_COLLUMN_WIDTH_SETTINGS_EXPLAIN'  => 'Here you can change your left and right column width information of portals page.',
   'PORTAL_LEFT_COLLUMN_WIDTH'                 	=> 'Width value of the left portal column',
   'PORTAL_LEFT_COLLUMN_WIDTH_EXPLAIN'          => 'Change the width of left column in pixel, recommended value 180',
   'PORTAL_RIGHT_COLLUMN_WIDTH'                 => 'Width value of the right portal column',
   'PORTAL_RIGHT_COLLUMN_WIDTH_EXPLAIN'         => 'Change the width of right column in pixel, recommended value 180',
   
	// attachments    
   'ACP_PORTAL_ATTACHMENTS_NUMBER_INFO'         		=> 'Portal Attachments',
   'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS'     		=> 'Attachments settings',
   'ACP_PORTAL_ATTACHMENTS_NUMBER_SETTINGS_EXPLAIN'     => 'Here you can change your attachments information and certain specific options.',
   'PORTAL_ATTACHMENTS'                  				=> 'Display attachments',
   'PORTAL_ATTACHMENTS_EXPLAIN'                  		=> 'Display this block Yes/No?',
   'PORTAL_ATTACHMENTS_NUMBER'                 			=> 'Limit of displayed attachments',
   'PORTAL_ATTACHMENTS_NUMBER_EXPLAIN'                 	=> '0 means infinite',

	// general 
   'ACP_PORTAL_SWITCHES_INFO'                  	=> 'Portal Block switches',
   'ACP_PORTAL_SWITCHES_SETTINGS'               => 'General block switch settings',
   'ACP_PORTAL_SWITCHES_SETTINGS_EXPLAIN'       => 'Here you can change your switches information and certain specific options.',
   'PORTAL_GOOGLE_S_BLOCK'                  	=> 'Google adds small',
   'PORTAL_GOOGLE_S_BLOCK_EXPLAIN'              => 'Display this block Yes/No? <br /> This is a Pre-defined Google Partner block 120x240_as, filename is <strong>google_adds.html</strong>.',
   'PORTAL_GOOGLE_C_BLOCK'                  	=> 'Google adds center',
   'PORTAL_GOOGLE_C_BLOCK_EXPLAIN'              => 'Display this block Yes/No? <br /> This is a Pre-defined Google Partner block 234x60_as, filename is <strong>google_adds_portal.html</strong>.',
   'PORTAL_FORUM_BLOCK'                  		=> 'Forum center',
   'PORTAL_FORUM_BLOCK_EXPLAIN'                 => 'Display this block Yes/No? <br /> The portal\'s big forum center block, this is the same as phpBB\'s index page.',
   'PORTAL_ADVANCED_STAT'                  		=> 'Advanced statistics',
   'PORTAL_ADVANCED_STAT_EXPLAIN'               => 'Display this block Yes/No?',
   'PORTAL_LEADERS'                  			=> 'Leaders / Team',
   'PORTAL_LEADERS_EXPLAIN'                  	=> 'Display this block Yes/No?',
   'PORTAL_CLOCK'                  				=> 'Clock',
   'PORTAL_CLOCK_EXPLAIN'                  		=> 'Display this block Yes/No?',
   'PORTAL_LINK_US'                  			=> 'Link us',
   'PORTAL_LINK_US_EXPLAIN'                  	=> 'Display this block Yes/No? <br /> Provides html code to let other\'s link to your site by copy and paste, the given html code includes a 88x31 banner that will show on their site.',
   'PORTAL_LINKS'                  				=> 'Links',
   'PORTAL_LINKS_EXPLAIN'                  		=> 'Display this block Yes/No? <br /> To add new, or change links for this block manual edit\'s of filename <strong>links.html</strong> will be necessary.',
   'PORTAL_WELCOME'                  			=> 'Welcome center',
   'PORTAL_WELCOME_EXPLAIN'                  	=> 'Display this block Yes/No?',
   'PORTAL_RANKS'                  			    => 'Rank center',
   'PORTAL_RANKS_EXPLAIN'                  		=> 'Display this block Yes/No? <br /> This three tab bottom center block includes Word graph, Ranks, Attachments and Forum list. Choosing "No" will disable the whole block.',
   'PORTAL_MAX_ONLINE_FRIENDS'                 	=> 'Limit of displayed online friends',
   'PORTAL_MAX_ONLINE_FRIENDS_EXPLAIN'          => 'Limit display of online friends in portal block to a certain value (default is 8).',
   'PORTAL_MAINMENU_NORMAL'                  	=> 'Navigation menu',
   'PORTAL_MAINMENU_NORMAL_EXPLAIN'      		=> 'Display this block Yes/No? <br /> This menu will pull data from the portal\'s Menu administration - Manage Menus and will show up in this block.',
   'PORTAL_MAINMENU_DHTML'                  	=> 'Navigation menu DHTML',
   'PORTAL_MAINMENU_DHTML_EXPLAIN'              => 'Display this block Yes/No? <br /> To add new, or change options for this block manual edit\'s of filename main_menu_dhtml.html will be necessary.',

    // wordgraph
   'ACP_PORTAL_WORDGRAPH_INFO'					=> 'Portal Wordgraph',
   'ACP_PORTAL_WORDGRAPH_SETTINGS'              => 'Wordgraph settings',	
   'ACP_PORTAL_WORDGRAPH_SETTINGS_EXPLAIN'      => 'Here you can change your wordgraph information and certain specific options.',
   'PORTAL_WORDGRAPH'                  			=> 'Display wordgraph',
   'PORTAL_WORDGRAPH_EXPLAIN'                  	=> 'Display this block Yes/No?',
   'PORTAL_WORD_GRAPH_MAX_WORDS'                => 'How many words to display',
   'PORTAL_WORD_GRAPH_MAX_WORDS_EXPLAIN'        => '0 means infinite',
   'PORTAL_WORD_GRAPH_WORD_COUNTS'              => 'Include count values to display',
   'PORTAL_WORD_GRAPH_WORD_COUNTS_EXPLAIN'      => 'Display count values per word eg. (25) Yes/No?',
   'PORTAL_WORD_GRAPH_RATIO'              		=> 'Used aspect ratio word size',
   'PORTAL_WORD_GRAPH_RATIO_EXPLAIN'            => 'Change the aspect ratio (bigger/smaller) word size (default=4). This setting is relative to the value of displayed words. The more words, the more aspect ratio you can choose to make the words bigger.',

/* not in use at moment
   'PORTAL_WORD_GRAPH_MAX_SIZE'              	=> 'Maximum font size in pixel',
   'PORTAL_WORD_GRAPH_MAX_SIZE_EXPLAIN'         => 'Set maximum value of font size for words in wordgraph.',
   'PORTAL_WORD_GRAPH_MIN_SIZE'              	=> 'Minimum font size in pixel',
   'PORTAL_WORD_GRAPH_MIN_SIZE_EXPLAIN'         => 'Set minimum value of font size for words in wordgraph.',
*/
	
	// random 
   'ACP_PORTAL_RANDOM_INFO'                  	=> 'Portal Random',
   'ACP_PORTAL_RANDOM_SETTINGS'               	=> 'Random banners/blocks settings',
   'ACP_PORTAL_RANDOM_SETTINGS_EXPLAIN'       	=> 'Here you can change your random banners/blocks information and certain specific options.',
   'PORTAL_RAN_HO_BLOCK'                  		=> 'Random banners horizontal center (max. size 386x60 pix)',
   'PORTAL_RAN_HO_BLOCK_EXPLAIN'                => 'Display this block Yes/No?',
   'PORTAL_RAN_VE_BLOCK'                  		=> 'Random banners vertical (max. size 130x600 pix)',
   'PORTAL_RAN_VE_BLOCK_EXPLAIN'                => 'Display this block Yes/No?',
   'PORTAL_RAN_LI_BLOCK'                  		=> 'Random banners links (max. size 88x31 pix).',
   'PORTAL_RAN_LI_BLOCK_EXPLAIN'                => 'Display this block Yes/No? <br /> This menu pull\'s data from portal\'s Partners administration - Manage Partners to show up in this block.',
   'PORTAL_RANDOM_MEMBER'                  		=> 'Random members',
   'PORTAL_RANDOM_MEMBER_EXPLAIN'               => 'Display this block Yes/No?',

	// welcome message
   'ACP_PORTAL_WELCOME_INFO'                  	=> 'Portal Welcome',
   'ACP_PORTAL_WELCOME_SETTINGS'               	=> 'Welcome settings',
   'ACP_PORTAL_WELCOME_TXT_SETTINGS'           	=> 'Welcome text settings',
   'ACP_PORTAL_WELCOME_SETTINGS_EXPLAIN'       	=> 'Here you can change welcome messages and certain specific options.',
   'PORTAL_WELCOME_INTRO'                  	    => 'Welcome message guest users',
   'PORTAL_WELCOME_INTRO_EXPLAIN'               => 'Change the welcome messages for guest users. Max. 2000 characters (html allowed)! All text after that limit will be cut off automatically.',
   'PORTAL_WELCOME_BACK'                        => 'Welcome message registered users',
   'PORTAL_WELCOME_BACK_EXPLAIN'                => 'Change the welcome messages for registered users. Max. 2000 characters (html allowed)! All text after that limit will be cut off automatically.',

	// chatbox
   'ACP_PORTAL_SHOUTBOX_INFO'					=> 'Portal Chatbox',
   'ACP_PORTAL_SHOUTBOX_SETTINGS'				=> 'Chatbox settings',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_HC'			=> 'Chatbox height and color settings portal block',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_HCB'			=> 'Chatbox height and color settings big block',
   'ACP_PORTAL_SHOUTBOX_SETTINGS_EXPLAIN'		=> 'Here you can change your chatbox information and certain specific options. Text is cut off after max. 600 characters automatically.',
   'PORTAL_SHOUTBOX'                  			=> 'Display chatbox',
   'PORTAL_SHOUTBOX_EXPLAIN'                  	=> 'Display this block Yes/No?',
   'PORTAL_SHOUTBOX_NUMBER'                  	=> 'How many chats to display',
   'PORTAL_SHOUTBOX_NUMBER_EXPLAIN'             => '0 means infinite, any other value displays the latest chats to portal and chat page',
   'PORTAL_SHOUTBOX_SESSION_TIME'               => 'Allowed session time',
   'PORTAL_SHOUTBOX_SESSION_TIME_EXPLAIN'       => 'Add a value between 0 and 999 seconds after which the session will expire, default is 300 seconds',
   'PORTAL_SHOUTBOX_DEFAULT_DELAY'              => 'Reload delay',
   'PORTAL_SHOUTBOX_DEFAULT_DELAY_EXPLAIN'      => 'Add a value between 0 and 999 seconds to reload the chatbox automatically, default is 15 seconds',

	// weather
   'ACP_PORTAL_WEATHER_INFO'				    => 'Portal Weather',
   'ACP_PORTAL_WEATHER_SETTINGS'			    => 'Weather settings',
   'ACP_PORTAL_WEATHER_SETTINGS_GER'			=> 'Weather settings for wetter.com from Germany',
   'ACP_PORTAL_WEATHER_SETTINGS_ALT'			=> 'Weather settings for alternate weather sites',
   'ACP_PORTAL_WEATHER_SETTINGS_EXPLAIN'	    => 'Here you can change your weather information and certain specific options. Default weather site is wetter.com from germany. You can change to any weather site you like by changing the url in styles/prosilver/template/portal/block/weather.html, or fill in the alternate fields below. Up to three different links to weather sites are possible.',
   'PORTAL_WEATHER'                  		    => 'Display weather',
   'PORTAL_WEATHER_EXPLAIN'                     => 'Display this block Yes/No?',
   'PORTAL_WEATHER_GER'                  		=> 'Display weather for German wetter.com',
   'PORTAL_WEATHER_GER_EXPLAIN'                 => 'Display this block Yes/No?',
   'PORTAL_WEATHER_ZIPCODE'                  	=> 'Your zip code',
   'PORTAL_WEATHER_ZIPCODE_EXPLAIN'             => 'Enter your local zip code here to display your area weather from German wetter.com',
   'PORTAL_WEATHER_ALTERNATE_URL'              	=> 'Your alternate weather URL',
   'PORTAL_WEATHER_ALTERNATE_URL_EXPLAIN'       => 'Paste your complete weather URL inhere to link to your alternate area weather. Leave empty for no display',
   'PORTAL_WEATHER_ALTERNATE_URL1'              => 'Your alternate weather URL',
   'PORTAL_WEATHER_ALTERNATE_URL1_EXPLAIN'      => 'Paste your complete weather URL inhere to link to your alternate area weather. Leave empty for no display',
   'PORTAL_WEATHER_ALTERNATE_URL2'              => 'Your alternate weather URL',
   'PORTAL_WEATHER_ALTERNATE_URL2_EXPLAIN'      => 'Paste your complete weather URL inhere to link to your alternate area weather. Leave empty for no display',
   
	// syndication
   'ACP_PORTAL_SYNDICATE_INFO'				    => 'Portal RSS / RDF Syndication',
   'ACP_PORTAL_SYNDICATE_INFO_SETTINGS'			=> 'Change syndication settings',
   'ACP_PORTAL_SYNDICATE_INFO_SETTINGS_EXPLAIN'	=> 'Here you can change your syndication information and certain specific options.',
   'PORTAL_SYNDICATE'                  		    => 'Display syndication',
   'PORTAL_SYNDICATE_EXPLAIN'                   => 'Display this block Yes/No?',

	// Portal Index
   'ACP_PORTAL_INDEX_INFO'				        => 'Portal Index',
   'ACP_PORTAL_INDEX_INFO_LAYOUT'	    		=> 'Display blocks on index/viewforum',
   'ACP_PORTAL_INDEX_INFO_LAYOUT_EXPLAIN'		=> 'Display Yes/No?',
   'ACP_PORTAL_INDEX_INFO_SETTINGS'			    => 'Change index/viewforum block settings',
   'ACP_PORTAL_INDEX_INFO_COLUMN_SETTINGS'	    => 'Change index/viewforum column settings',
   'ACP_PORTAL_INDEX_INFO_SETTINGS_EXPLAIN'	    => 'Here you can change your board index/viewforum navigation, board index and viewforum index is combined inhere. Changing setting here will affect board index and viewforum layout.',
   'PORTAL_INDEX_LEFT'                  		=> 'Display block column on left site',
   'PORTAL_INDEX_LEFT_EXPLAIN'                  => 'Display column on left site at portal index/viewforum Yes/No?',
   'PORTAL_INDEX_LEFT_COLLUMN_WIDTH'            => 'Width value of the left column',
   'PORTAL_INDEX_LEFT_COLLUMN_WIDTH_EXPLAIN'    => 'Change the width of left column in pixel, recommended value 180',
   'PORTAL_INDEX_RIGHT'                  		=> 'Display block column on right site',
   'PORTAL_INDEX_RIGHT_EXPLAIN'                 => 'Display column on right site at portal index/viewforum Yes/No?',
   'PORTAL_INDEX_RIGHT_COLLUMN_WIDTH'           => 'Width value of the right column',
   'PORTAL_INDEX_RIGHT_COLLUMN_WIDTH_EXPLAIN'   => 'Change the width of right column in pixel, recommended value 180',

	// change style
   'ACP_PORTAL_BOARD_STYLE_INFO'				=> 'Change board style',
   'ACP_PORTAL_BOARD_STYLE_SETTINGS'			=> 'Change board style settings',
   'ACP_PORTAL_BOARD_STYLE_SETTINGS_EXPLAIN'	=> 'Here you can change your board style information and certain specific options.',

	// media player
   'ACP_PORTAL_MEDIA_INFO'            			=> 'Media player',
   'ACP_PORTAL_MEDIA_INFO_EXPLAIN'    			=> 'Change media player information and certain specific options.',
   'PORTAL_MEDIA_PLAYER'               			=> 'Display media player?',
   'PORTAL_MEDIA_PLAYER_EXPLAIN'       			=> 'Display this block Yes/No?',

	// picture gallery
   'ACP_PORTAL_GALLERY_INFO'            		=> 'Picture gallery',
   'ACP_PORTAL_GALLERY_INFO_EXPLAIN'   			=> 'Change picture gallery information and certain specific options.',
   'PORTAL_PICTURE_GALLERY'               		=> 'Display picture gallery?',
   'PORTAL_PICTURE_GALLERY_EXPLAIN'    			=> 'Display this block Yes/No?',

	// scroll message
   'ACP_PORTAL_SCROLL_MESSAGE_INFO'            			=> 'Scroll Message',
   'ACP_PORTAL_SCROLL_MESSAGE_INFO_EXPLAIN'   			=> 'The marquee tag is a non-standard HTML markup element type which causes text onscreen to scroll from right to left across the screen. The default width of the MARQUEE element is equal to the width of its parent element.',
   'PORTAL_SCROLL_MESSAGE_DISPLAY'               		=> 'Display scroll message?',
   'PORTAL_SCROLL_MESSAGE_DISPLAY_EXPLAIN'    			=> 'Display this block Yes/No?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE'               		=> 'Display scroll/marquee effect?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_EXPLAIN'    			=> 'Display Yes/No?',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTCOLOR'            => 'Text color',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTCOLOR_EXPLAIN'	=> 'HEX or named colors are allowed such as #ffffff for white, or color names like vilolet. Default is #ff0000 ',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTSIZE'         	=> 'Font size',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_FONTSIZE_EXPLAIN' 	=> 'Font size for the text in pixel. Default is 10px.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_DIRECTION'         	=> 'Scroll direction',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_DIRECTION_EXPLAIN' 	=> 'Scroll direction for the text. This attribute controls the direction of scrolling. Permissible values are <strong>left</strong>, <strong>right</strong>, <strong>up</strong> and <strong>down</strong> specifying the end of the box that the scroll starts from.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SPEED'         		=> 'Scroll amount',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SPEED_EXPLAIN' 		=> 'This controls the amount of movement (in pixels) between the successive displays that give the impression of animation.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_ALIGN'         		=> 'Scroll align',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_ALIGN_EXPLAIN' 		=> 'This tag can take one of the values top, middle and bottom. It controls the positioning of the marquee display box relative to the current text in exactly the same manner as the img tag\'s align attribute.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BEHAVIOR'         	=> 'Scroll behavior',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BEHAVIOR_EXPLAIN' 	=> 'This tag controls the behaviour of the displayed text. There are three possible values. Text scrolling starts as soon as the page is downloaded, not when the user firsts scrolls the marquee into view. <br /><br />Options: <br /><strong>scroll</strong> text scrolls across display and re-appears from the other end when it has disappeared from one end. This is the default behaviour. <br /><strong>slide</strong> this is similar to scroll except that when the sliding text reaches the far end of the box, it disappears and restarts at the starting end of the box. If the display is not looping then the text remains positioned at the far end of the box. <br /><strong>alternate</strong> text "bounces" between the ends of the box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BGCOLOR'         		=> 'Scroll bgcolor',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_BGCOLOR_EXPLAIN' 		=> 'This tag controls the background colour of the display box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HEIGHT'         		=> 'Scroll height',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HEIGHT_EXPLAIN' 		=> 'This controls the height of the display box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_WIDTH'         		=> 'Scroll width',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_WIDTH_EXPLAIN' 		=> 'This controls the width of the display box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HSPACE'         		=> 'Scroll hspace',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_HSPACE_EXPLAIN' 		=> 'This controls the horizontal space around the display box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_VSPACE'         		=> 'Scroll vspace',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_VSPACE_EXPLAIN' 		=> 'This controls the vertical space around the display box.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_LOOP'         		=> 'Scroll loop',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_LOOP_EXPLAIN' 		=> 'The value of this attribute controls the number of display cycles. The values -1 and infinite both mean continue indefinitely.',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SCROLLDELAY'         	=> 'Scroll delay',
   'PORTAL_SCROLL_MESSAGE_MARQUEE_SCROLLDELAY_EXPLAIN' 	=> 'This controls the delay (in milliseconds) between the successive displays that give the impression of animation.',
   'PORTAL_SCROLL_MESSAGE_INTRO' 						=> 'Scroll message text',
   'PORTAL_SCROLL_MESSAGE_INTRO_EXPLAIN' 				=> 'Add/change a scrollable message here.  Up to 1000 characters plain text is possible, html is allowed, cookies are enabled! All text after the character limit will be cut off automatically.',
   'ACP_PORTAL_SCROLL_MESSAGE_TXT_SETTINGS'         	=> 'Scrollable Text',

	// other
   'ACP_PORTAL_OTHER_INFO'                  	=> 'Portal Other settings',
   'ACP_PORTAL_OTHER_SETTINGS'               	=> 'Portal other Settings',
   'ACP_PORTAL_OTHER_SETTINGS_EXPLAIN'       	=> 'Here you can change other information and certain specific options.',
   'PORTAL_MAX_LASTVISITS'                 		=> 'Limit of displayed last visited users',
   'PORTAL_MAX_LASTVISITS_EXPLAIN'          	=> 'Limit display of last visited users in portal\'s who is online block to a certain value (default is 5).',
   'PORTAL_ACT_RECENT_HOT_TOPICS'               => 'Display actual recent hot topics (scroll)?',
   'PORTAL_ACT_RECENT_HOT_TOPICS_EXPLAIN'    	=> 'Display this block Yes/No?',
   'PORTAL_ACT_RECENT_TOPICS'               	=> 'Display actual recent topics (scroll)?',
   'PORTAL_ACT_RECENT_TOPICS_EXPLAIN'    		=> 'Display this block Yes/No?',
   'PORTAL_ANNOUNCE_IMPORTANT'               	=> 'Display important announcements?',
   'PORTAL_ANNOUNCE_IMPORTANT_EXPLAIN'    		=> 'Display this block Yes/No?',
   'PORTAL_DONWLOADS'               			=> 'Display downloads?',
   'PORTAL_DONWLOADS_EXPLAIN'    				=> 'Display this block Yes/No?',
   'PORTAL_FORUMLIST'               			=> 'Display forumlist?',
   'PORTAL_FORUMLIST_EXPLAIN'    				=> 'Display this block Yes/No? <br /> Shows forums of the site, condensed in a block as list.',
   'PORTAL_PHPINFO'               				=> 'Display PHP info?',
   'PORTAL_PHPINFO_EXPLAIN'    					=> 'Display this block Yes/No?',
   'PORTAL_QUOTES'               				=> 'Display Quotations?',
   'PORTAL_QUOTES_EXPLAIN'    					=> 'Display this block Yes/No?',

   'PORTAL_DRAG_DROP'               			=> 'Portal Drag and Drop options',
   'PORTAL_DRAG_DROP_EXPLAIN'       			=> 'Enable this feature Yes/No? <br /> Globally enable / disable the Drag and Drop function of blocks in portal / index.',

   'PORTAL_RAN_H_BLOCK'                     	=> '<b>Altered Portal Settings</b>',
   'CONFIG_UPDATED'								=> 'Configuration updated successfully.',
   'VIEWING_PORTAL'								=> 'Viewing portal',
   
   // corrected/added since RC2 below
   'PORTAL_PICTURE_RESIZE'						=> 'Automatically picture resize (pixel)',
   'PORTAL_PICTURE_RESIZE_EXPLAIN'				=> 'Resize of pictures using the img-tag in messages which are placed as portal news.',
   
   // corrected/added since RC5 below
	'ACP_COUNTER_SETTINGS_EXPLAIN'	=> 'Settings for animate digits IP tracking counter.',
	'ACP_COUNTER_DIGITS_SETTINGS'	=> 'Counter digits settings',
	'ACP_COUNTER_DISPLAY_SETTINGS'	=> 'Counter display settings',
	'ACP_COUNTER_IP_SETTINGS'		=> 'Counter IP blocking settings',

	'COUNTER_DIGITS_PATH'				=> 'Digits path',
	'COUNTER_DIGITS_PATH_EXPLAIN'		=> 'Path of digits under your phpBB root dir, e.g. <samp>images/counter/digits</samp>',
	'COUNTER_DIGITS_ANI_PATH'			=> 'Animate digits path',
	'COUNTER_DIGITS_ANI_PATH_EXPLAIN'	=> 'Path of animate digits under your phpBB root dir, e.g. <samp>images/counter/digits_ani</samp>',
	'COUNTER_DIGITS_NUMBER'				=> 'Number of digits',
	'COUNTER_DIGITS_NUMBER_EXPLAIN'		=> 'Number of digits which you want to display in counter',
	'COUNTER_DIGITS_WIDTH'				=> 'Digits width',
	'COUNTER_DIGITS_WIDTH_EXPLAIN'		=> 'Width of digits',
	'COUNTER_DIGITS_HEIGHT'				=> 'Digits height',
	'COUNTER_DIGITS_HEIGHT_EXPLAIN'		=> 'Height of digits',
	'COUNTER_DISPLAY_IMAGE'				=> 'Display as images',
	'COUNTER_DISPLAY_NONE'				=> 'No display',
	'COUNTER_DISPLAY_STATS'				=> 'Display counter statistics',
	'COUNTER_DISPLAY_STATS_EXPLAIN'		=> 'Allow display statistics information on counter',
	'COUNTER_DISPLAY_TEXT'				=> 'Display as text',
	'COUNTER_BLOCK_IP'					=> 'Allow blocking IP',
	'COUNTER_BLOCK_IP_EXPLAIN'			=> 'Allow tracking/blocking IP addresses from counter. This option will make your counter work correctly: hits will not increase if any users refresh their browser in blocking time which you can setting below.',
	'COUNTER_BLOCK_TIME'				=> 'IP blocking time',
	'COUNTER_BLOCK_TIME_EXPLAIN'		=> 'Number of seconds the counter tracking/blocking every IP addresses.',
	'COUNTER_IP_LOGFILE'				=> 'IP log file',
	'COUNTER_IP_LOGFILE_EXPLAIN'		=> 'Path of IP log file under your phpBB root dir, e.g. <samp>images/counter/ip.txt</samp>. Required if you enabled Allow blocking IP option.',

	'SELECT_COUNTER_DISPLAY_MODE'			=> 'Counter display mode',
	'SELECT_COUNTER_DISPLAY_MODE_EXPLAIN'	=> 'Select display modes for counter. <br /><strong>Note</strong>: You have <strong>always</strong> to click/activate <strong>Display as images</strong> or <strong>Display as text</strong>, before saving changes made to other settings below.',

    'PORTAL_SHOW_LAST_NEWS'               	=> 'Sortorder portal news messages',
    'PORTAL_SHOW_LAST_NEWS_EXPLAIN'       	=> 'Yes = Latest message/reply first <br />No = First topic first.',

    'PORTAL_SHOW_AJAX_USERINFO'               	=> 'Ajax user info',
    'PORTAL_SHOW_AJAX_USERINFO_EXPLAIN'       	=> 'Display ajax user info Yes/No?',
    'PORTAL_SHOW_TOPIC_HOVER_PREVIEW'           => 'Topic hover preview',
    'PORTAL_SHOW_TOPIC_HOVER_PREVIEW_EXPLAIN'   => 'Display topic hover preview Yes/No?',
    'PORTAL_SHOW_TOOL_TIPS'           			=> 'Board wide tool tips',
    'PORTAL_SHOW_TOOL_TIPS_EXPLAIN'   			=> 'Display board wide tool tips Yes/No?',
    'PORTAL_SHOW_THANKS'           			    => 'Thank Post MOD',
    'PORTAL_SHOW_THANKS_EXPLAIN'   			    => 'Enable Thank Post MOD Yes/No?',
	
    'PORTAL_SHOW_BBCODE_BOX'           			=> 'Custom bbCode Box',
    'PORTAL_SHOW_BBCODE_BOX_EXPLAIN'   			=> 'Enable Custom bbCode Box Yes/No?',
    'PORTAL_SHOW_ZODIACS'           			=> 'Zodiacs in viewtopic',
    'PORTAL_SHOW_ZODIACS_EXPLAIN'   			=> 'Enable Zodiacs in viewtopic Yes/No?',
    'PORTAL_SHOW_LOGO'           				=> 'Site Logo',
    'PORTAL_SHOW_LOGO_EXPLAIN'   				=> 'Enable site logo in style header Yes/No?',
    'PORTAL_SHOW_SITENAME'           			=> 'Site Name and Description',
    'PORTAL_SHOW_SITENAME_EXPLAIN'   			=> 'Enable site name and description in style header Yes/No?',

	// pagination 
    'ACP_PORTAL_ANNOUNCE_PAG_SETTINGS' => 'Announcements pagination settings',
    'ACP_PORTAL_NEWS_PAG_SETTINGS'     => 'News pagination settings',

    'PORTAL_PAG_REPOSITORY'            => 'Article repository',
    'PORTAL_PAG_REPOSITORY_EXPLAIN'    => 'Display pagination Yes/No? <br /><br />If enabled the article page numbers will be displayed under the last article in the block.',
    'PORTAL_PAG_PERMISSIONS'           => 'Pagination permissions',
    'PORTAL_PAG_PERMISSIONS_EXPLAIN'   => 'Allow permissions Yes/No?',
    'PORTAL_PAG_SHOW_ALL'              => 'Show all types of messages',
    'PORTAL_PAG_SHOW_ALL_EXPLAIN'      => 'Display all messages Yes/No? <br /><br />All types of articles such as announcement, global announcement, sticky and normal will be counted in for the news section. The announcement section will count in global announcements and announcements only.',

));

?>