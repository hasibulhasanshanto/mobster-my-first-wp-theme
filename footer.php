<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mobster
 */

?>

<!-- Footer -->
<div class="page-footer-section bg-dark fg-white">
  <div class="container mb-5">
    <div class="row justify-content-center text-center wow fadeInUp">
      <div class="col-lg-8">
        <div class="text-center mb-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/favicon-light.png" alt="" height="80">
        </div>
        <h3 class="mb-3"><span class="fg-primary">Mob</span>ster</h3>
        <p class="caption">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Expedita voluptates earum minima reiciendis consectetur veniam aut dignissimos</p>

        <ul class="nav justify-content-center py-3">
          <li class="nav-item"><a href="index.html" class="nav-link fg-white px-4">Home</a></li>
          <li class="nav-item"><a href="" class="nav-link fg-white px-4">Key Features</a></li>
          <li class="nav-item"><a href="" class="nav-link fg-white px-4">Pricing</a></li>
          <li class="nav-item"><a href="" class="nav-link fg-white px-4">Testimonials</a></li>
          <li class="nav-item"><a href="" class="nav-link fg-white px-4">FAQ</a></li>
        </ul>
      </div>
    </div>
  </div>
  
  <hr>
  <!-- Please don't remove or modify the credits below -->
  <p class="text-center mt-4 wow fadeIn">Copyright &copy; 2020 <a href="https://shantosblackbox.com/" class="fg-white fw-medium">Shanto's Blackbox</a>. All right reserved</p>
</div>
<!--/. Footer -->

<?php wp_footer(); ?>

</body>
</html>
