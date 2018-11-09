@extends('layouts')


@section('title')
  I Love It When
@endsection

@section('content')
<div class="container text-center">
<h1 class="mt-5 mb-5">I</h1>

<img src="images/I.jpg" alt="Heart" class="w-25">

<h1 class="mt-5 mb-5">it when...</h1>

  <a href="/new"><button type="submit" class="mt-2 btn btn-outline-primary">Enter</button></a>

</div>
@endsection

@section('footer')
<div class="mt-5 container text-center">
<p><a href="/public">See what other people love</a></p>
<p><a href="/login">Don't have an account? Create one here</a></p>
</div>
@endsection
