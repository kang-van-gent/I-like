@extends('admin')
@section('contents')


<div class="container-fluid">
  <div class="row">
    <h2 class="text-center">ตะกร้าสินค้าของคุณ</h2>

    <div class="col-lg-8 d-flex align-items-strech">

      <div class="card w-100">
        <div class="card-body">
          <div class="align-items-center justify-content-between mb-9">
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">รายกราสินค้า</h5>
              @if(count($items)>0)
              @foreach($items as $item)
              <div class="row">
                <div class="cols">
                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-between">
                        <div class="col-8">
                          <h5 class="card-title">{{ $item->name }}</h5>
                        </div>
                        <div class="col-4 text-end">
                          {{ Number::currency($item->price,'thb')}}
                        </div>
                      </div>
                      <div class="d-grid gap-2 d-md-flex justify-content-md-between">
                        <h6 class="card-subtitle mb-2 text-muted">x{{ $item->attributes->amount }}</h6>

                        <a href="{{ route('service.remove',$item->id) }}" class="btn btn-outline-danger btn-sm" type="button">เอาออกจากตะกร้า</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              @else

              <div class="row">
                <div class="cols text-center p-5">
                  <span>
                    <h5 class="card-title">ไม่มีรายการ</h5>
                  </span>
                </div>
              </div>


              @endif
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="row">
        <div class="col-lg-12">
          <!-- Yearly Breakup -->
          <div class="card overflow-hidden">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">รวมทั้งหมด</h5>
              <div class="row align-items-center">
                <div class="col">
                  <h4 class="fw-semibold mb-3 text-end">{{ Number::currency($total,'thb') }}</h4>


                </div>
                <div class="d-grid gap-2 ">
                  <button class="btn btn-primary" type="button">ชำระเงิน</button>
                  <button class="btn btn-outline-secondary" type="button">เลือกบริการเพิ่ม</button>
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