<?php

class Subscribes_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function set_subscribe() {
    
    $data = array(
        'sub_email' => $this->input->post('email')
    );
    return $this->db->insert('subscribes', $data);
  }

}
