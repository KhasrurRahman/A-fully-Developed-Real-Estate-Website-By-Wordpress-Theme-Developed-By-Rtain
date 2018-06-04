<?php 

function mymenu() {
	if(function_exists('register_nav_menu'))
	{
		register_nav_menu('header_menu',__( 'Header Menu' ));
		register_nav_menu('footer_menu',__( 'Footer Menu' ));
	}
}
add_action('init','mymenu');

add_theme_support('post-thumbnails');



require_once(get_template_directory().'/theme-options/cs-framework.php');


//require_once(get_template_directory().'/inc/theme_setup.php');



@ini_set( 'upload_max_size', '256m' );
@ini_set( 'post_max_size', '256m' );
@ini_set( 'max_exeution_time', '300' );

