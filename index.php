<?php

/**
 * The site's entry point.
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
the_content();
get_footer();
