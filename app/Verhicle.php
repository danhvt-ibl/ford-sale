<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ShowsImages;

class Verhicle extends Model
{
    use ShowsImages;

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
