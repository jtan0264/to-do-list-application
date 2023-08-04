@extends('layouts.app')

@section('styles')
<style>
  #outer
{
    width:auto;
    text-align: center;
}
.inner
{
    display: inline-block;
}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  @if(Session::has('alert-success'))
                    <div class="alert alert-success" role="alert">
                      {{Session::get('alert-success')}}
                    </div>
                  @endif
                  @if(Session::has('alert-info'))
                    <div class="alert alert-info" role="alert">
                      {{Session::get('alert-info')}}
                    </div>
                  @endif
                  
                  @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                      {{Session::get('error')}}
                    </div>
                  @endif
                  
              
                  <a class ="btn btn-sm btn-info" href="{{route('todos.create')}}">Create task</a>
                  @if(count($todos)>0)
                  <table class="table">
                    <thead>
                      <tr>
                        <th >CreatedBy</th>
                        <th >Title</th>
                        <th >Description</th>
                        <th >Status</th>
                        <th >Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($todos as $todo)
                      <tr>
                        <td>
                          {{$todo->user->name}}
                        </td>
                        <td>
                          {{$todo->title}}
                        </td>
                        <td>
                          {{$todo->description}}
                        </td>
                        <td>
                          @if ($todo -> isCompleted ==1)
                            <a class ="btn btn-sm btn-success" href="">Completed</a>
                          @else
                          <a class ="btn btn-sm btn-danger" href="">Incompleted</a>
                          @endif
                        </td>
                        <td id='outer'>                
                          <a class ="btn btn-sm btn-info" href="{{route('todos.edit',$todo->id)}}">Edit</a>
                          
                          <form   method = 'POST' class="inner" action="{{route("todos.destroy")}}">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="todo_id" value="{{$todo ->id}}">
                            <input type="submit" class='btn btn-sm btn-danger' value = 'Delete'>
                          </form>
                        </td>
                        
                      </tr>

                      @endforeach
                    </tbody>
                  </table>
                  @else
                  <h4>No to-do task created.</h4>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection