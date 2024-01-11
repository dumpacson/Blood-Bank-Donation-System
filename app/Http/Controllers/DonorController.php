<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donors = DB::table('donors')
        ->orderBy('donor_id', 'asc')
        ->get();

        return view('donor', ['donors'=>$donors]);
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
        $donor= new Donor();
        $donor->donor_id=$request->donor_id;
        $donor->donor_name=$request->donor_name;
        $donor->donor_age=$request->donor_age;
        $donor->blood_type=$request->blood_type;
        $donor->donor_address=$request->donor_address;
        $donor->donor_phone_no=$request->donor_phone_no;
        $donor->created_at=today();
        $donor->updated_at=today();
        $donor->save();
        return redirect('donor');
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($donor_id)
    {
        {
            $donor = Donor::find($donor_id);
            $donor->delete(); // Easy right?

            return redirect('/donor')->with('success', 'Donor removed.');  // -> resources/views/stocks/index.blade.php
        }
    }
}
