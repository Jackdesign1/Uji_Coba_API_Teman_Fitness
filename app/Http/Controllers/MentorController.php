<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = Mentor::all();
        return view('mentor.index', compact('mentors'));

    }

    public function create()
    {
        return view('mentor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'expertise' => 'required',
            'contact' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('mentors', 'public');
        }

        Mentor::create([
            'name' => $request->name,
            'expertise' => $request->expertise,
            'contact' => $request->contact,
            'photo' => $photoPath
        ]);

        return redirect()->route('mentors.index')->with('success', 'Mentor berhasil ditambahkan!');
    }

    public function edit(Mentor $mentor)
    {
        return view('mentor.edit', compact('mentor'));
    }

    public function update(Request $request, Mentor $mentor)
    {
        $request->validate([
            'name' => 'required',
            'expertise' => 'required',
            'contact' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('mentors', 'public');
            $mentor->update([
                'photo' => $photoPath
            ]);
        }

        $mentor->update([
            'name' => $request->name,
            'expertise' => $request->expertise,
            'contact' => $request->contact
        ]);

        return redirect()->route('mentors.index')->with('success', 'Mentor berhasil diperbarui!');
    }

    public function destroy(Mentor $mentor)
    {
        $mentor->delete();
        return redirect()->route('mentors.index')->with('success', 'Mentor berhasil dihapus!');
    }
}

