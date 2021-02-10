@extends('layouts.app')

@section('content')
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">社員番号</th>
        <th scope="col">名前</th>
        <th scope="col">所属事業所</th>
        <th scope="col" colspan="4">貸与品</th>
        <th scope="col"></th>
      </tr>
    </thead>

    <tbody>
    @foreach($employees as $employee)
      <tr>
        <td scope="row">{{ $employee->employee_id }}</td>
        <td scope="row">{{ $employee->employee_name }}</td>
        <td scope="row">{{ $employee->office }}</td>
        <td>
          @foreach($employee->goods as $goods)
            <p>制服：{{ $goods->uniform }}｜防寒着：{{ $goods->winter_clothes }}｜靴：{{ $goods->shoes }}｜その他：{{ $goods->other }}</p>
          @endforeach
        </td>
        <td scope="row"><a href="{{ route('employee_create.show',$employee->id) }}" class="btn btn-primary">詳細</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection