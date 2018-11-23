@extends('layouts.app')

@section('title')
  Add a new LoveIt
@endsection

@section('content')
  <div class="container">

  <form class="" method="POST" action="/private">
    @csrf
    <div class="card mb-2 around">
      <div class="card-body">
        <div class="form-group">I love it when...
          <input class="form-control mt-2 mb-5 around" name="post_text" id="post_text" placeholder="What do you love?">
        </div>
      </div>
    </div>

      <div class="text-center">
        <button type="submit" class="mt-2 btn btn-outline-primary">Save</button>
      </div>
    </form>

  </div>
@endsection

@section('footer')
<div class="mt-5 container text-center">
<p>Need some <a href="/public">inspiration?</a></p>
</div>
@endsection




@extends('footer')
