@extends('layouts.admin.master')
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{--DataTable Jquery links--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script href="https://code.jquery.com/jquery-3.5.1.js"></script>
<style>
    .main-panel{
        height: max-content;
    }
</style>

</head>
<body>
<div class="card" id="card-content">
    <div class="card-header">
        <div class="card-header">
            <h5 class="text-center">About Us</h5>
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <div class="card-body">
                @foreach($info as $infos)
                    <div class="card-text">
                        <a type="button" class="btn btn-info pull-right" style="width: 150px;" href="{{url('/admin/aboutus-edit/'.$infos->id)}}">Edit</a>
                    </div>
                    <table class="table table-bordered table-responsive table-hover">
                        <thead>

                        <tr>
                            <th class="text-center" colspan="2">Park's Information</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <th style="width: 250px;">Name</th>
                            <td>{{$infos->name}}</td>
                        </tr>
                        <tr>
                            <th style="width: 250px;">Email</th>
                            <td>{{$infos->email}}</td>
                        </tr>
                        <tr>
                            <th style="width: 250px;">Address</th>
                            <td>{{$infos->address}}</td>
                        </tr>
                        <tr>
                            <th style="width: 250px;">Description</th>
                            <td>{{$infos->description}}</td>
                        </tr>

                        </tbody>
                        <br>
                        <thead>
                        <tr>
                            <th class="text-center" colspan="2">Contact</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th style="width: 250px;">Gcash</th>
                            <td>{{$infos->gcash_number}}</td>
                        </tr>
                        <tr>
                            <th style="width: 250px;">PayMaya</th>
                            <td>{{$infos->paymaya_number}}</td>
                        </tr>
                        <tr>
                            <th style="width: 250px;">Bank Account 1</th>
                            <td>{{$infos->bankaccount1}}</td>
                        </tr>
                        <tr>
                            <th style="width: 250px;">Bank Account 2</th>
                            <td>{{$infos->bankaccount2}}</td>
                        </tr>
                        <tr>
                            <th style="width: 250px;">Bank Account 3</th>
                            <td>{{$infos->bankaccount3}}</td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>

            </div>
        </div>






        <script href="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#dataTable').DataTable({
                    order:[[0,'desc']],
                });
            } );
        </script>
    </div>

</div>

</body>

</html>
@endsection
<script>
    import {Jquery} from "../../../../public/plugins/jquery-ui/external/jquery/jquery";
    export default {
        components: {Jquery}
    }
</script>
