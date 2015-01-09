<div class="col-sm-9">
  <!-- column 2 -->
  <h1 class="page-header">Halaman Lihat</h1>

  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <i class="glyphicon glyphicon-wrench pull-right"></i>
        <h4><?php echo $animal_farm['pr_title']; ?></h4>
      </div>
    </div>
    <div class="panel-body">
      <img src="<?php echo base_url() . $animal_farm['pr_photo']; ?>" class="img-responsive" alt=""/>
      <div>
        <label>Petani</label>
        <div>
          <?php echo $animal_farm['usr_username']; ?>
        </div>
      </div>
      <div>
        <label>Nama</label>
        <div>
          <?php echo $animal_farm['pr_title']; ?>
        </div>
      </div>
      <div>
        <label>Deskripsi</label>
        <div>
          <?php echo $animal_farm['pr_description']; ?>
        </div>
      </div>
      <div>
        <label>Lokasi</label>
        <div>
          <?php echo $animal_farm['pr_location']; ?>
        </div>
      </div>
    </div><!--/panel content-->
  </div><!--/panel-->
</div><!--/col-span-9-->