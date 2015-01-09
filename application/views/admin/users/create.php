<div class="col-sm-9">
  <!-- column 2 -->
  <h1 class="page-header">Halaman Buat</h1>

  <?php echo validation_errors() ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <i class="glyphicon glyphicon-wrench pull-right"></i>
        <h4>Post Request</h4>
      </div>
    </div>
    <div class="panel-body">

      <?php echo form_open("admin/users/create", array('class' => 'form form-vertical')) ?>

      <div class="control-group">
        <label>Username</label>
        <div class="controls">
          <input type="text" value="<?php echo set_value('usr_username'); ?>" name="usr_username" class="form-control" placeholder="Masukkan Username">
        </div>
      </div>

      <div class="control-group">
        <label>Alamat</label>
        <div class="controls">
          <textarea class="form-control" value="<?php echo set_value('usr_address'); ?> "name="usr_address"></textarea>
        </div>
      </div>

      <div class="control-group">
        <label>No Telp</label>
        <div class="controls">
          <input type="text" value="<?php echo set_value('usr_no_telp'); ?>" name="usr_no_telp" class="form-control" placeholder="Masukkan No Telp">
        </div>
      </div>

      <div class="control-group">
        <label>Tipe User</label>
        <div class="controls">
          <?php echo form_dropdown('usr_type', $options_select); ?>
        </div>
      </div>

      <div class="control-group">
        <label></label>
        <div class="controls">
          <button type="submit" class="btn btn-primary">
            Simpan
          </button>
        </div>
      </div>
      </form>

    </div><!--/panel content-->
  </div><!--/panel-->
</div><!--/col-span-9-->