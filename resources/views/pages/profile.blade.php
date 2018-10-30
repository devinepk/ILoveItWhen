@extends('layouts')


@section('title')
  Profile
@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col" id="profilePic">
      <img src="/images/profilepic.jpg" class="img-fluid" width="125" height="auto" alt="Responsive image">
      <small class="form-text text-muted" id="profileName">Hipster_Dad</small>
    </div>
    <div class="col text-center">
       <h2 id="postCount">8</h2>
       <p class="text-muted">Number of Posts</p>
       <button type="button" class="btn btn-primary btn-sm mt-2">Edit Profile</button>
    </div>
  </div>


</br>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p class="lead">Family man & coffee drinker. Hipster before it was cool.  Now just cool.</p>
  </div>
</div>




<div class="row mb-1">
  <div class="col text-center mr-0" id="profilePictures">
    <img src="/images/profilepic.jpg" class="img-fluid" width="100" height="auto" alt="Responsive image">
    <img src="/images/profilepic.jpg" class="img-fluid" width="100" height="auto" alt="Responsive image">
    <img src="/images/profilepic.jpg" class="img-fluid" width="100" height="auto" alt="Responsive image">
  </div>
</div>
<div class="row mb-1">
  <div class="col text-center mr-0">
    <img src="/images/profilepic.jpg" class="img-fluid" width="100" height="auto" alt="Responsive image">
    <img src="/images/profilepic.jpg" class="img-fluid" width="100" height="auto" alt="Responsive image">
    <img src="/images/profilepic.jpg" class="img-fluid" width="100" height="auto" alt="Responsive image">
  </div>
</div>
<div class="row mb-1">
  <div class="col text-center mr-0">
    <img src="/images/profilepic.jpg" class="img-fluid" width="100" height="auto" alt="Responsive image">
    <img src="/images/profilepic.jpg" class="img-fluid" width="100" height="auto" alt="Responsive image">
    <img src="/images/profilepic.jpg" class="img-fluid" width="100" height="auto" alt="Responsive image">
  </div>
</div>
</div>
</div>
@endsection


@extends('footer')
