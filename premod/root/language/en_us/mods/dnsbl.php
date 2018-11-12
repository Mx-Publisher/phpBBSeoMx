<?php 
/** 
*
* @package Advanced Block Mod
* @version $Id: dnsbl.php, english, v 1.001 2009/04/27 Martin Truckenbrodt Exp$
* @copyright (c) 2009 phpBB Group 
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

$lang = array_merge($lang, array(
	'DNSBL'						=> 'DNS Blacklist',
	'DNSBL_ADDED_EDITED'		=> 'DNS Blacklist added or edited successfully',
	'DNSBL_ADMIN'				=> 'DNS Blacklist administration',
	'DNSBL_ADMIN_EXPLAIN'		=> 'There are no categories. You see only one list of all the DNS Blacklists. The DNS Blacklists will be used related to the order of the list.',
	'DNSBL_CREATE'				=> 'Create DNS Blacklist',
	'DNSBL_DELETE'				=> 'Delete DNS Blacklist',
	'DNSBL_DELETE_EXPLAIN'		=> 'The form below will allow you to delete a DNS Blacklist.',
	'DNSBL_DELETED'				=> 'DNS Blacklist deleted successfully',
	'DNSBL_EDIT'				=> 'Edit DNS Blacklist',
	'DNSBL_EDIT_EXPLAIN'		=> 'The form below will allow you to edit this DNS Blacklist.',
	'DNSBL_FQDN'				=> 'DNS Blacklist FQDN',
	'DNSBL_FQDN_EXPLAIN'		=> 'The Fully Qualified Domain Name for the DNS Blacklist.',
	'DNSBL_LOOKUP'				=> 'DNS Blacklist loopkup URL',
	'DNSBL_LOOKUP_EXPLAIN'		=> 'You can use this link to see details about the DNS Blacklist and can get information about the reasons for the blocking. The IP address will be added automatically by the Block log. You have to add http:// in front of the entry.',
	'DNSBL_LOOK_UP'				=> 'Select a DNS Blacklist',
	'DNSBL_LOOK_UP_EXPLAIN'		=> 'You are <strong>not</strong> able to select more than one DNS Blacklist.',
	'DNSBL_SETTINGS'			=> 'DNS Blacklist settings',
	'DNSBL_REGISTER'			=> 'Use DNSBL for user registration only',
	'DNSBL_REGISTER_EXPLAIN'	=> 'This can save performance on bigger boards. If you have no guest posting allowed, you can set all DNSBLs to register only',
	'DNSBL_REGISTER_SHORT'		=> 'Only for user registration',
	'DNSBL_WEIGHT'				=> 'DNS Blacklist weight',
	'DNSBL_WEIGHT_EXPLAIN'		=> 'IP adresses will be blocked then a threshold of weight value of 5 is reached. For single DNS Blacklists you can set lower values if you are not sure if it is a good idea to use this list or e.g. if the DNSBL lists not single IP addresses either whole address ranges. So the IP address have to be listed at several DNSBLs to be blocked. 0 disables the DNS Blacklist.',

	'NO_DNSBL'					=> 'No DNS Blacklist id found. Please contact an administrator.',
	'NO_DNSBL_SELECTED'			=> 'No DNS Blacklist selected!',
	'NO_DNSBLS'					=> 'There are no DNS Blacklists.',

	'VIEW_DNSBL'				=> '1 DNS Blacklist',
	'VIEW_DNSBLS'				=> '%d DNS Blacklists',
));

?>