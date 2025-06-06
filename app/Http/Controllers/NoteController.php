<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;


class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $notes = auth()->user()->notes;
    return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
    ]);

    auth()->user()->notes()->create($validated);
    return redirect()->route('notes.index')->with('success', 'Note created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
{
    $this->authorizeNote($note);
    return view('notes.edit', compact('note'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
{
    $this->authorizeNote($note);

    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
    ]);

    $note->update($validated);
    return redirect()->route('notes.index')->with('success', 'Note updated.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
{
    $this->authorizeNote($note);
    $note->delete();
    return redirect()->route('notes.index')->with('success', 'Note deleted.');
}

    private function authorizeNote(Note $note)
{
    abort_if($note->user_id !== auth()->id(), 403);
}

}
