<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Guest Controller use to add all function guest used by user
 */
class Guest_Controller extends Application_Controller {

    public function __construct() {
        parent::__construct();
        $this->data['static_pages'] = $this->Static_pages_model->get_all_data();
    }

}