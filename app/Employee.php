<?php

namespace App;
use IlluminateSupportFacadesDB;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $fillable = ['id','emlpoyee_id','employee_name','office','employee_image'];
    
    protected $guarded = array('id');
    
    public function goods()
    {
        return $this->hasMany(Goods::class);
    }
}
