<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_fields_to_products extends CI_Migration {

    public function up() {
        $this->dbforge->add_column('products', array(
            'pr_estm_crop_field' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
            ),
            'pr_estm_harvest' => array(
                'type' => 'DATE',
            ),
            'pr_phase' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'pr_price' => array(
                'type' => 'DECIMAL',
            ),
            'pr_land_id' => array(
                'type' => 'INTEGER',
            )), 'continent');
    }

    public function down() {
        $this->dbforge->drop_column('products', 'pr_estm_crop_field');
        $this->dbforge->drop_column('products', 'pr_estm_harvest');
        $this->dbforge->drop_column('products', 'pr_price');
        $this->dbforge->drop_column('products', 'pr_phase');
        $this->dbforge->drop_column('products', 'pr_land_id');
    }

}
