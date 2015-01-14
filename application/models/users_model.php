<?php

class Users_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  //select options * without conditions
  public function get_options_users() {
    $this->db->select('*');
    $this->db->from('users');
    $query = $this->db->get();
    return $query;
  }

  public function get_all_users() {
    $this->db->select('*');
    $this->db->from('users');
    $query = $this->db->get();
    return $query;
  }

  //insert users
  public function set_user() {
    $data = array(
        'usr_username' => $this->input->post('usr_username'),
        'usr_address' => $this->input->post('usr_address'),
        'usr_no_telp' => $this->input->post('usr_no_telp'),
        'usr_status' => $this->input->post('usr_status'),
        'usr_type' => $this->input->post('usr_type'),
        'usr_created_at' => date("Y-m-d H:i:s"),
        'usr_updated_at' => date("Y-m-d H:i:s")
    );
    return $this->db->insert('users', $data);
  }

  //u users
  public function update_user($user_id) {
    $data = array(
        'usr_username' => $this->input->post('usr_username'),
        'usr_address' => $this->input->post('usr_address'),
        'usr_no_telp' => $this->input->post('usr_no_telp'),
        'usr_status' => $this->input->post('usr_status'),
        'usr_type' => $this->input->post('usr_type'),
        'usr_created_at' => date("Y-m-d H:i:s"),
        'usr_updated_at' => date("Y-m-d H:i:s")
    );
    $this->db->where('usr_id', $user_id);
    $this->db->update('users', $data);
  }

  //find user by usr_id
  public function get_user($user_id) {
    $this->db->select('*');
    $query = $this->db->get_where('users', array('usr_id' => $user_id));
    return $query->row_array();
  }

  public function options_select() {
    $options = array(
        '' => 'Pilih tipe user',
        'admin' => 'Admin',
        'petani' => 'Petani',
        'peternak' => 'Peternak'
    );
    return $options;
  }

}
