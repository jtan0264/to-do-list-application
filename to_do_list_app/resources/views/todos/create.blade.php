@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <h1>Create Post</h1>
 
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  <form method= "post" action="{{route('todos.store')}}">
                  @csrf
                    <div class="mb-3">
                      <label class="form-label">Title</label>
                      <input type="text" name="title" class ="form-control">
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Description</label>
                      <textarea name="description"  class= "form-control" cols="5" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection