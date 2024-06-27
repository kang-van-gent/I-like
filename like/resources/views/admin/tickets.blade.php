@extends('admin')
@section('contents')


<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h2 class="text-center text-dark ">ตั๋วช่วยเหลือ</h2>
      <hr class="w-50 m-auto mb-3 fw-bold">
      <ul class="nav nav-classic justify-content-center " role="tablist">
        <li class="nav-item p-2 h4">
          <button class="btn btn-outline-secondary active rounded-pill" data-bs-toggle="tab" href="#login" role="tab" aria-selected="true">ประวัติการเปิดตั๋ว</button>
        </li>
        <li class="nav-item p-2 h4">
          <button class="btn btn-outline-secondary rounded-pill" data-bs-toggle="tab" href="#register" role="tab" aria-selected="false">ตั๋วช่วยเหลือ</button>
        </li>
      </ul>


      <div class="tab-content">
        <div class="tab-pane fade show active" id="login" role="tabpanel">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="row pt-3 col-md-6">
              <div class="col-6 ">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="คำค้นหา">
              </div>
              <div class="col-2">
                <button type="submit" class="btn btn-primary">ค้นหา</button>
              </div>
            </div>


          </div>
          <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
              <thead class="text-dark fs-4">
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
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
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="register" role="tabpanel">
          <div class="alert alert-warning" role="alert">
            กรุณาอ่าน! พฤติกรรมที่ไม่เหมาะสมใดๆ กับการสนับสนุนตั๋วของเราจะทำให้บัญชีของคุณถูกจำกัด และ/หรือ อาจถูกระงับ
          </div>
          <div class="row ">
            <div class="col-md-3 d-flex  text-center">
              <!-- Yearly Breakup -->
              <div class="card w-100 overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 mt-3 fw-semibold">
                    <p style="font-size: 30px;"><i class="ti ti-shopping-cart"></i></p> คำสั่งซื้อ
                  </h5>
                  <div class="row align-items-center">
                    <p class="fw-semibold mb-3">เติมยอด, ยกเลิก, เร่งความเร็ว, และรีสตาร์ท</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex  text-center">
              <!-- Yearly Breakup -->
              <div class="card w-100 overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 mt-3 fw-semibold">
                    <p style="font-size: 30px;"><i class="ti ti-wallet"></i></p> การเติมเงิน
                  </h5>
                  <div class="row align-items-center">
                    <p class="fw-semibold ">สแกน QR Code, โอนเงิน, ทรูมันนี่ วอลเล็ท, บัตรเดบิต เครดิต, เหรียญ Cryptocurrency, Perfect Money และอื่น ๆ</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex  text-center">
              <div class="card w-100 overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 mt-3 fw-semibold ">
                    <p style="font-size: 30px;"><i class="ti ti-world-www"></i></p> เช่าเว็บปั้มไลค์
                  </h5>
                  <div class="row align-items-center">
                    <p class="fw-semibold mb-3">ถามคำถามเกี่ยวกับเช่าเว็บ และ ปัญหาเกี่ยวกับเช่าเว็บ</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex  text-center">
              <div class="card w-100 overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 mt-3 fw-semibold ">
                    <p style="font-size: 30px;"><i class="ti ti-api-app"></i></p> API นักพัฒนา
                  </h5>
                  <div class="row align-items-center">
                    <p class="fw-semibold mb-3">ถามคำถามเกี่ยวกับ API และอื่น ๆ</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex  text-center">
              <!-- Yearly Breakup -->
              <div class="card w-100 overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 mt-3 fw-semibold">
                    <p style="font-size: 30px;"><i class="ti ti-help"></i></p> จุดบกพร่อง Bug
                  </h5>
                  <div class="row align-items-center">
                    <p class="fw-semibold mb-3">บอกเราถ้าคุณค้นหา Bug ??</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex  text-center">
              <!-- Yearly Breakup -->
              <div class="card w-100 overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 mt-3 fw-semibold">
                    <p style="font-size: 30px;"><i class="ti ti-bell"></i></p> คำขอ
                  </h5>
                  <div class="row align-items-center">
                    <p class="fw-semibold mb-3">บริการและคุณลักษณะอื่น ๆ</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex  text-center">
              <!-- Yearly Breakup -->
              <div class="card w-100 overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 mt-3 fw-semibold">
                    <p style="font-size: 30px;"><i class="ti ti-ticket"></i></p> บัตรกำนัล Voucher
                  </h5>
                  <div class="row align-items-center">
                    <p class="fw-semibold mb-3">แลกบัตรกำนัลของคุณและถามคำถามเกี่ยวกับคูปอง</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex   text-center">
              <!-- Yearly Breakup -->
              <div class="card w-100 overflow-hidden">
                <div class="card-body p-4">
                  <h5 class="card-title mb-9 mt-3  fw-semibold">
                    <p style="font-size: 30px;"><i class="ti ti-social"></i></p> กิจกรรมพิเศษ
                  </h5>
                  <div class="row align-items-center ">
                    <p class="fw-semibold mb-3">ถามคำถามเกี่ยวกับกิจกรรมพิเศษ</p>
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