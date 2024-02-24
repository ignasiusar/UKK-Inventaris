<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Core CSS -->
<link rel="stylesheet" href="{{asset('asset/sneat-1.0.0/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('asset/sneat-1.0.0/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('asset/sneat-1.0.0/assets/css/demo.css')}}" />
    <!-- Bootstrap CSS
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="{{asset('asset/1style.css')}}">
    <!-- Fonts --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <title>Login</title>
    <link rel="icon" href="{{asset('asset/img/key.svg')}}">
  </head>
  <body>
    
  <form method="POST" action="{{ route('login') }}">
   @csrf
  <section class="login d-flex">
    <div class="login-left  w-50 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-6">
        <div class="header">
        <h1>Welcome Back!</h1>
        <p> Please Enter your credentials. </p>
    </div>
    <div class="login-form">
      <form action="function.php" method="post">
        
      <label for="username" class="form-label" >Username</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

  <label for="password" class="form-label">Password</label>
  <input type="password" class="form-control" name="password" placeholder="Enter your password">
  <a href="{{ route('password.request') }}" class="text-decoration-none text-center">Forgot Password</a>
  <button class="signin" name="login" type="submit">Log In</button>

<div class="text-center">
  <span> Don't have an account ? <a href="{{ route('register') }}" class=" d-inline text-decoration-none" style="color: #0080C0;"> Sign Up Here.</a> </span>
</div>
  </div>
        </div>
      </div>
</div>
    <div class="login-right w-50 h-100">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('asset/img/1.svg')}}"class="d-block w-100" alt="...">
    </div>
  </div>
</div>
    </div>
  </section>
      </form>
  </body>
</html>