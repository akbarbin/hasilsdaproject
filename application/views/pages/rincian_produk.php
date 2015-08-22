<div class="living_middle">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php if (is_file($product['pr_photo'])): ?>
          <img src="<?php echo base_url() . $product['pr_photo']; ?> " class="img-responsive" alt="<?php echo $product['pr_title'] ?>"/>
        <?php else : ?>
          <img src="<?php echo base_url() . "application/assets/images/default_img.png" ?> " class="img-responsive" alt="default image"/>
        <?php endif; ?>
      </div>
      <div class="col-md-6">
        <h3>Deskripsi Produk</h3>
        <p><?php echo $product['pr_description']; ?></p>
        <div class="project-details">
          <h3>Detail Produk</h3>
          <ul>
            <li><span class="dark-text">Nama Produk: </span><?php echo $product['pr_title']; ?></li>
            <li><span class="dark-text">Lokasi: </span><?php echo $product['pr_location']; ?></li>
            <li><span class="dark-text">Pemilik Produk: </span><?php echo $product['usr_username']; ?></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="btn-content-footer">
          <a href="<?php echo site_url(); ?>" class="btn btn-orange btn-lg"> &nbsp;Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>