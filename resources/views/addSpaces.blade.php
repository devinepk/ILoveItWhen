@extends('layouts.app')

@section('title')
  Add A New Space
@endsection

@section('content')

<div class="container">

  <div class="alert alert-primary text-center" role="alert">
    <span style="text-decoration: underline">Spaces:</span> A place for you and your friends to share things you love together.
  </div>


<div class="card">
  <form class="" method="POST" action="/private">
    @csrf
      <div class="card-body mx-auto" style="width: 300px;">
        <div class="form-group text-center">
          <label for="new_space">Add a New Space</label>
          <input class="form-control mt-2 mb-3 around" name="new_space" id="new_space" placeholder="What do you want to call it?">
          <button type="submit" class="btn btn-outline-primary">Save</button>
        </div>
      </div>
    </form>
</div>

</div>



@endsection



@extends('footer')
