<div class="living_middle">
    <div class="container">
        <!-- column 2 -->
        <h1 class="page-header">Halaman Pertanian</h1>
        <div class="row">
            <a href="<?php echo base_url("index.php/users/products/create"); ?>" class="btn btn-primary right">Tambah</a>
        </div>
        <?php foreach ($products->result_array() as $product_item): ?>
            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="living_box"><a href="#">
                        <?php if (is_file($product_item['pr_photo'])): ?>
                            <img src="<?php echo base_url() . $product_item['pr_photo']; ?> " class="img-responsive" alt="<?php echo $product_item['pr_title'] ?>"/>
                        <?php else : ?>
                            <img src="<?php echo base_url() . "application/assets/images/default_img.png" ?> " class="img-responsive" alt="default image"/>
                        <?php endif; ?>
                        <span class="sale-box">
                            <span class="sale-label"><?php echo $product_item['pr_location']; ?></span>
                        </span>
                    </a>
                    <div class="living_desc">
                        <h3><a href="#"><?php echo $product_item['pr_title']; ?></a></h3>
                        <p>Rp. <?php echo $product_item['pr_price']; ?> <a href="#">(<?php echo $product_item['usr_username']; ?>)</a></p>
                    </div>
                    <?php if (current_user()->usr_id == $product_item['usr_id'] ): ?>
                        <a href="<?php echo base_url("index.php/users/products/edit/" . $product_item['pr_id']) ?>">Ubah</a> |
                        <a href="<?php echo base_url("index.php/users/products/destroy/" . $product_item['pr_id']); ?>" onclick="return confirm('Apakah yakin akan menghapus?')">Hapus</a> |
                        <?php endif; ?>
                        <a href="<?php echo base_url("index.php/users/products/show/" . $product_item['pr_id']) ?>">Lihat</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>