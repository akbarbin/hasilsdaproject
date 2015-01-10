<?php

class Requests_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function get_all_requests() {
    $this->db->select('*');
    $query = $this->db->get_where('requests', array('req_parent_id' => NULL));
    return $query;
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

  public function set_reply() {
    $data = array(
        'req_name' => 'admin',
        'req_email' => 'csrumahsda@gmail.com',
        'req_no_telp' => '',
        'req_content' => $this->input->post('req_content'),
        'req_parent_id' => $this->input->post('req_parent_id'),
        'req_created_at' => date("Y-m-d H:i:s"),
        'req_updated_at' => date("Y-m-d H:i:s")
    );
    return $this->db->insert('requests', $data);
  }

  //find request by pr_id
  public function get_obj_request($request_id) {
    $this->db->select('*');
    $query = $this->db->get_where('requests', array('req_id' => $request_id));
    return $query->row_array();
  }

}
