@extends('layouts')


@section('title')
  My LoveIts
@endsection

@section('content')
<div class="container">
  <div class="card mb-5" style="">
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
  </div>

  <div class="card mb-5" style="">
    <div class="card-body">
      <div class="container around" id="cardText">
        <p class="mb-0 mt-1">I love it when</p>
        <h2>my kids hug me when I come home.</h2>
      </div>
    </div>
    <div class="card-body font-weight-light pt-0">
      <p class="card-text m-0" id="cardDate">Date: October 28, 2018</p>
      <p class="card-text" id="cardLocation">Location:  Dana Point, CA</p>
    </div>
    <div class="card-header text-right">
      <small class="text-muted mr-5">Share what you love!</small>
      <i class="fas fa-share-alt mr-1" id="share"></i>
      <i class="fas fa-lock-open mr-1" id="privatePublic"></i>
      <i class="far fa-heart mr-1" id="favorite"></i>
    </div>
  </div>


</div>


@endsection

@extends('footer')
