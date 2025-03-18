@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Mentor</h1>
    <a href="{{ route('mentors.create') }}" class="btn btn-primary">Tambah Mentor</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Keahlian</th>
                <th>Kontak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mentors as $mentor)
                <tr>
                    <td>
                        @if ($mentor->photo)
                            <img src="{{ asset('storage/' . $mentor->photo) }}" width="50">
                        @else
                            Tidak ada foto
                        @endif
                    </td>
                    <td>{{ $mentor->name }}</td>
                    <td>{{ $mentor->expertise }}</td>
                    <td>{{ $mentor->contact }}</td>
                    <td>
                        <a href="{{ route('mentors.edit', $mentor->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('mentors.destroy', $mentor->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
