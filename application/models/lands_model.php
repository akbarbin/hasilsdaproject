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
        $this->db->from('lands');
        $query = $this->db->get();
        return $query;
    }

    public function save($data = array(), $id = NULL, $primary_key = 'la_id') {
        $data = $this->unset_params_before_save($data, array('submit'));
        if (empty($id)) {
            $insert = $this->set_before_insert($data, $this->tbl_prefix);

            $this->db->insert($this->tbl_lands, $insert);
            return $insert;
        } else {
            $this->db->where($primary_key, $id);
            $update = $this->set_before_update($data, $this->tbl_prefix);

            return $this->db->update($this->tbl_lands, $update);
        }
    }

    //find land by la_id
    public function get_land($land_id) {
        $this->db->select('*');
        $query = $this->db->get_where('lands', array('la_id' => $land_id));
        return $query->row_array();
    }

    public function options_select() {
        $options = array(
            '' => 'Pilih tipe land',
            'admin' => 'Admin',
            'petani' => 'Petani',
            'peternak' => 'Peternak',
            'tengkulak' => 'Tengkulak',
            'pembeli' => 'Pembeli'
        );
        return $options;
    }

    function find_by_id($land_id) {
        $query = $this->db->get_where('lands', array('la_id' => $land_id));
        return $query->row_object();
    }
}
