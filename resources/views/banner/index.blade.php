@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Banner Promosi</h1>
    <a href="{{ route('banner.create') }}" class="btn btn-primary mb-3">+ Tambah Banner</a>

    @if($banners->count())
        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($banners as $banner)
                    <tr>
                        <td>{{ $banner->judul }}</td>
                        <td><img src="{{ asset('storage/' . $banner->gambar) }}" width="100" alt=""></td>
                        <td>{{ $banner->deskripsi }}</td>
                        <td>
                            <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('banner.destroy', $banner->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Yakin ingin menghapus banner ini?')" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Belum ada banner promosi.</p>
    @endif
</div>
@endsection
