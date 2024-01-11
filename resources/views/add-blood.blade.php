@extends('layouts.homelayout')
@section('content')

<div class="section-2">
    <div class="container">
        <div class="title1">
            <h1>Add Blood<?h1>
            </div>
                  <div>
                    <form action="addblood" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                  <input type="text" name="blood_type" class="form-control" id="blood_type" placeholder="Blood Type" required>
                                </div>
                              </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="amount" class="form-control" id="amount" placeholder="No. of Bags" required>
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
  </section>

@endsection
