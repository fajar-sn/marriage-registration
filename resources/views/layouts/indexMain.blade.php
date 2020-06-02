<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title')</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  
  <!-- Bootstrap core CSS -->
  <link href={{ asset('css/bootstrap.css') }} rel="stylesheet">
  
  <!-- Material Design Bootstrap -->
  <link href={{ asset('css/mdb.min.css') }} rel="stylesheet">
  
  <!-- Your custom styles (optional) -->
  <link href={{ asset('css/style.min.css') }} rel="stylesheet">
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="{{ url('/') }}">
        <strong>SIMKAH</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/info-pendaftaran-nikah') }}">Info Pendaftaran Nikah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/pernikahan') }}">Pernikahan</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item mr-2">
            <a href="" class="nav-link border border-light rounded">
              Masuk
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  @yield('content')
  
  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 Copyright: By: Direktorat Jenderal Bimbingan Masyarakat Islam - Kementerian Agama Republik Indonesia - All Right Reserved
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript" src={{ asset('js/jquery-3.4.1.min.js') }}></script>
  
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src={{ asset('js/popper.min.js') }}></script>
  
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src={{ asset('js/bootstrap.min.js') }}></script>
  
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src={{ asset('js/mdb.min.js') }}></script>
  
  <!-- Initializations -->
  <script type="text/javascript">
    
    // Animations initialization
    new WOW().init();
  </script>
</body>
</html>
