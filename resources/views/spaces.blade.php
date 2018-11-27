@extends('layouts.app')


@section('title')
  My LoveIts
@endsection

@section('content')
</div>

<div class="container">


  <div class="card mb-5" style="">
    <div class="card-body">
      <div class="container around" id="cardText">
        <h5 class="mt-2">I love it when</h5>
      </div>
    </div>
    <div class="card-header">
      <small class="text-muted mr-5">Created on</small>
      <!-- <i class="far fa-heart mr-1 float-right" id="favorite"></i>
      <i class="fas fa-lock-open mr-2 float-right" id="privatePublic"></i>
      <i class="fas fa-share-alt mr-2 float-right" id="share"></i> -->
      <form action="private/ method="POST">
          @csrf
          @method('DELETE')
        <small><button type="submit" class="btn btn-link float-right"><i class="far fa-trash-alt float-right"></i></button></small>
      </form>
    </div>
  </div>



</div>


@endsection

@extends('footer')
