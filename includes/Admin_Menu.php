<?php 

class Admin_Menu {

    public function __construct() {

        add_action('admin_menu',array($this,'admin_menu'));

    }

    public function admin_menu() {
        add_menu_page (
            'Query Post',
            'Query Post',
            'administrator',
            'query_post',
            array($this,'query_post_callback')

        );
    }

    public function query_post_callback() {

        $posts  = get_posts(array(

            'post_type' => 'post',
            'post_per_page'=> 10

        ));
        
        include HAPPY_PLUGIN_PATH . 'includes\templates\query-post.php';
    }

}