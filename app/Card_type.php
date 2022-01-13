<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card_type extends Model
{
    protected $guarded = [];
    protected $table = 'card_types';

    public function Package()
    {
        return $this->hasMany(Package_type::class, 'card_id');
    }

    public function Card()
    {
        return $this->hasMany(Card::class, 'card_type_id');
    }

    public function Card_plus()
    {
        return $this->hasMany(card_plus::class, 'agent_id');
    }
}
