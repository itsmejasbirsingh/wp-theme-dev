<?php
function google_js_css_scripts()
{
	wp_enqueue_style('google',get_template_directory_uri().'/css/google.css',array(),'0.1','all');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'0.1','all');
	wp_enqueue_script('google',get_template_directory_uri().'/js/google.js',array(),'0.1',true); // true print js in footer
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array(),'0.1',true);
}

add_action('wp_enqueue_scripts','google_js_css_scripts');

function google_menues()
{
	add_theme_support('menus');

	register_nav_menu('first','first navigation menu');
	register_nav_menu('second','second navigation menu');
}

add_action('init','google_menues');