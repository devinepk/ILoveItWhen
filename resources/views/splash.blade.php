@extends('layouts.app')

@section('title')
  I Love It When
@endsection

@section('content')
<div class="container text-center">
<h1 class="mt-3 mb-3">I</h1>

<img src="images/I.jpg" alt="Heart" class="w-25">

<h1 class="mt-3 mb-5">it when...</h1>

  <!-- <a href="/login"><button type="submit" class="mt-2 btn btn-outline-primary">Sign In</button></a> -->

</div>


<div class="mt-3 container text-center">
<p><a href="/public">See what other people love</a></p>
<p><a href="/register">Don't have an account? Create one here</a></p>
</div>
@endsection
