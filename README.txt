=== Plugin Name ===
Contributors: stephencaosemene
Donate link: http://stephenafamo.com
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.5.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This allows users to maintain a single shopping cart across all subsites in a multisite install.

== Description ==

This allows users to maintain a single shopping cart across all subsites in a multisite install.
When users are shopping on a subsite, their cart will show all products added across the multisite.

A few notes about the sections above:

*   This plugin is meant to work only with a multisite installation.
*   Checkout will be made through a single poin on the main site. Therefore, if you intend to have different payment gateways on each subsite, this will not work.

== Installation ==

1. Upload `woocommerce-global-cart.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= What about shipping and taxes? =

Shipping and taxes will be calculated with the settings on each subsite and the total will be shown on the main site.

= What about coupons? =

Coupons (either by product or cart) will be created on each subsite. 
The coupons will be added to each sub cart on the global cart page.

== Changelog ==

= 0.1 =
* First release
