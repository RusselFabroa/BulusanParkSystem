@extends('layouts.admin.master')
@section('sales')
    class="active"
    @endsection
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bulusan Park</title>


</head>
<body>
<div class="card" id="card-content">
    <div class="card-header">

    </div>
    <div class="card-body">
        <ul class="nav nav-tabs" style="">
            <li class="nav-item">
                <a class="nav-link" href="/admin/salesfacilities"  >Facilities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" >Tickets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Anually Report</a>
            </li>
        </ul>
        <br>
        <div class="text-center">
            <h2>Monthly Sales of Tickets</h2>
        </div>
        <div class="container" style="padding-left:40px;padding-right:40px; margin-top: 0px;">

            {{--//Entrance Sales--}}
            <table class="table table-responsive-sm table-bordered" style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">
                <thead class="align-middle" style="text-align: center;">

                <tr style="text-align: center;" class="table-dark">
                    <th>Tickets/Months</th>
                    <th>Monthly Sales</th>
                </tr>
                </thead>
                <tbody>
                {{--    COTTAGEEEEEE--}}

                <tr style="text-align: center">
                    @foreach($ticketsales as $ticketsale)
                        <th>{{$ticketsale->month}} {{$ticketsale->year}}</th>
                        <td>{{$ticketsale->totalsales}}</td>
                    @endforeach
                </tr>
                </tbody>
                <tfoot>
                <@foreach($ticketsalestotal as $ticketsalestotals)
                    <tr>
                        <th style="text-align: right">Total Sales:</th>
                        <th style="text-align: center">{{$ticketsalestotals->totalsales}}</th>
                    </tr>
                @endforeach
                </tfoot>
            </table>
        </div>
    </div>
</body>
</html>
@endsection
