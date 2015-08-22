<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_lands extends CI_Migration {

  public function up() {
    $this->dbforge->add_field(array(
        'la_id' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
            'null' => FALSE,
        ),
        'la_title' => array(
            'type' => 'VARCHAR',
            'constraint' => '50',
        ),
        'la_wide_land' => array(
            'type' => 'TEXT',
            'null' => TRUE
        ),
        'la_location' => array(
            'type' => 'VARCHAR',
            'constraint' => '50',
        ),
        'la_longitude' => array(
            'type' => 'VARCHAR',
            'constraint' => '15',
        ),
        'la_latitude' => array(
            'type' => 'VARCHAR',
            'constraint' => '100'
        ),
        'la_photo' => array(
            'type' => 'VARCHAR',
            'constraint' => '100',
        ),
        'la_user_id' => array(
            'type' => 'INT',
            'constraint' => '4',
        ),
        'la_created_at' => array(
            'type' => 'DATETIME',
        ),
        'la_updated_at' => array(
            'type' => 'DATETIME',
        ),
    ));
    $this->dbforge->add_key('la_id', TRUE);
    $this->dbforge->create_table('lands');
  }

  public function down() {
    $this->dbforge->drop_table('lands');
  }

}
