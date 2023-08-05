<?php

/**
 * The template for displaying header.
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
$site_name = get_bloginfo('name');
$tagline   = get_bloginfo('description', 'display');

$header_nav_menu = wp_nav_menu([
    'theme_location' => 'menu--header',
    'fallback_cb' => false,
    'echo' => false,
]);
?>

<header id="header" class="header" role="banner">

    <div class="header__branding">
        <a href="<?php echo esc_url(home_url('/')); ?>" title="Home" rel="home">
            <?php echo esc_html($site_name); ?>
        </a>
    </div>

    <?php if ($header_nav_menu) { ?>
        <nav class="header__navigation">
            <?php echo $header_nav_menu; ?>
        </nav>
    <?php } ?>
</header>