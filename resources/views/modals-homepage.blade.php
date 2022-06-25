{{--COTTAGES MODALS--}}
<div class="modal fade" id="cottagesmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title-centered" id="staticBackdropLabel">Cottages</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" >
            {{--CARDS--}}
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    @foreach($cottages as $cottage)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('uploads/cottages/'.$cottage->cottage_image)}}" width="70px" height="200px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$cottage->name}}</h5>
                                <p class="card-text">{{$cottage->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{--END CARDS--}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{--END MODALS--}}

{{--TREEHOUSE MODALS--}}
<div class="modal fade" id="treehousesmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title-centered" id="staticBackdropLabel">TREEHOUSES</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{--CARDS--}}
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    @foreach($treehouses as $treehouse)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{asset('uploads/treehouses/'.$treehouse->treehouse_image)}}" width="70px" height="200px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$treehouse->name}}</h5>
                                    <p class="card-text">{{$treehouse->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--END CARDS--}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{--END MODALS--}}

{{--FUNCTIONHALL MODALS--}}
<div class="modal fade" id="functionhallsmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title-centered" id="staticBackdropLabel">FUNCTION HALLS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{--CARDS--}}
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    @foreach($functionhalls as $cottage)
                        <div class="col">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{asset('uploads/functionhalls/'.$cottage->functionhall_image)}}" width="70px" height="200px"  alt="Animals">
                                <div class="card-body">
                                    <h5 class="card-title">{{$cottage->name}}</h5>
                                    <p class="card-text">{{$cottage->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--END CARDS--}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{--END MODALS--}}

{{--PAVILLION HALL MODALS--}}
<div class="modal fade" id="pavillionhallsmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title-centered" id="staticBackdropLabel">PAVILLION HALLS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{--CARDS--}}
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    @foreach($pavillionhalls as $cottage)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{asset('uploads/pavillionhalls/'.$cottage->pavillionhall_image)}}" width="70px" height="200px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$cottage->name}}</h5>
                                    <p class="card-text">{{$cottage->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--END CARDS--}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{--END MODALS--}}

{{--ANIMALS MODALS--}}
<div class="modal fade" id="animalsmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title-centered" id="staticBackdropLabel">ANIMALS YOU MAY SEE inside park!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{--CARDS--}}
                <div class="row row-cols-1 row-cols-md-4 gx-5">
                    @foreach($animals as $animal)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{asset('uploads/animals/'.$animal->animals_image)}}" width="70px" height="200px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$animal->name}}</h5>
                                    <p class="card-text">{{$animal->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                {{--END CARDS--}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{--END MODALS--}}

{{--AboutUS MODALS--}}
<div class="modal fade" id="aboutusmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable " id="aboutmodals">
        <div class="modal-content">
            <div class="modal-header">

                <nav class="navbar navbar-expand-sm bg-light navbar-light">
                    <div class="container-fluid">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#about">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#socmed">Social Media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="modal-body" id="aboutusbody" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="0">
                <div id="about" class="container-fluid bg-grey">
                    <h2 class="text-center">About Calapan Nature Park</h2>
                    <br>
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="{{ asset('/img/logotitle.png') }}"
                                 class="img-fluid" alt="Sample image">
                        </div>
                        <div class="col-sm-7 slideanim">
                            <div class="row">
                                <p style=" text-align: justify; text-justify:inter-word;">
                                        This is approximately four(4) hectares land, the three hectares is donated by a generous family in Bulusan and the remaining one hectare was purchased by the City Government on Mayor Arnan Panaligan's first term in the service.<br>
                                        In 1992, this was first open as Bulusan Park.<br>
                                        On the 15th Foundation Anniversary of Calapan it was changed to Calapan Recreational and Zoological Park lead by Mayor Doy Leachon last March 18, 2007. The same day the mini zoo was open, were different animals can be seen such as tiger, donkey, ostrich, monkey, deer, wild cats and different kinds of birds.<br>
                                        Extreme sports enthusiast will also enjoy, we have zipline and wall climbing, play around for kids and obstacles for team building.
                                </p>
                            </div>
                        </div>
                    </div>
             </div>
                <div id="socmed" class="container-fluid bg-info" style="padding-top:10px; margin: 10px">
                    <h2 class="text-center">Social Media</h2><br>
                        <div class="col-sm-7 ">
                            <div class="row">
                                <p style=" text-align: justify; text-justify:inter-word;">
                                        This is approximately four(4) hectares land, the three hectares is donated by a generous family in Bulusan and the remaining one hectare was purchased by the City Government on Mayor Arnan Panaligan's first term in the service.<br>
                                        In 1992, this was first open as Bulusan Park.<br>
                                        On the 15th Foundation Anniversary of Calapan it was changed to Calapan Recreational and Zoological Park lead by Mayor Doy Leachon last March 18, 2007. The same day the mini zoo was open, were different animals can be seen such as tiger, donkey, ostrich, monkey, deer, wild cats and different kinds of birds.<br>
                                        Extreme sports enthusiast will also enjoy, we have zipline and wall climbing, play around for kids and obstacles for team building.
                                </p>

                            </div>
                        </div>
                </div>



                <div id="contact" class="container-fluid bg-grey" style="margin-top: 30px">
                    <h2 class="text-center">CONTACT</h2>
                    <div class="row">
                        <div class="col-sm-5">
                            <p>Contact us and we'll get back to you within 24 hours.</p>
                            <p><span class="glyphicon glyphicon-map-marker"></span> Calapan Nature Park</p>
                            <p><span class="glyphicon glyphicon-phone"></span> 09309695287</p>
                            <p><span class="glyphicon glyphicon-envelope"></span> bulusanpark2311.gmail.com</p>
                        </div>
                        <div class="col-sm-7 slideanim">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                </div>
                            </div>
                            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <button class="btn btn-default pull-right" type="submit">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{--END MODALS--}}

