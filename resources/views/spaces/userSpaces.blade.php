@extends('layouts.app')


@section('title')
  My LoveIts
@endsection

@section('content')
<div class="container">

  <h3 class="text-center mb-3">Spaces</h3>


@if(Auth::user()->spaces()->count() === 0)

<div class="alert alert-primary text-center" role="alert">
  You haven't created any spaces yet. Add a new space below.
</div>
<div>
  <a href="/addnew" class="btn btn-outline-primary btn-md btn-block">Add A New Space</a>
</div>

@endif

@if(Auth::user()->spaces()->count() > 0)
<div class="alert alert-primary text-center mb-3" role="alert">
  These are your spaces. Spaces are where you and your friends can share things you love, together.
</div>

<div>
  <a href="/addnew" class="btn btn-outline-primary btn-md btn-block">Add A New Space</a>
</div>

@foreach($user->spaceOwner()->latest()->get() as $space)

<div class="card mt-3 mb-5" style="">
  <div class="card-header pb-0">
  <p>{{ $space->space_name }}</p>
  </div>
  <div class="card-body">

          <p>Posts</p>
            <ul>
      @foreach($space->posts()->get() as $p)
                <li>I love it when {{ $p->post_text }}</li>
      @endforeach
            </ul>


          <p>Member(s)</p>
            <ul class="list-inline">
      @foreach($space->users as $u)
              <li>{{ $u->name }}
                  <form action="/remove/{{ $u->id }}" method="POST">
                    @csrf
                      <input type="hidden" id="spaceID" name="spaceID" value="{{ $space->id }}">
                      <small><button type="submit" class="btn btn-link"><i class="fas fa-user-minus"></i></button></small>
                  </form>
              </li>
      @endforeach
            </ul>
    </div>

    <div class="card-header pb-0">
      <small class="text-muted mr-5">{{ $space->prettyUpdate() }}</small>
      <ul class="list-inline float-right">
        <li class="list-inline-item"><small><a href="/addUser/{{ $space->id }}" class="btn-btn-link"><i class="fas fa-user-plus"></i></a></small></li>
        <li class="list-inline-item"><form action="spaces/{{ $space->id }}" method="POST" class="mb-0">
            @csrf
            @method('DELETE')
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input type="hidden" name="space_id" value="{{ $space->id }}">
            <!-- <small><button type="submit" class="btn btn-link"><i class="far fa-trash-alt"></i></button></small> -->
          </form></li>
      </ul>

    </div>
</div>

@endforeach

@endif
</div>


@endsection

@extends('footer')
