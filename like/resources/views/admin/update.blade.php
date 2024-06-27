@extends('admin')
@section('contents')


<div class="container-fluid">
  <div class="card">
    <div class="card-body p-4">
      <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
        <div class="row pt-3 col-md-6">
          <div class="col-6 ">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="คำค้นหา">
          </div>
          <div class="col-2">
            <button type="submit" class="btn btn-primary">ค้นหา</button>
          </div>
        </div>
        <div class="col-md-4 pt-3">
          <select id="disabledSelect" class="form-select">
            <option>ไทย</option>
            <option>ต่างชาติ</option>

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
              <th style="min-width: 280px; width: 40.3%">บริการ</th>
              <th style="min-width: 70px; width: 15%" class="text-center">วันที่</th>
              <th style="min-width: 70px; width: 15%" class="text-center">ราคา</th>
              <!-- <th class="text-center" style="min-width: 70px; width: 13%"></th> -->

            </tr>
          </thead>
          <tbody>
            @if($promotions)
            @foreach($promotions as $index => $p)
            <tr>
              <td class="text-center">#{{$index+1}}</td>
              <td><a href="#">{{$p->details}}</a></td>
              <td class="text-center">
                2024-03-09
              </td>
              <td class="text-center"> {{$p->price}} </td>

              <!-- <td class="text-center">
                    <button class="btn btn-lg btn-secondary">ใส่ตะกร้า</button>
                  </td> -->
            </tr>
            @endforeach
            @endif


          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection