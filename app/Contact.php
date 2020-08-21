<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class   Contact extends Model
{
    public function has_user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
