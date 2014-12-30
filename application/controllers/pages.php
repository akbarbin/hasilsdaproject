<?php

class Pages extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('agricultures_model');
  }

  public function view($page = 'home') {
    $this->load->helper('url');
    if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
      // Whoops, we don't have a page for that!
      show_404();
    }
    if ($page === 'semua') {
      $data['products'] = $this->agricultures_model->get_agricultures();
    }

    $data['title'] = ucfirst($page); // Capitalize the first letter

    $this->load->view('templates/header', $data);
    $this->load->view('pages/' . $page, $data);
    $this->load->view('templates/footer', $data);
  }

}
