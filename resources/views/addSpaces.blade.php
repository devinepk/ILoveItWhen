@extends('layouts.app')

@section('title')
  Add A New Space
@endsection

@section('content')

<div class="container">

  <h3 class="text-center mb-3">Add A New Space</h3>


  <div class="alert alert-primary text-center" role="alert">
    <span style="text-decoration: underline">Spaces:</span> A place for you and your friends to share things you love together.
  </div>


<div class="card">
  <div class="card-body">
    <div class="form-group text-center">
      <form class="" method="POST" action="/spaces">
          @csrf
        <label for="space_name"></label>
        <input class="form-control mt-2 mb-3 around" name="space_name" id="space_name" placeholder="What do you want to call it?">
        <button type="submit" class="btn btn-outline-primary">Save</button>
      </form>
    </div>
  </div>
</div>

</div>



@endsection



@extends('footer')
