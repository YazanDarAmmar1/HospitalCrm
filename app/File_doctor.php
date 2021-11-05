<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File_doctor extends Model
{
    public function Hospital()
    {
        return $this->belongsTo(Hospital::class,'id_hospital');
    }
}
