@extends('layouts.sidebar')
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Bulusan Park</title>

    <link rel="stylesheet" href="/css/adm-dash" type="text/css">
    <style>
        .main-panel{
            width: 75%;
            margin-left: 22%;
        }
    </style>
</head>
<body>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Dashboard</a></li>
<!--        <li class="breadcrumb-item active" aria-current="page">Library</li>-->
    </ol>
</nav>
        <div class="message-content" style="padding: 20px">
            <div class="container-sm">
                <div class="card-header">
                    <h4 class="text-center">USERS</h4>
                </div>
                <div class="card-body" style="display: flex">
                    <div class="container px-4">
                        <div class="row gx-5">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header"><strong>Verified User</strong></div>

                                    <div class="card-body text-center">{{$totalverifiedusers}}</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header"><strong>Verified Admin</strong></div>
                                    <div class="card-body text-center">{{$totaladmin}}</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header"><strong>Pending User</strong></div>
                                    <div class="card-body text-center">{{$totalnotverified}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--   END USER     --}}

        {{--chart CONTENT--}}
        <div class="message-content" style="padding: 20px">
            <div class="container-sm">
                <div class="card-header">
                    <h4 class="text-center">Pending Reservations</h4>
                </div>
                <div class="card-body" style="display: flex">
                    <div class="container px-4">
                        <div class="row gx-5">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr class="text-center">
                                                <th>Cottages</th>
                                                <th>Tree House</th>
                                                <th>Function Hall</th>
                                                <th>Pavilion Hall</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                <td ><strong><a href="/admin/inventorycottage">{{$countCot}}</a></strong></td>
                                                <td><strong><a href="/admin/inventorytreehouse">{{$countTre}}</a></strong></td>
                                                <td><strong><a href="/admin/inventoryfunctionhall">{{$countFun}}</a></strong></td>
                                                <td><strong><a href="/admin/inventorypavillion">{{$countPav}}</a></strong></td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--   END charts     --}}




</body>
</html>

@endsection


