<div class="header-title" style="position: fixed; width: 80%; top: 0px; z-index: 2;">
    <div class="m-8">
        <nav class="shadow p-1 navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Calapan Recreational and Zoological Park </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ms-auto">



                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admin</a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Reports</a>
                                <a href="#" class="dropdown-item">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a href="{{route('admin.logout')}}" class="dropdown-item" ONCLICK="event.preventDefault();document.getElementById('logout-form').submit();">LOGOUT</a>
                                <form action="{{route('admin.logout')}}" id="logout-form" method="get"> </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
