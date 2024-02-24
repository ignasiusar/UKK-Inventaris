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

    <title>Register</title>
    <<link rel="icon" href="{{asset('asset/img/key.svg')}}">
  </head>
  <body>
    
  <form method="POST" action="{{ route('register') }}">
   @csrf
  <section class="login d-flex">
    <div class="login-left  w-50 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-6">
        <div class="header">
        <h1>Hey!</h1>
        <p> Let Us Know About You! </p>
    </div>
    <div class="login-form">
      
    <div class="row mb-3">
     <label for="name" class="form-label">{{ __('Name') }}</label>

      <div class="col-md-12">
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your Full Name..">
         @error('name')
       <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
          @enderror
       </div>
      </div>
        
      <div class="row mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your Password">
                            </div>
                        </div>

                        <input type="checkbox" id="agreeCheckbox" required>
<label for="agreeCheckbox"><a href="#" data-toggle="modal" data-target="#termsModal">Terms and Conditions</a></label>

<!-- Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="termsModalLabel" style="color: #0080C0;">Terms and Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <p><strong>Syarat dan Ketentuan Penggunaan Aplikasi Inventaris Sekolah SMK Telekomunikasi Tunas Harapan</strong></p>
    <p><strong>1. Penggunaan Aplikasi</strong></p>
    <p>1.1. Aplikasi ini dimaksudkan untuk digunakan oleh staf, siswa, dan pihak yang berwenang dari SMK Telekomunikasi Tunas Harapan.</p>
    <p>1.2. Pengguna bertanggung jawab atas keamanan akun dan informasi login mereka sendiri. Setiap aktivitas yang terjadi di bawah akun pengguna menjadi tanggung jawab pengguna.</p>
    <p><strong>2. Data dan Privasi</strong></p>
    <p>2.1. Data yang diinputkan ke dalam Aplikasi harus akurat dan tidak menyesatkan.</p>
    <p>2.2. SMK Telekomunikasi Tunas Harapan akan menjaga privasi pengguna dan merahasiakan informasi pribadi sesuai dengan Kebijakan Privasi yang terpisah.</p>
    <p><strong>3. Tanggung Jawab Pengguna</strong></p>
    <p>3.1. Pengguna bertanggung jawab atas semua kegiatan yang terkait dengan penggunaan Aplikasi.</p>
    <p>3.2. Pengguna tidak diperbolehkan melakukan tindakan yang dapat merusak Aplikasi atau mengganggu penggunaan oleh pihak lain.</p>
    <p><strong>4. Hak Kekayaan Intelektual</strong></p>
    <p>4.1. Seluruh hak kekayaan intelektual terkait Aplikasi ini, termasuk tetapi tidak terbatas pada desain, logo, dan konten, tetap menjadi milik SMK Telekomunikasi Tunas Harapan.</p>
    <p>4.2. Pengguna tidak diberikan hak untuk menggunakan, menyalin, atau mendistribusikan materi dalam Aplikasi tanpa izin tertulis dari SMK Telekomunikasi Tunas Harapan.</p>
    <p><strong>5. Pembatasan dan Perubahan Layanan</strong></p>
    <p>5.1. SMK Telekomunikasi Tunas Harapan berhak untuk membatasi atau menghentikan layanan Aplikasi ini tanpa pemberitahuan sebelumnya.</p>
    <p>5.2. Perubahan pada Aplikasi, termasuk pembaruan dan peningkatan, dapat dilakukan kapan saja tanpa pemberitahuan sebelumnya.</p>
    <p><strong>6. Penggunaan Informasi dan Laporan</strong></p>
    <p>6.1. SMK Telekomunikasi Tunas Harapan berhak menggunakan informasi yang dikumpulkan dari Aplikasi untuk keperluan administrasi sekolah dan pembaruan inventaris.</p>
    <p>6.2. Pengguna dapat menerima laporan atau notifikasi dari Aplikasi terkait dengan inventaris dan penggunaan Aplikasi.</p>
    <p><strong>7. Perubahan Syarat dan Ketentuan</strong></p>
    <p>7.1. SMK Telekomunikasi Tunas Harapan berhak untuk mengubah syarat dan ketentuan ini tanpa pemberitahuan sebelumnya.</p>
    <p>7.2. Perubahan tersebut akan mulai berlaku pada tanggal diumumkan di dalam Aplikasi.</p>
    <p>Dengan menggunakan Aplikasi ini, Anda menyatakan bahwa Anda telah membaca, memahami, dan menyetujui syarat dan ketentuan ini. Jika Anda memiliki pertanyaan atau kekhawatiran, silakan hubungi admin Aplikasi. Terima kasih atas partisipasi dan pemahaman Anda.</p>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
      </div>
    </div>
  </div>
</div>

  <button class="signin mt-2" name="login" type="submit">Log In</button>

<div class="text-center">
  <span> have an account ? <a href="{{ route('login') }}" class=" d-inline text-decoration-none" style="color: #0080C0;"> Sign In Here.</a> </span>
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
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (memerlukan jQuery) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
  </body>
</html>