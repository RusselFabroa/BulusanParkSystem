


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bulusan Park</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script href="https://code.jquery.com/jquery-3.5.1.js"></script>
    <style>

    </style>
</head>
<body>


<div class="card" id="card-content" style="max-height: 1500px; ">
    @foreach($book as $books)
    <div class="card-header" ></div>
    <div class="container">
        {{-- <img class="" src="/img/logo.png" style="height:100px; width:100px; float: left; margin:5px; margin-left:0px;" alt="Logo">--}}
        <h3 class="" style="text-align: center;" >
           FULL NAME: {{$books->fullname}} <br>
            INVOICE ID: BPS000{{$books->id}}    TOTAL BILL: {{$books->total_bill}}
        </h3>
    </div>
</div>
<div class="card-body">


    <img src="{{public_path('uploads/payments/'.$books->payment_image)}}" width="100%" height="100%" alt="Image">


</div>
@endforeach

</body>
</html>



