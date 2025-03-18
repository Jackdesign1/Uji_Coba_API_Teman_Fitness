@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Kelas</h2>

    <form action="{{ route('kelas.update', $kela->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_kelas" class="form-label">Nama Kelas</label>
            <input type="text" class="form-control" name="nama_kelas" value="{{ $kela->nama_kelas }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="3">{{ $kela->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto Kelas</label>
            <input type="file" class="form-control" name="foto" accept="image/*">
            @if($kela->foto)
                <img src="{{ asset('storage/' . $kela->foto) }}" width="100" alt="Foto Kelas" class="mt-2">
            @endif
        </div>
        <div class="mb-3">
            <label for="jadwal_kelas" class="form-label">Jadwal Kelas</label>
            <input type="datetime-local" class="form-control" name="jadwal_kelas" 
                   value="{{ date('Y-m-d\TH:i', strtotime($kela->jadwal_kelas)) }}" required>
        </div>
        <div class="mb-3">
            <label for="mentor_id" class="form-label">Instruktur</label>
            <select class="form-control" name="mentor_id" required>
                <option value="">Pilih Instruktur</option>
                @foreach($mentors as $mentor)
                    <option value="{{ $mentor->id }}" {{ $mentor->id == $kela->mentor_id ? 'selected' : '' }}>
                        {{ $mentor->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
