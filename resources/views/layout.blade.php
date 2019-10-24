<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.11.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{url('/')}}/assets/images/uin-sunan-gunung-djati-122x92.png" type="image/x-icon">
  <meta name="description" content="@yield('description','Profil Dosen Pascasarjana Universitas Islam Negeri Sunan Gunung Djati Bandung')">
  
  <title>@yield('title') - UIN Sunan Gunung Djati Bandung</title>
  <link rel="stylesheet" href="{{url('/')}}/assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/dropdown/css/style.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/tether/tether.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/assets/theme/css/style.css">
  <link rel="preload" as="style" href="{{url('/')}}/assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="{{url('/')}}/assets/mobirise/css/mbr-additional.css" type="text/css">
  
</head>
<body>
  <section class="menu cid-rFvsj5ybMs" once="menu" id="menu1-7">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="{{url('/')}}">
                         <img src="{{url(CRUDBooster::getSetting('logo'))}}" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="{{url('/')}}">PASCASARJANA</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{url('/')}}">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="{{url('/#CariDosen')}}">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        Cari Dosen
                    </a>
                </li></ul>
            
        </div>
    </nav>
</section>
@yield('content')
<section once="footers" class="cid-rFvuuIVvkz" id="footer6-8">
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2019 Pascasarjana UIN SGD Bandung- All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="{{url('/')}}/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="{{url('/')}}/assets/popper/popper.min.js"></script>
  <script src="{{url('/')}}/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{url('/')}}/assets/smoothscroll/smooth-scroll.js"></script>
  <script src="{{url('/')}}/assets/dropdown/js/nav-dropdown.js"></script>
  <script src="{{url('/')}}/assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="{{url('/')}}/assets/tether/tether.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{url('/')}}/assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="{{url('/')}}/assets/parallax/jarallax.min.js"></script>
  <script src="{{url('/')}}/assets/mbr-tabs/mbr-tabs.js"></script>
  <script src="{{url('/')}}/assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="{{url('/')}}/assets/theme/js/script.js"></script>
  
  <script>
    $(document).ready(function() {
    $('.table').DataTable();
    } );
    @yield('script'."")
 </script>

 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>