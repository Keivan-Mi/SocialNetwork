@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!--Profile image -->
        <div class="d-flex">
            <div class="col-3 p-5">
                <img src="{{$user->profile->profileImage()}}" class="w-100 rounded-circle" alt="Not found!!!">
            </div>

            <!--Profile info section _ using View.js (post + followers + following) -->
            <div class="row d-inline-block">
                <follow-button user-id="{{ $user->id }}" follow="{{ $follows }}" username="{{$user->username}}" posts="{{$user->posts->count()}}" followers="{{$user->profile->followers->count()}}" following="{{$user->following->count()}}" ownprofile="{{$ownProfile }}">
                </follow-button>

                <!--Profile description section -->
                <div class="pt-2">
                    <div class="font-weight-bold ">{{$user->profile->title}}</div>
                    <div> {{$user->profile->description}} </div>
                    <div><a target="_blank" href="{{ $user->profile->url }}" class="font-weight-light"> {{$user->profile->url}} </a></div>
                </div>
            </div>

            <!--Edit profile and Add post section -->
            <div class="m-auto">
                @can('update',$user->profile)
                <a href="/profile/{{ $user->id }}/edit" class="btn btn-light mr-1" style="background-color:white; border:none" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><img src="https://img.icons8.com/material-rounded/24/000000/settings.png" /></a>
                <a href="/" class="btn btn-light mr-1" style="background-color:white; border:none"><img src="https://img.icons8.com/fluent-systems-filled/24/000000/home.png" /></a>
                <a href="/p/create" class="btn btn-light mr-1" style="background-color:white; border:none"><img src="https://img.icons8.com/metro/26/000000/plus-2-math.png" /></a>
                <form action="{{route('profile.delete', $user->id)}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-light mr-5" data-toggle="tooltip" data-placement="left" title="Delete Account" style="background-color:white; border:none">
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/remove-user-male.png" />
                    </button>
                </form>

                @endcan
            </div>
        </div>

        <!--Show posts (at first, just using 3 images  -->
        <div class="container row pt-4 border-top mt-3">
            <!-- show all posts of this user from DB -->
            @foreach($user->posts as $post)
            <div class="col-4">
                <div class=" p-2 mb-4 border">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100" alt="not found">
                    </a>
                    <div class="mt-2">
                        @can('delete', $user->profile)
                        <a href="{{ route('post.delete',['post_id' => $post->id ]) }}">
                            <img src="https://img.icons8.com/fluent-systems-regular/28/000000/delete-trash--v3.png" />
                        </a>
                        @endcan
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection