<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package_type extends Model
{
    protected $guarded = [];

    public function Card()
    {
      return  $this->belongsTo(Card_type::class,'card_id');
    }
}
