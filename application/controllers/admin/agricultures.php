<?php

class Agricultures extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->_before_filter();
    $this->load->model('agricultures_model');
    $this->load->model('users_model');
  }

  public function index() {
    $data['agricultures'] = $this->agricultures_model->get_all_agricultures();
    $this->load->view('templates/admin/header');
    $this->load->view('admin/agricultures/index', $data);
    $this->load->view('templates/admin/footer');
  }

  public function create() {
    $data['option_users'] = $this->users_model->get_options_users();
    $this->form_validation->set_rules('pr_title', 'Judul', 'required');
    $this->form_validation->set_rules('pr_description', 'Deskripsi', 'required');
    $this->form_validation->set_rules('pr_location', 'Lokasi', 'required');
    $this->form_validation->set_rules('pr_type', 'Kategori', 'required');
    $this->form_validation->set_rules('pr_user_id', 'Petani/Peternak', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/admin/header');
      $this->load->view('admin/agricultures/create', $data);
      $this->load->view('templates/admin/footer');
    } else {
      $this->agricultures_model->set_agriculture();
      redirect('admin/agricultures');
    }
  }

  public function show($agriculture_id) {
    $data['agriculture'] = $this->get_obj_agriculture($agriculture_id);
    $this->load->view('templates/admin/header');
    $this->load->view('admin/agricultures/show', $data);
    $this->load->view('templates/admin/footer');
  }

  public function edit($agriculture_id) {
    $data['agriculture'] = $this->get_obj_agriculture($agriculture_id);
    $data['option_users'] = $this->users_model->get_options_users();
    $this->form_validation->set_rules('pr_title', 'Judul', 'required');
    $this->form_validation->set_rules('pr_description', 'Deskripsi', 'required');
    $this->form_validation->set_rules('pr_location', 'Lokasi', 'required');
    $this->form_validation->set_rules('pr_type', 'Kategori', 'required');
    $this->form_validation->set_rules('pr_user_id', 'Petani/Peternak', 'required');

    if ($this->form_validation->run() === FALSE) {

      $this->load->view('templates/admin/header');
      $this->load->view('admin/agricultures/edit', $data);
      $this->load->view('templates/admin/footer');
    } else {
      $this->agricultures_model->update_agriculture($agriculture_id);
      redirect('admin/agricultures');
    }
  }

  public function destroy($pr_id) {
    $this->db->delete('products', array('pr_id' => $pr_id));
    redirect('admin/agricultures');
  }

  //private function
  private function get_obj_agriculture($agriculture_id) {
    $data['agriculture'] = $this->agricultures_model->get_agriculture($agriculture_id);
    if (empty($data['agriculture'])) {
      show_404();
    }
    return $data['agriculture'];
  }

  private function _before_filter() {
    if ($this->session->userdata('logged_in') == null) {
      redirect('login');
    }
  }

}
