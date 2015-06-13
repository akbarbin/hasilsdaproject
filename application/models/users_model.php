<?php

class Users_model extends Application_Model {

  private $tbl_users = 'users';
  private $tbl_prefix = 'usr_';

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

  public function save($data = array(), $id = NULL, $primary_key = 'usr_id') {
    $data = $this->unset_params_before_save($data, array('usr_password_confirmation', 'agreement', 'submit'));
    if (empty($id)) {
      $insert = $this->set_before_insert($data, $this->tbl_prefix);

      $this->db->insert($this->tbl_users, $insert);
      return $insert;
    } else {
      $this->db->where($primary_key, $id);
      $update = $this->set_before_update($data, $this->tbl_prefix);

      return $this->db->update($this->tbl_users, $update);
    }
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
