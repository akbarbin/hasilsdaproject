<?php

class Lands extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->_before_filter();
    $this->load->model('lands_model');
    $this->load->model('lands_model');
  }

  public function index() {
    $data['lands'] = $this->lands_model->get_all_lands();
    $this->load->view('templates/users/header');
    $this->load->view('users/lands/index', $data);
    $this->load->view('templates/users/footer');
  }

  public function create() {
    $this->form_validation->set_rules('la_title', 'Name', 'required');
    $this->form_validation->set_rules('la_wide_land', 'Luas', 'required');
    $this->form_validation->set_rules('la_location', 'Lokasi', 'required');
    $this->form_validation->set_rules('la_user_id', 'la_user_id', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/users/header');
      $this->load->view('users/lands/create');
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
    $this->form_validation->set_rules('la_title', 'Name', 'required');
    $this->form_validation->set_rules('la_wide_land', 'Luas', 'required');
    $this->form_validation->set_rules('la_location', 'Lokasi', 'required');
    $this->form_validation->set_rules('la_user_id', 'la_user_id', 'required');

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
    $this->db->delete('lands', array('la_id' => $la_id));
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
