{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>




    </head>
    <body class="antialiased"> --}}



        @extends('layouts.donorlayout')




        <div class="section-1">
            <div class="container">
                <div class="title1">
                  <h1>Appointment Form</h1>
                </div>




        <form id="appointment" method="POST" action="{{ route('submit') }}">

                @csrf
            <div>
                <label>Name:</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label>Phone:</label>
                <input type="text" name="phone" required>
            </div>
            <div>
                <label>Blood Type:</label>
                <input type="text" name="blood_type" required>
            </div>
            <div>
                <label>Donation Date:</label>
                <input type="date" name="donation_date" required>
            </div>

            {{-- <div>
                <input type="radio" name="time_slot" value="9:00 AM"> 9:00 AM
                <input type="radio" name="time_slot" value="10:00 AM"> 10:00 AM
                <input type="radio" name="time_slot" value="11:00 AM"> 11:00 AM
                <input type="radio" name="time_slot" value="12:00 PM"> 12:00 PM
                <input type="radio" name="time_slot" value="1:00 PM"> 1:00 PM
                <input type="radio" name="time_slot" value="2:00 PM"> 2:00 PM
                <input type="radio" name="time_slot" value="3:00 PM"> 3:00 PM
                <input type="radio" name="time_slot" value="4:00 PM"> 4:00 PM
            </div>--}}



            <div>

                <label class="rad-label">
                  <input type="radio" class="rad-input" name="time_slot" value="9:00 AM">
                  <div class="rad-design"></div>
                  <div class="rad-text">9.00 AM</div>
                </label>

                <label class="rad-label">
                    <input type="radio" class="rad-input" name="time_slot" value="10:00 AM">
                    <div class="rad-design"></div>
                    <div class="rad-text">10.00 AM</div>
                  </label>

                <label class="rad-label">
                    <input type="radio" class="rad-input" name="time_slot" value="11:00 AM">
                    <div class="rad-design"></div>
                    <div class="rad-text">11.00 AM</div>
                  </label>

                <label class="rad-label">
                    <input type="radio" class="rad-input" name="time_slot" value="12:00 PM">
                    <div class="rad-design"></div>
                    <div class="rad-text">12.00 PM</div>
                  </label>

                <label class="rad-label">
                    <input type="radio" class="rad-input" name="time_slot" value="1:00 PM">
                    <div class="rad-design"></div>
                    <div class="rad-text">1.00 PM</div>
                  </label>

                <label class="rad-label">
                    <input type="radio" class="rad-input" name="time_slot" value="2:00 PM">
                    <div class="rad-design"></div>
                    <div class="rad-text">2.00 PM</div>
                  </label>

                <label class="rad-label">
                    <input type="radio" class="rad-input" name="time_slot" value="3:00 PM">
                    <div class="rad-design"></div>
                    <div class="rad-text">3.00 PM</div>
                  </label>

                <label class="rad-label">
                    <input type="radio" class="rad-input" name="time_slot" value="4:00 PM">
                    <div class="rad-design"></div>
                    <div class="rad-text">4.00 PM</div>
                  </label>

                  <input type="submit" class="button1" value="Submit">

              </div>

        </form>

    </div>
</div>


        {{-- <div>

            <table class='table'>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Blood Type</th>
                        <th scope="col">Donation Date</th>
                        <th scope="col">Time Slot</th>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> --}}



        @section('content')
        @endsection



{{--
    </body>
</html> --}}
