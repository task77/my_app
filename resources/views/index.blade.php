@extends('layouts.app')

@section('content')

  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">社員番号</th>
        <th scope="col">氏名</th>
        <th scope="col" colspan="4">貸与品</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>020990</td>
        <td>佐藤翼</td>
        <td>制服</td>
        <td>防寒着</td>
        <td>靴</td>
        <td>その他</td>
      </tr>
    </tbody>
  </table>

@endsection