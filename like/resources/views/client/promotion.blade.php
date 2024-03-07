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
          <li class="navbar-navigation-root-item active"><a class="navbar-navigation-root-link" href="/promotions">โปรโมชั่น</a>
          </li>
          <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="/blogs">บทความ</a>
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

<!-- Table type #2-->
<section class=" section section-lg bg-invisible novi-background" data-preset='{"title":"Table Sample","category":"table, content box","reload":true,"id":"table-sample-2"}'>
  <div class="container post post-boxed">

    <div class="row row-15 service-section-row justify-content-between align-items-center">
      <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="form-group">
          <div class="select-wrap">
            <select class="select2-original" id="simple-select" name="country">
              <option>USA</option>
              <option>UK</option>
              <option>Ukraine</option>
              <option>Australia</option>
              <option>Korea</option>
              <option>Japan</option>
              <option>Germany</option>
              <option>Belarus</option>
              <option>Poland</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-6">
        <form class="form-inline group-15 novi-disabled" action="search-results.html" method="GET" data-rd-search='{"output":".rd-search-results","mode":"submit"}'>
          <div class="form-inline-group">
            <input class="form-control" type="text" placeholder="กรอกคำค้นหา" autocomplete="off" name="s">
          </div>
          <button class="btn btn-lg btn-primary">ค้นหา</button>
        </form>
      </div>
    </div>
  </div>
  <div class="row ">
    <div class="col-10  container mt-2">
      <div class="table-responsive post post-boxed">

        <table class="cols table table-striped table-modern">
          <thead>
            <tr>
              <th class="text-center" style="min-width: 50px; width: 5.5%">
                <div class="icon icon-xs int-sort-up novi-icon"></div>
              </th>
              <th style="min-width: 280px; width: 40.3%">บริการ</th>
              <th style="min-width: 70px; width: 15%" class="text-center">เรทราคา</th>
              <th class="text-center" style="min-width: 70px; width: 13%">ขั้นต่ำ</th>
              <th class="text-center" style="min-width: 70px; width: 13%">สูงสุด</th>
              <th class="text-center" style="min-width: 70px; width: 13%">เวลาเฉลี่ย</th>
              <th class="text-center" style="min-width: 70px; width: 13%">คำอธิบาย</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>
            <tr>
              <td class="text-center">#1</td>
              <td><a href="#">Douglas Ross</a></td>
              <td>50.00 ฿ ต่อ 1000</td>
              <td class="text-center">
                100
              </td>
              <td class="text-center">
                200000000
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                <button class="btn btn-lg btn-secondary">เพิ่มเติม</button>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>



</section>


@endsection