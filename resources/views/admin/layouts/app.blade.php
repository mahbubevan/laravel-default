<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('assets/templates/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets/templates/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets/templates/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('assets/templates/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('assets/templates/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('assets/templates/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('assets/templates/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('assets/templates/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        @if (auth()->guard('admin')->user())
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
           {{-- site title --}}
                @include('admin.layouts.partials.site_title')
            {{-- end site title --}}
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
                @include('admin.layouts.partials.profile_quick')
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
                @include('admin.layouts.partials.sidebar')
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
                @include('admin.layouts.partials.menu_footer')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
            @include('admin.layouts.partials.navbar')
        <!-- /top navigation -->
        @endif
        <!-- page content -->
                @yield('content')
        <!-- /page content -->

        @if (auth()->guard('admin')->user())
        <!-- footer content -->
            @include('admin.layouts.partials.footer')
        <!-- /footer content -->
        @endif
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('assets/templates/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/templates/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('assets/templates/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('assets/templates/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('assets/templates/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('assets/templates/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('assets/templates/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('assets/templates/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('assets/templates/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('assets/templates/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/templates/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('assets/templates/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('assets/templates/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('assets/templates/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('assets/templates/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('assets/templates/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('assets/templates/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('assets/templates/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('assets/templates/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('assets/tempaltes/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('assets/templates/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('assets/templates/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('assets/templates/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('assets/templates/build/js/custom.min.js')}}"></script>

  </body>
</html>
