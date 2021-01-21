@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <!--Profile image -->
            <div class="d-flex">
                <div class="col-3 p-5">
                    <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100" alt="Not found!!!">
                </div>

                <!--Profile info section _ using View.js (post + followers + following) -->
                <div class="row d-inline-block">
                    <follow-button
                        user-id="{{ $user->id }}"
                        follow="{{ $follows }}"
                        username="{{$user->username}}"
                        posts="{{$user->posts->count()}}"
                        followers="{{$user->profile->followers->count()}}"
                        following="{{$user->following->count()}}"
                        ownprofile="{{$ownProfile }}">
                    </follow-button>

                    <!--Profile description section -->
                    <div class="pt-2">
                        <div class="font-weight-bold ">{{$user->profile->title}}</div>
                        <div> {{$user->profile->description}} </div>
                        <div><a href="#" class="font-weight-light"> {{$user->profile->url}} </a></div>
                    </div>
                </div>

                <!--Edit profile and Add post section -->
                <div class="m-auto">
                    @can('update',$user->profile)
                        <a class="list-group-item" href="/profile/{{$user->id}}/edit">Edit Profile</a>
                        <a class="list-group-item" href="/p/create"> Add New Post</a>
                    @endcan
                </div>
            </div>

            <!--Show posts (at first, just using 3 images  -->
            <div class="row pt-5">
                <!-- show all posts of this user from DB -->
                @foreach($user->posts as $post)
                    <div class="col-4 pb-4">
                        <a href="/p/{{ $post->id }}">
                            <img src="/storage/{{ $post->image }}" class="w-100" alt="Not Found!!!">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
