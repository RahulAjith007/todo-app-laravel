@extends('todos.layout')

@section('content')
<h1 class="text-2xl">Create a new Todo</h1>
<x-alert/>
<form method="post" action="{{route('todo_create')}}" class="py-5">
    @csrf
    <input type="text" name="title" class="py-2 py-2 border"/>
    <input type="submit" value="Create" class="p-2 border rounded"/>
</form>

<a href="{{route('todo_all')}}" class="mx-5 py-1 px-1 bg-white-300 cursor-pointer rounded text-black border">Back</a>

@endsection