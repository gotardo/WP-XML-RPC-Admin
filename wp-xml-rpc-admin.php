<?php
    /*
    Plugin Name: WordPress XML-RPC Admin
    Plugin URI: http://wordpress.org/plugins/hello-dolly/
    Description: Disable the XML RPC Menu Page
    Author: Gotardo González
    Version: 0.1
    Author URI: http://blog.gotardo.es/
    */

    add_action('init', function (){
        add_filter('xmlrpc_enabled', '__return_false');
    });