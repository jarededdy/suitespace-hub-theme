<?php 
get_header();
?>
<style>

/* ========
GLOBAL STYLES 
======== */

/* IMPORTING FONTS */
@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&display=swap');

	h1,
	h2,
	h3,
	h4,
	h5,
	p,
	a {
		font-family:'Nunito Sans', sans-serif;
	}
	.vsg-white {
		color:#fff;
	}
	.vsg-black {
		color:#000;
	}
	.fifteenpx-top {
		padding-top:15px;
	}
	.vsg-container a {
		text-decoration:none;
	}
	.site-footer {
		display:none;
	}
	a.hub-block-btn {
		background: #00aeff;
		padding: 15px 30px;
		border:1px solid #00aeff;
		border-radius: 28.5px;
		display: block;
		text-align: center;
		margin: 0 auto;
		color: #FFFFFF;
		font-size: 20px;
		font-weight: bold;
		letter-spacing: 0;
		line-height: 27px;
		display:inline-block;
		transition: .3s;
		text-transform:uppercase;
	}
	a.hub-block-btn:hover {
		background: #fff;
		color: #00aeff;
	}
	.button-wrapper {
		display:block;
		width:100%;
		text-align:center;
	}
	/* ========
	BANNER STYLES 
	======== */
	.vsg-hero-section {
		background-image:url('/wp-content/uploads/2021/07/ss-header-bkg-laptop-scaled.jpg');
	/* If there's a hero banner background image override the default */
		<?php if( get_field('hero_banner') ): ?>
		background-image:url(<?php the_field('hero_banner'); ?>);
		<?php endif; ?> 
		background-size:cover;
		min-height:400px;
		display:flex;
		align-items:center;
	}
	.banner-grid-wrapper {
		width:100%;
	}
	.banner-subheading {
		color:#fff;
		margin-left:10px;
		margin-top:-10px;
	}
	.vsg-banner-text img {
		max-width:500px;
		width:100%;
	}
	.vsg-section {
		padding:85px 0;
	}
	.vsg-container {
		max-width:1140px;
		margin:0 auto;
	}
	a.vsg-btn {
		background: #fff200;
		border-radius: 23.5px;
		display: block;
		max-width: 200px;
		text-align: center;
		padding: 15px 0px;
		color: #262626;
		font-size: 15px;
		font-weight: bold;
		letter-spacing: 1px;
		line-height: 20px;
	}
	.in-col-spacer {
		margin-top:35px;
	}

  /* =========
  MODULE SECTION STYLES
  ======== */
  .module-section-wrapper {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
    max-width: 1140px;
    margin: 50px auto;
    grid-gap: 20px;
		row-gap: 20px;
  }
  .module-title-wrapper {
    display: grid;
		grid-template-columns: 1fr 4fr;
		gap:20px;
    background:#262626;
    padding:45px;
    min-height:200px;
		align-items:center;
  }
  .module-title-wrapper.inactive-module {
		background: #cdcdcd;
    border: 3px dashed #979797;
		color: #414141;
  }

	h3.hub-heading {
		font-size: 20px;
		font-weight: bold;
		letter-spacing: 0;
		line-height: 27px;
		margin-block-start: 0;
		margin-bottom:0px;
		text-transform: uppercase;
	}

  /* ========
  FEATURE STYLES
  ======== */

  .dam-features-list, .print-mail-features-list, .markauto-features-list, .crm-features-list, .web-dash-features-list {
	  display:none;
  }
  .feature-accordion-title {
    display:grid;
    grid-template-columns: 1fr 1fr;
    padding:30px;
    background: #EFEFEF;
		font-size:20px;
		font-family: 'Nunito Sans', sans-serif;
  }
	.module-button-wrapper {
		display:grid;
    grid-template-columns: 1fr;
    padding:15px;
    background: #EFEFEF;
		font-size:20px;
		font-family: 'Nunito Sans', sans-serif;
	}
	.module-btn {
    text-align:right;
    cursor:pointer;
		text-transform:uppercase;
  }
  .feature-accordion-btn {
    text-align:right;
    cursor:pointer;
  }
  .feature-accordion-title i {
    margin-right:15px;
	background-color:#00AEEF;
	padding:7px;
	clip-path: circle(15px);
	color:#fff;
  }
  .feature-accordion-content {
	  padding:0 30px 30px 30px;
	  background:#efefef;
  }
  .feature-list {
    padding:15px 0 0 0;
    background:#efefef;
  }
	.feature-list li:last-child {
		margin-bottom:10px;
	}
  li.feature-list-item {
    display: grid;
    grid-template-columns: 1fr 6fr;
    padding: 10px 0 5px 0;
  }
  li.feature-list-item i {
	  color:#00AEEF;
		padding-top:5px;
  }
  .view-features {
    display:inline-block;
  }
  .hide-features {
    display:none;
  }
  .features-title-text {
    font-family: 'Nunito Sans', sans-serif;
  }
  .feature-accordion-content a.hub-block-btn {
	  display:block;
  }

  /* ========
  RSS FEED STYLES
  ======== */

  .rss-feed-wrapper {
	  display:grid;
	  grid-template-columns: 1fr 1fr 1fr 1fr;
	  max-width:1140px;
	  margin:50px auto;
	  grid-gap:20px;
  }

  /* ========
  MARKETING TECHNOLOGY UPSELL STYLES
  ======== */
  .martech-promo-section .vsg-inner-section {
	  display:grid;
		grid-template-columns: repeat(6, 1fr);
		gap: 30px;
		padding:50px 0;
	}
	section.vsg-section.martech-promo-section {
		background-image:url('/wp-content/uploads/2021/06/black-wavy-background-laptop-scaled.jpg');
		min-height:400px;
	}
	.martech-promo-section a.hub-block-btn {
		background: #fff200;
		color: #262626;
		font-size: 15px;
		font-weight: bold;
		letter-spacing: 1px;
		line-height: 20px;
		margin-top: 20px;
		border:1px solid #fff200;
		display:inline-block;
		padding:15px 30px;
	}
	.martech-promo-subheading {
		font-family:'Nunito Sans';
		font-size:30px;
		color:#fff;
	}
	.martech-promo-section a.hub-block-btn:hover {
		background:#00aeff;
		border:1px solid #00aeff;
		color:#fff200;
	}
	h3.vsg-heading, .blog-heading {
		font-size: 40px;
		font-weight:800;
		letter-spacing: 0;
		line-height: 55px;
		text-transform:uppercase;
	}
	.marketing-technology-logo-grid-item {
		text-align:center;
	}
	.marketing-technology-logo-grid-item img {
		display:flex;
		max-width:100%;
		margin:0 auto;
		align-items:center;
	}

  /* ========
  ANNOUNCEMENT FEED SECTION
  ======== */

  .blog-feed-section {
	  padding:75px 30px;
  }
  .blog-heading {
	  padding:25px 0;
  }
  a.read-more-link, a.announcement-title {
		color: #00AEEF;
		font-size: 23px;
		font-weight: 500;
		letter-spacing: 0;
		line-height: 31px;
	}
  a.read-more-link:hover {
	  text-decoration:underline;
  }
  .vsg-section.blog-feed-section .vsg-container {
		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
		gap: 25px;
	}
	section.vsg-section.blog-feed-heading-section {
		padding: 85px 0 20px 0;
	}
	.vsg-section.blog-feed-section .vsg-container img {
		width:100%;
	}
	.vsg-container.announcement-feed-wrapper {
		margin-bottom:50px;
	}
	a.read-more-link {
		text-decoration:underline;
	}

  /* ========
  SUPPORT FORM SECTION
  ======== */
  .gform_wrapper.gravity-theme .gfield_label {
	  font-family:'Nunito Sans', sans-serif;
  }
	input[type=date], input[type=email], input[type=number], input[type=password], input[type=search], input[type=tel], input[type=text], input[type=url], select, textarea {
		border:none;
	}
  input#gform_submit_button_1 {
	  display:block;
	  width:100%;
	  max-width:500px;
	  border-radius:50px;
	  border:none;
	  background:#00AEEF;
	  color:#fff;
	  font-family:'Nunito Sans', sans-serif;
	  font-size:20px;
	  font-weight:bold;
	  margin:0 auto;
  }
  section.vsg-section.vsg-form-section {
		background-image:url('/wp-content/uploads/2021/06/yellow-wavy-background-laptop-scaled.jpg');
		/* If there's a support section background image override the default */
		<?php if( get_field('support_section_background') ): ?>
		background-image:url(<?php the_field('support_section_background'); ?>);
		<?php endif; ?>
		<?php if( get_field('support_section_background_fallback_color') ): ?>
			background-color:<?php the_field('support_section_background_fallback_color')?>;
		<?php endif; ?> 
		min-height:400px;
		background-size:cover;
		padding:20px;
	}
	input#gform_submit_button_1 {
    padding: 15px;
	}
  /* FOOTER STYLES */
  /* .vsg-section.footer-section {
		background:#000;
	}
	.vsg-section.footer-section .vsg-container {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr 1fr;
		gap: 25px;
		align-items:center;
	}
	.vsg-section.footer-section .vsg-inner-section img {
		width: 40px;
		float:right;
	}

    .vsg-section.footer-section .vsg-inner-section {
		grid-template-columns: 1fr 1fr 1fr;
	}
	.footer-copy a {
		color: #fff;
	}
  @media (max-width:767px) {
	h3.vsg-heading, .blog-heading {
		font-size:32px;
	}
  } */

