=== Rearrange Woocommerce Products ===
Contributors: aslamdoctor
Donate link: http://paypal.me/aslamdoctor
Tags: woocommerce, ecommerce, product, reorder, sort
Requires at least: 3.2
Tested up to: 5.2.3
Stable tag: 4.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Allows you to Rearrange Woocommerce Products listed on the Shop page.

== Description ==

Rearrange Woocommerce Products is a plugin that allows you to rearrange/reorder the default sort order of the products on Woocommerce Shop Page. This is very easy to use plugin with "drag & drop" functionality to rearrange the products.

To use this plugin, please make sure that Woocommerce is installed and Activated.

== Important Notes ==

1. If you are using any page builder plugin to display Products, this plugin may not work.
2. Products rearranging can not be undone after deactivating or deleting the plugin.
3. If the product is assigned to multiple categories, then it will use the sort order from last assigned category.

== Installation ==

1. Go to your admin area and select Plugins -> Add new from the menu.
2. Search for "Rearrange Woocommerce Products".
3. Click install.
4. Click activate. If woocommrce is not installed or activated then this plugin will also not activate.
5. Go to Wordpress "Admin > Products > Rearrange Products" and use drag-and-drop functionality to arrange your products.
6. Click on "Group by Categories" tab to arrange product by Category groups.

== Frequently Asked Questions ==

= How do I use this plugin? =

Go to Wordpress "Admin > Products > Rearrange Products" and use drag-and-drop functionality to arrange your products.
Click on "Group by Categories" tab to arrange product by Category groups.

= Can I undo the changes I have made after deactivating or deleting the plugin? =

No, You can not undo the changes after deactivating or deleting the plugin. As it directly updates the "menu_order" property of the products.

== Screenshots ==

1. The plugin at work reordering all products
2. You can view product info from same page
3. Products grouped by Categories for reordering

== ChangeLog ==

= Version 2.1.1 =

* Added shortcut button to edit products
* Tested for Woocommerce Version 3.7.0 and Wordpress Version 5.2.3

= Version 2.0.0 =

* Added feature to group products by categories
* Added feature to preview product info from same page
* Added some minor bug fixes
* Tested for latest Woocommerce version 3.6.3

= Version 1.1.1 =

* Added fix as the plugin was not working for some people. As it was using static table prefix "wp_". So changed it to dynamic table prefix to work will all kind of WP Databases.
* Tested for latest Woocommerce version 3.5.3

= Version 1.1.0 =

* Added capability to handle huge amount of products.     
* Combined multiple sql update queries into one query.

= Version 1.0.0 =

* Initial release.
