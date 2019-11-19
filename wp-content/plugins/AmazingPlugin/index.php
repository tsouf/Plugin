<?php

/**
 * @package Hello_Dolly
 * @version 1.7.2
 */
/*
Plugin Name: SuperPlugin
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Niko
Version: 1.0
Author URI: http://ma.tt/
*/

//Filter hook


add_filter('the_content', array('filterhook_fix_wordpress','fix_spelling'));
add_filter('the_title', array('filterhook_fix_wordpress','fix_spelling_title'));

class filterhook_fix_wordpress{
    function fix_spelling($content){
        $content = str_replace('CMS-MD', "Lets extend and modify WordPress!" ,$content);
        return $content;

    }
    function fix_spelling_title($title){
        $title = str_replace('CMS-MD','Awesome Post',$title);
        return $title;
    }
}

add_action ('admin_menu', array('myawesomeplugin','addmenuitem'));

class myawesomeplugin{
    function addmenuitem(){
        add_posts_page(__('Draft'), __('Drafts'), 'read', 'edit.php?post_status=draft&post_type=post');
    }

    
}







