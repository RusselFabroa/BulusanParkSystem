<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bulusan Park</title>

    <link rel="icon" href='/img/logotitle.png' type="image/icon type">
    <link rel="stylesheet" href="/css/adm-login.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500;688&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="login-form">
  <div class="hdr">
      <h1>Bulusan Park - Admin</h1>
  </div>

  <div class="form-container2">

      <form style="height: auto" method="get" action="{{ route('admin.loginadmin') }}">
          @include('flash-message')
          <h2>Login</h2>
          <h3>Please enter your valid email and password</h3>
          <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              <span style="font-size: 15px" class="text-danger">@error('email'){{$message}}@enderror</span>
          </div>
          <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
              <span style="font-size: 15px" class="text-danger">@error('password'){{$message}}@enderror</span>
          </div>

          <button type="submit" class="btn btn-primary">Login</button>
          <br>
          <a href="#"><u>Forgot password?</u></a>
    </form>





</div>

</div>
</body>
</html>
