<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Suitespace_Hub
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			
 
			<div class="page-content">


    <div class="full-page">
      <section>
        <div class="ss-container-logo">
          <div class="ss-row">
            <div class="ss-logo-wrapper">
              <img
                src="<?php echo get_template_directory_uri() . '/images/vsg-logo@2x.png' ?>"
                alt="VSG Marketing logo"
                id="brand-logo"
              />
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="ss-container-main">
          <div class="ss-row">
            <div class="ss-img-wrapper">
              <img
                src="<?php echo get_template_directory_uri() . '/images/something-went-wrong@2x.png' ?>"
                alt="Text image that says 'something-went-wrong'"
                id="something-wrong"
              />
            </div>
          </div>
          <div class="ss-row">
            <div class="ss-wrapper">
              <h2 class="ss-heading">
                We're sorry about that, the page you are looking for couldn't be
                found.
              </h2>
            </div>
          </div>
          <div class="ss-row">
            <div class="ss-btn-wrapper">
              <a href="https://suitespace.io"
                ><button class="ss-404-btn">GO BACK TO THE DASHBOARD</button></a
              >
            </div>
          </div>
        </div>
      </section>
    </div>
    <section>
      <div class="ss-container-background-image">
        <div class="ss-row">
          <div class="ss-decor-wrapper">
            <h2 class="ss-heading"></h2>
          </div>
        </div>
      </div>
    </section>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
