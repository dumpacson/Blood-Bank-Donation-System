<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    //

    public function index()
    {
        //
        $appointment = DB::table('appointments')
        ->orderBy('id','asc')
        ->get();
        return view('/appointment',['appointments'=>$appointment]);
    }

      public function form() {
        return view('appointment.form');
    }

     public function submit(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'blood_type' => 'required|string|max:3',
            'donation_date' => 'required|date',
            'time_slot' => 'required|string|max:10',
        ]);

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

        return redirect('/appointment');
        // echo '<script type="text/javascript"> alert("Appointment Complete") </script>';


        // return redirect()->route('success');
    }

    public function destroy($id)
    {
        {
            $appointment = Appointment::find($id);
            $appointment->delete(); // Easy right?

            return redirect('/list-appointment')->with('success', 'Appointment removed.');  // -> resources/views/stocks/index.blade.php
        }
    }
}
