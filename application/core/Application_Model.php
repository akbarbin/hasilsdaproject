<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Application Model is used for Base Model
 */
class Application_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    private function __get_date_insert_data($tbl_prefix) {
        return array(
            $tbl_prefix . "created_at" => date('Y-m-d H:i:s'),
            $tbl_prefix . "updated_at" => date('Y-m-d H:i:s')
        );
    }

    private function __get_date_update_data($tbl_prefix) {
        return array(
            $tbl_prefix . "updated_at" => date('Y-m-d H:i:s')
        );
    }

    protected function unset_params_before_save($data, $params = array()) {
        foreach ($params as $key => $value) {
            unset($data[$value]);
        }
        return $data;
    }

    protected function set_before_insert($insert_data = array(), $tbl_prefix = NULL) {
        $merge_data = array();
        foreach ($insert_data as $key => $value) {
            if (is_array($value)) {
                $merge_data[] = array_merge($value, $this->__get_date_insert_data($tbl_prefix));
            } else {
                $merge_data = array_merge($insert_data, $this->__get_date_insert_data($tbl_prefix));
            }
        }
        return $merge_data;
    }

    protected function set_before_update($update_data = array(), $tbl_prefix = NULL) {
        $merge_data = array();
        foreach ($update_data as $key => $value) {
            if (is_array($value)) {
                $merge_data[] = array_merge($value, $this->__get_date_update_data($tbl_prefix));
            } else {
                $merge_data = array_merge($update_data, $this->__get_date_update_data($tbl_prefix));
            }
        }
        return $merge_data;
    }

    protected function get_options_name($data = NULL) {
        $list = array();
        $list[NULL] = '- PILIHAN -';
        foreach ($data as $value) {
            $list[$value['id']] = $value['name'];
        }
        return $list;
    }

}
