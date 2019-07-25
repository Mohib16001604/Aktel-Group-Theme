<?php

add_action('after_setup_theme','aktel_theme_functions');
function aktel_theme_functions(){

	add_theme_support('title-tag');
	register_nav_menu('main-menu', 'Main Menu');
	add_theme_support('woocomerce');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-header', array(
		'default_image' => 'get_template_directiory_uri()/images/founder.jpg',
		'width' => 30,
		'height'=> 10,
	));
	add_theme_support('custom-background');
}

