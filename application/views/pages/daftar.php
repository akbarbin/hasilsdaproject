<div class="register">
  <div class="container">
    <h1 class="heading">Form Pendaftaran</h1>
    <div class="col-md-8 wow fadeInLeft" data-wow-delay="0.4s">
      <?php echo set_flash_notice($this->session->flashdata('item')); ?>
      <?php echo set_validation_error(); ?>
      <form action="<?php echo site_url(); ?>/pages/daftar" method="post" accept-charset="utf-8">
        <div class="form-group">
          <label for="exampleInputName">Nama Lengkap *</label>
          <input type="text" name="name" class="form-control" placeholder="Masukkan nama lengkap" value="<?php echo set_value('name'); ?>">
        </div>
        <div class="form-group">
          <label for="exampleInputUsername">Username *</label>
          <input type="text" value="<?php echo set_value('usr_username'); ?>" name="usr_username" class="form-control" placeholder="Masukkan username">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan email">
        </div>
        <div class="form-group">
          <label>Jenis Pengguna *</label>
          <?php echo form_dropdown('usr_type', $options_select, set_value('usr_type'), 'class="form-control"'); ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password *</label>
          <input type="password" value="<?php echo set_value('usr_password'); ?>" name="usr_password" class="form-control" placeholder="Masukkan password">
        </div>
        <div class="form-group">
          <label for="exampleInputConfPassword">Konfirmasi Password *</label>
          <input type="password" value="<?php echo set_value('usr_password_confirmation'); ?>" name="usr_password_confirmation" class="form-control" placeholder="Masukkan password konfirmasi">
        </div>
        <div class="form-group">
          <label for="exampleInputAddress">Alamat *</label>
          <textarea class="form-control" value="<?php echo set_value('usr_address'); ?>" name="usr_address" placeholder="Masukkan alamat lengkap"><?php echo set_value('usr_address'); ?></textarea>
          <p class="help-block">Alamat diisi dengan jalan, dusun, desa, rt/rw, kecamatan, kabupaten, provinsi, kode pos</p>
        </div>
        <div class="form-group">
          <label for="exampleInputNoPhone">No. Telp *</label>
          <input type="text" value="<?php echo set_value('usr_no_telp'); ?>" name="usr_no_telp" class="form-control" placeholder="Masukkan nomor telp">
        </div>
        <div class="checkbox">
          <label>
            <input name="agreement" type="checkbox"> Setuju dengan Kebijakan Privasi Kami
          </label>
        </div>
        <div class="form-submit1">
          <input name="submit" type="submit" id="submit" value="Tekan Daftar">
        </div>
      </form>
    </div>
  </div>
</div>