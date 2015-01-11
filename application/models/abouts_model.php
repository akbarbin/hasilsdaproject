<?php

class Abouts_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  //select options * without conditions
  public function get_options_abouts() {
    $this->db->select('*');
    $this->db->from('abouts');
    $query = $this->db->get();
    return $query;
  }

  public function get_all_abouts() {
    $this->db->select('*');
    $this->db->from('abouts');
    $query = $this->db->get();
    return $query;
  }

  //insert abouts
  public function set_about() {
    $data = array(
        'abt_title' => $this->input->post('abt_title'),
        'abt_description' => $this->input->post('abt_description'),
        'abt_location' => $this->input->post('abt_location'),
        'abt_created_at' => date("Y-m-d H:i:s"),
        'abt_updated_at' => date("Y-m-d H:i:s")
    );
    return $this->db->insert('abouts', $data);
  }

  //u abouts
  public function update_about($about_id) {
    $data = array(
        'abt_title' => $this->input->post('abt_title'),
        'abt_description' => $this->input->post('abt_description'),
        'abt_location' => $this->input->post('abt_location'),
        'abt_created_at' => date("Y-m-d H:i:s"),
        'abt_updated_at' => date("Y-m-d H:i:s")
    );
    $this->db->where('abt_id', $about_id);
    $this->db->update('abouts', $data);
  }

  //find about by abt_id
  public function get_about($about_id) {
    $this->db->select('*');
    $query = $this->db->get_where('abouts', array('abt_id' => $about_id));
    return $query->row_array();
  }

  public function options_select() {
    $options = array(
        'admin' => 'Admin',
        'petani' => 'Petani',
        'peternak' => 'Peternak'
    );
    return $options;
  }

}
