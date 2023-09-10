<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Admin Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/flatpickr/flatpickr.min.css') }}">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo2/style.css') }}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    Abhiram
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="dashboard.html" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>


        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">

                    <ul class="navbar-nav">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30"
                                    alt="profile">
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                    <div class="mb-3">
                                        <img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80"
                                            alt="">
                                    </div>
                                    <div class="text-center">
                                        <p class="tx-16 fw-bolder">Amiah Burton</p>
                                        <p class="tx-12 text-muted">amiahburton@gmail.com</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled p-1">
                                    <li class="dropdown-item py-2">
                                        <a href="pages/general/profile.html" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="edit"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="repeat"></i>
                                            <span>Switch User</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item py-2">
                                        <a href="javascript:;" class="text-body ms-0">
                                            <i class="me-2 icon-md" data-feather="log-out"></i>
                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->

            <div class="page-content">

                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                        <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12 col-xl-12 stretch-card">
                        <div class="row flex-grow-1">
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">New Customers</h6>
                                            <div class="dropdown mb-2">
                                                <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-lg text-muted pb-3px"
                                                        data-feather="more-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="eye"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">View</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="edit-2"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Edit</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="trash"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Delete</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="printer"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Print</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="download"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Download</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">3,897</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-success">
                                                        <span>+3.3%</span>
                                                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-12 col-xl-7">
                                                <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">New Orders</h6>
                                            <div class="dropdown mb-2">
                                                <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-lg text-muted pb-3px"
                                                        data-feather="more-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="eye"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">View</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="edit-2"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Edit</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="trash"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Delete</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="printer"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Print</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="download"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Download</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">35,084</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-danger">
                                                        <span>-2.8%</span>
                                                        <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-12 col-xl-7">
                                                <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Growth</h6>
                                            <div class="dropdown mb-2">
                                                <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="icon-lg text-muted pb-3px"
                                                        data-feather="more-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="eye"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">View</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="edit-2"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Edit</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="trash"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Delete</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="printer"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Print</span></a>
                                                    <a class="dropdown-item d-flex align-items-center"
                                                        href="javascript:;"><i data-feather="download"
                                                            class="icon-sm me-2"></i> <span
                                                            class="">Download</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 col-xl-5">
                                                <h3 class="mb-2">89.87%</h3>
                                                <div class="d-flex align-items-baseline">
                                                    <p class="text-success">
                                                        <span>+2.8%</span>
                                                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-12 col-xl-7">
                                                <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->



            </div>

            <!-- partial:partials/_footer.html -->
            <footer
                class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
                <p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com"
                        target="_blank">NobleUI</a>.</p>
                <p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm"
                        data-feather="heart"></i></p>
            </footer>
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('admin/assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('admin/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('admin/assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/template.js') }}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="{{ asset('admin/assets/js/dashboard-dark.js') }}"></script>
    <!-- End custom js for this page -->

</body>

</html>
