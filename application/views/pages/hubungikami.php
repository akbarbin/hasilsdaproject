<div class="contact">
  <div class="container">
    <h1 class="heading">Hubungi Kami</h1>
    <div class="col-md-9 wow fadeInLeft" data-wow-delay="0.4s">
      <div class="map">
        <iframe src="https://mapsengine.google.com/map/u/0/embed?mid=zIctX_bCgox8.kAdqIDIyzNVg" width="825" height="300"></iframe>
      </div>
    </div>
    <div class="col-md-3 wow fadeInRight" data-wow-delay="0.4s">
      <address class="address">
        <p>Jalan Buk Serang 107 Dsn Kedung Pakis RT/RW 005/002 Kec. Pasirian, <br>Kab. Lumajang, Jawa Timur.</p>
        <dl>
          <dt></dt>
          <dd>Telephone:<span> +62 856 2471 0902</span></dd>
          <dd>E-mail:<span> support@rumahsda.com</span></dd>
        </dl>
      </address>
    </div>
  </div>
</div>
<div class="living_middle wow fadeInUp" data-wow-delay="0.4s">
  <div class="container">
    <h2>Permintaan</h2>
    <?php echo validation_errors(); ?>
    <?php echo form_open("pages/permintaan") ?>
    <div class="to">
      <input type="text" name="req_name" class="text" value="<?php echo set_value('req_name'); ?>" placeholder="Nama">
      <input type="text" name="req_email" class="text" value="<?php echo set_value('req_email'); ?>" placeholder="Alamat Email" style="margin-left:20px">
      <input type="text" name="req_no_telp"class="text" value="<?php echo set_value('req_telp'); ?>" placeholder="No Telp" style="margin-left:20px">
      <div class="clearfix"></div>
    </div>
    <div class="text">
      <textarea name="req_content" placeholder="Permintaan"><?php echo set_value('req_content'); ?></textarea>
    </div>
    <div class="form-submit1">
      <input name="submit" type="submit" id="submit" value="Kirim permintaan">
    </div>
    <div class="clearfix"></div>
    </form>
  </div>	  
</div>