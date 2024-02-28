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
                    <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header">
                              <h4 class="card-title">Categaory</h4>
                              <div style="m-1">
                                <a href="{{ route('c.create') }}"class="btn btn-success"><i class='bx bxs-plus-circle'></i> Add item</a>
                             </div>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table">
                                  <thead class=" text-primary">
                                      <th>No</th>
                                      <th>Name</th>
                                      <th>Number Menu</th>
                                      <th>CREATEDAT</th>
                                      <th>UPDATEDAT</th>
                                      <th>ACTIONS</th>

                                    </thead>
                                    <tbody>
                                    @foreach ($category as $cat)
                                    <tr>
                                        <td>{{ $category->firstItem()+$loop->index}}</td>
                                        <td>{{ $cat->name }}</td>
                                        <td>{{ $cat->product->count() }}</td>
                                        <td>{{$cat->created_at }}</td>
                                        <td>{{$cat->updated_at }}</td>
                                        <td>
                                            <a href="{{ url('admin/category/edit/'.$cat->category_id) }}" class="btn btn-warning">Edit</a>
                                            <a href="{{ url('admin/category/delete/'.$cat->category_id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                   </tbody>
                                </table>
                                <div class="mt-3">
                                    {{$category->links('pagination::bootstrap-5')}}
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
