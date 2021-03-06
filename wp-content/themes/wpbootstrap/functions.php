<?php

function register_header_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_header_menu' );

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

// Bootstrap navigation
function bootstrap_nav()
{
    wp_nav_menu( array(
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
    );
}

function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_theme_support( 'custom-logo' );
add_action('wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery');

function add_theme_scripts() {
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>
<?php
    /**
    * Make Header Shrink on Page Scroll
    **/

    add_action ('wp_footer','vr_shrink_head',1);
    function vr_shrink_head() {
    ?>

    <script>
        jQuery(document).ready(function($) {
            $(window).scroll(function () {
                if ($(window).scrollTop() > 100) {
                    $('header').addClass('shrink');
                }
                else{
                    $('header').removeClass('shrink');
                }
            });
        });
    </script>

<?php
}
