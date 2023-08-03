<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Dashboard</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="/assets/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="/assets/plugins/simplebar/simplebar.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="/assets/plugins/nprogress/nprogress.css" rel="stylesheet" />


    <link href="/assets/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />




    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="/assets/css/style.css" />




    <!-- FAVICON -->
    <link href="/assets/images/favicon.png" rel="shortcut icon" />

    <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="/assets/plugins/nprogress/nprogress.js"></script>
</head>


<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>



    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">


        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="/index.html">
                        <img src="/assets/images/logo.png" alt="Mono">
                        <span class="brand-name">MONO</span>
                    </a>
                </div>
                <!-- begin sidebar scrollbar -->
                <div class="sidebar-left" data-simplebar style="height: 100%;">
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">



                        <li>
                            <a class="sidenav-item-link" href={{ url('dashboard') }}>
                                <i class="mdi mdi-briefcase-account-outline"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>





                        <li>
                            <a class="sidenav-item-link" href={{ url('order') }}>
                                <i class="mdi mdi-chart-line"></i>
                                <span class="nav-text">Menu</span>
                            </a>
                        </li>

                        <li>
                          <a class="sidenav-item-link" href={{ route('admin.product.index') }}>
                              <i class="mdi mdi-chart-line"></i>
                              <span class="nav-text">Product</span>
                          </a>
                      </li>

                      <li class="has-sub active expand">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                            data-target="#users" aria-expanded="false" aria-controls="users">
                            <i class="mdi mdi-image-filter-none"></i>
                            <span class="nav-text">Inventaris</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse show" id="users" data-parent="#sidebar-menu">
                            <div class="sub-menu">
                                <li>
                                    <a class="sidenav-item-link" href={{ route('admin.inv.index') }}>
                                        <span class="nav-text">Inventaris</span>

                                    </a>
                                </li>
                                <li>
                                    <a class="sidenav-item-link" href="{{ route('admin.inv.create') }}">
                                        <span class="nav-text">Tambah Inventaris</span>

                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>






                        <li class="section-title">
                            Pages
                        </li>





                        <li class="has-sub active expand">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#users" aria-expanded="false" aria-controls="users">
                                <i class="mdi mdi-image-filter-none"></i>
                                <span class="nav-text">Siswa</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse show" id="users" data-parent="#sidebar-menu">
                                <div class="sub-menu">



                                    <li class="active">
                                        <a class="sidenav-item-link" href={{ url('/admin/product') }}>
                                            <span class="nav-text">Product</span>

                                        </a>
                                    </li>






                                    <li>
                                        <a class="sidenav-item-link" href={{ url('tabel-siswa') }}>
                                            <span class="nav-text">Tabel Data Siswa</span>

                                        </a>
                                    </li>






                                    <li>
                                        <a class="sidenav-item-link" href="#">
                                            <span class="nav-text">Ubah Data Siswa</span>

                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-footer">
                    <div class="sidebar-footer-content">
                        <ul class="d-flex">
                            <li>
                                <a href="#" data-toggle="tooltip" title="Profile settings"><i
                                        class="mdi mdi-settings"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" title="No chat messages"><i
                                        class="mdi mdi-chat-processing"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>



        <!-- ====================================
      ——— PAGE WRAPPER
      
      ===================================== -->
        <div class="page-wrapper">

            <!-- Header -->
            <header class="main-header" id="header">
                <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>

                    <span class="page-title"></span>

                    <div class="navbar-right ">

                        <!-- search form -->
                        <div class="search-form">
                            <form action="index.html" method="get">
                                <div class="input-group input-group-sm" id="input-group-search">
                                    <input type="text" autocomplete="off" name="query" id="search-input"
                                        class="form-control" placeholder="Search..." />
                                    <div class="input-group-append">
                                        <button class="btn" type="button">/</button>
                                    </div>
                                </div>
                            </form>
                            <ul class="dropdown-menu dropdown-menu-search">

                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Morbi leo risus</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Dapibus ac facilisis in</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Porta ac consectetur ac</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Vestibulum at eros</a>
                                </li>

                            </ul>

                        </div>

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
                                            <i class="mdi mdi-account-outline"></i>
                                            <span class="nav-text">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link-item" href="email-inbox.html">
                                            <i class="mdi mdi-email-outline"></i>
                                            <span class="nav-text">Message</span>
                                            <span class="badge badge-pill badge-primary">24</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link-item" href="user-activities.html">
                                            <i class="mdi mdi-diamond-stone"></i>
                                            <span class="nav-text">Activitise</span></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-link-item" href="user-account-settings.html">
                                            <i class="mdi mdi-settings"></i>
                                            <span class="nav-text">Account Setting</span>
                                        </a>
                                    </li>

                                    <li class="dropdown-footer">
                                        <a class="dropdown-link-item" href={{ url('logout') }}> <i
                                                class="mdi mdi-logout"></i> Log Out </a>
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
                    <!-- Card Profile -->


                    <!-- Footer -->
                    <footer class="footer mt-auto">
                        <div class="copyright bg-white">
                            <p>
                                &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a
                                    class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
                            </p>
                        </div>
                        <script>
                            var d = new Date();
                            var year = d.getFullYear();
                            document.getElementById("copy-year").innerHTML = year;
                        </script>
                    </footer>

                </div>
            </div>

            <!-- Card Offcanvas -->
            <div class="card card-offcanvas" id="contact-off">
                <div class="card-header">
                    <h2>Contacts</h2>
                    <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
                </div>
                <div class="card-body">

                    <div class="mb-4">
                        <input type="text" class="form-control form-control-lg form-control-secondary rounded-0"
                            placeholder="Search contacts...">
                    </div>

                    <div class="media media-sm">
                        <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                                <img src="/assets/images/user/user-sm-01.jpg" alt="User Image">
                                <span class="active bg-primary"></span>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="user-profile.html">
                                <span class="title">Selena Wagner</span>
                                <span class="discribe">Designer</span>
                            </a>
                        </div>
                    </div>

                    <div class="media media-sm">
                        <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                                <img src="/assets/images/user/user-sm-02.jpg" alt="User Image">
                                <span class="active bg-primary"></span>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="user-profile.html">
                                <span class="title">Walter Reuter</span>
                                <span>Developer</span>
                            </a>
                        </div>
                    </div>

                    <div class="media media-sm">
                        <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                                <img src="/assets/images/user/user-sm-03.jpg" alt="User Image">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="user-profile.html">
                                <span class="title">Larissa Gebhardt</span>
                                <span>Cyber Punk</span>
                            </a>
                        </div>
                    </div>

                    <div class="media media-sm">
                        <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                                <img src="/assets/images/user/user-sm-04.jpg" alt="User Image">
                            </a>

                        </div>
                        <div class="media-body">
                            <a href="user-profile.html">
                                <span class="title">Albrecht Straub</span>
                                <span>Photographer</span>
                            </a>
                        </div>
                    </div>

                    <div class="media media-sm">
                        <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                                <img src="/assets/images/user/user-sm-05.jpg" alt="User Image">
                                <span class="active bg-danger"></span>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="user-profile.html">
                                <span class="title">Leopold Ebert</span>
                                <span>Fashion Designer</span>
                            </a>
                        </div>
                    </div>

                    <div class="media media-sm">
                        <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                                <img src="/assets/images/user/user-sm-06.jpg" alt="User Image">
                                <span class="active bg-primary"></span>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="user-profile.html">
                                <span class="title">Selena Wagner</span>
                                <span>Photographer</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>




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




            <!--  -->


</body>

</html>
