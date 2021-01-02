<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    protected $fillable =['id','name','code','quantity','price','Companies_id','Categories_id'];
    public function Categories()
    {
        return $this->belongsTo('App\Categories');
    }


    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


    public function shares()
    {
        return $this->morphMany('App\Share', 'shareable');
    }

}
