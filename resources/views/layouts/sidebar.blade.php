<div class="sidebar">
    <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"-->
    <div class="sidebar-wrapper" style="background-color: cadetblue;">
        <div class="logo">
            <!-- <a href="javascript:void(0)" class="simple-text logo-mini"></a> -->
            <a href="javascript:void(0)" class="simple-text logo-sm">
                <h6>SMART HOME AUTOMATION SYSTEM</h6>
            </a>
        </div>
        <ul class="nav">
            <li class="active ">
                <a href="{{ url('/dashboard') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/user') }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>User</p>
                </a>
            </li>

            <li>
                <a href="{{ url('/device') }}">
                    <i class="tim-icons icon-components"></i>
                    <p>Devices</p>
                </a>
            </li>
        </ul>
    </div>
</div>
