@extends('layout')
  
@section('content')

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

    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                <h6 class="card-title">
                    PRODUCTS IN CART
                </h6>
            </div>
            <div class="card-body">
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:50%">Product</th>
                            <th style="width:10%">Price</th>
                            <th style="width:8%">Quantity</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $total = 0 @endphp
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                                <tr data-id="{{ $id }}">
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                                            <div class="col-sm-9">
                                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Price">${{ $details['price'] }}</td>
                                    <td data-th="Quantity">
                                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                                    </td>
                                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                                    <td class="actions" data-th="">
                                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            </div>
        </div>
        <div class="col-md-12 mt-3 mb-5">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">
                        ORDER DETAIL
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('order.store') }}" method='POST'>
                        @csrf
                        <div class="form-group">

                            <input type="text" name="name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="form-group">

                            <input type="text" name="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="total" class="form-control" value="{{ $total }}" hidden>
                        </div>
                        <div class="float-right">
                            <a href="{{ url('/') }}" class="btn btn-secondary"><i class="fa fa-angle-left"></i> More Shopping</a>
                            <button type="submit" class="btn btn-success" >Checkout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
  
@section('scripts')
<script type="text/javascript">
    function checkout() {
        Swal.fire('Good job!','Thank you for ordering our products.', 'success')
    }
    </script>
<script type="text/javascript">
  
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
@endsection