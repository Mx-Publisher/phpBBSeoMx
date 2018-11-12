<?php
/*
*
* @name lang_donations.php
* @package phpBB3 Portal XL 5.0
* @version $Id: lang_donations.php,v 1.1.0 2010/10/08 portalxl group Exp $
*
* @copyright (c) Zou Xiong - Enterprise admin@loewen.com.sg
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
	'ACP_MODS'								=> 'Donation Exchange Mod',
	'ACP_DONORS_CONFIG'						=> 'Donation Mod - Add Donor',
	'ACP_DONATE_MOD_SETTINGS'				=> 'Donation Mod - Settings',
	'L_ENABLE_MOD'							=> 'Enable Donation Mod',
	'L_ENABLE_MOD_EXPLAIN'					=> 'Determine to enable or disable Donation Mod to receive donations.',
	'DONATE'								=> 'Donate',
	'DONATE_EXPLANATION'					=> 'Donation Explanation',
	'CLICK_RETURN_INDEX'					=> 'Click %sHere%s to return to %s',
	'L_DONOR_CONFIGURATION_EXPLAIN'			=> 'The form below will allow you to manually insert information of donation into your database.',
	'L_DONOR_CONFIGURATION_TITLE'			=> 'Manually add donor',
	'L_DONOR_GENERAL_SETTINGS'				=> 'Donation Information',
	'L_USER_ACCOUNT'						=> 'The account of donor',
	'L_DONATE_MONEY'						=> 'Amount of money donated',
	'L_DONATE_DATE'							=> 'Date of donation',	
	'L_DONATE_DATE_EXPLAIN'					=> 'The date format must be YYYY/MM/DD hh:mm:ss, for example: 2010/10/07 00:00:00',
	'L_TRANSACTION_ID'						=> 'Transaction #ID',	
	'L_DONOR_PAY_ACCOUNT'					=> 'The payment account of donor',
	'L_DONOR_PAY_ACCOUNT_EXPLAIN'			=> 'For example, account of PayPal.',
	'New_donor_record_added'				=> 'Add donation information successfully!',
	'Click_return_add_donor'				=> 'Click %sHere%s to add another record.',
	'New_donor_record_error'				=> 'Add donation information error!',
	'L_DONATION_SETTINGS'					=> 'Donation Settings',
	'L_DISPLAY_X_DONORS'					=> 'Display how many last donors ',
	'L_DISPLAY_X_DONORS_EXPLAIN'			=> 'Enter the number of newest donors you want to display.',
	'L_DONATION_DESCRIPTION'				=> 'The reason for wanting/asking donations ',
	'L_DONATION_DESCRIPTION_EXPLAIN'		=> 'Your reason or description of donation. If no reason is needed, just leave it blank.',
	'L_DONATION_GOAL'						=> 'Your current donation goal ',
	'L_DONATION_GOAL_EXPLAIN'				=> 'Enter the total amount of cash you\'d like to collect. If you have no goal amount, then leave this as 0.',
	'L_DONATION_START'						=> 'Set the start time of current donation collection ',
	'L_DONATION_START_EXPLAIN'				=> 'The time format must be yyyy/mm/dd.<br />If you have no need of a time limit, just leave this blank.',
	'L_DONATION_END'						=> 'Set the end time of current donation collection ',
	'L_DONATION_END_EXPLAIN'				=> 'The time format must be yyyy/mm/dd.<br />If you have no need of a time limit, just leave this blank.',
	'L_DONATION_POINTS'						=> 'Set the points to give to donor per $1 ',
	'L_DONATION_POINTS_EXPLAIN'				=> 'IMPORTANT! If you do not have a Points or Cash MOD installed, or if you simply do not want to give points/cash to donors, set this to 0.',
	'L_PERSONAL_PAYPAL_ACCT'				=> 'Your Personal Account in PayPal ',
	'L_PERSONAL_PAYPAL_ACCT_EXPLAIN'		=> 'If you do not have Personal Account, enter the same account as your Premier/Business Account. Your PayPal Account is your e-mail address. Make sure this address is your <b>PRIMARY e-mail address</b> on the account or it will not work!',
	'L_BUSINESS_PAYPAL_ACCT'				=> 'Your Premier/Business Account in PayPal ',
	'L_BUSINESS_PAYPAL_ACCT_EXPLAIN'		=> 'If you do not have Premier/Business Account, enter the same account as your Personal Account. Your PayPal Account is your e-mail address. Make sure this address is your <b>PRIMARY e-mail address</b> on the account or it will not work!',
	'L_PAYPAL_CURRENCY_CODE'				=> 'The PayPal currency code your account supports ',
	'L_PAYPAL_CURRENCY_CODE_EXPLAIN'		=> 'For example, if your PayPal account is in US dollars, then you would enter the currency code \'USD\'.<br />For a list of currency codes, you can look [ -<a href=\'http://www.xe.com/symbols.htm\' target=\'blank\'>here</a>- ].',
	'L_POSTS_COUNTS'						=> 'Set the post count to give to donor per $1 ',
	'L_POSTS_COUNTS_EXPLAIN'				=> 'IMPORTANT! If you do not want to give a post count to donors, set this to 0. <br />You can only choose either points or posts count to give to donors.<br />Example: 10 posts per $1 USD',
	'L_TOP_DONORS'							=> 'Display top donors ',
	'L_TOP_DONORS_EXPLAIN'					=> 'If you want to display top # donors, select Yes. If you want to display last # donors, select No.',
	'L_DONATE_TOGRP_ONE'					=> 'Enter the first Group ID into which the donor will join',
	'L_DONATE_TOGRP_ONE_EXPLAIN'			=> 'Enter 0 to mean there is no first group to join.',
	'L_TOGRPONE_AMOUNT'						=> 'Enter the minimum donation amount for your user to join the first group',
	'L_TOGRPONE_AMOUNT_EXPLAIN'				=> 'This means that the donor can only join the first group if he donated more than the amount you specified.',
	'L_DONATE_TOGRP_TWO'					=> 'Enter the second Group ID into which the donor will join',
	'L_DONATE_TOGRP_TWO_EXPLAIN'			=> 'Enter 0 to mean there is no second group to join.',
	'L_TOGRPTWO_AMOUNT'						=> 'Enter the minimum donation amount for your user to join the second group',
	'L_TOGRPTWO_AMOUNT_EXPLAIN'				=> 'This means that the donor can only join the second group if he donated more than the amount you specified.',
	'L_TORANK_ID'							=> 'Enter the Rank ID',
	'L_TORANK_ID_EXPLAIN'					=> 'The Rank ID that the User\'s Rank will be set to after their donation.<br />Just enter a 0 if you do not want to use this feature.',
	'L_EXPLANATION_POSTID'					=> 'Enter the Donation Explanation Post ID',
	'L_EXPLANATION_POSTID_EXPLAIN'			=> 'The post ID that you explain to your members reason for donation and any rewards of points, post count, special rank or group memberships.',
	'L_DONATES'								=> 'Donations Admin',
	'L_DONATES_ADD'							=> 'Add new',
	'L_CURRENCY_CONFIGURATION_EXPLAIN'		=> 'Configure the donation mod.',
	'L_CURRENCY_CONFIGURATION_TITLE'		=> 'Set the donation settings',
	'L_CURRENCY_GENERAL_SETTINGS'			=> 'Currencies Settings',
	'L_DONATE_CURRENCY'						=> 'Currencies you want to support',
	'L_DONATE_CURRENCY_EXPLAIN'				=> 'Each currency type must end with ";", for example: USD;GBP;EUR; All the supported currency types are listed below for you to setup the exchange rate.',
	'L_DONATE_CURRENCY_PRI'					=> 'Primary currency type',
	'L_DONATE_CURRENCY_PRI_EXPLAIN'			=> 'Must be one of the currency types you entered for field of Currencies you want to support.',
	'L_DONATE_USD_TO_PRI'					=> 'The exchange rate from Primary Curreny to USD<br />eg: 1 Primary Curreny equals how much USD. if not in list, leave it as 0',
	'L_DONATE_EUR_TO_PRI'					=> 'The exchange rate from Primary Curreny to EUR<br />eg: 1 Primary Curreny equals how much EUR. if not in list, leave it as 0',
	'L_DONATE_GBP_TO_PRI'					=> 'The exchange rate from Primary Curreny to GBP<br />eg: 1 Primary Curreny equals how much GBP. if not in list, leave it as 0',
	'L_DONATE_CAD_TO_PRI'					=> 'The exchange rate from Primary Curreny to CAD<br />eg: 1 Primary Curreny equals how much CAD. if not in list, leave it as 0',
	'L_DONATE_JPY_TO_PRI'					=> 'The exchange rate from Primary Curreny to JPY<br />eg: 1 Primary Curreny equals how much JPY. if not in list, leave it as 0',
	'L_DONATE_AUD_TO_PRI'					=> 'The exchange rate from Primary Curreny to AUD<br />eg: 1 Primary Curreny equals how much AUD. if not in list, leave it as 0',
	'L_DONATE_CZK_TO_PRI'					=> 'The exchange rate from Primary Curreny to CZK<br />eg: 1 Primary Curreny equals how much CZK. if not in list, leave it as 0',
	'L_DONATE_DKK_TO_PRI'					=> 'The exchange rate from Primary Curreny to DKK<br />eg: 1 Primary Curreny equals how much DKK. if not in list, leave it as 0',
	'L_DONATE_HKD_TO_PRI'					=> 'The exchange rate from Primary Curreny to HKD<br />eg: 1 Primary Curreny equals how much HKD. if not in list, leave it as 0',
	'L_DONATE_HUF_TO_PRI'					=> 'The exchange rate from Primary Curreny to HUF<br />eg: 1 Primary Curreny equals how much HUF. if not in list, leave it as 0',
	'L_DONATE_NZD_TO_PRI'					=> 'The exchange rate from Primary Curreny to NZD<br />eg: 1 Primary Curreny equals how much NZD. if not in list, leave it as 0',
	'L_DONATE_NOK_TO_PRI'					=> 'The exchange rate from Primary Curreny to NOK<br />eg: 1 Primary Curreny equals how much NOK. if not in list, leave it as 0',
	'L_DONATE_PLN_TO_PRI'					=> 'The exchange rate from Primary Curreny to PLN<br />eg: 1 Primary Curreny equals how much PLN. if not in list, leave it as 0',
	'L_DONATE_SGD_TO_PRI'					=> 'The exchange rate from Primary Curreny to SGD<br />eg: 1 Primary Curreny equals how much SGD. if not in list, leave it as 0',
	'L_DONATE_SEK_TO_PRI'					=> 'The exchange rate from Primary Curreny to SEK<br />eg: 1 Primary Curreny equals how much SEK. if not in list, leave it as 0',
	'L_DONATE_CHF_TO_PRI'					=> 'The exchange rate from Primary Curreny to CHF<br />eg: 1 Primary Curreny equals how much CHF. if not in list, leave it as 0',
	'L_SUBMIT'								=> 'Submit',
	'L_RESET'								=> 'Reset',
	'Currency_information_updated'			=> 'update currency information successfully!',
	'Click_return_update_currencies'		=> 'Click %sHere%s to update currency information.',
	'update_currency_info_error'			=> 'Failed to update currency settings for %s',
	'ANONYMOUS_DONOR'						=> 'Anonymous',
	'MORE_DONORS'							=> 'View All Donors',
	'CURRENT_DONORS'						=> 'View All Current Donors',
	'L_LAST_DONORS'							=> 'Last %s Donors',
	'L_TOP_DONORS_TITLE'					=> 'Top %s Donors',
	'L_DONORS_NAME'							=> 'Donor\'s Name and Rank',
	'DONORS_DISPLAY_FROM'					=> 'Display donors for last: ',
	'NO_DONORS_YET'							=> 'We have no donors yet.',
	'WE_HAVE_COLLECT'						=> '  We have collected $<b>%.2f</b> so far, out of our goal of  $<b>%s</b>.  ',
	'WANT_ANONYMOUS'						=> 'Check here to make your donation Anonymously. <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leave the box unchecked to show your Board Username with your donation.',
	'L_DONATE_WAY'							=> 'Donor Status: ',
	'DONATE_METHOD_EXPLAIN'					=> 'Please select the donation method as one time donation or recurring donations.',
	'L_DONATE_METHOD'						=> 'Donation Method: ',
	'One_time_donation'						=> 'One time donation',
	'Recurring_one_week'					=> 'Recurring donation - every Week',
	'Recurring_one_month'					=> 'Recurring donation - every Month',
	'Recurring_three_month'					=> 'Recurring donation - every Quarter',
	'Recurring_six_month'					=> 'Recurring donation - half a Year',
	'Recurring_one_year'					=> 'Recurring donation - every Year',
	'Please_note_you_choose'				=> 'Please note that you have choosen: ',
	'DONATION_TO_POINTS'					=> 'Thanks for your donation! In return, we will gladly to increase your total points by %d. Please click the button below and complete this transaction with PayPal. Otherwise your donation cannot be finalized.',
	'DONATION_TO_WHO'						=> 'Donate to %s , Thanks!',
	'DONATE_TITLE'							=> 'Donation',
	'AMOUNT_TO_DONATE'						=> 'Amount to donate: ',
	'AMOUNT_TO_DONATE_EXPLAIN'				=> '<p>' . $config['sitename'] . ' is a formation suplying services with no intention of any revenue.<p/> <p>Creating, maintaining and updating the ' . $config['sitename'] . ' project required/requires a lot of time and effort. Anyone who wants to support this formation can do it by contributing to help defray costs of server, the domain and etc. so we are able to keep this site on-line for the benefit of the project and our users.<p/> The ' . $config['sitename'] . ' project does not "sell" any product, software, service, or reward. Please note that donating means that you are supporting the ' . $config['sitename'] . ' project with a gift. <p>After filling in form fields below, you can go on by clicking on the "GO" button. We only do accept PayPal transactions.</p> <p> Note: before proceeding read our <a href="./faq.php?mode=rules#f0r7" title="Donor Info" target="_blank">donor</a> information.',
	'DONATE_CONFIRM_TITLE'					=> 'Confirm Your Donation Amount',
	'ACCT_DONATE_INTO'						=> 'Donate',
	'DONATE_DONE'							=> 'Thank you for your donation. It will be used to bring better service to our valued members.',
	'DONATE_PENDDING'						=> 'Thank you for your donation. It will be used to bring better service to our valued members.',
	'DONATE_DENIED'							=> 'Sorry, your donation was denied for some reason. Please contact the Administrator if you have any questions. Thank you.',
	'DONATE_FAILED'							=> 'Thank you for your generosity, however, the donation seems to have failed. Please try this transaction again later.',
	'ACCT_DONATE_US'						=> 'Donate',
	'CURRENCY_TO_PAY'						=> 'Select a currency: ',
	'CURRENCY_TO_PAY_EXPLAIN'				=> 'Currently we can only accept %s.',
	'PAYMENT_DATA_ERROR'					=> 'The amount or the currency you entered is wrong.',
	'DONATION_TO_POSTS'						=> 'Thanks for your donation! In return, we are glad to add %d posts to your total post count. Please click the button below and complete this transaction with PayPal. Otherwise your donation cannot be finalized.',
	'DONATION_TO_HELP'						=> 'Your help to serve you better!',
	'L_MONEY'								=> 'Money donated',
	'L_DATE'								=> 'Date donated',
	'L_DATE_START'							=> 'Start',
	'L_DATE_END'							=> 'End',
	'L_GO'									=> 'GO!',
	'ALL_RECORDS'							=> 'All Records',
	'NO_RECORDS'							=> 'There is no record.',
	'PAYPAL_ACCT_ERROR'						=> 'The PayPal account has not been setup yet. <br />Please contact our administrator for this error.',
	'PAYPAL_GATEWAY_SETTINGS'				=> 'PayPal Gateway Settings',
	'L_DM_ENABLE_PAYPAL'					=> 'Enable PayPal Gateway',
	'L_DM_ENABLE_PAYPAL_EXPLAIN'			=> 'Determine to enable or disable PayPal gateway to receive donations.',
	'L_CURRENCY_PAYPAL_SUPPORTED'			=> 'Which currency your PayPal supports',
	'L_CURRENCY_PAYPAL_SUPPORTED_EXPLAIN'	=> 'Please enter the currency types that you want to receive via PayPal. Each currency type must end with ";", for example: USD;GBP;EUR;<br />The currency types must belong to the list of currencies you want to support for whole board, which is configured in above "Currencies Settings" section',
	'DONATION_SETTINGS_UPDATE'				=> 'Donation settings are updated successfully!',
	'Click_return_update_dm_settings'		=> 'Click %sHere%s to update donation settings.',
	'CURRENCY_USD'							=> 'U.S. Dollar',
	'CURRENCY_AUD'							=> 'Australian Dollar',
	'CURRENCY_CAD'							=> 'Canadian Dollar',
	'CURRENCY_CZK'							=> 'Czech Koruna',
	'CURRENCY_DKK'							=> 'Danish Krone',
	'CURRENCY_EUR'							=> 'Euro',
	'CURRENCY_HKD'							=> 'Hong Kong Dollar',
	'CURRENCY_HUF'							=> 'Hungarian Forint',
	'CURRENCY_NZD'							=> 'New Zealand Dollar',
	'CURRENCY_NOK'							=> 'Norwegian Krone',
	'CURRENCY_PLN'							=> 'Polish Zloty',
	'CURRENCY_GBP'							=> 'Pound Sterling',
	'CURRENCY_SGD'							=> 'Singapore Dollar',
	'CURRENCY_SEK'							=> 'Swedish Krona',
	'CURRENCY_CHF'							=> 'Swiss Franc',
	'CURRENCY_JPY'							=> 'Japanese Yen',
	
	'Page_of'      							=> 'Page %d of %d',
	'Goto_page'								=> 'Go to page ',
	'ACCT_COMMENT'							=> 'Remarks',
	'Yes'									=> 'Yes',
	'No'									=> 'No',
	
	'DONOR_MEMBERS'							=> 'Donor Members',
	'DONOR_MEMBERS_EXPLAIN' 				=> 'The listed transactions are added via PayPal IPN already.',
	'CHECK_DONORS' 							=> 'Check pending donors',
	'CHECK_DONORS_EXPLAIN' 					=> 'There are listed the transaction that maybe aren\'t added automaticcally via PayPal IPN. Check your PayPal account if you got this donation, if yes confirm here for add to the system.',
	'MONEY' 								=> 'Donation',
	'VALUTA' 								=> 'Currency',
	'DATE' 									=> 'Donation date',
	'TRANSACTION_ID' 						=> 'Transaction ID',
	'OTHER_INFO' 							=> 'Donor\'s e-mail',
	'NO_DONATION_RECORD' 					=> 'No pending donation found',
	'DONATION_ACCEPTED' 					=> 'Donation accepted',
	'DONATION_DELETED' 						=> 'Donation deleted',
	'DONATE_THANKS'							=> 'Thank you all for your generous giving!',
	'DATE_END'							    => 'Donation ends',
	'NULL_DONOR'							=> 'n/a',
	
));

?>