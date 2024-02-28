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

                   <!-- Topbar Navbar -->
                   <ul class="navbar-nav ml-auto">

    <!-- Dropdown - Messages -->
    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
        aria-labelledby="searchDropdown">
        <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small"
                    placeholder="Search for..." aria-label="Search"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</li>
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
                                <h4 class="card-title">Menu</h4>
                                <div style="m-1">
                                    <a href="{{ route('p.create') }}"class="btn btn-success "><i class='bx bxs-plus-circle'></i> ADD ITEM</a>
                                 </div>
                            </div>
                              <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table">
                                    <thead class=" text-primary">
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>quantity</th>
                                        <th>images</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>description</th>
                                        <th>Createdat</th>
                                        <th>Updatedat</th>
                                        <th>Actions</th>
                                      </thead>
                                    <tbody>
                                        @foreach ( $product as $pro )
                                        <tr>
                                          <td>{{ $product->firstItem() + $loop->index}}</td>
                                          <td>{{ $pro->name }}</td>
                                          <td>{{ $pro->quantity }}</td>
                                          <td>
                                            <img src="{{asset('backend/product/resize/'.$pro->image) }}" alt="">
                                          </td>
                                          <td>{{ $pro->price }}</td>
                                          <td>{{ $pro->category->name }}</td>
                                          <td>{{ $pro->description }}</td>
                                          <td>{{ $pro->created_at }}</td>
                                          <td>{{ $pro->updated_at }}</td>
                                          <td>
                                            <a href="{{ route('p.edit',$pro->product_id) }}" class="btn btn-warning">Edit</a>
                                            <a href="{{ url('admin/product/delete/'.$pro->product_id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                        </tr>
                                        @endforeach
                                   </tbody>
                                </table>
                                <div class="mt-3">
                                    {{$product->links('pagination::bootstrap-5')}}
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
