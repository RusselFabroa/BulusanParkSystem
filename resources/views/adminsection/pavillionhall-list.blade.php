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

            <h3>Pavillion Hall<a href="/admin/pavillionhall-add">Add</a> </h3>
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
            @foreach($pavillionhalls as $pavillionhall)
                <tr>
                    <td>{{$pavillionhall->id}}</td>
                    <td id="td-name">{{$pavillionhall->name}}</td>
                    <td>{{$pavillionhall->description}}</td>
                    <td>{{$pavillionhall->price}}</td>
                    <td>{{$pavillionhall->status}}</td>
                    <td width="10%">
                        <img src="{{asset('uploads/pavillionhalls/'.$pavillionhall->pavillionhall_image)}}" width="70px" height="70px" alt="Image">
                        <!-- pagtawag ng image papunta sa table-->
                    </td>
                    <td>
                        <a href="#" id="show-btn">Show</a>
                        <a href="{{url('/admin/pavillionhall-edit/'.$pavillionhall->id)}}" id="edit-btn">Edit</a>
                        <a href="/admin/pavillionhall-delete/{{$pavillionhall->id}}" id="del-btn">Delete</a>
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
