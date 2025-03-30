<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;

class CompanyProfileController extends Controller
{
    // Menampilkan Company Profile di halaman utama website
    public function show()
{
    $profile = CompanyProfile::first();
    return view('company_profile.show', compact('profile'));
}

 public function public()
{
    $profile = CompanyProfile::first();
    return view('company_profile.public', compact('profile'));
}

public function index()
{
    $profile = CompanyProfile::first();
    return view('company_profile.index', compact('profile'));
}

public function edit()
{
    $profile = CompanyProfile::first();
    return view('company_profile.edit', compact('profile'));
}

public function update(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    $profile = CompanyProfile::first() ?? new CompanyProfile();
    $profile->name = $request->name;
    $profile->description = $request->description;
    $profile->save();

    return redirect()->route('company.index')->with('success', 'Profil berhasil diperbarui!');
}

}
