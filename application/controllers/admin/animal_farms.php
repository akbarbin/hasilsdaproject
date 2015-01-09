<?php

class Animal_farms extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->_before_filter();
    $this->load->model('animal_farms_model');
    $this->load->model('users_model');
  }

  public function index() {
    $data['animal_farms'] = $this->animal_farms_model->get_all_animal_farms();
    $this->load->view('templates/admin/header');
    $this->load->view('admin/animal_farms/index', $data);
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
      $this->load->view('admin/animal_farms/create', $data);
      $this->load->view('templates/admin/footer');
    } else {
      $this->animal_farms_model->set_animal_farm();
      redirect('admin/animal_farms');
    }
  }

  public function show($animal_farm_id) {
    $data['animal_farm'] = $this->get_obj_animal_farm($animal_farm_id);
    $this->load->view('templates/admin/header');
    $this->load->view('admin/animal_farms/show', $data);
    $this->load->view('templates/admin/footer');
  }

  public function edit($animal_farm_id) {
    $data['animal_farm'] = $this->get_obj_animal_farm($animal_farm_id);
    $data['option_users'] = $this->users_model->get_options_users();
    $this->form_validation->set_rules('pr_title', 'Judul', 'required');
    $this->form_validation->set_rules('pr_description', 'Deskripsi', 'required');
    $this->form_validation->set_rules('pr_location', 'Lokasi', 'required');
    $this->form_validation->set_rules('pr_type', 'Kategori', 'required');
    $this->form_validation->set_rules('pr_user_id', 'Petani/Peternak', 'required');

    if ($this->form_validation->run() === FALSE) {

      $this->load->view('templates/admin/header');
      $this->load->view('admin/animal_farms/edit', $data);
      $this->load->view('templates/admin/footer');
    } else {
      $this->animal_farms_model->update_animal_farm($animal_farm_id);
      redirect('admin/animal_farms');
    }
  }

  public function destroy($pr_id) {
    $this->db->delete('products', array('pr_id' => $pr_id));
    redirect('admin/animal_farms');
  }

  //private function
  private function get_obj_animal_farm($animal_farm_id) {
    $data['animal_farm'] = $this->animal_farms_model->get_animal_farm($animal_farm_id);
    if (empty($data['animal_farm'])) {
      show_404();
    }
    return $data['animal_farm'];
  }

  private function _before_filter() {
    if ($this->session->userdata('logged_in') == null) {
      redirect('login');
    }
  }

}
