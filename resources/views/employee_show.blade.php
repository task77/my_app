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
        <h4>登録日：{{ $goods->created_at }}</h4>
        @endforeach
    </ul>
    </div>
</div>
@endsection