<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Goods;

class EmployeesController extends Controller

{
    public function index()
    {
        $employees = Employee::with('goods')->paginate(10);
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
            'employee_image' => 'required',
            'employee_id' => 'required',
            'employee_name' => 'required',
            'office' => 'required',
            'uniform' => 'required',
            'winter_clothes' => 'required',
            'shoes' => 'required',
        ]);

        $employee = new Employee;
        $employee->employee_id = $request->input('employee_id');
        $employee->employee_name = $request->input('employee_name');
        $employee->office = $request->input('office');
        $employee->employee_image = $request->file('employee_image')->store('public'); //保存先はstorage/public

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
        return view('employee_show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee_edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->office = $request->office;
        $employee->save();

        $goods = $employee->goods()->latest()->first();
        $goods->uniform = $request->uniform;
        $goods->winter_clothes = $request->winter_clothes;
        $goods->shoes = $request->shoes;
        $goods->other = $request->other;
        $goods->memo = $request->memo;
        $goods->save();

        return redirect(route('employee_create.index'))->with('flash_message','社員情報を更新しました');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee -> delete();
        return redirect(route('employee_create.index'))->with('flash_message','社員情報を削除しました');
    }
    public function search(Request $request)
    {
        $employee = Employee::where('employee_name', 'like', "%{$request->search}%")
                            ->orWhere('office', 'like', "%{$request->search}%")
                            ->paginate(3);

        $search_result = $request->search.'の検索結果は'.$employee->total().'件です';

        return view('index', [
                    'employees' => $employee,
                    'search_result' => $search_result,
                    'search_query' => $request->search
                    ]);
    }
}