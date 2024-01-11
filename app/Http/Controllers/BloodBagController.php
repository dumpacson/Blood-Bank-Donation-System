<?php

namespace App\Http\Controllers;
use DB;
use App\Models\BloodBag;
use Illuminate\Http\Request;

class BloodBagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blood_bags = DB::table('blood_bags')
        ->orderBy('blood_type', 'asc')
        ->get();

        return view('blood-bag', ['blood_bags'=>$blood_bags]);
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
        $blood_bag= new BloodBag();
        $blood_bag->blood_type=$request->blood_type;
        $blood_bag->amount=$request->amount;
        $blood_bag->created_at=today();
        $blood_bag->updated_at=today();
        $blood_bag->save();
        return redirect('bloodbag');

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
    public function edit($blood_type)
    {
        {
            $blood_bag = BloodBag::find($blood_type);
            return view('bloodbag.edit', compact('blood_bag'));  // -> resources/views/stocks/edit.blade.php
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blood_type)
    {
        // Validation for required fields (and using some regex to validate our numeric value)
        $request->validate([
            'amount'=>'required',
        ]);
        $blood_bag = BloodBag::find($blood_type);
        // Getting values from the blade template form
        $blood_bag->amount =  $request->get('amount');
        $blood_bag->save();

        return redirect('/blood-bag')->with('success', 'Blood updated.'); // -> resources/views/stocks/index.blade.php
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($blood_type)
    {
        {
            $blood_bag = BloodBag::find($blood_type);
            $blood_bag->delete(); // Easy right?

            return redirect('/blood-bag')->with('success', 'Blood Type removed.');  // -> resources/views/stocks/index.blade.php
        }
    }
}
