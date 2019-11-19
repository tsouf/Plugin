<?php

/*

Plugin Name: DashCleanerPremium
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Author: Nikos Karakatsidis
Version: 3.0
Author URI: http://ma.tt/
Text Doamin: db-enabled.plugin
*/


class DBenabledPlugin
{
   function __construct()
   {
       //createa custom meny item
        add_action("admin_menu", array($this, "create_menu_item"));      
        add_action("admin_init", array($this, "dbenabled_settings_page"));
        add_action("admin_menu", array($this, "remove_menus"));
        //creating the settings page
       //remove the menu item

   }
    function dbenabled_settings_page()
    {
        add_settings_section(
            "menuhide", //identifier
            "Hide from the menu", // title
             null,
            "dbenabled"
        );
        //Register settings in DB
        register_setting(
            "menuhide",
            "db-hide-dashboard" // name in db  
        );

        add_settings_field(
            "db-hide-dasboard", //id
            "Hide dashboard", //name of the field
            array($this, "hide_dashboard"),   //callback to function to create checkbox
            "dbenabled",
            "menuhide"
        );

    }

    function hide_dashboard(){
        echo '<input type="checkbox" name="db-hide-dashboard" value="1"' . checked(1, get_option("db-hide-dashboard"), false) . '>'; 
    }

    
   function create_menu_item()
   {
       add_submenu_page(
           "options-general.php", // file to add the menu to
           "DB Enabled Plugin Settings", // title
           "DB Enabled",  // menu item name
           "manage_options", //capabilities
           "dbenabled", // plugin identifier
           array($this, "create_settings_page")   //callback to the 
       );

   }

   function create_settings_page()
   {
    
    //create the actual page
        echo'<div class="wrap">
           <h1>DB Enabled Plugin Settings</h1>
           <form method="post" action="options.php">';


           do_settings_sections("dbenabled");
           settings_fields("menuhide");
           submit_button();

           echo'</form><div>';
   }

   function remove_menus()
   {
        if(get_option("db-hide-dashboard") == 1)
        remove_menu_page("index.php");
   }

}

$pluginObj = new DBenabledPlugin();