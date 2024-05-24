<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gain-Like</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Link Thimbnail -->
    <meta property="og:title" content="ARSD-SOCIAL">
    <meta property="og:description" content="Official Wecsite ของผู้ให้บริการการเพิ่มผู้ติดตามและการเพิ่มไลค์ระดับประเทศ">
    <meta property="og:image" content="/images/banners/banner-01-620x360.png">
    <meta property="og:url" content="https://gainlike-service.com/">

    <link rel="preload" href="/components/base/base.css" as="style">
    <link rel="preload" href="/components/base/core.js" as="script">
    <link rel="preload" href="/components/base/script.js" as="script">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/components/base/base.css">
    <script src="/components/base/core.js"></script>
    <script src="/components/base/script.js"></script>



</head>

<body>
    <div class="page">

        @yield('contents')

        <!-- Footer default extended-->
        <footer class="section footer bg-800 text-400 context-dark pended-element novi-background" data-preset='{"title":"Footer Extended","category":"footer","reload":true,"id":"footer-extended"}'>
            <div class="container">
                <div class="row row-30 justify-content-xxl-between novi-disabled">
                    <div class="col-lg-5">
                        <!-- Logo-->
                        <div><a class="logo-link" href="index.html"><img src="images/gain-like-inverse.png" alt="Gainlike" width="200" height="50"></a></div>
                        <p class="small">Get the most for your website with Intense Multipurpose Website Template, valued by over
                            3,000 customers worldwide. With a great number of pages, components, elements, and blocks, this responsive
                            Bootstrap template is definitely worth your attention.</p>
                    </div>
                    <div class="col-md-11 col-lg-7 col-xxl-6">
                        <p class="small">178 West 27th Street, Suite 527, New York NY 10012, United States</p>
                        <div class="row row-20 novi-disabled">
                            <div class="col-auto col-sm-4">
                                <div class="media media-xxs text-white">
                                    <div class="media-left"><span class="icon icon-xs int-phone novi-icon"></span></div>
                                    <div class="media-body">
                                        <ul class="list list-contact">
                                            <li class="list-contact-item"><a class="list-contact-link" href="tel:#">+1 234 567 8901</a></li>
                                            <li class="list-contact-item"><a class="list-contact-link" href="tel:#">+1 234 567 8902</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto col-sm-4">
                                <ul class="list list-xs small">
                                    <li class="list-item">Mon-Fri: 8am - 6pm</li>
                                    <li class="list-item">Sat-Sun: 8am - 4pm</li>
                                    <li class="list-item">Holidays: closed</li>
                                </ul>
                            </div>
                            <div class="col-auto col-sm-4">
                                <ul class="list list-lg small text-white">
                                    <li class="list-item"><a class="link link-contrast link-secondary" href="mailto:#">mail@example.com</a></li>
                                    <li class="list-item"><a class="link link-contrast link-secondary" href="mailto:#">info@example.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider footer-divider"></div>
                <div class="row row-15 align-items-center justify-content-between footer-panel novi-disabled">
                    <div class="col-auto">
                        <!-- Copyright-->
                        <p class="rights"><span>&copy; 2023&nbsp;</span><span>Intense</span><span>. All rights
                                reserved.&nbsp;</span><a class="rights-link" href="privacy-policy.html">Privacy Policy</a></p>
                    </div>
                    <div class="col-auto">
                        <div class="group-30 d-flex align-items-center text-white"><a class="icon icon-xs icon-social int-youtube novi-icon" href="#"></a><a class="icon icon-xs icon-social int-facebook novi-icon" href="#"></a><a class="icon icon-xs icon-social int-instagram novi-icon" href="#"></a><a class="icon icon-xs icon-social int-twitter novi-icon" href="#"></a><a class="icon icon-xs icon-social int-linkedin novi-icon" href="#"></a></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Page Loader-->
    <div class="page-loader bg-gradient-animated">
        <svg class="page-loader-progress" x="0px" y="0px" width="180" height="180" viewBox="0 0 180 180">
            <circle class="page-loader-circle" cx="90" cy="90" r="88"></circle>
        </svg>
        <div class="page-loader-inner">
            <div class="page-loader-inner-side page-loader-inner-side-1"><img class="pended-img page-loader-logo" data-src="images/logo-gainlike.png" alt="" data-target=".page-loader-inner">
            </div>
            <div class="page-loader-inner-side page-loader-inner-side-2">กำลังโหลด...</div>
        </div>
    </div>
    <div class="notifications-area" id="notifications-area"></div>
</body>

</html>