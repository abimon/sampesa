<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('storage/front/images/favicon/favicon.ico')}}">
    <link rel="icon" type="image/png" href="{{asset('storage/front/images/favicon/favicon.ico')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('storage/front/images/favicon/favicon.ico')}}" sizes="16x16">
    <title>SAMPESA GROUP - {{$title}}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="{{asset('storage/dash/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar" style="max-height:100vh; overflow:scroll">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="{{asset('storage/front/images/favicon/favicon.ico')}}" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">{{Auth()->user()->role}} PANEL</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <hr class="sidebar-divider">

            <!-- Engineers Heading -->
            <div class="sidebar-heading">
                USER RECORDS
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('clients.index')}}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Clients Records</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('staff.index')}}">
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>Staff Records</span>
                </a>
            </li>
            <hr class="sidebar-divider">

            <!-- Engineers Heading -->
            <div class="sidebar-heading">
                My Department
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('meeting.index')}}">
                    <i class="fas fa-fw fa-calendar-day"></i>
                    <span>Meetings</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('message.index')}}">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>Messages</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('task.index')}}">
                    <i class="fas fa-fw fa-list-check"></i>
                    <span>Tasks</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('report.index')}}">
                    <i class="fas fa-fw fa-file-lines"></i>
                    <span>Reports</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!--HR Heading -->
            <div class="sidebar-heading">
                Human Resource
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#staff" aria-expanded="true" aria-controls="staff">
                    <i class="fas fa-fw fa-clipboard-user"></i>
                    <span>Staff</span>
                </a>
                <div id="staff" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gradient-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('department.index')}}">Departments</a>
                        <a class="collapse-item" href="{{route('roles.index')}}">Roles</a>
                        <a class="collapse-item" href="{{route('staff.index')}}">Staff</a>
                        <a class="collapse-item" href="{{route('leave.index')}}">Leaves</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#jobs" aria-expanded="true" aria-controls="jobs">
                    <i class="fas fa-fw fa-users-rays"></i>
                    <span>Jobs</span>
                </a>
                <div id="jobs" class="collapse" aria-labelledby="headingMyLoans" data-parent="#accordionSidebar">
                    <div class="bg-gradient-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="">Openings</a>
                        <a class="collapse-item" href="">Applications</a>
                        <a class="collapse-item" href="">Interviews</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!--Finance-->
            <div class="sidebar-heading">
                Finance
            </div>
            <!-- Incomes Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#income" aria-expanded="true" aria-controls="income">
                    <i class="fas fa-fw fa-bank"></i>
                    <span>Income</span>
                </a>
                <div id="income" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-gradient-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="">Rent Collections</a>
                    </div>
                </div>
            </li>
            <!-- Expenses Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Expenses" aria-expanded="true" aria-controls="Expenses">
                    <i class="fas fa-fw fa-receipt"></i>
                    <span>Expenses</span>
                </a>
                <div id="Expenses" class="collapse" aria-labelledby="headingMyLoans" data-parent="#accordionSidebar">
                    <div class="bg-gradient-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="">Payroll</a>
                        <a class="collapse-item" href="">Pay Change</a>
                        <a class="collapse-item" href="">Petty Cash</a>
                        <a class="collapse-item" href="">Other Expenses</a>
                    </div>
                </div>
            </li>
            <!-- Loans -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#loans" aria-expanded="true" aria-controls="loans">
                    <i class="fas fa-fw fa-hand-holding-dollar"></i>
                    <span>Loans</span>
                </a>
                <div id="loans" class="collapse" aria-labelledby="headingMyLoans" data-parent="#accordionSidebar">
                    <div class="bg-gradient-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="">Available Loans</a>
                        <a class="collapse-item" href="">Applications</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!--Project Manager Heading -->
            <div class="sidebar-heading">
                Project Manager
            </div>
            <!-- Projects Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#projects" aria-expanded="true" aria-controls="projects">
                    <i class="fas fa-fw fa-screwdriver-wrench"></i>
                    <span>Projects</span>
                </a>
                <div id="projects" class="collapse" aria-labelledby="projects" data-parent="#accordionSidebar">
                    <div class="bg-gradient-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('project.index')}}">All Projects</a>
                        <a class="collapse-item" href="{{route('project.show','Open')}}">Open Projects</a>
                        <!-- <a class="collapse-item" href="">Bids</a> -->
                        <a class="collapse-item" href="{{route('project.show','Ongoing')}}">Ongoing Projects</a>
                        <a class="collapse-item" href="{{route('project.show','Completed')}}">Completed Projects</a>
                        <a class="collapse-item" href="{{route('project.show','Suspended')}}">Suspended Projects</a>
                    </div>
                </div>
            </li>
            <!-- Contractors Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#contractors" aria-expanded="true" aria-controls="contractors">
                    <i class="fas fa-fw fa-users-gear"></i>
                    <span>Contractors</span>
                </a>
                <div id="contractors" class="collapse" aria-labelledby="contractors" data-parent="#accordionSidebar">
                    <div class="bg-gradient-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="">All Contractors</a>
                    </div>
                </div>
            </li>
            <!-- Quary Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#quary" aria-expanded="true" aria-controls="quary">
                    <i class="fas fa-fw fa-person-digging"></i>
                    <span>Quary</span>
                </a>
                <div id="quary" class="collapse" aria-labelledby="quary" data-parent="#accordionSidebar">
                    <div class="bg-gradient-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="">Sales</a>
                        <a class="collapse-item" href="">Purchases</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!--Loan HR Heading -->
            <div class="sidebar-heading">
                Engineers, Architects & Technicians
            </div>
            <!-- Senior Engineers Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#jengs" aria-expanded="true" aria-controls="jengs">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Seniors</span>
                </a>
                <div id="jengs" class="collapse" aria-labelledby="jengs" data-parent="#accordionSidebar">
                    <div class="bg-gradient-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="">Structural Engineer</a>
                        <a class="collapse-item" href="">Mechanical Engineer</a>
                        <a class="collapse-item" href="">Electrical Engineer</a>
                        <a class="collapse-item" href="">Quantity Surveyor Engineer</a>
                    </div>
                </div>
            </li>
            <!-- Junior Engineers Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sengs" aria-expanded="true" aria-controls="sengs">
                    <i class="fas fa-fw fa-user-group"></i>
                    <span>Juniors</span>
                </a>
                <div id="sengs" class="collapse" aria-labelledby="sengs" data-parent="#accordionSidebar">
                    <div class="bg-gradient-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="">Structural Engineer</a>
                        <a class="collapse-item" href="">Mechanical Engineer</a>
                        <a class="collapse-item" href="">Electrical Engineer</a>
                        <a class="collapse-item" href="">Quantity Surveyor Engineer</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#gis" aria-expanded="true" aria-controls="gis">
                    <i class="fas fa-fw fa-location-dot"></i>
                    <span>GIS</span>
                </a>
                <div id="gis" class="collapse" aria-labelledby="gis" data-parent="#accordionSidebar">
                    <div class="bg-gradient-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="">Projects</a>
                        <a class="collapse-item" href="">Calendar</a>
                        <a class="collapse-item" href="">Report</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                @if(Auth()->user()->messages->where('isRead',false)->count()>0)
                                <span class="badge badge-danger badge-counter">{{Auth()->user()->messages->where('isRead',false)->count()}}</span>
                                @endif
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                @foreach(Auth()->user()->messages->where('isRead',false) as $message)
                                <a class="dropdown-item d-flex align-items-center" href="{{route('chat.show',$message->sender->id)}}">
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">{{$message->message}}</div>
                                        <div class="small text-gray-500">{{$message->sender->sname}} {{$message->sender->fname}} · {{$message->created_at->diffForHumans()}}</div>
                                    </div>
                                </a>
                                @endforeach
                                <a class="dropdown-item text-center small text-gray-500" href="/chat">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth()->user()->fname}} {{Auth()->user()->sname}}
                                </span>
                                <img class="img-profile rounded-circle" src="{{asset('storage/users/passports/'.(Auth()->user()->pp_path))}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-grey-800 text-uppercase">{{$title}}</h1>
                </div>
                    @yield('dashboard')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SAMPESA GROUP {{date('Y')}}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" style="text-decoration: none;overflow:hidden; text-wrap:nowrap" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" aria-expanded="false">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('storage/dash/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('storage/dash/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('storage/dash/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('storage/dash/js/sb-admin-2.min.js')}}"></script>


</body>

</html>