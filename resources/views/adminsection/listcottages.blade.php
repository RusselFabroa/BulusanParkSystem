@extends('layouts.sidebar')
    @section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulusan Park</title>

    <link rel="icon" href='/img/logotitle.png' type="image/icon type">

    <link rel="stylesheet" href="/css/functionhall/list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://your-site-or-cdn.com/fontawesome/v6.1.1/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <style>
           #cottages {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
                        }

            #cottages td, #cottages th {
                border: 1px solid #ddd;
                padding: 8px;
            }
            #cottages th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #cc9900;
                color: white;
}

#edit-btn{
    color: white;
    background-color:  #3366ff;
    border-radius: 5px ;
    padding: 7px;
    margin:0;
}
#del-btn{
    color: white;
    background-color:   #ff3333;
    border-radius: 5px ;
    padding: 7px;
    margin:0;
}
#show-btn{
    color: white;
    background-color:  #33ff99;
    border-radius: 5px ;
    padding: 7px;
    margin:0;
}
    </style>
</head>
<body>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Facilities</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cottages</li>
    </ol>
</nav>
@include('flash-message')
    <div class="container">
        <div class="head">
            <h3>Cottage<a href="/admin/addcottages">Add</a> </h3>

        </div>



    <table id="cottages">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>

                @foreach($cottages as $cottage)
                <tr>
                    <td style="width:10%">{{$cottage->id}}</td>
                    <td style="width:15%" >{{$cottage->name}}</td>
                    <td style="width:10%" >{{$cottage->price}}</td>
                    <td style="width:20%">{{$cottage->description}}</td>
                    <td style="width:10%">{{$cottage->availability}}</td>
                    <td style="width:10%" >
                        <img src="{{asset('uploads/cottages/'.$cottage->cottage_image)}}" width="70px" height="70px" alt="Image">
                        <!-- pagtawag ng image papunta-->
                    </td>
                    <td style="width:25%">
                    <a href="#" id="show-btn">Show</a>
                    <a href="/admin/editcottages/{{$cottage->id}}" id="edit-btn">Edit</a>
                    <a href="/admin/deletecottages/{{$cottage->id}}" id="del-btn">Delete</a>
                    </td>

                </tr> @endforeach
            </table>

    </div>
</body>
</html>
@endsection
