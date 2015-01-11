<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_req_parent_id_and_req_status_requests extends CI_Migration {

  public function up() {
    $this->dbforge->add_column('requests', array(
        'req_parent_id' => array(
            'type' => 'VARCHAR',
            'constraint' => 2,
            'null' => TRUE,
        ),
        'req_status' => array(
            'type' => 'VARCHAR',
            'constraint' => 15,
            'default' => 'unreply'
        )), 'req_content');
  }

  public function down() {
    $this->dbforge->drop_column('requests', 'req_parent_id');
    $this->dbforge->drop_column('requests', 'req_status');
  }

}