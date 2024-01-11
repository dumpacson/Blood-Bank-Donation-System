@extends('layouts.homelayout')
@section('content')

  <div class="section-1">
    <div class="container">
        <div class="title1">
          <h1>List of Appointments</h1>
        </div>
        <div class="donors">
        <table id="table" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Blood Type</th>
                    <th scope="col">Donation Date</th>
                    <th scope="col">Time Slot</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment )
                    <tr>
                        <td>{{ $appointment->id }}</td>
                        <td>{{ $appointment->name }}</td>
                        <td>{{ $appointment->email }}</td>
                        <td>{{ $appointment->phone }}</td>
                        <td>{{ $appointment->blood_type}}</td>
                        <td>{{ $appointment->donation_date}}</td>
                        <td>{{ $appointment->time_slot}}</td>
                        <td>
                            <form action="{{ route('appointment.destroy', $appointment->id)}}" method="post">
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

