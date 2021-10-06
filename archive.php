<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Suitespace_Hub
 */

get_header();
?>
<style>
	.blog-feed-section {
		background-color: #fff;
	}
</style>

	<main id="announcement-page" class="site-main">
		<section class="vsg-section blog-feed-section">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
				<div class="vsg-container">
					<h3 class="blog-heading vsg-black">
						Announcements
					</h3>
				</div>
				</header><!-- .page-header -->

			

	
		<div class="vsg-container announcement-feed-wrapper"> <!-- BEGIN ANNOUNCEMENTS LOOP -->
			<?php
				$announcement_loop = new WP_Query(
					array(
						'post_type' => 'hub_announcements', // This is the name of your post type - change this as required,
						'posts_per_page' => 10 // This is the amount of posts per page you want to show
					)
				);
				while ( $announcement_loop->have_posts() ) : $announcement_loop->the_post();
				// The content you want to loop goes in here:
				$announcement_thumb_url = get_the_post_thumbnail_url();
				$announcement_title = get_the_title();
				$announcement_content = get_the_content();
				$announcement_link = get_the_permalink();
			?>
			
			<div class="vsg-col">
				<a href="<?php echo $announcement_link ?>">
					<img src="<?php echo $announcement_thumb_url ?>">
				</a>
				<a class="announcement-title" href="<?php echo $announcement_link ?>">
					<h4 class="vsg-blog-title">
						<?php echo $announcement_title ?>
					</h4>
				</a>
				<p class="announcement-excerpt">
					<?php echo wp_trim_words($announcement_content, $num_words = 10); ?>
				</p>
				<a class="read-more-link" href="<?php echo $announcement_link ?>">Read More</a>
			</div>
			
			<?php endwhile;
				wp_reset_postdata();
			?>
			</div> <!-- END ANNOUNCEMENTS LOOP -->
				
				<?php
				// /* Start the Loop */
				// while ( have_posts() ) :
				// 	the_post();

				// 	/*
				// 	 * Include the Post-Type-specific template for the content.
				// 	 * If you want to override this in a child theme, then include a file
				// 	 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				// 	 */
				// 	get_template_part( 'template-parts/content', get_post_type() );

				// endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</section>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
