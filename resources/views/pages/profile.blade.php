@extends('layouts')


@section('title')
  Profile
@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <img src="/images/profilepic.jpg" class="img-fluid" width="100" height="auto" alt="Responsive image">
      <small class="form-text text-muted">Hipster_Dad</small>
    </div>
    <div class="col text-center">
     <p>8</p>
     <p>Number of Posts</p>
     <button type="button" class="btn btn-primary btn-sm">Edit Profile</button>

      </div>

    </div>
  </div>


</br>
<p>Family man & coffee drinker. Hipster before it was cool.  Now just cool.</p>
</br>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
  <div class="row">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
  <div class="row">
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>

@endsection


@extends('footer')
