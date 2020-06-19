<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['department_id', 'name', 'email', 'status', 'role', 'phone'];

    public function department() {
        return $this->belongsTo('App\Department');
    }

    public function tools() {
        return $this->belongsToMany('App\Tool', 'members_has_tools', 'members_id', 'tools_id');
    }
}
