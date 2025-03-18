<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkoutController extends Controller
{
    public function index()
    {
        $workouts = Workout::all();
        return view('workouts.index', compact('workouts'));
    }

    public function create()
    {
        return view('workouts.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'gif' => 'nullable|image|mimes:gif|max:2048'
    ]);

    $gifPath = null;
    if ($request->hasFile('gif')) {
        $gifPath = $request->file('gif')->store('gifs', 'public');
    }

    Workout::create([
        'name' => $request->name,
        'description' => $request->description,
        'gif' => $gifPath,
    ]);

    return redirect()->route('workouts.index')->with('success', 'Workout berhasil ditambahkan!');
}


    public function edit(Workout $workout)
    {
        return view('workouts.edit', compact('workout'));
    }

    public function update(Request $request, Workout $workout)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'gif' => 'nullable|file|mimes:gif|max:2048',
        ]);

        $data = $request->only(['name', 'description']);

        if ($request->hasFile('gif')) {
            // Hapus file lama jika ada
            if ($workout->gif) {
                Storage::disk('public')->delete($workout->gif);
            }

            // Simpan file baru
            $gifPath = $request->file('gif')->store('workouts', 'public');
            $data['gif'] = $gifPath;
        }

        $workout->update($data);

        return redirect()->route('workouts.index')->with('success', 'Workout berhasil diperbarui!');
    }

    public function destroy(Workout $workout)
    {
        // Hapus file GIF dari storage
        if ($workout->gif) {
            Storage::disk('public')->delete($workout->gif);
        }

        $workout->delete();

        return redirect()->route('workouts.index')->with('success', 'Workout berhasil dihapus!');
    }
}
