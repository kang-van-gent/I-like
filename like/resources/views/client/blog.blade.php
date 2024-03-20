@extends('client')
@section('contents')
<!--RD Navbar-->
<header class="section rd-navbar-wrap" data-preset='{"title":"Navbar Default","category":"header","reload":true,"id":"navbar-default"}'>
  <nav class="rd-navbar">
    <div class="navbar-container">
      <div class="navbar-cell">
        <div class="navbar-panel">
          <button class="navbar-switch int-hamburger novi-icon" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","isolate":"[data-multi-switch]"}'></button>
          <div class="navbar-logo"><a class="navbar-logo-link" href="index.html"><img class="lazy-img navbar-logo-default" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="images/logo-default-114x27.svg" alt="Intense" width="114" height="27"><img class="lazy-img navbar-logo-inverse" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="images/logo-inverse-114x27.svg" alt="Intense" width="114" height="27"></a></div>
        </div>
      </div>
      <div class="navbar-cell navbar-spacer"></div>
      <div class="navbar-cell navbar-sidebar">
        <ul class="navbar-navigation rd-navbar-nav">
          <li class="navbar-navigation-root-item "><a class="navbar-navigation-root-link" href="/">หน้าหลัก</a>
          </li>
          <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="/promotions">โปรโมชั่น</a>
          </li>
          <li class="navbar-navigation-root-item active"><a class="navbar-navigation-root-link" href="/blogs">บทความ</a>
          </li>
          <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="/developer">API นักพัฒนา</a>
          </li>


          <div class="navbar-cell">
            <div class="navbar-subpanel">

              <div class="navbar-subpanel-item">
                <button class="navbar-button navbar-info-button mdi-dots-vertical novi-icon" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-info-active","isolate":"[data-multi-switch]"}'></button>

                <div class="navbar-info">

                  <a class="btn btn-primary navbar-action-button" href="/login">เข้าสู่ระบบ</a>

                  <a class="btn btn-secondary navbar-action-button" href="/register">สมัครสมาชิก</a>

                </div>

              </div>
            </div>
          </div>


        </ul>
      </div>

    </div>
  </nav>
</header>

<!-- Hover layout 3 columns-->
<section class="section section-lg bg-invisible novi-background" data-preset='{"title":"Blog Hovered","category":"blog","reload":true,"id":"blog-hovered-2"}'>
  <div class="container">
    <h1 class="text-center">บทความ</h1>
    <div class="row row-40 row-md-60">
      <div class="col-md-6 col-lg-4">
        <!-- Post hover-->
        <div class="post post-hover post-sm">
          <div class="post-img-link"><a href="/post"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="images/image-09-400x257.jpg" alt="" width="400" height="257"></a>
          </div>
          <div class="post-inner">
            <h5 class="post-title"><a href="/post">Top 10 trends that change modern web design</a></h5>

            <div class="post-text">This year may bring us a lot of surprises as standards in web design change and we experience lots of new trends. You can take these trends in and decide if they...</div>
            <div class="post-meta post-meta-between">
              <div class="post-meta-item"><a class="btn btn-secondary" href="/post">อ่านต่อ</a></div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <!-- Post hover-->
        <div class="post post-hover post-sm">
          <div class="post-img-link"><a href="/post"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="images/image-05-400x257.jpg" alt="" width="400" height="257"></a>
          </div>
          <div class="post-inner">
            <h5 class="post-title"><a href="/post">15 impressive examples of one-page website design</a></h5>

            <div class="post-text">Nowadays, designing a landing page is way more difficult. The only challenge you face is getting all the necessary information on a single page. To help...</div>
            <div class="post-meta post-meta-between">
              <div class="post-meta-item"><a class="btn btn-secondary" href="/post">อ่านต่อ</a></div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <!-- Post hover-->
        <div class="post post-hover post-sm">
          <div class="post-img-link"><a href="/post"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="images/image-08-400x257.jpg" alt="" width="400" height="257"></a>
          </div>
          <div class="post-inner">
            <h5 class="post-title"><a href="/post">Best examples of online portfolio by 10 designers</a></h5>

            <div class="post-text">Out of all of the creative people in the world, designers have a very clear vision of what their online portfolio should look like. Their line of work demands a site that...</div>
            <div class="post-meta post-meta-between">
              <div class="post-meta-item"><a class="btn btn-secondary" href="/post">อ่านต่อ</a></div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <!-- Post hover-->
        <div class="post post-hover post-sm">
          <div class="post-img-link"><a href="/post"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="images/image-06-400x257.jpg" alt="" width="400" height="257"></a>
          </div>
          <div class="post-inner">
            <h5 class="post-title"><a href="/post">5 design tips that will increase your conversions</a></h5>

            <div class="post-text">If you want to increase ROI from your website, you can go about it in two ways: increase traffic or increase conversions. It is much easier to increase conversions...</div>
            <div class="post-meta post-meta-between">
              <div class="post-meta-item"><a class="btn btn-secondary" href="/post">อ่านต่อ</a></div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <!-- Post hover-->
        <div class="post post-hover post-sm">
          <div class="post-img-link"><a href="/post"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="images/image-10-400x257.jpg" alt="" width="400" height="257"></a>
          </div>
          <div class="post-inner">
            <h5 class="post-title"><a href="/post">Different sides of the dark user interface in web design</a></h5>

            <div class="post-text">Dark design is and always will be a trend. The level of darkness will always vary, but basically, it’s really hard to screw up a simple, dark design. This is especially...</div>
            <div class="post-meta post-meta-between">
              <div class="post-meta-item"><a class="btn btn-secondary" href="/post">อ่านต่อ</a></div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <!-- Post hover-->
        <div class="post post-hover post-sm">
          <div class="post-img-link"><a href="/post"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="images/image-11-400x257.jpg" alt="" width="400" height="257"></a>
          </div>
          <div class="post-inner">
            <h5 class="post-title"><a href="/post">Designing accessible color systems</a></h5>

            <div class="post-text">Our team of developers and designers constantly explores ways of refining the color palette to make it more accessible and legible for users across all products...</div>
            <div class="post-meta post-meta-between">
              <div class="post-meta-item"><a class="btn btn-secondary" href="/post">อ่านต่อ</a></div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <ul class="pag pag-simple justify-content-center">
          <li class="pag-simple-item active"><a class="pag-simple-link" href="#">1</a>
          </li>
          <li class="pag-simple-item"><a class="pag-simple-link" href="#">2</a>
          </li>
          <li class="pag-simple-item"><a class="pag-simple-link" href="#">3</a>
          </li>
          <li class="pag-simple-item"><a class="pag-simple-link inactive" href="#">..</a>
          </li>
          <li class="pag-simple-item"><a class="pag-simple-link" href="#">24</a>
          </li>
          <li class="pag-simple-item"><a class="pag-simple-link pag-simple-link-next" href="#"><span>Next</span><span class="int-arrow-right novi-icon"></span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection