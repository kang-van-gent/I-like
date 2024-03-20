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
          <img class="lazy-img navbar-logo-default" src="/images/logo-default-114x27.svg" alt="Intense" width="114" height="27">
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
            <a class="sidebar-link " href="/dashboard" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">แดชบอร์ด</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/services" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">บริการของเรา</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/updates" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">บริการอัพเดต</span>
            </a>
          </li>
          <li class="sidebar-item ">
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
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/blog" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">บทความ</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/terms" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
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
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">เลือกซื้อ</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link active" href="/massorder" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">เลือกซื้อหลายรายการ</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/addfunds" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
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
                <i class="ti ti-layout-dashboard"></i>
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
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">คำถามที่พบบ่อย</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/howitworks" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">วิธีการทำงาน</span>
            </a>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link " href="/tickets" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
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
        <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-2 rounded">
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
        </div>

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
          <li class="nav-item">
            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
              <i class="ti ti-bell-ringing"></i>
              <div class="notification bg-primary rounded-circle"></div>
            </a>
          </li>
        </ul>
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
          <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a>
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
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6 d-flex align-items-strech">
              <div class="card w-100">
                <div class="card-body">

                  <div class=" d-grid gap-1 d-flex justify-content-end mb-3">
                    <button class="btn btn-primary btn-sm" type="button">เลือกซื้อหลายรายการ</button>
                    <button class="btn btn-primary btn-sm" type="button">ดูตัวอย่างลิ้งค์</button>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">แพลตฟอร์ม</label>
                    <select class="form-select" id="exampleFormControlInput1" aria-label="Default select example">
                      <option value="1">One</option>
                      <option value="2">Two</option>

                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ค้นหาบริการ</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ค้นหาบริการ">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">หมวดหมู่</label>
                    <select class="form-select" id="exampleFormControlInput1" aria-label="Default select example">
                      <option value="1">One</option>
                      <option value="2">Two</option>

                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">บริการ</label>
                    <select class="form-select" id="exampleFormControlInput1" aria-label="Default select example">
                      <option value="1">One</option>
                      <option value="2">Two</option>

                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">คำอธิบายลักษณะ</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ลิ้งค์</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">จำนวนเงิน (บาท)</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1">
                  </div>
                  <div class="alert alert-danger" role="alert">
                    โปรดมั่นใจว่าลิ้งค์ของคุณเปิด "สาธารณะ" ทุกครั้งก่อนกดสั่งซื้อ!
                  </div>
                  <div class="d-grid gap-2 mb-3">
                    <button class="btn btn-primary" type="button">สั่งซื้อ</button>
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