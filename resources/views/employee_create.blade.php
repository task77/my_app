@extends('layouts.app')

@section('content')
<div class="container">
    <div class="login-container">
    <h3>新規社員登録</h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('employee_create.store') }}"> 
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">社員番号</label>
                                <div class="col-md-6">
                                    <input type="text" name="employee_id" class="form-control" value="{{old('employee_id')}}" placeholder="社員番号を入力してください">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">名前</label>
                                <div class="col-md-6">
                                    <input type="tel" name="employee_name" class="form-control" value="{{old('employee_name')}}" placeholder="名前を入力してください">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">所属</label>
                                <div class="col-md-6">
                                    <input type="text" name="office" class="form-control" value="{{old('office')}}" placeholder="所属部署を入力してください">
                                    <!-- プルダウンでの選択式だと使いやすいと思う -->
                                </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" value="社員登録する" class="btn btn-primary">
                                <input type="reset" value="キャンセル" class="btn btn-secondary" onclick='window.history.back(-1);'>
                            </div>
                        </div>
                    </form>
                </div>
    </div>
</div>
@endsection
