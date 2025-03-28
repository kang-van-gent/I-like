@extends('admin')
@section('contents')


<div class="container-fluid">
  <h2 class="text-center mb-3">แพ็คเกจ</h2>
  <div class="row">
    @if (count($package)>0)
    @foreach ( $package as $p )
    <div class="col-md-4">
      {{-- <h5 class="card-title fw-semibold mb-4">Card</h5> --}}
      <div class="card">
        <div class="position-relative">
          <a href="{{ url('/postPackage?id='.$p->id) }}"><img src="{{ $p->cover_img }}" data-src="{{ $p->cover_img }}" href="{{ url('/postPackage?id='.$p->id) }}" class="card-img-top rounded-0" alt="..."></a>

        </div>
        <div class="card-body">
          {{-- <h5 class="card-title">Card title</h5> --}}
          <p class="card-text">{{$p->details}}</p>
          <a href="{{ url('/postPackage?id='.$p->id) }}" class="btn btn-primary">อ่านเพิ่มเติม</a>
        </div>
      </div>
    </div>
    @endforeach
    @else
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">ว้า! แย่จัง..</h5>
        <p class="card-text">ขออภัยยังไม่มีรายการแพ็คเกจใหม่ในขณะนี้ สามารถติดตามข่าวสารได้ทาง Facebook fanpage หรือสามารถสั่งซื้อโปรโมชั่นได้ทางเพจโดยตรง</p>
        <a href="https://www.facebook.com/profile.php?id=61557690340003" class="btn btn-outline-primary">Facebook page</a>
      </div>
    </div>
    @endif
  </div>
</div>
</div>
</div>

@endsection