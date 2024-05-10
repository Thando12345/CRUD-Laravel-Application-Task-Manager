@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="py-4">
        <h2 class="text-2xl font-bold mb-4">Task Manager</h2>
        <a href="{{ route('tasks.create') }}" class="bg-red-600 hover:bg-red-700 text-blue font-bold py-2 px-4 rounded transition duration-300">Add Task</a>
    </div>
    <table class="w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td class="border px-4 py-2">{{ $task->title }}</td>
                <td class="border px-4 py-2">{{ $task->description }}</td>
                <td class="border px-4 py-2">{{ $task->status }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('tasks.edit', $task->id) }}" class="bg-red-600 hover:bg-red-700 text-blue font-bold py-1 px-2 rounded transition duration-300">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-blue font-bold py-1 px-2 rounded transition duration-300">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
