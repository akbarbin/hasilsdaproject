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
        'usr_aboutname' => $this->input->post('usr_aboutname'),
        'usr_address' => $this->input->post('usr_address'),
        'usr_no_telp' => $this->input->post('usr_no_telp'),
        'usr_status' => $this->input->post('usr_status'),
        'usr_type' => $this->input->post('usr_type'),
        'usr_created_at' => date("Y-m-d H:i:s"),
        'usr_updated_at' => date("Y-m-d H:i:s")
    );
    return $this->db->insert('abouts', $data);
  }

  //u abouts
  public function update_about($about_id) {
    $data = array(
        'usr_aboutname' => $this->input->post('usr_aboutname'),
        'usr_address' => $this->input->post('usr_address'),
        'usr_no_telp' => $this->input->post('usr_no_telp'),
        'usr_status' => $this->input->post('usr_status'),
        'usr_type' => $this->input->post('usr_type'),
        'usr_created_at' => date("Y-m-d H:i:s"),
        'usr_updated_at' => date("Y-m-d H:i:s")
    );
    $this->db->where('usr_id', $about_id);
    $this->db->update('abouts', $data);
  }

  //find about by usr_id
  public function get_about($about_id) {
    $this->db->select('*');
    $query = $this->db->get_where('abouts', array('usr_id' => $about_id));
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
