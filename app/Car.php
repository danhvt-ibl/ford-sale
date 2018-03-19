<?php

namespace App;
class Car extends SuperModel
{
    protected $fillable = ['name', 'slug', 'user_id'];

    /**
     * Get the category.
     */
    public function verhicle()
    {
        return $this->belongsTo('App\Verhicle', 'Verhicle_id');
    }
}
