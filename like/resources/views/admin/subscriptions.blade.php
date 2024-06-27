@extends('admin')
@section('contents')


<div class="container-fluid">
  <div class="card">
    <div class="card-body p-4">
      <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
        <div class="row pt-3 col-md-6">
          <div class="col-6 ">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="คำค้นหา">
          </div>
          <div class="col-2">
            <button type="submit" class="btn btn-primary">ค้นหา</button>
          </div>
        </div>


      </div>
      <div class="row pt-3 col-md-6 mb-3">
        <div class="col-md-12 pt-3">
          <select id="disabledSelect" class="form-select">
            <option>ทั้งหมด</option>
            <option>รอดำเนินการ</option>
            <option>กำลังดำเนินการ</option>
            <option>เสร็จสมบูรณ์</option>
            <option>เป็นบางส่วน</option>
            <option>กำลังประมวลผล</option>
            <option>ยกเลิก</option>
          </select>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="text-center" style="min-width: 50px; width: 5.5%">
                <div class="icon icon-xs int-sort-up novi-icon"></div>
              </th>
              <th style="min-width: 280px; width: 40.3%">ลิ้งค์</th>
              <th class="text-center" style="min-width: 70px; width: 13%">ขั้นต่ำ</th>
              <th style="min-width: 70px; width: 15%" class="text-center">วันที่</th>
              <th class="text-center" style="min-width: 70px; width: 13%">ค่าบริการ</th>
              <th class="text-center" style="min-width: 70px; width: 13%">เริ่มนับ</th>
              <th class="text-center" style="min-width: 70px; width: 13%">ปริมาณ</th>
              <th class="text-center" style="min-width: 70px; width: 13%">บริการ</th>
              <th class="text-center" style="min-width: 70px; width: 13%">สถานะ</th>
              <th class="text-center" style="min-width: 70px; width: 13%">ที่เหลืออยู่</th>

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
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
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
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
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
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
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
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
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
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
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
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
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
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
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
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
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
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
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
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
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
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>
              <td class="text-center">
                ข้อมูลไม่เพียงพอ
              </td>

            </tr>


          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection