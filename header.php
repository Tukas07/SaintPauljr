<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SaintPaulJR_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
&lt;?php wp_head(); ?&gt;
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'saintpauljr' ); ?></a>
&lt;header id="masthead" class="site-header"&gt;
    &lt;div class="site-branding"&gt;
        &lt;?php
        the_custom_logo();
        if ( is_front_page() &amp;&amp; is_home() ) :
            ?&gt;
            &lt;h1 class="site-title"&gt;&lt;a href="&lt;?php echo esc_url( home_url( '/' ) ); ?&gt;" rel="home"&gt;&lt;?php bloginfo( 'name' ); ?&gt;&lt;/a&gt;&lt;/h1&gt;
            &lt;?php
        else :
            ?&gt;
            &lt;p class="site-title"&gt;&lt;a href="&lt;?php echo esc_url( home_url( '/' ) ); ?&gt;" rel="home"&gt;&lt;?php bloginfo( 'name' ); ?&gt;&lt;/a&gt;&lt;/p&gt;
            &lt;?php
        endif;
        $saintpauljr_description = get_bloginfo( 'description', 'display' );
        if ( $saintpauljr_description || is_customize_preview() ) :
            ?&gt;
            &lt;p class="site-description"&gt;&lt;?php echo $saintpauljr_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?&gt;&lt;/p&gt;
        &lt;?php endif; ?&gt;
    &lt;/div&gt;&lt;!-- .site-branding --&gt;
&amp;lt;nav id="site-navigation" class="main-navigation"&amp;gt;
    &amp;lt;button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"&amp;gt;&amp;lt;?php esc_html_e( 'Primary Menu', 'saintpauljr' ); ?&amp;gt;&amp;lt;/button&amp;gt;
    &amp;lt;?php
    wp_nav_menu( array(
        'theme_location' =&amp;gt; 'primary-menu',
        'menu_id'        =&amp;gt; 'primary-menu',
    ) );
    ?&amp;gt;
&amp;lt;/nav&amp;gt;&amp;lt;!-- #site-navigation --&amp;gt;
&lt;/header&gt;&lt;!-- #masthead --&gt;
