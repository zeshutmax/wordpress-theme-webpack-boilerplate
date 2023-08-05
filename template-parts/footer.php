<?php

/**
 * The template for displaying footer.
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$footer_nav_menu = wp_nav_menu([
    'theme_location' => 'menu--footer',
    'fallback_cb' => false,
    'echo' => false,
]);
?>

<footer id="footer" class="footer" role="contentinfo">
    <?php if ($footer_nav_menu) { ?>
        <nav class="footer__navigation">
            <?php echo $footer_nav_menu; ?>
        </nav>
    <?php } ?>
</footer>