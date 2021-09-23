@extends('layout')

@section('content')

<div class="row">
    @foreach($products as $product)
    <div class="col-xs-18 col-sm-6 col-md-3">
        <div class="card mt-2 mb-2">
            <img class="card-img-top" src="{{ $product->image }}" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">{{ $product->name }}</h4>
              <p class="card-text">{{ $product->description }}</p>
              <p class="card-text"><strong>Price: </strong> {{ $product->price }}$</p>
              <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-info btn-block">Add to cart</a>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-xs-18 col-sm-6 col-md-3">
        {{ $products->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection
