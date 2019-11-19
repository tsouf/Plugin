<?php
/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: DashCleaner
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Author: Nikos Karakatsidis
Description: A widget for your dashboard that allows you to see the top and latest news on the BBC.
Version: 2.0
Author URI: http://ma.tt/
*/

class dashCleaner
{

    function __construct()
    {
      add_action('wp_dashboard_setup',array($this,'remove_dashboard_widgets'));
     // add_action('wp_dashboard_setup',array($this,'remove_menus'));

    }

        function remove_dashboard_widgets (){

            remove_action( 'welcome_panel', 'wp_welcome_panel' );
            remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
            remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
            remove_meta_box( 'health_check_status', 'dashboard', 'normal' );
            remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
            remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
            
        }   

        function remove_menus(){
            // remove_menu_page('index.php');
             //remove_menu_page('edit.php?post_type=page');
       
        }
    }  

$mycleaner = new dashCleaner();