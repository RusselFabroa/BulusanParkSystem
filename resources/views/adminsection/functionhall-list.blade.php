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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    {{--DataTable Jquery links--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script href="https://code.jquery.com/jquery-3.5.1.js"></script>
    <title>Bulusan Park</title>

    <link rel="stylesheet" href="/css/functionhall/list.css">
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
                <a class="nav-link" href="/admin/treehouselist" >Tree House</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" >Function Hall</a>
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

                    <h3><a class="btn btn-primary" href="/admin/functionhall-add">Add functionhall</a> </h3>
                    @include('flash-message')
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                <table class="table table-hover" id="dataTable">
                    <thead>

                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>IMAGE</th>
                        <th>DESCRIPTION</th>
                        <th>PRICE</th>
                        <th>STATUS</th>

                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($functionhalls as $functionhall)
                        <tr>
                            <td>{{$functionhall->id}}</td>
                            <td id="td-name">{{$functionhall->name}}</td>
                            <td width="10%">
                                <img src="{{asset('uploads/functionhalls/'.$functionhall->functionhall_image)}}" width="70px" height="70px" alt="Image">
                                <!-- pagtawag ng image papunta sa table-->
                            </td>
                            <td>{{$functionhall->description}}</td>
                            <td>{{$functionhall->price}}</td>
                            <td>
                                @if($functionhall->status=='available')
                                    <a href="functionhallstatus-edit/{{$functionhall->id}}" class="btn btn-primary p-1"> {{$functionhall->status}} </a>
                                @elseif($functionhall->status=='notavailable' || 'broken')
                                    <a href="functionhallstatus-edit/{{$functionhall->id}}" class="btn btn-warning p-1"> {{$functionhall->status}} </a>
                                @endif

                            </td>

                            <td>

                                <a href="{{url('/admin/functionhall-edit/'.$functionhall->id)}}" class="btn btn-primary p-1">Edit</a>
                                <a href="/admin/functionhall-delete/{{$functionhall->id}}" class="btn btn-danger p-1">Delete</a>
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
