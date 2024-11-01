<?php

/*child class for make a pager*//*child class for make a pager*//*child class for make a pager*//*child class for make a pager*/
/*child class for make a pager*//*child class for make a pager*//*child class for make a pager*//*child class for make a pager*/
/*child class for make a pager*//*child class for make a pager*//*child class for make a pager*//*child class for make a pager*/
/*child class for make a pager*//*child class for make a pager*//*child class for make a pager*//*child class for make a pager*/

class youTubeGalleryPagenation extends youTubeGallerySettings{
	/*the pager in string*/
	private $pagenation_bar;
	/*main permalink by wp*/
	private $current_url;
	/*public video counter*/
	private $i;
	
	/*make the pager*//*make the pager*//*make the pager*//*make the pager*//*make the pager*//*make the pager*//*make the pager*/
	/*make the pager*//*make the pager*//*make the pager*//*make the pager*//*make the pager*//*make the pager*//*make the pager*/
	/*make the pager*//*make the pager*//*make the pager*//*make the pager*//*make the pager*//*make the pager*//*make the pager*/
	/*make the pager*//*make the pager*//*make the pager*//*make the pager*//*make the pager*//*make the pager*//*make the pager*/
	
	/*return: no*/
	/*params: $extra var is false or array, $i var is number of the videos on the current page*/
	
	public function __construct($extra = false, $i = 0){
		parent::__construct($extra);
		$this->i = $i;
		if ($this->pager == "yes"){
			$this->current_url = get_permalink();
			$this->pagenation_bar = $this->setPagenation();
		}
	}
	
	/*next button, prev button*//*next button, prev button*//*next button, prev button*//*next button, prev button*//*next button, prev button*/
	/*next button, prev button*//*next button, prev button*//*next button, prev button*//*next button, prev button*//*next button, prev button*/
	/*next button, prev button*//*next button, prev button*//*next button, prev button*//*next button, prev button*//*next button, prev button*/
	/*next button, prev button*//*next button, prev button*//*next button, prev button*//*next button, prev button*//*next button, prev button*/
	
	/*return: two buttons in string*/
	/*params: no*/
	
	private function setPagenation(){
		$pagenation_bar = "";
		
		if ($this->pos != 1){
			$pagenation_bar = '<span class="ytoutube_pager"><a href="' . $this->current_url . $this->prevPageVal() . $this->filterVal() . '">' . __('Previous', 'wp-youtube-browser') . '</a></span>';
		}
		if ($this->i > 0){
			$pagenation_bar .= '<span class="ytoutube_pager"><a href="' .$this->current_url . $this->nextPageVal() . $this->filterVal() . '">' . __('Next', 'wp-youtube-browser') . '</a><span>';
		}
		return $pagenation_bar;
	}
	
	/*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*/
	/*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*/
	/*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*/
	/*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*/
	
	/*return: page get type var in string*/
	/*params: no*/
	
	private function prevPageVal(){
		$num = $_GET['page'] -1;
		return "?page=".$num;
	}
	
	/*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*/
	/*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*/
	/*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*/
	/*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*//*make page var in url*/
	
	/*return: page get type var in string*/
	/*params: no*/
	
	private function nextPageVal(){
		if (isset($_GET['page'])){
			$num = $_GET['page'] + 1;
			return "?page=".$num;
		}
		else{
			return "?page=2";
		}
	}
	
	/*make video var in url*//*make video var in url*//*make video var in url*//*make video var in url*//*make video var in url*/
	/*make video var in url*//*make video var in url*//*make video var in url*//*make video var in url*//*make video var in url*/
	/*make video var in url*//*make video var in url*//*make video var in url*//*make video var in url*//*make video var in url*/
	/*make video var in url*//*make video var in url*//*make video var in url*//*make video var in url*//*make video var in url*/
	
	/*return: video get type var in string for keywords*/
	/*params: no*/
	
	private function filterVal(){
		if (isset($_GET['video'])){
			$key = "&video=" . $_GET['video'];
			return $key;
		}
	}
	
	/*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*/
	/*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*/
	/*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*/
	/*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*//*get pagerbar*/
	
	/*return: the full pager bar in string*/
	/*params: no*/
	
	public function getPagenation(){
		return '<div id="youtube_pager_bar">' . $this->pagenation_bar . '</div>';
	}
}
?>