<?php

/* Register Css media */
function register_css_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap-theme');

    wp_register_style('owl-css', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.0.0', 'all');
    wp_enqueue_style('owl-css');

    wp_register_style('owl-css-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('owl-css-theme');

    wp_register_style('main-css', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main-css');
}
add_action('wp_enqueue_scripts', 'register_css_styles');

/* Register JS Scripts */
function register_js_scripts() {
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('jquery');

    wp_register_script('botstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('botstrap-js');

    wp_register_script('owljs', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owljs');

    wp_register_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('custom-script');
}
add_action('wp_enqueue_scripts', 'register_js_scripts');



register_nav_menus( array(
    'main_navigation' => 'Main menu',
    'mobile_navigation' => 'Mobile menu'

));

add_theme_support( 'post-thumbnails' );
add_image_size("first-size", 10, 10, true );
add_image_size("iraso-image", 300, 200, true );
add_image_size("iraso-image-apie", 800, 600, true );

function pw_show_image_sizes($sizes) {
    $sizes['first-size'] = __( 'First size 10x10', 'itb' );
    return $sizes;
}
add_filter('image_size_names_choose', 'pw_show_image_sizes');




add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain('itb', get_template_directory() . '/languages');
}


// register the shortcode to wrap html around the content [responsive-video identifier="O56p5nOYNHo"]
function wptuts_responsive_video_shortcode( $atts ) {
    extract( shortcode_atts( array (
        'identifier' => ''
    ), $atts ) );
    return '<div class="wptuts-video-container"><iframe src="//www.youtube.com/embed/' . $identifier . '" height="240" width="320" allowfullscreen="" frameborder="0"></iframe></div>
    <!--.wptuts-video-container-->';
}
add_shortcode ('responsive-video', 'wptuts_responsive_video_shortcode' );



// Registruojam naujus widgets.
function wpb_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'wpb' ),
        'id' => 'sidebar-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Front page sidebar', 'wpb'),
        'id' => 'sidebar-2',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    }
 
add_action( 'widgets_init', 'wpb_widgets_init' );






/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Movies', 'Post Type General Name', 'itb' ),
            'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentythirteen' ),
            'menu_name'           => __( 'Movies', 'twentythirteen' ),
            'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
            'all_items'           => __( 'All Movies', 'twentythirteen' ),
            'view_item'           => __( 'View Movie', 'twentythirteen' ),
            'add_new_item'        => __( 'Add New Movie', 'twentythirteen' ),
            'add_new'             => __( 'Add New', 'twentythirteen' ),
            'edit_item'           => __( 'Edit Movie', 'twentythirteen' ),
            'update_item'         => __( 'Update Movie', 'twentythirteen' ),
            'search_items'        => __( 'Search Movie', 'twentythirteen' ),
            'not_found'           => __( 'Not Found', 'twentythirteen' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
        );
         
    // Set other options for Custom Post Type
         
        $args = array(
            'label'               => __( 'movies', 'twentythirteen' ),
            'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
         
        // Registering your Custom Post Type
        register_post_type( 'movies', $args );
     
    }
     
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
     
    add_action( 'init', 'custom_post_type', 0 );






?>