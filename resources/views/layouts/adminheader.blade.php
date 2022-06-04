<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CelestialUI Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{asset('bp/vendors/typicons.font/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('bp/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject --> 
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('bp/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    {{-- <link rel="shortcut icon" href="images/favicon.png" /> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="row" id="proBanner">
      <div class="col-12">
        
      </div>
    </div>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="/admin"><img src="{{asset('bp/images/logo.svg')}}" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="/admin"><img src="{{asset('bp/images/logo-mini.svg')}}" alt="logo"/></a>
          {{-- <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button> --}}
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <ul class="navbar-nav navbar-nav-right">            
            
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
                <i class="typcn typcn-user-outline mr-0"></i>
                <span class="nav-profile-name">Evan Morales</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                <i class="typcn typcn-cog text-primary"></i>
                Settings
                </a>
                <a class="dropdown-item">
                <i class="typcn typcn-power text-primary"></i>
                Logout
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class=" page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">  
          <li class="p-2 ml-3 mt-2">
            <a class=""  href="{{ route('admin.users') }}">User</a>
          </li>
          <li class="p-2">
            <a class="nav-link"  href="{{ route('admin.product.view') }}">Additional Products</a>
          </li>
          <li class="p-2">
            <a class="nav-link"  href="{{ route('admin.promocode') }}">Promocode</a>
          </li>
        </ul>
        
      </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              
              <!-- <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end">
                  
                  
                </div>
              </div> -->
            </div>
            <div class="row  mt-3">
              @yield('admincontent')
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          {{-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com</a> 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard </a>templates from Bootstrapdash.com</span>
            </div>
          </footer> --}}
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="{{asset('bp/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('bp/js/off-canvas.js')}}"></script>
    <script src="{{asset('bp/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('bp/js/template.js')}}"></script>
    <script src="{{asset('bp/js/settings.js')}}"></script>
    <script src="{{asset('bp/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{asset('bp/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('bp/vendors/chart.js/Chart.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{asset('bp/js/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
  </body>
</html>