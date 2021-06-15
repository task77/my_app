<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee; //追記

class GoodsController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','desc');
        
        return view('detail', [
            'goods' => $goods,
            //左側の「goods」がViewで呼び出す変数の名前を示しており、右側の「$goods」がControllerで作った変数を意味しています。
            //なので、 Viewで呼び出したい変数が仮に「sample」なら、下記のように宣言することになります。
        ]);
    }
}