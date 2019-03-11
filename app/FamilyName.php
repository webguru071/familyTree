<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyName extends Model
{
    protected $fillable = ['family_name'];
    
    public function familyMemeber()
    {
        return $this->belongsToMany(FamilyMember::class);
    }
}
