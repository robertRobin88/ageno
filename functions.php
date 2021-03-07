<?php 

//navigation
function register_my_menus()
{
    register_nav_menus(
        array(
            'top-menu' => __('Menu nagłówek'),
            'burger-menu' => __('Menu dodatkowe'),

        )
    );
}

add_action('init', 'register_my_menus');
add_theme_support( 'post-thumbnails' );

register_sidebar( array(
    'name'          => __( 'Widget Area', 'codehex' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Add widgets here to appear in your sidebar.', 'codehex' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );	
register_sidebar( array(
    'name'          => __( 'Obszar dla widgetów w nagłówku', 'codehex' ),
    'id'            =>'header-1',
    'description'   => __( 'Tutaj należy dodać widgety.', 'codehex' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
) );
?>