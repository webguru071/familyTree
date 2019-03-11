<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'post_body',
    ];

    public function postComment()
    {
        return $this->hasMany(Comment::class);
    }

    public function postLike()
    {
        return $this->hasMany(Like::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
