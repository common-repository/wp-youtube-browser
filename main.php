<?php
/*
Plugin Name: WP YouTube Browser
Version: 1.0
Plugin URI: http://belicza.com/wordpress/wp-youtube-browser/
Description: This plugin make a YouTube video browser on your webpage. You can search and watch all video on Your site! You can create custom playlists from channels, favorites... No API keys, easy and clear. By belicza.com
Author: David Belicza
Author URI: http://belicza.com/
Text Domain: wp-youtube-browser
*/

/*-------------------------------------------------------------------------------------------------------------------------------------------*/

/*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*/
/*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*/
/*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*/
/*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*//*constants*/

define('WPYTB', 'wp-youtube-browser');
define('LONGURL', ABSPATH . 'wp-content/plugins/' . WPYTB . '/');

/*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*/
/*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*/
/*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*/
/*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*//*plugin options*/

/*global plugin options*/

$wpytb_options = null;

/*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*/
/*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*/
/*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*/
/*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*/

/*public class*/
/*string check*/
require(LONGURL . 'classes/wpytbdatavalidator.php');

/*public class*/
/*download, upload options*/
require(LONGURL . 'classes/wpytbloadoptions.php');

/*parent class*/
/*set-get the plugin options*/
require(LONGURL . 'classes/youtubegallerysettings.php');

/*child class*/
/*pager maker*/
require(LONGURL . 'classes/youtubegallerypagenation.php');

/*child class*/
/*connect to the gdata youtube library*/
require(LONGURL . 'classes/youtubegallerydownload.php');

/*child class*/
/*main class*/
require(LONGURL . 'classes/youtubegalleryinterface.php');

/*public functions*/
/*HTML forms for easy edit*/
require(LONGURL . 'interface.php');

/*start methods*/
/*the two short-codes*/
require(LONGURL . 'shortcodes.php');

/*main admin file*/
require(LONGURL . 'admin/main.php');

/*javascript and css*//*javascript and css*//*javascript and css*//*javascript and css*//*javascript and css*//*javascript and css*/
/*javascript and css*//*javascript and css*//*javascript and css*//*javascript and css*//*javascript and css*//*javascript and css*/
/*javascript and css*//*javascript and css*//*javascript and css*//*javascript and css*//*javascript and css*//*javascript and css*/
/*javascript and css*//*javascript and css*//*javascript and css*//*javascript and css*//*javascript and css*//*javascript and css*/

/*register javascripts and style*/
add_action('init', 'wpytb_include_scripts_and_css');

function wpytb_include_scripts_and_css(){
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-effects-animate', plugins_url('/jquery-animation/jquery-effect-animation.min.js', __FILE__), false, '1.8.16');
	wp_enqueue_script('wpytb-events', plugins_url('/events-and-andimations.js', __FILE__), false, '1.0');
	wp_enqueue_style('wpytb-style', plugins_url('/style.css', __FILE__), false, '1.0');
}

/*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*/
/*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*/
/*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*/
/*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*//*ajax method*/

/*kill the open youtube method, just play video on your side*/
function wpytb_ajax(){
	?><script type="text/javascript">
		jQuery(document).ready(function(){			
			jQuery('.you_tube_click').click(function (){
				var video_id = jQuery(this).attr('id');
				
				jQuery.get('<?php echo plugins_url('/window.php', __FILE__) ?>', { embed_wpytb: video_id }, function(yt_frame) {
					wpytb_open_all();
					setTimeout(function() {jQuery("#youtube_window").html(yt_frame)}, 700);
				});
			});
		});
	</script><?php
}
?>