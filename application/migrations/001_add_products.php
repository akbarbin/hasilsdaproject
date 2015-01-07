<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_products extends CI_Migration {

  public function up() {
    $this->dbforge->add_field(array(
        'pr_id' => array(
            'type' => 'INT',
            'constraint' => 5,
            'unsigned' => TRUE,
            'auto_increment' => TRUE,
            'null' => FALSE,
        ),
        'pr_title' => array(
            'type' => 'VARCHAR',
            'constraint' => '50',
        ),
        'pr_description' => array(
            'type' => 'TEXT',
            'null' => TRUE
        ),
        'pr_location' => array(
            'type' => 'VARCHAR',
            'constraint' => '50',
        ),
        'pr_no_telp' => array(
            'type' => 'VARCHAR',
            'constraint' => '15',
        ),
        'pr_photo' => array(
            'type' => 'VARCHAR',
            'constraint' => '100'
        ),
        'pr_photo_2' => array(
            'type' => 'VARCHAR',
            'constraint' => '100',
        ),
        'pr_type' => array(
            'type' => 'VARCHAR',
            'constraint' => '100',
        ),
        'pr_user_id' => array(
            'type' => 'INT',
            'constraint' => '4',
        ),
        'pr_created_at' => array(
            'type' => 'DATETIME',
        ),
        'pr_updated_at' => array(
            'type' => 'DATETIME',
        ),
    ));
    $this->dbforge->add_key('pr_id', TRUE);
    $this->dbforge->create_table('products');
  }

  public function down() {
    $this->dbforge->drop_table('products');
  }

}
