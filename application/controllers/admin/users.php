<?php

class Users extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->_before_filter();
    $this->load->model('users_model');
  }

  public function index() {
    $data['users'] = $this->users_model->get_all_users();
    $this->load->view('templates/admin/header');
    $this->load->view('admin/users/index', $data);
    $this->load->view('templates/admin/footer');
  }

  public function create() {
    $data['options_select'] = $this->users_model->options_select();
    $this->form_validation->set_rules('usr_username', 'Username', 'required');
    $this->form_validation->set_rules('usr_address', 'Alamat', 'required');
    $this->form_validation->set_rules('usr_password', 'Password', 'trim|required|xss_clean|matches[usr_password_confirmation]|md5');
    $this->form_validation->set_rules('usr_password_confirmation', 'Password Confirmation', 'required|md5');
    $this->form_validation->set_rules('usr_no_telp', 'No Telp', 'numeric');
    $this->form_validation->set_rules('usr_type', 'Tipe user', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/admin/header');
      $this->load->view('admin/users/create', $data);
      $this->load->view('templates/admin/footer');
    } else {
      $this->users_model->set_user();
      redirect('admin/users');
    }
  }

  public function show($user_id) {
    $data['user'] = $this->get_obj_user($user_id);
    $this->load->view('templates/admin/header');
    $this->load->view('admin/users/show', $data);
    $this->load->view('templates/admin/footer');
  }

  public function edit($user_id) {
    $data['user'] = $this->get_obj_user($user_id);
    $data['options_select'] = $this->users_model->options_select();
    $this->form_validation->set_rules('usr_username', 'Username', 'required');
    $this->form_validation->set_rules('usr_password', 'Password', 'trim|required|xss_clean|matches[usr_password_confirmation]|md5');
    $this->form_validation->set_rules('usr_password_confirmation', 'Password Confirmation', 'required|md5');
    $this->form_validation->set_rules('usr_address', 'Alamat', 'required');
    $this->form_validation->set_rules('usr_no_telp', 'No Telp', 'numeric');
    $this->form_validation->set_rules('usr_type', 'Tipe user', 'required');

    if ($this->form_validation->run() === FALSE) {

      $this->load->view('templates/admin/header');
      $this->load->view('admin/users/edit', $data);
      $this->load->view('templates/admin/footer');
    } else {
      $this->users_model->update_user($user_id);
      redirect('admin/users');
    }
  }

  public function destroy($usr_id) {
    $this->db->delete('products', array('usr_id' => $usr_id));
    redirect('admin/users');
  }

  //private function
  private function get_obj_user($user_id) {
    $data['user'] = $this->users_model->get_user($user_id);
    if (empty($data['user'])) {
      show_404();
    }
    return $data['user'];
  }

  private function _before_filter() {
    if ($this->session->userdata('logged_in') == null) {
      redirect('login');
    }
  }

}
