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


// Our custom post type function
function create_posttype() {
 
    register_post_type( 'servicos',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Serviços' ),
                'singular_name' => __( 'Serviço' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'servicos'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


function byron_styles()
{

	// Inserir: outros arquivos css se necesśario

	
	wp_enqueue_style('materialize', get_template_directory_uri() . "/css/materialize.min.css", array(), '');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', false);
	wp_enqueue_style('aos', get_template_directory_uri() . "/css/aos.css", array(), '');


	// Inserir: outros arquivos javascript se necesśario

	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), false, true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), false, true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js', array(), false, true );
	wp_enqueue_script( 'materialize_js', get_template_directory_uri() . '/js/materialize.min.js', array(), false, true );
	wp_enqueue_script('slick_js', get_template_directory_uri() . '/js/slick.min.js', array(), false, true);
	wp_enqueue_script('slick', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array(), false, true);
	wp_enqueue_script('fontawesome', "https://kit.fontawesome.com/dfb8742735.js", array(), false, true);

}
add_action('wp_enqueue_scripts', 'byron_styles');

function byron_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Menu Desktop' )
        )
    );
}
add_action( 'init', 'byron_menus' );


