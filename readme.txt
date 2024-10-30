=== IDN AJAX Workaround ===
Contributors: SergeyBiryukov
Tags: i18n, IDN, AJAX
Requires at least: 3.2
Tested up to: 3.3
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Fixes AJAX requests on sites with IDN domains in IE and Opera.

== Description ==

In jQuery 1.5+ (bundled with WordPress 3.2+), AJAX requests on sites with IDN domains don't work in IE or Opera.

On Edit Post screen, adding a new category results in JS error:
`
Message: 'parsed.responses' - is null or not an object
`

On Categories screen, adding a new category silently fails.

According to [jaubourg's comment](http://bugs.jquery.com/ticket/8419#comment:3) in jQuery bug tracker, the request is considered cross-domain and, since IE doesn't support cross-domain requests, AJAX won't find a suitable transport and bail out.

This plugin implements a workaround suggested there by making AJAX requests relative.

WordPress Trac ticket: [#18952](http://core.trac.wordpress.org/ticket/18952)

== Installation ==

1. Upload `idn-ajax-workaround` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Changelog ==

= 0.1 =
* Initial release
