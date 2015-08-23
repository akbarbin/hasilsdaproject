<div class="living_middle">
    <div class="container">
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

                <?php echo form_open("users/products/edit/" . $product['pr_id'], array('class' => 'form form-vertical')) ?>

                <div class="control-group">
                    <label>Lahan</label>
                    <div class="controls">
                        <?php echo form_dropdown('pr_land_id', $options_select, $product['pr_land_id']); ?>
                    </div>
                </div>

                <div class="control-group">
                    <label>Tipe Kategory</label>
                    <div class="controls">
                        <?php echo form_dropdown('pr_type', $type_options_select, $product['pr_type']); ?>
                    </div>
                </div>

                <div class="control-group">
                    <label>Judul</label>
                    <div class="controls">
                        <input type="text" value="<?php echo set_value('pr_title', $product['pr_title']); ?>" name="pr_title" class="form-control" placeholder="Masukkan Judul">
                    </div>
                </div>

                <div class="control-group">
                    <label>Estimasi Hasil Panen</label>
                    <div class="controls">
                        <input type="text" value="<?php echo set_value('pr_estm_crop_field', $product['pr_estm_crop_field']); ?>" name="pr_estm_crop_field" class="form-control" placeholder="Masukkan Estimasi Hasil Panen">
                    </div>
                </div>

                <div class="control-group">
                    <label>Estimasi Tanggal Panen</label>
                    <div class="controls">
                        <input type="text" value="<?php echo set_value('pr_estm_harvest', $product['pr_estm_harvest']); ?>" name="pr_estm_harvest" class="form-control" placeholder="Masukkan Estimasi Tanggal Panen">
                    </div>
                </div>

                <div class="control-group">
                    <label>Deskripsi</label>
                    <div class="controls">
                        <textarea class="form-control" value="<?php echo set_value('pr_description', $product['pr_description']); ?> "name="pr_description"><?php echo $product['pr_description']; ?></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label>Pilih Fase Status</label>
                    <div class="controls">
                        <?php echo form_dropdown('pr_phase', $phase_options_select, $product['pr_phase']); ?>
                    </div>
                </div>

                <div class="control-group">
                    <label>Foto 1</label>
                    <div class="controls">
                        <input type="file" name="photo" size="20"/>
                    </div>
                </div>

                <div class="control-group">
                    <label>Harga</label>
                    <div class="controls">
                        <input type="text" value="<?php echo set_value('pr_price', $product['pr_price']); ?>" name="pr_price" class="form-control" placeholder="Masukkan Harga">
                        <input type="hidden" value="<?php echo set_value('pr_usr_id', current_user()->usr_id); ?>" name="pr_user_id" class="form-control">
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