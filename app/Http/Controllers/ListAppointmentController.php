<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Appointment;

class ListAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointment = DB::table('appointments')
        ->orderBy('id','asc')
        ->get();
        return view('/list-appointment',['appointments'=>$appointment]);
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
        $donation = new Appointment();
        $donation->name = $validatedData['name'];
        $donation->email = $validatedData['email'];
        $donation->phone = $validatedData['phone'];
        $donation->blood_type = $validatedData['blood_type'];
        $donation->donation_date = $validatedData['donation_date'];
        $donation->time_slot = $validatedData['time_slot'];
        $donation->created_at=today();
        $donation->updated_at=today();
        $donation->save();

        return redirect('/list-appointment');
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
    public function destroy($id)
    {
        {
            $appointment = Appointment::find($id);
            $appointment->delete(); // Easy right?

            return redirect('/list-appointment')->with('success', 'Appointment removed.');  // -> resources/views/stocks/index.blade.php
        }
    }
}
