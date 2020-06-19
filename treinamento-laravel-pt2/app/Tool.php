<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{

    protected $fillable = ['name'];

    public function members() {
        return $this->belongsToMany('App\Member', 'members_has_tools', 'tools_id', 'members_id');
    }
}
