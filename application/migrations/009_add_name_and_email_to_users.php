<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_name_and_email_to_users extends CI_Migration {

  public function up() {
    $this->dbforge->add_column('users', array(
        'gender' => array(
            'type' => 'VARCHAR',
            'constraint' => 1,
        ),
        'email' => array(
            'type' => 'VARCHAR',
            'constraint' => 100,
        ),
        'name' => array(
            'type' => 'VARCHAR',
            'constraint' => 100,
            'null' => FALSE,
        )), 'usr_id');
  }

  public function down() {
    $this->dbforge->drop_column('users', 'name');
    $this->dbforge->drop_column('users', 'email');
    $this->dbforge->drop_column('users', 'gender');
  }

}
