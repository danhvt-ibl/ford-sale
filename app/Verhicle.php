<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verhicle extends Model
{
    protected $fillable = ['name', 
        'year',
        'image_name',
        'image_extension', 
        'category'];
    public function cars()
    {
        return $this->hasMany('App\Car', 'Verhicle_id');
    }
}
