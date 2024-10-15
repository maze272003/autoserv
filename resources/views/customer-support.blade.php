<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Client | Customer Support</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <style>
        body {
            background: #eee;
        }

        .container {
            margin: 30px auto;
        }

        .card {
            background: #fff;
            border-radius: 0px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .faq-item {
            margin-bottom: 20px;
        }

        .faq-item h5 {
            cursor: pointer;
        }

        .faq-answer {
            display: none;
            padding-left: 20px;
            max-height: 0;
            transition: max-height 0.3s ease-out;
        }

        .faq-answer.show {
            display: block;
            max-height: 100px;
            /* Adjust this value based on your content */
        }
    </style>
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/autoservbg.png" alt="autoservbg" height="270" width="300">
        </div> --}}
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="{{ route('profile.edit') }}" class="dropdown-item"><i class="fas fa-user"></i>
                            {{ __('Profile') }}</a>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="showLogoutAlert(event)">
                            <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index3.html" class="brand-link">
                <img src="dist/img/autoservbg.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">AUTOSERV</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="dist/img/deafault.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="{{ route('profile.edit') }}" class="d-block">{{ Auth::user()->name }}</a>
                        </div>
                    </div>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
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
                            <a href="{{ route('customer.support') }}" class="nav-link"
                                aria-label="Contact Customer Support">
                                <i class="nav-icon fas fa-headset"></i>
                                <p>Customer Support</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('ratings') }}" class="nav-link">
                                <i class="nav-icon fas fa-star"></i>
                                <p>Feedback and Reviews</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Customer Support</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Contact Us</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('customer.support.store') }}" method="POST"
                                onsubmit="showSuccessAlert(event)">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ Auth::user()->email }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Frequently Asked Questions</h3>
                        </div>
                        <div class="card-body">
                            <div class="faq-item">
                                <h5 onclick="toggleFAQ(this)">What is the return policy?</h5>
                                <div class="faq-answer">
                                    <p>You can return any item within 30 days of receipt for a full refund.</p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h5 onclick="toggleFAQ(this)">How can I track my order?</h5>
                                <div class="faq-answer">
                                    <p>You will receive a tracking number via email once your order has been shipped.
                                    </p>
                                </div>
                            </div>
                            <div class="faq-item">
                                <h5 onclick="toggleFAQ(this)">What payment methods do you accept?</h5>
                                <div class="faq-answer">
                                    <p>We accept credit cards, PayPal, and bank transfers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022-2024 <a href="https://adminlte.io">AUTOSERV</a>.</strong>
            All rights reserved.
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script>
        function showSuccessAlert(event) {
            event.preventDefault(); // Prevent the default form submission
            const form = event.target; // Get the form element

            Swal.fire({
                title: 'Success!',
                text: 'Your message has been sent successfully.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit the form after the user confirms
                }
            });
        }

        function showLogoutAlert(event) {
            event.preventDefault(); // Prevent the default logout action
            const form = document.getElementById('logout-form'); // Get the logout form

            Swal.fire({
                title: 'Are you sure?',
                text: "You want to logout?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, logout!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit the logout form if confirmed
                }
            });
        }

        function toggleFAQ(element) {
            const answer = element.nextElementSibling; // Get the answer element
            answer.classList.toggle('show'); // Toggle the 'show' class to display the answer
        }
    </script>
</body>

</html>
