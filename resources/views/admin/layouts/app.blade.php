<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta charset=utf-8>
  <meta name=viewport content="width=device-width,initial-scale=1">
  <meta name=author content="Sathishka Priyad">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Parawewa System</title>
  
  <link rel="shortcut icon" href="{{asset('logo/ln.png')}}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed layout-footer-fixed">
<div class="wrapper">
    @auth
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">@yield('nav_title')</a>
      </li>
    </ul>

    {{-- <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          @if ($notificationsCount!=NULL)
            <span class="badge badge-warning navbar-badge">{{$notificationsCount}}</span>
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">You have {{$notificationsCount}} Notifications</span>
          <div class="dropdown-divider"></div>
            @foreach ($notifications as $item)
              <a href="#" class="dropdown-item">
                 {{$item->content}}
              </a>
            <div class="dropdown-divider"></div>
            @endforeach
          

          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> --}}
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          {{-- <img src="{{asset(Auth::user()->image)}}" class="user-image img-circle elevation-2" alt="User Image"> --}}
          <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            {{-- <img src="{{asset(Auth::user()->image)}}" class="img-circle elevation-2" alt="User Image"> --}}

            <p>
                {{ Auth::user()->name }}
            </p>
          </li>
          {{-- <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-4 text-center">
                <a href="#">Friends</a>
              </div>
            </div>
            <!-- /.row -->
          </li> --}}
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="{{ url('profile') }}" class="btn btn-default btn-flat">Profile</a>
            <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-right"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Sign out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      {{-- <img src="{{asset('logo/ln.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">Parawewa System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
               <li class="nav-item">
                <a href="/" class="nav-link {{ Request::path()=='home' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Home
                  </p>
                </a>
              </li>
              @if (Request::is('admin/invoice/create') || Request::is('admin/invoice') )
                  <li class="nav-item has-treeview  menu-open">
                    <a href="#" class="nav-link active">
              @else
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
              @endif
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Invoices
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('admin/invoice/create')}}" class="nav-link {{ Request::is('admin/invoice/create') ? 'active' : '' }}">
                      <i class="far fa-file-alt nav-icon text-info"></i>
                      <p>Invoice Create</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/invoice')}}" class="nav-link {{ Request::is('admin/invoice') ? 'active' : '' }}">
                      <i class="far fa-file-alt nav-icon text-info"></i>
                      <p>All Invoices</p>
                    </a>
                  </li> 
                </ul>
              </li>

              @if (Request::is('admin/visiting/create') || Request::is('admin/visiting') )
                  <li class="nav-item has-treeview  menu-open">
                    <a href="#" class="nav-link active">
              @else
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
              @endif
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Client
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('admin/visiting/create')}}" class="nav-link {{ Request::is('admin/visiting/create') ? 'active' : '' }}">
                      <i class="far fa-file-alt nav-icon text-info"></i>
                      <p>Client Registration</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/visiting')}}" class="nav-link {{ Request::is('admin/visiting') ? 'active' : '' }}">
                      <i class="far fa-file-alt nav-icon text-info"></i>
                      <p>All Clients</p>
                    </a>
                  </li> 
                </ul>
              </li>
              @if (Request::is('admin/user/create') || Request::is('admin/user') )
                  <li class="nav-item has-treeview  menu-open">
                    <a href="#" class="nav-link active">
              @else
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
              @endif
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Users
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('admin/user/create')}}" class="nav-link {{ Request::is('admin/user/create') ? 'active' : '' }}">
                      <i class="far fa-file-alt nav-icon text-info"></i>
                      <p>User Create</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/user')}}" class="nav-link {{ Request::is('admin/user') ? 'active' : '' }}">
                      <i class="far fa-file-alt nav-icon text-info"></i>
                      <p>All Users</p>
                    </a>
                  </li> 
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/profile')}}" class="nav-link {{ Request::is('admin/profile') ? 'active' : '' }}">
                  <i class="far fa-id-badge nav-icon text-info"></i>
                  <p>Profile</p>
                </a>
              </li>
              {{-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Excel Downloads
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{asset('excel\createSalesVouchers.xlsx')}}" class="nav-link" download="createSalesVouchers.xlsx">
                      <i class="far fa-circle nav-icon text-info"></i>
                      <p>Create Sales Voucher</p>
                    </a>
                  </li>a
                </ul>
              </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  @endauth
    @yield('content')
    <!-- Main content -->
    
  <!-- /.content-wrapper -->

 @auth
     
 
  <!-- Main Footer -->

 <footer class="  main-footer">
    <strong>Copyright &copy; {{ date('Y') }}-{{ date('Y')+1 }} &nbsp;<a href="#">Sathishka Priyad</a>.</strong>
    All rights reserved.
  </footer> 

  @endauth
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script src="{{ asset('dist/js/pages/dashboard3.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
@yield('extra_js')
  @if(session()->has('verified') && session()->get('verified') == true)
    <script>
      toastr.success('Email verified successfully!');
    </script>
  @endif
</body>
</html>