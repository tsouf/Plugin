<?php
/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: ShortCode
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Niko
Version: 1.0
Author URI: http://ma.tt/
*/

add_shortcode('shortcodeTest',array('shortcodePlugin','helloWorldShortcode'));
add_action('wp_enqueue_scripts',array('shortcodePlugin','includes'));
add_shortcode('wp_enqueue_scripts',array('shortcodePlugin','myLink'));

class shortcodePlugin{
    
    function helloWorldShortcode(){
        $text = '<p> My First ShortCode Yikesss </p>';
        return str_repeat($text, 10);
    }

    function includes()
    {
        wp_enqueue_style( "style", plugins_url() . "/ShortCodePlugin/style.css" );
        
    }

    function myLink(){
       return '<a href="http://www.di.fm/">
       <img src = "http://localhost/wordpress/wp-content/uploads/2019/10/republic-of-gamers-uhd-wallpaper-HD-free-wallpapers-backgrounds-images-FHD-4k-download-2014-2015-2016.jpg.ff9de5887ed4b79b096db3a94fd2f2cb.jpg" width="200" height="200" >
       </a>';
    }

    
}





