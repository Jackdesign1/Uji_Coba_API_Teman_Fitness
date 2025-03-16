<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Carbon\Carbon;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:members,email',
            'phone' => 'required',
            'start_date' => 'required|date',
        ]);

        $endDate = Carbon::parse($request->start_date)->addMonth();

        Member::create([
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'start_date' => $request->start_date,
            'end_date' => $endDate,
            'status' => 'active'
        ]);

        return redirect()->route('members.index')->with('success', 'Member berhasil ditambahkan.');
    }
}
