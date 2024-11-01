<?php

/*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*/
/*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*/
/*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*/
/*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*//*main class*/

class youTubeGalleryInterface extends youTubeGalleryDownload{
	
	/*start methods*//*start methods*//*start methods*//*start methods*//*start methods*//*start methods*//*start methods*//*start methods*/
	/*start methods*//*start methods*//*start methods*//*start methods*//*start methods*//*start methods*//*start methods*//*start methods*/
	/*start methods*//*start methods*//*start methods*//*start methods*//*start methods*//*start methods*//*start methods*//*start methods*/
	/*start methods*//*start methods*//*start methods*//*start methods*//*start methods*//*start methods*//*start methods*//*start methods*/
	
	/*return: no*/
	/*params: $extra var is false or an array with settings parameters from [extratube] shortcode*/
	
	public function __construct($extra = false){
		parent::__construct($extra);
	}
	
	/*video listing*//*video listing*//*video listing*//*video listing*//*video listing*//*video listing*//*video listing*//*video listing*/
	/*video listing*//*video listing*//*video listing*//*video listing*//*video listing*//*video listing*//*video listing*//*video listing*/
	/*video listing*//*video listing*//*video listing*//*video listing*//*video listing*//*video listing*//*video listing*//*video listing*/
	/*video listing*//*video listing*//*video listing*//*video listing*//*video listing*//*video listing*//*video listing*//*video listing*/
	
	/*return: wpytb_youTube will echo the videos*/
	/*params: no*/
	
	public function getVideos(){
		if ($this->i == 0){
			wpytb_noMoreVideos();
		}
		else{
			foreach ($this->the_list as $video){
				wpytb_youTube($video);
			}
		}
	}
}
?>