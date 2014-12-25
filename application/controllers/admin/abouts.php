<?php

class Abouts extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->helper('url');
    $this->load->view('templates/admin/header');
    $this->load->view('admin/abouts/index');
    $this->load->view('templates/admin/footer');
  }

}