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
                    <div class="col-lg-6 col-8">
                        <button type="button" class="btn btn-success">
                            <span>Paid Tenants</span>
                            <span class="badge badge-md badge-circle badge-floating badge-default border-white">8</span>
                        </button>
                        <button type="button" class="btn btn-danger">
                            <span>Overdue Tenants</span>
                            <span class="badge badge-md badge-circle badge-floating badge-secondary border-white">4</span>
                        </button>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                    <a href="Tenants/create" class="btn btn-sm btn-neutral">New</a>
                    <a href="#" class="btn btn-sm btn-neutral">Filters</a>
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
                    <h3 class="mb-0">Tenants list</h3>
                </div>
                <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                        <th scope="col" class="sort" data-sort="name">N0</th>
                        <th scope="col" class="sort" data-sort="name">Name</th>
                        <th scope="col" class="sort" data-sort="name">Apartment</th>
                        <th scope="col" class="sort" data-sort="budget">Contact</th>
                        <th></th>
                        <th></th>

                 </tr>
            </thead>
            <tbody class="list">
          <tr>
            <td class="budget">1
            </td>
                  <td scope="row">Tonny tula

                  </td>
                  <td>
                     Khalifi
                </td>

                  <td class="budget">
                  </td>


                  <td>
                    <a href="Tenants/show" class="btn btn-sm btn-neutral">View</a>
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
