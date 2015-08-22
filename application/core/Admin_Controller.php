<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Admin Controller use to add all function admin used by user
 */
class Admin_Controller extends Application_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function initialize_upload_image($upload_path = './uploads/', $max_size = '2048') {
        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = $max_size;
        $this->load->library('upload', $config);
        // Alternately you can set preferences by calling the initialize function. Useful if you auto-load the class:
        $this->upload->initialize($config);
        $this->create_upload_dir($upload_path);
    }

    protected function create_upload_dir($upload_path) {
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, TRUE);
        }
    }

}