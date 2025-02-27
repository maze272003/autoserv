<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client | Notification</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('dist/css/booking.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/autoservbg.png" alt="autoservbg" height="270" width="300">
        </div>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Dropdown for Profile and Logout -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <!-- Profile Link -->
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">
                            <i class="fas fa-user"></i> {{ __('Profile') }}
                        </a>

                        <!-- Logout Link -->
                        <a href="{{ route('logout') }}" class="dropdown-item"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                        </a>

                        <!-- Hidden Logout Form -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/autoservbg.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">AUTOSERV</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/deafault.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{ route('profile.edit') }}" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- dashboard -->
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    dashboard
                                </p>
                            </a>
                        </li>
                        <!-- BOOK -->
                        <li class="nav-item">
                            <a href="{{ route('book') }}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Books Car</p>
                            </a>
                        </li>
                        <!-- history -->
                        <li class="nav-item">
                            <a href="{{ route('maintenance') }}" class="nav-link">
                                <i class="nav-icon fas fa-calendar-check"></i>
                                <p>Maintenance History</p>
                            </a>
                        </li>
                        <!-- PROFILE -->
                        <li class="nav-item">
                            <a href="{{ route('notification') }}" class="nav-link">
                                <i class="nav-icon fas fa-bell"></i>
                                <p>Notification</p>
                            </a>
                        </li>
                        <!-- payment -->
                        <li class="nav-item">
                            <a href="{{ route('payment') }}" class="nav-link">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>Payment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="customer-support.html" class="nav-link">
                                <i class="nav-icon fas fa-headset"></i>
                                <p>Customer Support</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="feedback-reviews.html" class="nav-link">
                                <i class="nav-icon fas fa-star"></i>
                                <p>Feedback and Reviews</p>
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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">NOTIFICATIONS</h1>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <section>
                <!-- /.content-header -->
                <!-- content -->
                <!-- /.col -->
                <!-- content -->
                <div class="col-md-15">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Inbox</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm">
                                    <input type="text" id="searchInput" class="form-control"
                                        placeholder="Search Mail">
                                    <div class="input-group-append">
                                        <div class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-controls">
                                <!-- Check all button -->
                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i
                                        class="far fa-square"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-reply"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-share"></i>
                                    </button>
                                </div>
                                <!-- /.btn-group -->
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                                <div class="float-right">
                                    1-50/200
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="fas fa-chevron-left"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.float-right -->
                            </div>
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check1">
                                                    <label for="check1"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Mr. Puno</a></td>
                                            <td class="mailbox-subject"><b>John michael</b> - Trying to find a solution
                                                to this problem...
                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">5 mins ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check2">
                                                    <label for="check2"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Mr. jonatas</a></td>
                                            <td class="mailbox-subject"><b>John michael</b> - Trying to find a solution
                                                to this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">28 mins ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check3">
                                                    <label for="check3"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Ms. Grazzie</a></td>
                                            <td class="mailbox-subject"><b>JM</b> - Trying to find a solution to this
                                                problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">11 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check4">
                                                    <label for="check4"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Mr. Puno</a></td>
                                            <td class="mailbox-subject"><b>JM</b> - Trying to find a solution to this
                                                problem...
                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">15 hours ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check5">
                                                    <label for="check5"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Mr. Puno</a></td>
                                            <td class="mailbox-subject"><b>jonatas</b> - Trying to find a solution to
                                                this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">Yesterday</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check6">
                                                    <label for="check6"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Mr. Puno</a></td>
                                            <td class="mailbox-subject"><b>jonatas</b> - Trying to find a solution to
                                                this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check7">
                                                    <label for="check7"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Mr. Puno</a></td>
                                            <td class="mailbox-subject"><b>jonatas</b> - Trying to find a solution to
                                                this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check8">
                                                    <label for="check8"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Mr. Puno</a></td>
                                            <td class="mailbox-subject"><b>jonatas</b> - Trying to find a solution to
                                                this problem...
                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check9">
                                                    <label for="check9"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Mr. Puno</a></td>
                                            <td class="mailbox-subject"><b>jonatas</b> - Trying to find a solution to
                                                this problem...
                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check10">
                                                    <label for="check10"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Mr. Puno</a></td>
                                            <td class="mailbox-subject"><b>jonatas</b> - Trying to find a solution to
                                                this problem...
                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">2 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check11">
                                                    <label for="check11"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Mr. Puno</a></td>
                                            <td class="mailbox-subject"><b>jonatas</b> - Trying to find a solution to
                                                this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">4 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check12">
                                                    <label for="check12"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Mr. Puno</a></td>
                                            <td class="mailbox-subject"><b>jonatas</b> - Trying to find a solution to
                                                this problem...
                                            </td>
                                            <td class="mailbox-attachment"></td>
                                            <td class="mailbox-date">12 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check13">
                                                    <label for="check13"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Mr. Puno</a></td>
                                            <td class="mailbox-subject"><b>jonatas</b> - Trying to find a solution to
                                                this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">12 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check14">
                                                    <label for="check14"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Mr. Puno</a></td>
                                            <td class="mailbox-subject"><b>jonatas</b> - Trying to find a solution to
                                                this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">14 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check15">
                                                    <label for="check15"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Mr. Puno</a></td>
                                            <td class="mailbox-subject"><b>jonatas</b> - Trying to find a solution to
                                                this problem...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">15 days ago</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>
                    </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022-2024 <a href="https://adminlte.io">AUTOSERV</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> v1
            </div>
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll('.mailbox-messages tr');

            rows.forEach(row => {
                const text = row.innerText.toLowerCase();
                if (text.includes(filter)) {
                    row.style.display = ""; // Show row
                } else {
                    row.style.display = "none"; // Hide row
                }
            });
        });
    </script>
</body>

</html>
