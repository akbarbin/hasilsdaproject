<?php

class Animal_farms extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->helper('url');
    $this->load->view('templates/admin/header');
    $this->load->view('admin/animal_farms/index');
    $this->load->view('templates/admin/footer');
  }

}