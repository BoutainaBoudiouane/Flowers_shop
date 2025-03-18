<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Garden Glow</title>
    <link rel="icon" type="image/png" href="images/logo_onglet.png">

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header">
                    <a href="index.html" class="logo">
                        <img
                            src="images/logo_app.png"
                            alt="navbar brand"
                            class="navbar-brand"
                            height="45"
                            width="180"
                            style="margin-top: 20px;" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-item ">
                            <a
                                href="{{ route('dashboard') }}"
                                class="collapsed"
                                aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a
                                href="{{ route('flower') }}"
                                class="collapsed"
                                aria-expanded="false">
                                <i class="fas fa-clipboard-list"></i>
                                <p>Flowers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="{{ route('order') }}"
                                class="collapsed"
                                aria-expanded="false">
                                <i class="fas fa-cube"></i>
                                <p>Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="{{ route('employee') }}"
                                class="collapsed"
                                aria-expanded="false">
                                <i class="fas fa-users"></i>
                                <p>Employees</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="{{ route('testimonial') }}"
                                class="collapsed"
                                aria-expanded="false">
                                <i class="fas fa-comment"></i>
                                <p>Testimonials</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <!-- Header -->
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img
                                src="assets/img/kaiadmin/logo_light.svg"
                                alt="navbar brand"
                                class="navbar-brand"
                                height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav
                    class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        <nav
                            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                        </nav>

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">

                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                                    <div class="avatar-sm">
                                        <!-- Display the user's profile image (if available) -->
                                        <img src="{{ Auth::user()->profile_photo_url ?? 'assets/img/profile.jpg' }}" alt="Profile Image" class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        <span class="op-7">Hi,</span>
                                        <span class="fw-bold">{{ Auth::user()->name }}</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <!-- Display the user's profile image (if available) -->
                                                    <img src="{{ Auth::user()->profile_photo_url ?? 'assets/img/profile.jpg' }}" alt="Profile Image" class="avatar-img rounded" />
                                                </div>
                                                <div class="u-text">
                                                    <h4>{{ Auth::user()->name }}</h4>
                                                    <p class="text-muted">{{ Auth::user()->email }}</p>
                                                    <a href="{{ route('profile.edit') }}" class="btn btn-xs btn-secondary btn-sm"> Profile</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <!-- Logout Form -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item">Logout</button>
                                            </form>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
            <!-- End Header -->

            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <button class="btn btn-primary btn-lg shadow-lg px-4 py-2 rounded-pill fw-bold text-uppercase animateanimated animatepulse"
                                data-bs-toggle="modal"
                                data-bs-target="#addOrderModal">
                                Add Order
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Orders</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table
                                            id="multi-filter-select"
                                            class="display table  table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ORDER id</th>
                                                    <th>Flower name</th>
                                                    <th>quantity</th>
                                                    <th>total price</th>
                                                    <th>status</th>
                                                    <th>Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>ORDER id</th>
                                                    <th>Flower name</th>
                                                    <th>quantity</th>
                                                    <th>total price</th>
                                                    <th>status</th>
                                                    <th>Type</th>
                                                </tr>
                                            </tfoot>

                                            <tbody>
                                                @foreach ($orders as $order)
                                                <tr>
                                                    <td>{{ $order->id }}</td>
                                                    <td>{{ $order->flower->name }}</td>
                                                    <td>{{ $order->quantity }}</td>
                                                    <td>{{ $order->total_price }} DH</td>
                                                    <td>{{ $order->status }}</td>
                                                    <td>{{ $order->type }}</td>

                                                    <td>
                                                        <div class="form-button-action">
                                                            <button
                                                                type="button"
                                                                title=""
                                                                class="btn btn-link btn-primary btn-lg"
                                                                data-original-title="Edit Task"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#editOrderModal{{ $order->id }}">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button
                                                                type="button"

                                                                title=""
                                                                class="btn btn-link btn-danger"
                                                                data-original-title="Remove"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteOrderModal{{ $order->id }}">
                                                                <i class=" fa fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </td>

                                                </tr>
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--  add model-->


        @include('dashboard.OrderPage.addOrder', ['flowers' => $flowers])

        @foreach($orders as $order)
        @include('dashboard.OrderPage.updateOrder', ['order' => $order, 'flowers' => $flowers])
        @include('dashboard.OrderPage.deleteOrder', ['order' => $order])

        @endforeach


        <!--   Core JS Files   -->
        <script src="assets/js/core/jquery-3.7.1.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>

        <!-- jQuery Scrollbar -->
        <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

        <!-- Chart JS -->
        <script src="assets/js/plugin/chart.js/chart.min.js"></script>

        <!-- jQuery Sparkline -->
        <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

        <!-- Chart Circle -->
        <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

        <!-- Datatables -->
        <script src="assets/js/plugin/datatables/datatables.min.js"></script>


        <!-- jQuery Vector Maps -->
        <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
        <script src="assets/js/plugin/jsvectormap/world.js"></script>

        <!-- Sweet Alert -->
        <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

        <!-- Kaiadmin JS -->
        <script src="assets/js/kaiadmin.min.js"></script>
        <script>
            $(document).ready(function() {

                $("#multi-filter-select").DataTable({
                    pageLength: 5,
                    initComplete: function() {
                        this.api()
                            .columns()
                            .every(function() {
                                var column = this;
                                var select = $(
                                        '<select class="form-select"><option value=""></option></select>'
                                    )
                                    .appendTo($(column.footer()).empty())
                                    .on("change", function() {
                                        var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                        column
                                            .search(val ? "^" + val + "$" : "", true, false)
                                            .draw();
                                    });

                                column
                                    .data()
                                    .unique()
                                    .sort()
                                    .each(function(d, j) {
                                        select.append(
                                            '<option value="' + d + '">' + d + "</option>"
                                        );
                                    });
                            });
                    },
                });
            });
        </script>
</body>

</html>