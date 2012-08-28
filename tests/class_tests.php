<?php
/**
*
* @package phpbb_seo_testing
* @copyright (c) 2006 - 2012 www.phpbb-seo.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License v2
*
*/

class class_tests extends PHPUnit_Framework_TestCase
{
	function drop_sid_test()
	{
		global $phpbb_seo;

		$url_no_sid = 'http://www.phpbb-seo.com/en/site/phpbb-seo-rules-t7.html';
		$sid = '?sid=TheSidIsHere';

		$this->assertEquals($url_no_sid, $phpbb_seo->drop_sid($url_no_sid . $sid));
	}
}