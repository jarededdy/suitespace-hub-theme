<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Suitespace_Hub
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<?php include 'suitespace-hub-style-variables.php'; ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header>
		<div id="header-content-wrapper">
			<div class="logo-wrapper">
				<a class="header-logo-link" href="/">
					<img src="<?php the_field('header_logo', 'option'); ?>" id="logo" />
				</a>
			</div>
			<div class="mobile-menu-toggle" onClick='showMobileMenu()'>
				<i class="fas fa-plus"></i>
			</div>
			<div class="nav-wrapper desktop-nav">
				<?php wp_nav_menu( 
					array(
						'menu_id' => 'primary-menu'
					)
				 ); ?>
			</div>
				
		</div>
		<div class="nav-wrapper mobile-nav hide-mobile-nav">
				<?php wp_nav_menu( $args ); ?>
		</div>
	</header>
