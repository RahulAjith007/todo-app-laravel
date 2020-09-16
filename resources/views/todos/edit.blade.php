@extends('todos.layout')

@section('content') 

<h2 class="text-2xl">Update this todo</h2>
<form method="post" action="{{route('todo_update',['todo'=>$todo->id])}}" class="py-5"> 
    <x-alert/>
    @csrf
    @method('patch')
    <input type="text" value="{{$todo->title}}" name="title" class="py-2 py-2 border"/>
    <input type="submit" value="Update" class="p-2 border rounded"/>
</form>

<a href="{{route('todo_all')}}" class="mx-5 py-1 px-1 bg-white-300 border" >Back</a>

@endsection


{{-- route('todo_update', $todo->id) is also possible -- form action --}}