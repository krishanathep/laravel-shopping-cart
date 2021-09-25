@extends('backend.layout')

@section('content')

    <div>
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Products</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create Products Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">CREATE PRODUCT</h3>

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
                <form action="{{ route('backend-products.store') }}" method='POST'>
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name : </strong>
                                    <input type="text" name='name' class="form-control" placeholder='Enter product name...'>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Decription : </strong>
                                    <input type="text" name='description' class="form-control"
                                        placeholder='Enter product detail...'>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Image : </strong>
                                    <input type="text" name='image' class="form-control" placeholder='Enter product image...'>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Price : </strong>
                                    <input type="text" name='price' class="form-control" placeholder='Enter product price...'>
                                </div>
                            </div>
                            <div class="float-right">
                                <button type='submit' class='btn btn-primary'>Submit</button>
                                <a href="{{ route('backend-products.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- /.card -->
    </div>

@endsection
