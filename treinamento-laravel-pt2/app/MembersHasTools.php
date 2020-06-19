<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembersHasTools extends Model
{
    protected $fillable = ['members_id', 'tools_id'];
}
