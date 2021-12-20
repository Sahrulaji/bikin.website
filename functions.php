<?php
//* Code goes herei

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
        wp_enqueue_style( 'all-style', get_stylesheet_directory_uri().'/all.css' );
        wp_enqueue_style( 'css-all', get_stylesheet_directory_uri().'/css/all.css' );
        wp_enqueue_style( 'style-v2', get_stylesheet_directory_uri().'/css/style-v2.css' );
        wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri().'/style.css' );

        wp_enqueue_script('ajax-aspnetcdn', 'http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js', array(), '1.1', true );
        
        //add script.js
        
	wp_enqueue_script( 'script-js', get_theme_file_uri( '/js/script.js' ), array(), '1.1', true );
        
        if(is_page('template')){
                wp_enqueue_style( 'scroll-style', get_stylesheet_directory_uri().'/css/jquery.mCustomScrollbar.css' );

                wp_enqueue_script( 'jquery-ajax', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), '1.1', true );
                wp_enqueue_script( 'scroll-js', get_theme_file_uri( '/js/jquery.mCustomScrollbar.js' ), array(), '1.1', true );
                wp_enqueue_script( 'template-js', get_theme_file_uri( '/js/templates.js' ), array(), '1.1', true );
                wp_enqueue_style( 'template-style', get_theme_file_uri().'/css/templates.css' );
        }

        elseif( is_front_page() || is_home() ) {
                wp_dequeue_script( 'ajax-aspnetcdn' );wp_deregister_script('ajax-aspnetcdn');
        }
        
        elseif(is_404()) {
                wp_enqueue_script( 'notFound-js', get_theme_file_uri( '/js/not-found.js', array(), '1.1', true ));
                wp_enqueue_style( 'notFound-style', get_theme_file_uri().'/css/not-found.css' );
        }
        elseif(is_page('pesan')){
                wp_enqueue_style( 'tabs', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css' );
                wp_enqueue_style( 'scroll-style', get_stylesheet_directory_uri().'/css/jquery.mCustomScrollbar.css' );
                wp_enqueue_style( 'pesan-style', get_stylesheet_directory_uri().'/css/pesan.css' );
                wp_enqueue_style( 'select-css', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css' );
                
                wp_enqueue_script( 'jquery-12.4', get_theme_file_uri( '/js/jquery-1.12.4.js'), array(), '1.1', true );
                wp_enqueue_script( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array(), '1.1', true );
                wp_enqueue_script( 'scroll-js', get_theme_file_uri( '/js/jquery.mCustomScrollbar.js' ), array(), '1.1', true );
                wp_enqueue_script( 'template-js', get_theme_file_uri( '/js/pesan.js' ), array(), '1.1', true );
        }
        elseif(is_page('pesan-dev')){
                wp_enqueue_style( 'tabs', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css' );
                wp_enqueue_style( 'scroll-style', get_stylesheet_directory_uri().'/css/jquery.mCustomScrollbar.css' );
                wp_enqueue_style( 'pesan-style', get_stylesheet_directory_uri().'/css/pesan.css' );
                
                wp_enqueue_style( 'select-css', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css' );
                
                wp_enqueue_script( 'jquery-12.4', get_theme_file_uri( '/js/jquery-1.12.4.js'), array(), '1.1', true );
                wp_enqueue_script( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array(), '1.1', true );
                wp_enqueue_script( 'scroll-js', get_theme_file_uri( '/js/jquery.mCustomScrollbar.js' ), array(), '1.1', true );
                wp_enqueue_script( 'template-js', get_theme_file_uri( '/js/pesan.js' ), array(), '1.1', true );
                
        }
        elseif(is_page('harga')){
                wp_enqueue_script( 'jquery-110', 'https://code.jquery.com/jquery-1.11.0.min.js', array(), '1.1', true );
                wp_enqueue_script( 'jquery-migrate', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js', array(), '1.1', true );
                wp_enqueue_script( 'jquery-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.1', true );
                wp_enqueue_script( 'harga-js', get_theme_file_uri( '/js/harga.js' ), array(), '1.1', true );
        }
        elseif(is_page('bandingkan-paket')){
                wp_enqueue_style( 'bandingkan-style', get_theme_file_uri().'/css/bandingkan.css' );
                wp_enqueue_script( 'harga-js', get_theme_file_uri( '/js/bandingkan.js' ), array(), '1.1', true );
        }
        elseif(is_page('hubungi')){
                wp_enqueue_script( 'hubungi-js', get_theme_file_uri( '/js/hubungi.js' ), array(), '1.1', true );
                wp_enqueue_style( 'hubungiv2-style', get_theme_file_uri().'/css/hubungiv2.css' );
        }
        elseif(is_page('jasa-pembuatan-website-murah')){
                wp_enqueue_script( 'lp-paketonline-js', get_theme_file_uri( '/js/lp-paketonline.js' ), array(), '1.1', true );
                wp_enqueue_style( 'lp-paketonline-style', get_theme_file_uri().'/css/lp-paketonline.css' );
               
        }
        elseif(is_page('thanks')){
                wp_enqueue_script( 'thanks-js', get_theme_file_uri( '/js/thanks.js' ), array(), '1.1', true );
                wp_enqueue_style( 'thanks-style', get_theme_file_uri().'/css/thanks.css' );
        }
        elseif(is_page('thanks-page')){
                wp_enqueue_script( 'pesan-thanks-js', get_theme_file_uri( '/js/thanks.js' ), array(), '1.1', true );
                wp_enqueue_style( 'pesan-thanks-style', get_theme_file_uri().'/css/thanks.css' );
        }
        elseif(!is_page_template('archive-klien.php')){
                wp_enqueue_script( 'typewriter-js', get_theme_file_uri( '/js/typewriter.js', array(), '1.1', true ));
                wp_enqueue_script( 'klien-js', get_theme_file_uri( '/js/klien.js', array(), '1.1', true ));
                wp_enqueue_style( 'klien-style', get_theme_file_uri().'/css/klien.css' );
        }
        elseif(!is_page_template('page-hubungi-v2.php')){
                wp_enqueue_style( 'hubungiv2-style', get_theme_file_uri().'/css/hubungiv2.css' );
        }
        elseif(is_page( array('login', 'lost-password', 'registration', 'my-account'))){
                wp_enqueue_script( 'login-js', get_theme_file_uri( '/js/login.js', array(), '1.1', true ));
        }

}

function acustom_scripts() {
        if ( is_front_page() || is_home() ) {
                // wp_enqueue_style( 'owl-style', get_theme_file_uri().'/css/owl.carousel.min.css' );
                // wp_enqueue_style( 'owl-default', get_theme_file_uri().'/css/owl.theme.default.min.css' );
                wp_enqueue_style( 'home-css', get_theme_file_uri().'/css/home.css' );
                
                // wp_enqueue_script( '1.12.4', get_theme_file_uri( '/js/jquery-1.12.4.js'), array(), '1.1', true );
                // wp_enqueue_script( 'owl-js', get_theme_file_uri( '/js/owl.carousel.min.js' ), array(), '1.1', true );

                wp_enqueue_script( 'home-v2', get_theme_file_uri( '/js/homev2.js' ), array(), '1.1', true );

                wp_dequeue_script( 'ajax-aspnetcdn' );wp_deregister_script('ajax-aspnetcdn');
        }
}
add_action( 'wp_enqueue_scripts', 'acustom_scripts' );

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
        elseif ( is_page( 'jasa-pembuatan-website-murah' ) ) {
        $classes[] = 'jasa-pembuatan-website-murah-page';
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

function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Right', 'your-theme-domain' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

// add_action('template_redirect', 'default_page');
// function default_page(){
//     if(is_home() or is_front_page()){
//        exit( wp_redirect("https://bikin.website/home.php"));
//     }
// }