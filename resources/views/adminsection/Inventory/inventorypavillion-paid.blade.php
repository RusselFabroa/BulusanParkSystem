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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://your-site-or-cdn.com/fontawesome/v6.1.1/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    {{--DataTable Jquery links--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script href="https://code.jquery.com/jquery-3.5.1.js"></script>

    <style>
        .main-panel{
            margin-top: 100px;
            width: 75%;
            margin-left: 320px;
            height:auto;
            margin-bottom: 20px;
            overflow-y:auto
        }
        .container{
            background-color: rgba(255, 68, 0, 0.04);

        }
    </style>
</head>
<body>

<ul class="nav nav-tabs" style="">
    <li class="nav-item">
        <a class="nav-link" href="/admin/inventorypavillion" >New</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/admin/inventorypavillion-accepted">Accepted</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page">Paid</a>
    </li>

</ul>
    <div class="container">
        <div class="head">
            @include('flash-message')
        </div>
            <p>Inventory Pavillion Hall</p>



    @if(Session::has('cottages_update'))
        <span>{{Session::get('cottages_update')}}</span>
        @endif
    <table id="dataTable">
        <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Cottage Image</th>
                    <th>Cottage Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
         <tbody>
                @foreach($reserves as $cottage)
                <tr>
                    <td width="10%">#0000{{$cottage->id}}</td>
                    <td width="20%">{{$cottage->user->name}}</td>
                     <td width="10%">
                        <img src="{{asset('uploads/pavillionhalls/'.$cottage->pavillionhall->pavillionhall_image)}}"class="rounded-circle" width="40px" height="40px" alt="Image">
                        <!-- pagtawag ng image papunta-->
                    </td>
                    <td width="10%">{{$cottage->pavillionhall->name}}</td>
                    <td width="20%">{{$cottage->reserve_date}}</td>
                    <td width="20%">{{$cottage->end_date}}</td>
                    <td width="10%">{{$cottage->status}}</td>
                    <td width="10%">Php. {{$cottage->pavillionhall->price}}</td>

                    <td width="10%">
                    <!-- <a href="#" id="show-btn">Show</a> -->
                    <a href="/admin/editinventorypavillion/{{$cottage->id}}" id="edit-btn" class="btn btn-primary">Show</a>
                    <!-- <a href="/inventorycottage/{{$cottage->id}}" id="del-btn">Delete</a> -->
                    </td>

                </tr> @endforeach
        </thead>
         </tbody>
            </table>

    </div>
    <script href="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable({
                order:[[0,'desc']],
            });
        } );
    </script>
</body>
</html>
@endsection
