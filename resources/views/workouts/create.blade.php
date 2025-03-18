@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Workout</h2>
    <form action="{{ route('workouts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Workout</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="gif" class="form-label">Upload GIF</label>
            <input type="file" name="gif" class="form-control" accept="image/gif" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
