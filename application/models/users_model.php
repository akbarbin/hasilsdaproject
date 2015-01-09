<?php

class Users_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  //select options * without conditions
  public function get_options_users() {
    $this->db->select('usr_id, usr_username');
    $this->db->from('users');
    $query = $this->db->get();
    return $query;
  }

}
