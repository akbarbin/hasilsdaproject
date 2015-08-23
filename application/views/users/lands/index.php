<div class="living_middle">
    <div class="container">
        <!-- column 2 -->
        <h1 class="page-header">Halaman Pertanian</h1>
        <div class="row">
            <a href="<?php echo base_url("index.php/users/lands/create"); ?>" class="btn btn-primary right">Tambah</a>
        </div>
        <?php foreach ($lands->result_array() as $land_item): ?>
            <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.4s">
                <div class="living_box"><a href="#">
                        <?php if (is_file($land_item['la_photo'])): ?>
                            <img src="<?php echo base_url() . $land_item['la_photo']; ?> " class="img-responsive" alt="<?php echo $land_item['la_title'] ?>"/>
                        <?php else : ?>
                            <img src="<?php echo base_url() . "application/assets/images/default_img.png" ?> " class="img-responsive" alt="default image"/>
                        <?php endif; ?>
                        <span class="sale-box">
                            <span class="sale-label"><?php echo $land_item['la_location']; ?></span>
                        </span>
                    </a>
                    <div class="living_desc">
                        <h3><a href="#"><?php echo $land_item['la_title']; ?></a></h3>
                        <p><?php echo $land_item['la_wide_land']; ?> m2<a href="#">(<?php echo $land_item['usr_username']; ?>)</a></p>
                    </div>
                    <a href="<?php echo base_url("index.php/users/lands/edit/" . $land_item['la_id']) ?>">Ubah</a> |
                    <a href="<?php echo base_url("index.php/users/lands/destroy/" . $land_item['la_id']); ?>" onclick="return confirm('Apakah yakin akan menghapus?')">Hapus</a> |
                    <a href="<?php echo base_url("index.php/users/lands/show/" . $land_item['la_id']) ?>">Lihat</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>