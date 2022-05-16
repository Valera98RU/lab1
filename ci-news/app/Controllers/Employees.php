<?php


namespace App\Controllers;


use App\Models\EmployeeModel;

class Employees extends BaseController
{
    public function index():string
    {
        $employees = new EmployeeModel();
        $data = [
            'title'=>'Employees',
            'employees' => $employees->findAll()

        ];
        return view('employees/index',$data);
    }
    public function save()
    {
        $model = new EmployeeModel();
        $data = array(
            'title'        => $this->request->getPost('title'),
            'age'       => $this->request->getPost('age'),
            'company' => $this->request->getPost('company'),
        );
        $model->insert($data);
        return redirect()->to('employees');
    }

    public function update()
    {
        $model = new EmployeeModel();
        $id = $this->request->getPost('employee_id');
        $data = array(
            'title'        => $this->request->getPost('title'),
            'age'       => $this->request->getPost('age'),
            'company' => $this->request->getPost('company'),
        );
        $model->update($id,$data);
        return redirect()->to('employees');
    }

    public function delete()
    {
        $model = new EmployeeModel();
        $id = $this->request->getPost('employee_id');
        echo $id;
        $model->delete($id);
        return redirect()->to('employees');
    }
}