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
        <h5 class="">About Us  <a type="button" class="btn btn-secondary pull-right" style="width: 150px;" href="/admin/aboutus-list">Back</a></h5>
    </div>
    <div class="card-body">
        <div class="container-fluid container-sm">

            <div class="card-header">

            </div>

            <div class="card-body">
                <div class="card-text">

                </div>

                <div class="form-container" style="width: 700px;margin-top: 50px">
                    <form class="form-style-9" action="{{url('/admin/aboutus-update/'.$info->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('flash-message')


                        <div class="mb-3">
                            <div class="mb-3 row">
                                <label for="status" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-3">
                                    <select class="form-select" aria-label="Default select example" name="status" id="status" placeholder="">
                                        @if($info->status == 'open')
                                            <option value="open" selected>Open</option>
                                            <option value="close">Close</option>
                                            <option value="underrehabilitation">Under Rehabilitation</option>
                                        @else
                                            <option value="close" selected>Close</option>
                                            <option value="open">Open</option>
                                            <option value="underrehabilitation">Under Rehabilitation</option>
                                        @endif


                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" value="{{$info->name}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" name="email" value="{{$info->email}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3 row">
                                <label for="address" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="address" id="address" value="{{$info->address}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                        <textarea class="form-control" name="description" id="description">
                            {{$info->description}}
                        </textarea>
                                </div>
                            </div>
                        </div>
                        <span></span>
                        <div class="mb-3">
                            <div class="mb-3 row">
                                <label for="gcash_number" class="col-sm-3 col-form-label">Gcash/Globe Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="gcash_number" id="gcash_number" value="{{$info->gcash_number}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3 row">
                                <label for="paymaya_number" class="col-sm-3 col-form-label">Smart/Paymaya Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="paymaya_number" id="paymaya_number" value="{{$info->paymaya_number}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3 row">
                                <label for="bankaccount1" class="col-sm-3 col-form-label">Bank Account 1</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="bankaccount1_name" id="bankaccount1" placeholder="Name"value="{{$info->bankaccount1_name}}">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="bankaccount1" id="bankaccount1" value="{{$info->bankaccount1}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3 row">
                                <label for="bankaccount2" class="col-sm-3 col-form-label">Bank Account 1</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="bankaccount2_name" id="bankaccount2" placeholder="Name"value="{{$info->bankaccount2_name}}">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="bankaccount2" id="bankaccount2" value="{{$info->bankaccount2}}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3 row">
                                <label for="bankaccount3" class="col-sm-3 col-form-label">Bank Account 1</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="bankaccount3_name" id="bankaccount3" placeholder="Name" value="{{$info->bankaccount3_name}}">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="bankaccount3" id="bankaccount3" value="{{$info->bankaccount3}}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary form-control"> Update </button>
                    </form>
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
