<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        SMART HOME
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/black-dashboard.css?v=1.0.0') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Black Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/black-dashboard.css?v=1.0.0') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet" />
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('ce77aa1765616f22248a', {
            cluster: 'sa1'
        });

        var channel = pusher.subscribe('deviceNotification');
        channel.bind('deviceStatus', function(data) {
            alert(JSON.stringify(data));
        });
    </script>
</head>

<body>
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
                        <a class="navbar-brand" href="javascript:void(0)">Dashboard/ Sitting Room</a>
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
                                    data-target="#searchModal">
                                    <i class="tim-icons icon-zoom-split"></i>
                                    <span class="d-lg-none d-md-block">Search</span>
                                </button>
                            </li>

                            <!-- Room Dropdown Menu -->
                            <li class="dropdown nav-item ml-auto">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <b>ROOMS</b>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href="{{ route('dashboard.index') }}"
                                            class="nav-item dropdown-item">Sitting Room</a>
                                    </li>
                                    <li class="nav-link"><a href="{{ route('dashboard.show', 2) }}"
                                            class="nav-item dropdown-item">Master Room</a>
                                    </li>
                                    <li class="nav-link"><a href="{{ route('dashboard.show', 3) }}"
                                            class="nav-item dropdown-item">Store Room</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End of Room Dropdown Menu -->

                            <li class="dropdown nav-item">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="notification d-none d-lg-block d-xl-block"></div>
                                    <i class="tim-icons icon-sound-wave"></i>
                                    <p class="d-lg-none">Notifications</p>
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
                                    <li class="nav-link">
                                        <a href=" {{ url('/profile') }}" class="nav-item dropdown-item">Profile
                                        </a>
                                    </li>
                                    <li class="nav-link">
                                        <a href="{{ url('/profile/password') }}"
                                            class="nav-item dropdown-item">Change Password
                                        </a>
                                    </li>
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
                        </ul>
                        </li>
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

                <div class="row">
                    <div class="col-12">
                        <div class="card card-chart">
                            <div class="card-body2">
                                <style>
                                    .card-body2 {
                                        background-image: url('/assets/img/Sitting.jpg');
                                        background-size: 100%;
                                        background-position: center;
                                        width: 100%;
                                        height: 350px;
                                        border-radius: 10px;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                    }
                                </style>
                                <div class="chart-area">
                                    <!--<canvas id="chartBig1"></canvas>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if ($devices)
                        @foreach ($devices as $device)
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>{{ $device->name }}</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="container text-center">
                                            @if ($device->status == 0)
                                                @if ($device->name == 'Door')
                                                    <div class="h3 text-success text-muted">
                                                        STATUS : OPENED </div>
                                                    <form action="{{ route('dashboard.update', $device->deviceId) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="container">
                                                            <button type="submit" class="btn btn-secondary btn-md">
                                                                <i class="fa fa-fan"></i> Close
                                                            </button>
                                                        </div>
                                                    </form>
                                                    <div class="card-footer">
                                                        <br>
                                                    </div>
                                                    <div class="chart-area">
                                                        <!---- <canvas id="CountryChart"></canvas>-->
                                                    </div>
                                                @elseif ($device->name == 'Bulb' || $device->name == 'Fan')
                                                    <div class="h3 text-success text-muted">
                                                        STATUS : ON </div>
                                                    <form action="{{ route('dashboard.update', $device->deviceId) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="container"><button type="submit"
                                                                class="btn btn-secondarybtn-md">
                                                                <i class="fa fa-fan"></i> Turn Off
                                                            </button>
                                                        </div>
                                                    </form>
                                                    <div class="card-footer">
                                                        <br>
                                                    </div>
                                                    <div class="chart-area">
                                                        <!---- <canvas id="CountryChart"></canvas>-->
                                                    </div>
                                                @endif
                                            @else
                                                @if ($device->name == 'Door')
                                                    <div class="h3 text-success text-muted">
                                                        STATUS : CLOSED </div>
                                                    <form action="{{ route('dashboard.update', $device->deviceId) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="container"><button type="submit"
                                                                class="btn btn-secondary btn-md">
                                                                <i class="fa fa-fan"></i> Open
                                                            </button>
                                                        </div>
                                                    </form>
                                                    <div class="card-footer">
                                                        <br>
                                                    </div>
                                                @elseif ($device->name == 'Bulb' || $device->name == 'Fan')
                                                    <div class="h3 text-success text-muted">
                                                        STATUS : OFF </div>
                                                    <form action="{{ route('dashboard.update', $device->deviceId) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="container"><button
                                                                class="btn btn-secondarybtn-md">
                                                                <i class="fa fa-fan"></i> Turn On
                                                            </button>
                                                        </div>
                                                    </form>
                                                    <div class="card-footer">
                                                        <br>
                                                    </div>
                                                    <div class="chart-area">
                                                        <!---- <canvas id="CountryChart"></canvas>-->
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <br>
    </footer>
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
    <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/black-dashboard.min.js?v=1.0.0') }}"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('assets/demo/demo.js') }}"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script src="{{ asset('assets/js/myJavascript.js') }}"></script>
</body>

</html>




{{-- @if ($devices)
    @foreach ($devices as $device)
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $device->name }}</h3>
                </div>
                <div class="card-body">
                    <div class="container text-center">
                        <div id="device-status-{{ $device->deviceId }}">
                            @if ($device->status == 0 && $device->name == 'Door')
                                <div class="h3 text-success text-muted">
                                    STATUS: OPENED
                                </div>
                            @elseif ($device->status == 1 && $device->name == 'Door')
                                <div class="h3 text-success text-muted">
                                    STATUS: CLOSED
                                </div>
                            @elseif ($device->status == 0 && ($device->name == 'Bulb' || $device->name == 'Fan'))
                                <div class="h3 text-success text-muted">
                                    STATUS: OFF
                                </div>
                            @elseif ($device->status == 1 && ($device->name == 'Bulb' || $device->name == 'Fan'))
                                <div class="h3 text-success text-muted">
                                    STATUS: ON
                                </div>
                            @endif
                        </div>
                        <form class="device-form" data-device-id="{{ $device->deviceId }}"
                            action="{{ route('dashboard.update', $device->deviceId) }}" method="POST">
                            @method('PUT')
                            <div class="container">
                                <button type="submit" class="btn btn-secondary btn-md">
                                    @if ($device->status == 0)
                                        @if ($device->name == 'Door')
                                            <i class="fa fa-fan"></i> Close
                                        @else
                                            <i class="fa fa-fan"></i> Turn On
                                        @endif
                                    @elseif ($device->status == 1)
                                        @if ($device->name == 'Door')
                                            <i class="fa fa-fan"></i> Open
                                        @else
                                            <i class="fa fa-fan"></i> Turn Off
                                        @endif
                                    @endif
                                </button>
                            </div>
                        </form>
                        <div class="card-footer">
                            <br>
                        </div>
                        <div class="chart-area">
                            <!-- <canvas id="CountryChart"></canvas> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif --}}
