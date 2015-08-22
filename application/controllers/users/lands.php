<?php

class Lands extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->_before_filter();
    $this->load->model('lands_model');
    $this->load->model('users_model');
  }

  public function index() {
    $data['lands'] = $this->lands_model->get_all_lands();
    $this->load->view('templates/users/header');
    $this->load->view('users/lands/index', $data);
    $this->load->view('templates/users/footer');
  }

  public function create() {
    $data['option_users'] = $this->users_model->get_options_users();
    $this->form_validation->set_rules('la_title', 'Name', 'required');
    $this->form_validation->set_rules('la_location', 'Lokasi', 'required');
    $this->form_validation->set_rules('la_type', 'Kategori', 'required');
    $this->form_validation->set_rules('la_user_id', 'Petani/Peternak', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/users/header');
      $this->load->view('users/lands/create', $data);
      $this->load->view('templates/users/footer');
    } else {
      $this->lands_model->set_land();
      redirect('users/lands');
    }
  }

  public function show($land_id) {
    $data['land'] = $this->get_obj_land($land_id);
    $this->load->view('templates/users/header');
    $this->load->view('users/lands/show', $data);
    $this->load->view('templates/users/footer');
  }

  public function edit($land_id) {
    $data['land'] = $this->get_obj_land($land_id);
    $data['option_users'] = $this->users_model->get_options_users();
    $this->form_validation->set_rules('la_title', 'Judul', 'required');
    $this->form_validation->set_rules('la_description', 'Deskripsi', 'required');
    $this->form_validation->set_rules('la_location', 'Lokasi', 'required');
    $this->form_validation->set_rules('la_type', 'Kategori', 'required');
    $this->form_validation->set_rules('la_user_id', 'Petani/Peternak', 'required');

    if ($this->form_validation->run() === FALSE) {

      $this->load->view('templates/users/header');
      $this->load->view('users/lands/edit', $data);
      $this->load->view('templates/users/footer');
    } else {
      $this->lands_model->update_land($land_id);
      redirect('users/lands');
    }
  }

  public function destroy($la_id) {
    $this->db->delete('products', array('la_id' => $la_id));
    redirect('users/lands');
  }

  //private function
  private function get_obj_land($land_id) {
    $data['land'] = $this->lands_model->get_land($land_id);
    if (empty($data['land'])) {
      show_404();
    }
    return $data['land'];
  }

  private function _before_filter() {
    if ($this->session->userdata('logged_in') == null) {
      redirect('login');
    }
  }

}
