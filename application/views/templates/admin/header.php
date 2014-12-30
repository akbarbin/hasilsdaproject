<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Admin Hasil Sumber Daya Alam Indonesia</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo base_url(); ?>/assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="<?php echo base_url(); ?>/assets/admin/css/styles.css" rel="stylesheet">
  </head>
  <body>
    <!-- Header -->
    <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin Hasil Sumber Daya Alam Indonesia</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
              <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
              <ul id="g-account-menu" class="dropdown-menu" role="menu">
                <li><a href="#">My Profile</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url(); ?>index.php/admin/dashboards/logout"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
          </ul>
        </div>
      </div><!-- /container -->
    </div>
    <!-- /Header -->

    <!-- Main -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <!-- Left column -->
          <ul class="nav nav-pills nav-stacked">
            <li class="nav-header"></li>
            <li><a href="<?php echo base_url(); ?>index.php/admin/dashboards"><i class="glyphicon glyphicon-list"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/admin/agricultures"><i class="glyphicon glyphicon-briefcase"></i> Pertanian</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/admin/animal_farms"><i class="glyphicon glyphicon-link"></i> Perternakan</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/admin/abouts"><i class="glyphicon glyphicon-list-alt"></i> Tentang Kami</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/admin/requests"><i class="glyphicon glyphicon-book"></i> Permintaan</a></li>
          </ul>
        </div><!-- /col-3 -->