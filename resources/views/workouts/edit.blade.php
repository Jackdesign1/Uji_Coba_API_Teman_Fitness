@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Workout</h2>

    <form action="{{ route('workouts.update', $workout->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama Workout</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $workout->name }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" required>{{ $workout->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="gif" class="form-label">Link GIF Workout</label>
            <input type="url" class="form-control" id="gif" name="gif" value="{{ $workout->gif }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
