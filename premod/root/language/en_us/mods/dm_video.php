<?php
/**
*
* dm_video [English] 
*
* @package language
* @version $Id: dm_video.php 225 2009-12-22 13:52:33Z femu $
* @copyright (c) 2008, 2009 femu - http://die-muellers.org
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
	'DMV_ACTION'				=> 'Action',
	'DMV_ADD_VIDEO'				=> 'Add a new video',
	'DMV_ADDED'					=> 'Your video was added successfully.<br />But before you can see it in the list, it needs to be released by an Administrator.',
	'DMV_ADDED_ADMIN'			=> 'Your video was added successfully.',
	'DMV_ALL_VIDEOS'			=> 'Show all videos',
	'DMV_ALL_VIDEOS_LIST'		=> 'All Videos',
	'DMV_ANNOUNCE_TITLE'		=> '[NEW VIDEO] %1$s',
	'DMV_ANNOUNCE_MSG'			=> 'Hello,

there\'s a new video!

Title: <strong>%1$s</strong>
Author: <strong>%2$s</strong>
Length: <strong>%3$s</strong>

<strong>Click %4$s to watch the video!</strong>

Have fun!',
	'DMV_AUTHOR'				=> 'Added by',
	'DMV_BACK'					=> 'Back to overview',
	'DMV_BACK_LINK'				=> '<br /><br />Click %shere%s to return to the last category',
	'DMV_BACK_LINK_COMMENT'		=> '<br /><br />Click %shere%s to return to the video comments',
	'DMV_BACK_LINK2'			=> '<br /><br />Back to last category',
	'DMV_BACK_LINK3'			=> '<br /><br />Click %shere%s to return',
	'DMV_BACK_LINK4'			=> '<br /><br />Click %shere%s to return to the index',
	'DMV_BACK_VIDEO'			=> '%sBack to video overview%s',
	'DMV_CAT_NAME'				=> 'Categories',
	'DMV_CAT_NAME1'				=> 'Category',
	'DMV_CLICK'					=> 'here',
	'DMV_COMMENT'				=> 'Comments',
	'DMV_COMMENT_ADD'			=> 'Add your comment',
	'DMV_COMMENT_ADDED'			=> 'Your comment was added successfully',
	'DMV_COMMENT_DEL'			=> 'Delete Comment',
	'DMV_COMMENT_DEL_CONFIRM'	=> 'Are you sure you want to delete your comment?',
	'DMV_COMMENT_DELETED'		=> 'Your comment was deleted successfully',
	'DMV_COMMENT_EDIT'			=> 'Edit comment',
	'DMV_COMMENT_EDITED'		=> 'Your comment was updated successfully',
	'DMV_COMMENT_EXPLAIN'		=> 'Here you can leave a comment for the current video. Please keep it short!',
	'DMV_COMMENT_MULTI'			=> '%d comments',
	'DMV_COMMENT_NEEDED'		=> 'You need to enter a comment!',
	'DMV_COMMENT_NEW'			=> 'New comment',
	'DMV_COMMENT_NO_CC'			=> 'No comments yet',
	'DMV_COMMENT_NONE'			=> 'There\'s currently no comment available for this video.',
	'DMV_COMMENT_SHOW'			=> 'The comments for the video %s',
	'DMV_COMMENT_SINGLE'		=> '1 comment',
	'DMV_COPY_NOTE'				=> '<strong>Important Note!</strong> All videos presented here, are videos from YouTube, MyVideo or similar operators from video portals. The copyright resides still with the author or the legal copyright owner of the video. If the usage of a video is prohibited on a private homepage like thisone, please be so kind and send us a notice including the link to the video to <a href="mailto:%1$s">%2$s</a> and kindly ask to remove the video from our list.',
	'DMV_COUNT'					=> 'Number of videos',
	'DMV_DELETE_VIDEO'			=> 'Delete your video',
	'DMV_DELETE_VIDEO_CONFIRM'	=> 'Are you sure you want to delete your video?',
	'DMV_DELETED_VIDEO'			=> 'Your video was successfully deleted',
	'DMV_DURATION'				=> 'Duration',
	'DMV_DURATION_EXPLAIN'		=> 'Please enter here the duration of the video in following format: 5:00 min',
	'DMV_EDITED'				=> 'Your video was successfully updated',
	'DMV_EDIT_VIDEO'			=> 'Edit your video',
	'DMV_FROM'					=> 'by',
	'DMV_HITS'					=> 'The Top %s by hits',
	'DMV_IN'					=> 'in',
	'DMV_INDEX'					=> 'Index',
	'DMV_LAST_VIDEO'			=> 'Newest video',
	'DMV_MOST_SEEN_VIDEOS'		=> 'The most seen videos',
	'DMV_MULTI'					=> '%d videos',
	'DMV_MULTI_VIEW'			=> 'Video was seen <strong>%d</strong> times up to now',
	'DMV_NEED'					=> 'Fields marked with an asterix (*) needs to be filled',
	'DMV_NEED_DATA'				=> 'You need to enter at least the title and the URL! Click the browsers return button, to complete your entry.',
	'DMV_NEED_TITLE'			=> 'You need to enter a title! Click the browsers return button to complete your entry.',
	'DMV_NEED_URL'				=> 'You need to enter the URL of the video. Click the browsers return button to complete your entry!',
	'DMV_NEW_VIDEOS'			=> 'There are new unapproved videos! Click here to go to your ACP',
	'DMV_NEW_VIDEOS_PM_SUBJECT'	=> 'There are new unapproved videos!',	
	'DMV_NEW_VIDEOS_PM'			=> 'Hello,<br /><br />there are new videos, which needs be checked and released.',
	'DMV_NEWEST_VIDEOS'			=> 'The newest videos',
	'DMV_NO_CATS'				=> 'There are currently no categories available',
	'DMV_NO_OWN_VIDEOS'			=> 'Didn\'t placed any videos yet',
	'DMV_NO_VIDEOS'				=> 'There are currently no videos available',
	'DMV_NO_VIDEOS_IN_CAT'		=> 'There are no videos available in this category or already existing videos are not yet released.<br />If this categroy has sub-categories, place your videos in the sub-category, which fits best!',
	'DMV_NOT_RELEASED'			=> 'The last video isn\'t released yet!',
	'DMV_ON'					=> 'on',
	'DMV_OWN_MULTI'				=> 'Placed <strong>%d</strong> videos up to now',
	'DMV_OWN_SINGLE'			=> 'Placed <strong>1</strong> video up to now',
	'DMV_OWN_VIDEO'				=> 'Videos placed',
	'DMV_POST_VIDEO'			=> 'Place a new video in the current category',
	'DMV_POST_VIDEO_EXPLAIN'	=> 'Here you can enter a new video in the currenty category.<br />Please try to fill all fields (title and URL needs to be filled!)',
	'DMV_RANDOM_VIDEO'			=> 'Random Video',
	'DMV_RANK'					=> 'Rank',
	'DMV_RATED_SUCCESSFUL'		=> '<strong>Your rating was successfully added!</strong>',
	'DMV_RATES'					=> 'The Top %s by ratings',
	'DMV_RATING'				=> 'Rate the video',
	'DMV_RATING_AVG'			=> 'Avarage',
	'DMV_RATING_BAD'			=> 'Bad',
	'DMV_RATING_GOOD'			=> 'Good',
	'DMV_RATING_GREAT'			=> 'Fabulous',
	'DMV_RATING_LIST'			=> 'Rating',
	'DMV_RATING_NO'				=> 'No ratings yet',
	'DMV_RATING_NOT_BAD'		=> 'Not bad',
	'DMV_RATING_NO_PERM'		=> 'You are not allowed to rate videos',
	'DMV_RATING_SELECT'			=> 'Select rating',
	'DMV_RATING_SUM'			=> '%s rating with %s',
	'DMV_RATING_SUMS'			=> '%s ratimg and an avarage rating of %s',
	'DMV_RATING_TITLE'			=> 'Select your rating for %1$s from %2$s!',
	'DMV_RATING_VIDEO'			=> 'Select your rating',
	'DMV_REPORT_VIDEO'			=> 'Report a broken video',
	'DMV_REPORTED_THANKS'		=> 'Thanks very much for reporting a broken video.',
	'DMV_REPORTED_VIDEOS'		=> 'There are reported videos. Click here to go to your ACP!',
	'DMV_RETURN_MAIN'			=> 'Return to the video menu',
	'DMV_SEARCH'				=> 'Search video',
	'DMV_SEARCH_NO_RESULTS'		=> 'Unfortunately we could not find anything matching your search string.',
	'DMV_SEARCH_RESULTS'		=> 'Below you will find the search results for your search of <strong>%s</strong>',
	'DMV_SEARCH_RESULTS_HEADER'	=> 'Search Results',
	'DMV_SEARCH_STRING'			=> 'Enter here the search criteria(s)',
	'DMV_SHOW_POPUP'			=> 'Show video in PopUp window',
	'DMV_SHOW_TOPTEN'			=> 'Show Top %1$s List',
	'DMV_SHOW_VIDEO'			=> 'You are currently watching',
	'DMV_SHOW_VIDEO_EXPLAIN'	=> 'Here you can watch the selected video.<br />If it\'s a song and the publisher entered additional informations, you will find these on the right side.',
	'DMV_SINGER'				=> 'Artist',
	'DMV_SINGER_EXPLAIN'		=> 'Please enter here the name of the artist',
	'DMV_SINGLE'				=> '1 video',
	'DMV_SINGLE_VIEW'			=> 'Views: 1 time',
	'DMV_SONGTEXT'				=> 'Description',
	'DMV_SONGTEXT_EXPLAIN'		=> 'Here you may enter the description of your video. Please <strong>don\'t</strong> place any lyrics over here! You will see this text beside the video.',
	'DMV_SORT_ARTIST'			=> 'Artist',
	'DMV_SORT_ASC'				=> 'Ascending',
	'DMV_SORT_DATE'				=> 'Date',
	'DMV_SORT_DESC'				=> 'Descending',
	'DMV_SORT_DIRECTION'		=> 'Sort Order',
	'DMV_SORT_FROMNAME'			=> 'posted by',
	'DMV_SORT_KEYS'				=> 'Sort key ',
	'DMV_SORT_RATING'			=> 'Rating',
	'DMV_SORT_TITLE'			=> 'Title',
	'DMV_SORT_VIEWS'			=> 'Views',
	'DMV_SUB_CAT'				=> 'Sub-Category',
	'DMV_SUB_CATS'				=> 'Sub-Categories',
	'DMV_TITLE'					=> 'Title',
	'DMV_TITLE_EXPLAIN'			=> 'Enter here the title of the video',
	'DMV_TOPTEN_HITS_EXPLAIN'	=> 'Here you see the list of our Top %s Videos listed by views',
	'DMV_TOPTEN_RATE_EXPLAIN'	=> 'Here you see the list of our Top %s Videos listed by ratings',
	'DMV_TOTAL_VIDEOS'			=> 'Total number of videos: %s',
	'DMV_URL'					=> 'Video URL',
	'DMV_URL_EXPLAIN'			=> 'Enter here the <strong>embedded code</strong> (no direct link!) you receive ie. on YouTube, MyVideo or others. If you have an own video, please create an account on one of these video providers and first place your video over there and after that enter the embedded code over here.',
	'DMV_VIDEO'					=> 'Videos',
	'DMV_VIDEO_COUNTER'			=> '%s views',
	'DMV_VIDEO_IMG'				=> 'Image Link',
	'DMV_VIDEO_IMG_EXPLAIN'		=> 'Enter here a link to an image for the video. The size should not exceed 250 x 250px! Please make sure the link is and will stay available! And of course check the copyright!',
	'DMV_VIDEO_RATES'			=> 'Ratings',
	'DMV_VIDEO_VIEWS'			=> 'Views',
	'DMV_VIEW_VIDEOS'			=> 'Is watching videos',

	// UMIL Installer strings
	'UMIL_DMV_INSERT_FIRST_FILL'		=> 'The tables of the DM Video modifaction were filled successfully filled with some basic data.',
	'UMIL_DMV_REMOVE_CONFIG_ENTRIES'	=> 'The entries in the config table were removed successfully.',
	'UMIL_DMV_NAME'						=> 'DM Video',
	'UMIL_DMV_NAME_EXPLAIN'				=> 'This modification allows you to offer your users a video page like YouTube or MyVideo.<br /><br />Please select the desired action below (in normal cases you don\'t need to change anythin. The best selection is selected automatically).<br /><br />Have fun!',
	'UMIL_DMV_UPDATE_SUCCESFUL'			=> 'The tables were updated successfully.',

	'ACP_DMV_DM_VIDEO'					=> 'DM Video',
	'ACP_DMV_CONFIG'					=> 'Configuration',
	'ACP_DMV_EDIT'						=> 'Edit Videos',
	'ACP_DMV_MANAGE_CATEGORIES'			=> 'Categories',
	'ACP_DMV_RELEASE'					=> 'Release Videos',
	'ACP_DMV_REPORTED'					=> 'Reported Videos',
));

?>