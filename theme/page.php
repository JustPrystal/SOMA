<?php

    get_header();
    get_blocks();
    if ( !is_page( 'booking-notice' ) ) {
        get_footer();
    }

?>
