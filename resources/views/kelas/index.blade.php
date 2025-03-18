@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Kelas</h2>
    <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-3">Tambah Kelas</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Kelas</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Jadwal</th>
                <th>Instruktur</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelas as $item)
            <tr>
                <td>{{ $item->nama_kelas }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>
                    @if($item->foto)
                        <img src="{{ asset('storage/' . $item->foto) }}" width="100">
                    @endif
                </td>
                <td>{{ date('d M Y H:i', strtotime($item->jadwal_kelas)) }}</td>
                <td>
                    @if($item->mentor)
                        {{ $item->mentor->name }}<br>
                        @if($item->mentor->photo)
                            <img src="{{ asset('storage/' . $item->mentor->photo) }}" width="50">
                        @endif
                    @else
                        Belum ditentukan
                    @endif
                </td>
                <td>
                    <a href="{{ route('kelas.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kelas.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin?');">
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
