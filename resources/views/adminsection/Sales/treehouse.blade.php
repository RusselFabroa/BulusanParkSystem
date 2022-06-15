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
            <p>Inventory Treehouse Sales</p>
           


    @if(Session::has('cottages_update'))
        <span>{{Session::get('cottages_update')}}</span>
        @endif
    <table id="cottages">
                <tr>
                    <th>Month</th>
                    <th>Monthly Sales Report</th>
                </tr>
                
                @foreach($orders1 as $key => $item)
                <tr>
                    <td width="10%">{{  $item['months'] }}</td>
                    <td width="20%">Php. {{  $item['sums'] }}</td>
                   
                    
                </tr>
                 @endforeach
                   <td><strong>Total Sales:</strong></td>
                  <td colspan="2"><strong>Php. {{  $orders2['sums'] }}</strong></td>

            </table>
 

    </div>
</body>
</html>
@endsection
