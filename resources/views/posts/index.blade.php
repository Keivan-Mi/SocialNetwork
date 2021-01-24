@extends('layouts.app')
    
@section('content')
    
    <div class="container">
        
        @foreach($posts as $post)
        <div class="row" >
                 
            <div class="col-9 offset-2 mb-5 border">
                <span>
                    <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100 mt-2 mb-2 mr-2" style="max-width: 60px; border: 4px solid #ccc; ">
                    <a style="text-decoration:none" href="/profile/{{ $post->user->id }}">
                        <span class="text-dark ">{{ $post->user->username }}</span>
                    </a>
                </span>
                <a href="/profile/{{ $post->user->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100 pb-2">
                </a>
                <p>
                <span class="font-weight-bold">
                    <a style="text-decoration:none" href="/profile/{{ $post->user->id }}">
                        <span class="text-dark ">{{ $post->user->username }}</span>
                    </a>
                </span> : {{ $post->caption }}
                </p>
            </div>
        </div>
    @endforeach

        <div class="row pt-lg-5">
            <div class="col-10 offset-2">
                {{$posts -> links()}}
            </div>
        </div>
    </div>
@endsection
