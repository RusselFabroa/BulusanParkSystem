@extends('layouts.admin.master')

@section('inventory')
    class="active"
    @endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://your-site-or-cdn.com/fontawesome/v6.1.1/js/all.js" data-auto-replace-svg="nest"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{--DataTable Jquery links--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script href="https://code.jquery.com/jquery-3.5.1.js"></script>

    {{--FullCalendar Jquery links--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>



    <title>Bulusan Park</title>



    <style>
        table, th, td {
            border: 1px rgba(253, 189, 151, 0.89) solid;
        }
        th{
            width: 30%;
        }

        .container{
            width: 90%;
        }
    </style>
</head>
<body>
<div class="card pb-5" id="card-content" >
   <div class="card-header">

   </div>
    <div class="card-body">
        <div class="container-fluid">
            <form class="form-style-9" action="{{route('admin.update.inventorycottage')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('flash-message')
                <h3>RESERVE COTTAGE <a class=" btn btn-primary pull-right" href='/admin/inventorycottage'>Back to List</a> </h3>
                <input type="hidden" name="id" value="{{$reserves->id}}">
                <div class="row">
                    <table class="table table-responsive-sm">
                        <thead>
                        <h5>Customer's Information</h5>
                        </thead>
                        <tbody>
                        <tr>
                            <th>USERNAME</th>
                            <td colspan="3">{{$reserves->user->name}}</td>
                        </tr>
                        <tr>
                            <th>ADDRESS</th>
                            <td  colspan="3">{{$reserves->address}}</td>
                        </tr>
                        <tr>
                            <th>CONTACT NUMBER</th>
                            <td colspan="3">{{$reserves->mobilenumber}}</td>
                        </tr>
                        <tr>
                            <th>RESERVATION DATE</th>
                            <td>{{$reserves->reserve_date}}</td>
                            <th style="width: 20%;">END DATE</th>
                            <td>{{$reserves->end_date}}</td>
                        </tr>
                        <tr>
                            <th>DATE CREATED</th>
                            <td  colspan="3">{{$reserves->created_at}}</td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="table table-responsive-sm">
                        <thead>
                        <h5>Cottage's Details</h5>
                        </thead>
                        <tbody>
                        <tr>
                            <th>NAME</th>
                            <td>{{$reserves->cottage->name}}</td>
                        </tr>
                        <tr>
                            <th>IMAGE</th>
                            <td><img src="{{asset('uploads/cottages/'.$reserves->cottage->cottage_image)}}" width="160px" height="100px" alt="Image"></td>
                        </tr>
                        <tr>
                            <th>PRICE</th>
                            <td>{{$reserves->cottage->price}}</td>
                        </tr>
                        <tr>
                            <th>AVAILABILITY</th>
                            <td>{{$reserves->cottage->availability}}</td>
                        </tr>

                        <tr>
                            <th>NOTE</th>
                            <td>{{$reserves->note}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <input type="hidden" class="form-control" name="email" value="{{$reserves->user->email}}">
                <input type="hidden" class="form-control" name="name" value="{{$reserves->user->name}}">
                <input type="hidden" class="form-control" name="title" value="{{$reserves->cottage->name}}">
                <input type="hidden" class="form-control" name="start" value="{{$reserves->reserve_date}}">
                <input type="hidden" class="form-control" name="end" value="{{$reserves->end_date}}">
                <input type="hidden" class="form-control" name="facility" value="{{$reserves->cottage->name}}">

                <div class="row" style="width: 90%;">
                    {{--                Button&Modal--}}
                    <h5 class="">
                        <a class="btn btn-secondary pull-right" data-bs-toggle="modal" data-bs-target="#exampleModal">Check Calendar</a>
                    </h5>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Calendar</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <br />

                                        <br />

                                        <div id="calendar"></div>

                                    </div>

                                    <script>

                                        $(document).ready(function () {

                                            $.ajaxSetup({
                                                headers:{
                                                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                                                }
                                            });

                                            var calendar = $('#calendar').fullCalendar({
                                                editable:true,
                                                header:{
                                                    left:'prev,next today',
                                                    center:'title',
                                                    right:'month,agendaWeek,agendaDay'
                                                },
                                                events:'/admin/events-list',
                                                selectable:true,
                                                selectHelper: true,
                                            });

                                        });

                                    </script>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                EndModal--}}

                    <strong><label> Update Status: {{$reserves->status}}</label></strong>
                    <select id="status" name="status" value=" ">
                        <option id="status" name="status"  value= "{{$reserves->status}}">{{$reserves->status}}</option>
                        <option id="status" name="status"  value="Accepted">Accept</option>
                        <option id="status" name="status"  value="Cancelled">Cancelled</option>
                        <option id="status" name="status"  value="Not Available">Not Available</option>
                        <option id="status" name="status"  value="Paid">Paid</option>
                    </select>
                    <br>
                    <br>
                    <a style="margin-top: 10px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmation"> Confirm </a>
                </div>

                <div class="modal fade" id="confirmation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Confirmation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h6 style="color: red"><small>(Note: If you will accept this request, We automatically sending email to the user. Please make sure that the connection is stable.)</small> </h6>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
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
{{----}}


</body>
</html>



@endsection
