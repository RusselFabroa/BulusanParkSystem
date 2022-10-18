@extends('layouts.admin.master')
@section('activities')
    class="active"
    @endsection
    @section('style')
        <style>
            tbody {

                overflow-x: auto;
            }

            tbody td {
                font-size: 15px;
                max-height: 10px;
            }

            #description{
                width: 100%;
                min-width: 400px;
                overflow-y: scroll;
            }
        </style>
    @endsection
@section('content')
    <!DOCTYPE html>
<html lang="en">

<div class="card" id="card-content">
    <div class="card-header">

    </div>
    <div class="card-body" >
        <div class="container">
            <div class="row">
                <div class="head">
                    <h4>Events
                        <a type="button" class="btn btn-primary pull-right" href="/admin/activity-add">Add</a>
                    </h4>

                    @include('flash-message')
                </div>
            </div>
            <div class="table-container">
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-bordered table-hover text-center w-100" id="dataTable">
                            <thead class="" style="font-family: Rockwell; font-size: 12px">

                            <tr>
                                <th>Action</th>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Start date</th>
                                <th>End date</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($activity as $activityy)
                            <tr>
                                <td style=" width: 100%;min-width:150px;">
                                    <a href="{{url('/admin/activity-edit/'.$activityy->id)}}" class="btn btn-info" >Edit</a>
                                    <a href="{{url('/admin/activity-delete/'.$activityy->id)}}" class="btn btn-secondary" >Delete</a>
                                </td>
                                <td>{{$activityy->id}}</td>
                                <th>{{$activityy->name}}</th>
                                <td id="description" >{{$activityy->description}}</td>
                                <td class="w-10">
                                        <img src="{{asset('uploads/activities/'.$activityy->image)}}" class="" width="150px" height="70px" alt="Image">
                                </td>
                                <td style=" width: 100%;min-width: 100px ;">{{$activityy->start}}</td>
                                <td style=" width: 100%;min-width: 100px ;" >{{$activityy->end}}</td>


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
            scrollY: true,

        });
    } );
</script>



<script>
    import {Jquery} from "../../../../public/plugins/jquery-ui/external/jquery/jquery";
    export default {
        components: {Jquery}
    }
</script>

@endsection
