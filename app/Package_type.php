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

    public function plus()
    {
        return $this->hasMany(card_plus::class, 'agent_id');
    }


    public function ALlCard()
    {
        return  $this->hasMany(Card::class,'package_type');
    }
}
