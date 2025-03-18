@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Member</h2>
    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $member->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $member->email }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" value="{{ $member->phone }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Membership Status</label>
            <select name="membership_status" class="form-control">
                <option value="Active" {{ $member->membership_status == 'Active' ? 'selected' : '' }}>Active</option>
                <option value="Expired" {{ $member->membership_status == 'Expired' ? 'selected' : '' }}>Expired</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('members.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
