<?php 
  global $mobster_options;
  $partners_gallery = $mobster_options['partners_gallery'];  
  $gallery_items = explode(',', $partners_gallery); 
?>
<!-- Clients -->
<div class="page-section">
  <div class="container">
    <div class="text-center wow fadeIn">
      <h2 class="mb-4">Our partners</h2>
      <p>Become a <a href="#">partners?</a></p>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 justify-content-center align-items-center mt-5"> 
      <!-- <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <?php echo $partners_gallery; ?>
        </div>
      </div>  -->
    <?php foreach($gallery_items as $item): ?>
      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="<?php echo wp_get_attachment_url($item);?>" alt=""> 
        </div>
      </div>
    <?php endforeach; ?>
      <!-- <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/cleaning_service.png" alt="">
        </div>
      </div>

      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/creative_photo.png" alt="">
        </div>
      </div>

      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/global_tv.png" alt="">
        </div>
      </div>

      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/net_sport_tv.png" alt="">
        </div>
      </div>

      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/news_digital_tv.png" alt="">
        </div>
      </div>

      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/spa_beauty.png" alt="">
        </div>
      </div>

      <div class="p-3 wow zoomIn">
        <div class="img-place client-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/trivier_group.png" alt="">
        </div>
      </div> -->

    </div>
  </div>
</div>

<!--/. Clients -->