<?php
/**
 * Theme Functions.
 *
 * @package Jan
 */

//  function Janstyles(){
//     wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
//  }
//  add_action( 'wp_enqueue_scripts', 'Janstyles' );



 function jan_enqueue_scripts() {


	wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css', [], 'all' );
   
	wp_enqueue_script( 'scrollspy-js', get_template_directory_uri() . '/assets/js/scrollspy.js', [], 'all' );

    
	wp_register_style( 'style-css', get_template_directory_uri() . '/assets/css/styles.css', [], filemtime( get_template_directory() . '/assets/css/styles.css' ), 'all' );
	wp_register_script( 'script-js', get_template_directory_uri() . '/assets/js/scripts.js', [], filemtime( get_template_directory() . '/assets/js/scripts.js' ), true );

	wp_enqueue_style( 'style-css' );
	wp_enqueue_script( 'script-js' );

}

add_action( 'wp_enqueue_scripts', 'jan_enqueue_scripts' );




function register_my_menus() {
	register_nav_menus(
	  array( 
		  'primary' => __( 'Primary Menu' ),
	      'secondary' => __( 'Secondary Menu' )
	  )
	);
}
add_action( 'init', 'register_my_menus' );


//register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );



?>


 
