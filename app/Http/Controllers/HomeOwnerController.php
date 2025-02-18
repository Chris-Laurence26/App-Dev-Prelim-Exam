<?php

namespace App\Http\Controllers;

use App\Models\HomeOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owners = HomeOwner::latest()->with('user')->paginate(10);
        return view('homeowner.index', compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('homeowner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        HomeOwner::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('homeowner.index')->with('success', 'Successfully created a new homeowner');
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeOwner $homeOwner)
    {
        $homeOwner->load('user');
        return view('homeowner.show', compact('homeOwner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeOwner $homeOwner)
    {
        return view('homeowner.edit', compact('homeOwner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeOwner $homeOwner)
    {
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $homeOwner->update([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('homeowner.index')->with('success', 'Successfully updated the homeowner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeOwner $homeOwner)
    {
        $homeOwner->delete();
        return redirect()->route('homeowner.index')->with('success', 'Successfully deleted the homeowner');
    }
}
