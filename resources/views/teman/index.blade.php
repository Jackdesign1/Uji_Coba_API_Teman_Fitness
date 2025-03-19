@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Teman</h1>
    <a href="{{ route('teman.create') }}" class="btn btn-primary">Tambah Teman</a>
    <table class="table table-bordered">
    <thead class="table mt-3">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor</th>
            <th>Aksi</th>
        </tr>
         </thead>
        @foreach($temans as $teman)
        <tr>
            <td>{{ $teman->name }}</td>
            <td>{{ $teman->email }}</td>
            <td>{{ $teman->phone }}</td>
            <td>{{ $teman->keluarga }}</td>
                <a href="{{ route('teman.edit', $teman->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('teman.destroy', $teman->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
