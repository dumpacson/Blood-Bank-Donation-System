@extends('layouts.homelayout')
@section('content')

<div class="section-2">
    <div class="container">
        <div class="title1">
            <h1>Add Donation</h1>

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
                    <form method="post" action="{{ route('blood-bag.update', $blood_bag->blood_type) }}">
                        @method('PATCH')
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="amount">No. of Bags:*</label>
                                    <input type="text" class="form-control" name="amount" value="{{ $blood_bag->amount }}" />
                                </div>
                              </div>
                          <div class="col-md-12 text-center">
                            {{-- <button type="submit" class="button button-a button-big button-rouded">Save</button> --}}
                            <button type="submit" class="btn btn-primary">Submit</button>
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
