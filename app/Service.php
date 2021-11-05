<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $guarded = [];


    public function Hospital()
    {
        return $this->belongsTo(Hospital::class,'hospital_id');
    }
}
