<?php
  # …

function register_menu_locations() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' ),
        'sidebar-menu' => __( 'Sidebar Menu' )
      )
    );
}
  add_action( 'init', 'register_menu_locations' );

/*Scripts inladen*/
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.1', 'all');
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.1', 'all');
  /*wp_enqueue_script('script' , get_template_directory_uri() . '/js/script.js',array(), '1.1',true);*/
}

/*functie uitvoeren*/
add_action('wp_enqueue_scripts','add_theme_scripts');

function register_sidebar_locations() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary-sidebar',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

function custom_post_type_portfolio() {
   $labels = array(
    'name'               => _x( 'Portfolio', 'post type general name' ),
    'singular_name'      => _x( 'Portfolio item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Portfolio item' ),
    'edit_item'          => __( 'Edit Portfolio item' ),
    'new_item'           => __( 'New Portfolio item' ),
    'all_items'          => __( 'All Portfolio items' ),
    'view_item'          => __( 'View Portfolio item' ),
    'search_items'       => __( 'Search Portfolio items' ),
    'not_found'          => __( 'No portfolio item found' ),
    'not_found_in_trash' => __( 'No portfolio item found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Portfolio'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our portfolio items specific data',
    'public'        => true,
    'menu_position' => 5,
	  'menu_icon'     => 'dashicons-portfolio',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
    'has_archive'   => true
  );
  register_post_type( 'portfolio', $args );
}
add_action( 'init', 'custom_post_type_portfolio' );

function taxonomies_portfolio() {
  $labels = array(
    'name'              => _x( 'Portfolio Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Portfolio Categories' ),
    'all_items'         => __( 'All Portfolio Categories' ),
    'parent_item'       => __( 'Parent Portfolio Category' ),
    'parent_item_colon' => __( 'Parent Portfolio Category:' ),
    'edit_item'         => __( 'Edit Portfolio Category' ), 
    'update_item'       => __( 'Update Portfolio Category' ),
    'add_new_item'      => __( 'Add New Portfolio Category' ),
    'new_item_name'     => __( 'New Portfolio Category' ),
    'menu_name'         => __( 'Portfolio Categories' )
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'portfolio_category', 'portfolio', $args );
}
add_action( 'init', 'taxonomies_portfolio', 0 );

add_action( 'widgets_init', 'register_sidebar_locations' );
add_theme_support('post-thumbnails');
add_theme_support('custom-logo', array(
  'height' => 50,
  'width' => 50,
  'flex-width' => true
));
add_theme_support('title-tag');
add_theme_support('custom-background');

