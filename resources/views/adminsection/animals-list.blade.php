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

    <link rel="stylesheet" href="/css/other/animal.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="head">

            <h3>Animals<a href="/admin/animals-add">Add</a> </h3>
            @include('flash-message')
        </div>
    </div>
    <div class="table-container">
        <div class="row">
            <div class="col-12">
                <table class="table table-image">
                    <thead class="table">

                    <tr>

                        <th>IMAGE</th>
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($animals as $animal)

                        <td class="w-10">
                            <img src="{{asset('uploads/animals/'.$animal->animals_image)}}" class="rounded-circle z-depth-2" width="70px" height="70px" alt="Sheep">
                        </td>
                        <td>{{$animal->name}}</td>
                        <td class="w-50">{{$animal->description}}</td>
                        <td>
                            <a href="{{url('/admin/animals-edit/'.$animal->id)}}" class="btn btn-primary" >Edit</a>
                            <a href="{{url('/admin/animals-delete/'.$animal->id)}}" class="btn btn-danger" >Delete</a>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection
