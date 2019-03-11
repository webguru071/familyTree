<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{

    protected $fillable = ['family_id', 'user_id', 'guest'];

    public function familyName()
    {
        return $this->belongsToMany(FamilyName::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
