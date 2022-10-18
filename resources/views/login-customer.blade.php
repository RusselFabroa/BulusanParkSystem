<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulusan Park</title>
    <link rel="icon" href='/img/logotitle.png' type="image/icon type">
{{--    <link rel="stylesheet" href="/css/login.css">--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet"/>





    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link  href="{{asset('assets/frontend/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/frontend/loginform/style.css')}}">

    <style>
        .form input[type=email]{
            border: 1px solid rgba(0,0,0,0.42);
        }
        body{
            background-image: url('/img/bg4.jpg');
            background-size: cover;

            background-repeat: no-repeat;
            /*opacity: 0.6;*/

        }

    </style>
</head>
<body>
@include('flash-message')
<!--    <form method="get" class="mx-auto bg-white" action="{{ route('user.check') }}">
        <h5 class="text-center">User  |  <a href="/admin/loginadmin">Admin</a></h5>
        <h3>Welcome and Enjoy!</h3>
        @include('flash-message')

        <div class="d-flex flex-row align-items-center mb-2">
            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
            <div class="form-inline flex-fill mb-0">
                <label class="form-label" for="form3Example3c">Your Email</label>
                <input type="email" id="form3Example3c" name="email" class="form-control" value="
                              @if (session::has('verifiedEmail'))
                                    {{session::get('verifiedEmail')
                                        }}@endif">
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
        <br>
        <div>
            <button type="submit" class="btn btn-primary btn-lg">Login</button>
        </div>
        <a class="text-center" href="/user/register-customer" style=font-size:15px;  >Doesn't have an account? Please Register!</a>
    </form>-->
    <section class="ftco-section shadow">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb">
                    <h2 class="heading-section"></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5 col-lg-5 ">
                    <div class="wrap" style="box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;">
                        <div class="img" style="background-image: url(/img/loginbg.jpg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">

                                <div class="w-100">
                                    <h3 class="mb-4">Login</h3>
                                </div>

                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a style="background-color: #01d28e; color: #8a6d3b;" class="social-icon d-flex align-items-center justify-content-center active"><span class="fa-regular fa-user pe-1"></span>User</a>
                                        <a href="/admin/loginadmin" style="color: #8a6d3b" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-lock pe-1"></span>Admin</a>
                                    </p>
                                </div>
                            </div>
                            <form action="{{ route('user.check') }}" method="get" class="signin-form">
                                <div class="form-group mt-3">
                                    <input type="text" name="email" class="form-control" value="
                                    @if (session::has('verifiedEmail'))
                                        {{session::get('verifiedEmail')
                                            }}@endif">
                                    <label class="form-control-placeholder" for="email">Email</label>

                                    <span style="font-size: 15px" class="text-danger">@error('email'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" name="password" class="form-control" value="{{old('password')}}" required>
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <span style="font-size: 15px" class="text-danger">@error('password'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Not a member? <a  href="/user/register-customer">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('assets/frontend/loginform/jquery.min.js')}}"></script>
    <script src="{{asset('assets/frontend/loginform/popper.js')}}"></script>
    <script src="{{asset('assets/frontend/loginform/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/frontend/loginform/main.js')}}"></script>


</body>
</html>
