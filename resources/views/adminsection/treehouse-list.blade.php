@extends('layouts.admin.master')

@section('facilities')
    class="active"
    @endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{--DataTable Jquery links--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script href="https://code.jquery.com/jquery-3.5.1.js"></script>

    <title>Bulusan Park</title>

    <link rel="stylesheet" href="/css/treehouse/list.css">

    <style>
        .table th{
            font-weight: normal;
            font-size: 10px;
            color: black;
        }
        .table{
            width: 100%;
            overflow: auto;
        }
    </style>
</head>

<body>
<div class="card" id="card-content">
    <div class="card-header">
        <h4 class="card-title"> FACILITIES LIST</h4>
        <ul class="nav nav-tabs" style="">
            <li class="nav-item">
                <a class="nav-link" href="/admin/listcottages" >Cottages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"  aria-current="page">Tree House</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/functionhall-list">Function Hall</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/pavillionhall-list">Pavillion Hall</a>
            </li>
            <li class="nav-item" style="float: right">
                <a class="nav-link" href="#">
                    Other
                </a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="pull-left">
                        <h6 class="center">  <a class="btn btn-primary" href="/admin/treehouse-add">Add TreeHouse</a> </h6>
                    </div>

                    @include('flash-message')

                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                <table class="table table-hover table-bordered text-center" id="dataTable" >
                    <thead class="text-center">

                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody >
                    @foreach($treehouses as $treehouse)
                        <tr>
                            <td>{{$treehouse->id}}</td>
                            <td>{{$treehouse->name}}</td>
                            <td width="10%">
                                <img src="{{asset('uploads/treehouses/'.$treehouse->treehouse_image)}}" width="70px" height="70px" alt="Image">
                                <!-- pagtawag ng image papunta sa table-->
                            </td>
                            <td>{{$treehouse->description}}</td>
                            <td>{{$treehouse->price}}</td>
                            <td>
                                @if($treehouse->status=='available')
                                <a href="/admin/treehousestatus-edit/{{$treehouse->id}}" class="btn btn-info p-1">{{$treehouse->status}}</a>
                                @elseif($treehouse->status=='notavailable'||'broken')
                                    <a href="/admin/treehousestatus-edit/{{$treehouse->id}}" class="btn btn-warning p-1">{{$treehouse->status}}</a>
                                @endif
                            </td>

                            <td>

                                <a href="/admin/treehouse-edit/{{$treehouse->id}}" class="btn btn-primary p-1"> Edit</a>
                                <a href="/admin/treehouse-delete/{{$treehouse->id}}" class="btn btn-danger p-1">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<script href="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable({
            order:[[0,'asc']],
        });
    } );
</script>



<script>
    import {Jquery} from "../../../../public/plugins/jquery-ui/external/jquery/jquery";
    export default {
        components: {Jquery}
    }
</script>




</body>
</html>
@endsection
