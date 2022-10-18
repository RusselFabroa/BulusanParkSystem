


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
        <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            /*box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);*/
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }
        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }
        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }
        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }
        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }
        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }
        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }
        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }
        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }
        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }
        .invoice-box table tr.item.last td {
            border-bottom: none;
        }
        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }
        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }
            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }  }
        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }
        .invoice-box.rtl table {
            text-align: right;
        }
        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;

        }
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }
    </style>
</head>
<body>
<div class="card">
    <div class="card-header">
        <h4>Your Book Details</h4>
    </div>
    <div class="card-body">
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            @foreach($bookinfo2 as $bookinfos )

                                <tr>
                                    <td class="title">
                                        <img src="{{public_path('img/logo.png')}}" style="width: 100%; max-width: 100px" />
                                    </td>
                                    <td>
                                        Invoice No.: BPS000{{$id}}<br />
                                        Created: {{$bookinfos->created_at}}<br />
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
                <tr class="information">
                    <td colspan="2">
                        <table>

                            <tr>
                                @foreach($parkinfo as $parkinfos)
                                    <td>
                                        {{$parkinfos->name}}<br />
                                        {{$parkinfos->address}}<br />

                                    </td>
                                @endforeach
                                @foreach($bookinfo2 as $bookinfos )
                                    <td>
                                        Visitor<br />
                                        {{$bookinfos->fullname}}<br />
                                        {{$bookinfos->email}}
                                    </td>
                                @endforeach

                            </tr>

                        </table>
                    </td>
                </tr>
                @foreach($bookinfo2 as $bookinfos )
                    <tr class="heading">
                        <td>Payment Method</td>
                        <td>Over-the-Counter/Downpayment</td>
                    </tr>
                    <tr class="details">
                        <td></td>
                        <td></td>
                    </tr>

                    <tr class="heading">
                        <td>Item</td>

                        <td>Price</td>
                    </tr>

                    <tr class="item">
                        <td>Adult Entrance Fee<br>{{$bookinfos->no_of_adults}} * Php{{$adultprice}}
                        </td>

                        <td>{{$adultpricetotal2}}</td>
                    </tr>
                    <tr class="item">
                        <td>Children Entrance Fee <br> {{$bookinfos->no_of_children}} * Php{{$childrenprice}}
                        </td>
                        <td>{{$childrenpricetotal2}}</td>
                    </tr>
                    <tr class="item last">
                        <td>Facilities</td>
                        <td>{{$totalfacilitiesbill}}</td>
                    </tr>

                    <tr class="total">
                        <td></td>

                        <td>Total: Php{{$totalbill2}}</td>
                    </tr>

            </table>

        </div>

        @endforeach
    </div>
</div>



{{--    <img src="{{public_path('uploads/payments/'.$books->payment_image)}}" width="100%" height="100%" alt="Image">--}}




</body>
</html>



