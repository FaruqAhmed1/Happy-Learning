<?php 

/*
 * Plugin Name:      Happy Plugin
 * Plugin URI:        
 * Description:      The basics learning plugin.
 * Version:           1.0.0
 * Author:            Faruq Ahmed
 * Author URI:       
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       happy-plugin
 */

class Happy_Plugin {

    private static $instance;

    private function __contruct() {

    }

    public static function get_instance() {

        if( self::$instance){
            return self::$instance;
        }
        self::$instance =  new self();

        return self::$instance;
    }
}

Happy_Plugin::get_instance();