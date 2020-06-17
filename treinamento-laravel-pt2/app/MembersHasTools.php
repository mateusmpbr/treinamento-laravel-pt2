<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembersHasTools extends Model
{
    public function member() {
        return $this->belongsTo('App\Member');
    }

    public function tool() {
        return $this->belongsTo('App\Tool');
    }
}
