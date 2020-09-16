<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Support\Facades\Validator;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::orderBy('completed')->get();
        // return view('todos.index')->with(['todos'=> $todos]);
        return view('todos.index', compact('todos'));
    }

    public function create(){
        return view('todos.create');
    }

    public function edit(Todo $todo){
        // dd($todo->title);
    //    $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    public function store(TodoCreateRequest $request){

        // $rules = [
        //     'title'=>'required|max:255'
        // ];

        // $messages = [
        //     'title.max'=> 'Todo title should not be greater than 255 chars.'
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages); 
        // if($validator->fails()){
        //     return redirect()->back()
        //                     ->withErrors($validator)
        //                     ->withInput();
        // }
        // $request->validate([
        //     'title'=>'required|max:255',

        // ]);
       Todo::create($request->all());
       return redirect()->back()->with('message', "Todo create successfully");
    }

    public function update(TodoCreateRequest $request, Todo $todo){
        $todo->update(['title'=>$request->title]);
        return redirect(route('todo_all'))->with('message', 'Updated!');
    }

    public function complete(Todo $todo){
        $todo->update(['completed'=>true]);
        return redirect()->back()->with('message', 'Task Marked as Completed');
    }

    public function incomplete(Todo $todo){
        $todo->update(['completed'=>false]);
        return redirect()->back()->with('message', 'Task Marked as Incomplete');
    }
}
