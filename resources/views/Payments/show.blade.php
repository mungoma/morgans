
@extends('layouts.Apartments', ['title' => __('Create Apartment')])

@section('content')
    @include('users.partials.header', [
        'class' => 'col-lg-10'
    ])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-2 mb-5 mb-xl-0">
            <div class="card card-profile shadow">
                <div class="card-body pt-0 pt-md-4">
                    <div class="text-center">
                        <h3>
                            Payment Info
                        </h3>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                            <div class="container">
                                <table class="table align-items-center table-flush">
                                    <thead class="">
                                        <tr>
                                            <th scope="col">Tenants Name</th>
                                            <th scope="col">KEN</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Apartment</th>
                                            <th scope="col">Khalifi</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Ugx 1,000,000</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">13/02/2021</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Page name</th>
                                            <th scope="col">Visitors</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Rent Period</th>
                                            <th scope="col">4 months</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Receipt</th>
                                        </tr>

                                    </thead>

                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                          <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="../../assets/img/theme/img-1-1000x600.jpg" alt="Card image cap">
                                </div class='card-body'>
                                <h1></h1>
                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">
                            Print Details
                          </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

        @include('layouts.footers.auth')
    </div>
@endsection


