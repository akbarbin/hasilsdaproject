<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_subscribes extends CI_Migration {

  public function up() {
    $this->dbforge->add_field(array(
        'sub_id' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
            'null' => FALSE,
        ),
        'sub_email' => array(
            'type' => 'VARCHAR',
            'constraint' => '50',
        ),
        'sub_created_at' => array(
            'type' => 'DATETIME',
        ),
        'sub_updated_at' => array(
            'type' => 'DATETIME',
        ),
    ));
    $this->dbforge->add_key('sub_id', TRUE);
    $this->dbforge->create_table('subscribes');
  }

  public function down() {
    $this->dbforge->drop_table('subscribes');
  }

}
