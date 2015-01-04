<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
  <head>
    <title>Konsultan Berdagang Hasil Sumber Daya Alam Indonesia :: Rumahsda</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />

    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/login.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.easydropdown.js"></script>
    <!------ Light Box ------>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swipebox.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
      jQuery(function($) {
        $(".swipebox").swipebox();
      });
    </script>
    <!--Animation-->
    <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel='stylesheet' type='text/css' />
    <script>
      new WOW().init();
    </script>
  </head>
  <body>
    <div class="header">
      <div class="header-left">
        <div class="logo">
          <a href="<?php echo base_url(); ?>index.php/pages/view/semua"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt=""/></a>
        </div>
        <div class="menu">
          <a class="toggleMenu" href="#"><img src="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/images/nav.png" alt="" /></a>
          <ul class="nav" id="nav">
            <li class="<?= ($this->router->fetch_class() == "pages" and $title == "Semua") ? "active" : "" ?>"><a href="<?php echo base_url(); ?>index.php/pages/view/semua">Semua</a></li>
            <li class="<?= ($this->router->fetch_class() == "pages" and $title == "Pertanian") ? "active" : "" ?>"><a href="<?php echo base_url(); ?>index.php/pages/view/pertanian">Pertanian</a></li>
            <li class="<?= ($this->router->fetch_class() == "pages" and $title == "Perternakan") ? "active" : "" ?>"><a href="<?php echo base_url(); ?>index.php/pages/view/perternakan">Perternakan</a></li>
            <li class="<?= ($this->router->fetch_class() == "pages" and $title == "Tentangkami") ? "active" : "" ?>"><a href="<?php echo base_url(); ?>index.php/pages/view/tentangkami">Tentang Rsda</a></li>
            <div class="clearfix"></div>
          </ul>
          <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/responsive-nav.js"></script>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="header_right">
        <!-- start search-->
        <div class="search-box">
          <div id="sb-search" class="sb-search">
            <?php echo form_open('/pages/search') ?>
              <input class="sb-search-input" placeholder="Masukkan kata kunci..." type="search" name="search" id="search">
              <input class="sb-search-submit" type="submit" value="">
              <span class="sb-icon-search"> </span>
            </form>
          </div>
        </div>
        <!----search-scripts---->
        <script src="<?php echo base_url(); ?>assets/js/classie.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/uisearch.js"></script>
        <script>
      new UISearch(document.getElementById('sb-search'));
        </script>
        <!----//search-scripts---->
        <div id="loginContainer"><a href="#" id="loginButton"><img src="<?php echo base_url(); ?>assets/images/login.png"><span>Masuk</span></a>
          <div id="loginBox">
            <?php echo form_open('verifylogin', array('id' => 'loginForm')) ?>
            <fieldset id="body">
              <fieldset>
                <label for="email">Alamat Email</label>
                <input type="text" name="username" id="email">
              </fieldset>
              <fieldset>
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" id="password">
              </fieldset>
              <input type="submit" id="login" value="Masuk">
              <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Ingatkan saya</i></label>
            </fieldset>
            <span><a href="#">Lupa kata sandi?</a></span>
            </form>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="banner wow fadeInUp" data-wow-delay="0.4s">
   	  <div class="container_wrap">
        <h1>Kami siap menjadi konsultan berdagang Anda</h1>
        <?php echo form_open('/pages/search') ?>
        <div class="dropdown-buttons">
          <div class="dropdown-button">
            <select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}' name="location">
              <option value="Lumajang">Lumajang</option>
              <option value="Probolinggo">Probolinggo</option>
              <option value="Jember">Jember</option>
            </select>
          </div>
          <div class="dropdown-button">
            <select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}' name="product_type">
              <option value="pertanian">Pertanian</option>	
              <option value="perternakan">Perternakan</option>
            </select>
          </div>
        </div>
        <input type="text" placeholder="Letakkan kata kunci ..." name="keyword">
        <div class="contact_btn">
          <label class="btn1 btn-2 btn-2g"><input name="submit" type="submit" id="submit" value="Rambah"></label>
        </div>
        </form>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="content_top wow bounceInRight" data-wow-delay="0.4s">
   	  <div class="container">
      </div>
    </div>