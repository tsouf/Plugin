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
Version: 4.1
Author URI: http://ma.tt/
*/

class dashboardWidget{
   
    function __construct()
    {

   

        add_action('wp_dashboard_setup',array($this,'newsfeed_widget')); 
        add_action('wp_dashboard_setup',array($this,'clean_dashboard'));
        add_action('wp_dashboard_setup',array($this,'newsfeed_widget2'));
        add_action('wp_dashboard_setup',array($this,'newsfeed_widget3'));
        add_action('admin_footer_text',array($this ,'footer'));
        add_action('admin_head',array($this,'dashboard_title') );

        add_action('wp_enqueue_scripts',array($this,'myplugin_scripts'));

    }

    function dashboard_title(){
        
        if ($GLOBALS['title'] ='Dashboard' ){

            $GLOBALS['title'] ='BBC-NewsFeed'; 
            
            return;
        }
   
    }

    function footer(){
        
        echo ( '<span id="footer-note"><b>Made by <a href="http://dk.linkedin.com/in/nikolaos-karakatsidis-a6806a184/%7Bcountry%3Dus%2C+language%3Den%7D?trk=people-guest_profile-result-card_result-card_full-click" target="_blank">Nikos Karakatsidis</a> <b> <i>@Copyright 2020<i></span>');
        
    }

    function clean_dashboard ()
    {

        remove_action( 'welcome_panel', 'wp_welcome_panel' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'health_check_status', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
        
    }   

    function newsfeed_widget ()
    {  
    wp_add_dashboard_widget(

    'dashboard_bbc_feed',        // Id
    'Top Stories',       // Title
    'display_widget'             // Callback

    );
 
        function display_widget() 
        {
        
         echo '<div class="rss-widget">';
         wp_widget_rss_output (array('url' => 'http://feeds.bbci.co.uk/news/rss.xml', 'title' =>  'Top Stories', 'items' => 7, 'show_date' => 1, 'show_summary' => 1 ));
      
          echo '</div>';
        
        //  echo '<input type="button"  name="show-widget" value="Sports"' . checked(1, get_option("show-widget"), false) . '>'; 
         }

    }

    function newsfeed_widget2 ()
    {  
    wp_add_dashboard_widget(

    'dashboard_bbc_feed2',        // Id
    'Techonology',       // Title
    'display_widget2'             // Callback

    );
 
        function display_widget2() 
        {
            
        echo '<div class="rss-widget">';
        wp_widget_rss_output(array('url' => 'http://feeds.bbci.co.uk/news/technology/rss.xml', 'title' =>  'Technology', 'items' => 7, 'show_date' => 1, 'show_summary' => 1 ));
      
        echo '</div>';
            
         }

    }

    function newsfeed_widget3 ()
    {  
    wp_add_dashboard_widget(

    'dashboard_bbc_feed3',        // Id
    'Entertainment-Arts',       // Title
    'display_widget3'             // Callback

    );
 
        function display_widget3() 
        {
      
        echo '<div class="rss-widget">';
        wp_widget_rss_output(array('url' => 'http://feeds.bbci.co.uk/news/entertainment_and_arts/rss.xml', 'title' =>  'Entertainment-Arts', 'items' => 7, 'show_date' => 1, 'show_summary' => 1 ));
      
        echo '</div>';

        }   

    }   

    function myplugin_scripts()
    {
        
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        
    }
 
}

$mywidget = new dashboardWidget();
