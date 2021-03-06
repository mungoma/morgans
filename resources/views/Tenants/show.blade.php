
@extends('layouts.Apartments', ['title' => __('Create Apartment')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __(''),
        'class' => 'col-lg-10'
    ])

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-2 mb-5 mb-xl-0">
            <div class="card card-profile shadow">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-sm btn-info mr-4">{{ __('Connect') }}</a>
                        <a href="#" class="btn btn-sm btn-default float-right">{{ __('Message') }}</a>
                    </div>
                </div>
                <div class="card-body pt-0 pt-md-4">
                    <div class="row">
                        <div class="col">
                            <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                <div>
                                    <span class="heading">Entebbe</span>
                                    <span class="description">{{ __('Apartment') }}</span>
                                </div>
                                <div>
                                    <span class="heading">paid</span>
                                    <span class="description">{{ __('Payment') }}</span>
                                </div>
                                <div>
                                    <span class="heading">+256779767679</span>
                                    <span class="description">{{ __('Contact') }}</span>
                                </div>
                                <div>
                                    <span class="heading">6 Months</span>
                                    <span class="description">{{ __('Rent Period') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3>
                            Tonny Tula
                        </h3>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>{{ __('wakiso, Uganda') }}
                        </div>
                        <div class="h5 mt-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        @include('layouts.footers.auth')
    </div>
@endsection


