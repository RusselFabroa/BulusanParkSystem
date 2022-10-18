@extends('layouts.admin.master')
    @section('animals')
        class="active"
    @endsection
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>


    <title>Bulusan Park</title>
    <link rel="stylesheet" href="/css/other/animals-add.css" type="text/css">

</head>
<body>
<div class="card" id="card-content">
    <div class="card-header">
        <h3>Add Animals  <a class="pull-right" href='/admin/animals-list'>Back to List</a> </h3>
    </div>

    <div class="card-body">

<form class="form-container" action="{{route('admin.save.animals')}}" method="post" enctype="multipart/form-data">
    @csrf

@include('flash-message')
    <div class="form-form">


    <div class="form-group row">

        <div class="col-sm-5">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name:">
            <span style="font-size: 15px" class="text-danger">@error('name'){{$message}}@enderror</span>
        </div>
        <div class="col-sm-5">
            <label for="animals_image"  class="form-label">Image</label>
            <input class="form-control" name="animals_image" id="animals_image" type="file">
        </div>

    </div>
        <div class="form-group row">
            <div class="col-sm-4">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-select" aria-label="Default select example" name="gender" id="gender">
                    <option value="male" selected>Male</option>

                        <option value="female">Female</option>

                </select>
            </div>
            <div class="col-sm-3">
                <label for="species" class="form-label">Species/Type</label>
                <select class="form-select" aria-label="Default select example" name="species" id="species">
                        @foreach($species as $speciess)
                            <option value="{{$speciess->name}}">
                                {{$speciess->name}}   </option>
                        @endforeach
                    <hr>

                    <option><a href="#">If none in selection.. add species</a> </option>
                </select>
            </div>
            <div class="col-sm-3">
                <label for="species" class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example" name="species" id="species">

                        <option value="">New Born</option>
                    <option value="">Bought</option>
                    <option value="">Donated</option>


                </select>
            </div>

        </div>

        <div class="form-group row">
            <h6 class="center">Parents</h6>
            <div class="col-sm-5">
                <label for="father" class="form-label">Choose the father from list</label>
                <select class="form-select" aria-label="Default select example" name="father" id="father">
                    <option value="No father" selected>None</option>
                    @foreach($father as $fathers)
                    <option value="{{$fathers->name}}">
                        {{$fathers->species}} / {{$fathers->name}}  </option>
                    @endforeach
                </select>


            </div>
            <div class="col-sm-5">
                <label for="mother" class="form-label">Choose the mother from list</label>
                <select class="form-select" aria-label="Default select example" name="mother" id="mother">
                    <option value="No mother" selected>None</option>
                    @foreach($mother as $mothers)
                        <option value="{{$mothers->name}}">{{$mothers->species}} / {{$mothers->name}}  </option>
                    @endforeach
                </select>
            </div>
        </div>
    <div class="form-group row">

        <div class="col-sm-10">
            <label for="description" class="form-label">Description</label>
            <textarea type="description" name="description" class="form-control" id="description" placeholder="Description" > </textarea>

        </div>
    </div>
        <br>
        <button type="submit" class="col-sm-10 btn btn-primary">Save</button>
    </div>
    <br>

</form>
    </div>
</div>
</body>
</html>

@endsection
