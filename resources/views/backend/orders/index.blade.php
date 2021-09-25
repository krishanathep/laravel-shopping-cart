@extends('backend.layout')

@section('content')

    <div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Orders Page</li>
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
                <h3 class="card-title">ORDERS LIST</h3>

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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Total</th>
                            <th>Create at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $item)
                           <tr>
                              <td>{{ $item->id }}</td> 
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->email }}</td>
                              <td>{{ $item->total }}</td>
                              <td>{{ $item->created_at }}</td>
                              <td>
                                <form action="{{ route('backend-orders.destroy', $item->id) }}" method="POST">
                                  <a href="{{ route('backend-orders.show', $item->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                  @csrf 
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="fas fa-trash-alt"></i></button>
                                </form>
                              </td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
                <div class="col-sm-6 mt-3">
                    {{ $orders->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

@endsection
