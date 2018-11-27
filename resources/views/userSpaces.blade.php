@extends('layouts.app')


@section('title')
  My LoveIts
@endsection

@section('content')
</div>

<div class="container">

@foreach($user->spaces()->latest()->get() as $space)

  <div class="card mb-5" style="">
    <div class="card-body">
      <div class="container around" id="cardText">
        <h5 class="mt-2">I love it when {{ $space->space_name }}</h5>
      </div>
    </div>
    <div class="card-header">
      <small class="text-muted mr-5">Created on {{ $space->prettyUpdate() }}</small>
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
