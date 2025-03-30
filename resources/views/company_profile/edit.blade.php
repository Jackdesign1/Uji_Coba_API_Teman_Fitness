@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Company Profile</h2>
    <form action="{{ route('company.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" value="{{ old('name', $profile->name) }}" class="form-control">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ old('description', $profile->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('company.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
