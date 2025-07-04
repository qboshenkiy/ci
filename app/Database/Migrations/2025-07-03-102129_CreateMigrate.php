<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMigrate extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,   
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'description' => [
                'type' => 'LONGTEXT',
                'null' => true,
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tasks', true);
    }

    public function down()
    {
        $this->forge->dropTable('tasks', true);
    }
}
