@extends('layouts')


@section('title')
  My LoveIts
@endsection

@section('content')
<div class="container">
  <div class="card mb-5" style="">
    <div class="card-body">
      <img class="card-img-top border border-primary" id="cardImage" src="images/sample.jpg" alt="Card image cap">
    </div>
    <div class="card-body font-weight-light pt-0">
      <p class="card-text m-0" id="imageDate">Date: October 31, 2018</p>
      <p class="card-text" id="imageLocation">Location:  Huntington Beach, CA</p>
    </div>
    <div class="card-header text-right">
      <small class="text-muted mr-5">Share what you love!</small>
      <i class="fas fa-share-alt mr-1" id="share"></i>
      <i class="fas fa-lock-open mr-1" id="privatePublic"></i>
      <i class="far fa-heart mr-1" id="favorite"></i>
    </div>
  </div>

  <div class="card mb-5" style="">
    <div class="card-body">
      <img class="card-img-top border border-primary" id="textImage" src="images/sample2.jpg" alt="Card image cap">
    </div>
    <div class="card-body font-weight-light pt-0">
      <p class="card-text m-0" id="imageDate">Date: October 28, 2018</p>
      <p class="card-text" id="imageLocation">Location:  Dana Point, CA</p>
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
