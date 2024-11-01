<?php

/*parent class for setup main vars*//*parent class for setup main vars*//*parent class for setup main vars*//*parent class for setup main vars*/
/*parent class for setup main vars*//*parent class for setup main vars*//*parent class for setup main vars*//*parent class for setup main vars*/
/*parent class for setup main vars*//*parent class for setup main vars*//*parent class for setup main vars*//*parent class for setup main vars*/
/*parent class for setup main vars*//*parent class for setup main vars*//*parent class for setup main vars*//*parent class for setup main vars*/

class youTubeGallerySettings{
	/*options array from wp_options table*/
	private $options;
	/*keyword from $options*/
	protected $key;
	/*max from $options - video per page*/
	protected $max;
	/*position from $options - first video on page*/
	protected $pos;
	/*type from $options - youtube browser type*/
	protected $type;
	/*category from $options*/
	protected $cat;
	/*username from $options*/
	protected $user;
	/*playlist from $options*/
	protected $plist;
	/*allow search from $options*/
	protected $search;
	/*allow pager from $options*/
	protected $pager;
	
	/*set the main vars*//*set the main vars*//*set the main vars*//*set the main vars*//*set the main vars*//*set the main vars*/
	/*set the main vars*//*set the main vars*//*set the main vars*//*set the main vars*//*set the main vars*//*set the main vars*/
	/*set the main vars*//*set the main vars*//*set the main vars*//*set the main vars*//*set the main vars*//*set the main vars*/
	/*set the main vars*//*set the main vars*//*set the main vars*//*set the main vars*//*set the main vars*//*set the main vars*/
	
	/*return: no*/
	/*params: $extra var is false or array with custom options*/
	
	public function __construct($extra = false){
		/*if there are no custom options in array, load the options from wp_options table*/
		if ($extra == false){
			$this->options = $this->getPluginOptions();
		}
		/*if there are options, use them for make the youtube player*/
		else{
			$this->options = $this->shortcodeSettings($extra);
		}
		/*use $options array to setup the main vars*/
		$this->setPluginOptions();
	}
	
	/*setup from short-code*//*setup from short-code*//*setup from short-code*//*setup from short-code*//*setup from short-code*/
	/*setup from short-code*//*setup from short-code*//*setup from short-code*//*setup from short-code*//*setup from short-code*/
	/*setup from short-code*//*setup from short-code*//*setup from short-code*//*setup from short-code*//*setup from short-code*/
	/*setup from short-code*//*setup from short-code*//*setup from short-code*//*setup from short-code*//*setup from short-code*/
	
	/*return: renamed vars in array*/
	/*params: $extra var is an array from short-code*/
	
	private function shortcodeSettings($extra){
		$options = array(
			'pos' => '1',
			'max' => $extra['max'],
			'key' => $extra['key'],
			'type' => $extra['type'],
			'cat' => $extra['cat'],
			'user' => $extra['user'],
			'plist' => $extra['plist'],
			'search' => $extra['search'],
			'pager' => $extra['pager']
		);
		return $options;
	}
	
	/*load the options from wp_options_table*//*load the options from wp_options_table*//*load the options from wp_options_table*/
	/*load the options from wp_options_table*//*load the options from wp_options_table*//*load the options from wp_options_table*/
	/*load the options from wp_options_table*//*load the options from wp_options_table*//*load the options from wp_options_table*/
	/*load the options from wp_options_table*//*load the options from wp_options_table*//*load the options from wp_options_table*/
	
	/*return: option vars in array*/
	/*params: no*/
	
	private function getPluginOptions(){
		return wpytbLoadOptions::loadIn();
	}
	
	/*use the options vars to setup the current video list*//*use the options vars to setup the current video list*/
	/*use the options vars to setup the current video list*//*use the options vars to setup the current video list*/
	/*use the options vars to setup the current video list*//*use the options vars to setup the current video list*/
	/*use the options vars to setup the current video list*//*use the options vars to setup the current video list*/
	
	/*return: no*/
	/*params: no*/
	
	private function setPluginOptions(){
		$this->key = $this->setKey();
		$this->max = $this->options['max'];
		$this->pos = $this->setPos();
		$this->type = $this->options['type'];
		$this->cat = $this->options['cat'];
		$this->user = $this->options['user'];
		$this->plist = $this->options['plist'];
		$this->search = $this->options['search'];
		$this->pager = $this->options['pager'];
	}
	
	/*use the key from options and from the url to set full key*//*use the key from options and from the url to set full key*/
	/*use the key from options and from the url to set full key*//*use the key from options and from the url to set full key*/
	/*use the key from options and from the url to set full key*//*use the key from options and from the url to set full key*/
	/*use the key from options and from the url to set full key*//*use the key from options and from the url to set full key*/
	
	/*return: keywords in string*/
	/*params: no*/
	
	private function setKey(){
		if (isset($_GET['video']) && $this->options['key'] != ""){
			return $this->options['key'] . "+" . $_GET['video'];
		}
		else{
			if (isset($_GET['video'])){
				return $_GET['video'];
			}
			if ($this->options['key'] != ""){
				return $this->options['key'];
			}
		}
	}
	
	/*setup the id of the video in video list*//*setup the id of the video in video list*//*setup the id of the video in video list*/
	/*setup the id of the video in video list*//*setup the id of the video in video list*//*setup the id of the video in video list*/
	/*setup the id of the video in video list*//*setup the id of the video in video list*//*setup the id of the video in video list*/
	/*setup the id of the video in video list*//*setup the id of the video in video list*//*setup the id of the video in video list*/
	
	/*return: start of the list number in string*/
	/*params: no*/
	
	private function setPos(){
		if (isset($_GET['page'])){
			$_GET['page'] = wpytbDataValidator::iWantToBeNumber($_GET['page'],'0-9',1,9999,1);
			$start = $_GET['page'];
		}
		else{
			$start = $this->options['pos'];
		}
		$start = (($start-1) * $this->options['max']) + 1;
		return $start;
	}
	
	/*get the current listing type*//*get the current listing type*//*get the current listing type*//*get the current listing type*/
	/*get the current listing type*//*get the current listing type*//*get the current listing type*//*get the current listing type*/
	/*get the current listing type*//*get the current listing type*//*get the current listing type*//*get the current listing type*/
	/*get the current listing type*//*get the current listing type*//*get the current listing type*//*get the current listing type*/
	
	/*return: the type in string*/
	/*params: no*/
	
	public function getType(){
		return $this->type;
	}
	
	/*search allowd or not*//*search allowd or not*//*search allowd or not*//*search allowd or not*//*search allowd or not*/
	/*search allowd or not*//*search allowd or not*//*search allowd or not*//*search allowd or not*//*search allowd or not*/
	/*search allowd or not*//*search allowd or not*//*search allowd or not*//*search allowd or not*//*search allowd or not*/
	/*search allowd or not*//*search allowd or not*//*search allowd or not*//*search allowd or not*//*search allowd or not*/
	
	/*return: yes or no in string*/
	/*params: no*/
	
	public function allowSearch(){
		return $this->search;
	}
}
?>