@extends('layouts.app')

@section('content')
<div class="container">
    <div class="login-container">
    <h3>{{ $employee->employee_name }}（{{ $employee->employee_id }}）{{ $employee->office }}</h3>
    <ul>
        @foreach($employee->goods as $goods)
        <h4>制　服：{{ $goods->uniform }}</h4>
        <h4>防寒着：{{ $goods->winter_clothes }}</h4>
        <h4>　靴　：{{ $goods->shoes }}</h4>
        <h4>その他：{{ $goods->other }}</h4>
        <h4>メ　モ：{{ $goods->memo }}</h4>
        <h4>社員登録日：{{ $employee->created_at->format('Y/m/d') }}</h4>
        <h4>詳細更新日：{{ $employee->updated_at->format('Y/m/d') }}</h4>
        @endforeach
    </ul>

    <a href="{{ route('employee_create.edit',$employee->id) }}" class="btn btn-primary">社員情報を編集する</a>
    <form method="POST" action="{{ route('employee_create.destroy', $employee->id) }}" sytle="display: inline"> 
        @csrf
        @method('DELETE')
        <input type='submit' value='社員情報を削除する' class="btn btn-danger" onclick='return confirm("本当に削除してよろしいですか？？");'>
        </form>
    <a href="{{ route('employee_create.index') }}" class="btn btn-secondary">トップへ戻る</a>
    </div>
</div>
@endsection