<?php

add_action('after_setup_theme','aktel_theme_functions');
function aktel_theme_functions(){

	add_theme_support('title-tag');
	register_nav_menu('main-menu', 'Main Menu');
	add_theme_support('woocomerce');
	add_theme_support('post-thumbnails');
}

