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
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                   <strong>{{$info->name}}</strong> <br>
                                      {{$info->description}}
                                </p>
                                <h3>Address</h3>
                                {{$info->address}}
                            </div>
                        </div>
                    </div>
             </div>
                <div id="socmed" class="container-fluid bg-info" style="padding-top:20px; padding-bottom:50px; margin: 10px; margin-bottom: 30px">
                    <h2 class="text-center">Social Media</h2><br>
                        <div class="row" style="padding-left: 30px;">
                            <div class="col" >
                                    <div class="container-sm">
                                        <span>
                                            <i class="fa-brands fa-facebook fa-5x"></i>
                                            <h5>Bulusan Park </h5>
                                        </span>
                                    </div>
                            </div>
                            <div class="col">
                                <div class="container-sm">
                                        <span>
                                            <i class="fa-brands fa-instagram fa-5x"></i>
                                            <h5>Bulusan Park </h5>
                                        </span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="container-sm">
                                        <span>
                                            <i class="fa-brands fa-twitter fa-5x"></i>
                                            <h5>Bulusan Park </h5>
                                        </span>
                                </div>
                            </div>
                        </div>

                </div>



                <div id="contact" class="container-fluid bg-grey" style="margin-top: 30px">
                    <h2 class="text-center">CONTACT</h2>
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">

                            <div class="mb-3">
                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-4 col-form-label pull-right">Gcash(globe number)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name" value="{{$info->gcash_number}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-4 col-form-label pull-right">Paymaya(smart number)</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name" value="{{$info->paymaya_number}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-4 col-form-label pull-right">Bank account 1</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name" value="{{$info->bankaccount1_name}} {{$info->bankaccount1}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-4 col-form-label pull-right">Bank account 2</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name" value="{{$info->bankaccount2_name}} {{$info->bankaccount2}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-4 col-form-label pull-right">Bank account 3</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="name" value="{{$info->bankaccount3_name}} {{$info->bankaccount3}}" readonly>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
{{--END MODALS--}}

