<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //tell laravel : don't guard anything
    protected $guarded = [];

    //each post belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
