<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddEmployees extends Migration
{

    public function up()
    {
        $this->forge->addField([
            "employee_id"=>[
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            "title"=>[
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ],
            'age'=>[
                'type'           => 'INT',
                'constraint'     => 5
            ],
            'company'=>[
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'=>false
            ]
        ]);
        $this->forge->addKey('employee_id');
        $this->forge->createTable('employees');
    }

    public function down()
    {
       $this->forge->dropTable('employees');
    }
}