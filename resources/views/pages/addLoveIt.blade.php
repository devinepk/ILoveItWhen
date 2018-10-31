@extends('layouts')

@section('title')
  Add a new LoveIt
@endsection

@section('content')
<div class="container">

  <div class="card mb-2 around">
    <div class="card-body">
    <form class="">
      <div class="form-group">Write about it...
        <textarea class="form-control mt-2 mb-5 around" id="textLoveIt" rows="3">What do you love?</textarea>
      </div>
      <div class="mb-2">
        <p class="mb-1">Or take a picture...</p>
        <i class="fas fa-camera-retro fa-4x campic"></i>
      </div>
    </form>
  </div>
  </div>

<div class="text-center">
  <button type="submit" class="mt-2 btn btn-outline-primary">Share</button>
</div>

</div>
@endsection

@extends('footer')
