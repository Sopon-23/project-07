@extends('layouts.master_backend')
@section('conten')
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                aria-label="Search" aria-describedby="basic-addon2">
                                <div class="mt-3">

                            </div>
                        </div>
                    </form>

                   <!-- Topbar Navbar -->
                   <ul class="navbar-nav ml-auto">
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="content">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-header">
                                <h4 class="card-title">User</h4>
                              </div>
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                          id
                                        </th>
                                        <th>
                                          Name
                                        </th>
                                        <th>
                                          email
                                        </th>
                                        <th>
                                          phone
                                        </th>
                                      </thead>
                                    @foreach ($user as $u)
                                        <tr>
                                            <td>{{$u->id}}</td>
                                            <td>{{$u->name}}</td>
                                            <td>{{$u->email}}</td>
                                            <td>{{$u->phone}}</td>
                                        <td>
                                            <a href="#"><i class='bx bxs-edit'></i></a>
                                            <a href="#"><i class='bx bxs-trash'></i></a>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </thead>
                                    <tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End of Main Content -->

        </div>
    </div>

    <!-- Scroll to Top Button-->
            </div>
        </div>
    </div>
    @endsection
