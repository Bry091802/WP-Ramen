<?php

function my_assets(){
    wp_enqueue_style('myAssets', get_template_directory_uri() . '/css/main.css', microtime());
    wp_enqueue_script('my_menu', get_template_directory_uri() . '/js/menu.js', array(), microtime(), true);
}

add_action('wp_enqueue_scripts', 'my_assets');