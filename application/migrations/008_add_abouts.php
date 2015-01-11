<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_abouts extends CI_Migration {

  public function up() {
    $this->dbforge->add_field(array(
        'abt_id' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
            'null' => FALSE,
        ),
        'abt_title' => array(
            'type' => 'VARCHAR',
            'constraint' => '50',
        ),
        'abt_description' => array(
            'type' => 'TEXT',
        ),
        'abt_location' => array(
            'type' => 'VARCHAR',
            'constraint' => '50',
        ),
        'abt_photo' => array(
            'type' => 'VARCHAR',
            'constraint' => '100'
        ),
        'abt_created_at' => array(
            'type' => 'DATETIME',
        ),
        'abt_updated_at' => array(
            'type' => 'DATETIME',
        ),
    ));
    $this->dbforge->add_key('abt_id', TRUE);
    $this->dbforge->create_table('abouts');
  }

  public function down() {
    $this->dbforge->drop_table('abouts');
  }

}
