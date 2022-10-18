<html>
<head>

</head>
<body>
@if ($message = Session::get('success'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{$message}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{$message}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($message = Session::get('verify-success'))
    <div class="alert alert-dark" role="alert">
{{ $message }}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
        {{$message}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-warning" role="alert">

    Please check the form below for errors
</div>
@endif

@if ($message = Session::get('close'))
    <div classs="container p-5">
        <div class="row no-gutters fixed-bottom">
            <div class="col-lg-7 col-md-12 ml-auto">
                <div class="alert alert-gradient shadow" role="alert">
                    <div class="row">
                        <div class="col-2">
                            <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-award" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z"/>
                                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                            </svg>
                        </div>
                        <div class="col-10 my-auto">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="True" style="color:#fff">&times;</span>
                            </button>
                            <h4 class="alert-heading-gradient">Dear Visitors</h4>
                            <p class="lead mb-0">{{$message}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
</body>
</html>
