

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Members</h5>
                    <h2 class="card-text">{{ $totalMembers }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Active Members</h5>
                    <h2 class="card-text">{{ $activeMembers }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Inactive Members</h5>
                    <h2 class="card-text">{{ $inactiveMembers }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
