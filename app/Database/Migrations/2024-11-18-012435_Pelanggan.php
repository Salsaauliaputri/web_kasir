<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

class pelanggan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pelanggan' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
                'auto_increment' => true
            ],
            'nama_pelanggan' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'alamat_pelanggan' => [
                'type' => 'TEXT',
            ],
            'no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => 15
            ],
            'create_at' => [
                'type' => 'DATETIME'
            ],
            'update_at' => [
                'type' => 'DATETIME'
            ],
        ]);
        $this->forge->addPrimaryKey('id_pelanggan', true);
        $this->forge->createTable('pelanggan');
    }
    public function down() {}
}
