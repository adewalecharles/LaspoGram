@extends('layouts.app')

@section('content')
<div class="container">
@forelse ($users as $user)
<div class="row">
    <div class="col-3 p-5">
        <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
    </div>
        <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
        <div class="d-flex align-items-center pb-3">
        <div class="h4"><a href="/profile/{{$user->id}}">{{$user->username}}</a></div>
        </div>
        </div>
        </div>
       
    </div>
</div>
</div>
    @empty
    <div class="row">
    <div><p>There are no Users </p></div>
    </div>
    @endforelse
    <div class="col-12 d-flex justify-content-center">
      {{ $users ->links()}}
      </div>
</div>
@endsection
