@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h2 class="text-2xl font-bold mb-4">Create Task</h2>
    <form action="{{ route('tasks.store') }}" method="POST" class="max-w-md">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="3" class="mt-1 focus:ring-red-600 focus:border-red-600 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
        </div>
        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" id="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-blue rounded-md shadow-sm focus:outline-none focus:ring-red-600 focus:border-red-600 sm:text-sm">
                <option value="pending">Pending</option>
                <option value="in progress">In Progress</option>
                <option value="completed">Completed</option>
            </select>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-blue font-semibold text-xs uppercase tracking-widest rounded-md transition duration-300">Create Task</button>
        </div>
    </form>
</div>
@endsection
