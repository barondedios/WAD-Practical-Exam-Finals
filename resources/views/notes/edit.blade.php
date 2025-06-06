@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Note</h1>

    <form action="{{ route('notes.update', $note) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="title" class="block">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $note->title) }}" class="w-full border p-2">
            @error('title') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>

        <div>
            <label for="body" class="block">Body:</label>
            <textarea name="body" id="body" class="w-full border p-2">{{ old('body', $note->body) }}</textarea>
            @error('body') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
    </form>
@endsection
