@extends('layouts.app')


@section('title')
  My LoveIts
@endsection

@section('content')
</div>

<div class="container">

  <h3 class="text-center mb-3">Spaces</h3>

<div class="alert alert-primary text-center mb-3" role="alert">
  These are your spaces. Spaces are where you and your friends can share things you love, together.
</div>

<div>
  <a href="/addnew" class="btn btn-outline-primary btn-md btn-block">Add A New Space</a>
</div>

@foreach($user->spaces()->latest()->get() as $space)

  <div class="card mb-3 mt-3" style="">
    <div class="card-body">
      <div class="container" id="cardText">
        <h5 class="mt-2">{{ $space->space_name }}</h5>
      </div>
    </div>
    <div class="card-header">
      <small class="text-muted mr-5">{{ $space->prettyUpdate() }}</small>
      <form action="spaces/{{ $space->id }}" method="POST">
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
