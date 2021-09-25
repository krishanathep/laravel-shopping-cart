@extends('backend.layout')

@section('content')

    <div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Show Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Show Orders Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">SHOW ORDER</h3>

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
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td>{{ $order->id }}</td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{ $order->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $order->email }}</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>{{ $order->total }}</td>
                    </tr>
                    <tr>
                        <td>Create at</td>
                        <td>{{ $order->created_at }}</td>
                    </tr>
                </table>
                <div class="float-right">
                    <a href="{{ route('backend-orders.index') }}" class="btn btn-secondary mt-2">Cancel</a>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

@endsection
