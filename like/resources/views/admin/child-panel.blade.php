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
            <a class="sidebar-link" href="/addfunds" aria-expanded="false">
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
        <div class="card-body">
          <ul class="nav nav-classic justify-content-start " role="tablist">
            <li class="nav-item p-2 h4">
              <button class="btn btn-secondary active" data-bs-toggle="tab" href="#login" role="tab" aria-selected="true">เช่าเว็บปั๊มไลค์</button>
            </li>
            <li class="nav-item p-2 h4">
              <button class="btn btn-secondary" data-bs-toggle="tab" href="#register" role="tab" aria-selected="false">ตัวอย่างเว็บไซต์</button>
            </li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane fade show active" id="login" role="tabpanel">
              <div class="row">
                <div class="alert alert-warning" role="alert">
                  A simple warning alert—check it out!
                </div>
                <div class="col-lg-6 p-4">
                  <!-- Yearly Breakup -->
                  <div class="card h-100">
                    <div class="card-body p-4">
                      <div class="accordion accordion-flush mt-3" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Accordion Item #1
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                              Accordion Item #2
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="flush-collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="flush-collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="flush-collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="flush-collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="flush-collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="flush-collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="flush-collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="flush-collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="flush-collapse12" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="flush-collapse13" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 p-4">
                  <!-- Yearly Breakup -->
                  <div class="card h-100">
                    <div class="card-body p-4">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ชื่อโดเมน</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <div class="alert alert-info" role="alert">
                          A simple info alert—check it out!
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">สกุลเงิน</label>
                        <select class="form-select" id="exampleFormControlInput1" aria-label="Default select example">
                          <option value="1">One</option>
                          <option value="2">Two</option>

                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">สร้าง Username ผู้ดูแลระบบ</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">สร้างรหัสผ่านปู้ดูแลระบบ</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ยืนยันรหัสผ่าน</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ราคา</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="d-grid gap-2 mb-3">
                        <button class="btn btn-primary" type="button">คำสั่งซื้อ</button>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="register" role="tabpanel">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection