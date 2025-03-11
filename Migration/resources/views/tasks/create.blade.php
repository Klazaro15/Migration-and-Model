@extends('layouts.app')
@vite('resources/css/app.css')

@section('content')
    <div class="max-w-4xl mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Create Task</h1>

        <form action="{{ route('tasks.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="space-y-2">
                <label for="title" class="block text-lg font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="space-y-2">
                <label for="description" class="block text-lg font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
            </div>

            <div class="space-y-2 flex items-center">
                <input type="checkbox" name="is_completed" id="is_completed"
                    class="h-5 w-5 text-blue-500 focus:ring-2 focus:ring-blue-500 rounded">
                <label for="is_completed" class="text-lg font-medium text-gray-700 ml-2">Completed</label>
            </div>

            <div class="mt-4">
                <button type="submit"
                    class="w-full py-2 px-4 bg-blue-600 text-white rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Create Task
                </button>
            </div>
        </form>
    </div>
@endsection
