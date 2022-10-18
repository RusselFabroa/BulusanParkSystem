@extends('layouts.admin.master')
@section('booking')
    class="active"
    @endsection
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
    {{--    <link rel="stylesheet" href="/css/other/animal.css">--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script href="https://code.jquery.com/jquery-3.5.1.js"></script>
    <style>
        .container{
            width: auto;
            overflow-x: scroll;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
        }

    </style>

</head>
<body>
<div class="card" id="card-content">
    <div class="card-header">

    </div>
    <div class="card-body">
        <div class="container">


            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Book</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Paid List</li>
                </ol>
            </nav>
            <div class="header-text">
        <span>

        <h3 class="pull-right"> <a href="/admin/book-list" class="btn btn-secondary pull-right">Back</a>
        </h3>
        </span>
                @include('flash-message')
            </div>

            <table class="table table-striped table-hover table-responsive-sm align-middle"  id="dataTable" style="margin-top: 10px; ;">
                <br>
                <thead class="table-secondary" style=" " >
                <tr>

                    <th>ID</th>
                    <th>Full name</th>
                    <th>Number</th>
                    <th>Date of Book</th>
                    <th>Entrance fee</th>
                    <th>Reservation fee</th>
                    <th>Total bill</th>
                    <th>Status</th>


                </tr>
                </thead>

                <tbody >
                @foreach($book as $books)
                    <tr>


                        <td>BPS000{{$books->id}}</td>
                        <td>{{$books->fullname}}</td>
                        <td>{{$books->number}}</td>
                        <td>{{$books->book_date}}</td>
                        <td> {{$books->ticket_price}}</td>
                        <td></td>
                        <td>{{$books->total_bill}}</td>
                        <td>{{$books->status}}</td>


                @endforeach
                </tbody>
            </table>


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
    </div>
</div>
<br>


</body>


{{--<script>--}}
{{--    $(function() {--}}
{{--        $('.toggle-class').change(function() {--}}
{{--            var status = $(this).prop('checked') == true ? 1 : 0;--}}
{{--            var book_id = $(this).data({{'id'}});--}}

{{--            $.ajax({--}}
{{--                type: "GET",--}}
{{--                dataType: "json",--}}
{{--                url: '/admin/changebookstatus',--}}
{{--                data: {'status': status, 'book_id': book_id},--}}
{{--                success: function(data){--}}
{{--                    console.log(data.success)--}}
{{--                }--}}
{{--            });--}}
{{--        })--}}
{{--    })--}}
{{--</script>--}}
</html>
@endsection
