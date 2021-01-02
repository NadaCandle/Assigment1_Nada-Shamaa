<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    
    protected $fillable = ['id','name'];

    public function Products(){
        return $this->hasMany('App\Products');
    }
}
