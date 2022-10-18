
        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Bulusan Park</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <script href="https://code.jquery.com/jquery-3.5.1.js"></script>
        <style>
            table, td, th {
                border: 1px solid;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }
            span {
                content: "\20B1";
            }
        </style>
    </head>
    <body>


    <div class="card" id="card-content" style="max-height: 1500px; ">

        <div class="card-header" ></div>
        <div class="container">
{{-- <img class="" src="/img/logo.png" style="height:100px; width:100px; float: left; margin:5px; margin-left:0px;" alt="Logo">--}}
            <h3 class="" style="text-align: center;" >{{$name}}</h3>
        </div>
        </div>
        <div class="card-body">

            <br>
            <div class="header-title">
                <h3 class="text-center">Year {{date('Y')}} Earnings Report </h3>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover text-center " id="dataTable"  >
                    <thead>
                    <tr>
                        <th>Book Date</th>
                        <th>Invoice No.</th>
                        <th>Full Name</th>

                        <th>No. of Adults </th>
                        <th>No. of Children</th>
                        <th>Total Ticket Fee</th>
                        <th>Status</th>
                        <th>Bill(including reservation)</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($anuallysales as $anuallysale)
                        <tr>
                            <td class="day">{{$anuallysale->book_date}} </td>
                            <td>BPS000{{$anuallysale->id}} </td>
                            <td> {{$anuallysale->fullname}}</td>
                            <td> {{$anuallysale->no_of_adults}}</td>
                            <td> {{$anuallysale->no_of_children}}</td>
                            <td> <span style="font-family: DejaVu Sans; sans-serif;">&#8369;</span>
                                {{$anuallysale->ticket_price}}</td>
                            <td> {{$anuallysale->status}}</td>
                            <td> <span style="font-family: DejaVu Sans; sans-serif;">&#8369;</span>{{$anuallysale->total_bill}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <th class="text-right">Total</th>
                        <td class="text-center"><span style="font-family: DejaVu Sans; sans-serif;">&#8369;</span>{{$countsales}}</td>
                    </tr>

                    </tbody>

                </table>

                <div style="float: right">
                    <h6> Printed by: {{Auth::user()->name}} (Admin)</h6>
                </div>
            </div>






        </div>


    </body>
    </html>


