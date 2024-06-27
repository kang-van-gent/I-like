@extends('admin')
@section('contents')

<div class="container-fluid ">
  <div class="card col-md-12">
    <div class="row">
      <div class="col-md-6 p-4">
        <!-- Yearly Breakup -->
        <div class="card h-100">
          <div class="card-body p-4">
            <h5 class="card-title mb-9 fw-semibold">สแกน QR Code ทุกธนาคาร (โบนัส 5%)</h5>
            <div class="row">
              <div class="col-12 ">
                <div class="row mt-3">

                  <p class="card-title mb-9 ">สแกนด้วย QR Code ผ่านแอพพิเคชั่นธนาคาร เงินเข้าทันทีไม่ต้องรอ !</p>
                  <p class="card-title mb-9 ">ขั้นตอนการสแกน QR Code เพื่อเติมเงิน ดังนี้</p>
                  <p class="card-title mb-9 ">เติมขั้นต่ำ 10 บาท สูงสุดไม่เกิน 30,000 บาท ต่อครั้ง</p>
                  <p class="card-title mb-9 ">👉 1 - เลือกจำนวนเงินที่ต้องการเติม</p>
                  <p class="card-title mb-9 ">👉 2 - กดปุ่ม 'เติมเงิน'</p>
                  <p class="card-title mb-9 ">👉 3 - รอสักครู่ระบบจะแสดง QR Code</p>
                  <p class="card-title mb-9 ">👉 4 - เข้าแอพพิเคชั่นธนาคาร และเลือกสแกน QR Code</p>
                  <p class="card-title mb-9 ">เติมเงิน 500 บาทขึ้นไป รับโบนัสเพิ่มทันที 5% ! </p>
                  <p class="card-title mb-9 ">หากมีปัญหาการเติมเงิน กรุณาเปิดตั๋ว ด้วยหัวข้อการชำระเงิน QR Code</p>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 p-4">
        <!-- Yearly Breakup -->
        <div class="card h-100">
          <div class="card-body p-4">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">ช่องทาง</label>
              <select class="form-select" id="exampleFormControlInput1" aria-label="Default select example">
                <option value="1">One</option>
                <option value="2">Two</option>

              </select>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">คำแนะนำ</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">จำนวนเงิน (บาท)</label>
              <input type="number" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="d-grid gap-2 mb-3">
              <button class="btn btn-primary" type="button">เติมเงิน</button>
            </div>
            <p>มี2ช่องทางให้เติมเงิน ทรูวอเลทและธนาคาร เติมผ่านธนาคาร กดคำว่าทรูมันนี่วอเลท :</p>
            <p>หมายเหตุ</p>
            <p>*** กิจกรรมที่ฉ้อโกงเช่นการใช้บัตรเครดิตที่ไม่ได้รับอนุญาตหรือถูกขโมย การให้บุคคลที่สามโอนเงินหรือเติมเงินแทน โดยเจตนาหรือจงใจทำให้บุคคลที่สามนั้นเข้าใจผิดคิดว่าเป็นบัญชีของตนเอง จะนำไปสู่การระงับการใช้งานบัญชีของคุณ และทาง arsd-social.com จะดำเนินคดีตามกฎหมายให้ถึงที่สุด โดยไม่มีข้อยกเว้น (ข้อกฎหมายทั้งหมดนี้ถูกบังคับใช้ตาม นโยบายการให้บริการของเรา ข้อที่ 11. การคืนเงิน)</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


@endsection