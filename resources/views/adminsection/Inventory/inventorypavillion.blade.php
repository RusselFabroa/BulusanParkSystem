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


    <div class="container">
        <div class="head">
            @include('flash-message')
        </div>
            <p>Inventory Pavillion Hall</p>
       


    @if(Session::has('cottages_update'))
        <span>{{Session::get('cottages_update')}}</span>
        @endif
    <table id="cottages">
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Cottage Image</th>
                    <th>Cottage Name</th>
                    <th>Reserve Date</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                
                @foreach($reserves as $cottage)
                <tr>
                    <td width="10%">#0000{{$cottage->id}}</td>
                    <td width="20%">{{$cottage->user->name}}</td>
                     <td width="10%">
                        <img src="{{asset('uploads/pavillionhalls/'.$cottage->pavillionhall->pavillionhall_image)}}" width="70px" height="70px" alt="Image">
                        <!-- pagtawag ng image papunta-->
                    </td>
                    <td width="10%">{{$cottage->pavillionhall->name}}</td>
                    <td width="20%">{{$cottage->reserve_date}}</td>
                    <td width="10%">{{$cottage->status}}</td>
                    <td width="10%">Php. {{$cottage->pavillionhall->price}}</td>
                    
                    <td width="10%">
                    <!-- <a href="#" id="show-btn">Show</a> -->
                    <a href="/admin/editinventorypavillion/{{$cottage->id}}" id="edit-btn">Show</a>
                    <!-- <a href="/inventorycottage/{{$cottage->id}}" id="del-btn">Delete</a> -->
                    </td>
                    
                </tr> @endforeach
            </table>
 
 

    </div>
</body>
</html>
@endsection
