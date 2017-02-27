<?php

function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_theme_support( 'custom-logo' );
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
