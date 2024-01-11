<?php

namespace App\Http\Controllers;
use DB;
use App\Models\donor;
use Illuminate\Http\Request;

class donorsController extends Controller
{
    public function index()
    {
        $donors = DB::table('donordetails')
        ->orderBy('donor_id', 'asc')
        ->get();

        return view ('donors', ['donors'=>$donors]);
    }

    public function store(Request $request)
    {
        $donor= new Donor();
        $donor->donor_id=$request->donor_id;
        $donor->donor_name=$request->donor_name;
        $donor->donor_age=$request->donor_age;
        $donor->blood_type=$request->blood_type;
        $donor->donor_address=$request->donor_address;
        $donor->donor_phone_no=$request->donor_phone_no;
        $donor->save();
        return redirect('donors');
    }


}
