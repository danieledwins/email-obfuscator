<?php
/*
Plugin Name: Email Obfuscator
Plugin URI: http://neuger.com/
Description: Encodes all email addresses in the body content using the antispambot() function.
Version: 1.0
Author: Daniel Edwins
Author URI: http://neuger.com/
*/

add_filter('the_content', 'the_content_email_filter');

function the_content_email_filter($content) {
	return preg_replace("/\b([A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4})\b/ie", "antispambot('$1')", $content);
}