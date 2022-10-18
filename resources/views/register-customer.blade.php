<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bulusan Park</title>

    <link rel="icon" href='/img/logotitle.png' type="image/icon type">
{{--    <link rel="stylesheet" href="css/register.css">--}}
{{--    <link rel="stylesheet" href="css/regstyle.css">--}}
    <link  href="{{asset('assets/frontend/css/regstyle.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
        rel="stylesheet"
    />
    <style>
        body{
            background-image: url('/img/bg1.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

    </style>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<!--

    <section class="vh-100">
        @include('flash-message')

        <div class="container h-80">
            <div class="row d-flex justify-content-center align-items-center h-80">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-8">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form class="mx-1 mx-md-4" method="POST" action="{{ route('user.create.user') }}" autocomplete="off">
                                        @csrf
                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-inline flex-fill mb-1">
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                                <input type="text" id="form3Example1c" name="name" class="form-control" value="{{old('name')}}" />
                                                <span style="font-size: 15px" class="text-danger">@error('name'){{$message}}@enderror</span>


                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-inline flex-fill mb-0">
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                                <input type="email" id="form3Example3c" name="email" class="form-control" value="{{old('email')}}"/>
                                                <span style="font-size: 15px" class="text-danger">@error('email'){{$message}}@enderror</span>
                                            </div>
                                        </div>


                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-inline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4c">Password</label>
                                                <input type="password" id="form3Example4c" name="password" value="{{old('password')}}" class="form-control" />
                                                <span style="font-size: 15px" class="text-danger">@error('password'){{$message}}@enderror</span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-inline flex-fill mb-0">
                                                <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                                <input type="password" id="form3Example4cd" name="cpassword" class="form-control" value="{{old('cpassword')}}" />
                                                <span style="font-size: 15px" class="text-danger">@error('cpassword'){{$message}}@enderror</span>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                        </div>
                                    </form>

                                    <a href="/user/login-customer">
                                        <h5 class="text-center" style="font-size: 15px;">Already have account? Login</h5>
                                    </a>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="{{ asset('/img/logotitle.png') }}" class="img-responsive center ms-3" alt="Sample image">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


-->


<!------ Include the above in your HEAD tag ---------->

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="{{ asset('/img/logotitle.png') }}" style="width: 130px;" alt="logo"/>
            <h3>Welcome</h3>
            <p>Calapan Nature and Zoological Park</p>

            <h6> Already have an account? <br> <a class="btn btn-primary" href="/user/login-customer" style="margin-top: 15px; width: 200px;">Login</a></h6>
        </div>
        <div class="col-md-9 register-right">

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Create an Account</h3>
                    @include('flash-message')
                    <form class="mx-1 mx-md-4" method="POST" action="{{ route('user.create.user') }}" autocomplete="off">
                        @csrf


                        <div class="row register-form">

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{old('name')}}"/>
                                <span style="font-size: 15px" class="text-danger">@error('name'){{$message}}@enderror</span>

                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="Password"  />
                                <span style="font-size: 15px" class="text-danger">@error('password'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="cpassword" value="{{old('cpassword')}}" placeholder="Confirm Password" value="" />
                                <span style="font-size: 15px" class="text-danger">@error('cpassword'){{$message}}@enderror</span>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email" name="email" value="{{old('email')}}" />
                                <span style="font-size: 15px" class="text-danger">@error('email'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <input type="text" minlength="11" maxlength="11" name="phone_number" class="form-control" placeholder="Phone Number: *09123456453"  />
                                <span style="font-size: 15px" class="text-danger">@error('phone_number'){{$message}}@enderror</span>
                            </div>
                            <button type="submit" class="btnRegister">SignUp</button>
                        </div>
                    </div>
                    </form>

                </div>

                </div>

            </div>

        </div>
    </div>


<script src="{{asset('assets/frontend/js/main.js')}}"></script>
<script src="{{asset('assets/frontend/vendor/jquery/jquery.min.js')}}"></script>

</body>
</html>
