@extends('layouts.admin.master')
@section('notifications')
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

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" id="card-content">
                <div class="card-header">

                    <h5>Resolved Problems
                        <a style="background-color: rgba(176,66,0,0.55); padding:10px; border-radius: 5px; float: right; color: whitesmoke; font-size: 15px;" href="{{route('admin.list.problem')}}">Back to List</a>
                    </h5>
                </div>
                <div class="card-body">
                    @include('flash-message')
                    <table class="table table-responsive-sm table-hover">
                        <thead style="font-size: 10px; font-weight: bold;">
                        <tr>
                            <th>Name</th>
                            <th>Contact Number</th>
                            <th>Problem</th>
                            <th>Problem's Description</th>
                            <th>Date Reported</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($problems as $problem)
                            <tr>
                                <td>{{$problem->users_name}}</td>
                                <td>{{$problem->users_number}}</td>
                                <td>{{$problem->problem}}</td>
                                <td>{{$problem->note}}</td>
                                <td>{{$problem->created_at}}</td>
                                <td>{{$problem->status}}</td>
                                <td><a href="{{url('/admin/deleteproblem/'.$problem->id)}}" class="btn btn-warning">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>



</body>
</html>
@endsection
