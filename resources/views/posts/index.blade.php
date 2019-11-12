@extends('layouts.app')

@section('content')
<div class="container">
@foreach($posts as $post)
<div class="row">
        <div class="col-6 offset-3">
        <a href="/profile/{{ $post->user->id }}"><img src="/storage/{{ $post->image }}" class="w-100"></a>
        </div>
        </div>
        <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
        <div>

          <p> <span class="font-weight-bold">
          <a href="/profile/{{$post->user->id}}">
          <span class="text-dark">{{$post->user->username}}</span>
          </a> </span> {{$post->caption}}</p> 
          <div><p>{{$post->comments->count()}} | <font style="font-weight:bold; color:blue;">Comments</font></p> </div>
          </div>
          <div>
        @forelse ($post->comments as $comment)
        <div><p> <a href="/profile/{{$comment->user->id}}">{{ $comment->user->username }}</a> --> {{ $comment->body }}</p></div>
        <hr>
        @empty
        <div><p>This post has no comments</p></div>
        @endforelse
        </div>
          <div>
          <form action="{{ route('Comments.store') }}" enctype="multipart/form-data" method='post'>
        @csrf
        <div class="form-group row">
                            <label for="comments" class="col-md-4 col-form-label">Post Comments</label>

                                <input id="comments" type="text" class="form-control @error('comments') is-invalid @enderror" name="comments" value="{{ old('comments') }}" required autocomplete="caption" autofocus>

                                @error('comments')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         <button class="btn btn-primary">
                        Comment</button>
          </div>
        </div>
        </div>
    
    @endforeach
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
      {{ $posts ->links()}}
      </div>
    </div>
</div>
@endsection
