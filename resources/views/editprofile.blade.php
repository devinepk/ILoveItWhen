@extends('layouts.app')

@section('title')
  Edit Profile
@endsection

@section('content')
<div>
<h1 class="mt-2">Profile Information</h1>
</div>

    <div>
      <form>
        <div class="form-group">
          <label for="formGroupExampleInput"><p class="mb-0">User Name: id=ProfileName</p></label>
          <input type="text" class="form-control" id="profileNameForm" placeholder="Enter a new profile name">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2"><p class="mb-0">Email: id=UserEmail</p></label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1"><p class="mb-0">Description</p></label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter a new profile name"></textarea>
        </div>
      </form>
    </div>
<div class="text-center">
  <button type="submit" class="mt-2 btn btn-outline-primary">Save</button>
</div>


@endsection


@extends('footer')
