<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $fillable = ['employee_id','uniform','winter_clothes','shoes','other','memo'];

    public function employee()
    {
        return $this->belongsTo(Employee::class); //goodクラスがemployeeクラスに所属している
    }
}
