<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration {

  public function up() {
    $this->dbforge->add_field(array(
        'usr_id' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
        ),
        'usr_username' => array(
            'type' => 'VARCHAR',
            'constraint' => '50',
        ),
        'usr_password' => array(
            'type' => 'VARCHAR',
            'constraint' => '50',
        ),
        'usr_address' => array(
            'type' => 'VARCHAR',
            'constraint' => '100',
        ),
        'usr_no_telp' => array(
            'type' => 'VARCHAR',
            'constraint' => '15',
        ),
        'usr_status' => array(
            'type' => 'VARCHAR',
            'constraint' => '15',
            'default' => 'active'
        ),
        'usr_type' => array(
            'type' => 'VARCHAR',
            'constraint' => '15'
        ),
        'usr_created_at' => array(
            'type' => 'DATETIME',
        ),
        'usr_updated_at' => array(
            'type' => 'DATETIME',
        ),
    ));
    $this->dbforge->add_key('usr_id', TRUE);
    $this->dbforge->create_table('users');
  }

  public function down() {
    $this->dbforge->drop_table('users');
  }

}
