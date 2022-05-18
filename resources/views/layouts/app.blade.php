<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>POS System | Versi 1.0.0</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ url('asset/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ url('asset/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="{{ url('asset/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
        <!-- Toastr -->
        <link rel="stylesheet" href="{{ url('asset/adminlte/plugins/toastr/toastr.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ url('asset/adminlte/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            @include('layouts.navbar');
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('layouts.sidebar');

            <!-- Content Wrapper. Contains page content -->
            @yield('content');
            <!-- /.content-wrapper -->

            @include('layouts.footer');

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="{{ url('asset/adminlte/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ url('asset/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- DataTables -->
        <script src="{{ url('asset/adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ url('asset/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
        <!-- SweetAlert2 -->
        <script src="{{ url('asset/adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <!-- Toastr -->
        <script src="{{ url('asset/adminlte/plugins/toastr/toastr.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ url('asset/adminlte/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ url('asset/adminlte/js/demo.js') }}"></script>

        @yield('js')


    </body>
</html>
