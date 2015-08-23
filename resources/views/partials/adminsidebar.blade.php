<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header active">Admin Controls</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('Admin/Index') }}"><i class='fa fa-link'></i> <span>Home</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Department</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Manage Department</a></li>
                    <li><a href="#">Insert Department</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Staff</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('Admin/ListStaff') }}">Manage Staff</a></li>
                    <li><a href="{{ url('Admin/InsertStaff') }}">Insert Staff</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>SLA</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Manage Plan</a></li>
                    <li><a href="#">Insert Plan</a></li>
                    <li><a href="#">Holidays</a></li>
                    <li><a href="#">Escalations</a></li>
                </ul>
            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
