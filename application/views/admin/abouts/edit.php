<div class="col-sm-9">
  <!-- column 2 -->
  <h1 class="page-header">Halaman Edit</h1>

  <?php echo validation_errors() ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <i class="glyphicon glyphicon-wrench pull-right"></i>
        <h4>Post Request</h4>
      </div>
    </div>
    <div class="panel-body">

      <?php echo form_open("admin/abouts/edit/" . $about['abt_id'], array('class' => 'form form-vertical')) ?>

      <div class="control-group">
        <label>Judul</label>
        <div class="controls">
          <input type="text" value="<?php echo $about['abt_title'] ?>" name="abt_title" class="form-control" placeholder="Masukkan Judul">
        </div>
      </div>

      <div class="control-group">
        <label>Deskripsi</label>
        <div class="controls">
          <textarea class="form-control" value="<?php echo $about['abt_description'] ?>"name="abt_description"><?php echo $about['abt_description'] ?></textarea>
        </div>
      </div>

      <div class="control-group">
        <label>Lokasi</label>
        <div class="controls">
          <input type="text" value="<?php echo $about['abt_location']; ?>" name="abt_location" class="form-control" placeholder="Masukkan Lokasi">
        </div>
      </div>

      <div class="control-group">
        <label>Foto 1</label>
        <div class="controls">
          <input type="file" name="photo" size="20"/>
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