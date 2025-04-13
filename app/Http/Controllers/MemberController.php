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

        foreach ($members as $member) {
        if (Carbon::now()->greaterThan($member->end_date)) {
            $member->status = 'inactive';
            $member->save();
        }
    }

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
            'password'  => $request->password,
            'email' => $request->email,
            'phone' => $request->phone,
            'start_date' => $request->start_date,
            'end_date' => $endDate,
            'status' => 'active'
        ]);

        return redirect()->route('members.index')->with('success', 'Member berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required',
            'password'  => 'required',
            'email' => 'required|email|unique:members,email,' . $id,
            'phone' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'status' => 'required'
        ]);

        $member = Member::findOrFail($id);
        $member->update($request->all());

        return redirect()->route('members.index')->with('success', 'Member berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        return redirect()->route('members.index')->with('success', 'Member berhasil dihapus.');
    }
}
