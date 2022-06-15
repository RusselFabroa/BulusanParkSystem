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

    <link rel="stylesheet" href="/css/other/animals-edit.css" type="text/css">
</head>
<body>


<form class="form-container" action="{{url('/admin/animals-update/'.$animals->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-container-head">
        <h3>Edit : {{$animals->name}} <a href='/admin/animals-list'>Back to List</a> </h3>
    </div>
    @include('flash-message')
    <div class="form-form">

                <img style= "margin:0 100px 20px 250px"; src="{{ asset('uploads/animals/'.$animals->animals_image)}}" class="rounded-circle" width="250px" height="200px" alt="Image">
                <div class="form-group row">

                    <div class="col-sm-5">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control" name="name" id="name" value="{{$animals->name}}" placeholder="">
                    </div>
                    <div class="col-sm-5">
                        <label for="animals_image"  class="form-label">Image</label>
                        <input class="form-control" name="animals_image" id="animals_image" type="file" />
                    </div>

                </div>

                <div class="form-group row">

                    <div class="col-sm-10">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="description" name="description" class="form-control" id="description" placeholder="Description" >
                        {{$animals->description}}
                        </textarea>

                    </div>
                </div>
                <br>
                <button type="submit" class="col-sm-10 btn btn-primary">Save</button>
            </div>
            <br>

</form>
</body>
</html>

@endsection
