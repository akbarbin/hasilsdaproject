<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_req_no_telp_requests extends CI_Migration {

  public function up() {
    $this->dbforge->add_column('requests', array(
        'req_no_telp' => array(
            'type' => 'VARCHAR',
            'constraint' => 15
        )), 'req_email');
  }

  public function down() {
    $this->dbforge->drop_column('requests', 'req_no_telp');
  }

}
