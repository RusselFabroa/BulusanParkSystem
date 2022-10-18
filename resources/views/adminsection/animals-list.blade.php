@extends('layouts.admin.master')
@section('animals')
    class="active"
    @endsection

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{--DataTable Jquery links--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script href="https://code.jquery.com/jquery-3.5.1.js"></script>

    <title>Bulusan Park</title>


</head>
<body>
<div class="card" id="card-content">
    <div class="card-header">
        <h4 class="card-title"> ANIMALS</h4>
    </div>

    <ul class="nav nav-tabs pull-right" style="margin: 10px;">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" >List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/inventorycottage-accepted">Archive</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/animals-add">Add Animals</a>
        </li>

    </ul>
    <div class="card-body">

<div class="container" style="height: max-content">
    <div class="row">
        <div class="head">
            @include('flash-message')
        </div>
    </div>
    <div class="table-container">
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table " id="dataTable">
                    <thead style="font-size: 10px; font-weight: normal">

                    <tr>
                        <th>IMAGE</th>
                        <th>NAME</th>
                        <th>SPECIES</th>
                        <th>GENDER</th>
                        <th>PARENTS</th>
                        <th>DESCRIPTION</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($animals as $animal)

                        <td class="w-10">
                            <img src="{{asset('uploads/animals/'.$animal->animals_image)}}" class="rounded-circle z-depth-2" width="70px" height="70px" alt="Sheep">
                        </td>
                        <td>{{$animal->name}}</td>
                            <td>{{$animal->species}}</td>
                            <td>{{$animal->gender}}</td>
                            <td>{{$animal->parents}}</td>

                            <td class="scroll_y scroll_x" style= " display:block; overflow-x:hidden; overflow-y:scroll; height: 100px;">{{$animal->description}}</td>
                        <td>
                            <a href="{{url('/admin/animals-edit/'.$animal->id)}}" class="btn btn-primary p-1" >Edit</a>
                            <a href="{{url('/admin/animals-delete/'.$animal->id)}}" class="btn btn-danger p-1" >Delete</a>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

<script href="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable({
            order:[[0,'desc']],
            scrollX: true,


        });
    } );
</script>



<script>
    import {Jquery} from "../../../../public/plugins/jquery-ui/external/jquery/jquery";
    export default {
        components: {Jquery}
    }
</script>

</body>
</html>
@endsection
