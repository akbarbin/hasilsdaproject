<?php

class Lands_model extends Application_Model {

    private $tbl_lands = 'lands';
    private $tbl_prefix = 'la_';

    public function __construct() {
        $this->load->database();
    }

    //select options * without conditions
    public function get_options_lands() {
        $this->db->select('*');
        $this->db->from('lands');
        $query = $this->db->get();
        return $query;
    }

    public function get_all_lands() {
        $this->db->select('*');
        $this->db->join('users', 'users.usr_id = lands.la_user_id');
        $this->db->from('lands');
        $query = $this->db->get();
        return $query;
    }

    //insert lands
    public function set_land() {
        $data = array(
            'la_title' => $this->input->post('la_title'),
            'la_wide_land' => $this->input->post('la_wide_land'),
            'la_location' => $this->input->post('la_location'),
            'la_user_id' => $this->input->post('la_user_id'),
            'la_created_at' => date("Y-m-d H:i:s"),
            'la_updated_at' => date("Y-m-d H:i:s")
        );
        return $this->db->insert('lands', $data);
    }

    //u lands
    public function update_land($land_id) {
        $data = array(
            'la_title' => $this->input->post('la_title'),
            'la_wide_land' => $this->input->post('la_wide_land'),
            'la_location' => $this->input->post('la_location'),
            'la_user_id' => $this->input->post('la_user_id'),
            'la_created_at' => date("Y-m-d H:i:s"),
            'la_updated_at' => date("Y-m-d H:i:s")
        );
        $this->db->where('la_id', $land_id);
        $this->db->update('lands', $data);
    }

    //find land by la_id
    public function get_land($land_id) {
        $this->db->select('*');
        $query = $this->db->get_where('lands', array('la_id' => $land_id));
        return $query->row_array();
    }

    public function get_options_title($data = NULL) {
        $list = array();
        $list[NULL] = '- PILIHAN -';

        if ($data->num_rows() > 0) {
            foreach ($data->result_array() as $value) {
                $list[$value['la_id']] = $value['la_title'];
            }
        }
        return $list;
    }

    function find_by_id($land_id) {
        $query = $this->db->get_where('lands', array('la_id' => $land_id));
        return $query->row_object();
    }

}
