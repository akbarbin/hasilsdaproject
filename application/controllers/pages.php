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
    $this->load->view('pages/semua', $data);
    $this->load->view('templates/footer');
  }

  public function langganan() {
    $data['title'] = "Semua";
    $data['products'] = $this->agricultures_model->get_all_products();
    $this->form_validation->set_rules('sub_email', 'Email', 'required|valid_email|is_unique[subscribes.sub_email]');
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('pages/semua', $data);
      $this->load->view('templates/footer');
    } else {
      $this->subscribes_model->set_subscribe();
      redirect("pages/view/semua");
    }
  }

  public function permintaan() {
    $data['title'] = "hubungikami";
    $this->form_validation->set_rules('name', 'Nama', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('no_telp', 'No Telp', 'required|numeric');
    $this->form_validation->set_rules('content', 'Permintaan', 'required');

    $this->load->model('requests_model');
    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('pages/hubungikami', $data);
      $this->load->view('templates/footer');
    } else {
      $this->requests_model->set_request();
      redirect('pages/view/hubungikami');
    }
  }

}
