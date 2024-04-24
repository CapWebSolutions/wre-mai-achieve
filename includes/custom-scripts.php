<?php
add_action( 'wp_enqueue_scripts', 'mai_achieve_public_scripts' );
add_action( 'get_footer', 'mai_achieve_footer_styles' );

function mai_achieve_footer_styles() {
    if ( is_page_template( 'templates/sc-relator-template.php' ) || is_page_template( 'templates/sale-greenville-template.php' ) || is_front_page() ) {
        wp_enqueue_style( 'mai_achieve-public-style', get_stylesheet_directory_uri() . '/css/public-style.css', array (), '2.0' );
    }
}

function mai_achieve_public_scripts() {
//    $theme   = wp_get_theme( 'mai-achieve' );
//    $version = $theme->get( 'Version' );
    // Load Slick stylesheet.
    if ( is_page_template( 'templates/sc-relator-template.php' ) || is_page_template( 'templates/sale-greenville-template.php' ) || is_front_page() ) {
        wp_enqueue_style( 'mai_achieve-slick-style', get_stylesheet_directory_uri() . '/css/slick.min.css', array (), NULL );
        wp_enqueue_style( 'mai_achieve-fancybox-style', get_stylesheet_directory_uri() . '/css/jquery.fancybox.css', array (), NULL );
//        wp_enqueue_style( 'mai_achieve-public-style', get_stylesheet_directory_uri() . '/css/public-style.css', array (), time(), true );
        // Load our public style stylesheet.
        // Load main jquery
        wp_enqueue_script( 'jquery', array (), NULL );
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js", false, '2.2.4' );

        // Load Slick script
        wp_enqueue_script( 'mai_achieve-slick-script', get_stylesheet_directory_uri() . '/js/slick.min.js', array (), NULL );
        wp_enqueue_script( 'mai_achieve-fancybox-script', get_stylesheet_directory_uri() . '/js/jquery.fancybox.js', array (), NULL );
        wp_enqueue_script( 'mai_achieve-public-script', get_stylesheet_directory_uri() . '/js/public-script.js', array (), time(), true );
    }
    // Load TweenMax script
}
