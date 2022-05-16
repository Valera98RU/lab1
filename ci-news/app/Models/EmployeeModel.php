<?php


namespace App\Models;


class EmployeeModel extends \CodeIgniter\Model
{
    protected $table      = 'employees';
    protected $primaryKey = 'employee_id';
    protected $allowedFields = ['employee_id','title', 'age','company'];


}