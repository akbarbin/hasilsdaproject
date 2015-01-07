<div class="living_middle">
  <div class="container">
    <?php foreach ($animal_farms->result_array() as $animal_farms_item): ?>
      <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
        <div class="living_box"><a href="#">
            <img src="<?php echo base_url(). $animal_farms_item['pr_photo'] ?>" class="img-responsive" alt=""/>
            <span class="sale-box">
              <span class="sale-label"><?php echo $animal_farms_item['pr_location'] ;?></span>
            </span>
          </a>
          <div class="living_desc">
            <h3><a href="#"><?php echo $animal_farms_item['pr_title'] ;?></a></h3>
            <p><?php echo $animal_farms_item['pr_description'] ;?> <a href="#">(<?php echo $animal_farms_item['usr_username'] ;?>)</a></p>
            <a href="#" class="btn3">Untuk ditawar</a>
            <p class="price">RP 0</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>