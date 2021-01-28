<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller

{
    public function index()
    {
        $employees = Employee::orderBy('id','desc')->get();
        
        return view('index', ['employees' => $employees,
            //左側の「employees」がViewで呼び出す変数の名前を示しており、右側の「$employees」がControllerで作った変数を意味しています。
            //なので、 Viewで呼び出したい変数が仮に「sample」なら、下記のように宣言することになります。
        ]);
    }
}