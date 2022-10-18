


{{--Book MODALS--}}
<div class="modal fade" id="checkbookmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--Body Start-->
                <div class="container">
                    <div class="row">
                        <div class="col">
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
                                                        @foreach($bookinfo as $bookinfos )

                                                        <tr>
                                                            <td class="title">
                                                                <img src="{{asset('img/logo.png')}}" style="width: 100%; max-width: 100px" />
                                                            </td>
                                                            <td>
                                                                Invoice No.: BPS000{{$bookinfos->id}}<br />
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
                                                            @foreach($bookinfo as $bookinfos )
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
                                            @foreach($bookinfo as $bookinfos )
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

                                                <td>{{$adultpricetotal}}</td>
                                            </tr>
                                            <tr class="item">
                                                <td>Children Entrance Fee <br> {{$bookinfos->no_of_children}} * Php{{$childrenprice}}
                                                </td>
                                                <td>{{$childrenpricetotal}}</td>
                                            </tr>
                                            <tr class="item last">
                                                <td>Facilities</td>
                                                <td>{{$totalfacilitiesbill}}</td>
                                            </tr>

                                            <tr class="total">
                                                <td></td>

                                                <td>Total: <span>&#8369;</span> {{$totalbill}}</td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Card start-->
                        <div class="col">

                    <div class="card pe-6 me-6">
                        <div class="card-header">
                            <h6><p style="color: red">Important Notice:</p>
                                <p style="font-size: 15px;">Hindi kapa fully booked, kailangan mo muna magdownpayment atleast 10%. It's to preventing scam and for security</p>

                                <table>
                                    <tr class="details">
                                        <td style="border-right: 1px solid rgba(0,0,0,0.62) ">
                                            <p style="font-size: 15px; margin: 8px;">
                                                Total bill: <span>&#8369;</span>{{$totalbill}}<br>
                                                Pay atleast 10%: <span>&#8369;</span>{{$tenpercent}}
                                            </p>
                                        </td>
                                        @foreach($parkinfo as $parkinfos)
                                            <td>
                                                <p style="font-size: 15px;  margin: 8px;">
                                                    Gcash: {{$parkinfos->gcash_number}}<br>
                                                    Maya: {{$parkinfos->paymaya_number}}
                                                </p>
                                            </td>
                                            <td>
                                                <p style="font-size: 15px;  margin: 8px;">
                                                    {{$parkinfos->bankaccount1_name}}: {{$parkinfos->bankaccount1}}<br>
                                                    {{$parkinfos->bankaccount2_name}}: {{$parkinfos->bankaccount2}}
                                                </p>
                                            </td>
                                        @endforeach
                                    </tr>



                                </table>

                            </h6>
                        </div>
                        <div class="card-body">
                            @foreach($user_booked as $userss)
                                @if(isset($userss->payment_image))
                                    <small class="text-center" style="background-color: #a4a4f1 ; padding: 10px;"><i> You have successfully sent the payment!Please wait for the verification!</i> </small>
                                    <form class="" action="{{url('/user/updatebook/'.$userss->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <input type="text" class="form-control" placeholder="{{$userss->id}}" aria-label="Username" aria-describedby="addon-wrapping" hidden>

                                        <label for="payment_image"> Proof of Payment: </label>
                                        <input class="form-control w-100 me-2" name="payment_image" id="payment_image" type="file">
                                        <span style="font-size: 15px" class="text-danger">@error('payment_image'){{$message}}@enderror</span>
                                        <button type="submit" class=" form-control btn btn-primary">Update</button>
                                    </form>

                                @else

                                    <form class="" action="{{url('/user/updatebook/'.$userss->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <input type="text" class="form-control" placeholder="{{$userss->id}}" aria-label="Username" aria-describedby="addon-wrapping" hidden>

                                        <label for="payment_image"> Proof of Payment: </label>
                                        <input class="form-control w-100 me-2" name="payment_image" id="payment_image" type="file">
                                        <span style="font-size: 15px" class="text-danger">@error('payment_image'){{$message}}@enderror</span>
                                        <button type="submit" class=" form-control btn btn-primary">Send</button>
                                    </form>
                                @endif()
                            @endforeach
                        </div>

                    </div>




                            <div class="card">
                                <div class="card-header">
                                    <h4>Reserved Facilities</h4>
                                </div>
                                <div class="card-body">
                                    <!--Body start-->
                                    <div style="margin-left: 5px" class="form-reserved">
                                        <table class="table table-striped table-bordered">
                                            <thead>

                                            <tr>

                                                <th>FACILITIES NAME</th>

                                                <th>AMOUNT</th>
                                                <th>STATUS</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($reservedcottage as $reservedcottages)
                                                <tr>

                                                    <td>{{$reservedcottages->name}}</td>
                                                    <td>{{$reservedcottages->amount}}</td>
                                                    <td>
                                                        <spa><i class="bi bi-check-circle-fill"></i></spa>
                                                        Accepted
                                                    </td>
                                                    <td><a style="text-decoration: underline; color: green;" href="javascript:void(0)"
                                                           id="show-details"
{{--                                                           data-url="{{route('cottagedetails.show', $reservedcottages->user_id)}}"--}}
                                                           class=""
                                                        >View Details</a></td>
                                                </tr>
                                            @endforeach
                                            @foreach($reservedtreehouse as $reservedtreehouses)
                                                <tr>

                                                    <td>{{$reservedtreehouses->name}}</td>

                                                    <td>{{$reservedtreehouses->amount}}</td>
                                                    <td>
                                                        @if($reservedtreehouses->status == 'available')
                                                        <span><i class="bi bi-check-circle-fill"></i></span>
                                                        Accepted
                                                        @else
                                                            <span><i class="bi bi-check-circle-fill"></i></span>
                                                            Accepted
                                                        @endif
                                                    </td>
                                                    <td><a style="text-decoration: underline; color: green;" href="">View Details</a></td>
                                                </tr>
                                            @endforeach
                                            @foreach($reservedfunction as $reservedfunctions)
                                                <tr>

                                                    <td>{{$reservedfunctions->name}}</td>

                                                    <td>{{$reservedfunctions->amount}}</td>
                                                    <td>
                                                        <spa><i class="bi bi-check-circle-fill"></i></spa>
                                                        Accepted
                                                    </td>
                                                    <td><a style="text-decoration: underline; color: green;" href="">View Details</a></td>
                                                </tr>
                                            @endforeach
                                            @foreach($reservedpavillion as $reservedpavillions)
                                                <tr>

                                                    <td>{{$reservedpavillions->name}}</td>

                                                    <td>{{$reservedpavillions->amount}}</td>
                                                    <td>
                                                        <spa><i class="bi bi-check-circle-fill"></i></spa>
                                                        Accepted
                                                    </td>
                                                    <td><a style="text-decoration: underline; color: green;" href="">View Details</a></td>
                                                </tr>
                                            @endforeach
                                            <tr>

                                                <td><strong>Total:</strong></td>
                                                <td>{{$totalfacilitiesbill}}</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>



                                    </div>

                                    <!--Body End-->
                                </div>
                            </div>
                        </div>
                        <!-- End Card-->
                    </div>
                </div>
                <!--Body End-->
            </div>

        </div>
    </div>
