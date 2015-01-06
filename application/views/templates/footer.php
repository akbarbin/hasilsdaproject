<div class="footer">
  <div class="container">
    <div class="footer_top">
      <h3>Kami menyediakan langganan produk terbaru kami</h3>
      <?php echo form_open("pages/langganan") ?>
      <span>
        <i><img src="<?php echo base_url(); ?>assets/images/mail.png" alt="mail"></i>
        <input type="text" placeholder="Masukkan alamat email" name="sub_email">
        <label class="btn1 btn2 btn-2 btn-2g"> <input name="submit" type="submit" id="submit" value="Langganan"> </label>
        <div class="clearfix"> </div>
      </span>
      <?php echo form_error('sub_email'); ?>
      </form>
    </div>
    <div class="footer_grids">
      <div class="footer-grid">
        <h4>Info Rumahsda</h4>
        <ul class="list1">
          <li><a href="<?php echo base_url(); ?>index.php/pages/view/hubungikami">Hubungi Kami</a></li>
        </ul>
      </div>
      <div class="footer-grid last_grid">
        <h4>Cari info tentang kami</h4>
        <ul class="footer_social wow fadeInLeft" data-wow-delay="0.4s">
          <li><a href=""> <i class="fb"> </i> </a></li>
          <li><a href=""><i class="tw"> </i> </a></li>
          <li><a href=""><i class="google"> </i> </a></li>
        </ul>
        <div class="copy wow fadeInRight" data-wow-delay="0.4s">
          <p>&copy; Di ubah oleh <a href="http://akbarbin-stagingapps.tk/" target="_blank">Akbarbin</a> </p>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
</body>
</html>