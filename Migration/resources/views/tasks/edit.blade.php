@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ $task->description }}</textarea>
        </div>

        <div>
            <label for="is_completed">Completed</label>
            <input type="checkbox" name="is_completed" id="is_completed" {{ $task->is_completed ? 'checked' : '' }}>
        </div>

        <button type="submit">Update Task</button>
    </form>
@endsection
