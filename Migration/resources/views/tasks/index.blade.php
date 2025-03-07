@extends('layouts.app')
@section('content')
    <h1>Tasks</h1>
    <a href="{{ url('/tasks/create') }}">Create Tasks</a>

    <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a> - 
                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a> - 
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
