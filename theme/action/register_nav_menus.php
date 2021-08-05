<?php 

function registerMenus(){
    register_nav_menus(array(
        'primary' => 'Primary Navigation'
    ));
}

add_action('init', 'registerMenus');