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

    <link rel="stylesheet" href="/css/functionhall/list.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="head">

            <h3>Function Hall<a href="/admin/functionhall-add">Add</a> </h3>
            @include('flash-message')
        </div>
    </div>
    <div class="row">
        <table class="table table-striped ">
            <thead class="table-dark">

            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>DESCRIPTION</th>
                <th>PRICE</th>
                <th>STATUS</th>
                <th>IMAGE</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($functionhalls as $functionhall)
                <tr>
                    <td>{{$functionhall->id}}</td>
                    <td id="td-name">{{$functionhall->name}}</td>
                    <td>{{$functionhall->description}}</td>
                    <td>{{$functionhall->price}}</td>
                    <td>{{$functionhall->status}}</td>
                    <td width="10%">
                        <img src="{{asset('uploads/functionhalls/'.$functionhall->functionhall_image)}}" width="70px" height="70px" alt="Image">
                        <!-- pagtawag ng image papunta sa table-->
                    </td>
                    <td>
                        <a href="#" id="show-btn">Show</a>
                        <a href="{{url('/admin/functionhall-edit/'.$functionhall->id)}}" id="edit-btn">Edit</a>
                        <a href="/admin/functionhall-delete/{{$functionhall->id}}" id="del-btn">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</body>
</html>
@endsection
