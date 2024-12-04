<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login PT KURIR Terdepan</title>
  <link rel="stylesheet" href="{{asset('css/css.css')}}">
</head>
<body>
  
  <!-- Selamat Datang -->
  <div class="container">
    <div class="phone">
      <div class="notch"></div>
      <div class="screen welcome-screen">
        <div class="welcome-content">
                                                         
          <img src="{{asset("ICON.png")}}" alt="Welcome Image" class="welcome-image">
          <h1>Selamat Datang di PT Kurir Terdepan</h1>
          <p>Kelola Administrasi dan Operasional dengan Mudah dan Cepat"</p>
          <button class="btn create-btn" href="/">Create an account</button>
        </div>
      </div>
    </div>

    <!-- Login Admin -->
    <div class="phone">
      <div class="notch"></div>
      <div class="screen signin-screen">
        <div class="signin-content">
            <img src="{{asset("host.png")}}" alt="Welcome Image" class="admin-image">
          <h1>Sign in Administrasi</h1>
          <p>Selamat Datang di Sistem Administrasi PT Kurir Terdepan. Silakan masuk untuk melanjutkan pengelolaan data dan aktivitas administrasi Anda.</p>
          @if ($errors->any())
            <div style="color: red;">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div>
          @endif

          <form action="/login" method="POST">
            @csrf
            <input type="text" placeholder="Username or email" class="input-field">
            <input type="password" placeholder="Password" class="input-field">
            <button type="submit" class="btn signin-btn">Sign in</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Login Karyawan -->
    <div class="phone">
      <div class="notch"></div>
      <div class="screen signin-screen">
        <div class="signin-content">
            <img src="{{asset("kurir.png")}}" alt="Welcome Image" class="admin-image">
          <h1>Sign in Karyawan </h1>
          <p>Selamat Datang di Portal Karyawan PT Kurir Terdepan. Silakan masuk untuk mengakses informasi dan tugas Anda.</p>
          <form>
            <input type="text" placeholder="Username or email" class="input-field">
            <input type="password" placeholder="Password" class="input-field">
            <button type="submit" class="btn signin-btn">Sign in</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>