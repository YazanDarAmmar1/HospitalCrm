<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $guarded = [];

    public function User()
    {
      return  $this->belongsTo(User::class, 'agent_id');
    }

    public function Package()
    {
        return $this->belongsTo(Package_type::class, 'package_type');
    }
}
