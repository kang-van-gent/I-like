<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gain-Like</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self';"> -->

    <!-- Link Thumbnail -->
    <meta property="og:title" content="Gain Like-Services">
    <meta property="og:description" content="Official Website ของผู้ให้บริการการเพิ่มผู้ติดตามและการเพิ่มไลก์ระดับประเทศ">
    <meta property="og:image" content="https://gainlike-service.com/images/banners/message.jpg">
    <meta property="og:url" content="https://gainlike-service.com/">
    <meta property="og:type" content="website">
    <meta name="facebook-domain-verification" content="iv7cdbiivu4kdwxyb74ur5ozqygqmo" />

    <!-- Preload and Link CSS and JS -->
    <link rel="preload" href="{{asset('components/base/base.css')}}" as="style">
    <link rel="preload" href="{{asset('components/base/core.js')}}" as="script">
    <link rel="preload" href="{{asset('components/base/script.js')}}" as="script">
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('components/base/base.css')}}">
    <script src="{{ asset('components/base/core.js') }}" defer></script>
    <script src="{{ asset('components/base/script.js') }}" defer></script>
    <script src="{{asset('components/base/bootstrap.min.js')}}" defer></script>
    <!-- <script src="{{asset('components/base/popper.js')}}" defer></script> -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <!-- Include Bootstrap CSS -->
    <!-- Include Bootstrap and Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>



<body>
    <div class="page">


        @include('header.clientheader')

        @yield('contents')

        @include('footer.clientfooter')


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



</body>


</html>