<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $fillable = ['employee_id','uniform','winter_clothes','shoes','other','memo'];

    protected $guarded = array('id'); 

    public function getDate()
    {
        return $this->belongsTo(Employee::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
