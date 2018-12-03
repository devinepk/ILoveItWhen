@extends('layouts.app')


@section('title')
  My LoveIts
@endsection

@section('content')
<div class="container">


  <h3 class="text-center mb-3">Add Your Post to a Space</h3>

<div class="alert alert-primary text-center mb-5" role="alert">
  These are the spaces you've created or are a part of.  Pick a space to add your post to.
</div>


@foreach(Auth::user()->spaces()->get() as $avail)


    <div class="card mb-5" style="">
      <div class="card-body">
        <div class="" id="cardText">
            <div class="list-group">
              <form action="" method="POST">
                @csrf
              <button type="submit" class="list-group-item list-group-item-action">{{ $avail->space_name }}</button>
            </div>
        </div>
      </div>


      <div class="card-header pb-0">
        <p class="text-muted mr-5">Personal Spaces</p>
      </div>
    </div>

@endforeach







@endsection

@extends('footer')
