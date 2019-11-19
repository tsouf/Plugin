<?php
/*
    Plugin Name: Simple Rest API Connector
    Plugin URI:
    Description: This simple plugin interacts with an API to pull random quotes and jokes
    Version: 0.9
    Author: 
    Author URI:
    License: GPL2
*/


defined( 'ABSPATH' ) or die( 'Nothing to see here!' );

// Notices displayed near the top of admin pages. The hook function should echo a message to be displayed.
add_action("admin_notices", "select_joke");

// admin_head is an action event and can be hooked by add_action hook. The action refers on the admin area and everything you include here will be applied only on the admin side.
add_action("admin_head", "chuck_css");   

function select_joke() 
{
    $data = file_get_contents (esc_url('https://api.chucknorris.io/jokes/random'));
    $joke = json_decode($data);
    if ($joke == true) 
    {         
        // how to hack the plugin that redicrecting to another website
        //$joke -> value = "<script>window.location = 'https://www.google.com' </script> ";       
        echo "<p id='chuck'><span>Chuck Norris joke: </span>" . $joke->value . "</p>";
    }
}

function chuck_css() 
{
    echo "<style type='text/css'>#chuck {margin: 0; font-size: 16px;} #chuck span {color: blue;}</style> <br>"; {}
}

