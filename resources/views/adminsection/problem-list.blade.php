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

    <link rel="stylesheet" href="/css/other/slider-list.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="head">

            <h3>Sliders in Home Page<a href="">Add</a> </h3>
            @include('flash-message')
        </div>
    </div>
    <div class="table-container">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection
