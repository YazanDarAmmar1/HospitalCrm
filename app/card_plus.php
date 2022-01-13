<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class card_plus extends Model
{
    protected $table = 'card_pluses';
    protected $guarded = [];

    public function User()
    {
        return  $this->belongsTo(User::class, 'agent_id');
    }

    public function Package()
    {
        return $this->belongsTo(Package_type::class, 'package_type');
    }

    public function Type()
    {
        return $this->belongsTo(Card_type::class, 'card_type_id');
    }
}
