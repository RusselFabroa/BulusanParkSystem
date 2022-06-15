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

    <link rel="stylesheet" href="/css/treehouse/add.css" type="text/css">
</head>
<body>




<form class="form-style-9" action="{{route('admin.save.cottages')}}" method="post" enctype="multipart/form-data">
    @csrf
    <h3>Add Cottage  <a href='/admin/listcottages'>Back to List</a> </h3>
    @include('flash-message')

    <div class="form-group row">
        <div class="col-sm-5">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            <span style="font-size: 15px" class="text-danger">@error('name'){{$message}}@enderror</span>
        </div>
        <div class="col-sm-5">
            <label for="image"  class="form-label">Image</label>
            <input class="form-control" name="cottage_image" id="image" type="file" />
            <span style="font-size: 15px" class="text-danger">@error('cottage_image'){{$message}}@enderror</span>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-5">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Price">
            <span style="font-size: 15px" class="text-danger">@error('price'){{$message}}@enderror</span>
        </div>
        <div class="col-sm-5">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="availability" aria-label="status">
                <option selected value="available">Available</option>
                <option value="notavailable">Not Available</option>
            </select>
            <span style="font-size: 15px" class="text-danger">@error('availability'){{$message}}@enderror</span>
        </div>
    </div>

    <div class="form-group row">

        <div class="col-sm-10">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" class="form-control" id="description" placeholder="Description" > </textarea>
            <span style="font-size: 15px" class="text-danger">@error('description'){{$message}}@enderror</span>
        </div>

    </div>
    <br>
    <button type="submit" class="col-sm-10 btn btn-primary">Save</button>


</form>
</body>
</html>

@endsection
