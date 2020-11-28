<?php 
  global $mobster_options;
  $service_section_title = $mobster_options['services_section_title'];
  $service_items = $mobster_options['service_sliders']; 
?>
<!-- Main Features --> 
<div class="page-section no-scroll">
  <div class="container">
    <h2 class="text-center wow fadeIn"><?php echo $service_section_title; ?></h2>

    <div class="row justify-content-center mt-5">
      <div class="col-lg-10">
        <div class="row justify-content-center">

        <?php if($service_items): ?>
          <?php foreach($service_items as $service_item): ?>
            <div class="col-md-6 col-lg-4 py-3 wow <?php echo  $service_item['url']; ?>">
            <div class="card card-body border-0 text-center shadow pt-5">
              <div class="svg-icon mx-auto mb-4">
                <img src="<?php echo  $service_item['image']; ?>" alt="">
              </div>
              <h5 class="fg-gray"><?php echo $service_item['title']; ?></h5>
              <p class="fs-small"><?php echo $service_item['description']; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        <?php endif; ?>  

        </div>
      </div>
    </div>
  </div>
</div>
<!--/. Main Features --> 