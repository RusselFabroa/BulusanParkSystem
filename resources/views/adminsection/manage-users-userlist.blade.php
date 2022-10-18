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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{--DataTable Jquery links--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script href="https://code.jquery.com/jquery-3.5.1.js"></script>


</head>
<body>
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="/admin/manageuser-list"  >Admin</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page"> Users</a>
    </li>
{{--    <li class="nav-item" style="float: right; ">--}}
{{--        <a class="nav-link" href="#">Add Users</a>--}}
{{--    </li>--}}
</ul>
<br>
<table class=" table table-responsive table-bordered" id="dataTable">
    <thead>
    <tr>
        <th class="">ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Verified</th>
        <th></th>

    </tr>
    </thead>
    <tbody>
    @foreach($user as $users)
        <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->address}}</td>
            <td>
                @if($users->email_verified == 1)
                    <spa><i class="bi bi-check-circle-fill"></i></spa> YES
                @else
                    NO
                @endif
            </td>
            <td>
                <button class="btn btn-info">Edit</button>
                <button class="btn btn-warning">Block</button>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>










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
