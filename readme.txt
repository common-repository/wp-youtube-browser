=== WP YouTube Browser ===
Contributors: jamijami
Donate link: http://belicza.com/wordpress/wp-youtube-browser/
Tags: youtube, player, video, list, browser, wordpress
Requires at least: 3.0
Tested up to: 3.3
Stable tag: 1.0

A plugin what bring the full YouTube content into your site. You can display searchable video lists on your site, and you can open all videos on your site. 

== Description ==

WP YouTube Browser is a WordPress plugin what display videos and video lists.
You can display all videos and all video lists on your site from the YouTube (playlists, categories, favorites of a user, uploaded videos of a user, searched list by keywords...).
After install you can see the plugin Documentation/Tutorial on admin page of the plugin.
The plugin has two short-codes: [mytube] and [extratube].
[mytube] display the video list by admin options, [extratube] has some extra paramters.

For more info: http://belicza.com/wordpress/wp-youtube-browser/

A few notes about the sections above:

*   Require 3.0 Wordpress minimum

== Installation ==

1. Upload the plugin to your wp-content/plugins directory (or install it via the wordpress interface).
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Create a page at Dashboard > Pages > New page.
4. Paste the [mytube] short-code into the content part of the page.
5. Look that page! YouTube now is on your site.
6. Go to the Dashboard > Plugins > WP YouTube Browser.
7. Read the descriptions and set the extra options.

== Frequently Asked Questions ==

= Where can I find the full Documentation? =

On the page of the plugin: Dashboard > Plugins > WP YouTube Browser.

= What is the difference between the [mytube] and [extratube] short-codes? =

Both codes display the video list. [mytube] code picks up the options from the saved options (you can save on the plugin page), but [extratube] code does not. [extratube] code has extra paramters. You can see the extra paramteres in the plugin Documentation.

= This plugin use some JavaScripta and Ajax. This works without them? =

Yes, it does.

= My playlist does not work. What the hell? =

Hmm. This is a playlist link: http://www.youtube.com/watch?v=nyMkLwSyOVQ&feature=results_main&playnext=1&list=PL63F0C78739B09958. Look the code after the last equal sign: PL63F0C78739B09958. Remove the first two letters (PL) from that code: 63F0C78739B09958. This is what you need. This is the playlist ID.

== Screenshots ==

1. Open video on your site!
2. Search videos on your site!

== Changelog ==

= 1.0 =
* First version: 2011.12.22 14:05 (GMT+1)