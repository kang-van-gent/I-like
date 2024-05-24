@extends('client')
@section('contents')
<!--RD Navbar-->
<header class="section rd-navbar-wrap" data-preset='{"title":"Navbar Default","category":"header","reload":true,"id":"navbar-default"}'>
  <nav class="rd-navbar">
    <div class="navbar-container">
      <div class="navbar-cell">
        <div class="navbar-panel">
          <button class="navbar-switch int-hamburger novi-icon" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","isolate":"[data-multi-switch]"}'></button>
          <div class="navbar-logo">
            <a class="navbar-logo-link" href="index.html">
              <img class="lazy-img navbar-logo-default" data-src="images/logo-gainlike.png" alt="Gainlike" width="117" height="30">
            </a>
          </div>
        </div>
      </div>
      <div class="navbar-cell navbar-spacer"></div>
      <div class="navbar-cell navbar-sidebar">
        <ul class="navbar-navigation rd-navbar-nav">
          <li class="navbar-navigation-root-item "><a class="navbar-navigation-root-link" href="/">หน้าหลัก</a>
          </li>

          <li class="navbar-navigation-root-item active"><a class="navbar-navigation-root-link" href="/blogs">บทความ</a>
          </li>


          <div class="navbar-cell">
            <div class="navbar-subpanel">

              <div class="navbar-subpanel-item">
                <button class="navbar-button navbar-info-button mdi-dots-vertical novi-icon" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-info-active","isolate":"[data-multi-switch]"}'></button>

                <div class="navbar-info">

                  @if(Session::has('user'))
                  <a class="btn btn btn-secondary navbar-action-button" href="/dashboard">
                    <div class="icon-box-icon novi-icon int-user"></div>
                  </a>
                  @else
                  <a class="btn btn-primary navbar-action-button" href="/login">
                    <div class="icon-box-icon novi-icon mdi-login"> เข้าสู่ระบบ</div>
                  </a>

                  <a class="btn btn-secondary navbar-action-button" href="/register">
                    <div class="icon-box-icon novi-icon mdi-account-plus"> สมัครสมาชิก</div>
                  </a>
                  @endif


                </div>

              </div>
            </div>
          </div>

          @if(Session::has('user'))
          <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="/logout">
              <div class="icon-box-icon novi-icon mdi-login"> ออกจากระบบ</div>
            </a>
          </li>
          @endif


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

      <!-- Connect to database using images  -->
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

      <!-- Paginations -->
      <!-- <div class="col-12">
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
      </div> -->
    </div>
  </div>
</section>
@endsection


<!--  optimizable 1 blog has many paragraphs 1 paragraph that include images
collection construct :
-- blogs
    blogId -- int 11,
    coverImage -- file,
    details -- text,
    category -- varchar 200,
    ref -- text,
    createdAt -- Timestamp 

-- paragraphs
    paraId -- int 11,
    details -- text,
    image -- file,
    blogId -- int 11,
-->