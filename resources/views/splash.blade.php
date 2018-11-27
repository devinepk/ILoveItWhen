@extends('layouts.app')

@section('title')
  I Love It When
@endsection

@section('content')
<div class="container text-center">
  <h1 class="mt-3 mb-3">I</h1>
    <img src="images/I.jpg" alt="Heart" class="w-25">
  <h1 class="mt-3 mb-1">it when...</h1>
</div>

<div class="container">


<form class="" method="POST" action="/private">
  @csrf
    <div class="card-body mx-auto" style="width: 300px;">
      <div class="form-group text-center">
        <input class="form-control mt-2 mb-4 around" name="post_text" id="post_text" placeholder="What do you love?">
        <button type="submit" class="btn btn-outline-primary">Save</button>

      </div>
    </div>
  </form>

</div>


<div class="mt-3 container text-center">
<p><a href="/public">See some examples</a></p>
</div>
@endsection
