<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulusan Park</title>
    <link rel="icon" href='/img/logotitle.png' type="image/icon type">
    <link rel="stylesheet" href="/css/login.css">
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
</head>
<body>

<div class="login-form">
  <div class="hdr">
      <h1>Bulusan Park - Customer</h1>
  </div>

  <div class="form-container2">
      <div class="bg-form">
  <form method="get" action="{{ route('user.loginuser') }}">


        <h3>Welcome and Enjoy!</h3>
      @include('flash-message')
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
<br>
      <div>
          <button type="submit" class="btn btn-primary btn-lg">Login</button>
      </div>
        <a href="/registercustomer" style=font-size:14px;  >Doesn't have an account? Please Register!</a>
    </form>

      </div>
</div>
</div>

</body>
</html>
