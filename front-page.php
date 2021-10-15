<?php 
get_header();

//Declare grouped theme options as variables for use in the template
$supportContentOptions = get_field('support_content_options', 'options');
$supportMessage = $supportContentOptions['support_message'];
$supportMessageColor = $supportContentOptions['support_message_text_color'];
$supportSectionBackgroundOptions = get_field('support_background_options', 'options');
$supportBackgroundImageURL = $supportSectionBackgroundOptions['support_section_background_img'];
$supportBackgroundColor = $supportSectionBackgroundOptions['support_section_background_color'];
?>

<body class="vsg-body">
<!-- NEED TO COME BACK TO AND FIX SPACING/LAYOUT OF THIS SECTION -->
<section class="vsg-hero-section">
	<div class="banner-grid-wrapper">
		<div class="vsg-container vsg-banner-text">
			<?php if ( get_field('banner_heading', 'option') ): ?>
				
				<h1 class="banner-title"><?php the_field('banner_heading', 'option'); ?></h1>

			<?php else: ?>
				<img src="<?php echo get_template_directory_uri() . '/images/suitespace-io-logo-with-script.png' ?>">
			<?php endif; ?>
				<?php if ( get_field('banner_message', 'option') ): ?>
				<p class="vsg-heading banner-subheading"><?php the_field('banner_message', 'option') ?></p>
			<?php else: ?> 
				<p class="vsg-heading banner-subheading">MARKETING HUB</p>
			<?php endif; ?>
			
		</div>
		<!-- <div class="vsg-container in-col-spacer">
			<a class="vsg-btn" href="#support-section-wrapper">GET SUPPORT</a>
		</div> -->
	</div>
	<div class="background-overlay"></div>
</section>

<!-- START MODULE BLOCKS -->

<section class="module-section-wrapper">
<?php
// Check rows exists.
if( have_rows('hub_modules', 'option') ):

    // Loop through rows.
    while( have_rows('hub_modules', 'option') ) : the_row(); 

				// Declaring Module Variables and assigning the values given in the page edit screen in the custom fields
        $module_title = get_sub_field('module_title', 'option');
				$module_title_color = get_sub_field('module_title_color', 'option');
        $module_icon = get_sub_field('module_icon', 'option');
        $module_button_text = get_sub_field('module_button_text', 'option');
        $module_button_link = get_sub_field('module_button_link', 'option');
				$module_background_color = get_sub_field('module_background_color', 'option');
				$use_background_img = get_sub_field('use_background_image', 'option');
				$module_background_img = get_sub_field('module_background_image', 'option');
				$module_background_overlay = get_sub_field('module_background_overlay', 'option');
        ?>
        
        <div class="module-card-wrapper">
          <a href="<? echo $module_button_link; ?>" class="module-image-link" target="_blank">
					<?php if( $module_icon ): // If there's an icon included load the image and split the grid to include it, otherwise just load the title ?>  
					<div class="module-title-wrapper" style="grid-template-columns:1fr 4fr;<?php 
						if($use_background_img == 'true' ): ?>
						background-image:url(<?php echo $module_background_img; ?>)
						<?php else: ?>
						background-color:<?php echo $module_background_color; 
						endif; ?>;">
						<div class="vsg-hub-inner-col module-icon">
							<img src="<?php echo $module_icon; ?>">
						</div>
					<?php else: ?>
						<div class="module-title-wrapper" style="text-align:center;background-color:<?php echo $module_background_color; ?>;">
					<?php endif; ?>
              <div class="vsg-hub-inner-col module-title">
                <h3 class="hub-heading vsg-white" style="color:<?php echo $module_title_color; ?>;">
                  <?php echo $module_title; ?>
                </h3>
              </div> 
							<div class="module-background-overlay" style="background-color:<?php echo $module_background_overlay; ?>;"></div>
            </div>
			
          </a>
          <div class="module-features-wrapper">
            <div class="module-button-wrapper dam-features-title">
							<a href="<?php echo $module_button_link ?>" class="hub-block-btn" target="_blank"><?php echo $module_button_text ?></a>
            </div>
          </div>
        </div>

<?php 

		// End loop.
    endwhile;

// End if.
endif; 

?>

</section>

<?php 
$announcement_loop = new WP_Query(
	array(
		'post_type' => 'hub_announcements', // This is the name of your post type - change this as required,
		'posts_per_page' => 4 // This is the amount of posts per page you want to show
	)
);
if ( $announcement_loop->have_posts() ):?>
<section class="vsg-section blog-feed-section">

	<h3 class="blog-heading vsg-black">
		<?php if(get_field('post_feed_title', 'option')): 
		the_field('post_feed_title', 'option');
		else: ?>
		Announcements
		<?php endif; ?>
	</h3>


	
	<div class="vsg-container announcement-feed-wrapper"> <!-- BEGIN ANNOUNCEMENTS LOOP -->
		<?php
			$announcement_loop = new WP_Query(
				array(
					'post_type' => 'hub_announcements', // This is the name of your post type - change this as required,
					'posts_per_page' => 4 // This is the amount of posts per page you want to show
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
	<div class="button-wrapper">
			<a href="/announcements" class="hub-block-btn">View All Announcements</a>
	</div>
</section>
<?php endif; ?>
<?php
	if( $supportMessage  ): ?>
	<section id="support-section-wrapper" class="vsg-section vsg-form-section">
		<div class="vsg-container">
			<h3 class="vsg-heading">
				Need Help?
			</h3>
			<div class="support-content-wrapper">
				<p class="support-message">
					<?php echo $supportMessage; ?>
				</p>
			</div>
		</div>
	</section>
<?php endif; ?>
<!-- <section class="vsg-section footer-section">
	<div class="vsg-container">
		<div class="vsg-col">
			<a href="https://vsg360.com" target="_blank">
				<img src="/wp-content/uploads/2021/06/vsg-logo-white.svg"></a>
		</div>
		<div class="vsg-col">
			<p class="footer-copy vsg-white">
				<a href="http://maps.google.com/?q=1702 Tacoma Ave So. Suite A
				Tacoma, WA 98402" target="_blank">VSG Marketing<br>
				1702 Tacoma Ave So. Suite A<br>
					Tacoma, WA 98402</a>
			</p>
		</div>
		<div class="vsg-col">
			<p class="footer-copy vsg-white">
				Office: <a href="tel:253-680-3980">253-680-3980</a><br>
				Email: <a href="mailto:applied@vsg360.com">applied@vsg360.com</a><br>
				Toll-Free: <a href="tel:877-480-2877">877-480-2877</a>
			</p>
		</div>
		<div class="vsg-col">
			<div class="vsg-inner-section">
				<div class="vsg-social-col">
					<a href="https://vsg360.com" target="_blank">
						<img src="/wp-content/uploads/2021/06/ss-crm-icon-gray.svg"></a>
				</div>
				<div class="vsg-social-col">
					<a href="https://vsg360.com" target="_blank">
						<img src="/wp-content/uploads/2021/06/ss-crm-icon-gray.svg"></a>
				</div>
				<div class="vsg-social-col">
					<a href="https://vsg360.com" target="_blank">
						<img src="/wp-content/uploads/2021/06/ss-crm-icon-gray.svg"></a>
				</div>
			</div>
		</div>
	</div>
	</section> -->
	</body>

	<?php get_footer(); ?>