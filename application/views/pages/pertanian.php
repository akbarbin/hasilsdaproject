<div class="living_middle">
  <div class="container">
    <?php foreach ($agricultures->result_array() as $agricultures_item): ?>
      <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
        <div class="living_box"><a href="#">
            <img src="<?php echo base_url(). $agricultures_item['photo'] ?>" class="img-responsive" alt=""/>
            <span class="sale-box">
              <span class="sale-label"><?php echo $agricultures_item['location'] ;?></span>
            </span>
          </a>
          <div class="living_desc">
            <h3><a href="#"><?php echo $agricultures_item['title'] ;?></a></h3>
            <p><?php echo $agricultures_item['description'] ;?> <a href="#">(<?php echo $agricultures_item['username'] ;?>)</a></p>
            <a href="#" class="btn3">Untuk ditawar</a>
            <p class="price">RP 0</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>