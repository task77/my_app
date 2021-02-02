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
        ]);
    }

    public function create()
    {
        $user =\Auth::user();
        return view('employee_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|min:6|max:6',
            'employee_name' => 'required',
            'office' => 'required',
        ]);

        $employee = new Employee;
        $employee->employee_id = $request->input('employee_id');
        $employee->employee_name = $request->input('employee_name');
        $employee->office = $request->input('office');
        $employee->save();
        
        return redirect(route('employee_create.index'))->with('flash_message','新規登録しました');
    }
}