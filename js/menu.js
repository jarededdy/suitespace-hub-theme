function showVSGFeatures(featureClass, featureTitle) {
  jQuery( "." + featureClass ).slideToggle( "slow" );
   jQuery("." + featureTitle).find('i').toggleClass('fa-minus fa-plus');
   jQuery("." + featureTitle + " .feature-open").toggleClass('view-features hide-features');
   jQuery("." + featureTitle + " .feature-close").toggleClass('view-features hide-features');

   //use event target and event listener combo to generically pull data from the element clicked

}

function showMobileMenu() {
  jQuery( ".mobile-nav" ).slideToggle( "slow" );
   jQuery("#header-content-wrapper .mobile-menu-toggle").find('i').toggleClass('fa-minus fa-plus');
   jQuery(".mobile-nav").toggleClass('view-mobile-nav hide-mobile-nav');
}