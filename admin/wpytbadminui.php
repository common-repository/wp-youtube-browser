<?php
class wpytbAdminUi{
	
	/*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*/
	/*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*/
	/*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*/
	/*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*//*admin GUI*/
	
	/*return: echo the GUI*/
	/*params: no*/
	
	public function displayer(){
		wpytbAdminUi::header();
		wpytbAdminUi::body();
	}
	
	/*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*/
	/*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*/
	/*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*/
	/*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*//*admin GUI head*/
	
	/*return: no*/
	/*params: no*/
	
	public function header(){
		//off
	}
	
	/*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*/
	/*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*/
	/*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*/
	/*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*//*admin GUI body*/
	
	/*return: echo the GUI*/
	/*params: no*/
	
	public function body(){
		global $wpytb_options;
		$selected = "selected=\"selected\"";
		
		?><div class="wrap">
			<div id="icon-tools" class="icon32">
				<br>
			</div>
			<h2><?php _e('Options of the WP YouTube Browser') ?></h2><br>
			
			<form method="POST">
				<?php wp_nonce_field('wpytb_nonce_validator','wpytb_nonces'); ?>
				<input type="submit" id="save" name="save" class="button-secondary" value="<?php _e('Save') ?>" />
				<p></p>
				<div id="normal-sortables" class="meta-box-sortables">
				
					<div class="postbox">
						<h3 style="padding:5px 11px;"><?php _e('Display') ?></h3>
						<div class="inside">
							<table class="maintable">
							<!-- new line --------------------------------------------------------------->
								<tr>
									<td width="400" class="a_label_td">
										<label for="search"><?php _e('Display the search form') ?></label>
									</td>
									<td class="an_input_td">
										<select name="search" id="search">
											<option value="yes"<?php if ($wpytb_options['search'] == "yes") echo $selected; ?>><?php _e('Yes') ?></option>
											<option value="no"<?php if ($wpytb_options['search'] == "no") echo $selected; ?>><?php _e('No') ?></option>
										</select>
									</td>
								</tr>
								<!-- new line --------------------------------------------------------------->
								<tr>
									<td class="a_label_td">
										<label for="pager"><?php _e('Display the pager') ?></label>
									</td>
									<td class="an_input_td">
										<select name="pager" id="pager">
											<option value="yes"<?php if ($wpytb_options['pager'] == "yes") echo $selected; ?>><?php _e('Yes') ?></option>
											<option value="no"<?php if ($wpytb_options['pager'] == "no") echo $selected; ?>><?php _e('No') ?></option>
										</select>
									</td>
								</tr>
								<!-- new line --------------------------------------------------------------->
								<tr>
									<td class="a_label_td">
										<label for="max"><?php _e('Videos per Page, min: 1, max: 20') ?></label>
									</td>
									<td class="an_input_td">
										<input id="max" size="50" name="max" value="<?php echo $wpytb_options['max'] ?>" />
									</td>
								</tr>
								<!-- new line --------------------------------------------------------------->
							</table>
							<p></p>
						</div>
					</div>
					
					<div class="postbox">
						<h3 style="padding:5px 11px;"><?php _e('YouTube type') ?></h3>
						<div class="inside">
							<table class="maintable">
								<!-- new line --------------------------------------------------------------->
								<tr>
									<td width="400" class="a_label_td">
										<label for="type"><?php _e('List type<br /><br />- Keywords: Full video list. The users can search from videos by the keywords. This is the full YouTube.com<br /><br />- Categories: Filtered list by a YouTube category. The users can search from the category by keywords.<br /><br />- Username: A list from uploaded videos of a YouTube user or youtube TV Channel. The users can search from this list.<br /><br />- Favorit: The favorite videos from a YouTube user.<br /><br />- PlayList: Videos from a public YouTube playlist.') ?></label>
									</td>
									<td class="an_input_td">
										<select name="type" id="type">
											<option value="keyword"<?php if ($wpytb_options['type'] == "keyword") echo $selected; ?>><?php _e('Keywords (searchable)') ?></option>
											<option value="category"<?php if ($wpytb_options['type'] == "category") echo $selected; ?>><?php _e('Categories (searchable)') ?></option>
											<option value="uservideo"<?php if ($wpytb_options['type'] == "uservideo") echo $selected; ?>><?php _e('Username (searchable)') ?></option>
											<option value="favorite"<?php if ($wpytb_options['type'] == "favorite") echo $selected; ?>><?php _e('Favorit') ?></option>
											<option value="playlist"<?php if ($wpytb_options['type'] == "playlist") echo $selected; ?>><?php _e('Playlist') ?></option>
										</select>
									</td>
								</tr>
								<!-- new line --------------------------------------------------------------->
							</table>
							<p></p>
						</div>
					</div>
							
					<div class="postbox">
						<h3 style="padding:5px 11px;"><?php _e('Content') ?></h3>
						<div class="inside">
							<table class="maintable">
								<!-- new line --------------------------------------------------------------->
								<tr>
									<td width="400" class="a_label_td">
										<label for="key"><?php _e('Default keywords (This will be forced filter. If you want search from the full YouTube this must have empty field.)<br />- simple keyword example: trailer<br />- more keywords example: star+wars+games') ?></label>
									</td>
									<td class="an_input_td">
										<input id="key" size="50" name="key" value="<?php echo $wpytb_options['key'] ?>" />
									</td>
								</tr>
								<!-- new line --------------------------------------------------------------->
								<tr>
									<td class="a_label_td">
										<label for="cat"><?php _e('The YouTube Category (This will be forced filter. If you want search from the full YouTube this must have empty field.)<br />- examples (use only one): film, entertainment, travel...') ?></label>
									</td>
									<td class="an_input_td">
										<input id="cat" size="50" name="cat" value="<?php echo $wpytb_options['cat'] ?>" />
									</td>
								</tr>
								<!-- new line --------------------------------------------------------------->
								<tr>
									<td class="a_label_td">
										<label for="user"><?php _e('The YouTube Username (This need if you have selected the "Username" or "Favorite" type)<br />- examples (use only one): WarnerBrosPictures, InspectorJavert1820...') ?></label>
									</td>
									<td class="an_input_td">
										<input id="user" size="50" name="user" value="<?php echo $wpytb_options['user'] ?>" />
									</td>
								</tr>
								<!-- new line --------------------------------------------------------------->
								<tr>
									<td class="a_label_td">
										<label for="plist"><?php _e('The YouTube Playlist ID (This need if you have selected the "Playlist" type)<br />- for example, this is a playlist link: http://www.youtube.com/watch?v=MV_3Dpw-BRY&list=PL<strong>E53B5243AF2360CA</strong>&feature=plpp_play_all and this is the ID: E53B5243AF2360CA') ?></label>
									</td>
									<td class="an_input_td">
										<input id="plist" size="50" name="plist" value="<?php echo $wpytb_options['plist'] ?>" />
									</td>
								</tr>
								<!-- new line --------------------------------------------------------------->
							</table>
							<p></p>
						</div>
					</div>
					
					<div class="postbox">
						<h3 style="padding:5px 11px;"><?php _e('Description') ?></h3>
						<div class="inside wpytb">
								<h2><?php _e('Default YouTube browser'); ?></h2>
								<ul>
									<li><?php _e('(Editable on this page.)'); ?></li>
									<li><?php _e('Create a page (Dashboard->Page->New Page), paste this short-code: <strong>[mytube]</strong>'); ?></li>
								</ul>
								<h2><?php _e('Custom YouTube browser'); ?></h2>
								<ul>
									<li><?php _e('Create a page or post and paste this short-code: [extratube]'); ?></li>
									<li><?php _e('The [extratube] does not use the admin options from this page. [extratube] set custom parameters, example:'); ?></li>
									<li><strong><?php _e('[extratube type="keyword" key="star+wars" itemcount="7" search="yes" pager="yes"]'); ?></strong></li>
								</ul>
								<h3><?php _e('type'); ?></h3>
								<p><?php
									_e('values: keyword, category, uservideo, favorite, playlist'); ?><br /><?php
									_e('default value: keyword');
								?></p>
								<ul>
									<li><?php
										_e('keyword: searchable'); ?><br /><?php
										_e('example for keyword: <strong>[extratube type="keyword" key="snowboard"]</strong>');
									?></li>
									<li><?php
										_e('category: searchable'); ?><br /><?php
										_e('example for category: <strong>[extratube type="category" category="travel"]</strong>');
									?></li>
									<li><?php
										_e('uservideo: searchable'); ?><br /><?php
										_e('example for uservideo: <strong>[extratube type="uservideo" uservideo="machinima"]</strong>');
									?></li>
									<li><?php
										_e('favorite: not searchable'); ?><br /><?php
										_e('example for favorite: <strong>[extratube type="favorite" uservideo="machinima"]</strong>');
									?></li>
									<li><?php
										_e('playlist: not searchable'); ?><br /><?php
										_e('example for playlist: <strong>[extratube type="playlist" playlist="2FE6C7688DC93391"]</strong>');
									?></li>
								</ul>
								<h3><?php _e('itemcount'); ?></h3>
								<p><?php
									_e('values examples: 1, 2, 3, ect... (between 1 and 20)'); ?><br /><?php
									_e('default value: 10');
								?></p>
								<h3><?php _e('key'); ?></h3>
								<p><?php
									_e('values (examples): star+wars, mcdonalds, i+am+happy, wow, ect...'); ?><br /><?php
									_e('default value: none');
								?></p>
								<h3><?php _e('category'); ?></h3>
								<p><?php
									_e('values (examples): travel, entertainment, film, ect... (the offical YouTube categories)'); ?><br /><?php
									_e('default value: none');
								?></p>
								<h3><?php _e('user'); ?></h3>
								<p><?php
									_e('values (examples): RoughTradeRecordsUK, Anikat, machinima, PoathTV, ect... (any YouTube username)'); ?><br /><?php
									_e('default value: none');
								?></p>
								<h3><?php _e('playlist'); ?></h3>
								<p><?php
									_e('values (examples): 2FE6C7688DC93391, 63F0C78739B09958, ect (any YouTube public playlist ID)'); ?><br /><?php
									_e('default value: none');
								?></p>
								<h3><?php _e('search'); ?></h3>
								<p><?php
									_e('values: yes, no'); ?><br /><?php
									_e('default value: yes');
								?></p>
								<h3><?php _e('pager'); ?></h3>
								<p><?php
									_e('values: yes, no'); ?><br /><?php
									_e('default value: yes');
								?></p>
							<p></p>
						</div>
					</div>
					
					<input type="submit" id="save" name="save" class="button-secondary" value="<?php _e('Save') ?>" />
					
				</div>
			</form>
			
		</div>
		<style>
			.an_input_td{
				vertical-align:top;
				padding-bottom:20px;
			}
			.a_label_td{
				padding-bottom:20px;
			}
			.wpytb h2{
				font-size:20px;
			}
			.wpytb h3{
				background:none;
				margin:40px 0 0 0;
				padding:0;
				border:0;
			}
			.wpytb li{
				list-style:circle;
				margin-left:50px;
			}
			.wpytb p{
				list-style:circle;
				padding:15px 0;
			}
		</style>
		<?php
	}
}
?>