<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gain-Like</title>
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">

    <!-- Link Thumbnail -->
    <meta property="og:title" content="Gain Like-Services">
    <meta property="og:description" content="Official Website ของผู้ให้บริการการเพิ่มผู้ติดตามและการเพิ่มไลก์ระดับประเทศ">
    <meta property="og:image" content="https://gainlike-service.com/images/banners/message.jpg">
    <meta property="og:url" content="https://gainlike-service.com/">
    <meta property="og:type" content="website">
    <meta name="facebook-domain-verification" content="iv7cdbiivu4kdwxyb74ur5ozqygqmo" />

    <link rel="stylesheet" href="/src/assets/css/styles.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Line+Seed:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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


    @include('header.adminheader')
    @yield('contents')
    @include('footer.adminfooter')

    <script src="https://static.elfsight.com/platform/platform.js" async></script>
    <div class="elfsight-app-05dfd155-aa3b-4df7-bad9-8a9b2c5e5e7a" data-elfsight-app-lazy></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/src/assets/js/sidebarmenu.js"></script>
    <script src="/src/assets/js/app.min.js"></script>
    <script src="/src/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="/src/assets/libs/simplebar/dist/simplebar.js"></script>
    <!-- <script src="/src/assets/js/dashboard.js"></script> -->
</body>

</html>