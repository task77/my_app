@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mx-auto" style="width: 350px;">
    <img src=" {{ asset($employee->employee_image) }} "alt="画像" class="rounded-circle" width="150" height="150">
    <h3>{{ $employee->employee_name }}（{{ $employee->employee_id }}）</h3>
</div>
    <div class="login-container">
        <div class="card-body">
            <form method="POST" action="{{ route('employee_create.update', $employee->id) }}"> 
                @csrf
                @method('PATCH')

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">所属事業所</label>
                        <div class="col-md-6">
                            <select name="office" class="form-control">
                                <option value='disabled' style='display:none'></option>
                                @foreach(['新潟営業所', '新発田営業所', '長岡営業所', '上越営業所', '群馬営業所', '長野営業所'] as $office)
                                    <option
                                        @if ($employee->office === $office)
                                            selected
                                        @endif
                                    >{{ $office }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                @foreach($employee->goods as $goods)
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">制服</label>
                        <div class="col-md-6">
                            <select name="uniform" class="form-control">
                                <option value='disabled' style='display:none'></option>
                                @foreach(['S', 'M', 'L', 'XL'] as $size)
                                    <option
                                        @if ($goods->uniform === $size)
                                            selected
                                        @endif
                                    >{{ $size }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">防寒着</label>
                        <div class="col-md-6">
                            <select name="winter_clothes" class="form-control">
                                <option value='disabled' style='display:none'></option>
                                @foreach(['S', 'M', 'L', 'XL'] as $size)
                                    <option
                                        @if ($goods->winter_clothes === $size)
                                            selected
                                        @endif
                                    >{{ $size }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">靴</label>
                        <div class="col-md-6">
                            <select name="shoes" class="form-control">
                                <option value='disabled' style='display:none'></option>
                                @foreach(['23㎝', '23.5㎝', '24㎝', '24.5㎝', '25㎝', '25.5㎝', '26㎝', '26.5㎝', '27㎝', '27.5㎝', '28㎝', '28.5㎝'] as $size)
                                    <option
                                        @if ($goods->shoes === $size)
                                            selected
                                        @endif
                                    >{{ $size }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">その他</label>
                        <div class="col-md-6">
                            <input type="text" name="other" class="form-control" value="{{ $goods->other }}" placeholder="その他を入力してください">
                        </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">メモ</label>
                        <div class="col-md-6">
                            <input type="text" name="memo" class="form-control" value="{{ $goods->memo }}" placeholder="メモを入力してください">
                        </div>
                </div>
                @endforeach

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <input type="submit" value="社員情報を更新する" class="btn btn-primary">
                        <input type="reset" value="戻る" class="btn btn-secondary" onclick='window.history.back(-1);'>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection