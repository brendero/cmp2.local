<?php
  # …

function register_menu_locations() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' ),
        'sidebar-menu' => __( 'Sidebar Menu' ),
        'mobile-menu' => __('Mobile Menu')
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
            'class'         => 'aside-container',
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

function custom_post_type_faq() {
   $labels = array(
    'name'               => _x( 'faq', 'post type general name' ),
    'singular_name'      => _x( 'faq', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New faq item' ),
    'edit_item'          => __( 'Edit faq item' ),
    'new_item'           => __( 'New faq item' ),
    'all_items'          => __( 'All faq items' ),
    'view_item'          => __( 'View faq item' ),
    'search_items'       => __( 'Search faq items' ),
    'not_found'          => __( 'No faq item found' ),
    'not_found_in_trash' => __( 'No faq item found in the Trash' ),
    'menu_name'          => 'faq'
  );

  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our faq items specific data',
    'public'        => true,
    'menu_position' => 5,
	  'menu_icon'     => 'dashicons-format-status',
    'supports'      => array( 'title', 'editor'),
    'has_archive'   => true
  );
  register_post_type( 'faq', $args );
}
add_action( 'init', 'custom_post_type_faq' );

function taxonomies_faq() {
  $labels = array(
    'name'              => _x( 'faq Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'faq Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search faq Categories' ),
    'all_items'         => __( 'All faq Categories' ),
    'parent_item'       => __( 'Parent faq Category' ),
    'parent_item_colon' => __( 'Parent faq Category:' ),
    'edit_item'         => __( 'Edit faq Category' ),
    'update_item'       => __( 'Update faq Category' ),
    'add_new_item'      => __( 'Add New faq Category' ),
    'new_item_name'     => __( 'New faq Category' ),
    'menu_name'         => __( 'faq Categories' )
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'faq_category', 'faq', $args );
}
add_action( 'init', 'taxonomies_faq', 0 );

add_action( 'widgets_init', 'register_sidebar_locations' );

add_theme_support('post-thumbnails');

add_theme_support('custom-logo');

add_theme_support('title-tag');
add_theme_support('custom-background');

/* Custom login */
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
          background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png);
          width:160px;
          height:160px;
          background-size: contain;
      		background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


/* Custom Header */
$args = array(
	'default-image' => get_template_directory_uri() . '/assets/banner.png',
);
add_theme_support( 'custom-header', $args );
