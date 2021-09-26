<!DOCTYPE html>
<html>
<head>
    <title>Laravel Add To Cart Function - ItSolutionStuff.com</title>
    
    <link
		rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
		integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
		crossorigin="anonymous"
	/>

	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/dist/css/clean-switch.css') }}">

	<!-- jQuery -->
	<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>

	<link rel="stylesheet" href="{{ asset('backend/dist/js/jquery-ui-1.12.1/jquery-ui.min.css') }}" />
	<script src="{{ asset('backend/dist/js/jquery-ui-1.12.1/jquery-ui.min.js') }}"></script>

	<script src="{{ asset('backend/dist/js/sweetalert2@11.js') }}"></script>
	<script src="{{ asset('backend/dist/js/jspdf.min.js') }}"></script>
	<script src="{{ asset('backend/dist/js/printThis.js') }}"></script>

	<!-- Custom -->
	<link rel="stylesheet" href="{{ asset('backend/dist/css/custom.css') }}">
	<script src="{{ asset('backend/dist/js/custom.js') }}"></script>

  @yield('third_party_stylesheets')

	@stack('page_css')
</head>
<body>
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
  
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
       
      </ul>
    </nav>
    <!-- /.navbar -->
  
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('backend-dashboard.index') }}" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>
  
      <!-- Sidebar -->
      <div class="sidebar">
        
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                 <li class="nav-item">
                  <a href="{{ route('backend-dashboard.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('backend-products.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                    <p>
                      Products
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('backend-orders.index') }}" class="nav-link">
                    <i class="nav-icon far fa-credit-card"></i>
                    <p>
                      Orders
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('backend-report.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-chart-area"></i>
                    <p>
                      Report
                    </p>
                  </a>
                </li>
            
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
     
      <!-- Main content -->
      <section class="content">
  
        @yield('content')
  
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
 <!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/dist/js/demo.js') }}"></script>

<script>
	ColorModeInit();
</script>

@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>
