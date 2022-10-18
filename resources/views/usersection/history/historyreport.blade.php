
@extends('layouts.front.layout-action')

@section('content')
    <header class=" py-5" style="height: 50px;background-color: rgb(250, 135, 41);" >
        <div class="text-center text-light" style="position: relative;top: -2.3rem">
            <h2 class="display-3" style="font-size: 50px;">Your Report</h2>
        </div>
    </header>

<div class=" container container-sm" style="margin-top: 20px; margin-bottom: 100px;">
    <div class="container-head">
        <h4>Problem</h4>

    </div>
    <table class="table table-responsive-sm table-hover">
        <thead>
        <tr>

            <th>Problem</th>
            <th>Problem's Description</th>
            <th>Date Reported</th>
            <th>Status</th>
            <th>Admin's Message</th>

        </tr>
        </thead>
        <tbody>
        @foreach($problems as $problem)
            <tr>

                <td>{{$problem->problem}}</td>
                <td>{{$problem->note}}</td>
                <td>{{$problem->created_at}}</td>
                <td>{{$problem->status}}</td>
                <td>{{$problem->reply}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

</div>
<br>
    <br>

@endsection
