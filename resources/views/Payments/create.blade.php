@extends('layouts.Apartments', ['title' => __('Create Apartment')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('Congragulations on your new Apartment, You can add it to the family now by submitting its details below'),
        'class' => 'col-lg-12'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-body">
                        <form method="post" action="/Apartments" autocomplete="off">
                          @csrf
                            <h6 class="heading-small text-muted mb-4">Payment Details</h6>


                            <div class="form-group">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name Of Tenant</label>
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="" required autofocus>
                                  </div>
                               </div>
                               <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Apartment</label>
                                    <input type="text" name="location" class="form-control" id="exampleFormControlInput1" placeholder="" required autofocus>
                                  </div>
                               </div>

                               <div class="form-group">
                                <label for="example-number-input" class="form-control-label">Rent Period</label>
                                <input class="form-control" name="rentals" type="number" value="" id="example-number-input" required autofocus >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Amount</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Ugx</span>
                                </div>
                                <input type="number" name="prices" class="form-control" aria-label="Amount (to the nearest dollar)" required autofocus >
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                                </div>
                            </div>

                                <div class="text-center">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFileLang" lang="en" required autofocus>
                                        <label class="custom-file-label" for="customFileLang">Add Receipt</label>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Add') }}</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

