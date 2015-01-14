<div class="content_middle wow bounceInLeft" data-wow-delay="0.4s">
  <div class="container">
    <div class="content_middle_box">
      <div class="top_grid">
        <?php foreach ($products->result_array() as $products_item): ?>
          <div class="col-md-3">
            <div class="grid1">
              <div class="view view-first">
                <?php if (is_file($products_item['pr_photo_2'])): ?>
                  <div class="index_img"><img src="<?php echo base_url() . $products_item['pr_photo_2']; ?> " class="img-responsive" alt="<?php echo $products_item['pr_title'] ?>"/></div>
                <?php else : ?>
                  <div class="index_img"><img src="<?php echo base_url() . "application/assets/images/default_img.png" ?> " class="img-responsive" alt="default image"/></div>
                <?php endif; ?>
                <div class="sale"><?php echo $products_item['pr_location'] ?></div>
                <div class="mask">
                  <div class="info"><i class="search"> </i> Tengok</div>
                  <ul class="mask_img">
                    <li class="star"><span>+62 856 2471 0902</span></li>
                    <div class="clearfix"> </div>
                  </ul>
                </div>
              </div> 
              <i class="home"></i>
              <div class="inner_wrap">
                <h3><?php echo $products_item['pr_description'] ?></h3>
                <ul class="star1">
                  <h4 class="green"><?php echo $products_item['pr_title'] ?></h4>
                  <li><a href="#"><?php echo $products_item['usr_username'] ?></a></li>
                </ul>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <div class="clearfix"> </div>
      </div>
    </div>
    <div class="offering">
      <h2>Apa yang Rumahsda tawarkan kepada Anda?</h2>
      <h3>Rumahsda menawarkan kejujuran, keadilan, kemakmuran, dan kerjasama dengan semua pihak yang terlibat dalam berdagang</h3>
      <div class="real">
        <h4>Layanan</h4>
        <div class="col-sm-6">
          <ul class="service_grid">
            <i class="s1"> </i>
            <li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
              <p>Kami datang sebagai penghubung antara pembeli dengan petani. Kami ingin membantu petani dan peternak dalam menjualkan hasil sumber daya alamnya kepada pembeli. Kami datang untuk memperluas jangkauan pasar dalam menjual produk. Kami mengutamakan kejujuran, keadilan, kemakmuran, dan kerjasama bagi semua pihak yang terkait.</p>
            </li>
            <div class="clearfix"> </div>
          </ul>
        </div>
        <div class="col-sm-6">
          <ul class="service_grid">
            <i class="s2"> </i>
            <li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
              <p>Kami menyediakan petani dan peternak yang hanya terdaftar di Rumahsda.com. Lokasinya pertanian dan perternakan saat ini masih di wilayah Jawa Timur. Kami mengharap semua pihak dalam berjalan bersama - sama agar terbentuk sebuah hubungan yang baik. Kami ingin menjadi konsultan yang membantu Anda dalam berdagang.</p>
            </li>
            <div class="clearfix"> </div>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>