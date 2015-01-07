<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_requests extends CI_Migration {

  public function up() {
    $this->dbforge->add_field(array(
        'req_id' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
            'null' => FALSE,
        ),
        'req_name' => array(
            'type' => 'VARCHAR',
            'constraint' => '100',
        ),
        'req_email' => array(
            'type' => 'VARCHAR',
            'constraint' => '50',
        ),
        'req_content' => array(
            'type' => 'TEXT',
            'constraint' => '15',
        ),
        'req_created_at' => array(
            'type' => 'DATETIME',
        ),
        'req_updated_at' => array(
            'type' => 'DATETIME',
        ),
    ));
    $this->dbforge->add_key('req_id', TRUE);
    $this->dbforge->create_table('requests');
  }

  public function down() {
    $this->dbforge->drop_table('requests');
  }

}
