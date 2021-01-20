<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{

    //When the user not log in --> BOOM!!!
    public function __construct()
    {
        $this->middleware ('auth');
    }

    //------------------------------------------------------------

    //When the user put the follow or unfollow button
    public function store(User $user){
        //Make the relationship(or destroy it!)
        auth()->user()->following()->toggle($user->profile);

        //This array used for updating the values on profile page
        $followInfo=array(
            "posts"     => $user->posts->count(),
            "follower"  => $user->profile->followers->count(),
            "following" => $user->following->count());

        return $followInfo;
    }
}
