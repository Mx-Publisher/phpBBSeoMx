<?php
/**
*
* info_acp_dm_video [English]
*
* @package language
* @version $Id: info_acp_dm_video.php 207 2009-12-17 12:22:54Z femu $
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
	'ACP_DMV_CONFIG'				=> 'Configuration',
	'ACP_DMV_CONFIG_EXPLAIN'		=> 'Here you can set some basic features for your DM Video',
	'ACP_DMV_DM_VIDEO'				=> 'DM Video',
	'ACP_DMV_DM_VIDEO_CAT'			=> 'DM Video Categories',
	'ACP_DMV_EDIT'					=> 'Edit Videos',
	'ACP_DMV_EDIT_EXPLAIN'			=> 'Here you can edit or delete the currently existing videos.<br />By clicking the video title, you can watch the video in a seperate window.',
	'ACP_DMV_MANAGE_CATEGORIES'		=> 'Categories',
	'ACP_DMV_RELEASE'				=> 'Release Videos',
	'ACP_DMV_RELEASE_EXPLAIN'		=> 'Here you can release new videos.<br />By clicking the video title, you can watch the video in a seperate window, before you release it.',
	'ACP_DMV_RELEASE_EDIT'			=> 'Edit released videos',
	'ACP_DMV_RELEASE_EDIT_EXPLAIN'	=> 'Here you can release new videos, which are not visible yet to other users.<br />By clicking the video title, you can watch the video in a seperate window.',
	'ACP_DMV_REPORTED'				=> 'Reported Videos',
	'ACP_DMV_REPORTED_EXPLAIN'		=> 'Here you can edit reported videos.<br />By clicking the video title, you can check the video in a seperate window.',
	'ACP_DMV_REPORTED_EDIT'			=> 'Edit reported videos',
	'ACP_DMV_REPORTED_EDIT_EXPLAIN'	=> 'Here you will find the videos, which are reported as broken from the users.<br />By clicking the title, you can open the video in a new window and check, if it\'s really broken.',
	'ALL_VIDEOS'					=> 'All videos',

	'DMV_ADD'						=> 'Add',
	'DMV_APPROVAL'					=> 'Released',
	'DMV_APPROVAL_EXPLAIN'			=> 'Set here, if the video will be visible for other users or not',
	'DMV_CAT_DELETE'				=> 'Here you can delete a category',
	'DMV_CAT_DELETE_DONE'			=> 'Category successfully deleted',
	'DMV_CAT_EDIT'					=> 'Here you can edit a category',
	'DMV_CAT_EDIT_DONE'				=> 'Category successfully updated.',
	'DMV_CAT_NAME'					=> 'Category',
	'DMV_CAT_NAME_EMPTY'			=> 'You need to enter a name for the category',
	'DMV_CAT_NAME_EXPLAIN'			=> 'Category, where the video is in',
	'DMV_CAT_NEW'					=> 'Here you can add a new category',
	'DMV_CAT_NEW_DONE'				=> 'Category successfully added',
	'DMV_CAT_SELECT'				=> 'Here you can add, edit or delete categories',
	'DMV_CLICK'						=> 'here',
	'DMV_CONFIG_ACP_PAGE'			=> 'Number of videos per page (ACP)',
	'DMV_CONFIG_ACP_PAGE_EXPLAIN'	=> 'Set the number of videos per page, which you like to see in the ACP',
	'DMV_CONFIG_ANNOUNCE_SETTINGS'	=> 'Announcement settings',
	'DMV_CONFIG_ANNOUNCE_ENABLE'	=> 'Announce new videos',
	'DMV_CONFIG_ANNOUNCE_ENABLE_EX'	=> 'Activate, if you like to announce new videos in a forum',
	'DMV_CONFIG_ANNOUNCE_FORUM'		=> 'Select a forum',
	'DMV_CONFIG_ANNOUNCE_FORUM_EX'	=> 'Select here a forum, where you like to announce new videos',
	'DMV_CONFIG_ANNOUNCE_TITLE'		=> '[NEW] %1$s',
	'DMV_CONFIG_ANNOUNCE_MSG'		=> 'Hello,

there\'s a new video!

Title: <strong>%1$s</strong>
Author: <strong>%2$s</strong>
Length: <strong>%3$s</strong>

<strong>Click %4$s to watch the video!</strong>

Have fun!',
	'DMV_CONFIG_COMMENT'			=> 'Number of comments per page (user view)',
	'DMV_CONFIG_COMMENT_EXPLAIN'	=> 'Set the number of comments per page, which your users should see per page',
	'DMV_CONFIG_COPY_EMAIL'			=> 'Copyright info email addresse',
	'DMV_CONFIG_COPY_EMAIL_EXPLAIN'	=> 'Email address, which should be used to send copyrights complaints to, ie.  copyrights@yourdomain.com',
	'DMV_CONFIG_COPY_SHOW'			=> 'Display for the copyright info email address',
	'DMV_CONFIG_COPY_SHOW_EXPLAIN'	=> 'How your email address should be shown in the copyright info text, ie.  Copyrights at Yourdomain Dot Com',
	'DMV_CONFIG_MAIN_SETTINGS'		=> 'Basic Settings',
	'DMV_CONFIG_NEWEST'				=> 'Number of newest videos',
	'DMV_CONFIG_NEWEST_EXPLAIN'		=> 'Set the number of videos, which should be displayed as newest',
	'DMV_CONFIG_PM_SETTINGS'		=> 'PM Settings',
	'DMV_CONFIG_PM_FROM_ID'			=> 'User ID from',
	'DMV_CONFIG_PM_FROM_ID_EX'		=> 'User ID from the user who is the sender for the personal message',
	'DMV_CONFIG_PM_TO_ID'			=> 'User ID to',
	'DMV_CONFIG_PM_TO_ID_EX'		=> 'User ID from the user who will receive the personal message, if a new video is placed',
	'DMV_CONFIG_POINTS_SETTINGS'	=> 'Points Settings',
	'DMV_CONFIG_POINTS_EXPLAIN'		=> 'You have the Ultimate Points Mod installed. Therefore you may give users points for posting new videos (they will be substraced, if the video will be deleted).',
	'DMV_CONFIG_POINTS_INACTIVE'	=> 'You do have the Ultimate Points Mod installed, but you have <strong>deactivated</strong> the use of the UPS. If you would have activated the UPS, you would have the possibility to give the user points for their postings of new videos.',
	'DMV_CONFIG_POINTS_ENABLE'		=> 'Enable points for new videos',
	'DMV_CONFIG_POINTS_ENABLE_EX'	=> 'Enable this option, if you like to give points to the users, if they post a new video',
	'DMV_CONFIG_POINTS_VALUE'		=> 'Points per video',
	'DMV_CONFIG_POINTS_VALUE_EX'	=> 'Enter here the points you would like to give the users for their videos. The points will be added after the video is released (and substracted, when the video will be deleted)',
	'DMV_CONFIG_TOP_VIEWS'			=> 'Number of videos for your Top XX (views)',
	'DMV_CONFIG_TOP_VIEWS_EXPLAIN'	=> 'Set the number of videos, which should be displayed as Top XX sorted by views',
	'DMV_CONFIG_TOP_RATE'			=> 'Number of videos for your Top XX (ratings)',
	'DMV_CONFIG_TOP_RATE_EXPLAIN'	=> 'Set the number of videos, which should be displayed as Top XX sorted by ratings',
	'DMV_CONFIG_UPDATED'			=> 'The configuration was successfully updated',
	'DMV_CONFIG_USER_PAGE'			=> 'Number of videos per page (user view)',
	'DMV_CONFIG_USER_PAGE_EXPLAIN'	=> 'Set the number of videos per page, which your users should see per page',
	'DMV_CREATE_CAT'				=> 'Add category',
	'DMV_DELETE'					=> 'Delete',
	'DMV_CAT_DELETE_DONE'			=> 'Category was deleted successfully',
	'DMV_DELETED'					=> 'The entry was successfully deleted',
	'DMV_DELETED_CAT'				=> 'The selected category was deleted',
	'DMV_DELETED_CAT_NOT'			=> 'The selected category was <strong>not</strong> deleted',
	'DMV_DELETE_HAS_FILES'			=> 'There are still videos listed in this category!<br />Please delete them or move them to another category first!',
	'DMV_CAT_NOT_EXISTS'			=> 'The category does not exist',

	'DMV_DELETE_SUB_CATS'			=> 'Please delete or move the sub-categories first',
	'DMV_DEL_CAT'					=> 'Do you really want to delete this category?',
	'DMV_DEL_DELETED_SUBS'			=> 'The sub-categories were successfully deleted',
	'DMV_DEL_DELETED_VIDEOS'		=> 'The videos were successfully deleted',
	'DMV_DEL_DM_VIDEOS'				=> 'Delete videos',
	'DMV_DEL_MOVED_SUBS'			=> 'The sub-categories were successfully moved to %s',
	'DMV_DEL_MOVED_VIDEOS'			=> 'The videos were successfully moved to %s',
	'DMV_DEL_SUBS'					=> 'Delete sub-categories',
	'DMV_DEL_SUBS_TO'				=> 'Move sub-categories to',
	'DMV_DEL_SUBS_YES'				=> 'Delete category including the sub-categories?',
	'DMV_DEL_VIDEOS_TO'				=> 'Move videos to',
	'DMV_DEL_VIDEOS_YES'			=> 'Delete category including the videos?',
	'DMV_DM_VIDEO_ACP_CATSD'		=> 'Are you sure, you want to delete the selected category?',
	'DMV_DM_VIDEO_ACP_CATSE'		=> 'Edit category',
	'DMV_DM_VIDEO_ACP_CATSN'		=> 'Add category',
	'DMV_DM_VIDEO_INDEX'			=> 'DM Video',
	'DMV_DURATION'					=> 'Duration of the video',
	'DMV_DURATION_EXPLAIN'			=> 'Enter here the duration of the video in following format: 5:00 min',
	'DMV_MULTI'						=> '%d videos',
	'DMV_NEED_DATA'					=> 'You need to enter at least the title and the url of the video!',
	'DMV_NEED_TITLE'				=> 'You need to enter a title for the video!',
	'DMV_NEED_URL'					=> 'You need to enter an URL for the video!',
	'DMV_NEW_CAT'					=> 'Add new category',
	'DMV_NEW_CAT_DESC'				=> 'Description of the category',
	'DMV_NEW_CAT_DESC_EXPLAIN'		=> 'BB-Codes, smiles and links will be recognised automatically',
	'DMV_NEW_CAT_NAME'				=> 'Category name',
	'DMV_NEW_CAT_PARENT'			=> 'parent category',
	'DMV_NEW_VIDEOS'				=> 'Information about new videos',
	'DMV_NEW_VIDEOS_EXPLAIN'		=> 'If activated, you will see an information in the header about new videos.',
	'DMV_NO_PARENT'					=> 'no parent category',
	'DMV_NO_RELEASE'				=> 'There are no videos to release',
	'DMV_NO_REPORTS'				=> 'There are no reported videos',
	'DMV_NO_SUBCAT'					=> 'There are no sub-categories',
	'DMV_PAGINATION'				=> 'Entries %1$s to %2$s Total %3$s Page: %4$s',
	'DMV_PM_FROM_ERROR'				=> 'The selected <strong>User ID from</strong> does not exist!',
	'DMV_PM_TO_ERROR'				=> 'The selected <strong>User ID to</strong> does not exist!',
	'DMV_REALY_DELETE'				=> 'Are you sure you want delete this entry?',
	'DMV_REMOVE_INSTALL'			=> 'Please delete the installation folder <strong>install</strong>',
	'DMV_REPORTED'					=> 'Broken video',
	'DMV_REPORTED_EXPLAIN'			=> 'Set this field to no, if you want to set the video back as working',
	'DMV_SINGER'					=> 'Name of the artist',
	'DMV_SINGER_EXPLAIN'			=> 'The name of the artist',
	'DMV_SINGLE'					=> '1 video',
	'DMV_SONGTEXT'					=> 'Description',
	'DMV_SONGTEXT_EXPLAIN'			=> 'The description of the video',
	'DMV_SORT_APPROVAL'				=> 'Activation',
	'DMV_SORT_ARTIST'				=> 'Artist',
	'DMV_SORT_ASC'					=> 'Ascending',
	'DMV_SORT_CAT'					=> 'Category',
	'DMV_SORT_DESC'					=> 'Descending',
	'DMV_SORT_DIRECTION'			=> 'Sort order',
	'DMV_SORT_FROMNAME'				=> 'posted by',
	'DMV_SORT_KEYS'					=> 'Sort key ',
	'DMV_SORT_TITLE'				=> 'Title',
	'DMV_SUB_CATS'					=> 'Sub-categories',
	'DMV_TITLE'						=> 'Title of the video',
	'DMV_TITLE_EXPLAIN'				=> 'The title of your video',
	'DMV_UPDATED'					=> 'Your entry was successfully updated.',
	'DMV_URL'						=> 'Video URL',
	'DMV_URL_EXPLAIN'				=> 'The embedded code (no direct link!) you receive ie on YouTube, MyVideo or others.',
	'DMV_USERNAME'					=> 'Added by',
	'DMV_VIDEO_IMG'					=> 'Image Link',
	'DMV_VIDEO_IMG_EXPLAIN'			=> 'Enter here a link to an image for the video. The size should not exceed 250 x 250px! Please make sure the link is and will stay permanently available!',

	'LOG_USER_VIDEO_ADDED'			=> 'Added video <strong>%s</strong>',
	'LOG_USER_VIDEO_EDITED'			=> 'Edited video no. <strong>%s</strong>',
	'LOG_USER_VIDEO_DELETED'		=> 'Deleted video no. <strong>%s</strong>',
	'LOG_USER_COMMENT_ADDED'		=> 'Added comment for video no. <strong>%s</strong>',
	'LOG_USER_COMMENT_EDITED'		=> 'Edited comment no. <strong>%s</strong>',
	'LOG_USER_COMMENT_DELETED'		=> 'Deleted comment no. <strong>%s</strong>',
	'LOG_USER_VIDEO_RATE'			=> 'Rated video no. <strong>%s</strong>',
	'LOG_USER_VIDEO_RATE_EDITED'	=> 'Changed rating for video no. <strong>%s</strong>',
	'LOG_USER_VIDEO_REPORTED'		=> 'Reported video no. <strong>%s</strong>',

	'LOG_ADMIN_VIDEO_UPDATED'		=> 'Updated video <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_DELETED'		=> 'Deleted video <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_REP_UPDATED'	=> 'Updated reported video <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_REP_DELETED'	=> 'Deleted reported video <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_REL_UPDATED'	=> 'Updated release video <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_REL_DELETED'	=> 'Deleted release video <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_CONFIG_UPDATED' => 'Updated video configuration',
	'LOG_ADMIN_VIDEO_CAT_ADDED'		=> 'Added new video category <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_CAT_UPDATED'	=> 'Updated video category <strong>%s</strong>',
	'LOG_ADMIN_VIDEO_CAT_DELETED'	=> 'Delete video category <strong>%s</strong>',
));

?>