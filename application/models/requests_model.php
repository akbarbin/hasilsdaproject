<?php

class Requests_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function set_request() {
    
    $data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'no_telp' => $this->input->post('no_telp'),
        'content' => $this->input->post('content'),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
    );
    return $this->db->insert('requests', $data);
  }

}
