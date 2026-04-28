<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SaintPaulJR_Theme
 */

?>
&lt;footer id="colophon" class="site-footer"&gt;
    &lt;div class="site-info"&gt;
        &lt;a href="&lt;?php echo esc_url( __( 'https://wordpress.org/', 'saintpauljr' ) ); ?&gt;"&gt;
            &lt;?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf( esc_html__( 'Proudly powered by %s', 'saintpauljr' ), 'WordPress' );
            ?&gt;
        &lt;/a&gt;
        &lt;span class="sep"&gt; | &lt;/span&gt;
        &lt;?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf( esc_html__( 'Theme: %1$s by %2$s.', 'saintpauljr' ), 'Saint Paul JR Theme', '&lt;a href="https://saintpauljr.com.br/"&gt;Equipe Saint Paul JR&lt;/a&gt;' );
        ?&gt;
    &lt;/div&gt;&lt;!-- .site-info --&gt;
&lt;/footer&gt;&lt;!-- #colophon --&gt;
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
