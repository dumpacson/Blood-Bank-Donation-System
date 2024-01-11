

@extends('layouts.homelayout')
@section('content')

<div class="section-2">
    <div class="container">
        <div class="title">
            <h1>Edit Donation<?h1>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br />
            @endif
            </div>
                  <div>
                    <form method="post" action="{{ route('donation.update', $donation->donation_id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="blood_type">Blood Type:*</label>
                                    <input type="text" class="form-control" name="blood_type" value="{{ $donation->blood_type }}" />                                </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="donor_id">Donor ID:*</label>
                                    <input type="text" class="form-control" name="donor_id" value="{{ $donation->donor_id }}" />                                </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="staff_id">Staff ID:*</label>
                                    <input type="text" class="form-control" name="staff_id" value="{{ $donation->staff_id }}" />                                </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="donation_date">Donation Date:*</label>
                                    <input type="text" class="form-control" name="donation_date" value="{{ $donation->donation_date }}" />                                </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                {{-- <button type="submit" class="button button-a button-big button-rouded">Save</button> --}}
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                      </form>

                  </div>
                </div>
        </div>
      </div>
    </div>


  </section><!-- End Contact Section -->



@endsection
