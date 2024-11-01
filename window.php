<?php

/*called in ajax method*//*called in ajax method*//*called in ajax method*//*called in ajax method*//*called in ajax method*/
/*called in ajax method*//*called in ajax method*//*called in ajax method*//*called in ajax method*//*called in ajax method*/
/*called in ajax method*//*called in ajax method*//*called in ajax method*//*called in ajax method*//*called in ajax method*/
/*called in ajax method*//*called in ajax method*//*called in ajax method*//*called in ajax method*//*called in ajax method*/

if (!isset($_GET['embed_wpytb'])) die;

class youTubeWindow{
	private $embed_url;
	
	public function __construct($embed_url = ""){
		$this->embed_url = $embed_url;
	}
	
	public function getWindow(){
		echo '<iframe width="560" height="315" src="http://www.youtube.com/embed/' . $this->embed_url . '" frameborder="0" allowfullscreen>
			</iframe>';
	}
}

$ytw = new youTubeWindow($_GET['embed_wpytb']);
$ytw->getWindow();
?>