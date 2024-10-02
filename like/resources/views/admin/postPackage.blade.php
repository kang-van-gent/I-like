@extends('admin')
@section('contents')

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h2 class="text-center text-dark ">{{$package->topic}}</h2>
      <hr class="w-50 m-auto mb-3 fw-bold">
      <img src="{{ $package->cover_img }}" data-src="{{ $package->cover_img }}" class="card-img-top rounded-0" alt="..." >
      <div>
        <div>
          <h4 class="card-text mt-5">{{$package->details}}</h4>
          <div class="d-grid gap-2 d-flex justify-content-end">
            <button class="btn btn-outline-danger" type="button" onclick="history.go(-1)">ย้อนกลับ</button>
            <button class="btn btn-primary me-md-2" type="button">เพิ่มลงตะกร้า</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection