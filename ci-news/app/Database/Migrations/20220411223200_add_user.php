<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUser extends Migration
{

    public function up()
    {
        $this->forge->addField([
            "user_id"=>[
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            "login"=>[
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ],
            "password"=>[
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ]
        ]);
        $this->forge->addKey('user_id',true);
        $this->forge->createTable('users');

    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}