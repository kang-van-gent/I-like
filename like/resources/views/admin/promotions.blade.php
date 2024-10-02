@extends('admin')
@section('contents')


<div class="container-fluid">
    <h2 class="text-center mb-3">โปรโมชั่น</h2>
    <div class="row">
      @if ($promotions)
      @foreach ( $promotions as $p )
            <div class="col-md-4">
              {{-- <h5 class="card-title fw-semibold mb-4">Card</h5> --}}
              <div class="card">
                <div class="position-relative">
                  <a href="{{ url('/postPromotion?id='.$p->id) }}"><img src="{{ $p->cover_img }}" data-src="{{ $p->cover_img }}" href="{{ url('/postPromotion?id='.$p->id) }}" class="card-img-top rounded-0" alt="..."></a>
        
                </div>
                <div class="card-body">
                  {{-- <h5 class="card-title">Card title</h5> --}}
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the
                    card's content.</p>
                  <a href="{{ url('/postPromotion?id='.$p->id) }}" class="btn btn-primary">อ่านเพิ่มเติม</a>
                </div>
              </div>
            </div>
      @endforeach
      @endif
    </div> 
  </div>
</div>
</div>

@endsection