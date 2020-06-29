<?php
  session_start();




  
  /* LANGUAGE SETUP */
  if( !isset($_SESSION["LANG"]) ){
    $_SESSION["LANG"]='EN';
  }
  if($_GET['LANG'] == 'EN'){
    $_SESSION["LANG"]='EN';
  }  
  if($_GET['LANG'] == 'FR'){
    $_SESSION["LANG"]='FR';
  }
  if($_GET['LANG'] == 'ES'){
    $_SESSION["LANG"]='ES';
  }
  if($_GET['LANG'] == 'PT'){
    $_SESSION["LANG"]='PT';
  }
  /* /LANGUAGE SETUP */





  /* INCLUDING HEADER */
  get_header();
  /* /INCLUDING HEADER */





  /* GENERAL LOOPING */
if ( have_posts() ) {
	while ( have_posts() ) {
    the_post(); 



    

    // Home Page
    if ( is_page( 'home' )){
      get_template_part( 'inc/home', 'page' ); 
    }





    // About Page
    if ( is_page( 'about' )){
      get_template_part( 'inc/about', 'page' ); 
    }





    // Services Page
    if ( is_page( 'services' )){
      get_template_part( 'inc/service', 'page' ); 
    }





    // Contact Us Page
    if ( is_page( 'contact-us' )){
      get_template_part( 'inc/contact', 'page' ); 
    }
    



	} // end while
} // end if
 /* /GENERAL LOOPING */
?>



<?php get_footer(); ?>