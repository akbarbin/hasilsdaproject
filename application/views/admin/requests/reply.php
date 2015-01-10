<div class="col-sm-9">
  <!-- column 2 -->
  <h1 class="page-header">Halaman Lihat</h1>

  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <i class="glyphicon glyphicon-wrench pull-right"></i>
        <h4><?php echo $request['req_name']; ?></h4>
      </div>
    </div>
    <div class="panel-body">
      <div>
        <label>Nama</label>
        <div>
          <?php echo $request['req_name']; ?>
        </div>
      </div>
      <div>
        <label>Email</label>
        <div>
          <?php echo $request['req_email']; ?>
        </div>
      </div>
      <div>
        <label>No telp</label>
        <div>
          <?php echo $request['req_no_telp']; ?>
        </div>
      </div>
      <div>
        <label>Konten</label>
        <div>
          <?php echo $request['req_content']; ?>
        </div>
      </div>

      <hr>
      <div class="panel-title">
        <h4>Balas Permintaan</h4>
      </div>
      <div class="panel-body">
        <?php echo form_open("admin/requests/reply/" . $request['req_id'], array('class' => 'form form-vertical')) ?>
        <div class="control-group">
          <div class="controls">
            <textarea class="form-control" value="<?php echo $request['req_content']; ?>" name="req_content"></textarea>
          </div>
        </div>
        <input type="hidden" name="req_parent_id" value="<?php echo $request['req_id']; ?>">
        <div class="control-group">
          <label></label>
          <div class="controls">
            <button type="submit" class="btn btn-primary">
              Simpan
            </button>
          </div>
        </div>
        </form>
      </div>
    </div><!--/panel content-->
  </div><!--/panel-->
</div><!--/col-span-9-->