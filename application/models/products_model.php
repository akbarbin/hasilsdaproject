<?php

class Products_model extends Application_Model {

    private $tbl_products = 'products';
    private $tbl_prefix = 'pr_';

    public function __construct() {
        $this->load->database();
    }

    public function get_all_products() {
        $this->db->select('*');
        $this->db->join('users', 'users.usr_id = products.pr_user_id');
        $this->db->from('products');
        $query = $this->db->get();
        return $query;
    }

    public function save($data = array(), $id = NULL, $primary_key = 'pr_id') {
        $data = $this->unset_params_before_save($data, array('submit'));
        if (empty($id)) {
            $insert = $this->set_before_insert($data, $this->tbl_prefix);

            $this->db->insert($this->tbl_products, $insert);
            return $insert;
        } else {
            $this->db->where($primary_key, $id);
            $update = $this->set_before_update($data, $this->tbl_prefix);

            return $this->db->update($this->tbl_products, $update);
        }
    }

    //find product by usr_id
    public function get_product($product_id) {
        $this->db->select('*');
        $this->db->join('users', 'users.usr_id = products.pr_user_id');
        $query = $this->db->get_where('products', array('pr_id' => $product_id));
        return $query->row_array();
    }

    function find_by_id($product_id) {
        $query = $this->db->get_where('products', array('pr_id' => $product_id));
        return $query->row_object();
    }

    public function phase_options_select() {
        $options = array(
            '' => 'Pilih fase status',
            'bajak' => 'Membajak',
            'tanam' => 'Tanam',
            'panen' => 'Panen'
        );
        return $options;
    }

    public function type_options_select() {
        $options = array(
            '' => 'Pilih tipe kategory',
            'peternakan' => 'Perternakan',
            'pertanian' => 'Pertanian',
        );
        return $options;
    }

}