/*Tablet CSS*/
	@media (min-width:768px) and (max-width:1024px) {
		.vsg-hero-section {
			background-image:url('/wp-content/uploads/2021/06/ss-header-bkg-tablet.jpg');
 			padding-left:40px;
		}
		.vsg-block-row {
			grid-template-columns: 1fr 1fr;
			padding:0 30px;
		}
		.vsg-block-row .vsg-hub-col {
			padding-right: 20px;
		}
		.martech-promo-section h3.vsg-heading.vsg-white,
		.vsg-body p.big-copy {
			text-align: center;
		}
		.martech-promo-section .vsg-inner-section {
			grid-template-columns: 1fr 1fr 1fr;
			grid-template-rows: 1fr 1fr;
			grid-row-gap: 50px;
			padding: 50px 30px;
		}
		section.vsg-section.blog-feed-heading-section {
			padding: 80px 30px 20px;
		}
		.vsg-section.blog-feed-section {
			padding: 0 30px 30px 30px;
		}
		.module-section-wrapper {
			padding:20px;
			margin:0px;
		}
		.martech-promo-subheading {
			text-align:center;
		}
		.vsg-container.announcement-feed-wrapper {
		margin-bottom:30px;
	}
	}	

	/* MOBILE CSS */
	
	@media (max-width:767px) {
		.vsg-hero-section {
    padding: 30px;
	min-height:250px;
}

h1.vsg-heading.banner-subheading {
    font-size: 30px;
    margin-left: 5px;
}
		h3.vsg-heading, .blog-heading {
			font-size:34px;
		}
		.martech-promo-section {
			padding:30px;
		}
		.martech-promo-section .vsg-inner-section {
			grid-template-columns:1fr 1fr;
		}
		.module-section-wrapper {
			padding:30px;
			margin:0px;
			row-gap:30px;
		}
		.feature-accordion-title {
    padding: 20px;
    grid-template-columns: 1fr 2fr;
}
section.vsg-section.vsg-form-section {
	padding:30px;
}
section.module-section-wrapper {
    grid-template-columns: repeat(auto-fit, minmax(315px, 1fr));
}
.vsg-container.announcement-feed-wrapper {
		margin-bottom:30px;
	}
	.martech-promo-subheading {
		font-size:20px;
	}
	.martech-promo-section a.hub-block-btn, a.hub-block-btn {
		padding:15px;
	}
	.blog-feed-section {
    padding: 20px 30px 30px 30px;
	}
	h3.vsg-heading, .blog-heading {
		padding:0px;
		margin-top:0px;
	}
}
</style>
<script>
function showVSGFeatures(featureClass, featureTitle) {
  jQuery( "." + featureClass ).slideToggle( "slow" );
   jQuery("." + featureTitle).find('i').toggleClass('fa-minus fa-plus');
   jQuery("." + featureTitle + " .feature-open").toggleClass('view-features hide-features');
   jQuery("." + featureTitle + " .feature-close").toggleClass('view-features hide-features');

   //use event target and event listener combo to generically pull data from the element clicked

}
</script>
<body class="vsg-body">
<!-- NEED TO COME BACK TO AND FIX SPACING/LAYOUT OF THIS SECTION -->
<section class="vsg-hero-section">
	<div class="banner-grid-wrapper">
		<div class="vsg-container vsg-banner-text">
			<img src="/wp-content/uploads/2021/08/suitespace-io-logo-with-script.png">
			<?php if ( get_field('banner_message') ): ?>
				<h1 class="vsg-heading banner-subheading"><?php the_field('banner_message') ?></h1>
			<?php else: ?> 
				<h1 class="vsg-heading banner-subheading">MARKETING HUB</h1>
			<?php endif; ?>
		</div>
		<!-- <div class="vsg-container in-col-spacer">
			<a class="vsg-btn" href="#support-section-wrapper">GET SUPPORT</a>
		</div> -->
	</div>
