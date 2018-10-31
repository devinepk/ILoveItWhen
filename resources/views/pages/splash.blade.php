@extends('layouts')


@section('title')
  I Love It When
@endsection

@section('content')
<div class="container text-center">
<h1 class="mt-5 mb-5">I</h1>

<img src="images/I.jpg" alt="Heart" class="w-25">

<h1 class="mt-5 mb-5">it when...</h1>

<form>
  <div class="form-group">
    <input type="text" class="text-center form-control" id="newLoveIt" placeholder="What do you love?">
  </div>
  <button type="submit" class="mt-2 btn btn-outline-primary">Save</button>
</form>
</div>
@endsection

@section('footer')
<div class="mt-5 container text-center">
<p><a href="/public">See examples</a></p>
<p><a href="/login">Have an account? Sign-in</a></p>
</div>
@endsection
