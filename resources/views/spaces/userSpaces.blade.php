@extends('layouts.app')


@section('title')
  My LoveIts
@endsection

@section('content')
<div class="container">

  <h3 class="text-center mb-3">Spaces</h3>

<div class="alert alert-primary text-center mb-3" role="alert">
  These are your spaces. Spaces are where you and your friends can share things you love, together.
</div>

<div>
  <a href="/addnew" class="btn btn-outline-primary btn-md btn-block">Add A New Space</a>
</div>

@foreach($user->spaceOwner()->latest()->get() as $space)


<div class="card mt-3 mb-5" style="">
  <div class="card-body">
    <h5 class="mt-2">{{ $space->space_name }}</h5>




    <p>Member(s)</p>
      <ul>
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
            <small><button type="submit" class="btn btn-link"><i class="far fa-trash-alt"></i></button></small>
          </form></li>
      </ul>

    </div>
</div>

@endforeach


</div>


@endsection

@extends('footer')
