@extends('admin')
@section('contents')

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4">
      <div class="row">
        <div class="col-lg-12">
          <!-- Yearly Breakup -->
          <div class="card overflow-hidden">
            <div class="card-title bg-light-primary p-2">
              <h5 class=" text-center  fw-semibold">อัตราการแปลง</h5>
            </div>
            <div class="card-body p-4 ">
              <div class="row text-center">
                <h4 class="fw-semibold mb-3 mt-4">0.00%</h4>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <!-- Yearly Breakup -->
          <div class="card overflow-hidden">
            <div class="card-title bg-light-primary p-2">
              <h5 class=" text-center  fw-semibold">อัตราค่าแนะนำ</h5>
            </div>
            <div class="card-body p-4 ">
              <div class="row text-center">
                <h4 class="fw-semibold mb-3 mt-4">5%</h4>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="col-lg-8 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">ลิ้งค์ของคุณ</h5>
            </div>

            <div class="row col-md-6">
              <div class="col-8 ">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="https://arsd-social.com/ref/idjln">
              </div>
              <div class="col-4">
                <button type="submit" class="btn btn-primary">คัดลอก</button>
              </div>

            </div>




          </div>
          <div class="row">
            <div class="col-6">
              <p>การเยี่ยมชม</p>
              <p>0</p>
            </div>
            <div class="col-6">
              <p>การจ่ายค่าแนะนำขั้นต่ำ</p>
              <p>฿100.00</p>
            </div>
            <div class="col-6">
              <p>การอ้างอิง</p>
              <p>0</p>
            </div>
            <div class="col-6">
              <p>การสมัคร</p>
              <p>0</p>
            </div>
            <div class="col-6">
              <p>รายได้รวม</p>
              <p>฿0.00</p>
            </div>
            <div class="col-6">
              <p>รายได้รอจ่าย </p>
              <p>฿0.00</p>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>


@endsection