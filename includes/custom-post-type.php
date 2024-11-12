<?php

function nev_custom_post(){

//ramen post
$ramen_label = array(
    'name'                     => __('Ramen', 'textdomain'),
    'singular_name'            => __('Ramen', 'textdomain'),
    'add_new'                  => __('Add Ramen', 'textdomain'),
    'add_new_item'             => __('Add New Ramen', 'textdomain'),
    'edit_item'                => __('Edit Ramen', 'textdomain'),
    'all_items'                => __('Ramen', 'textdomain'),
);      

$ramen_args = array(      
    'labels'                   => $ramen_label,
    'public'                   => true,
    'capability_type'          => 'post',
    'show_ui'                  => true,
    'taxonomies'               => array('post_tag', 'category'),
    'supports'                 => array('title', 'editor', 'thumbnail', 'excerpt')
);
register_post_type('ramen', $ramen_args);

//drinks
$drinks_label = array(
    'name'                     => __('Drinks', 'textdomain'),
    'singular_name'            => __('Drinks', 'textdomain'),
    'add_new'                  => __('Add Drinks', 'textdomain'),
    'add_new_item'             => __('Add New Drinks', 'textdomain'),
    'edit_item'                => __('Edit Drinks', 'textdomain'),
    'all_items'                => __('Drinks', 'textdomain'),
);      

$drinks_args = array(      
    'labels'                   => $drinks_label,
    'public'                   => true,
    'capability_type'          => 'post',
    'show_ui'                  => true,
    'taxonomies'               => array('post_tag', 'category'),
    'supports'                 => array('title', 'editor', 'thumbnail', 'excerpt')
);
register_post_type('drinks', $drinks_args);
}

add_action('init', 'nev_custom_post');

?>