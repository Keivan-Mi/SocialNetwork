@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!--Profile image -->
        <div class="col-3 p-5">
            <img src="/img/profileImg.jpg" class="rounded-circle w-100" alt="Not found!!!">
        </div>

        <!--Profile info section(post + followers + following + edit and follow buttons -->
        <div class="col-9 pt-5 ">
            <div class=" d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-1">
                    <div class="font-weight-bold mr-4 h1 pt-2"> {{$user->username}} </div>
                    <button class="btn btn-primary"> Follow</button>
                    <!-- link to new post page -->
                </div>
                @can('update',$user->profile)
                    <a href="/p/create"> Add New Post</a>
                @endcan
            </div>
            <!-- link to edit profile page -->
            @can('update',$user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <!-- count the number of posts -->
                <div class="pr-3"><strong>{{ $user->posts->count()}}</strong> posts</div>
                <div class="pr-3"><strong>25k</strong> followers</div>
                <div class="pr-3"><strong>200</strong> following</div>
            </div>

            <!--Profile description section -->
            <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
            <div> {{$user->profile->description}} </div>
            <div><a href="#" class="font-weight-light"> {{$user->profile->url}} </a></div>
        </div>
    </div>

    <!--Show posts (at first, just using 3 images  -->
    <div class="row pt-5">
        <!-- show all posts of this user from DB -->
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection