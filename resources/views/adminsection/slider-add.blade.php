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

    <link rel="stylesheet" href="/css/other/slider-add.css" type="text/css">
</head>
<body>


<form class="form-container" action="{{url('/admin/slider-save')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-container-head">
        <h3>Add Slider <a href='/admin/slider-list'>Back to List</a> </h3>
    </div>
@include('flash-message')
    <div class="form-form">
        @if(Session::has('success'))
            <div class="alert alert-succes">
                {{Session::get('success')}}
                @endif

                <div class="form-group row">
                    <div class="col-sm-5">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" class="form-control" name="heading" id="heading" placeholder="Heading">
                        <span style="font-size: 15px" class="text-danger">@error('heading'){{$message}}@enderror</span>
                    </div>
                    <div class="col-sm-5">
                        <label for="image"  class="form-label">Image</label>
                        <input class="form-control" name="image" id="image" type="file" />
                        <span style="font-size: 15px" class="text-danger">@error('image'){{$message}}@enderror</span>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-5">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" name="link" id="link" placeholder="Link">
                        <span style="font-size: 15px" class="text-danger">@error('link'){{$message}}@enderror</span>
                    </div>
                    <div class="col-sm-5">
                        <label for="link_name" class="form-label">Link Name</label>
                        <input type="text" class="form-control" name="link_name" id="link_name" placeholder="Link Name">
                        <span style="font-size: 15px" class="text-danger">@error('link_name'){{$message}}@enderror</span>
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-sm-7">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" name="description" class="form-control" id="description" placeholder="Description" > </textarea>
                        <span style="font-size: 15px" class="text-danger">@error('description'){{$message}}@enderror</span>
                    </div>
                    <div class="col-sm-3">
                        <label for="status" class="form-label">Status</label><br>
                        <input type="checkbox" name="status" id="status" > 0=visible , 1= hidden
                    </div>
                </div>
                <br>
                <button type="submit" class="col-sm-10 btn btn-primary">Save</button>
            </div>
            <br>
    </div>
</form>
</body>
</html>

@endsection
