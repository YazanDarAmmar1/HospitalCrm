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
}
