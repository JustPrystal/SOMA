<?php 

define('INCLUDES_DIR', get_template_directory() . '/includes/');

include_once INCLUDES_DIR . 'general-wp-setup.php';
include_once INCLUDES_DIR . 'enqueue.php';
include_once INCLUDES_DIR . 'acf-sync.php';
include_once INCLUDES_DIR . 'getBlocks.php';
include_once INCLUDES_DIR . 'style-editor.php';
include_once INCLUDES_DIR . 'required-plugins.php';

add_action('template_redirect', function() {

    // If cookie not set and not already on the check-in page
    if (empty($_COOKIE['checkin_done']) && !is_page('booking-notice')) {
        wp_redirect(home_url('/booking-notice/'));
        exit;
    }
});

