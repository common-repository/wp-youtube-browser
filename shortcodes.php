<?php

/*registrate short-codes*//*registrate short-codes*//*registrate short-codes*//*registrate short-codes*//*registrate short-codes*/ 
/*registrate short-codes*//*registrate short-codes*//*registrate short-codes*//*registrate short-codes*//*registrate short-codes*/ 
/*registrate short-codes*//*registrate short-codes*//*registrate short-codes*//*registrate short-codes*//*registrate short-codes*/ 
/*registrate short-codes*//*registrate short-codes*//*registrate short-codes*//*registrate short-codes*//*registrate short-codes*/
 
add_shortcode('mytube', 'wpytb_browser_shortcode');
add_shortcode('extratube', 'wpytb_browser_extra_shortcode');

/*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*/
/*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*/
/*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*/
/*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*//*[mytube] short-code*/

function wpytb_browser_shortcode(){	
	$youtube = new youTubeGalleryInterface();
	
	/*search form*/
	if ($youtube->getType() != "playlist" && $youtube->getType() != "favorite" && $youtube->allowSearch() == "yes"){
		wpytb_search();
	}
	
	/*video list*/
	$youtube->getVideos();
	
	/*pager*/
	$pagerbar = new youTubeGalleryPagenation(false, $youtube->i);
	echo $pagerbar->getPagenation();
	
	/*big x for close*/
	wpytb_close_window();
	
	/*open video*/
	wpytb_ajax();
}

/*[extratube...] short-code*//*[extratube...] short-code*//*[extratube...] short-code*//*[extratube...] short-code*//*[extratube...] short-code*/
/*[extratube...] short-code*//*[extratube...] short-code*//*[extratube...] short-code*//*[extratube...] short-code*//*[extratube...] short-code*/
/*[extratube...] short-code*//*[extratube...] short-code*//*[extratube...] short-code*//*[extratube...] short-code*//*[extratube...] short-code*/
/*[extratube...] short-code*//*[extratube...] short-code*//*[extratube...] short-code*//*[extratube...] short-code*//*[extratube...] short-code*/

function wpytb_browser_extra_shortcode($atts) {
	extract( shortcode_atts( array(
		'type' => 'keyword',
		'itemcount' => '10',
		'key' => '',
		'category' => '',
		'user' => '',
		'playlist' => '',
		'search' => 'yes',
		'pager' => 'yes',
	), $atts ) );

	$settings = array(
		'type' => $type,
		'max' => $itemcount,
		'key' => $key,
		'cat' => $category,
		'user' => $user,
		'plist' => $playlist,
		'search' => $search,
		'pager' => $pager
	);
	
	/*search form*/
	if ($type != "playlist" && $type != "favorite" && $search == "yes"){
		wpytb_search();
	}
	
	/*video list*/
	$youtube = new youTubeGalleryInterface($settings);
	$youtube->getVideos();
	
	/*pager*/
	$pagerbar = new youTubeGalleryPagenation($settings, $youtube->i);
	echo $pagerbar->getPagenation();
	
	/*big x for close*/
	wpytb_close_window();
	
	/*open video*/
	wpytb_ajax();
}

/*big x for close*//*big x for close*//*big x for close*//*big x for close*//*big x for close*//*big x for close*//*big x for close*/
/*big x for close*//*big x for close*//*big x for close*//*big x for close*//*big x for close*//*big x for close*//*big x for close*/
/*big x for close*//*big x for close*//*big x for close*//*big x for close*//*big x for close*//*big x for close*//*big x for close*/
/*big x for close*//*big x for close*//*big x for close*//*big x for close*//*big x for close*//*big x for close*//*big x for close*/

function wpytb_close_window(){
	?><div id="youtube_window_close"></div>
	<div id="youtube_window"></div><?php
}
?>