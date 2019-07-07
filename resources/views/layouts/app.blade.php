
<!DOCTYPE html>
<html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HM POS | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    {{--<link rel="stylesheet" href="{{asset('/')}}/plugins/font-awesome/css/font-awesome.min.css">--}}
    {{--<!-- Ionicons -->--}}
    {{--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">--}}
    {{--<!-- Theme style -->--}}
    {{--<link rel="stylesheet" href="{{asset('/')}}/dist/css/adminlte.min.css">--}}
    {{--<!-- iCheck -->--}}
    {{--<link rel="stylesheet" href="{{asset('/')}}/plugins/iCheck/flat/blue.css">--}}
    {{--<!-- Morris chart -->--}}
    {{--<link rel="stylesheet" href="{{asset('/')}}/plugins/morris/morris.css">--}}
    {{--<!-- jvectormap -->--}}
    {{--<link rel="stylesheet" href="{{asset('/')}}/plugins/jvectormap/jquery-jvectormap-1.2.2.css">--}}
    {{--<!-- Date Picker -->--}}
    {{--<link rel="stylesheet" href="{{asset('/')}}/plugins/datepicker/datepicker3.css">--}}
    {{--<!-- Daterange picker -->--}}
    {{--<link rel="stylesheet" href="{{asset('/')}}/plugins/daterangepicker/daterangepicker-bs3.css">--}}
    {{--<!-- bootstrap wysihtml5 - text editor -->--}}
    {{--<link rel="stylesheet" href="{{asset('/')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">--}}
    {{--<!-- Google Font: Source Sans Pro -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">--}}

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            {{--<img src="{{asset('/')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"--}}
                 {{--style="opacity: .8">--}}
            <span class="brand-text font-weight-light">HM Point Of Sale.</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('/')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link" href="#" role="button">
                                    {{ Auth::user()->name }}
                                </a>

                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link active">
                            <i class="fa fa-circle-o nav-icon"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <div class="nav-link">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                    <li class="nav-item">
                        <router-link to="/about" class="nav-link">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                Widgets
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </router-link>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-pie-chart"></i>
                            <p>
                                Stock Section
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <router-link to="/add-stock" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add New Stock</p>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/all-stock" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Manage All Stocks</p>
                                </router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-tree"></i>
                            <p>
                                Sales Section
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <router-link to="/add-sale" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add New Sale</p>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/all-sale" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Manage All Sales</p>
                                </router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-edit"></i>
                            <p>
                                Purchase Section
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <router-link to="/add-purchase" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add New Purchase</p>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/all-purchase" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Manage All Purchase</p>
                                </router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-table"></i>
                            <p>
                                Category Section
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <router-link to="/add-category" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add New Category</p>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/all-category" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p> Manage All Category</p>
                                </router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-plus-square-o"></i>
                            <p>
                                Brands Section
                                <i class="fa fa-angle-left right"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <router-link to="/add-brand" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Add New Brand</p>
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/all-brand" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Manage All Brands</p>
                                </router-link>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div id="app">
            <main class="py-4">
                @yield('content')

                <router-view></router-view>
            </main>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2019 <a href="#">HM Point Of Sale.</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Developed BY: <a href="#">Jibonto Jhinuk</a></b>
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="{{ asset('js/app.js') }}" defer></script>
{{--<!-- jQuery -->--}}
{{--<script src="{{asset('/')}}/plugins/jquery/jquery.min.js"></script>--}}
{{--<!-- jQuery UI 1.11.4 -->--}}
{{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>--}}
{{--<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->--}}
{{--<script>--}}
    {{--$.widget.bridge('uibutton', $.ui.button)--}}
{{--</script>--}}
{{--<!-- Bootstrap 4 -->--}}
{{--<script src="{{asset('/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--<!-- Morris.js charts -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>--}}
{{--<script src="{{asset('/')}}/plugins/morris/morris.min.js"></script>--}}
{{--<!-- Sparkline -->--}}
{{--<script src="{{asset('/')}}/plugins/sparkline/jquery.sparkline.min.js"></script>--}}
{{--<!-- jvectormap -->--}}
{{--<script src="{{asset('/')}}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>--}}
{{--<script src="{{asset('/')}}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>--}}
{{--<!-- jQuery Knob Chart -->--}}
{{--<script src="{{asset('/')}}/plugins/knob/jquery.knob.js"></script>--}}
{{--<!-- daterangepicker -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>--}}
{{--<script src="{{asset('/')}}/plugins/daterangepicker/daterangepicker.js"></script>--}}
{{--<!-- datepicker -->--}}
{{--<script src="{{asset('/')}}/plugins/datepicker/bootstrap-datepicker.js"></script>--}}
{{--<!-- Bootstrap WYSIHTML5 -->--}}
{{--<script src="{{asset('/')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>--}}
{{--<!-- Slimscroll -->--}}
{{--<script src="{{asset('/')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>--}}
{{--<!-- FastClick -->--}}
{{--<script src="{{asset('/')}}/plugins/fastclick/fastclick.js"></script>--}}
{{--<!-- AdminLTE App -->--}}
{{--<script src="{{asset('/')}}/dist/js/adminlte.js"></script>--}}
{{--<!-- AdminLTE dashboard demo (This is only for demo purposes) -->--}}
{{--<script src="{{asset('/')}}/dist/js/pages/dashboard.js"></script>--}}
{{--<!-- AdminLTE for demo purposes -->--}}
{{--<script src="{{asset('/')}}/dist/js/demo.js"></script>--}}
</body>
</html>