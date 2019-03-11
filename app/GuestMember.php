<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestMember extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'through', 'invite_code'];
}
