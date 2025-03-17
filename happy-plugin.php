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

    private function __construct() {

        $this->defined_contants();
        $this->loaded_classes();

    }

    public static function get_instance() {

        if( self::$instance) {
            return self::$instance;
        }
        self::$instance =  new self();

        return self::$instance;
    }
    private function defined_contants() {
        define('HAPPY_PLUGIN_PATH', plugin_dir_path( __FILE__ )); 

    }

    private function loaded_classes() {
        require_once HAPPY_PLUGIN_PATH. "includes/Admin_Menu.php";
        require_once HAPPY_PLUGIN_PATH. "includes/Custom_Column.php";
        require_once HAPPY_PLUGIN_PATH. "includes/Custom_Post_Type.php";

        new Admin_Menu();
        new Happy_Plugin\Custom_Columns();
        new Happy_Plugin\Custom_Post_Type();
    }
}

Happy_Plugin::get_instance();