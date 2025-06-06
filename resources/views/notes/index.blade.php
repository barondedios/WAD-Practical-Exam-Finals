@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Your Notes</h1>

    <a href="{{ route('notes.create') }}" class="text-blue-500 underline">+ Create New Note</a>

    @foreach ($notes as $note)
        <div class="mt-4 p-4 border rounded shadow">
            <h2 class="text-xl font-semibold">{{ $note->title }}</h2>
            <p>{{ $note->body }}</p>
            <div class="mt-2">
                <a href="{{ route('notes.edit', $note) }}" class="text-blue-500 mr-2">Edit</a>

                <form action="{{ route('notes.destroy', $note) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500" onclick="return confirm('Delete this note?')">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
