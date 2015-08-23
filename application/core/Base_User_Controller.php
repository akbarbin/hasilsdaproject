<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Base_User_Controller extends CI_Controller {

    public static $segment_pagination = 4;
    public static $limit = 10;

    public function __construct() {
        parent::__construct();
        $this->load->model('Users_model');
    }

    public function set_flash_notice($action = NULL, $alert = NULL, $message = NULL) {
        $this->session->set_flashdata('item', array('message' => 'Tambah data berhasil', 'class' => 'success'));
    }

    // pengecekan admin user
    function is_admin() {
        $current_user = $this->current_user();
        if (!empty($current_user)) {
            if ($current_user['usr_type'] == 'admin') {
                return TRUE;
            }
        }
    }

    // before filter untuk pengecekan admin yang sudah login agar masuk dashboard admin
    // sehingga admin tidak bisa mengakses halaman front end.
    function check_admin_page() {
        if ($this->session->userdata('logged_in') != null) {
            $this->session->set_flashdata('item', array('message' => 'Anda tidak memiliki hak akses', 'class' => 'warning'));
            redirect('admin/dashboard');
        }
    }

    // before filter untuk pengecekan halaman guest agar tidak bisa mengakses halaman dashboard admin
    function check_guest_page() {
        if ($this->session->userdata('logged_in') == null) {
            $this->session->set_flashdata('item', array('message' => 'Anda tidak memiliki hak akses', 'class' => 'warning'));
            redirect('admin/login');
        }
    }

    protected function get_options_name($data = NULL) {
        $list = array();
        $list[NULL] = '- PILIHAN -';
        foreach ($data as $value) {
            $list[$value['id']] = $value['name'];
        }
        return $list;
    }

    protected function get_options_title($data = NULL) {
        $list = array();
        $list[NULL] = '- PILIHAN -';

        if ($data->num_rows() > 0) {
            foreach ($data->result_array() as $value) {
                $list[$value['id']] = $value['title'];
            }
        }
        return $list;
    }
}
