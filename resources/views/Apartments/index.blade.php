@extends('layouts.Apartments')
@section('content')
    <div>
        @include('layouts.headers.Apartmentscards')
    </div>
    <div>
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                          <a href="Apartments/create" class="btn btn-sm btn-neutral">Add</a>
                          <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                          <a href="#" class="btn btn-sm btn-neutral">Print</a>
                    </div>
                </div>
            </div>
        </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                    <h3 class="mb-0">Apartments List</h3>
                </div>
                <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                        <th scope="col" class="sort" data-sort="name">N0</th>
                        <th scope="col" class="sort" data-sort="name">Name</th>
                        <th scope="col" class="sort" data-sort="name">Location</th>
                        <th scope="col" class="sort" data-sort="budget">Rentals</th>
                        <th scope="col" class="sort" data-sort="budget">Tenants</th>
                        <th scope="col" class="sort" data-sort="status">Occupancy</th>
                        <th></th>
                        <th></th>

                 </tr>
            </thead>
            <tbody class="list">
                        @foreach ($apartments as $apartment)
          <tr>
            <td class="budget">
                {{ $apartment->id }}
            </td>
                  <td scope="row">
                      <div class="media align-items-center">
                      <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                      </a>
                      <div class="media-body">
                          <span class="name mb-0 text-sm">{{ $apartment->name }}</span>
                      </div>
                      </div>
                  </td>
                  <td>
                    <span class="badge badge-dot mr-4">
                    <i class="bg-success"></i>
                    <span class="status">{{ $apartment->location }}</span>
                    </span>
                </td>
                  <td class="budget">
                      {{ $apartment->numberOfRentals }}
                  </td>
                <td class="budget">
                  <a href="Apartments/create"> {{ ('10') }}</a>
                </td>

                  <td>
                      <div class="d-flex align-items-center">
                      <span class="completion mr-2">60%</span>
                      <div>
                          <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                      </div>
                      </div>
                  </td>
                  <td>
                    <a href="Apartments/show" class="btn btn-sm btn-neutral">View</a>
                  </td>
                  <td class="text-right">
                      <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                      </div>
                  </td>



          </tr>

                        @endforeach


                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    <nav aria-label="...">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">
                            <i class="fas fa-angle-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        </li>
                        <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fas fa-angle-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                        </li>
                    </ul>
                    </nav>
                </div>
                </div>
            </div>
            </div>

    </div>

@endsection
