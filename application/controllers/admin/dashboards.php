<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Dashboards extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

  public function index() {
    if ($this->session->userdata('logged_in')) {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $this->load->view('templates/admin/header');
      $this->load->view('admin/dashboards/index', $data);
      $this->load->view('templates/admin/footer');
    } else {
      //If no session, redirect to login page
      redirect('login', 'refresh');
    }
  }
  
  function logout() {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('home', 'refresh');
  }

}
