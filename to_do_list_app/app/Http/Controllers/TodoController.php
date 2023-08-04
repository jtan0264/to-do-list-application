<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('todos.index',[
            'todos' =>$todos
        ]);
    }
    public function create(){
        $user = auth()->user();
        if (!$user) {      
            session() -> flash('error','No login');  
            return to_route('todos.index')->withErrors([
                'error' =>'No login.'
            ]);
        }
        return view('todos.create');
    }
    
    public function store(TodoRequest $request){  
       Todo::create([
        'title' => $request ->title,
        'description' => $request ->description,
        'isCompleted' => 0,
        'user_id' =>auth()->id()
       ]);
        $request -> session() -> flash('alert-success','Task Created Successfully');

        return to_route('todos.index');
    }

    public function edit($id){
        $user = auth()->user();
        if (!$user) {      
            session() -> flash('error','No login');  
            return to_route('todos.index')->withErrors([
                'error' =>'No login.'
            ]);
        }


        $todo = Todo::find($id);
        if(!$todo){
            $request -> session() -> flash('error','Unable to locate the task.');
            return to_route('todos.index')->withErrors([
                'error' =>'Unable to locate the task.'
            ]);
        }
        return view('todos.edit',['todo' =>$todo]);
    }


    public function update(TodoRequest $request){
        $user = auth()->user();
        if (!$user) {      
            session() -> flash('error','No login');  
            return to_route('todos.index')->withErrors([
                'error' =>'No login.'
            ]);
        }
        $todo = Todo::find($request ->todo_id);
        if(!$todo){
            $request -> session() -> flash('error','Unable to locate the task.');
            return to_route('todos.index')->withErrors([
                'error' =>'Unable to locate the task.'
            ]);
        }
        $todo -> update([
            'title' => $request ->title,
            'description' => $request ->description,
            'isCompleted' => $request ->isCompleted
        ]);
        $request -> session() -> flash('alert-info','Task Updated Successfully');
        return  to_route('todos.index');
    }

    public function destroy(Request $request){
        $user = auth()->user();
        if (!$user) {      
            session() -> flash('error','No login');  
            return to_route('todos.index')->withErrors([
                'error' =>'No login.'
            ]);
        }
        $todo = Todo::find($request ->todo_id);
        if(!$todo){
            $request -> session() -> flash('error','Unable to locate the task.');
            return to_route('todos.index')->withErrors([
                'error' =>'Unable to locate the task.'
            ]);
        }
        
        $todo ->delete();
        $request -> session() -> flash('alert-success','Task deleted Successfully');
        return  to_route('todos.index');
    }
    
}
