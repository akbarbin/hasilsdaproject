<?php

class Requests extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->_before_filter();
  }

  public function index() {
    $this->load->helper('url');
    $this->load->view('templates/admin/header');
    $this->load->view('admin/animal_farms/index');
    $this->load->view('templates/admin/footer');
  }

  private function _before_filter() {
    if ($this->session->userdata('logged_in') == null) {
      redirect('login');
    }
  }

}
