<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];


    public function Hospital()
    {
        return $this->hasMany(Hospital::class, 'category_id');
    }

}
