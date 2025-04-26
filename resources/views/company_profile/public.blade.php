@extends('layouts.auth')

@section('content')
<!-- Tambahkan Link Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    body {
        background-color: #1a1a1a;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .login-container {
        max-width: 900px;
        margin: 0 auto;
    }
    .left-section {
        background-color: #6c757d; /* Abu-abu untuk bagian kiri */
        min-height: 100%;
    }
    .right-section {
        background-color: #ffffff; /* Putih untuk bagian kanan */
        animation: fadeIn 1s ease-in-out;
    }
    @keyframes fadeIn {
        0% { opacity: 0; transform: translateX(20px); }
        100% { opacity: 1; transform: translateX(0); }
    }
    .btn-dark {
        background-color: #2c2c2c;
        border: none;
        transition: background-color 0.3s ease;
    }
    .btn-dark:hover {
        background-color: #555555;
    }
    .form-control {
        border-radius: 8px; /* Rounded input seperti di gambar */
        border: 1px solid #ced4da;
    }
    .form-control:focus {
        border-color: #2c2c2c;
        box-shadow: 0 0 0 0.25rem rgba(44, 44, 44, 0.25);
    }
    .form-control::placeholder {
        color: #adb5bd; /* Placeholder abu-abu seperti di gambar */
    }

    .left-section {
  background-color: white;
}


</style>

<div class="container login-container">
    <div class="row rounded-4 overflow-hidden shadow">
        <!-- Bagian Kiri: Logo Teman Fitness -->
        <div class="col-md-6 col-12 left-section p-4 d-flex justify-content-center align-items-center" style="background-color: white;">

            <img src="{{ asset('Logo_Teman_Fitness.png') }}" alt="Teman Fitness Logo" class="img-fluid w-75">
        </div>

        <!-- Bagian Kanan: Form Login -->
        <div class="col-md-6 col-12 right-section p-4 p-md-5" style="background-color: #f0f0f0;">

            <h2 class="mb-4 text-dark fw-bold">Admin Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Input -->
                <div class="mb-3">
                    <label for="email" class="form-label text-dark">{{ __('Email Address') }}</label>
                    <input id="email" type="email"
                           class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" placeholder="admin@gmail.com" required autofocus>
                    @error('email')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="mb-3">
                    <label for="password" class="form-label text-dark">{{ __('Password') }}</label>
                    <input id="password" type="password"
                           class="form-control @error('password') is-invalid @enderror"
                           name="password" placeholder="••••••••" required>
                    @error('password')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                           {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label text-dark" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-dark btn-lg rounded-pill">
                        {{ __('Login') }}
                    </button>
                </div>

                <!-- Forgot Password -->
                <div class="text-start">
                    @if (Route::has('password.request'))
                        <a class="text-decoration-none text-dark" href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tambahkan Script Bootstrap JS (opsional untuk fitur interaktif) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
