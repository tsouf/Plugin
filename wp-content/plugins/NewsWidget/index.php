<?php
/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: BBC-NEWS
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Author: Nikos Karakatsidis
Description: A widget for your dashboard that allows you to see the top and latest news on the BBC.
Version: 2.0
Author URI: http://ma.tt/
*/

add_action('wp_dashboard_setup',array('dashboardWidget','newsfeed_widget'));
add_action('wp_enqueue_scripts',array('dashboardWidget','includes'));
//add_action('admin_menu','remove_menus');

class dashboardWidget{

 //function remove_menus()      
 //{                                     // Hide menu
    //remove_menu_page('index.php');
 

function newsfeed_widget()
{  
     wp_add_dashboard_widget(

    'dashboard_bbc_feed',        // Id
    'The Latest BBC News',       // Title
    'display_widget'             // Callback

    );
 
    function display_widget() 
    {
        echo '<div class="rss-widget">';
        wp_widget_rss_output(array('url' => 'http://feeds.bbci.co.uk/news/world/europe/rss.xml', 'title' => 'The Latest BBC News', 'items' => 10, 'show_date' => 1 ));
        echo "</div>";
            
    }

}

//}

function includes()
    {
        wp_enqueue_style( "style", plugins_url() . "/NewsWidget/style.css" );
        
    }

 
}

