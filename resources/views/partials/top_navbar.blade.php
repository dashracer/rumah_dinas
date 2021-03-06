<!-- Top Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <!-- Toggle icon for mobile view -->
        <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
            <i class="ti-menu"></i>
        </a>
        <div class="top-left-part">
            <a class="logo" href="{{ url('/') }}">
                <b>
                    <img src="/plugins/images/eliteadmin-logo.png" alt="home" />
                </b>
                <span class="hidden-xs">
                    <strong>BPKAD</strong>
                </span>
            </a>
        </div>
        <!-- /Logo -->
        <!-- Search input and Toggle icon -->
        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
            <li>
                <form role="search" class="app-search hidden-xs">
                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
            </li>
        </ul>
        <!-- This is the message dropdown -->
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="right-side-toggle"> <a class="waves-effect waves-light" href="{{ url('logout') }}"><i class="ti-power-off"></i> Logout</a></li>
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
<!-- End Top Navigation -->