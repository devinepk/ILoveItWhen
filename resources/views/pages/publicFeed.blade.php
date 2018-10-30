@extends('layouts')


@section('title')
  My LoveIts
@endsection

@section('content')
<div class="container">
</br>
  <div class="card mb-5" style="">
    <div class="card-body">
      <img class="card-img-top border border-primary" id="cardImage" src="images/sample.jpg" alt="Card image cap">
    </div>
    <div class="card-body font-weight-light pt-0">
      <p class="card-text m-0" id="cardDate">Date: October 31, 2018</p>
      <p class="card-text mb-0" id="cardLocation">Location:  Huntington Beach, CA</p>
      <small class="card-text text-muted">Hipster_Dad</small>
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
      <div class="container border border-primary">
        <p class="mb-0 mt-1">I love it when</p>
        <h2 id="cardText">my kids hug me when I come home.</h2>
      </div>
    </div>
    <div class="card-body font-weight-light pt-0">
      <p class="card-text m-0" id="cardDate">Date: October 28, 2018</p>
      <p class="card-text mb-0" id="cardLocation">Location:  Dana Point, CA</p>
      <small class="card-text text-muted">Hipster_Dad</small>
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
