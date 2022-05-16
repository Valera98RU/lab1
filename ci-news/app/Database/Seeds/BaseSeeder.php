<?php


namespace App\Database\Seeds;


class BaseSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $adminUser = [
            "login" => 'admin',
            "password" => password_hash("admin", PASSWORD_BCRYPT)
        ];

        $this->db->table('users')->insert($adminUser);


        $baseEmployees = [
            [
                'title' => "Иванов Иван Иванович",
                "age" => 36,
                "company" => "КузГТУ"
            ],
            [
                'title'=>'Петров Петр Петрович',
                'age'=>25,
                'company'=>'КемГУ'
            ],
            [
                'title'=>'Григорьев Григорий Григорьевич',
                'age'=>38,
                'company'=>'КемТИПП'
            ],
            [
                'title'=>'Василье Василий Васильевич',
                'age'=>28,
                'company'=>'КемТИПП'
            ],
            [
                'title'=>'Сергеев Сергей Сергеевич',
                'age'=>41,
                'company'=>'КемТИПП'
            ],
            [
                'title'=>'Александров Александр Александрович',
                'age'=>29,
                'company'=>'КемГУ'
            ],
            [
                'title'=>'Олегов Олег Олегович',
                'age'=>21,
                'company'=>'КузГТУ'
            ]
        ];
        foreach ($baseEmployees as $employee)
        {
            $this->db->table('employees')->insert($employee);
        }

    }
}