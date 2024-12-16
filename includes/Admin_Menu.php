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
        ?>
        <h1>hello world</h1>

        <?php

    }

}