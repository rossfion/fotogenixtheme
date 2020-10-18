<?php

require_once( 'widgets/class-wp-widget-categories.php' );

// Theme Support.
function fotogenixtheme_theme_support() {
    // Featured Image Support.
    add_theme_support( 'post-thumbnails' );

    set_post_thumbnail_size( 900, 600 );

    // Nav Menus.
    register_nav_menus(array(
        'primary'   => __( 'Primary Menu' ),
        'footer'    => __( 'Footer Menu' ),
    ));

    // Post Format Support.
    add_theme_support( 'post-formats', array( 'gallery' ) );
}

add_action( 'after_setup_theme', 'fotogenixtheme_theme_support' );

// Widget Locations.
function fotogenixtheme_init_widgets( $id ) {
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div class="block side-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
}

add_action( 'widgets_init', 'fotogenixtheme_init_widgets' );

// Register Widgets.
function fotogenixtheme_custom_register_widgets() {
    register_widget( 'WP_Widget_Categories_Custom' );
}

add_action( 'widgets_init', 'fotogenixtheme_custom_register_widgets' );
