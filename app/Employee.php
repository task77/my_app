<?php

namespace App;
use IlluminateSupportFacadesDB; //追記
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //protected $table = 'employees';
    protected $fillable = ['id','emlpoyee_id','employee_name'];

    public function goods()
    {
        return $this->hasMany(Goods::class);
    }
}
