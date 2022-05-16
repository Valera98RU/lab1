<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index():string
    {
        $data = [];
        return view('welcome_message',$data);
    }

    public function employees():string
    {
        $employees = [];
        return view('employees',$employees);
    }
}