</section>

<!-- START MODULE BLOCKS -->

<section class="module-section-wrapper">

    <div class="module-card-wrapper">
			<a href="https://vsg360.getbynder.com/login/" target="_blank">
				<div class="module-title-wrapper">
					
								<div class="vsg-hub-inner-col">
									<img src="/wp-content/uploads/2021/06/ss-dam-icon-color.svg">
								</div>
								<div class="vsg-hub-inner-col">
									<h3 class="hub-heading vsg-white">
										Digital Asset Manager
									</h3>
									<img src="/wp-content/uploads/2021/06/powered-by-bynder.svg">
								</div>
							
				</div>
			</a>
      <div class="module-features-wrapper">
        <div class="feature-accordion-title dam-features-title" onclick="showVSGFeatures('dam-features-list', 'dam-features-title')">
          <span class="features-title-text">Features</span>
          <span class="feature-accordion-btn">
            <i class="fas fa-plus"></i>
            <span class="feature-open hide-features">View Less</span>
            <span class="feature-close view-features">View More</span>
          </span>
        </div>
        <div class="feature-accordion-content dam-features-list">
          <ul class="feature-list">
             <li class="feature-list-item"><i class="fas fa-plus"></i> <p>Easily manage & distribute digital content.</p></li>
             <li class="feature-list-item"><i class="fas fa-plus"></i> <p>Create collections to share files internally & externally.</p></li>
             <li class="feature-list-item"><i class="fas fa-plus"></i> <p>Control access and usage rights to your company's digital files.</p></li>
          </ul>
		  <a href="https://vsg360.getbynder.com/login/" class="hub-block-btn" target="_blank">Go To Your DAM</a>
        </div>
      </div>
    </div>

    <div class="module-card-wrapper">
		<a href="https://vsgstorefront.com/uStore/login.aspx?StoreId=85" target="_blank">
			<div class="module-title-wrapper">
				
							<div class="vsg-hub-inner-col">
								<img src="/wp-content/uploads/2021/06/ss-print-icon-color.svg">
							</div>
							<div class="vsg-hub-inner-col">
								<h3 class="hub-heading vsg-white">
									PRINT & MAIL
								</h3>
							</div>
						
			</div>
		</a>
      <div class="module-features-wrapper">
        <div class="feature-accordion-title print-mail-features-title" onclick="showVSGFeatures('print-mail-features-list', 'print-mail-features-title')">
          <span class="features-title-text">Features</span>
          <span class="feature-accordion-btn">
            <i class="fas fa-plus"></i>
            <span class="feature-open hide-features">View Less</span>
            <span class="feature-close view-features">View More</span>
          </span>
        </div>
        <div class="feature-accordion-content print-mail-features-list">
          <ul class="feature-list">
             <li class="feature-list-item"><i class="fas fa-plus"></i> <p>Ensure brand consistency & compliance across your marketing collateral.</p></li>
             <li class="feature-list-item"><i class="fas fa-plus"></i> <p>Customize print-ready & digital download templates with content, images, logos, links and more.</p></li>
             <li class="feature-list-item"><i class="fas fa-plus"></i> <p>Download print-ready files directly to your desktop.</p></li>
          </ul>
		  <a href="https://vsgstorefront.com/uStore/login.aspx?StoreId=85" class="hub-block-btn" target="_blank">Order Now</a>
        </div>
      </div>
    </div>

    <div class="module-card-wrapper">
		<a href="https://vsgmktg.marketingautomation.services/" target="_blank">
			<div class="module-title-wrapper">
				
							<div class="vsg-hub-inner-col">
								<img src="/wp-content/uploads/2021/06/ss-markauto-icon-color.svg">
							</div>
							<div class="vsg-hub-inner-col">
								<h3 class="hub-heading vsg-white">
									REVENUE GROWTH PLATFORM
								</h3>
							</div>
						
			</div>
		</a>
      <div class="module-features-wrapper">
        <div class="feature-accordion-title markauto-features-title" onclick="showVSGFeatures('markauto-features-list', 'markauto-features-title')">
          <span class="features-title-text">Features</span>
          <span class="feature-accordion-btn">
            <i class="fas fa-plus"></i>
            <span class="feature-open hide-features">View Less</span>
            <span class="feature-close view-features">View More</span>
          </span>
        </div>
        <div class="feature-accordion-content markauto-features-list">
          <ul class="feature-list">
             <li class="feature-list-item"><i class="fas fa-plus"></i> <p>Generate quality leads with targeted communication & lead nurturing.</p></li>
             <li class="feature-list-item"><i class="fas fa-plus"></i> <p>Track your lead activity to help you guide your next step toward a conversion.</p></li>
             <li class="feature-list-item"><i class="fas fa-plus"></i> <p>Utilize triggers to automate drip campaigns & action steps to nurture your leads.</p></li>
          </ul>
		  <a href="https://vsgmktg.marketingautomation.services/" class="hub-block-btn" target="_blank">Grow Your Revenue</a>
        </div>
      </div>
    </div>

	<!-- <div class="module-card-wrapper">
		<a href="https://vsgmktg.marketingautomation.services/" target="_blank">
			<div class="module-title-wrapper">
				<div class="vsg-hub-inner-col">
					<img src="/wp-content/uploads/2021/07/crm-icon-color.svg">
				</div>
				<div class="vsg-hub-inner-col">
					<h3 class="hub-heading vsg-white">
						CRM
					</h3>
				</div>	
			</div>
		</a>
      <div class="module-features-wrapper">
        <div class="feature-accordion-title crm-features-title" onclick="showVSGFeatures('crm-features-list', 'crm-features-title')">
          <span class="features-title-text">Features</span>
          <span class="feature-accordion-btn">
            <i class="fas fa-plus"></i>
            <span class="feature-open hide-features">View Less</span>
            <span class="feature-close view-features">View More</span>
          </span>
        </div>
        <div class="feature-accordion-content crm-features-list">
          <ul class="feature-list">
             <li class="feature-list-item"><i class="fas fa-plus"></i> <p>Feature 1</p></li>
             <li class="feature-list-item"><i class="fas fa-plus"></i> <p>Feature 2</p></li>
             <li class="feature-list-item"><i class="fas fa-plus"></i> <p>Feature 3</p></li>
          </ul>
		  <a href="https://vsgmktg.marketingautomation.services/" class="hub-block-btn" target="_blank">Manage Your Network</a>
        </div>
      </div>
    </div> -->

	<div class="module-card-wrapper">
      <div class="module-title-wrapper inactive-module">
		<div class="vsg-hub-inner-col">
			<img src="/wp-content/uploads/2021/07/web-dash-icon-gray.svg">
		</div>
		<div class="vsg-hub-inner-col">
			<h3 class="hub-heading vsg-white">
				WEB PERFORMANCE DASHBOARD
			</h3>
		</div>	
      </div>
      <div class="module-features-wrapper">
        <div class="feature-accordion-title web-dash-features-title" onclick="showVSGFeatures('web-dash-features-list', 'web-dash-features-title')">
          <span class="features-title-text">Features</span>
          <span class="feature-accordion-btn">
            <i class="fas fa-plus"></i>
            <span class="feature-open hide-features">View Less</span>
            <span class="feature-close view-features">View More</span>
          </span>
        </div>
        <div class="feature-accordion-content web-dash-features-list">
          <ul class="feature-list">
             <li class="feature-list-item"><i class="fas fa-plus"></i> <p>Know what's happening with your website on a consistent basis.</p></li>
             <li class="feature-list-item"><i class="fas fa-plus"></i> <p>Gain quick access to your GA dashboard</p></li>
          </ul>
		  <a href="https://vsg360.com" class="hub-block-btn">Add This Service</a>
        </div>
      </div>
    </div>

