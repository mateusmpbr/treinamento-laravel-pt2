<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    public function has_members() {
        return $this->hasMany('App\MemberHasTools');
    }
}
