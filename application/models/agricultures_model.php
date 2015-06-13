<?php

class Agricultures_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function get_all_products() {
    $this->db->select('*');
    $this->db->from('products');
    $this->db->join('users', 'users.usr_id = products.pr_user_id');
    $query = $this->db->get();
    return $query;
  }

  public function get_all_agricultures() {
    $this->db->select('*');
    $this->db->from('products');
    $this->db->join('users', 'users.usr_id = products.pr_user_id');
    $this->db->where('pr_type', 'pertanian');
    $query = $this->db->get();
    return $query;
  }

  public function get_search_products() {
    $this->db->select('*');
    $this->db->where(array('pr_location' => $this->input->post('pr_location'), 'pr_type' => $this->input->post('pr_type')));
    if ($this->input->post('keyword') !== '') {
      $this->db->like('pr_title', $this->input->post('keyword'), 'both');
    }
    $this->db->from('products');
    $this->db->join('users', 'users.usr_id = products.pr_user_id');
    $query = $this->db->get();
    return $query;
  }

  public function get_search_products_icon() {
    $this->db->select('*');
    $this->db->like('pr_title', $this->input->post('search'), 'both');
    $this->db->or_like('pr_description', $this->input->post('search'), 'both');
    $this->db->or_like('pr_location', $this->input->post('search'), 'both');
    $this->db->or_like('pr_type', $this->input->post('search'), 'both');
    $this->db->from('products');
    $this->db->join('users', 'users.usr_id = products.pr_user_id');
    $query = $this->db->get();
    return $query;
  }

  //insert agricultures
  public function set_agriculture() {
    $data = array(
        'pr_title' => $this->input->post('pr_title'),
        'pr_description' => $this->input->post('pr_description'),
        'pr_location' => $this->input->post('pr_location'),
        'pr_type' => $this->input->post('pr_type'),
        'pr_user_id' => $this->input->post('pr_user_id'),
        'pr_created_at' => date("Y-m-d H:i:s"),
        'pr_updated_at' => date("Y-m-d H:i:s")
    );
    return $this->db->insert('products', $data);
  }

  //u agricultures
  public function update_agriculture($agriculture_id) {
    $data = array(
        'pr_title' => $this->input->post('pr_title'),
        'pr_description' => $this->input->post('pr_description'),
        'pr_location' => $this->input->post('pr_location'),
        'pr_type' => $this->input->post('pr_type'),
        'pr_user_id' => $this->input->post('pr_user_id'),
        'pr_created_at' => date("Y-m-d H:i:s"),
        'pr_updated_at' => date("Y-m-d H:i:s")
    );
    $this->db->where('pr_id', $agriculture_id);
    $this->db->update('products', $data);
  }

  //find agriculture by pr_id
  public function get_agriculture($agriculture_id) {
    $this->db->select(
            'pr_id, pr_title, pr_description, pr_location, pr_photo, pr_user_id, usr_username'
    );
    $this->db->join('users', 'users.usr_id = products.pr_user_id');
    $query = $this->db->get_where('products', array('pr_id' => $agriculture_id));
    return $query->row_array();
  }

  //find product by pr_id
  public function get_product($product_id) {
    $query = $this->db->get_where('products', array('pr_id' => $product_id));
    return $query->row_array();
  }
}
