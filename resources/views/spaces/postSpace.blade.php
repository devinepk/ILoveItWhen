@extends('layouts.app')


@section('title')
  My LoveIts
@endsection

@section('content')
<div class="container">


  <h3 class="text-center mb-3">Add Your Post to a Space</h3>

@if(Auth::user()->spaces()->count() === 0)

<div class="alert alert-primary text-center" role="alert">
  You haven't created any spaces yet. Add a new space below.
</div>
<div>
  <a href="/addnew" class="btn btn-outline-primary btn-md btn-block">Add A New Space</a>
</div>

@endif

@if(Auth::user()->spaces()->count() > 0)
<div class="alert alert-primary text-center mb-5" role="alert">
  These are the spaces you've created or are a part of.  Pick a space to add your post to.
</div>




<div class="card mt-3" style="">
  <div class="card-header">
  <p>Click on a Space for Your Post</p>
  </div>
    <div class="card" style="">
      <div class="card-body" id="cardText">
        <div class="" id="cardText">
            <div class="list-group">
@foreach(Auth::user()->spaces()->get() as $avail)
              <form action="/sample" method="POST">
                @csrf
                <input type="hidden" name="space_id" value="{{ $avail->id }}">
                <input type="hidden" name="post_id" value="{{ $id }}">
              <button type="submit" value="{{ $avail->id }}" class="list-group-item list-group-item-action">{{ $avail->space_name }}</button>
@endforeach
            </div>
        </div>
      </div>


      <!-- <div class="card-header pb-0">
        <p class="text-muted mr-5">Number of Posts: # </p>
      </div> -->
    </div>



@endif






@endsection

@extends('footer')
