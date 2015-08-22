<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI

class Dashboards extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->_before_filter();
  }

  public function index() {
    $session_data = $this->session->userdata('logged_in');
    $data['username'] = $session_data['session_usr_username'];
    $this->load->database();
    $data['total_requests'] = $this->db->count_all_results('requests');
    $this->load->view('templates/users/header');
    $this->load->view('users/dashboards/index', $data);
    $this->load->view('templates/users/footer');
  }

  function logout() {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('pages/view/semua');
  }

  private function _before_filter() {
    if ($this->session->userdata('logged_in') == null) {
      redirect('login');
    }
  }

}
