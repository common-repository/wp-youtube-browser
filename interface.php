<?php
/*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*/
/*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*/
/*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*/
/*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*//*edit me*/

/*--------------------------------------------------------------------------------------------------------------------------------------------*/

/*the search form in video list*//*the search form in video list*//*the search form in video list*//*the search form in video list*/
/*the search form in video list*//*the search form in video list*//*the search form in video list*//*the search form in video list*/
/*the search form in video list*//*the search form in video list*//*the search form in video list*//*the search form in video list*/
/*the search form in video list*//*the search form in video list*//*the search form in video list*//*the search form in video list*/

function wpytb_search(){
	?>
	
	<div class="search_youtube">
		<form type="get">
			<input type="text" id="video" name="video" value="<?php echo $_GET['video'] ?>" />
			<input type="submit" id="youtube" name="youtube" value="<?php _e('Search') ?>" />
			<?php if (isset($_GET['video'])) { ?><h1><?php echo $_GET['video']; ?></h1><?php } ?>
		</form>
	</div>
	
	<?php
}

/*one vide with image and title and description*//*one vide with image and title and description*//*one vide with image and title and description*/
/*one vide with image and title and description*//*one vide with image and title and description*//*one vide with image and title and description*/
/*one vide with image and title and description*//*one vide with image and title and description*//*one vide with image and title and description*/
/*one vide with image and title and description*//*one vide with image and title and description*//*one vide with image and title and description*/

function wpytb_youTube($video){
	?>
	
	<div id="<?php echo $video->id ?>" class="you_tube_click">
		<div class="image_place">
			<a class="wpytb_link" href="<?php  echo $video->link ?>" title="" target="_blank">
				<img width="200" height="110" src="<?php echo plugins_url('/resizer/timthumb.php', __FILE__) ?>?src=<?php echo $video->image ?>&h=110&w=200&zc=1" alt="<?php echo $video->title ?>" title="<?php echo $video->title ?>"/>
			</a>
		</div>
		<div class="text_place">
			<h2>
				<a class="wpytb_link" href="<?php  echo $video->link ?>" title="" target="_blank">
					<?php echo $video->title ?>
				</a>
			</h2>
			<p>
				<?php echo $video->description ?>
			</p>
		</div>
	</div>
	
	<?php
}

/*not found videos*//*not found videos*//*not found videos*//*not found videos*//*not found videos*//*not found videos*//*not found videos*/
/*not found videos*//*not found videos*//*not found videos*//*not found videos*//*not found videos*//*not found videos*//*not found videos*/
/*not found videos*//*not found videos*//*not found videos*//*not found videos*//*not found videos*//*not found videos*//*not found videos*/
/*not found videos*//*not found videos*//*not found videos*//*not found videos*//*not found videos*//*not found videos*//*not found videos*/

function wpytb_noMoreVideos(){
	?>
	
	<div class="youtube_not_found">
		<p>
			<?php _e('Sorry, not found more videos.') ?>
		</p>
	</div>
	
	<?php
}
?>