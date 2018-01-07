<?php

register_nav_menus( array(
    'menu-principal' => 'Area principal'
));

require_once('wp_bootstrap_navwalker.php');

if(!is_admin()) {
    add_action('wp_enqueue_scripts', 'themetest_load_style', 13);

    //Abertuda dos arquivos CSS
    function themetest_load_style(){
        //bootstrap
        wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',array(), null, 'all' );
        wp_enqueue_style( 'bootstrap' );

        wp_register_style('theme-style', get_stylesheet_uri(), array(), 'all');
        wp_enqueue_style('theme-style');
    }

    add_action("wp_enqueue_scripts", 'themetest_load_script', 14);
    //Abertura dos arquivos JS
    function themetest_load_script() {
        //JQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), null, true);
        wp_enqueue_script('jquery');

        //Bootstrap
        wp_register_script('bs-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);
        wp_enqueue_script('bs-script');
    }
}
