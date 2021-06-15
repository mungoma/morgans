@extends('layouts.Apartments', ['title' => __('Create Apartment')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Hello') . ' '. auth()->user()->name,
        'description' => __('This is your profile page. You can see the progress you\'ve made with your work and manage your projects or assigned tasks'),
        'class' => 'col-lg-12'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-body">
                        <form method="post" action="/Apartments" autocomplete="off">
                          @csrf
                            <h6 class="heading-small text-muted mb-4">Apartments information</h6>
                            <div class="pl-lg-4">
                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="input-name"  placeholder="{{ __('') }}"  required autofocus>
                                    <label class="form-control-label" for="input-name">{{ __('Location') }}</label>
                                    <input type="text" name="location" id="input-name"  placeholder="{{ __('') }}"  required autofocus>
                                    <label class="form-control-label" for="input-name">{{ __(' Rentals') }}</label>
                                    <input type="integer" name="rentals" id="input-name"  placeholder="{{ __('') }}"  required autofocus>
                                    <label class="form-control-label" for="input-name">{{ __(' Rentals') }}</label>
                                    <input type="integer" name="prices" id="input-name"  placeholder="{{ __('') }}"  required autofocus>
                                    <label class="form-control-label" for="input-name">{{ __(' Rentals') }}</label>
                                    <input type="integer" name="image" id="input-name"  placeholder="{{ __('') }}"  required autofocus>
                                <div class="text-center">
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

