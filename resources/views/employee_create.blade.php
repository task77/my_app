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
                    <label class="col-md-4 col-form-label text-md-right">所属事業所</label>
                        <div class="col-md-6">
                            <select name="office" class="form-control">
                            <option value="">所属事業所を選択してください</option>
                            <option value="新潟営業所">新潟営業所</option>
                            <option value="長岡営業所">長岡営業所</option>
                            <option value="上越営業所">上越営業所</option>
                            <option value="群馬営業所">群馬営業所</option>
                            <option value="長野営業所">長野営業所</option>
                            </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">制服</label>
                        <div class="col-md-6">
                            <select name="uniform" class="form-control">
                            <option value="">制服のサイズを選択してください</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">防寒着</label>
                        <div class="col-md-6">
                            <select name="winter_clothes" class="form-control">
                            <option value="">防寒着のサイズを選択してください</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">靴</label>
                        <div class="col-md-6">
                            <select name="shoes" class="form-control">
                            <option value="">靴のサイズを選択してください</option>
                            <option value="23㎝">23㎝</option>
                            <option value="23.5㎝">23.5㎝</option>
                            <option value="24㎝">24㎝</option>
                            <option value="24.5㎝">24.5㎝</option>
                            <option value="25㎝">25㎝</option>
                            <option value="25.5㎝">25.5㎝</option>
                            <option value="26㎝">26㎝</option>
                            <option value="26.5㎝">26.5㎝</option>
                            <option value="27㎝">27㎝</option>
                            <option value="27.5㎝">27.5㎝</option>
                            <option value="28㎝">28㎝</option>
                            <option value="28.5㎝">28.5㎝</option>
                            </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">その他</label>
                        <div class="col-md-6">
                            <input type="text" name="other" class="form-control" value="{{old('other')}}" placeholder="その他を入力してください">
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">メモ</label>
                        <div class="col-md-6">
                            <input type="text" name="memo" class="form-control" value="{{old('memo')}}" placeholder="メモを入力してください">
                        </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <input type="submit" value="社員登録する" class="btn btn-primary">
                        <input type="reset" value="戻る" class="btn btn-secondary" onclick='window.history.back(-1);'>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
