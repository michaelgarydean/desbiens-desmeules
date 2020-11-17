<?php

add_action( 'wp_enqueue_scripts', '_mgd_parent_theme_enqueue_styles' );

function _mgd_parent_theme_enqueue_styles() {
    wp_enqueue_style( '_mgd-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'desbiens-desmeules-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( '_mgd-style' )
    );

}

// Add custom font to font settings
function _mgd_add_custom_fonts() {
	return array( 'Akkurat' ); // You can add more then 1 font to the array!
}
