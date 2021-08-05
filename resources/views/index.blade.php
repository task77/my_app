@extends('layouts.app')

@section('content')
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">社員番号</th>
        <th scope="col">写真</th>
        <th scope="col">名前</th>
        <th scope="col">所属事業所</th>
        <th scope="col" class="d-none d-sm-table-cell">貸与品</th>
        <th scope="col"></th>
      </tr>
    </thead>

    <tbody>
    @foreach($employees as $employee)
      <tr>
        <td class="align-middle" scope="row">{{ $employee->employee_id }}</td>
        <td><img src=" {{ asset($employee->employee_image) }} " alt="画像" class="rounded-circle" width="50" height="50"></td>
        <td class="align-middle" scope="row">{{ $employee->employee_name }}</td>
        <td class="align-middle" scope="row">{{ $employee->office }}</td>
        @foreach($employee->goods as $goods)
        <td class="d-none d-sm-table-cell">
          制　服：{{ $goods->uniform }}｜防寒着：{{ $goods->winter_clothes }}｜靴：{{ $goods->shoes }}｜その他：{{ $goods->other }}</td>
        @endforeach
        <td class="align-middle" scope="row"><a href="{{ route('employee_create.show',$employee->id) }}" class="btn btn-primary">詳細</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-center">
    {{ $employees->links() }}
  </div>
@endsection
