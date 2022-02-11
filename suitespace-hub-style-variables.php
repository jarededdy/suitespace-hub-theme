<?php

// Declaring grouped options as variables
$brand_color = get_field('brand_colors', 'option');
$primary_bc = $brand_color['primary'];
$secondary_bc = $brand_color['secondary'];
$button_bc = $brand_color['button_bg_color'];
$button_text_color = $brand_color['button_text_color'];
$supportContentOptions = get_field('support_content_options', 'options');
$supportMessage = $supportContentOptions['support_message'];
$supportMessageColor = $supportContentOptions['support_message_text_color'];
$supportSectionBackgroundOptions = get_field('support_background_options', 'options');
$supportBackgroundImageURL = $supportSectionBackgroundOptions['support_section_background_img'];
$supportBackgroundColor = $supportSectionBackgroundOptions['support_section_background_color'];
$heroBannerOverlay = get_field('banner_background_overlay', 'options');
?>

<style>

/* ====
GLOBAL STYLES
==== */

a.hub-block-btn,
button.ss-404-btn {
    background: <?php echo $button_bc; ?>;
    border:1px solid <?php echo $button_bc; ?>;
    color: <?php echo $button_text_color; ?>;
}
a.hub-block-btn:hover,
button.ss-404-btn:hover {
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
MODULE STYLES
==== */



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
	<?php if( $heroBannerOverlay ): ?>
	.background-overlay {
		background-color: <?php echo $heroBannerOverlay; ?>;
	}
	<?php endif; ?>

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
    <?php if( $supportMessageColor ): ?>
        color: <?php echo $supportMessageColor; ?>;
    <?php else: ?>
        color:#fff;
    <?php endif; ?>
    
    /* Check if there's a set background image, if not check for fallback color, if niether set the background to black */
    <?php if( $supportBackgroundImageURL ): ?>
        background-image:url(<?php echo $supportBackgroundImageURL; ?>);
    <?php elseif( $supportBackgroundColor ): ?>
        background-color:<?php echo $supportBackgroundColor; ?>;
    <?php else: ?>
        background-image:url(<?php echo get_template_directory_uri() . '/images/yellow-wavy-background-laptop-scaled.jpg'; ?>);
    <?php endif; ?>
}
</style>