</div>







{{--Book MODALS--}}
<div class="modal fade" id="confirmbookmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!--Body Start-->
                <div class="container">
                    <div class="row">
                        <div class="col">
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
                                                                    <img src="{{asset('img/logo.png')}}" style="width: 100%; max-width: 100px" />
                                                                </td>
                                                                <td>
                                                                    Invoice No.: BPS000{{$bookinfos->id}}<br />
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

                                                    <td>Total: <span>&#8369;</span> {{$totalbill2}}</td>
                                                </tr>

                                        </table>

                                    </div>
                                    <div class="btn-group w-100" role="group" aria-label="Basic outlined example">
                                        <a type="button" style="width: 50%;" class="btn btn-outline-primary disabled" >Screenshot</a>
                                        <a type="button" style="width: 50%;" class="btn btn-outline-primary" href="{{url('/user/print-invoice/'.$bookinfos->id)}}">Download</a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!--Card start-->
                        <div class="col">


                           <div class="card">
                               <div class="body">
                                   @foreach($bookinfo2 as $bookinfo)
                                       <div class="row">
                                           <div class="col">
                                               <img src="{{asset('uploads/payments/'.$bookinfo->payment_image)}}" class="pull-right" width="50%" min-height="150px" alt="Image">
                                           </div>
                                           <div class="col">
                                               <h5 style="color: #ec5858" class="p-4"><i>Thank you for booked and visiting our website.</i></h5>
                                           </div>
                                       </div>


                                   @endforeach
                               </div>
                           </div>




                            <div class="card">
                                <div class="card-header">
                                    <h4>Reserved Facilities</h4>
                                </div>
                                <div class="card-body">
                                    <!--Body start-->
                                    <div style="margin-left: 5px" class="form-reserved">
                                        <table class="table table-striped table-bordered">
                                            <thead>

                                            <tr>

                                                <th>FACILITIES NAME</th>

                                                <th>AMOUNT</th>
                                                <th>STATUS</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($reservedcottage as $reservedcottages)
                                                <tr>

                                                    <td>{{$reservedcottages->name}}</td>

                                                    <td>{{$reservedcottages->amount}}</td>
                                                    <td>
                                                        <spa><i class="bi bi-check-circle-fill"></i></spa>
                                                        Accepted
                                                    </td>
                                                    <td><a style="text-decoration: underline; color: green;" href="">View Details</a></td>
                                                </tr>
                                            @endforeach

                                            @foreach($reservedtreehouse as $reservedtreehouses)
                                                <tr>

                                                    <td>{{$reservedtreehouses->name}}</td>

                                                    <td>{{$reservedtreehouses->amount}}</td>
                                                    <td>
                                                        @if($reservedtreehouses->status == 'available')
                                                            <span><i class="bi bi-check-circle-fill"></i></span>
                                                            Accepted
                                                        @else
                                                            <span><i class="bi bi-check-circle-fill"></i></span>
                                                            Accepted
                                                        @endif
                                                    </td>
                                                    <td><a style="text-decoration: underline; color: green;" href="">View Details</a></td>
                                                </tr>
                                            @endforeach
                                            @foreach($reservedfunction as $reservedfunctions)
                                                <tr>

                                                    <td>{{$reservedfunctions->name}}</td>

                                                    <td>{{$reservedfunctions->amount}}</td>
                                                    <td>
                                                        <spa><i class="bi bi-check-circle-fill"></i></spa>
                                                        Accepted
                                                    </td>
                                                    <td><a style="text-decoration: underline; color: green;" href="">View Details</a></td>
                                                </tr>
                                            @endforeach
                                            @foreach($reservedpavillion as $reservedpavillions)
                                                <tr>

                                                    <td>{{$reservedpavillions->name}}</td>

                                                    <td>{{$reservedpavillions->amount}}</td>
                                                    <td>
                                                        <spa><i class="bi bi-check-circle-fill"></i></spa>
                                                        Accepted
                                                    </td>
                                                    <td><a style="text-decoration: underline; color: green;" href="">View Details</a></td>
                                                </tr>
                                            @endforeach
                                            <tr>

                                                <td><strong>Total:</strong></td>
                                                <td><span>&#8369;</span>{{$totalfacilitiesbill}}</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <!--Body End-->
                                </div>
                            </div>
                        </div>
                        <!-- End Card-->
                    </div>
                </div>

                <!--Body End-->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{--END MODALS--}}


