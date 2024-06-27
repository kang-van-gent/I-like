@extends('admin')
@section('contents')

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


@endsection