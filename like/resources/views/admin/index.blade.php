@extends('admin')
@section('contents')

<div class="container-fluid">
  <!--  Row 1 -->
  <div class="row">
    <div class="card">
      <div class="card-body">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-md-4">
              <!-- Yearly Breakup -->
              <div class="card overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h4 class="fw-semibold mb-3">{{$userInfo->firstName}}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <!-- Yearly Breakup -->
              <div class="card overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 fw-semibold">นามสกุล</h5>
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h4 class="fw-semibold mb-3">{{$userInfo->lastName}}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 fw-semibold">อีเมล</h5>
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h4 class="fw-semibold mb-3">{{$userInfo->email}}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 fw-semibold">การใช้จ่าย</h5>
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h4 class="fw-semibold mb-3">0 บาท</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <!-- Yearly Breakup -->
              <div class="card overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 fw-semibold">ตั๋วที่ยังไม่ได้อ่าน</h5>
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h4 class="fw-semibold mb-3">ไม่มี</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <!-- Yearly Breakup -->
              <div class="card overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 fw-semibold">ชื่อผู้ใช้งาน</h5>
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h4 class="fw-semibold mb-3">{{$userInfo->username}}</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="row">
                <div class="col-md-12">
                   Yearly Breakup 
                  <div class="card overflow-hidden">
                    <div class="card-body p-4">
                      <h5 class="card-title mb-9 fw-semibold">สิทธิประโยชน์ของคุณ</h5>
                      <div class="row align-items-center">
                        <div class="col-12 ">
                          <div class="clearfix">
                            <button type="button" class="btn btn-secondary float-start">Example Button floated left</button>
                            <button type="button" class="btn btn-secondary float-end">Example Button floated right</button>
                          </div>
                          <div class="row mt-3">
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                            <div class="col-md-4">
                              <h5 class="card-title mb-9 fw-semibold">ชื่อจริง</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

          <!-- <div class="row">
                <div class="col-md-12">
                  <div>
                    <h3>NOTE</h3>
                  </div>
                  <div>
                    <p>* = คุณสามารถสั่งซื้อระดับสถานะ VIP ได้จากบริการของเรา และคุณจะได้รับสิทธิ์ราคาตัวแทนเหมือน VIP</p>
                    <p>** = รับโบนัส 5% เมื่อเติมเงินด้วย QR Code หรือเหรียญ Cryptocurrency</p>
                    <p>*** = ในแต่ละเดือนเราจะสุ่มเลือกผู้ใช้งานประจำในระดับ Gold, Platinum, VIP และ Diamond 1 รายชื่อ เพื่อลุ้นรับเงินรางวัลเครดิต 500 บาท เพื่อใช้ในบริการ!</p>
                    <p>คุณสามารถดูประกาศผลรางวัลได้ คลิกที่นี่ !!</p>
                    <p>**** = คุณจะได้รับเว็บไซต์ปั้มไลค์แผงรายย่อย ฟรี !</p>
                    <p>สิทธิ์ราคาตัวแทนจำหน่าย ระดับ GOLD รับส่วนลด 5%, ระดับ PLATINUM รับส่วนลด 10%, และระดับ VIP รับส่วนลด 15% ระดับ Diamond รับส่วนลด 20%</p>
                    <p>หากต้องการสอบถามข้อมูลเพิ่มเติมหรือขอรับสิทธิ์ราคาตัวแทนจำหน่ายกรุณา เปิดตั๋ว เพื่อติดต่อเรา!</p>
                  </div>
                </div>
              </div> -->
        </div>
      </div>
    </div>
  </div>
</div>


@endsection