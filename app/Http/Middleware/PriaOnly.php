<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class PriaOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            return redirect('/')->with('error', 'Silahkan login terlebih dahulu');
        }

        // Ambil data user yang sedang login
        $user = Auth::user();

        // Debugging: Cek apakah nilai kelamin tersedia
        if (!isset($user->kelamin)) {
            return redirect('/home')->with('error', 'Kolom kelamin tidak ditemukan.');
        }

        // Jika pengguna adalah pria, blokir akses
        if ($user->kelamin === 'pria') {
            return redirect('/home')->with('error', 'Maaf, akses hanya untuk non-pria.');
        }

        return $next($request);
    }
}
