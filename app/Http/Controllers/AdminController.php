<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'donor_name' => 'required|min:2|max:255',
            'blood_group' => 'required',
            'date_of_donation' => 'required',
            'quantity' => 'required',
        ]);
        
        $donation = new Donation();

        $donation->donor_name = $request->donor_name;
        $donation->blood_group = $request->blood_group;
        $donation->date_of_donation = $request->date_of_donation;
        $donation->quantity = $request->quantity;

        $donation->save();

        return redirect()->route('admin.home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donation = Donation::where('id', $id)->first();
        return view('admin.update', ['donation' => $donation]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'donor_name' => 'required|min:2|max:255',
            'blood_group' => 'required',
            'date_of_donation' => 'required',
            'quantity' => 'required',
        ]);
        
        $donation = Donation::where('id', $id)->first();

        $donation->donor_name = $request->donor_name;
        $donation->blood_group = $request->blood_group;
        $donation->date_of_donation = $request->date_of_donation;
        $donation->quantity = $request->quantity;

        $donation->save();

        return redirect()->route('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donation = Donation::where('id', $id)->first();
        $donation->delete();
        return Redirect::back();
    }
}
