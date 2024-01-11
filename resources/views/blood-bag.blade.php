@extends('layouts.homelayout')
@section('content')

  <div class="section-1">
    <div class="container">
        <div class="title1">
          <h1>List of Available Blood</h1>
        </div>
        <div class="button-section">
            <a href="/add-blood" class="button1">Add Blood</a>
        </div>
        <div class="donors">
        <table id="table" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Blood Type</th>
                    <th scope="col">No. of Bags (500ml)</th>
                    <th scope="col" colspan = 2>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blood_bags as $blood_bag)
                    <tr>
                        <td>{{ $blood_bag->blood_type }}</td>
                        <td>{{ $blood_bag->amount }}</td>
                        <td>
                            <a href="{{ route('blood-bag.edit',$blood_bag->blood_type)}}" class="btn btn-primary">Edit</a>
                        </td>
                        {{-- <td>
                            <form action="{{ route('blood-bag.destroy', $blood_bag->blood_type)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
  </div>

  @endsection
