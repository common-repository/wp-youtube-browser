function wpytb_check_for_close(){
	jQuery('#youtube_window_close').click(function (){
		wpytb_close_all();
	});
	jQuery(".wpytb_link").live("click", function(){
		wpytb_close_all();
		return false;
	});
}

function wpytb_close_all(){
	jQuery("#youtube_window").css('display','none');
	jQuery("#youtube_window_close").css('display','none');
	jQuery("#youtube_window").html('');
}

function wpytb_open_all(){
	jQuery('#youtube_window').fadeIn('slow');
	jQuery('#youtube_window_close').fadeIn('fast');
}

function wpytb_hover(){
	jQuery(".you_tube_click").hover(
		function(){
			jQuery(this).animate({backgroundColor: '#eeeeee'}, 'slow');
		},
		function(){
			jQuery(this).stop(true, true).animate({backgroundColor: '#ffffff'}, 'slow');
		});
}

jQuery(document).ready(function(){
	wpytb_check_for_close();
	wpytb_hover();
});