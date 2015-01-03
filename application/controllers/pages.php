<?php

class Pages extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('agricultures_model');
    $this->load->model('subscribes_model');
  }

  public function view($page = 'home') {
    $this->load->helper('url');
    if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
      // Whoops, we don't have a page for that!
      show_404();
    }
    if ($page === 'semua') {
      $data['products'] = $this->agricultures_model->get_all_products();
    } else if ($page === 'pertanian') {
      $data['agricultures'] = $this->agricultures_model->get_all_agricultures();
    } else if ($page === 'perternakan') {
      $data['animal_farms'] = $this->agricultures_model->get_all_animal_farms();
    }

    $data['title'] = ucfirst($page); // Capitalize the first letter

    $this->load->view('templates/header', $data);
    $this->load->view('pages/' . $page, $data);
    $this->load->view('templates/footer', $data);
  }

  public function search() {
    $data['title'] = "Semua"; // Capitalize the first letter

    if ($this->input->post('search') == '') {
      $data['products'] = $this->agricultures_model->get_search();
    } else {
      $data['products'] = $this->agricultures_model->get_search_icon();
    }
    $this->load->view('templates/header', $data);
    $this->load->view('pages/search', $data);
    $this->load->view('templates/footer');
  }

  public function langganan() {
    $data['title'] = "Semua";
    $data['products'] = $this->agricultures_model->get_all_products();
    $this->subscribes_model->set_subscribe();
    $this->load->view('templates/header', $data);
    $this->load->view('pages/semua', $data);
    $this->load->view('templates/footer');
  }

}
