<?php

class Abouts extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->_before_filter();
    $this->load->model('abouts_model');
  }

  public function index() {
    $data['abouts'] = '';#$this->abouts_model->get_all_abouts();
    $this->load->view('templates/admin/header');
    $this->load->view('admin/abouts/index', $data);
    $this->load->view('templates/admin/footer');
  }

  public function create() {
    $data['options_select'] = $this->abouts_model->options_select();
    $this->form_validation->set_rules('usr_aboutname', 'Username', 'required');
    $this->form_validation->set_rules('usr_address', 'Alamat', 'required');
    $this->form_validation->set_rules('usr_no_telp', 'No Telp', 'numeric');
    $this->form_validation->set_rules('usr_type', 'Tipe about', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/admin/header');
      $this->load->view('admin/abouts/create', $data);
      $this->load->view('templates/admin/footer');
    } else {
      $this->abouts_model->set_about();
      redirect('admin/abouts');
    }
  }

  public function show($about_id) {
    $data['about'] = $this->get_obj_about($about_id);
    $this->load->view('templates/admin/header');
    $this->load->view('admin/abouts/show', $data);
    $this->load->view('templates/admin/footer');
  }

  public function edit($about_id) {
    $data['about'] = $this->get_obj_about($about_id);
    $data['options_select'] = $this->abouts_model->options_select();
    $this->form_validation->set_rules('usr_aboutname', 'Username', 'required');
    $this->form_validation->set_rules('usr_address', 'Alamat', 'required');
    $this->form_validation->set_rules('usr_no_telp', 'No Telp', 'numeric');
    $this->form_validation->set_rules('usr_type', 'Tipe about', 'required');

    if ($this->form_validation->run() === FALSE) {

      $this->load->view('templates/admin/header');
      $this->load->view('admin/abouts/edit', $data);
      $this->load->view('templates/admin/footer');
    } else {
      $this->abouts_model->update_about($about_id);
      redirect('admin/abouts');
    }
  }

  public function destroy($usr_id) {
    $this->db->delete('products', array('usr_id' => $usr_id));
    redirect('admin/abouts');
  }

  //private function
  private function get_obj_about($about_id) {
    $data['about'] = $this->abouts_model->get_about($about_id);
    if (empty($data['about'])) {
      show_404();
    }
    return $data['about'];
  }

  private function _before_filter() {
    if ($this->session->userdata('logged_in') == null) {
      redirect('login');
    }
  }

}
