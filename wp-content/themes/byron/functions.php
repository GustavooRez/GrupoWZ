<?php

/*
*    Arquivo para inserir as configurações do Wordpress
*    Existem diversas configurações que o Wordpress disponibiliza para criação de temas
*    e elas devem ser escritas nesse arquivo
*/

if (class_exists('Redux')) {
	require_once 'inc/theme-customizer-redux.php';
	require_once 'inc/theme-customizer-redux-sections.php';
}


function byron_styles()
{

	// Inserir: outros arquivos css se necesśario

	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
	wp_register_style('materializeicon', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '');
	wp_register_style('materializecss', get_template_directory_uri() . "/assets/css/materialize.min.css", array(), '');
	wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '');
	// wp_register_style('fontawesome', get_template_directory_uri() . "/assets/css/fontawesome.css", array(), '');
	wp_register_style('slicks', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", array(), '');


	wp_enqueue_style('style');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('materializeicon');
	wp_enqueue_style('materializecss');
	wp_enqueue_style('slick');
	wp_enqueue_style('slicks');

	// Inserir: outros arquivos javascript se necesśario

	wp_register_script('script', get_template_directory_uri() . "/assets/js/script.js", array('jquery'), false, true);
	wp_register_script('materializejs', get_template_directory_uri() . "/assets/js/materialize.min.js", array(), false, true);
	wp_register_script('slick_js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), false, true);
	wp_register_script('jq', "https://code.jquery.com/jquery-migrate-1.2.1.min.js", array(), false, true);
	wp_register_script('slick', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array(), false, true);
	wp_register_script('fontawesome', "https://kit.fontawesome.com/dfb8742735.js", array(), false, true);
	wp_register_script('googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB8ZUn_OtQQ2FD0UMenqq0ZtvBjBQm1jR0&callback=initMap', array(), '', true);


	wp_enqueue_script('materializejs');
	wp_enqueue_script('googlemaps');
	wp_enqueue_script('script');
	wp_enqueue_script('fontawesome');
	wp_enqueue_script('jq');
	wp_enqueue_script('slick');
	wp_enqueue_script('slick_js');
}
add_action('wp_enqueue_scripts', 'byron_styles');
