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
            <div class="row">
                <h3 class="pull-right"> <a href="/admin/paidbook-list" class="btn btn-secondary pull-right">Paid Book/Reservation</a></h3>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a>Book</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Unpaid List</li>
                    </ol>

                </nav>
                <div class="header-text">

                    @include('flash-message')
                </div>
            </div>
            <div class="row" style="
        font-family: Arial,
        Helvetica, sans-serif;">

                <table class="display table-striped table-bordered"  id="dataTable" style="margin-top: 10px; margin-bottom: 20px ;">
                    <br>
                    <thead class="table-secondary" style=" max-height: 30px; text-align: center;" >
                    <tr>

                        <th>ID</th>
                        <th>Full name</th>
                        <th>Number</th>
                        <th>Date of Book</th>
                        <th>Entrance fee</th>
                        <th>Reservation fee</th>
                        <th>Total bill</th>
                        <th>Downpayment/Full</th>
                        <th></th>
                        <th>Status</th>
                        <th>Paid</th>
                        <td></td>

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
                            <td>
                                @if(isset($books->payment_image))

                                    <a class="btn btn-primary p-2" href="{{url('/admin/print-payment/'.$books->id)}}"   >
                                        <img id="payImg" src="{{asset('uploads/payments/'.$books->payment_image)}}" width="70px" height="70px" alt="Image">
                                    </a>
                                @else
                                    No Payment
                                @endif
                            </td>
                            @if($books->status == 'Accepted')
                                <td><a type="button"  class=" btn btn-primary p-1">Accepted</a> </td>

                            @else
                                <td><a type="button" href="{{url('/admin/updatepayment/'.$books->id)}} " class=" btn btn-secondary p-1">Accept</a> </td>
                            @endif
                            <td>{{$books->status}}/Not Paid</td>


                            <form action="{{url('/admin/book-update/'.$books->id.'/'.$books->user_id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <td>
                                    @if($books->status == 'booked')
                                        <input type="hidden" type="text" value="{{$books->id}}" name="{{$books->id}}">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="paid" name="status" id="status">
                                            <label class="form-check-label" for="status">
                                                Paid
                                            </label>
                                        </div>
                                    @else
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="paid" name="status" id="status">
                                            <label class="form-check-label" for="status">
                                                Paid
                                            </label>
                                        </div>
                                    @endif
                                </td>

                                <td>
                                    <button type="submit" class=" btn btn-primary">Update</button>

                                </td>
                            </form>

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
                    scrollX: true,
                });
            } );
        </script>
    </div>
</div>
<br>


<div class="modal fade" id="Printmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <h4>Payment</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a  type="button" class="btn btn-primary">Download</a>
            </div>
        </div>
    </div>
</div>

</body>
<script>
    $(document).on('click','.Showdata',function ()
    {

    })
</script>


</html>
@endsection
