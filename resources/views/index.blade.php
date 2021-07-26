@extends('layouts.app')

@section('content')
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">社員番号</th>
        <th></th>
        <th scope="col">名前</th>
        <th scope="col">所属事業所</th>
        <th scope="col" colspan="4" class="d-none d-sm-table-cell">貸与品</th>
        <th></th>
      </tr>
    </thead>

    <tbody>
    @foreach($employees as $employee)
      <tr>
        <td class="align-middle" scope="row">{{ $employee->employee_id }}</td>
        <td>
            <img src=" {{ asset('storage/s') }} " alt="画像" class="rounded-circle" width="50" height="50"></td>
        <td class="align-middle" scope="row">{{ $employee->employee_name }}</td>
        <td class="align-middle" scope="row">{{ $employee->office }}</td>
        <td class="d-none d-sm-table-cell">
          @foreach($employee->goods as $goods)
            <p class="vertical-middle">制　服：{{ $goods->uniform }}｜防寒着：{{ $goods->winter_clothes }}｜靴：{{ $goods->shoes }}<br>その他：{{ $goods->other }}</p>
          @endforeach
        </td>
        <td class="align-middle" scope="row"><a href="{{ route('employee_create.show',$employee->id) }}" class="btn btn-primary">詳細</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>

  <div class="d-flex justify-content-center">
    {{ $employees->links() }}
  </div>
@endsection