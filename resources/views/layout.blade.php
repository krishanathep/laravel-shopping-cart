<!DOCTYPE html>
<html>
<head>
    <title>Laravel Add To Cart Function - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Shopping</a>
            <ul class="navbar-nav ml-auto">
                <!--
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Products</a>
                </li>
                -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <br />
    <div class="container">

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')
    </div>

    @yield('scripts')

</body>
</html>
