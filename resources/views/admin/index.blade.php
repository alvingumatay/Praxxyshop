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
          <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <a href="{{ url('create') }}" class="btn btn-primary btn-sm">Create</a>
                </div>
                <div class="card-body">

                      <table id = "table" class = "display" width = "100%" cellspacing = "0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Description</th>
                                 <th>Product Image</th>
                                 <th>Date</th>
                                <th>Time</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->category }}</td>
                                 <td>{{ $item->description }}</td>
                                 <td>
                                    <img src="{{ asset('uploads/'.$item->product_image) }}" width="110px" height="90px" >
                                </td>
                                 <td>{{ $item->date }}</td>
                                 <td>{{ $item->time }}</td>
                                <td>
                                    <a href="{{ url('edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url('delete/'.$item->id) }}" class="btn btn-danger btn-sm">
                                    Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
@endsection