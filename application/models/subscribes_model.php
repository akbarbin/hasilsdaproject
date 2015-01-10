<?php

class Subscribes_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function set_subscribe() {
    
    $data = array(
        'sub_email' => $this->input->post('sub_email'),
        'sub_created_at' => date("Y-m-d H:i:s"),
        'sub_updated_at' => date("Y-m-d H:i:s")
    );
    return $this->db->insert('subscribes', $data);
  }

}
