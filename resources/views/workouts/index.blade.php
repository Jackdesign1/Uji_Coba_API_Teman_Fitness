@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Workout</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('workouts.create') }}" class="btn btn-primary mb-3">Tambah Workout</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>GIF</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($workouts as $index => $workout)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $workout->name }}</td>
                <td>{{ $workout->description }}</td>
                <td>
                    @if ($workout->gif)
                        <img src="{{ asset('storage/' . $workout->gif) }}" width="100" alt="Workout GIF">
                    @else
                        <span class="text-muted">Tidak ada GIF</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('workouts.edit', $workout->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                    <form action="{{ route('workouts.destroy', $workout->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus workout ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
