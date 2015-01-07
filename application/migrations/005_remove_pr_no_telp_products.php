<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Remove_pr_no_telp_products extends CI_Migration {

  public function up() {
    $this->dbforge->drop_column('products', 'pr_no_telp');
  }

  public function down() {
    $this->dbforge->add_column('products', array(
        'pr_no_telp' => array(
            'type' => 'VARCHAR',
            'constraint' => 15
        )), 'pr_location');
  }

}
