<?php

// Declaring brand colors for the CSS
$brand_color = get_field('brand_colors', 'option');
$primary_bc = $brand_color['primary'];
$secondary_bc = $brand_color['secondary'];
$button_bc = $brand_color['button_bg_color'];
$button_text_color = $brand_color['button_text_color'];
?>

<style>

/* ====
GLOBAL STYLES
==== */

a.hub-block-btn {
    background: <?php echo $button_bc; ?>;
    border:1px solid <?php echo $button_bc; ?>;
    color: <?php echo $button_text_color; ?>;
}
a.hub-block-btn:hover {
    background: <?php echo $button_text_color; ?>;
    color: <?php echo $button_bc; ?>;
}
#hub-announcement a {
	text-decoration:none;
	color: <?php echo $primary_bc; ?>;
}

/* ====
MENU STYLES
==== */
.menu li.menu-item a:hover {
    color:<?php echo $primary_bc; ?>;
}
.mobile-menu-toggle {
    background-color:<?php echo $button_bc; ?>;
    color:<?php echo $button_text_color; ?>;
}

/* ====
ANNOUNCEMENT SINGLE POST STYLES
==== */
.announcement-post-nav {
	background: <?php echo $button_bc; ?>;
}

/* ====
BANNER STYLES
==== */
.vsg-hero-section {
    <?php if( get_field('hero_banner', 'option') ): ?>
        background-image:url(<?php the_field('hero_banner', 'option'); ?>);
    <?php elseif( get_field('banner_bg_color', 'option') ): ?>
        background-color:<?php the_field('banner_bg_color', 'option'); ?>;
    <?php else: ?>
        background-image:url(<?php echo get_template_directory_uri() . '/images/ss-header-bkg-laptop-scaled.jpg'; ?>);
    <?php endif; ?> 
}

/* ====
MARKETING TECHNOLOGY UPSELL SECTION STYLES
==== */
.martech-promo-section a.hub-block-btn:hover {
    background:<?php echo $primary_bc; ?>;
    border:1px solid <?php echo $primary_bc; ?>;
}

/* ====
ANNOUNCEMENTS FEED SECTION STYLES
==== */
a.read-more-link, a.announcement-title {
    color: <?php echo $primary_bc; ?>;
}
a.read-more-link {
    color: <?php echo $secondary_bc; ?>;
}

/* ====
SUPPORT FORM SECTION STYLES
==== */
section.vsg-section.vsg-form-section {
    
    /* Check if there's a set support section text color, if not set it to white */
    <?php if( get_field('support_text_color', 'option') ): ?>
        color: <?php thefield('support_text_color', 'option'); ?>;
    <?php else: ?>
        color:#fff;
    <?php endif; ?>
    
    /* Check if there's a set background image, if not check for fallback color, if niether set the background to black */
    <?php if( get_field('support_section_background', 'option') ): ?>
        background-image:url(<?php the_field('support_section_background', 'option'); ?>);
    <?php elseif( get_field('support_section_background_fallback_color', 'option') ): ?>
        background-color:<?php the_field('support_section_background_fallback_color', 'option')?>;
    <?php else: ?>
        background-image:url(<?php echo get_template_directory_uri() . '/images/yellow-wavy-background-laptop-scaled.jpg'; ?>);
    <?php endif; ?>
}