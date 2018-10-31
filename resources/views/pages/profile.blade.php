@extends('layouts')


@section('title')
  Profile
@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col" id="profilePic">
      <img src="/images/profilepic.jpg" class="img-fluid around" width="125" height="auto" alt="Responsive image">
      <small class="form-text text-muted" id="profileName">Hipster_Dad</small>
    </div>
    <div class="col text-center">
      <div class="around">
       <h2 class="mt-1" id="postCount">8</h2>
       <p class="text-muted mb-1">Number of Posts</p>
     </div>
       <a href="/edit"><button type="button" class="btn btn-outline-primary btn-sm mt-3">Edit Profile</button></a>
    </div>
  </div>


</br>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <p class="lead" id="profileDescription">Family man & coffee drinker. Hipster before it was cool.  Now just cool.</p>
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
</br>
</div>
</br>
@endsection


@extends('footer')
