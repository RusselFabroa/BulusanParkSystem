@extends('layouts.admin.master')
@section('activities')
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


</head>
<body>
<div class="card" id="card-content">
    <div class="card-header">

    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="head">
                    <h4>Add Events/Activities
                        <a type="button" class="btn btn-primary pull-right" href="/admin/activity-list">Back to list</a>
                    </h4>
                    @include('flash-message')
                </div>
            </div>
            <div class="row m-6">
                <form class="form-container m-5" action="{{route('admin.save.activity')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-form">

                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="">
                                    <span style="font-size: 15px" class="text-danger">@error('name'){{$message}}@enderror</span>
                                </div>
                                <div class="col-sm-5">
                                    <label for="image"  class="form-label">Image</label>
                                    <input class="form-control" name="image" id="image" type="file">
                                    <span style="font-size: 15px" class="text-danger">@error('image'){{$message}}@enderror</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <label for="start" class="form-label">Date</label>
                                    <input type="date" class="form-control" name="start" id="start" placeholder="Name:">
                                    <span style="font-size: 15px" class="text-danger">@error('start'){{$message}}@enderror</span>
                                </div>
                                <div class="col-sm-5">
                                    <label for="end"  class="form-label">End Date</label>
                                    <input type="date" class="form-control" name="end" id="end" >
                                    <span style="font-size: 15px" class="text-danger">@error('end'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea type="description" name="description" class="form-control" id="description" placeholder="Description" > </textarea>
                                    <span style="font-size: 15px" class="text-danger">@error('description'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <button type="submit" class="col-sm-10 btn btn-primary">Save</button>
                        </div>
                </form>
            </div>
         </div>
    </div>
</div>


</body>
</html>
@endsection
