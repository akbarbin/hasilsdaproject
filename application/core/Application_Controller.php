<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Application_Controller extends CI_Controller {

    public static $segment_pagination = 4;
    public static $limit = 10;

    public function __construct() {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->model('Static_pages_model');
    }

    public function set_flash_notice($action = NULL, $alert = NULL, $message = NULL) {
        $this->session->set_flashdata('item', array('message' => 'Tambah data berhasil', 'class' => 'success'));
    }

    protected function set_before_pagination($count = NULL, $suffix = NULL, $limit = NULL, $segment_pagination = NULL, $site_url = NULL) {
        $this->load->library('pagination');
        $base_url = site_url((empty($site_url)) ? $this->get_site_url_pagination() : base_url());
        $config['base_url'] = $base_url;
        $config['total_rows'] = $count;
        $config['per_page'] = (empty($limit)) ? self::$limit : $limit;
        $config['uri_segment'] = (empty($segment_pagination)) ? self::$segment_pagination : $segment_pagination;
        $config['first_url'] = $base_url . $suffix;
        $config['suffix'] = $suffix;

        return $config;
    }

    protected function set_after_pagination() {
        return $this->pagination->create_links();
    }

    protected function get_site_url_pagination($site_url = NULL) {
        return $this->router->directory . '/' . $this->router->class . '/' . $this->router->method;
    }

    protected function get_offset_from_segment($segment_pagination = NULL) {
        $segment_pagination = (empty($segment_pagination)) ? self::$segment_pagination : $segment_pagination;
        return $this->uri->segment($segment_pagination);
    }

    protected function get_search_params($field = array()) {
        $params = array();
        if (isset($_GET) && !empty($_GET)) {
            foreach ($field as $key => $value) {
                if (isset($_GET['search']) && !empty($_GET['search'])) {
                    $params[$value . ' LIKE'] = '%' . $_GET['search'] . '%';
                }
            }
        }
        return $params;
    }

    protected function get_codition_params($field = array(), $param) {
        $params = array();
        if (isset($_GET) && !empty($_GET)) {
            foreach ($field as $key => $value) {
                if (isset($_GET[$param]) && !empty($_GET[$param])) {
                    $params[$value . ' LIKE'] = '%' . $_GET[$param] . '%';
                }
            }
        }
        return $params;
    }

    protected function get_suffix_params() {
        $suffix = '';
        if (isset($_GET) && !empty($_GET)) {
            $str = array();
            foreach ($_GET as $key => $value) {
                $str[] = $key . '=' . $value;
            }
            $suffix = '?' . implode('&', $str);
        }
        return $suffix;
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
