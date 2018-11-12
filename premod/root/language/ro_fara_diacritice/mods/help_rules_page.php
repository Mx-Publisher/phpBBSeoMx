<?php
/**
*
* en/mods/help_rules_page
*
* Built with the FAQ Manager addon by EXreaction
* http://www.lithiumstudios.org/phpBB3/viewtopic.php?f=31&t=464
*
* @name help_rules_page.php [English]
* @package phpBB3 Portal XL 5.0
* @version $Id: help_rules_page.php,v 1.1.1.1 2009/05/15 05:14:08 portalxl group Exp $
*
* @copyright (c) 2007, 2009  Portal XL Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
global $config, $user;

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

$help = array(
	array(
		0 => '--',
		1 => 'Forum Rules [English]'
	),
	array(
		0 => 'First Steps (Netiquette)',
		1 => '<ol>
<li>Read the forums rules and guidelines before posting for the first time.</li>
<li>Search the other posts to see if your topic is already covered.</li>
<li>Use a meaningful title for your thread.</li>
<li>Do not use a forum to promote your product, service or business.</li>
<li>Be civil. Personal differences should be handled through email or IM and not through posts displayed to everyone.</li>
<li>Stay on topic.</li>
<li>Ignore spammers, respond to them personally and not through the board, or report them.</li>
<li>Do not submit a post that requires readers to download a large attachment. Either explain the attachment or, better yet, provide a link to the information.</li>
<li>Use plain text over HTML if you want your post to be readable by everyone.</li>
<li>In order to be understood by most people, use correct spelling, grammar and avoid slang unless you know the word or phrase will be understood by other members.</li>
<li>Do not double post (post the same message twice in one thread) or cross post (place the same message across several forums).</li>
<li>Act in a give and take manner; help others as often as or more than you ask for help.</li>
<li>Do not use all caps or SHOUT in your posts. In addition, one exclamation point is enough.</li>
<li>When replying to a post, do not quote more from the previous post than you have to.</li>
<li>Do not post new problems on someone else\'s thread and interrupt a topic of discussion.</li>
<li>Do not use someone else’s thread for a private conversation.</li>
<li>Most forums prohibit warez, cracks or illegal downloading of software and similar topics.</li>
<li>Watch your sense of humor, posts may be read by people from a variety of backgrounds and ages.</li>
<li>Do not use a huge and annoying signature, a modest signature is fine, moderators may remove large ones anyway.</li>
<li>Do not post any information that you want private. Posts should not contain personal, identifiable information or content embarrassing to others.</li>
<li>Do not post content that violates a copyright.</li>
<li>Do not post ”empty” or useless responses, such as just ”lol” or ”cool.” Only post responses when you have something to contribute.</li>
<li>Write concisely and do not ramble.</li>
<li>Do not use words like ”urgent” or ”important” in your subject line, be patient.</li>
<li>Do not chastise newbies.</li>
</ol>'
	),
	array(
		0 => 'What Do We Expect From You As Forum-User?',
		1 => '<p>
<ul>    
    <li>Mutual respect betwen all forum-users. This means you won\'t ever start a discussion with someone else while making advantage of someone else\'s behaviour, possible physical or mental handicaps, race or gender. Do not actively react to personal remarks by others and refrain from posting stuff others might find offensive.</li>
    <li>Spend your first 10 minutes exploring the forums without posting anything. Get to know the structure of the forums and explore the search-option and the private messages. If existing topics and the search-option cannot help you, please feel free to post a new topic with a clear description (to state what you want to ask/say, not something like "HEEEELLLPPP! WTF!!! CRAP-WINDOWS!!!").</li>
    <li>If you\'re gonna post an answer in topics where someone is asking something, please make sure you\'re answer is really helping and useful. No one is waiting for an answer like "OMFG, N00B" when the question is asked how to configure a firewall.</li>
</ul>
</p>'
	),
	array(
		0 => 'What Other Rules Do We Have?',
		1 => '<p>
<ul>    
    <li>You\'re not allowed to spam the forums with (paid or unpaid) adverts, job-applications, chain-mails, useless topics or certain internet-sites.</li>
    <li>You\'re not allowed to post images or text that are copyrighted without mentioning the source and/or author.</li>
    <li>You\'re not allowed to offer (or ask for) illegale software or other ways to circumvent, copy, distribute of alter copyrighted materials. When we find out about this (either in a topic or using private messaging), you will be immediately kicked of the forum.</li>
    <li>You\'re not allowed to post other discriminating, threatening, sexually explicit, shocking or calumniating messages or images.</li>
    <li>You\'re not allowed to post adverts, discriminating, threatening, sexually explicit, shocking or calumniating messages, .special codes text or images in your sig.</li>
    <li>You\'re not allowed to post personal information (name, address, phone-number, etc...) regardless of yourself or others.</li>
    <li>You\'re not allowed to have multiple accounts; every account after your first one will be shut down immediately.</li>
</ul>
</p>'
	),
	array(
		0 => 'What To Expect When Violating These Rules?',
		1 => '<br />
<p>If you\'re unable to obey the rules, moderators, super moderators and even the owners of forum might come into action:</p>
<p>
<ul>    
    <li>Messages can be adjusted, leaving a very short description of the violation/reason.</li>
    <li>Messages can be removed; this will usually happen if we think it\'s 100% in violation of the rules.</li>
    <li>You can expect private messages from the moderators; please put in your profile that you want to receive private messages. If we cannot send you a message, your account will be locked for a pre-determined period.</li>
    <li>After several warnings, we possible will discuss your future presence on this forum in a private sub-forum.</li>
</ul>
</p>'
	),
	array(
		0 => 'Other Announcements',
		1 => '<p>
<ul>    
    <li>The forum must be used to get/give support between forum administrator and users. Even after posting here, the moderators have the possibility to remove your question without notice if no answer is given.</li>
    <li>Private message through administrators and or moderators about support will not be answered.</li>
</ul>
</p>'
	),
	array(
		0 => 'Privacy Statement',
		1 => '<br />
<p>Using the forum-software, specific data will be collected on the visitors by so called cookies. These data will automatically become property of forum administration but will not be sold or distributed to other parties without written concensus of the forum-users. Where possible, we will use these data to adjust the forum to match specific user-preferences. And, if needed, these data will also be used to ban you from the forum (and in the worst case scenario, from all servers and sites under main administartor\'s control).</p>
<p>If you disagree with the privacy-statement, please send a mail using the form on the contact page  stating you disagree and you do not want to use your account anymore. We will remove it from the user-database.</p>
<p>The main administration (with or without discussion with the moderators) is allowed to change all forum-rules without any prior public announcement. Reading and understanding the rules are the sole responsibility of the forum-users; enforcing the rules and acting when needed, will be done by administartor or by persons appointed by the main administartor.</p>'
	),
	array(
		0 => 'Posting/Message Support Rules',
		1 => '<p>
<ul>    
    <li>Support questions go into the appropriate forum.</li>
    <li>One question per topic! Start a NEW topic for every question you have.</li>
    <li>If applicable fill in the Support Ticket system providing version numbers of mysql, php, server software and the Operating System in use!</li>
    <li>Provide a link to your forum please so we can have a look on your problem (spam is not allowed)!</li>
    <li>Eager indicate which of Portal\'s version you use eg. PLAIN or PREMOD.</li>
    <li>Use a descriptive topic, no huh, ha, boo etc.! Such topics will not be answered any more.</li>
    <li>Place <strong>[SOLVED]</strong> before your topic if your problem where fixed please.</li>
</ul>
<p><strong>Language Translations addition:</strong></p>
<ul>    
	<li>Support for each language is located in it\'s own forum.</li>
    <li>Translators supporting their own translation.</li>
    <li>In existing language announcements reply to that topic to get your issue answered.</li> 
    <li>Attach any translation saved with the recommended file name <strong>Portal_XL50_Plain_language_<em>en</em>.zip</strong> where <strong style="color:#F00;">en</strong> is your language code into the appropriate forum. Recommended file name for the Premod version <strong>Portal_XL50_Premod_language_<em>en</em>.zip</strong>.</li> 
</ul>
<p><strong>Styles and Graphics addition:</strong></p>
<ul>    
    <li>Support for each style is located in it\'s own forum.</li>
    <li>Designers supporting their own styles and graphics.</li>
    <li>In existing style announcements reply to that topic to get your issue answered.</li> 
    <li>Attach any style saved with the recommended file name <strong>Portal_XL50_PLAIN_style_<em>name</em>.zip</strong> where <strong style="color:#F00;">name</strong> is the style name into the appropriate forum. Recommended file name for the Premod version <strong>Portal_XL50_PREMOD_style_<em>name</em>.zip</strong>.</li> 
</ul>
</p>'
	),
);

?>