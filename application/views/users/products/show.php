<div class="living_middle">
    <div class="container">
        <!-- column 2 -->
        <h1 class="page-header">Halaman Lihat</h1>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    <i class="glyphicon glyphicon-wrench pull-right"></i>
                    <h4><?php echo $product['pr_title']; ?></h4>
                </div>
            </div>
            <div class="panel-body">
                <?php if (is_file($product['pr_photo'])): ?>
                    <img src="<?php echo base_url() . $product['pr_photo']; ?>" class="img-responsive" alt=""/>
                <?php else : ?>
                    <img src="<?php echo base_url() . "application/assets/images/default_img.png" ?> " class="img-responsive" alt="default image"/>
                <?php endif; ?>
                <div>
                    <label>Petani</label>
                    <div>
                        <?php echo $product['usr_username']; ?>
                    </div>
                </div>
                <div>
                    <label>Nama</label>
                    <div>
                        <?php echo $product['pr_title']; ?>
                    </div>
                </div>
                <div>
                    <label>Deskripsi</label>
                    <div>
                        <?php echo $product['pr_description']; ?>
                    </div>
                </div>
                <div>
                    <label>Lokasi</label>
                    <div>
                        <?php echo $product['pr_location']; ?>
                    </div>
                    <div class="map">
                        <iframe src="https://mapsengine.google.com/map/u/0/embed?mid=zIctX_bCgox8.kAdqIDIyzNVg" width="825" height="300"></iframe>
                    </div>
                </div>
                <?php if (current_user()->usr_id != $product['pr_user_id']): ?>
                    <a href="<?php echo base_url("index.php/users/products/create"); ?>" class="btn btn-primary right">Cek </a> |
                    <a href="<?php echo base_url("index.php/users/products/create"); ?>" class="btn btn-primary right">Tambah</a>
                <?php endif; ?>
            </div><!--/panel content-->
        </div><!--/panel-->
    </div><!--/col-span-9-->
</div>