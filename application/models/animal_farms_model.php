<?php

class Animal_farms_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function get_all_animal_farms() {
    $this->db->select('*');
    $this->db->from('products');
    $this->db->join('users', 'users.usr_id = products.pr_user_id');
    $this->db->where('pr_type', 'perternakan');
    $query = $this->db->get();
    return $query;
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

  public function get_search_icon() {
    $this->db->select('*');
    $this->db->like('title', $this->input->post('search'), 'both');
    $this->db->or_like('description', $this->input->post('search'), 'both');
    $this->db->or_like('location', $this->input->post('search'), 'both');
    $this->db->or_like('product_type', $this->input->post('search'), 'both');
    $this->db->from('products');
    $this->db->join('users', 'users.id = products.user_id');
    $query = $this->db->get();
    return $query;
  }

  //insert animal_farms
  public function set_animal_farm() {
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

  //u animal_farms
  public function update_animal_farm($animal_farm_id) {
    $data = array(
        'pr_title' => $this->input->post('pr_title'),
        'pr_description' => $this->input->post('pr_description'),
        'pr_location' => $this->input->post('pr_location'),
        'pr_type' => $this->input->post('pr_type'),
        'pr_user_id' => $this->input->post('pr_user_id'),
        'pr_created_at' => date("Y-m-d H:i:s"),
        'pr_updated_at' => date("Y-m-d H:i:s")
    );
    $this->db->where('pr_id', $animal_farm_id);
    $this->db->update('products', $data);
  }

  //find animal_farm by pr_id
  public function get_animal_farm($animal_farm_id) {
    $this->db->select(
            'pr_id, pr_title, pr_description, pr_location, pr_photo, pr_user_id, usr_username'
    );
    $this->db->join('users', 'users.usr_id = products.pr_user_id');
    $query = $this->db->get_where('products', array('pr_id' => $animal_farm_id));
    return $query->row_array();
  }

}
