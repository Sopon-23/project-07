@extends('layouts.master_backend')
@section('conten')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Menu</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('admin/product/update/' . $pro->product_id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input type="text" name="name" value="{{ $pro->name }}" class="form-control"
                                        id="defaultFormControlInput" placeholder="กรุณากรอกชื่อสินค้า"
                                        aria-describedby="defaultFormControlHelp" />

                                    <label for="defaultFormControlInput" class="form-label">Price</label>
                                    <input type="text" name="price" value="{{ $pro->price }}" class="form-control"
                                        id="defaultFormControlInput" placeholder="กรุณากรอกชื่อสินค้า"
                                        aria-describedby="defaultFormControlHelp" />

                                    <label for="defaultFormControlInput" class="form-label">Description</label>
                                    <input type="text" name="description" value="{{ $pro->description }}"
                                        class="form-control" id="defaultFormControlInput" placeholder="กรุณากรอกชื่อสินค้า"
                                        aria-describedby="defaultFormControlHelp" />

                                        <label for="defaultFormControlInput" class="form-label">quantity</label>
                                        <input type="number" name="quantity" value="{{ $pro->quantity }}"
                                            class="form-control" id="defaultFormControlInput" placeholder="กรุณากรอกจำนวนสินค้า"
                                            aria-describedby="defaultFormControlHelp" />

                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Category</label>
                                        <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                                            @foreach ($cat as $c)
                                                <option value="{{ $c->category_id }}"
                                                    @if ($c->category_id == $pro->category_id) selected @endif>
                                                    {{ $c->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>








                                    <label for="defaultFormControlInput" class="form-label">Images</label>
                                    <div class="input-group">
                                        <input type="file" name="image" class="form-control" id="inputGroupFile02" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>

                                    <div class="mt-3">
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mt-4">
                                        <img src="{{ asset('backend/product/resize/' . $pro->image) }}" alt="">
                                    </div>

                                    <input type="submit" value="Update" class="btn btn-primary mt-3">
                                    <a href="{{ route('p.index') }}" class="btn btn-danger mt-3 mx-2">Cancel</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
