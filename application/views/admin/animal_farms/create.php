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

      <?php echo form_open("admin/animal_farms/create", array('class' => 'form form-vertical')) ?>

      <div class="control-group">
        <label>Judul</label>
        <div class="controls">
          <input type="text" value="<?php echo set_value('pr_title'); ?>" name="pr_title" class="form-control" placeholder="Masukkan Judul">
        </div>
      </div>

      <div class="control-group">
        <label>Deskripsi</label>
        <div class="controls">
          <textarea class="form-control" value="<?php echo set_value('pr_description'); ?> "name="pr_description"></textarea>
        </div>
      </div>

      <div class="control-group">
        <label>Lokasi</label>
        <div class="controls">
          <input type="text" value="<?php echo set_value('location'); ?>" name="pr_location" class="form-control" placeholder="Masukkan Lokasi">
        </div>
      </div>

      <div class="control-group">
        <label>Foto 1</label>
        <div class="controls">
          <input type="file" name="photo" size="20"/>
        </div>
      </div>

      <div class="control-group">
        <label>Foto 2</label>
        <div class="controls">
          <input type="file" name="photo_2" size="20"/>
        </div>
      </div>

      <div class="control-group">
        <label>Kategori</label>
        <div class="controls">
          <p>Pertanian</p>
          <input type="hidden" name="pr_type" value="perternakan">
        </div>
      </div>

      <div class="control-group">
        <label>Peternak/Petani</label>
        <div class="controls">
          <select class="form-control" name="pr_user_id">
            <?php foreach ($option_users->result_array() as $option_user_item): ?>
              <option value="<?php echo $option_user_item['usr_id'] ?>" <?php echo ($option_user_item['usr_id'] == set_value('pr_user_id')) ? "selected" : "" ?>><?php echo $option_user_item['usr_username'] ?></option>
            <?php endforeach; ?>
          </select>
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