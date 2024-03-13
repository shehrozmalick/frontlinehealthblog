<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

// This file was the current value of auto_prepend_file during the Wordfence WAF installation (Thu, 22 Feb 2024 02:02:56 +0000)
if (file_exists('/var/www/html/frontlineblog/wordfence-waf.php')) {
	include_once '/var/www/html/frontlineblog/wordfence-waf.php';
}
if (file_exists(__DIR__.'/wp-content/plugins/wordfence-old/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", __DIR__.'/wp-content/wflogs/');
	include_once __DIR__.'/wp-content/plugins/wordfence-old/waf/bootstrap.php';
}