<?php

class Dashboards extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->helper('url');
    $this->load->view('templates/admin/header');
    $this->load->view('admin/dashboards/index');
    $this->load->view('templates/admin/footer');
  }

}
