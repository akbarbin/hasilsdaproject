<div class="living_middle">
  <div class="container">
    <?php foreach ($agricultures->result_array() as $agricultures_item): ?>
      <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
        <div class="living_box"><a href="#">
            <?php if (is_file($agricultures_item['pr_photo'])): ?>
              <img src="<?php echo base_url() . $agricultures_item['pr_photo']; ?> " class="img-responsive" alt="<?php echo $agricultures_item['pr_title'] ?>"/>
            <?php else : ?>
              <img src="<?php echo base_url() . "application/assets/images/default_img.png" ?> " class="img-responsive" alt="default image"/>
            <?php endif; ?>
            <span class="sale-box">
              <span class="sale-label"><?php echo $agricultures_item['pr_location']; ?></span>
            </span>
          </a>
          <div class="living_desc">
            <h3><a href="#"><?php echo $agricultures_item['pr_title']; ?></a></h3>
            <p><?php echo $agricultures_item['pr_description']; ?> <a href="#">(<?php echo $agricultures_item['usr_username']; ?>)</a></p>
            <a href="#" class="btn3">Untuk ditawar</a>
            <p class="price">RP 0</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>