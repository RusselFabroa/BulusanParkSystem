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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bulusan Park</title>

    <link rel="stylesheet" href="{{ url('css/treehouse/add.css') }}">
    <style>
        table, th, td {
            border: 1px rgba(255, 96, 0, 0.89) solid;
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
{{--
@if(Session::has('treehouse_add'))
<div class="alert alert-succes">
    {{Session::get('treehouse_add')}}
</div>

 @endif

<form class="form-style-9" action="{{route('update.inventorycottage')}}" method="post" enctype="multipart/form-data">
@csrf
<h3>Reserve for Cottage <a href='/inventorycottage'>Back to List</a> </h3>

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

    <input type="text" name="name" readonly=""  value="{{$reserves->cottage->name}}" class="field-style field-split align-left" placeholder="Name" />
    <input type="text" name="price" readonly=""  value="Php. {{$reserves->cottage->price}}" class="field-style field-split align-right" placeholder="Price" />

</li>
<br>
<li>
  <!--   <input type="file" name="treehouse_image" class="field-style field-split align-left" placeholder="" /> -->
     <img src="{{asset('uploads/cottages/'.$reserves->cottage->cottage_image)}}" width="160px" height="100px" alt="Image">
        <input type="text" name="price" readonly=""  value="{{$reserves->cottage->availability}}" class="field-style field-split align-right" placeholder="Price" />
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

        Note:</label></strong>

<textarea readonly name="description" class="field-style"   placeholder="Description...">{{$reserves->note}}</textarea>
</li>
<li>
    <b>User Name: </b><label class="align-left">{{$reserves->user->name}}</label><br>
<input type="submit" value="Save" />

   <b> Reservation Date: </b> <label class="align-left">{{$reserves->reserve_date}}</label><br>
   <b> Date Created:</b> <label class="align-left">{{$reserves->created_at}}</label>
    <!-- <input type="text" name="name" readonly=""  value="{{$reserves->user->name}}" class="field-style field-split align-left" placeholder="Name" />  -->
</li>
</ul>
</form>
--}}

{{----}}
<div class="container">
<form class="form-style-9" action="{{route('update.inventorycottage')}}" method="post" enctype="multipart/form-data">
    @csrf
@include('flash-message')
    <h3>RESERVE COTTAGE <a href='/inventorycottage'>Back to List</a> </h3>
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
    <div class="row">
       <strong><label> Update Status: {{$reserves->status}}</label></strong>
        <select id="status" name="status" value=" ">
            <option id="status" name="status"  value= "{{$reserves->status}}">{{$reserves->status}}</option>
            <option id="status" name="status"  value="Accept">Accept</option>
            <option id="status" name="status"  value="New">New</option>
            <option id="status" name="status"  value="Cancelled">Cancelled</option>
            <option id="status" name="status"  value="Not Available">Not Available</option>
            <option id="status" name="status"  value="Paid">Paid</option>
        </select>
        <br>
        <br>
        <button style="margin-top: 10px;" type="submit" class="btn btn-primary"> Confirm </button>
    </div>
</form>
</div>
{{----}}
</body>
</html>



@endsection
