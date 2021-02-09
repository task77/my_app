<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Goods;

class EmployeesController extends Controller

{
    public function index()
    {
        //$employees = Employee::all(); //orderBy('id','desc')->get();
        $employees = Employee::with('goods')->get();
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
            'uniform' => 'required',
            'winter_clothes' => 'required',
            'shoes' => 'required',
            'other' => 'required',
        ]);

        $employee = new Employee;
        $employee->employee_id = $request->input('employee_id');
        $employee->employee_name = $request->input('employee_name');
        $employee->office = $request->input('office');
        $employee->save();

        $goods = new Goods;
        $goods->uniform = $request->input('uniform');
        $goods->winter_clothes = $request->input('winter_clothes');
        $goods->shoes = $request->input('shoes');
        $goods->other = $request->input('other');
        $goods->memo = $request->input('memo');
        $goods->employee_id = $employee->id;
        $goods->save();
        
        return redirect(route('employee_create.index'))->with('flash_message','社員を登録しました');
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        $goods = Goods::find($id);
        return view('employee_show',compact('employee'));
    }
}