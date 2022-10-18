@extends('layouts.admin.master')

@section('facilities')
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

    <link rel="stylesheet" href="/css/treehouse/edit.css" type="text/css">



</head>
<body>
<div class="card" id="card-content">
    <div class="card-header">
        <h6>Update Pavillion Hall: <u>{{$pavillionhall->name}}</u> <a id="back-btn" href='/admin/pavillionhall-list'>Back to List</a> </h6>

    </div>
    <div class="card-body">
        <form class="form-style-9" action="{{url('/admin/pavillionhallstatus-update/'.$pavillionhall->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('flash-message')

            <div class="form-group row">
                <div class="col-sm-5">
                    <img  src="{{ asset('uploads/pavillionhalls/'.$pavillionhall->pavillionhall_image)}}" width="300px" height="200px" alt="Image">
                </div>

                <div class="col-sm-5">
                    <div class="row">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$pavillionhall->name}}" readonly>
                        <span style="font-size: 15px" class="text-danger">@error('name'){{$message}}@enderror</span></div>
                    <div class="row">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" name="status" aria-label="status">
                            <option selected value="">Select status--</option>
                            <option  value="available">Available</option>
                            <option value="notavailable">Not Available</option>
                            <option  value="broken">Broken</option>
                        </select>
                        <span style="font-size: 15px" class="text-danger">@error('status'){{$message}}@enderror</span>
                    </div>
                </div>

            </div>



            <br>
            <button type="submit" class="col-sm-10 btn btn-primary">Save</button>




        </form>
    </div>
</div>






</body>
</html>

@endsection

