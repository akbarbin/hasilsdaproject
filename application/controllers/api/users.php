<?php

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index() {
        $data['users'] = $this->users_model->get_all_users();
        header('Content-Type: application/json');
        echo json_encode($data['users']->result_array());
    }

    public function sign_in() {
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|call_');

        if ($this->form_validation->run() == FALSE) {
            header('Content-Type: application/json');
            echo json_encode(array('message' => 'failed', 'error' => 'aaa'));
        } else {
            header('Content-Type: application/json');
            echo json_encode(array('message' => 'success'));
        }
    }

    public function create() {
        $this->users_model->save($this->input->get());
        echo json_encode(array('message' => 'success'));
    }

    function check_database($password) {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

        //query the database
        $result = $this->user->login($username, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'session_usr_id' => $row->usr_id,
                    'session_usr_username' => $row->usr_username
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

}
