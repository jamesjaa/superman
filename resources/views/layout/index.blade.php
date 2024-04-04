<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!--dataTable-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
            $("#myTable2").DataTable();
        });
    </script>

    <style>
        @font-face {
            font-family: 'sukhumvitset-text-webfont';
            font-style: normal;
            font-weight: normal;
            src: url("{{ asset('fonts/sukhumvitset-text-webfont.ttf') }}") format('truetype');
        }

        body {
            font-family: 'sukhumvitset-text-webfont';
            /* font-size: 14px; */
        }
    </style>

    <title>DATA CENTER</title>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <span class="d-none d-lg-block">DATA CENTER</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
                        <i class="bi bi-person-circle" style="font-size: 2rem"></i>
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{Session::get('login_id')}}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Username : </h6>
                            <span>Role : </span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/logout">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/api/dashboard">
                    <i class="bi bi-grid" style="font-size: 2em;"></i>
                    <span>ภาพรวม</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="/api/users">
                    <i class="bi bi-people-fill" style="font-size: 2em;"></i>
                    <span>รายชื่อทั้งหมด</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/api/password">
                    <i class="bi bi-person-fill-gear" style="font-size: 2em;"></i>
                    <span>ตั้งค่ารหัสผ่าน</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/api/websetting">
                    <i class="bi bi-card-list" style="font-size: 2em;"></i>
                    <span>ตั้งค่าเว็บไซต์</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/api/sms">
                    <i class="bi bi-envelope" style="font-size: 2em;"></i>
                    <span>ตั้งค่า SMS OTP</span>
                </a>
            </li><!-- End Register Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        @include('layout.alert') @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

</html>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>