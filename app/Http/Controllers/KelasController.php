<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mentor;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        // Ambil semua data kelas + relasi mentor
        $kelas = Kelas::with('mentor')->get();
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        // Ambil semua mentor untuk dropdown
        $mentors = Mentor::all();
        return view('kelas.create', compact('mentors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas'   => 'required|string|max:255',
            'deskripsi'    => 'nullable|string',
            'foto'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'jadwal_kelas' => 'required|date',
            'mentor_id'    => 'required|exists:mentors,id',
        ]);

        $data = $request->only(['nama_kelas', 'deskripsi', 'jadwal_kelas', 'mentor_id']);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('kelas', 'public');
        }

        Kelas::create($data);

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan!');
    }

    public function edit(Kelas $kela)
    {
        $mentors = Mentor::all();
        return view('kelas.edit', compact('kela', 'mentors'));
    }

    public function update(Request $request, Kelas $kela)
    {
        $request->validate([
            'nama_kelas'   => 'required|string|max:255',
            'deskripsi'    => 'nullable|string',
            'foto'         => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'jadwal_kelas' => 'required|date',
            'mentor_id'    => 'required|exists:mentors,id',
        ]);

        $data = $request->only(['nama_kelas', 'deskripsi', 'jadwal_kelas', 'mentor_id']);

        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($kela->foto) {
                \Storage::disk('public')->delete($kela->foto);
            }
            $data['foto'] = $request->file('foto')->store('kelas', 'public');
        }

        $kela->update($data);

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil diperbarui!');
    }

    public function destroy(Kelas $kela)
    {
        if ($kela->foto) {
            \Storage::disk('public')->delete($kela->foto);
        }
        $kela->delete();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus!');
    }
}
