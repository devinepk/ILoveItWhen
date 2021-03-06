@extends('layouts.app')

@section('title')
  Add A New Space
@endsection

@section('content')

<div class="container">

  <h3 class="text-center mb-3">Add a Friend to Your Space</h3>


  <div class="alert alert-primary text-center" role="alert">
    Here you can add a friend, family member, or anyone else to share a space with you.
  </div>



<div class="card">
  <div class="card-body">
    <div class="form-group text-center">
      <form class="" method="POST" action="/spaces/{{ $space->id }}">
          @csrf
          @method('PUT')
        <label for="friend_name">Enter their email address</label>
        @if(session()->has('notif'))

          <div class="alert alert-warning text-center" role="alert">
            {{ session()->get('notif') }}
          </div>

        @endif
        <input class="form-control mt-2 mb-3 around" name="friend_name" id="friend_name" placeholder="What's their email address?">
        <button type="submit" class="btn btn-outline-primary">Save</button>

      </form>
    </div>
  </div>
</div>

</div>



@endsection



@extends('footer')
