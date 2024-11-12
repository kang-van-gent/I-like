<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gain-Like</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

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
    <script src="{{asset('components/base/core.js')}}" defer></script>
    <script src="{{asset('components/base/script.js')}}" defer></script>
    <script src="{{asset('components/base/bootstrap.min.js')}}" defer></script>
    <script src="{{asset('components/base/popper.js')}}" defer></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>


    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1258849958481539');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1258849958481539&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->


</head>

<body>
    <div class="page">


        @include('header.clientheader')
        <script src="https://static.elfsight.com/platform/platform.js" async></script>
        <div class="elfsight-app-05dfd155-aa3b-4df7-bad9-8a9b2c5e5e7a" data-elfsight-app-lazy></div>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>


</html>