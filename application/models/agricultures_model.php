<?php

class Agricultures_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function get_agricultures($id = FALSE) {
    if ($id === FALSE) {
      $this->db->select('*');
      $this->db->from('products');
      $this->db->join('users', 'users.id = products.user_id');
      $query = $this->db->get();
      return $query;
    }

    $query = $this->db->get_where('products', array('id' => $id));
    return $query->row_array();
  }

  public function get_search() {
    $this->db->select('*');
    $this->db->where(array('location' => $this->input->post('location'), 'product_type' => $this->input->post('product_type')));
    if ($this->input->post('keyword') !== '') {
      $this->db->like('title', $this->input->post('keyword'), 'both');
    }
    $this->db->from('products');
    $this->db->join('users', 'users.id = products.user_id');
    $query = $this->db->get();
    return $query;
  }

}
