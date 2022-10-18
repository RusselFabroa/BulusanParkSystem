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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script href="https://code.jquery.com/jquery-3.5.1.js"></script>
    <title>Bulusan Park</title>

    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
<body>
<div class="card" id="card-content">
    <div class="card-header">
        <h5>Lost and Found
            <a style="background-color: rgba(176,66,0,0.55); padding:10px; border-radius: 5px; float: right; color: whitesmoke; font-size: 15px;" href="{{url('/admin/listresolved')}}">Archived(Resolved)</a>
        </h5>
    </div>
    <div class="card-body">
        @include('flash-message')
        <table id="datatable" class="table table-responsive-sm table-hover">
            <thead style="font-size: 10px;">
            <tr>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Problem</th>
                <th>Problem's Description</th>
                <th>Image</th>
                <th>Date Reported</th>
                <th>Status</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($problems as $problem)
                <tr>
                    <td id="users_name">{{$problem->users_name}}</td>
                    <td>{{$problem->users_number}}</td>
                    <td>{{$problem->problem}}</td>
                    <td id="note">{{$problem->note}}</td>
                    <td>
                        @if(isset($problem->image))
                            <a type="button" data-bs-target="#showimage" data-bs-toggle="modal" data-id="{{$problem->id}}" data-bs-dismiss="modal">
                                <img src="{{asset('uploads/problems/'.$problem->image)}}" width="70px" height="70px" alt="Image">
                            </a>
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{$problem->created_at}}</td>
                    <td id="status">{{$problem->status}}</td>
                    <td><a type="button" class="btn btn-primary" href="{{url('/admin/problem-edit/'.$problem->id)}}" > Update</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
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
                    <form style="margin-left: 0" class="form-container" method="post" action="{{url('/admin/updateproblem/'.$problem->id)}}" id="editForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="color_id" name="users_number" value="{{$problem->users_number}}">
                        <input type="hidden" id="color_id" name="problem" value="{{$problem->problem}}">

                        <div class="form-group row">
                            <div class="col">
                                <input  style="height: 40px;" class="form-control" name="users_name" id="users_name" type="text" placeholder="{{$problem->users_name}}" value="{{$problem->users_name}}" readonly>
                            </div>
                            <div class="col">
                                <input  style="height: 40px;" class="form-control" name="note" id="note" type="text" placeholder="{{$problem->note}}" value="{{$problem->note}}" readonly>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col">
                                <span><h5 class="text-center" style="font-size: 15px">Status <i class="fa-regular fa-list-dropdown"></i></h5></span>
                                <select style="height: 40px;" class="form-control" name="status" id="status" type="text" >
                                    <option id="status" name="status" value="unresolved">unresolved</option>
                                    <option id="status" name="status" value="resolved">resolved</option>
                                </select>
                                <span style="font-size: 15px" class="text-danger">@error('problem'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col">
                                <labe for="reply"> Note/Comment(Optional) </labe>
                                <textarea class="container-fluid" name="reply" id="reply">

                                </textarea>
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

<div class="modal fade" id="showimage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title-centered" id="staticBackdropLabel">Image</h5>
                <button style="height: 10px" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                    <img id="image" src="{{asset('uploads/problems/'.$problem->image)}}" width="400px" height="400px" alt="Image">

            </div>


        </div>

    </div>
</div>

<script href="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
         $('#datatable').DataTable({
            order:[[0,'desc']],
        });

        //start edit
        // table.on('click','edit', function (){
        //     $tr = $(this).closest('tr');
        //     if($($tr).hasClass('child')){
        //         $tr = $tr.prev('.parent');
        //     }
        //
        //     var data = table.row($tr).data();
        //     console.log(data);
        //
        //     $('#users_name').val(data[1]);
        //     $('#note').val(data[1]);
        //     $('#status').val(data[1]);
        //
        //     $('#editForm').attr('action' , '/admin/updateproblem/'+data[0]);
        //     $('#updateproblem').modal('show');
    });
</script>


</body>
</html>
@endsection



<script>
    import {Jquery} from "../../../../public/plugins/jquery-ui/external/jquery/jquery";
    export default {
        components: {Jquery}
    }
</script>
