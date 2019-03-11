<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyRelation extends Model
{
    protected $fillable = ['family_id', 'user_id', 'relationWith_user_id', 'relationship', 'guest'];
}
