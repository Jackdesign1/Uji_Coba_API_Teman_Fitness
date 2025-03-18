@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Mentor</h2>

    <form action="{{ route('mentors.update', $mentor->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $mentor->name }}" required>
        </div>

        <div class="mb-3">
            <label for="expertise" class="form-label">Keahlian</label>
            <input type="text" class="form-control" id="expertise" name="expertise" value="{{ $mentor->expertise }}" required>
        </div>

        <div class="mb-3">
            <label for="contact" class="form-label">Kontak</label>
            <input type="text" class="form-control" id="contact" name="contact" value="{{ $mentor->contact }}" required>
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Foto</label>
            <input type="file" class="form-control" id="photo" name="photo">
            @if($mentor->photo)
                <img src="{{ asset('storage/' . $mentor->photo) }}" alt="Foto Mentor" width="100" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Mentor</button>
        <a href="{{ route('mentors.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
