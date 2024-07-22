@extends('admin')
@section('contents')


<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h2 class="text-center text-dark ">วิธีการใช้งาน</h2>
      <hr class="w-50 m-auto mb-3 fw-bold">
      <ul class="nav nav-classic justify-content-center " role="tablist">
        <li class="nav-item p-2 h4">
          <button class="btn btn-outline-secondary btn-sm active rounded-pill" data-bs-toggle="tab" href="#step1" role="tab" aria-selected="true">ประวัติการเปิดตั๋ว</button>
        </li>
        <li class="nav-item p-2 h4">
          <button class="btn btn-outline-secondary btn-sm rounded-pill" data-bs-toggle="tab" href="#step2" role="tab" aria-selected="false">เติมเครดิต</button>
        </li>
        <li class="nav-item p-2 h4">
          <button class="btn btn-outline-secondary btn-sm rounded-pill" data-bs-toggle="tab" href="#step3" role="tab" aria-selected="false">เลือกซื้อ</button>
        </li>
        <li class="nav-item p-2 h4">
          <button class="btn btn-outline-secondary btn-sm rounded-pill" data-bs-toggle="tab" href="#step4" role="tab" aria-selected="false">ดูประวัติการซื้อ</button>
        </li>
      </ul>


      <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="step1" role="tabpanel">
          <h1>สร้างบัญชี</h1>
          <h4>ก่อนอื่นคุณต้องสร้าง User เพื่อใช้สำหรับเข้าสู่ระบบ จากนั้นคุณจะเห็นแดชบอร์ดของเรา ทำการ “สมัครสมาชิก” เพื่อใช้งาน ขั้นตอนการสมัครเพียงไม่กี่ขั้นตอน หลังจากสมัครคุณจะได้รับอีเมลยืนยันส่งไปที่อีเมลที่คุณใช้ลงทะเบียน</h4>
          <!-- Image here -->
          <div class="d-grid gap-2">
            <a class="btn btn-primary" type="button" href="/register">สมัครสมาชิก</a>
          </div>
        </div>
        <div class="tab-pane fade" id="step2" role="tabpanel">
          <h1>เติมเครดิต</h1>
          <h4>ขั้นตอนที่สอง เติมเงินเข้าบัญชี User ของคุณ เรามีช่องทางการเติมเงินมากมายสำหรับคุณ สำหรับการฝากเงินคุณสามารถคลิก “เติมเงิน” ที่แถบเมนู</h4>
          <div class="d-grid gap-2">
            <a class="btn btn-primary" type="button" href="/addfunds">เติมเครดิต</a>
          </div>
        </div>
        <div class="tab-pane fade" id="step3" role="tabpanel">
          <h1>เลือกซื้อ</h1>
          <h4>ขั้นตอนที่สาม หลังจากที่คุณมียอดคงเหลือในบัญชีของคุณแล้ว ดังนั้นตอนนี้คุณสามารถสั่งซื้อและเริ่มใช้งานได้ทันทีตามขั้นตอนดังต่อไปนี้ คุณสามารถตรวจสอบ “บริการของเรา” เพื่อดูบริการและราคาทั้งหมด</h4>
        </div>
        <div class="tab-pane fade" id="step4" role="tabpanel">
          <h1>ดูประวัติการซื้อ</h1>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection