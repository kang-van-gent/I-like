@extends('admin')
@section('contents')

<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
  <!-- Sidebar Start -->
  <aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="/" class="text-nowrap logo-img">
          <img class="lazy-img navbar-logo-default" src="images/logo-gainlike.png" alt="Gainlike" width="117" height="30">
        </a>

        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">เมนู</span>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link" href="/dashboard" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">แดชบอร์ด</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/services" aria-expanded="false">
              <span>
                <i class="ti ti-package"></i>
              </span>
              <span class="hide-menu">บริการของเรา</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/updates" aria-expanded="false">
              <span>
                <i class="ti ti-package-import"></i>
              </span>
              <span class="hide-menu">บริการอัพเดต</span>
            </a>
          </li>
          <!-- <li class="sidebar-item ">
            <a class="sidebar-link " href="/affiliates" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">แนะนำเพื่อน</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/child-panel" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">เช่าเว็บปั๊มไลค์แผงย่อย</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/pricing" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">
                เช่าเว็บปั๊มไลค์แผงหลัก
              </span>
            </a>
          </li> -->
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/blog" aria-expanded="false">
              <span>
                <i class="ti ti-notebook"></i>
              </span>
              <span class="hide-menu">บทความ</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/terms" aria-expanded="false">
              <span>
                <i class="ti ti-file-alert"></i>
              </span>
              <span class="hide-menu">นโยบาย</span>
            </a>
          </li>

          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">เลือกซื้อ</span>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/buys" aria-expanded="false">
              <span>
                <i class="ti ti-businessplan"></i>
              </span>
              <span class="hide-menu">เลือกซื้อ</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/massorder" aria-expanded="false">
              <span>
                <i class="ti ti-packages"></i>
              </span>
              <span class="hide-menu">เลือกซื้อหลายรายการ</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/addfunds" aria-expanded="false">
              <span>
                <i class="ti ti-coin-bitcoin"></i>
              </span>
              <span class="hide-menu">เติมเงิน</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">ประวัติการสั่งซื้อ</span>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/orders" aria-expanded="false">
              <span>
                <i class="ti ti-history"></i>
              </span>
              <span class="hide-menu">ประวัติการสั่งซื้อ</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/subscriptions" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">ประวัติการซื้อออโต้</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/drip-feed" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">ประวัติการสั่งซื้อแบ่งยอด</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/refill" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">ประวัติการเติมยอด</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">คำแนะนำ</span>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/faq" aria-expanded="false">
              <span>
                <i class="ti ti-zoom-question"></i>
              </span>
              <span class="hide-menu">คำถามที่พบบ่อย</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/howitworks" aria-expanded="false">
              <span>
                <i class="ti ti-info-square-rounded"></i>
              </span>
              <span class="hide-menu">วิธีการทำงาน</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/tickets" aria-expanded="false">
              <span>
                <i class="ti ti-ticket"></i>
              </span>
              <span class="hide-menu">ตั๋วช่วยเหลือ</span>
            </a>
          </li>

        </ul>

        <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-2 rounded">
          <div class="d-flex">
            <div class="unlimited-access-title me-3">
              <h6 class="fw-semibold fs-4 mb-6 text-primary w-85">฿0.00 <br> เครดิตคงเหลือ</h6>
              <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
            </div>
          </div>
        </div>
        <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-2 rounded">
          <div class="d-flex">
            <div class="unlimited-access-title me-3">
              <h6 class="fw-semibold fs-4 mb-6 text-primary w-85">123456 <br> ออเดอร์ทั้งหมด</h6>
              <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
            </div>
          </div>
        </div>
        <!-- <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-2 rounded">
          <div class="d-flex">
            <div class="unlimited-access-title me-3">
              <h6 class="fw-semibold fs-4 mb-6 text-primary w-85">NEW <br> ระดับของคุณ</h6>

              <div class="d-grid gap-2 col-12 mx-auto">
                <button class="btn btn-primary" type="button">ดูสิทธิประโยชน์</button>
                <button class="btn btn-primary" type="button">ระดับถัดไปคือ : CLASSIC</button>
              </div>

              <h6 class="fw-semibold fs-4 mb-6 text-primary w-85">คุณจะได้รับ <br> โบนัส 5%</h6>
              <h6 class="fw-semibold fs-4 mb-6 text-primary w-85">500 บาท <br> เมื่อคุณเติมเงินด้วย QR Code ธนาคาร หรือ True wallet</h6>
            </div>
          </div>
        </div> -->

      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
  <!--  Sidebar End -->
  <!--  Main wrapper -->
  <div class="body-wrapper">
    <!--  Header Start -->
    <header class="app-header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item d-block d-xl-none">
            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
              <i class="ti ti-menu-2"></i>
            </a>
          </li>

        </ul>
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
          <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary"><i class="ti ti-logout"></i> log out</a>
            <li class="nav-item dropdown">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/src/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                <div class="message-body">
                  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                    <i class="ti ti-user fs-6"></i>
                    <p class="mb-0 fs-3">My Profile</p>
                  </a>
                  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                    <i class="ti ti-mail fs-6"></i>
                    <p class="mb-0 fs-3">My Account</p>
                  </a>
                  <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                    <i class="ti ti-list-check fs-6"></i>
                    <p class="mb-0 fs-3">My Task</p>
                  </a>
                  <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!--  Header End -->
    <div class="container-fluid">
      <div class="card">
        <div class="card-body p-4">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="row pt-3 col-md-6">
              <div class="col-8 ">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ออเดอร์ที่คาดหวังต่อเดือน">
              </div>

            </div>


          </div>

          <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
              <thead class="text-dark fs-4">
                <tr>

                  <th style="min-width: 280px; width: 40.3%">บริการ</th>
                  <th style="min-width: 70px; width: 15%" class="text-center">ออเดอร์รายเดือน</th>
                  <th style="min-width: 70px; width: 15%" class="text-center">ค่าบำรุงรักษาต่อเดือน</th>


                </tr>
              </thead>
              <tbody>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>
                <tr>

                  <td><a href="#">Douglas Ross</a></td>
                  <td>50.00 ฿ ต่อ 1000</td>
                  <td class="text-center">
                    100
                  </td>

                  <td class="text-center">
                    <button class="btn btn-lg btn-secondary">เปิดเว็บไซต์</button>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body p-4">


          <div class="table-responsive">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-8">
                    <h3>
                      เว็บเต็มระบบต่างจากแผงรายย่อยอย่างไร?</h3>
                    <p>แน่นอน! แผงหลักเต็มระบบนี้มีความแตกต่างจากแผงรายย่อย คุณจะได้รับเว็บไซต์ปั้มไลค์เต็มรูปแบบทั้งระบบ โดยคุณสามารถเชื่อมต่อ API ผู้ให้บริการได้มากกว่า 1 และได้ไม่จำกัด และคุณจะได้รับการเปิดระบบแผงเช่ารายย่อยเพื่อให้ลูกค้าของคุณเช่าเว็บปั้มไลค์จากคุณโดยตรง โดยเว็บเช่าจะเชื่อมต่อ API กับเว็บหลักของคุณแต่เพียงผู้เดียว พร้อมทั้งระบบแนะนำสมาชิก และฟังก์ชั่นอื่นๆมีกมายมายที่แผงหลักมี</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-8">
                    <h3>ควรเลือกแผนไหนก่อนดี?</h3>
                    <p>เราให้ลูกค้าของเราทุกคนเริ่มต้นด้วยแผน A ในการเปิดใช้งานแผงหลัก กรณีที่คุณมีออเดร์สั่งซื้อเกินขีดจำกัด ในเดือนถัดไปคุณจะได้รับบิลเรียกเก็บเงินตามจำนวนคำสั่งซื้อเรทราคาตามแผนต่างๆ ในเดือนปัจจุบัน</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-8">
                    <h3>
                      ช่องทางการช่วยเหลือ?</h3>
                    <p>ใช่ครับ เราทราบดีถึงวิธีการติดต่อหรือให้ความช่วยเหลือ รวมถึงการให้คำแนะนำจากเรา คุณจะได้รับการช่วยเหลือแก้ไขปัญหาโดยตรงจาก Admin ผ่านแอพพิเคชั่น LINE ของเรา</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection