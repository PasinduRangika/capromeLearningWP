<?php
function add_security_headers() {
    header("Strict-Transport-Security: max-age=2592000; includeSubDomains");
    header("X-Content-Type-Options: nosniff");
    header("X-XSS-Protection: 1; mode=block");
    header("Content-Security-Policy: ");
    header("Permissions-Policy: ");
}

add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('wpcf7_recaptcha_threshold', function() {
    return 0.4; // Set the score threshold to a lower value
});
add_filter('widget_text', 'do_shortcode');

add_action('send_headers', 'add_security_headers');


function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Caprome Header Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );

?>