</section>


<section class="vsg-section martech-promo-section">
	<div class="vsg-container">
		<h3 class="vsg-heading vsg-white">
			Your Marketing Technology
		</h3>
		<p class="martech-promo-subheading">
			Connect any of these technologies to make Suitespace your own.
		</p>
		<div class="vsg-inner-section">
			<div class="marketing-technology-logo-grid-item">
				<img src="/wp-content/uploads/2021/06/sharpspring-logo-laptop.svg">
			</div>
			<div class="marketing-technology-logo-grid-item">
				<img src="/wp-content/uploads/2021/06/google-analytics-logo.svg">
			</div>
			<div class="marketing-technology-logo-grid-item">
				<img src="/wp-content/uploads/2021/06/salesforce-pardot-logo.svg">
			</div>
			<div class="marketing-technology-logo-grid-item">
				<img src="/wp-content/uploads/2021/06/basecamp-logo-laptop.svg">
			</div>
			<div class="marketing-technology-logo-grid-item">
				<img src="/wp-content/uploads/2021/06/moz_logo-laptop.svg">
			</div>
			<div class="marketing-technology-logo-grid-item">
				<img src="/wp-content/uploads/2021/06/hubspot-logo-laptop.svg">
			</div>
		</div>
		<div class="button-wrapper">
			<a href="https://vsg360.com" class="hub-block-btn">Learn How to Add Your Technology</a>
		</div>
	</div>
</section>
<section class="vsg-section blog-feed-section">

	<div class="vsg-container">
		<h3 class="blog-heading vsg-black">
			Announcements
		</h3>
	</div>

	
	<div class="vsg-container announcement-feed-wrapper"> <!-- BEGIN ANNOUNCEMENTS LOOP -->
		<?php
			$announcement_loop = new WP_Query(
				array(
					'post_type' => 'vsg_announcements', // This is the name of your post type - change this as required,
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
			<a href="/vsg-announcement/misc" class="hub-block-btn">View All Announcements</a>
		</div>
</section>

<section id="support-section-wrapper" class="vsg-section vsg-form-section">
	<div class="vsg-container">
		<h3 class="vsg-heading vsg-black">
			Need Help?
		</h3>
		<div class="support-content-form-wrapper">
			<?php echo do_shortcode( '[gravityform id="1" title="false"]' ); ?>
		</div>
	</div>
</section>
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