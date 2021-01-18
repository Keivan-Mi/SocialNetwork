<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/yYCjqGy5nx3vMM0kohWp7NIxTAo2TAn9Yqj4Gbqk.jpg';
        return '/storage/' . $imagePath ;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
