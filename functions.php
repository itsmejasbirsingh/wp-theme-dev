<?php
function google_js_css_scripts()
{
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'4.1.3','all');
	wp_enqueue_style('google',get_template_directory_uri().'/css/google.css',array(),'0.1.3','all');
	
	wp_enqueue_script('jquery'); // automatically include jquery by this line
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array(),'4.1.3',true);
	wp_enqueue_script('google',get_template_directory_uri().'/js/google.js',array(),'0.2',true); // true print js in footer
	
}

add_action('wp_enqueue_scripts','google_js_css_scripts');

function google_menues()
{
	add_theme_support('menus'); // add menus in appeareance section

	register_nav_menu('first','first navigation menu');
	register_nav_menu('second','second navigation menu');
}

add_action('init','google_menues');

add_theme_support('custom-background'); // adds background in appereance section
add_theme_support('custom-header'); // adds header in appereance section
add_theme_support('post-thumbnails'); // adds facility to adding feature image in posts

//add_theme_support('post-formats', array('aside','image','video','gallery','link','quote','status','audio','chat'));  adds facility to adding post formats

add_theme_support('post-formats', array('aside','image','video'));


function action_woocommerce_update_product( $product_id ) { 
    echo "product updated".$product_id;
    die;
}; 
         

//add_action( 'woocommerce_update_product', 'action_woocommerce_update_product', 10, 1 );