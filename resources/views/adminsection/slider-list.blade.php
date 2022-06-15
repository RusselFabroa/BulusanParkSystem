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

    <link rel="stylesheet" href="/css/other/slider-list.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="head">

            <h3>Sliders in Home Page<a href="/admin/slider-add">Add</a> </h3>
           @include('flash-message')
        </div>
    </div>
    <div class="table-container">
        <div class="row">
            <div class="col-12">
                <table class="table table-image">
                    <thead class="table">

                    <tr>
                        <th>ID</th>
                        <th>IMAGE</th>
                        <th>HEADING</th>
                        <th>STATUS</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($slider as $sliders)
                            <td>{{$sliders->id}}</td>
                            <td class="w-10">
                                <img src="{{asset('uploads/slider/'.$sliders->image)}}" class="" width="150px" height="70px" alt="Image">
                            </td>
                            <td>{{$sliders->heading}}</td>
                            <td>
                                @if($sliders->status=='1')
                                    hidden
                                @else
                                visible
                                @endif
                            </td>
                            <td>
                                <a href="{{url('/admin/slider-edit/'.$sliders->id)}}" class="btn btn-primary" >Edit</a>
                                <a href="{{url('/admin/slider-delete/'.$sliders->id)}}" class="btn btn-danger" >Delete</a>
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
