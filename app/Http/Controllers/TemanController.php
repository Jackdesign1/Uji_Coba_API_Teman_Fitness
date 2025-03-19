<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teman;

class TemanController extends Controller
{
    // Menampilkan semua data teman
    public function index()
    {
        $temans = Teman::all();
        return view('teman.index', compact('temans'));
    }

    // Menampilkan form tambah teman
    public function create()
    {
        return view('teman.create');
    }

    // Menyimpan data teman ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:temans',
        ]);

        Teman::create($request->all());

        return redirect()->route('teman.index')->with('success', 'Teman berhasil ditambahkan!');
    }

    // Menampilkan detail teman tertentu
    public function show($id)
    {
        $teman = Teman::findOrFail($id);
        return view('teman.show', compact('teman'));
    }

    // Menampilkan form edit teman
    public function edit($id)
    {
        $teman = Teman::findOrFail($id);
        return view('teman.edit', compact('teman'));
    }

    // Memperbarui data teman
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:temans,email,' . $id,
        ]);

        $teman = Teman::findOrFail($id);
        $teman->update($request->all());

        return redirect()->route('teman.index')->with('success', 'Data teman berhasil diperbarui!');
    }

    // Menghapus data teman
    public function destroy($id)
    {
        $teman = Teman::findOrFail($id);
        $teman->delete();

        return redirect()->route('teman.index')->with('success', 'Data teman berhasil dihapus!');
    }
}
