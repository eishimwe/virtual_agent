<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wendy Property | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/form.css') }}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/scroller.bootstrap.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Wendy Property</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">

                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{ Auth::user()->name }}</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Administration <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu" style="display: block;">
                                    <li><a href="{{ url('list-agents') }}">Manage Agents</a></li>
                                    <li><a href="{{ url('list-properties') }}">Manage Listings</a></li>
                                    <li><a href="{{ url('list-leads') }}">Manage Leads</a></li>

                                </ul>
                            </li>


                        </ul>
                    </div>


                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                              {{ Auth::user()->name }}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">


                                <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">


                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('js/backend/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/backend/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('js/backend/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('js/backend/nprogress.js') }}"></script>
<!-- Chart.js -->
<script src="{{ asset('js/backend/Chart.min.js') }}"></script>
<!-- jQuery Sparklines -->
<script src="{{ asset('js/backend/jquery.sparkline.min.js') }}"></script>
<!-- morris.js -->
<script src="{{ asset('js/backend/raphael.min.js') }}"></script>
<script src="{{ asset('js/backend/morris.min.js') }}"></script>
<!-- gauge.js -->
<script src="{{ asset('js/backend/gauge.min.js') }}"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('js/backend/bootstrap-progressbar.min.js') }}"></script>
<!-- Skycons -->
<script src="{{ asset('js/backend/skycons.js') }}"></script>
<!-- Flot -->
<script src="{{ asset('js/backend/jquery.flot.js') }}"></script>
<script src="{{ asset('js/backend/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('js/backend/jquery.flot.time.js') }}"></script>
<script src="{{ asset('js/backend/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('js/backend/jquery.flot.resize.js') }}"></script>
<!-- Flot plugins -->
<script src="{{ asset('js/backend/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('js/backend/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset('js/backend/curvedLines.js') }}"></script>
<!-- DateJS -->
<script src="{{ asset('js/backend/date.js') }}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('js/backend/moment.min.js') }}"></script>
<script src="{{ asset('js/backend/daterangepicker.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('js/backend/custom.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('js/backend/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/backend/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/backend/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/backend/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/backend/buttons.flash.min.js') }}"></script>
<script src="{{ asset('js/backend/buttons.html5.min.js') }}"></script>
<script src="{{ asset('js/backend/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/backend/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('js/backend/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('js/backend/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('js/backend/responsive.bootstrap.js') }}"></script>
<script src="{{ asset('js/backend/dataTables.scroller.min.js') }}"></script>
<script src="{{ asset('js/backend/jszip.min.js') }}"></script>
<script src="{{ asset('js/backend/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/backend/vfs_fonts.js') }}"></script>
<script src="{{ asset('js/backend/fileupload.min.js') }}"></script>

@yield('custom_js')

</body>
</html>