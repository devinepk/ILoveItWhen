@extends('layouts.app')


@section('title')
  My LoveIts
@endsection

@section('content')
<div class="container text-center mb-2">

    <h3 class="text-center mb-3">LoveIts</h3>

  <div class="alert alert-primary text-center mb-3" role="alert">
    The are your posts.  Your posts are a collection of the people, places, and experiences you love.
  </div>


  <p class="small">The last time you thought about what you loved was {{ $user->posts()->orderByDesc('created_at')->first()->lastUpdate() }}.</p>

</div>

<div class="container">

@foreach($user->posts()->latest()->get() as $post)

  <div class="card mb-5" style="">
    <div class="card-body">
      <div class="container around" id="cardText">
        <h5 class="mt-2">I love it when {{ $post->post_text }}</h5>
      </div>
    </div>
    <div class="card-header pb-0">
      <small class="text-muted mr-5">Created on {{ $post->prettyUpdate() }}</small>
        <ul class="list-inline float-right mb-0">
          <!-- <li class="list-inline-item mr-0"><small><a href="/addToPost/{{ $post->id }}" class="btn-btn-link p-1">Add This Post to a Space</a></small></li> -->
          <li class="list-inline-item"><form action="private/{{ $post->id }}" method="POST">
              @csrf
              @method('DELETE')
            <small><button type="submit" class="btn btn-link"><i class="far fa-trash-alt"></i></button></small>
          </form></li>
        </ul>
      </div>
  </div>

@endforeach

</div>


@endsection

@extends('footer')
