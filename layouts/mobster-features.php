<?php 
  global $mobster_options;
  $features_layout_img_center = $mobster_options['features_layout_img_center']; 
  $features_sliders_left = $mobster_options['features_sliders_left'];  
  $features_sliders_right = $mobster_options['features_sliders_right'];  
?>
<!-- Features  -->
<div class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 py-3">
        <div class="iconic-list">

          <?php if($features_sliders_left): ?>
            <?php foreach($features_sliders_left as $key=>$item): ?>
              <?php if($key < 3): ?>
              <div class="iconic-item wow fadeInUp">
                <div class="iconic-content">
                  <h5><?php echo $item['title']; ?></h5>
                  <p class="fs-small"><?php echo $item['description']; ?></p>
                </div>
                <div class="iconic-md iconic-text <?= ($key == 0) ? 'bg-warning': (($key == 1 ? 'bg-info': 'bg-indigo')); ?> fg-white rounded-circle">
                  <span class="<?php echo $item['url']; ?>"></span>
                </div>
              </div>
              <?php endif; ?> 
            <?php endforeach; ?>
          <?php endif; ?> 

        </div>
      </div>

      <div class="col-lg-4 py-3 wow zoomIn">
        <div class="img-place mobile-preview shadow">

          <?php if($features_layout_img_center['url']):?>
            <img src="<?php echo $features_layout_img_center['url']; ?>" alt="">
         
          <?php else:?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/app_preview_2.png" alt="">
          <?php endif; ?>  

        </div>
      </div>
      <div class="col-lg-4 py-3">
        <div class="iconic-list">
        <?php if($features_sliders_right): ?>
            <?php foreach($features_sliders_right as $key=>$itemR): ?>
              <?php if($key < 3): ?>
              <div class="iconic-item wow fadeInUp">
                <div class="iconic-md iconic-text <?= ($key == 0) ? 'bg-warning': (($key == 1 ? 'bg-success': 'bg-indigo')); ?> fg-white rounded-circle">
                    <span class="<?php echo $itemR['url']; ?>"></span>
                  </div>
                <div class="iconic-content">
                  <h5><?php echo $itemR['title']; ?></h5>
                  <p class="fs-small"><?php echo $itemR['description']; ?></p>
                </div>
              </div>
              <?php endif; ?>              
            <?php endforeach; ?>
          <?php endif; ?> 

        </div>
      </div>
    </div>
  </div>
</div>

<hr>
<!--/. Features  -->