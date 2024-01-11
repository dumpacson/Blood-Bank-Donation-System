@extends('layouts.homelayout')
@section('content')

  <div class="section-1">
    <div class="container">
        <div class="title1">
          <h1>List of Donations</h1>
        </div>
        <div class="button-section">
            <a href="/add-donation" class="button1">Add Donation</a>
        </div>
        <div class="donors">
        <table id="table" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Donation ID</th>
                    <th scope="col">Blood Type</th>
                    <th scope="col">Donor ID</th>
                    <th scope="col">Staff ID</th>
                    <th scope="col">Donation Date</th>
                    <th scope="col" colspan=2>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donations as $donation)
                    <tr>
                        <td>{{ $donation->donation_id }}</td>
                        <td>{{ $donation->blood_type }}</td>
                        <td>{{ $donation->donor_id }}</td>
                        <td>{{ $donation->staff_id }}</td>
                        <td>{{ $donation->donation_date }}</td>
                        <td>
                            <a href="{{ route('donation.edit',$donation->donation_id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('donation.destroy', $donation->donation_id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
  </div>

  @endsection
