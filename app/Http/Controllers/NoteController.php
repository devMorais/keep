<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::where('user_id', auth()->user()->id)
            ->where('archived', false) // ou ->where('archived', 0)
            ->latest()
            ->get();

        return view('dashboard', compact('notes'));
    }

    public function changeAppearance(Request $request)
    {
        $note = Note::where('user_id', auth()->user()->id)
            ->where('id', $request->id)
            ->first();
        $note->update([
            'color_name' => $request->color,
            'appearance_type' => $request->type,
            'image_path' => $request->image
        ]);

        return response()->json(['message' => 'success'], 200);
    }

    public function putArchived($id)
    {
        $note = Note::where('user_id', auth()->user()->id)
            ->where('id', $id)
            ->first();
        $note->update([
            'archived' => !$note->archived,
        ]);

        return redirect()->back();
    }

    public function archived()
    {
        $notes = Note::where('user_id', auth()
            ->user()->id)
            ->where('archived', 1)
            ->latest()
            ->get();
        return view('dashboard', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Note::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->back();
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $note = Note::findOrFail($id);

        $note->update([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->back();
    }

    public function trash()
    {
        $notes = Note::where('user_id', auth()
            ->user()->id)
            ->onlyTrashed()
            ->latest()
            ->get();
        return view('trash-bin', compact('notes'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $note = Note::findOrfail($id);
        $note->delete();

        return redirect()->back();
    }
}
