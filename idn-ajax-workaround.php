<?php
/*
Plugin Name: IDN AJAX Workaround
Version: 0.2-trunk
Plugin URI: http://core.trac.wordpress.org/ticket/18952
Description: Fixes AJAX requests on sites with IDN domains in IE and Opera.
Author: Sergey Biryukov
Author URI: http://profiles.wordpress.org/sergeybiryukov/
*/

function iaw_replace_domain($url) {
	if ( false !== strpos( $url, 'admin-ajax.php' ) )
		$url = preg_replace( '#^http(s)?://[^/]*#', '', $url );
	return $url;
}
add_filter('admin_url', 'iaw_replace_domain');
?>