@extends('layouts.admin.master')
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
{{--    <link rel="stylesheet" href="/css/other/animal.css">--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script href="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Import bootstrap cdn -->
    <link rel="stylesheet" href=
        "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity=
              "sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
          crossorigin="anonymous">

    <!-- Import jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity=
                "sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous">
    </script>

    <script src=
                "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity=
                "sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous">
    </script>
<style>
    .container{
        /*width: auto;*/
        /*overflow-x: scroll;*/
        /*font-family: Arial, Helvetica, sans-serif;*/
    }



</style>

</head>
<body>
<div class="card" id="card-content">
    <div class="card-header">

    </div>
    <div class="card-body">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-10 mx-auto">

                    <div class="my-4">
                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Setting</a>
                            </li>
                        </ul>
                        @include('flash-message')
                        <h5 class="mb-0 mt-5">Price</h5>
                        <p>This settings is to modify the price of ticket</p>
                        <div class="list-group mb-5 shadow">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="card card-collapsable">
                                        <a class="card-header text-center" style="text-decoration: none;" href="#collapseCardExample" data-bs-toggle="collapse" role="button"
                                           aria-expanded="true" aria-controls="collapseCardExample">

                                            <h5>Entrance Fee Per Head</h5>

                                            <div class="card-collapsable-arrow">
                                                <i class="fas fa-chevron-down"></i>
                                            </div>
                                        </a>
                                        <div class="collapse show" id="collapseCardExample">
                                            <div class="card-body">
                                                <form>
                                                    <table class="table">
                                                        <thead>
                                                        <tr class="text-center">
                                                            <th></th>
                                                            <th>Price
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                        @foreach($ticket as $tickets)
                                                            <tr>
                                                                <td id="name">{{$tickets->name}}</td>
                                                                <td id="price">{{$tickets->price}}</td>
                                                                <td>
                                                                    <button type="button" id="edit" class="btn btn-block" data-bs-target="#updateprice" data-bs-toggle="modal" data-id="{{$tickets->id}}" data-bs-dismiss="modal">Edit</button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="mb-0 mt-5">Security Settings</h5>
                        <p>These settings are for the security or to limit the visitors</p>
                        <div class="list-group mb-5 shadow">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <strong class="mb-2">Restrict or Limit</strong>
                                        <p class="text-muted mb-0">Check the box to activate and save!</p>
                                    </div>
                                    <div class="col-auto">
                                        <input type="checkbox" value="1" id="status" name="status">
                                    </div>
                                    <div class="col-auto">
                                        <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                    </div>
                                    <div class="col-auto">
                                <span id="passwordHelpInline" class="form-text">
                                  No.of Visitors to Limit
                                </span>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade" id="updateprice" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title-centered" id="staticBackdropLabel">Edit Entrance Fee</h5>
                        <button style="height: 10px" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{--CARDS--}}
                        @include('flash-message')
                        <div class="container-md">
                            <form style="margin-left: 0" class="form-container" method="post" action="{{url('admin/tickets-update/'.$tickets->id)}}" id="editForm" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <input type="hidden" id="id" name="id" value="{{$tickets->id}}">
                                <div class="form-group row">
                                    <div class="col">
                                        <input  style="height: 40px;" class="form-control" name="users_name" id="users_name" type="text" placeholder="{{$tickets->name}}" value="{{$tickets->name}}" readonly>
                                    </div>
                                    <div class="col">
                                        <input  style="height: 40px;" class="form-control" name="price" id="price" type="text" placeholder="{{$tickets->price}}" value="{{$tickets->price}}">
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                                <br>
                            </form>

                            {{--
                                        </form>
                                    </div>

                                    {{--END CARDS--}}
                        </div>

                    </div>
                </div>
            </div>


        </div>
        <script type="text/javascript">
            $("#edit").click(function () {
                var name = $("#name").val();
                var price = $("#price").val();
                $("#modal_body").html(text);
            });
        </script>

    </div>
</div>





</body>
</html>
@endsection
