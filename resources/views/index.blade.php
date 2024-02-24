<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Harvin - Inventaris SMK TTH</title>
<!-- Core CSS -->
<link rel="stylesheet" href="{{asset('asset/sneat-1.0.0/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('asset/sneat-1.0.0/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('asset/sneat-1.0.0/assets/css/demo.css')}}" />

   <!-- Helpers -->
   <script src="{{asset('asset/sneat-1.0.0/assets/vendor/js/helpers.js')}}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{asset('asset/sneat-1.0.0/assets/js/config.js')}}"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <link rel="icon" href="{{asset('asset/img/2.svg')}}">
  <style>
    /* Custom CSS styling */
    body {
      font-family: Arial, sans-serif;
      background-color: #c8d1da;
      overflow: hidden;
    }

    .jumbotron {
      background-image: url('asset/img/c553b587681cf4d8c457b11b004002d1773e2955_s2_n2_y2.jpg');
      background-size:cover;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: transparent;
      position: relative;
    }

    .jumbotron .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Set opacity to 50% */
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .jumbotron h1 {
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 20px;
      color: #ffffff;
      opacity: 0;
      animation: fade-in 1s forwards;
      animation-delay: 1s;
    }

    .jumbotron p {
      font-size: 24px;
      margin-bottom: 40px;
      color: #ffffff;
      opacity: 0;
      animation: fade-in 1s forwards;
      animation-delay: 2s;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      opacity: 0;
      animation: fade-in 1s forwards;
      animation-delay: 3s;
    }

    @keyframes fade-in {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <div class="jumbotron">
    <div class="overlay">
      <div class="container">
        <h1>Welcome To Harvin</h1>
        <p>Aplikasi Inventaris SMK Telekomunikasi Tunas Harapan.</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Mulai Sekarang</a>
        <!-- <form method="POST" action="{{ route('login') }}"> -->
    @csrf
      </div>
    </div>
  </div>
</body>
</html>