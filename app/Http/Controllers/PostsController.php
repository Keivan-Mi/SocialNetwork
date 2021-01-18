<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    /* 
    / in "new post" page 
    / posts should have caption and image[jpeg, png, bmp, gif, or svg]
    */

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required'],
        ]);

        /*
        / Authenticate the user 
        / who wants to add new post
        */

        auth()->user()->posts()->create($data);

        dd(request()->all());
    }
}
