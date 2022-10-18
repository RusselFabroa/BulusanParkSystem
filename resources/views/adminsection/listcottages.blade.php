@extends('layouts.admin.master')

@section('facilities')
    class="active"
@endsection

@section('content')
    <html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        {{--DataTable Jquery links--}}
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <script href="https://code.jquery.com/jquery-3.5.1.js"></script>



        <style>
            .head a{
                float: right;
                font-size: 20px;
                color: #000000;
                width: fit-content;
                text-align: center;
                font-family: 'Times New Roman', Times, serif;
                border: 1px solid rgb(34, 37, 28);
                border-radius: 5px;
                text-decoration: none;
                padding: 5px 7px;
                margin-top: 2px;
                margin-bottom: 10px;
                margin-right:20px;
                background-color: rgb(110, 175, 250);
            }
            .head a:hover{
                background-color: rgb(235, 195, 121);
            }
        </style>
    </head>
    <body>
    <div class="card" id="card-content">
        <div class="card-header">
            <h4 class="card-title"> FACILITIES LIST</h4>
            <ul class="nav nav-tabs" style="">
                <li class="nav-item">
                    <a class="nav-link active"  aria-current="page">Cottages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/treehouselist" >Tree House</a>
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

            @include('flash-message')
            <div class="container">
                <div class="pull-left">
                    <h6 class="center">  <a class="btn btn-primary" href="/admin/addcottages">Add cottage</a> </h6>
                </div>
<br>
                <div class="table-responsive">
                <table  class="table table-striped table-hover" id="dataTable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cottages as $cottage)
                        <tr>
                            <td style="width:10%">{{$cottage->id}}</td>
                            <td style="width:15%" >{{$cottage->name}}</td>
                            <td style="width:10%" >{{$cottage->price}}</td>
                            <td style="width:20%">{{$cottage->description}}</td>
                            <td style="width:10%">
                                @if($cottage->availability == 'available')
                                <a href="/admin/editcottagesstatus/{{$cottage->id}}" class="p-1 m-0 bg-primary" style="color: white; text-decoration:none; border-radius: 5px;">
                                    {{$cottage->availability}}
                                </a>
                                @elseif($cottage->availability == "notavailable" || "broken")
                                    <a href="/admin/editcottagesstatus/{{$cottage->id}}" class="p-1 m-0 bg-warning" style="color: white; text-decoration:none; border-radius: 5px;">
                                        {{$cottage->availability}}
                                    </a>
                                @endif
                            </td>
                            <td style="width:10%" >
                                <img src="{{asset('uploads/cottages/'.$cottage->cottage_image)}}" width="70px" height="70px" alt="Image">
                                <!-- pagtawag ng image papunta-->
                            </td>
                            <td style="width:25%">

                                <a type="button" class="btn bg-primary p-1" href="/admin/editcottages/{{$cottage->id}}" id="edit-btn">Edit</a>
                                <a type="button" class="btn bg-danger p-1" href="/admin/deletecottages/{{$cottage->id}}" id="del-btn">Delete</a>
                            </td>

                        </tr> @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

<!--    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>-->


    <script href="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable({
                order:[[0,'desc']],
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

@section('scripts')

@endsection





{{--


--}}
