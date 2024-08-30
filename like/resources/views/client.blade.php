<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gain-Like</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Link Thumbnail -->
    <meta property="og:title" content="ARSD-SOCIAL">
    <meta property="og:description" content="Official Website ของผู้ให้บริการการเพิ่มผู้ติดตามและการเพิ่มไลค์ระดับประเทศ">
    <meta property="og:image" content="{{asset('images/banners/banner-01-620x360.png')}}">
    <meta property="og:url" content="https://gainlike-service.com/">

    <!-- Preload and Link CSS and JS -->
    <link rel="preload" href="{{asset('components/base/base.css')}}" as="style">
    <link rel="preload" href="{{asset('components/base/core.js')}}" as="script">
    <link rel="preload" href="{{asset('components/base/script.js')}}" as="script">
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('components/base/base.css')}}">
    <script src="{{asset('components/base/core.js')}}" defer></script>
    <script src="{{asset('components/base/script.js')}}" defer></script>
    <script src="{{asset('components/base/bootstrap.min.js')}}" defer></script>
    <script src="{{asset('components/base/popper.js')}}" defer></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>





</head>

<body>
    <div class="page">


        @include('header.clientheader')
        @yield('contents')




    </div>
    <!-- Page Loader-->
    <div class="page-loader bg-gradient-animated">
        <svg class="page-loader-progress" x="0px" y="0px" width="180" height="180" viewBox="0 0 180 180">
            <circle class="page-loader-circle" cx="90" cy="90" r="88"></circle>
        </svg>
        <div class="page-loader-inner">
            <div class="page-loader-inner-side page-loader-inner-side-1"><img class="pended-img page-loader-logo" data-src="{{asset('images/logo-gainlike.png')}}" alt="" data-target=".page-loader-inner">
            </div>
            <div class="page-loader-inner-side page-loader-inner-side-2">กำลังโหลด...</div>
        </div>
    </div>
    <div class="notifications-area" id="notifications-area"></div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>


</html>