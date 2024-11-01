<?php

/*child class for connect to gdata and download feeds*//*child class for connect to gdata and download feeds*/
/*child class for connect to gdata and download feeds*//*child class for connect to gdata and download feeds*/
/*child class for connect to gdata and download feeds*//*child class for connect to gdata and download feeds*/
/*child class for connect to gdata and download feeds*//*child class for connect to gdata and download feeds*/

class youTubeGalleryDownload extends youTubeGallerySettings{
	/*xml of the youtube*/
	private $sxml;
	/*objects in array, video datas in php*/
	protected $the_list;
	/*public video counter*/
	public $i;
	
	/*connect to gdata and download the xml of the video list*//*connect to gdata and download the xml of the video list*/
	/*connect to gdata and download the xml of the video list*//*connect to gdata and download the xml of the video list*/
	/*connect to gdata and download the xml of the video list*//*connect to gdata and download the xml of the video list*/
	/*connect to gdata and download the xml of the video list*//*connect to gdata and download the xml of the video list*/
	
	/*return: no*/
	/*params: $extra var is false or an array with settings parameters from [extratube] shortcode*/
	
	public function __construct($extra = false){
		parent::__construct($extra);
		$this->i;
		$this->sxml = simplexml_load_file($this->callGdata());
		$this->setVideos();
	}
	
	/*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*/
	/*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*/
	/*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*/
	/*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*//*make feed url*/
	
	/*return: url in string*/
	/*params: no*/
	
	private function callGdata(){
		if ($this->type == "keyword"){
			$feed_url = "http://gdata.youtube.com/feeds/api/videos/" . $this->gdataVals();
		}
		elseif ($this->type == "category"){
			$feed_url = "http://gdata.youtube.com/feeds/api/videos/-/" . $this->cat . "/" . $this->gdataVals();
		}
		elseif ($this->type == "uservideo"){
			$feed_url = "http://gdata.youtube.com/feeds/api/users/" . $this->user . "/uploads/" . $this->gdataVals();
		}
		elseif ($this->type == "favorite"){
			$feed_url = "http://gdata.youtube.com/feeds/api/users/" . $this->user . "/favorites/";
			$feed_url .= "?max-results=".$this->max;
			$feed_url .= "&start-index=".$this->pos;
		}
		else{
			$feed_url = "http://gdata.youtube.com/feeds/api/playlists/" . $this->plist . "/";
			$feed_url .= "?max-results=".$this->max;
			$feed_url .= "&start-index=".$this->pos;
		}

		return $feed_url;
	}
	
	/*help to callGdata function*//*help to callGdata function*//*help to callGdata function*//*help to callGdata function*/
	/*help to callGdata function*//*help to callGdata function*//*help to callGdata function*//*help to callGdata function*/
	/*help to callGdata function*//*help to callGdata function*//*help to callGdata function*//*help to callGdata function*/
	/*help to callGdata function*//*help to callGdata function*//*help to callGdata function*//*help to callGdata function*/
	
	/*return: string*/
	/*params: no*/
	
	private function gdataVals(){
		$feed_url;
		if ($this->key != ""){
			$feed_url .= "?vq=".$this->key;
			$feed_url .= "&max-results=".$this->max;
		}
		else{
			$feed_url .= "?max-results=".$this->max;
		}
		$feed_url .= "&start-index=".$this->pos;
		
		return $feed_url;
	}
	
	/*order the datas by xml scheme of the yahoo*//*order the datas by xml scheme of the yahoo*//*order the datas by xml scheme of the yahoo*/
	/*order the datas by xml scheme of the yahoo*//*order the datas by xml scheme of the yahoo*//*order the datas by xml scheme of the yahoo*/
	/*order the datas by xml scheme of the yahoo*//*order the datas by xml scheme of the yahoo*//*order the datas by xml scheme of the yahoo*/
	/*order the datas by xml scheme of the yahoo*//*order the datas by xml scheme of the yahoo*//*order the datas by xml scheme of the yahoo*/
	
	/*return: no*/
	/*params: no*/
	
	private function setVideos(){
		foreach ($this->sxml->entry as $entry){
			// get nodes in media: namespace for media information
			$media = $entry->children('http://search.yahoo.com/mrss/');

			// get video player URL
			$attrs = $media->group->player->attributes();
			$watch = $attrs['url']; 

			// get video thumbnail
			$attrs = $media->group->thumbnail[0]->attributes();
			$thumbnail = $attrs['url']; 
			
			//id
			$id = explode('=',$watch);
			$id = explode('&',$id[1]);
			
			$this->the_list[$this->i] = new stdClass();
			
			$this->the_list[$this->i]->id = $id[0];
			$this->the_list[$this->i]->link = $watch;
			$this->the_list[$this->i]->title = $media->group->title;
			$this->the_list[$this->i]->description = $media->group->description;
			$this->the_list[$this->i]->image = $thumbnail;
			$this->the_list[$this->i]->author = $entry->author->name;
			
			$this->i++;
		}
	}
}
?>