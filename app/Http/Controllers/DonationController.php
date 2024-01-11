<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donations = DB::table('donations')
        ->orderBy('donation_date', 'desc')
        ->get();

        return view('donation', ['donations'=>$donations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donation= new Donation();
        $donation->donation_id=$request->donation_id;
        $donation->blood_type=$request->blood_type;
        $donation->donor_id=$request->donor_id;
        $donation->staff_id=$request->staff_id;
        $donation->donation_date=$request->donation_date;
        $donation->created_at=today();
        $donation->updated_at=today();
        $donation->save();
        return redirect('donation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($donation_id)
    {
        {
            $donation = Donation::find($donation_id);
            return view('donation.edit', compact('donation'));  // -> resources/views/stocks/edit.blade.php
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $donation_id)
    {
        $request->validate([
            'blood_type'=>'required',
            'donor_id'=>'required',
            'staff_id'=>'required',
            'donation_date'=>'required'
        ]);
        $donation = Donation::find($donation_id);
        // Getting values from the blade template form
        $donation->blood_type = $request->get('blood_type');
        $donation->donor_id = $request->get('donor_id');
        $donation->staff_id = $request->get('staff_id');
        $donation->donation_date = $request->get('donation_date');
        $donation->save();

        return redirect('/donation')->with('success', 'Donation updated.'); // -> resources/views/stocks/index.blade.php
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($donation_id)
    {
        {
            $donation = Donation::find($donation_id);
            $donation->delete(); // Easy right?

            return redirect('/donation')->with('success', 'Donation removed.');  // -> resources/views/stocks/index.blade.php
        }
    }
}
