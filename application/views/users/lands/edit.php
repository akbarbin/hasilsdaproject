<div class="living_middle">
    <div class="container">
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

                <?php echo form_open("users/lands/edit/" . $land['la_id'], array('class' => 'form form-vertical')) ?>

                <div class="control-group">
                    <label>Judul</label>
                    <div class="controls">
                        <input type="text" value="<?php echo set_value('la_title', $land['la_title']); ?>" name="la_title" class="form-control" placeholder="Masukkan Judul">
                    </div>
                </div>

                <div class="control-group">
                    <label>Luas</label>
                    <div class="controls">
                        <input type="text" value="<?php echo set_value('la_wide_land', $land['la_wide_land']); ?>" name="la_wide_land" class="form-control" placeholder="Masukkan Luas Tanah">
                    </div>
                </div>

                <div class="control-group">
                    <label>Lokasi</label>
                    <div class="controls">
                        <input type="text" value="<?php echo set_value('la_location', $land['la_location']); ?>" name="la_location" class="form-control" placeholder="Masukkan Lokasi">
                        <input type="hidden" value="<?php echo set_value('la_user_id', current_user()->usr_id); ?>" name="la_user_id" class="form-control">
                    </div>
                </div>

                <div class="control-group">
                    <div class="map">
                        <iframe src="https://mapsengine.google.com/map/u/0/embed?mid=zIctX_bCgox8.kAdqIDIyzNVg" width="825" height="300"></iframe>
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
</div>