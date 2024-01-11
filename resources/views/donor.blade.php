@extends('layouts.homelayout')
@section('content')

  <div class="section-1">
    <div class="container">
        <div class="title1">
          <h1>List of Donors</h1>
        </div>
        <div class="button-section">
            <a href="/add-donor" class="button1">Add Donor</a>
        </div>
        <div class="donors">
        <table id="table" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Donor ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Blood Type</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donors as $donor)
                    <tr>
                        <td>{{ $donor->donor_id }}</td>
                        <td>{{ $donor->donor_name }}</td>
                        <td>{{ $donor->donor_age }}</td>
                        <td>{{ $donor->blood_type }}</td>
                        <td>{{ $donor->donor_address }}</td>
                        <td>{{ $donor->donor_phone_no }}</td>
                        <td>
                            <form action="{{ route('donor.destroy', $donor->donor_id)}}" method="post">
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
