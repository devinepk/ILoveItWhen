@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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
                    <div class="text-center">
                      <button type="submit" class="mt-2 btn btn-outline-primary">Save</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
