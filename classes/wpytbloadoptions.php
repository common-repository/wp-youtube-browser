<?php

/*public class for upload and download methods from wp database*//*public class for upload and download methods from wp database*/
/*public class for upload and download methods from wp database*//*public class for upload and download methods from wp database*/
/*public class for upload and download methods from wp database*//*public class for upload and download methods from wp database*/
/*public class for upload and download methods from wp database*//*public class for upload and download methods from wp database*/

class wpytbLoadOptions{
	
	/*install or boot*//*install or boot*//*install or boot*//*install or boot*//*install or boot*//*install or boot*//*install or boot*/
	/*install or boot*//*install or boot*//*install or boot*//*install or boot*//*install or boot*//*install or boot*//*install or boot*/
	/*install or boot*//*install or boot*//*install or boot*//*install or boot*//*install or boot*//*install or boot*//*install or boot*/
	/*install or boot*//*install or boot*//*install or boot*//*install or boot*//*install or boot*//*install or boot*//*install or boot*/
	
	/*return: no*/
	/*params: no*/
	
	public function checkIn(){
		global $wpytb_options;
		$wpytb_options = wpytbLoadOptions::loadIn();
		if ($wpytb_options['pos'] != 1){
			wpytbLoadOptions::install();
			$wpytb_options = wpytbLoadOptions::loadIn();
		}
	}
	
	/*options boot*//*options boot*//*options boot*//*options boot*//*options boot*//*options boot*//*options boot*//*options boot*/
	/*options boot*//*options boot*//*options boot*//*options boot*//*options boot*//*options boot*//*options boot*//*options boot*/
	/*options boot*//*options boot*//*options boot*//*options boot*//*options boot*//*options boot*//*options boot*//*options boot*/
	/*options boot*//*options boot*//*options boot*//*options boot*//*options boot*//*options boot*//*options boot*//*options boot*/
	
	/*return: a string from the wp_options table converted into a php array*/
	/*params: no*/
	
	public function loadIn(){
		return get_option('wp_youtube_browser_settings');
	}
	
	/*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*/
	/*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*/
	/*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*/
	/*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*//*instal*/
	
	/*return: no*/
	/*params: no*/
	
	public function install(){
		$options = array(
			'type' => 'keyword',
			'max' => '10',
			'key' => '',
			'cat' => '',
			'user' => '',
			'plist' => '',
			'search' => 'yes',
			'pager' => 'yes',
			'pos' => '1'
		);
		update_option('wp_youtube_browser_settings', $options);
	}
	
	/*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*/
	/*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*/
	/*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*/
	/*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*//*update*/
	
	/*return: no*/
	/*params: no*/
	
	public function saveOut(){
		global $wpytb_options;
		$wpytb_options = array(
			'type' => $_POST['type'],
			'max' => wpytbDataValidator::iWantToBeNumber($_POST['max'],'0-9',10,20,1),
			'key' => $_POST['key'],
			'cat' => $_POST['cat'],
			'user' => $_POST['user'],
			'plist' => $_POST['plist'],
			'search' => $_POST['search'],
			'pager' => $_POST['pager'],
			'pos' => '1'
		);
		update_option('wp_youtube_browser_settings', $wpytb_options);
	}
}
?>