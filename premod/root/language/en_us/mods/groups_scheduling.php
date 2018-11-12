<?php
/**
*
* acp_groups_scheduling [English]
*
* @package Scheduled Group Membership
* @version $Id: groups_scheduling.php 2009-03-31 DavidIQ $
* @copyright (c) 2009 DavidIQ.com
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

$lang = array_merge($lang, array(
	'SCHEDULE_GROUP_MEMBERSHIP'		=> 'Schedule group membership',
	'MEMBERSHIP_SCHEDULING'			=> 'Membership Scheduling',
	'SCHEDULING_WEEKDAY'			=> 'Weekday scheduling',
	'SCHEDULING_WEEKDAY_EXPLAIN'	=> 'Set the day(s) of the week that the user will be a member of this group.  Not making any selections indicates "Daily".',
	
	'TIMESPAN_START_TIME'			=> 'Group membership start time',
	'TIMESPAN_START_TIME_EXPLAIN'	=> 'Enter the time of day in which the group membership will start.',
	'TIMESPAN_END_TIME'				=> 'Group membership end time',
	'TIMESPAN_END_TIME_EXPLAIN'		=> 'Enter the time of day in which the group membership will end.',
	'START_DATE'					=> 'Group membership start date',
	'START_DATE_EXPLAIN'			=> '(Optional) Enter the date membership will start.',
	'END_DATE'						=> 'Group membership end date',
	'END_DATE_EXPLAIN'				=> '(Optional) Enter the date membership will end.',
	'SCHEDULE_DAYS'					=> 'Scheduled Membership Days',
	'SCHEDULE_START'				=> 'Schedule Start',
	'SCHEDULE_END'					=> 'Schedule End',
	'TIME_AM'						=> 'AM',
	'TIME_PM'						=> 'PM',
	'AT'							=> 'at',

	'SUN'							=> 'Sun',
	'MON'							=> 'Mon',
	'TUE'							=> 'Tue',
	'WED'							=> 'Wed',
	'THU'							=> 'Thu',
	'FRI'							=> 'Fri',
	'SAT'							=> 'Sat',
	'DAILY'							=> 'Daily',
	
	'START_TIME_INVALID'			=> 'You have entered an invalid group membership scheduled start time.',
	'END_TIME_INVALID'				=> 'You have entered an invalid group membership scheduled end time.',
	'END_NOT_BEFORE_START'			=> 'End time cannot be before start time.',
	'START_DATE_INVALID'			=> 'You have entered an invalid start date.',
	'END_DATE_INVALID'				=> 'You have entered an invalid end date.',
	'END_DATE_NOT_BEFORE_START'			=> 'End date cannot be before start date.',
));

?>