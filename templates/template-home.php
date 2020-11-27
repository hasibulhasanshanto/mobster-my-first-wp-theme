<?php 
/**
 * Template Name: Home Page Template
 */
global $mobster_options;

get_header();
?>
<!-- Page Content -->

<div class="page-hero-section bg-image hero-home-2" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg_hero_2.svg);">
  <div class="hero-caption">
    <div class="container fg-white h-100">
      <div class="row align-items-center h-100">
        <div class="col-lg-6 wow fadeInUp">
          <div class="badge badge-soft mb-2">#1 Finances App on 2020</div>
          <h1 class="mb-4 fw-normal">Best app for your modern lifestyle</h1>
          <p class="mb-4">Mobster has features to view and manage <br>
          our finances, such as transfer, and statistics.</p>

          <a href="#" class="btn btn-dark">Get Started</a>

        </div>
        <div class="col-lg-6 d-none d-lg-block wow zoomIn">
          <div class="img-place mobile-preview shadow floating-animate">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/app_showcase.svg" alt="">
          </div>          
        </div>
      </div>
    </div>
  </div>
</div>


<?php
  
  $layout = $mobster_options['homepage-layout']['enabled'];

  if ($layout): foreach ($layout as $key=>$value) {

      switch($key) {

          case 'services': get_template_part( 'layouts/mobster-services', 'services' );
          break;

          case 'bussiness_promo': get_template_part( 'layouts/mobster-bussiness_promo', 'bussiness_promo' );
          break;

          case 'features': get_template_part( 'layouts/mobster-features', 'features' );
          break;

          case 'pricing': get_template_part( 'layouts/mobster-pricing', 'pricing' );    
          break; 

          case 'testimonials': get_template_part( 'layouts/mobster-testimonial', 'testimonials' );
          break;

          case 'faqs': get_template_part( 'layouts/mobster-faqs', 'faqs' );
          break;

          case 'partners': get_template_part( 'layouts/mobster-partners', 'partners' );
          break; 

      }

  }

  endif;
?>




<!--/. Page Content -->

<?php get_footer() ?>