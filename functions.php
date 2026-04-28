<?php
/**
 * Saint Paul JR Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SaintPaulJR_Theme
 */

if ( ! function_exists( 'saintpauljr_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function saintpauljr_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Saint Paul JR Theme, use a find and replace
         * to change 'saintpauljr' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'saintpauljr', get_template_directory() . '/languages' );
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded &amp;lt;title&amp;gt; tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
add_theme_support( 'post-thumbnails' );

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
    'primary-menu' =&amp;gt; esc_html__( 'Primary Menu', 'saintpauljr' ),
) );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
) );

// Set up the WordPress core custom background feature.
add_theme_support( 'custom-background', apply_filters( 'saintpauljr_custom_background_args', array(
    'default-color' =&amp;gt; 'ffffff',
    'default-image' =&amp;gt; '',
) ) );

// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

/**
 * Add support for core custom logo.
 *
 * @link https://codex.wordpress.org/Theme_Logo
 */
add_theme_support( 'custom-logo', array(
    'height'      =&amp;gt; 250,
    'width'       =&amp;gt; 250,
    'flex-width'  =&amp;gt; true,
    'flex-height' =&amp;gt; true,
) );
}
endif;
add_action( 'after_setup_theme', 'saintpauljr_setup' );

/**
 * Enqueue scripts and styles.
 */
function saintpauljr_scripts() {
    wp_enqueue_style( 'saintpauljr-style', get_stylesheet_uri(), array(), '1.0.0' );
// Exemplo de como enfileirar um script JS personalizado
// wp_enqueue_script( 'saintpauljr-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.0', true );

if ( is_singular() &amp;&amp; comments_open() &amp;&amp; get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
}
}
add_action( 'wp_enqueue_scripts', 'saintpauljr_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

// Adicione outras funções personalizadas aqui
