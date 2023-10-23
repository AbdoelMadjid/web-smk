<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | {{ $title }}</title>

    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">

    {{-- favicon --}}
    <link rel="shortcut icon" href="{{ asset('storage/' . $identity->brand) }}" type="image/x-icon">

    <!-- DataTables -->
    <link rel="stylesheet"
        href="https://adminlte.io/themes/v3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="https://adminlte.io/themes/v3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="https://adminlte.io/themes/v3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    {{-- SweetAlert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
        trix-toolbar [data-trix-button-grup="file-tools"] {
            display: none;
        }
    </style>

</head>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

        @include('dashboard.partials.navbar')
        @include('dashboard.partials.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ $title }}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                            <ol class="breadcrumb float-sm-right">
                                @if ($title != 'Dashboard')
                                    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                @elseif(request::is('dashboard/master-data*'))
                                    <li class="breadcrumb-item">Master Data< /li>
                                @endif
                                <li class="breadcrumb-item active">{{ $title }}</li>

                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    @yield('container')
                    <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Created by <span class="text-primary">{{ $identity->name }}</span> | all rights reserved.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @if (session()->has('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '{{ session('success') }}'
            })
        </script>
        <script>
            function konfirmasi() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            }
        </script>
    @endif

    <!-- jQuery -->
    <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://adminlte.io/themes/v3/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables -->
    <script src="https://adminlte.io/themes/v3/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jszip/jszip.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("#datatab").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                "buttons": ["excel", "pdf", "colvis"]
            }).buttons().container().appendTo('#datatab_wrapper .col-md-6:eq(0)');
        });

        // Trix.config.blockAttributes.default.tagName = "p"
        // Trix.config.blockAttributes.default.breakOnReturn = true
    </script>

    <!-- ChartJS -->
    <script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="https://adminlte.io/themes/v3/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="https://adminlte.io/themes/v3/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="https://adminlte.io/themes/v3/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="https://adminlte.io/themes/v3/plugins/moment/moment.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://adminlte.io/themes/v3/dist/js/adminlte.js?v=3.2.0"></script>

    <script>
        function keluar() {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success m-3',
                    cancelButton: 'btn btn-danger m-3'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Anda yakin ingin Keluar?',
                text: "Anda bisa membatalkannya kapanpun!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Keluar!',
                cancelButtonText: 'Tidak, Batalkan!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = "{{ route('logout') }}";
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    document.location.href = "/dashboard";
                }
            })
        }
    </script>
</body>

</html>
