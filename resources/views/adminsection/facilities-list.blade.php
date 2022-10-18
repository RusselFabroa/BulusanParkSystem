@extends('layouts.admin.master')

@section('facilities')
    active
@endsection

@section('style')

@endsection
@section('content')
    <html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        {{--DataTable Jquery links--}}
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <script href="https://code.jquery.com/jquery-3.5.1.js"></script>
<style>

</style>

    </head>
    <body>

    <div class="card" id="card-table">

        <div class="card-header">
            <ul class="nav nav-tabs" style="">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" >Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/salestickets">Others</a>
                </li>
                <li class="nav-item" style="float: right">
                    <a class="nav-link" href="#">
                        <i class="now-ui-icons ui-1_simple-add"></i>
                        Add Facility
                    </a>
                </li>
            </ul>
            <br>
            <h4 class="card-title"> FACILITIES LIST
                <a class="pull-right" href="#"
                   style= "color: #4f4e4d; font-size: 20px ; text-decoration: none; padding: 8px; border-radius: 5px; background-color:cadetblue">
                    Add Facility
                </a></h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead class="" style="font-size: small;">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>asda</td>
                        <td>sdvsd</td>
                        <td>qwe</td>
                        <td>qweqw</td>
                        <td>lkjkh</td>
                        <td>sdvsd</td>
                        <td>sdvsdv</td>
                    </tr>
                    </tbody>
                </table>
            </div>
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



    <script>
        import {Jquery} from "../../../../public/plugins/jquery-ui/external/jquery/jquery";
        export default {
            components: {Jquery}
        }
    </script>

    </body>
    </html>
@endsection

@section('scripts')

@endsection


