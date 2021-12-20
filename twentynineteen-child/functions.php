<?php
//* Code goes here
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri().'/style.css' );

	// if(is_home()){
	// 	wp_enqueue_script( 'twentynineteen-priority-menu', get_theme_file_uri( '/js/slick.min.js' ), array(), '1.1', true );
        // }
	
	//add script.js
	wp_enqueue_script( 'script-js', get_theme_file_uri( '/js/script.js' ), array(), '1.1', true );
        
        if(is_page('template')){
                wp_enqueue_script( 'template-js', get_theme_file_uri( '/js/templates.js' ), array(), '1.1', true );
        }
        elseif(is_page('harga')){
                wp_enqueue_script( 'jquery-110', 'https://code.jquery.com/jquery-1.11.0.min.js', array(), '1.1', true );
                wp_enqueue_script( 'jquery-migrate', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js', array(), '1.1', true );
                wp_enqueue_script( 'jquery-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.1', true );
                wp_enqueue_script( 'harga-js', get_theme_file_uri( '/js/harga.js' ), array(), '1.1', true );
        }
        elseif(!is_page_template('archive-klien.php')){
                wp_enqueue_script( 'klien-js', get_theme_file_uri( '/js/klien.js', array(), '1.1', true ));
        }
        elseif(is_page( array('login', 'lost-password', 'registration', 'my-account'))){
                wp_enqueue_script( 'login-js', get_theme_file_uri( '/js/login.js', array(), '1.1', true ));
        }
}

add_filter( 'body_class', 'custom_body_class' );

function custom_body_class( $classes ) {
    if ( !is_page_template( 'archive-klien.php' ) ) {
        $classes[] = 'klien-page';
        return $classes;
	}
	elseif ( is_page( 'template' ) ) {
        $classes[] = 'template-page';
        return $classes;
	}
	elseif ( is_page( 'blog' ) ) {
        $classes[] = 'blog-page';
        return $classes;
	}
	elseif ( is_page( 'harga' ) ) {
        $classes[] = 'harga-page';
        return $classes;
	}
	elseif ( is_page( 'hubungi' ) ) {
        $classes[] = 'hubungi-page';
        return $classes;
	}
	elseif ( is_page( 'login' ) ) {
        $classes[] = 'login';
        return $classes;
    }
}

/* custom post Templates */
add_action( 'init', 'custom_post_type_func' );
function custom_post_type_func() {
    //posttypename = templates
        $labels = array(
        'name' => _x( 'Templates', 'templates' ),
        'singular_name' => _x( 'templates', 'templates' ),
        'add_new' => _x( 'Add New', 'templates' ),
        'add_new_item' => _x( 'Add New templates', 'templates' ),
        'edit_item' => _x( 'Edit templates', 'templates' ),
        'new_item' => _x( 'New templates', 'templates' ),
        'view_item' => _x( 'View templates', 'templates' ),
        'search_items' => _x( 'Search templates', 'templates' ),
        'not_found' => _x( 'No templates found', 'templates' ),
        'not_found_in_trash' => _x( 'No templates found in Trash', 'templates' ),
        'parent_item_colon' => _x( 'Parent templates:', 'templates' ),
        'menu_name' => _x( 'Templates', 'templates' ),
        );
        $args = array(
                'labels' => $labels,
                'hierarchical' => true,
                'description' => 'Hi, this is my custom post type.',
                'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
                'taxonomies' => array( 'category', 'post_tag', 'page-category' ),
                'public' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'show_in_nav_menus' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'has_archive' => true,
                'query_var' => true,
                'can_export' => true,
                'rewrite' => true,
                'capability_type' => 'post'
        );
        register_post_type( 'templates', $args );
}

// add category nicenames in body and post class
function themes_category_id_class($classes) {
        global $post;
        foreach((get_the_category($post->ID)) as $category)
            $classes[] = $category->category_nicename;
        return $classes;
    }
add_filter('post_class', 'themes_category_id_class');

/* custom post Karir */
function karir_custom_post_type (){
        $labels = array(
                'name' => 'Karir',
                'singular_name' => 'Karir',
                'add_new' => 'Add Role',
                'add_new_item' => 'Add New Role',
                'edit_item' => 'Edit role',
                'new_item' => 'New role',
                'view_item' => 'View role',
                'search_items' => 'Search role',
                'not_found_in_trash' => 'No templates found in Trash',
                'parent_item_colon' => 'View roles',
                'menu_name' => 'Karir',
        );

        $args = array(
                'labels' => $labels,
                'public' => true,
                'hierarchical' => false,
                'description' => 'Hi, this is my custom post type.',
                'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes' ),
                'taxonomies' => array( 'category', 'post_tag', 'page-category' ),
                'public' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'show_in_nav_menus' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'has_archive' => true,
                'query_var' => true,
                'can_export' => true,
                'rewrite' => true,
                'capability_type' => 'post'
        );

        register_post_type( 'Karir', $args);
}
add_action('init', 'karir_custom_post_type');

function isacustom_excerpt_length($length) {
        global $post;
        if ($post->post_type == 'Karir')
        return 20;
        // else if ($post->post_type == 'products')
        // return 65;
        // else if ($post->post_type == 'testimonial')
        // return 75;
        // else
        // return 80;
        }
add_filter('excerpt_length', 'isacustom_excerpt_length');

/* custom post Klien */
add_action( 'init', 'klien_custom_post_type' );
function klien_custom_post_type() {
    //posttypename = klien
        $labels = array(
        'name' => _x( 'Klien', 'klien' ),
        'singular_name' => _x( 'klien', 'klien' ),
        'add_new' => _x( 'Add New', 'klien' ),
        'add_new_item' => _x( 'Add New klien', 'klien' ),
        'edit_item' => _x( 'Edit klien', 'klien' ),
        'new_item' => _x( 'New klien', 'klien' ),
        'view_item' => _x( 'View klien', 'klien' ),
        'search_items' => _x( 'Search klien', 'klien' ),
        'not_found' => _x( 'No klien found', 'klien' ),
        'not_found_in_trash' => _x( 'No klien found in Trash', 'klien' ),
        'parent_item_colon' => _x( 'Parent klien:', 'klien' ),
        'menu_name' => _x( 'Klien', 'klien' ),
        );
        $args = array(
                'labels' => $labels,
                'hierarchical' => true,
                'description' => 'Hi, this is my custom post type.',
                'supports' => array( 'title', 'excerpt', 'author', 'thumbnail', 'custom-fields' ),
                'taxonomies' => array( 'category', 'post_tag', 'page-category' ),
                'public' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'show_in_nav_menus' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'has_archive' => true,
                'query_var' => true,
                'can_export' => true,
                'rewrite' => true,
                'capability_type' => 'post'
        );
        register_post_type( 'klien', $args );
}

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//auto redirect to home page after login
add_action('login_form', 'redirect_after_login'); 
function redirect_after_login() 
{     
global $redirect_to; 
if   (!isset($_GET['redirect_to'])) 
{ 
$redirect_to =   get_option('home');
//  sample-page = your page name after site_url
} }