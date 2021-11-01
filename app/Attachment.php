<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $table = 'attachments';
    protected $guarded = [];

    public function Hospital()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }

}
