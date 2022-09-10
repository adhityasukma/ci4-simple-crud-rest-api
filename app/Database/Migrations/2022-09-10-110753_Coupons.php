<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Coupons extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'code_coupon' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ]
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->createTable('coupons');
    }

    public function down()
    {
        $this->forge->dropTable('coupons');
    }
}
