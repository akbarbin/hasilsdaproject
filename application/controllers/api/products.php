<?php

class Products extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('products_model');
    }

    public function index() {
        $data['products'] = $this->products_model->get_all_products();
        header('Content-Type: application/json');
        echo json_encode($data['products']->result_array());
    }

}
