<?php

class Pages extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('users_model');
    $this->load->model('agricultures_model');
    $this->load->model('subscribes_model');
    $this->load->model('animal_farms_model');
  }

  public function view($page = 'home') {
    if (!file_exists(APPPATH . '/views/pages/' . $page . '.php')) {
      // Whoops, we don't have a page for that!
      show_404();
    }
    if ($page === 'semua') {
      $data['products'] = $this->agricultures_model->get_all_products();
    } else if ($page === 'pertanian') {
      $data['agricultures'] = $this->agricultures_model->get_all_agricultures();
    } else if ($page === 'perternakan') {
      $data['animal_farms'] = $this->animal_farms_model->get_all_animal_farms();
    }

    $data['title'] = ucfirst($page); // Capitalize the first letter

    $this->load->view('templates/header', $data);
    $this->load->view('pages/' . $page, $data);
    $this->load->view('templates/footer', $data);
  }

  public function search() {
    $data['title'] = "Semua"; // Capitalize the first letter

    if ($this->input->post('search') == '') {
      $data['products'] = $this->agricultures_model->get_search_products();
    } else {
      $data['products'] = $this->agricultures_model->get_search_products_icon();
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
    $this->form_validation->set_rules('req_name', 'Nama', 'required');
    $this->form_validation->set_rules('req_email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('req_no_telp', 'No Telp', 'required|numeric');
    $this->form_validation->set_rules('req_content', 'Permintaan', 'required');

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

  public function daftar() {
    $data['title'] = "Daftar";
    $data['options_select'] = $this->users_model->options_select();

    $this->form_validation->set_rules('name', 'Nama', 'required');
    $this->form_validation->set_rules('usr_username', 'Username', 'required|is_unique[users.username]');
    $this->form_validation->set_rules('usr_username', 'Email', 'is_unique[users.email]');
    $this->form_validation->set_rules('usr_address', 'Alamat', 'required');
    $this->form_validation->set_rules('usr_password', 'Password', 'trim|required|xss_clean|min_length[5]|matches[usr_password_confirmation]|md5');
    $this->form_validation->set_rules('usr_password_confirmation', 'Password Confirmation', 'required|min_length[5]|md5');
    $this->form_validation->set_rules('usr_no_telp', 'No Telp', 'numeric|max_length[15]');
    $this->form_validation->set_rules('usr_type', 'Tipe user', 'required');
    $this->form_validation->set_rules('agreement', 'Persetujuan', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->session->set_flashdata('item', array('message' => 'Pendaftaran akun tidak berhasil', 'class' => 'danger'));
      $this->load->view('templates/header', $data);
      $this->load->view('pages/daftar', $data);
      $this->load->view('templates/footer');
    } else {
      $this->session->set_flashdata('item', array('message' => 'Tambah data berhasil', 'class' => 'success'));
      $this->users_model->save($this->input->post());
      redirect('/');
    }
  }

  public function rincian_produk($product_id = NULL) {
    $data['product'] = $this->_get_obj_product($product_id);
    $data['title'] = "rincian produk";
    $this->load->view('templates/header', $data);
    $this->load->view('pages/rincian_produk', $data);
    $this->load->view('templates/footer');
  }

  public function test_page() {
    $this->agricultures_model->get_some_search_products();
  }

  //private function
  private function _get_obj_product($product_id) {
    $data['product'] = $this->agricultures_model->get_product($product_id);
    if (empty($data['product'])) {
      show_404();
    }
    return $data['product'];
  }

}
