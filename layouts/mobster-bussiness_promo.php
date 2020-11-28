<?php 
  global $mobster_options;
  $bussiness_image_left = $mobster_options['bussiness_image_left']; 
  $bussiness_title = $mobster_options['bussiness_title']; 
  $bussiness_content = $mobster_options['bussiness_content'];  
  $bussiness_button_link = $mobster_options['bussiness_button_link']; 
  $bussiness_button_text = $mobster_options['bussiness_button_text']; 
?>
<!-- Bussiness Promotion  -->
<div class="page-section no-scroll">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 wow fadeIn">
        <div class="img-place">
        
        <?php if($bussiness_image_left['url']):?>
          <img src="<?php echo $bussiness_image_left['url']; ?>" alt="<?php echo $bussiness_title; ?>">
        </div>
        <?php else:?>
           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/app_preview_4.png" alt="<?php echo $bussiness_title; ?>">
        <?php endif;?>
          
        </div>
      </div>
      <div class="col-lg-5 pl-lg-5 wow fadeInUp">
        <h2 class="mb-4"><?php echo $bussiness_title; ?></h2>
        <p class="mb-4"><?php echo $bussiness_content; ?></p>
        <a href="<?php echo $bussiness_button_link; ?>" class="btn btn-outline-primary rounded-pill"><?php echo $bussiness_button_text; ?></a>
      </div>
    </div>
  </div>
</div>
<!--/. Bussiness Promotion  -->