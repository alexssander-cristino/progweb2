<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class DonationController extends Controller
{
  public function index()
{
    $donations = Donation::with('volunteer')->get();
    return view('donations.index', compact('donations'));
}

    public function store(Request $request)
{
    $request->validate([
        'donor_name' => 'required|string|max:255',
        'amount' => 'required|numeric|min:0',
        'date' => 'required|date',
        'volunteer_id' => 'nullable|exists:volunteers,id',
    ]);

    Donation::create($request->all());

    return redirect()->route('donations.index')->with('success', 'Doação cadastrada!');
}


    public function show($id)
    {
        return Donation::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $donation = Donation::findOrFail($id);
        $donation->update($request->all());
        return response()->json($donation);
    }

    public function destroy($id)
    {
        Donation::destroy($id);
        return response()->json(null, 204);
    }
}
