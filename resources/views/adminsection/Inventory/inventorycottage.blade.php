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

    <link rel="stylesheet" href="">
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


    <div class="container">
        <div class="head">
            @include('flash-message')
        </div>
            <h2>Inventory Cottages</h2>


    @if(Session::has('cottages_update'))
        <span>{{Session::get('cottages_update')}}</span>
        @endif
    <table class="display" id="dataTable">
        <thead>
                <tr>
                    <th >ID</th>
                    <th>User Name</th>
                    <th>Cottage Image</th>
                    <th>Cottage Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
        </thead>


            <tbody>
            @foreach($reserves as $cottage)
                <tr>
                    <th>#0000{{$cottage->id}}</th>
                    <td style="width: 20%" >{{$cottage->user->name}}</td>
                     <td style="width: 10%">
                        <img src="{{asset('uploads/cottages/'.$cottage->cottage->cottage_image)}}" class="rounded-circle" width="40px" height="40px" alt="Image">
                        <!-- pagtawag ng image papunta-->
                    </td>
                    <td style="width: 10%">{{$cottage->cottage->name}}</td>
                    <td style="width: 20%">{{$cottage->reserve_date}}</td>
                    <td style="width: 20%">{{$cottage->end_date}}</td>
                    <td style="width: 10%">{{$cottage->status}}</td>
                    <td style="width: 10%">Php. {{$cottage->cottage->price}}</td>

                    <td style="width: 10%">
                    <!-- <a href="#" id="show-btn">Show</a> -->
                    <a href="/editinventorycottage/{{$cottage->id}}" id="edit-btn" class="btn btn-primary">Show</a>
                    <!-- <a href="/inventorycottage/{{$cottage->id}}" id="del-btn">Delete</a> -->
                    </td>
                </tr>
            @endforeach
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
<script>
    import {Jquery} from "../../../../public/plugins/jquery-ui/external/jquery/jquery";
    export default {
        components: {Jquery}
    }
</script>
