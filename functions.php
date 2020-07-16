<?php
define('THEMEURL', get_stylesheet_directory_uri());

/**** setup theme ***/
function theme_setup(){
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom');
    add_theme_support( 'wc-product-gallery-lightbox');
    add_theme_support( 'wc-product-gallery-slider');
    add_theme_support( 'responsive-embeds');
    register_nav_menus(
        array(
            'main_menu' => __( 'Main Menu', 'webbox' ),
            
        )
   );
    add_image_size('webbox_thumb',370,210,true);//using for thumbnail
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}
add_action('after_setup_theme', 'theme_setup');
/*
function theme_scripts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&display=swap', array(), false);
    wp_enqueue_style( 'theme-style-source', get_stylesheet_directory_uri().'/css/source.css', array(), false );
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri().'/css/style.css', array(), false );
    wp_enqueue_style( 'theme-style-responsive', get_stylesheet_directory_uri().'/css/responsive.css', array(), false );
   
    
    
    wp_enqueue_script('theme-source',get_stylesheet_directory_uri().'/js/sources.js',array('jquery','jquery-ui-accordion'),false,true);    
    wp_enqueue_script('theme-custom',get_stylesheet_directory_uri().'/js/customs.js',array('jquery'),false,true);
    wp_enqueue_script('theme-mains',get_stylesheet_directory_uri().'/js/mains.js',array('theme-source','theme-custom'),false,true);
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
*/
function theme_widgets() {
    register_sidebar(
        array(
            'name'          => __( "Blog Sidebar", 'webbox'),
            'id'            => "sidebar-blog",
            'description'   => __( 'Add widgets here to appear in your blog sidebar.', 'webbox' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
        )
     );   
    for ($i=1;$i<=4;$i++){
    register_sidebar(
        array(
            'name'          => __( "Footer widget number: {$i}", 'webbox'),
            'id'            => "footer-{$i}",
            'description'   => __( 'Add widgets here to appear in your footer.', 'webbox' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
        )
        );
    }
}
add_action( 'widgets_init', 'theme_widgets' );

function wpdocs_custom_excerpt_length( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
