<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function Product(){
        return $this->belongsTo('App\products');
    }
}
