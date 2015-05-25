<?php
	/**
	 * @package Strip_Leading_Zeroes
	 * @version .1
	 */
	/*
	Plugin Name: Strip Leading Zeroes in Permalinks
	Plugin URI: http://matthewbusche.com/
	Description: This plugin allows you to have a permalink structure with single digit months and days. Useful when converting from other blog software.
	Author: Matt Busche
	Version: .1
	Author URI: http://matthewbusche.com/
	*/

	add_filter('the_permalink', 'stripLeadingZeroes');

	function stripLeadingZeroes($url) {
		return str_replace('/0', '/', $url);
	}
?>