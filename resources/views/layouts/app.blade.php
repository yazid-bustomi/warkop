<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('tittle')</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="/assets/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="/assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="/assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
    <link href="/assets/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link id="main-css-href" rel="stylesheet" href="/assets/css/style.css" />

    <!-- FAVICON -->
    <link href="/assets/images/favicon.png" rel="shortcut icon" />

    <script src="/assets/plugins/nprogress/nprogress.js"></script>
</head>


<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>


    <div class="wrapper">

        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href={{ url('/dashboard') }}>
                        <img src="/assets/images/logo.png" alt="Mono">
                        <span class="brand-name">GIRAS27</span>
                    </a>
                </div>

                <!-- begin sidebar scrollbar -->
                <div class="sidebar-left" data-simplebar style="height: 100%;">
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">

                        <li class="has-sub">
                            <a class="sidenav-item-link" href={{ route('order.index') }}>
                                <i class="mdi mdi-dlna"></i>
                                <span class="nav-text">Order</span>
                            </a>
                        </li>

                        <li class="has-sub">
                            <a class="sidenav-item-link" href={{ route('admin.inv.index') }}>
                                <i class="mdi-open-source-initiative"></i>
                                <span class="nav-text">Inventory</span>
                            </a>
                        </li>

                        <li class="has-sub">
                            <a class="sidenav-item-link" href={{ route('admin.product.index') }}>
                                <i class="mdi mdi-package-variant-closed"></i>
                                <span class="nav-text">Product</span>
                            </a>
                        </li>

                    </ul>
                </div>

        </aside>



        <div class="page-wrapper">

            <!-- Header -->
            <header class="main-header" id="header">
                <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>

                    <span class="page-title"></span>
                      <h3> @yield('header')</h3>
                    <div class="navbar-right ">
                        
                        <ul class="nav navbar-nav">
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="/assets/images/user/user-xs-01.jpg" class="user-image rounded-circle"
                                        alt="User Image" />
                                    <span class="d-none d-lg-inline-block">John Doe</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a class="dropdown-link-item" href="user-profile.html">
                                            <i class="mdi mdi-account-alert"></i>

                                            <span class="nav-text">My Profile</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-link-item" href="#">
                                            <i class="mdi mdi-settings"></i>
                                            <span class="nav-text">Account Setting</span>
                                        </a>
                                    </li>

                                    <li class="dropdown-footer">
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <a class="dropdown-link-item" href="{{ route('logout') }}"> 
                                                <i class="mdi mdi-logout"></i>
                                            <button type="submit">Logout</button>
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
            <div class="content-wrapper">
                <div class="content">
                    <div>
                        @yield('konten')
                    </div>
                </div>
            </div>

            <!-- Card Offcanvas -->


            <script src="/assets/plugins/jquery/jquery.min.js"></script>
            <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="/assets/plugins/simplebar/simplebar.min.js"></script>
            <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
            <script src="/assets/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
            <script src="/assets/plugins/apexcharts/apexcharts.js"></script>
            <script src="/assets/js/mono.js"></script>
            <script src="/assets/js/chart.js"></script>
            <script src="/assets/js/map.js"></script>
            <script src="/assets/js/custom.js"></script>
</body>

</html>
