<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function members() {
        return $this->hasMany('App\Member');
    }
}
