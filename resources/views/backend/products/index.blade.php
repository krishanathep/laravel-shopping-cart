@extends('backend.layout')

@section('content')

    <div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Products</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Products Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">PRODUCTS LIST</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Decription</th>
                            <th>Price</th>
                            <th>Create at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                           <tr>
                              <td>{{ $item->id }}</td> 
                              <td><img src="{{ $item->image }}" alt="" width="100"></td>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->description }}</td>
                              <td>{{ $item->price }}</td>
                              <td>{{ $item->created_at }}</td>
                              <td>
                                  <button class="btn btn-info"><i class="fas fa-eye"></i></button>
                                  <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                              </td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </div>

@endsection
