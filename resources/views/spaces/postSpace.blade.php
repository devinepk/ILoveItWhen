@extends('layouts.app')


@section('title')
  My LoveIts
@endsection

@section('content')
<div class="container">

  <h3 class="text-center mb-3">Available Spaces</h3>

<div class="alert alert-primary text-center mb-5" role="alert">
  These are the spaces you've created or are a part of.  Pick a space to add your post to.
</div>



<div class="card mb-5" style="">
  <div class="card-body">
    <div class="" id="cardText">
        <div class="list-group">
          <form action="" method="POST">
            @csrf
          <button type="submit" class="list-group-item list-group-item-action">Insert space names</button>
        </div>
    </div>
  </div>


  <div class="card-header pb-0">
    <p class="text-muted mr-5">Personal Spaces</p>
      <!-- <ul class="list-inline float-right mb-0">
        <li class="list-inline-item">
          <form action="/private" method="POST">
            @csrf
            @method('DELETE')
          <small><button type="submit" class="btn btn-link"><i class="far fa-trash-alt"></i></button></small>
        </form></li>
      </ul> -->
    </div>


</div>




<div class="card mb-5" style="">
  <div class="card-body">
    <div class="" id="cardText">
        <div class="list-group">
          <form action="" method="POST">
            @csrf
          <button type="submit" class="list-group-item list-group-item-action">Insert space names</button>
        </div>
    </div>
  </div>


  <div class="card-header pb-0">
    <p class="text-muted mr-5">Shared Spaces</p>
      <!-- <ul class="list-inline float-right mb-0">
        <li class="list-inline-item"><form action="/private" method="POST">
            @csrf
            @method('DELETE')
          <small><button type="submit" class="btn btn-link"><i class="far fa-trash-alt"></i></button></small>
        </form></li>
      </ul> -->
    </div>
</div>



@endsection

@extends('footer')
