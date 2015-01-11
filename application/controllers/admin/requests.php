<?php

class Requests extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->_before_filter();
    $this->load->model('requests_model');
  }

  public function index() {
    $data['requests'] = $this->requests_model->get_all_requests();
    $this->load->view('templates/admin/header');
    $this->load->view('admin/requests/index', $data);
    $this->load->view('templates/admin/footer');
  }

  public function reply($request_id) {
    $data['request'] = $this->requests_model->get_obj_request($request_id);
    $this->form_validation->set_rules('req_content', 'Konten', 'required');
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/admin/header');
      $this->load->view('admin/requests/reply', $data);
      $this->load->view('templates/admin/footer');
    } else {
      $this->requests_model->set_reply();
      redirect('admin/requests/');
    }
  }

  private function _before_filter() {
    if ($this->session->userdata('logged_in') == null) {
      redirect('login');
    }
  }

}
