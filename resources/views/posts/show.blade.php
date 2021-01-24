@extends('layouts.app')

@section('content')
<div class="container p-5 mb-5 border" >
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100" alt="">
        </div>
        <div class="col-4">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 60px; border: 4px solid #ccc">
                        <a style="text-decoration:none;" href="/profile/{{ $post->user->id }}" class="text-dark font-weight-bold pl-2">{{ $post->user->username }}</a>
                    </div>

                <hr>

                <p>
                    {{ $post->caption }}
                </p>
        </div>
    </div>
</div>
@endsection
