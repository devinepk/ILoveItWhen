@extends('layouts')


@section('title')
  Login to LoveIt
@endsection

@section('content')
<div class="container">
  <h1 class="mb-4 text-center">Please sign in</h1>
</div>

    <button type="button" class="btn btn-danger mb-2 mr-1">Sign in with Google</button>
    <button type="button" class="btn btn-warning mb-2 ml-1">Sign in with Instagram</button>

<div>
  <p class="mt-3 mb-3 text-center">or</p>
</div>

<div class="container">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
