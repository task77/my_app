@if (count($errors) > 0)
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li class="ml-4">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<!-- 上記コードでは、if文とforeach文を利用してエラーがあった場合に表示させるよう、処理を書いています。 -->