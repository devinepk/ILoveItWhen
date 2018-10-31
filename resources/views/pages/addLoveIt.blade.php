@extends('layouts')

@section('title')
  Add a new LoveIt
@endsection

@section('content')
<div class="container">

  <form class="">
    <div class="form-group">Write about it...
      <textarea class="form-control mt-2 mb-5" id="textLoveIt" rows="3">What do you love?</textarea>
    </div>
    <div class="form-group mb-3">
      <label for="exampleFormControlFile1">Or take a picture...</label>
      <input type="file" class="form-control-file" id="fileUpload">
    </div>
  </form>

<div class="text-center">
  <button type="submit" class="mt-2 btn btn-outline-primary">Share</button>
</div>

</div>
@endsection

@extends('footer')
