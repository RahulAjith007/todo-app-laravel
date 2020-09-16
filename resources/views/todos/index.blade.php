@extends('todos.layout')

@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2xl">All your Todos</h1>
    <a href="{{route('todo_create')}}" class="mx-5 py-2 text-blue-400 cursor-pointer text-white">
        <span class="fas fa-plus-circle"></span>
    </a>
</div>
<x-alert/>
    @foreach ($todos as $todo)
    <ul class="my-5">
        <li class="flex justify-between py-2">
            @if ($todo->completed)
              <p class="line-through">{{$todo->title}}</p>    
              @else 
              <p>{{$todo->title}}</p>    
            @endif
            
            <div>
                
        <a href="{{URL::to('/todos/'.$todo->id.'/edit')}}"  class="text-orange-400 cursor-pointer text-white">
            <span class="fas fa-edit px-2"></span>
        </a>
        @if ($todo->completed)
        <span 
        onclick="event.preventDefault();document.getElementById('form-incomplete-{{$todo->id}}').submit()"
        class="fas fa-check text-gray-400 cursor-pointer px-2"></span>
        <form style="display: none" id="{{'form-incomplete-'.$todo->id}}" method="post" action="{{route('todo_incompleted', $todo->id)}}">
           
            @csrf 
                @method('delete') 
                {{-- patch and put is same and also delete can also be used and route should also be the same --}}
        </form>
        @else
        <span 
        onclick="event.preventDefault();document.getElementById('form-complete-{{$todo->id}}').submit()"
        class="fas fa-check text-gray-300 cursor-pointer px-2"></span>
    <form style="display: none" id="{{'form-complete-'.$todo->id}}" method="post" action="{{route('todo_completed', $todo->id)}}">
           
        @csrf 
            @method('put') 
            {{-- patch and put is same --}}
    </form>
        @endif
       
            </div>
    </li>
    </ul>    
    @endforeach
@endsection



