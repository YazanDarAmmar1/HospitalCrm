<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'contracts';
    protected $guarded = [];

    public function Hospital()
    {
        return $this->belongsTo(Hospital::class,'hospital_id');
    }

}
