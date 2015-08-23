<?php

class Products extends Base_User_Controller {

    public function __construct() {
        parent::__construct();
        $this->_before_filter();
        $this->load->model('products_model');
        $this->load->model('lands_model');
    }

    public function index() {
        $data['products'] = $this->products_model->get_all_products();
        $this->load->view('templates/users/header');
        $this->load->view('users/products/index', $data);
        $this->load->view('templates/users/footer');
    }

    public function create() {
        $data['options_select'] = $this->lands_model->get_options_title($this->lands_model->get_all_lands());
        $data['phase_options_select'] = $this->products_model->phase_options_select();
        $data['type_options_select'] = $this->products_model->type_options_select();
        $this->form_validation->set_rules('pr_land_id', 'Lahan', 'required');
        $this->form_validation->set_rules('pr_title', 'Judul', 'required');
        $this->form_validation->set_rules('pr_estm_crop_field', 'Estimasi Hasil Panen', 'required');
        $this->form_validation->set_rules('pr_estm_harvest', 'Estimasi Tanggal Panen', 'required');
        $this->form_validation->set_rules('pr_type', 'Kategori', 'required');
        $this->form_validation->set_rules('pr_description', 'Deskripsi', 'required');
        $this->form_validation->set_rules('pr_user_id', 'Petani/Peternak', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/users/header');
            $this->load->view('users/products/create', $data);
            $this->load->view('templates/users/footer');
        } else {
            $this->products_model->save($this->input->post());
            redirect('users/products');
        }
    }

    public function show($product_id) {
        $data['product'] = $this->get_obj_product($product_id);
        $this->load->view('templates/users/header');
        $this->load->view('users/products/show', $data);
        $this->load->view('templates/users/footer');
    }

    public function edit($product_id) {
        $data['product'] = $this->get_obj_product($product_id);
        $data['options_select'] = $this->lands_model->get_options_title($this->lands_model->get_all_lands());
        $data['phase_options_select'] = $this->products_model->phase_options_select();
        $data['type_options_select'] = $this->products_model->type_options_select();
        $this->form_validation->set_rules('pr_land_id', 'Lahan', 'required');
        $this->form_validation->set_rules('pr_title', 'Judul', 'required');
        $this->form_validation->set_rules('pr_estm_crop_field', 'Estimasi Hasil Panen', 'required');
        $this->form_validation->set_rules('pr_estm_harvest', 'Estimasi Tanggal Panen', 'required');
        $this->form_validation->set_rules('pr_type', 'Kategori', 'required');
        $this->form_validation->set_rules('pr_description', 'Deskripsi', 'required');
        $this->form_validation->set_rules('pr_user_id', 'Petani/Peternak', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/users/header');
            $this->load->view('users/products/edit', $data);
            $this->load->view('templates/users/footer');
        } else {
            $this->products_model->save($this->input->post(), $product_id);
            redirect('users/products');
        }
    }

    public function destroy($product_id) {
        $this->db->delete('products', array('pr_id' => $product_id));
        redirect('users/products');
    }

    //private function
    private function get_obj_product($product_id) {
        $data['product'] = $this->products_model->get_product($product_id);
        if (empty($data['product'])) {
            show_404();
        }
        return $data['product'];
    }

    private function _before_filter() {
        if ($this->session->userdata('logged_in') == null) {
            redirect('login');
        }
    }

}
