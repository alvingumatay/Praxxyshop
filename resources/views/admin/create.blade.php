@extends('layouts.admin.dashboard')

@section('content')
         <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
        <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Product List</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('create') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Product Name <span style="color:red">*</span></label>
                            
                            <input type="text" name="name" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Category <span style="color:red">*</span></label>
                            <br/>
                           <select name="category" class="form-control" style="width: 300px" id="">
                               <option value="">Select Products  </option>
                               <option value="Shoes">Shoes</option>
                               <option value="Gadgets">Gadgets </option>
                               <option value="Clothes">Clothes</option>
                           </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Description <span style="color:red">*</span></label>          
                            <textarea name="description" id="" class="form-control"></textarea>
                        </div>
                         <div class="form-group mb-3">
                            <label for="">Product Image<span style="color:red">*</span></label>          
                            <input type="file" name="product_image" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Date <span style="color:red">*</span></label>          
                            <input type="date" name="date" class="form-control" >
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Time<span style="color:red">*</span></label>          
                            <input type="time" name="time" class="form-control" >
                        </div>
                        
                        <div class="form-group mb-3">
                           <center>
                            <button type="submit" style="width: 300px;" class="btn btn-primary  btn-block">Submit </button>
                           </center>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
@endsection