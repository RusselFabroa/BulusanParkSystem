<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bulusan Park</title>
    <link rel="icon" href="{{ asset('/img/logotitle.png') }}"  type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="m-8">
    <nav class="shadow p-1 navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Calapan Recreational and Zoological Park </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse">
{{--                <ul class="nav navbar-nav">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">Home</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">Profile</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Messages</a>--}}
{{--                        <div class="dropdown-menu">--}}
{{--                            <a href="#" class="dropdown-item">Inbox</a>--}}
{{--                            <a href="#" class="dropdown-item">Drafts</a>--}}
{{--                            <a href="#" class="dropdown-item">Sent Items</a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a href="#"class="dropdown-item">Trash</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
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
</body>
</html>
