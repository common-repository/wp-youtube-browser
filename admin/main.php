<?php

/*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*/
/*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*/
/*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*/
/*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*//*calling files*/

/*class of the admin GUI*/
require(LONGURL . 'admin/wpytbadminui.php');

/*registrate the plugin menu*//*registrate the plugin menu*//*registrate the plugin menu*//*registrate the plugin menu*//*registrate the plugin menu*/
/*registrate the plugin menu*//*registrate the plugin menu*//*registrate the plugin menu*//*registrate the plugin menu*//*registrate the plugin menu*/
/*registrate the plugin menu*//*registrate the plugin menu*//*registrate the plugin menu*//*registrate the plugin menu*//*registrate the plugin menu*/
/*registrate the plugin menu*//*registrate the plugin menu*//*registrate the plugin menu*//*registrate the plugin menu*//*registrate the plugin menu*/

add_action('admin_menu', 'wpytb_start_admin');

/*registrate the admin page*//*registrate the admin page*//*registrate the admin page*//*registrate the admin page*//*registrate the admin page*/
/*registrate the admin page*//*registrate the admin page*//*registrate the admin page*//*registrate the admin page*//*registrate the admin page*/
/*registrate the admin page*//*registrate the admin page*//*registrate the admin page*//*registrate the admin page*//*registrate the admin page*/
/*registrate the admin page*//*registrate the admin page*//*registrate the admin page*//*registrate the admin page*//*registrate the admin page*/

function wpytb_start_admin(){
	add_plugins_page("WP YouTube Browser", "WP YouTube Browser", "manage_options", "youtube", "wpytb_admin_page");
}

/*the admin method controller*//*the admin method controller*//*the admin method controller*//*the admin method controller*/
/*the admin method controller*//*the admin method controller*//*the admin method controller*//*the admin method controller*/
/*the admin method controller*//*the admin method controller*//*the admin method controller*//*the admin method controller*/
/*the admin method controller*//*the admin method controller*//*the admin method controller*//*the admin method controller*/

function wpytb_admin_page(){
	/*install if it is not exist or load if it is exist*/
	wpytbLoadOptions::checkIn();
	/*save if posted save request*/
	if (isset($_POST['save'])){
		/*hack injection*/
		if (!wp_verify_nonce($_POST['wpytb_nonces'],'wpytb_nonce_validator')){
			echo __('Do not touch my page if you are not my admin!');
			exit;
		}
		/*not hack injection - update options*/
		elseif (check_admin_referer('wpytb_nonce_validator','wpytb_nonces')){
			wpytbLoadOptions::saveOut();
		}
	}
	/*display admin GUI*/
	wpytbAdminUi::displayer();
}
?>