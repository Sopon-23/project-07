@extends('layouts.master_backend')
@section('conten')
<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Category</h4>
          </div>
          <div class="card-body">
              <table class="table">
                                <form method="POST" action="{{ url('admin/category/insert') }}">
                                @csrf
                                <div class="card-body">
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                    <div class="mt-3">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <input type="submit" value="Save" class="btn btn-primary mt-3" บันทึก>
                                    <a href="{{ route ('c.index') }}" class="btn btn-danger mt-3 mx-2">Cancel</a>
                                  </div>
                                 </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

@endsection
