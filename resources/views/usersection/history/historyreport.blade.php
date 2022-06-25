
@extends('layouts.front.layout')

@section('content')


<div class=" container container-sm" style="margin-top: 20px;">
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

        </tr>
        </thead>
        <tbody>
        @foreach($problems as $problem)
            <tr>

                <td>{{$problem->problem}}</td>
                <td>{{$problem->note}}</td>
                <td>{{$problem->created_at}}</td>
                <td>{{$problem->status}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

</div>


@endsection
