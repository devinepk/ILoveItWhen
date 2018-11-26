@extends('layouts.app')


@section('title')
  My LoveIts
@endsection

@section('content')
<div class="container text-center mb-2">
  <p>The last time you thought about what you loved was {{ $user->posts()->orderByDesc('created_at')->first()->lastUpdate() }}.</p>

      <!-- SELECT id FROM user_posts ORDER BY created_at DESC LIMT 1 -->
</div>

<!--
sort the posts from most recent on down
limit/take (methods) on the query
find last time post
 -->

<div class="container">
  <!-- <div class="card mb-5" style="">
    <div class="card-body">
      <img class="card-img-top around" id="cardImage" src="images/sample.jpg" alt="Card image cap">
    </div>
    <div class="card-body font-weight-light pt-0">
      <p class="card-text m-0" id="imageDate">Date: October 31, 2018</p>
      <p class="card-text" id="imageLocation">Location:  Huntington Beach, CA</p>
    </div>
    <div class="card-header text-right">
      <small class="text-muted mr-5">Share what you love!</small>
      <i class="fas fa-share-alt mr-1" id="share"></i>
      <i class="fas fa-lock  mr-1" id="privatePublic"></i>
      <i class="far fa-heart mr-1" id="favorite"></i>
    </div>
  </div> -->

@foreach ($user->posts as $post)

  <div class="card mb-5" style="">
    <div class="card-body">
      <div class="container around" id="cardText">
        <h5 class="mt-2">I love it when {{ $post->post_text }}</h5>
      </div>
    </div>
    <div class="card-header">
      <small class="text-muted mr-5">Created on {{ $post->prettyUpdate() }}</small>
      <!-- <i class="far fa-heart mr-1 float-right" id="favorite"></i>
      <i class="fas fa-lock-open mr-2 float-right" id="privatePublic"></i>
      <i class="fas fa-share-alt mr-2 float-right" id="share"></i> -->
      <form action="private/{{ $post->id }}" method="POST">
          @csrf
          @method('DELETE')
        <small><button type="submit" class="btn btn-link float-right"><i class="far fa-trash-alt float-right"></i></button></small>
      </form>
    </div>
  </div>

@endforeach

</div>


@endsection

@extends('footer')
