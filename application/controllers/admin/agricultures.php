<?php

class Agricultures extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('agricultures_model');
  }

  public function index() {
    $data['agricultures'] = $this->agricultures_model->get_agricultures();
    $this->load->view('templates/admin/header');
    $this->load->view('admin/agricultures/index', $data);
    $this->load->view('templates/admin/footer');
  }

  public function create() {
    $this->load->helper('url');
    $this->load->view('templates/admin/header');
    $this->load->view('admin/agricultures/create');
    $this->load->view('templates/admin/footer');
  }

  public function show() {
    $this->load->helper('url');
    $this->load->view('templates/admin/header');
    $this->load->view('admin/agricultures/show');
    $this->load->view('templates/admin/footer');
  }

}
