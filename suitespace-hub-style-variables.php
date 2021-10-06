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
    <?php if( get_field('hero_banner') ): ?>
    background-image:url(<?php the_field('hero_banner'); ?>);
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
    background-image:url('/wp-content/uploads/2021/06/yellow-wavy-background-laptop-scaled.jpg');
    /* If there's a support section background image override the default */
    <?php if( get_field('support_section_background') ): ?>
        background-image:url(<?php the_field('support_section_background'); ?>);
    <?php endif; ?>
    <?php if( get_field('support_section_background_fallback_color') ): ?>
        background-color:<?php the_field('support_section_background_fallback_color')?>;
    <?php endif; ?> 
}

/* ====
TABLET STYLES
==== */
@media (min-width:768px) and (max-width:1024px) {
    .vsg-hero-section {
        <?php if( get_field('hero_tablet_background') ):?>
        background-image:url(<?php the_field('hero_tablet_background') ?>);
        <? endif; ?>
    }
}
</style>