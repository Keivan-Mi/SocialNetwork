<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    // only when user signed in, can add new post
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Show post from other users at home
    public function index()
    {
        //Get all of user id
        $users = auth()->user()->following()->pluck('profiles.user_id');

        //Get the user
        $user = auth()->user();

        //Get the user posts
        //Point : latest() => sorted by created_time
        //Point : paginate() help us to get just number of post from each person
        $posts = Post::whereIn('user_id', $users)->latest()->paginate(5);

        return view('posts.index', compact('posts' , 'user'));
    }


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

        // store our new posts to directory
        $imagePath = request('image')->store('uploads', 'public');

        // crop posts in square form
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        // Authenticate the user
        // who wants to add new post
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

  

    //show each posts clicked on it
    public function show(\App\Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
