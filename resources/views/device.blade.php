<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title> SMART HOME </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper">
        @include('layouts.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:void(0)">Devices</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="search-bar input-group">
                                <button class="btn btn-link" id="search-button" data-toggle="modal"
                                    data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                                    <span class="d-lg-none d-md-block">Search</span>
                                </button>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="notification d-none d-lg-block d-xl-block"></div>
                                    <i class="tim-icons icon-sound-wave"></i>
                                    <p class="d-lg-none">
                                        Notifications
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                                    <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John
                                            responded to your email</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You
                                            have 5 more tasks</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)"
                                            class="nav-item dropdown-item">Your friend Michael is in town</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)"
                                            class="nav-item dropdown-item">Another notification</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)"
                                            class="nav-item dropdown-item">Another one</a></li>
                                </ul>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="../assets/img/tariq.jpg" alt="Profile Photo">
                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                    <p class="d-lg-none">
                                        Log out
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href=" {{ url('/profile') }}"
                                            class="nav-item dropdown-item">Profile</a></li>
                                    <li class="nav-link"><a href="javascript:void(0)"
                                            class="nav-item dropdown-item">Change Password</a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="dropdown-item"> Logout
                                        </a>
                                    </li>
                                </ul>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                        <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog"
                aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <input type="text" class="form-control" id="inlineFormInputGroup"
                                placeholder="SEARCH">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->
            <div class="content">

                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6></h6>
                        </div>
                        <div class="row">
                            <div class="col ms-2">
                                @can('deviceCreate')
                                    <button class="btn bg-gradient-info mb-0" href="" type="button"
                                        class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addNewStaffModal"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New
                                        Device</button>
                                @endcan
                            </div>
                            <div class="col input-group me-6 ">
                                <span class="input-group-text text-body"><i class="fas fa-search"
                                        aria-hidden="true"></i></span>
                                <input type="text" class="form-control" id="myStaffNamesInput"
                                    onkeyup="myFunction(id,'staffTable')" placeholder="Search Names...">
                            </div>
                        </div><br>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class=" p-0">
                                <table class="table align-items-center mb-0 table-striped table-bordered table-hover"
                                    id="staffTable">
                                    <thead>
                                        <tr>
                                            {{-- <th class="text-center text-uppercase text-dark text-xxs font-weight-bolder opacity-20" onclick="sortTable(0, 'staffTable')">StaffId</th> --}}
                                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-20  ps-2"
                                                onclick="sortTable(0, 'staffTable')">Device Name</th>
                                            <th
                                                class="text-center text-uppercase text-xxs font-weight-bolder opacity-20">
                                                Model</th>
                                            <th
                                                class="text-center text-uppercase text-xxs font-weight-bolder opacity-20 ps-2">
                                                Type</th>
                                            <th
                                                class="text-center text-uppercase text-xxs font-weight-bolder opacity-20">
                                                Status</th>
                                            <th class="opacity-7">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($devices)

                                            @foreach ($devices as $device)
                                                <tr>
                                                    <td>
                                                        <p class="text-xs text-center font-weight- mb-0">
                                                            {{ $device->name }}</p>
                                                        <p class="text-xs text-center text-secondary mb-0">
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="text-xs text-center font-weight- mb-0">
                                                            {{ $device->model }}</p>
                                                        <p class="text-xs text-center text-secondary mb-0">
                                                        </p>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        @if ($device->type == 0)
                                                            <span class="text-secondary text-xs font-weight-"> Pin
                                                            </span>
                                                        @elseif ($device->type == 1)
                                                            <span class="text-secondary text-xs font-weight-"> Round
                                                            </span>
                                                        @elseif ($device->type == 2)
                                                            <span class="text-secondary text-xs font-weight-"> Ceiling
                                                            </span>
                                                        @elseif ($device->type == 3)
                                                            <span class="text-secondary text-xs font-weight-"> Sliding
                                                            </span>
                                                        @elseif ($device->type == 4)
                                                            <span class="text-secondary text-xs font-weight-"> Folding
                                                            </span>
                                                        @else
                                                        @endif
                                                    </td>
                                                    <td class="align-middle text-center text-sm">
                                                        @if ($device->status == 0)
                                                            <span
                                                                class="badge badge-sm bg-gradient-success">WORKING</span>
                                                        @else
                                                            <span class="badge badge-sm bg-gradient-success"> FAULT
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle" data-toggle="dropdown">
                                                                <i class="fas fa-ellipsis-v"></i>
                                                            </div>
                                                            @can('deviceDelete ')
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton">
                                                                    {{-- <a class="dropdown-item" href="#">View</a> --}}
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            @endcan
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        @endif
                                    </tbody>
                                </table><br>
                                {{-- <div class="d-flex justify-content-center">
                                    {!! $users->links() !!}
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Background</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="badge-colors text-center">
                            <span class="badge filter badge-primary active" data-color="primary"></span>
                            <span class="badge filter badge-info" data-color="blue"></span>
                            <span class="badge filter badge-success" data-color="green"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="adjustments-line text-center color-change">
                    <span class="color-label">LIGHT MODE</span>
                    <span class="badge light-badge mr-2"></span>
                    <span class="badge dark-badge ml-2"></span>
                    <span class="color-label">DARK MODE</span>
                </li>
            </ul>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');
                $navbar = $('.navbar');
                $main_panel = $('.main-panel');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');
                sidebar_mini_active = true;
                white_color = false;

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



                $('.fixed-plugin a').click(function(event) {
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .background-color span').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data', new_color);
                    }

                    if ($main_panel.length != 0) {
                        $main_panel.attr('data', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data', new_color);
                    }
                });

                $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        sidebar_mini_active = false;
                        blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
                    } else {
                        $('body').addClass('sidebar-mini');
                        sidebar_mini_active = true;
                        blackDashboard.showSidebarMessage('Sidebar mini activated...');
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });

                $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                    var $btn = $(this);

                    if (white_color == true) {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').removeClass('white-content');
                        }, 900);
                        white_color = false;
                    } else {

                        $('body').addClass('change-background');
                        setTimeout(function() {
                            $('body').removeClass('change-background');
                            $('body').addClass('white-content');
                        }, 900);

                        white_color = true;
                    }


                });

                $('.light-badge').click(function() {
                    $('body').addClass('white-content');
                });

                $('.dark-badge').click(function() {
                    $('body').removeClass('white-content');
                });
            });
        });
    </script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "black-dashboard-free"
            });
    </script>
    <script src="{{ asset('assets/js/myJavascript.js') }}"></script>
</body>

</html>
