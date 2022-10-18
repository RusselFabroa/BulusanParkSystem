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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Bulusan Park</title>

    {{--FullCalendar Jquery links--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>


    <style>
        table, th, td {
            border: 1px rgba(253, 189, 151, 0.89) solid;
        }
        th{
            width: 30%;
        }
        table{
            width: 80%;
        }
        .container{
            width: 90%;
        }
    </style>
</head>
<body>
{{--@if(Session::has('treehouse_add'))
<div class="alert alert-succes">
    {{Session::get('treehouse_add')}}
</div>

 @endif

<form class="form-style-9" action="{{route('update.updateinventorypavillion')}}" method="post" enctype="multipart/form-data">
@csrf
<h3>Reserve for Pavillion <a href='/inventorypavillion'>Back to List</a> </h3>

<ul>
<li>
     @if(Session::has('cottages_update'))
                 <div class="alert alert-success" role="alert">
                 {{ Session::get('cottages_update') }}
                  <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> -->
                <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
            <?php Session::forget('cottages_update'); ?>
        @endif
        @if(Session::has('cottages_delete'))
                 <div class="alert alert-danger" role="alert">
                 {{ Session::get('cottages_delete') }}
                <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> -->
                <span aria-hidden="true">&times;</span>
                 </button>
                 </div>
            <?php Session::forget('cottages_delete'); ?>
        @endif

                        <input type="hidden" name="id" value="{{$reserves->id}}">

    <input type="text" name="name" readonly=""  value="{{$reserves->pavillionhall->name}}" class="field-style field-split align-left" placeholder="Name" />
    <input type="text" name="price" readonly=""  value="Php. {{$reserves->pavillionhall->price}}" class="field-style field-split align-right" placeholder="Price" />

</li>
<br>
<li>
  <!--   <input type="file" name="treehouse_image" class="field-style field-split align-left" placeholder="" /> -->
     <img src="{{asset('uploads/pavillionhalls/'.$reserves->pavillionhall->pavillionhall_image)}}" width="160px" height="100px" alt="Image">
        <input type="text" name="price" readonly=""  value="{{$reserves->pavillionhall->availability}}" class="field-style field-split align-right" placeholder="Price" />
        <strong><label style="position: relative; left:  20rem; top: 2rem">

        Update Status: {{$reserves->status}}</label></strong>

    <select id="status" name="status" value=" ">
                            <option id="status" name="status"  value= "{{$reserves->status}}">{{$reserves->status}}</option>
                            <option id="status" name="status"  value="Accept">Accept</option>
                            <option id="status" name="status"  value="New">New</option>
                            <option id="status" name="status"  value="Cancelled">Cancelled</option>
                            <option id="status" name="status"  value="Not Available">Not Available</option>
                            <option id="status" name="status"  value="Paid">Paid</option>
                    </select>

</li>
<li>
<br>
<br>
 <strong><label style="position: relative;">

        Description:</label></strong>

<textarea readonly name="description" class="field-style"  value="{{$reserves->pavillionhall->description}}" placeholder="Description...">{{$reserves->pavillionhall->description}}</textarea>
</li>
<li>
    <b>User Name: </b><label class="align-left">{{$reserves->user->name}}</label><br>
<input type="submit" value="Save" />

   <b> Reservation Date: </b> <label class="align-left">{{$reserves->reserve_date}}</label><br>
   <b> Date Created:</b> <label class="align-left">{{$reserves->created_at}}</label>
    <!-- <input type="text" name="name" readonly=""  value="{{$reserves->user->name}}" class="field-style field-split align-left" placeholder="Name" />  -->
</li>
</ul>
</form>--}}
<div class="card pb-5" id="card-content">
    <div class="card-body">
        <div class="container">
            <form class="form-style-9" action="{{route('admin.update.updateinventorypavillion')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('flash-message')
                <h3>RESERVE COTTAGE <a class="btn btn-primary pull-right" href='/admin/inventorypavillion'>Back to List</a> </h3>
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

                    <table class="table">
                        <thead>
                        <h5>Cottage's Details</h5>
                        </thead>
                        <tbody>
                        <tr>
                            <th>NAME</th>
                            <td>{{$reserves->pavillionhall->name}}</td>
                        </tr>
                        <tr>
                            <th>IMAGE</th>
                            <td><img src="{{asset('uploads/pavillionhalls/'.$reserves->pavillionhall->pavillionhall_image)}}" width="160px" height="100px" alt="Image"></td>
                        </tr>
                        <tr>
                            <th>PRICE</th>
                            <td>{{$reserves->pavillionhall->price}}</td>
                        </tr>
                        <tr>
                            <th>AVAILABILITY</th>
                            <td>{{$reserves->pavillionhall->status}}</td>
                        </tr>

                        <tr>
                            <th>NOTE</th>
                            <td>{{$reserves->note}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <input type="hidden" class="form-control" name="title" value="{{$reserves->pavillionhall->name}}">
                <input type="hidden" class="form-control" name="start" value="{{$reserves->reserve_date}}">
                <input type="hidden" class="form-control" name="end" value="{{$reserves->end_date}}">
                <input type="hidden" class="form-control" name="facility" value="{{$reserves->pavillionhall->name}}">
                <input type="hidden" class="form-control" name="email" value="{{$reserves->user->email}}">
                <div class="row">
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
                        <option id="status" name="status"  value="New">New</option>
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
        </div>
                </div>
            </form>
        </div>
    </div>

</div>

</body>
</html>
@endsection
