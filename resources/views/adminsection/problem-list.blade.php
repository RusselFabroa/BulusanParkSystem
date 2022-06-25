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



</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">

                    <h5>Problems
                        <a style="background-color: rgba(176,66,0,0.55); padding:10px; border-radius: 5px; float: right; color: whitesmoke; font-size: 15px;" href="{{url('/admin/listresolved')}}">Archived(Resolved)</a>
                    </h5>
                </div>
                <div class="card-body">
@include('flash-message')
                    <table class="table table-responsive-sm table-hover">
                        <thead>
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
                            <td><a type="button" class="btn btn-primary" data-bs-target="#updateproblem" data-bs-toggle="modal" data-id="{{$problem->id}}" data-bs-dismiss="modal">Update</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="updateproblem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title-centered" id="staticBackdropLabel">Update</h5>
                <button style="height: 10px" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{--CARDS--}}
                @include('flash-message')
                <div class="container-md">
                    <form style="margin-left: 0" class="form-container" method="post" action="{{url('/admin/updateproblem/'.$problem->id)}}"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="color_id" name="users_number" value="{{$problem->users_number}}">
                        <input type="hidden" id="color_id" name="problem" value="{{$problem->problem}}">

                        <div class="form-group row">
                            <div class="col">
                                <input style="height: 40px;" class="form-control" name="users_name" id="name" type="text" placeholder="{{$problem->users_name}}" value="{{$problem->users_name}}" readonly>
                            </div>
                            <div class="col">
                                <input style="height: 40px;" class="form-control" name="note" id="note" type="text" placeholder="{{$problem->note}}" value="{{$problem->note}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <span><h5 class="text-center" style="font-size: 15px">Status</h5></span>
                                <select style="height: 40px;" class="form-control" name="status" id="status" type="text" >
                                    <option id="status" name="status" value="unresolved">unresolved</option>
                                    <option id="status" name="status" value="resolved">resolved</option>
                                </select>
                                <span style="font-size: 15px" class="text-danger">@error('problem'){{$message}}@enderror</span>
                            </div>
                        </div>
                            <div class="modal-footer">
                                <button style="width: 100%" class="btn btn-primary" type="submit">Update</button>
                            </div>
                    </form>
                </div>

                {{--END CARDS--}}
            </div>

        </div>
    </div>
</div>



</body>
</html>
@endsection
