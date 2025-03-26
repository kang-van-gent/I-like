@extends('admin')
@section('contents')


<div class="container-fluid">
  <h2 class="text-center mb-3">โปรโมชั่น</h2>
  <div class="row">
    @if (count($promotions)>0)
    @foreach ( $promotions as $p )
    <div class="col-md-4">
      <div class="card h-100"> <!-- Added h-100 for full height -->
        <div class="position-relative" style="height: 200px; overflow: hidden;"> <!-- Fixed height container -->
          <a href="{{ url('/postPromotion?id='.$p->id) }}">
            <img src="{{ $p->image_url }}"
              data-src="{{ $p->image_url }}"
              class="card-img-top rounded-0"
              alt="..."
              style="width: 100%; height: 100%; object-fit: cover;"> <!-- object-fit: cover ensures image fills space -->
          </a>
        </div>
        <div class="card-body p-3 d-flex flex-column"> <!-- Added flex container -->
          <p class="card-text flex-grow-1">{{$p->topic}}</p> <!-- flex-grow-1 allows text to fill available space -->
          <a href="{{ url('/postPromotion?id='.$p->id) }}" class="btn btn-primary mt-auto">อ่านเพิ่มเติม</a>
        </div>
      </div>
    </div>
    @endforeach
    @else
    <div class="card text-center">
      <div class="card-body">
        <h5 class="card-title">ว้า! แย่จัง..</h5>
        <p class="card-text">ขออภัยยังไม่มีรายการโปรโมชั่นใหม่ในขณะนี้ สามารถติดตามข่าวสารได้ทาง Facebook fanpage หรือสามารถสั่งซื้อโปรโมชั่นได้ทางเพจโดยตรง</p>
        <a href="https://www.facebook.com/profile.php?id=61557690340003" class="btn btn-outline-primary">Facebook page</a>
      </div>
    </div>
    @endif
  </div>
</div>
</div>
</div>

@endsection