@extends('admin')
@section('contents')

<div class="container-fluid">
  <h2 class="text-center mb-3">บทความ</h2>
  <div class="row">
    @if($blogs)
    @foreach($blogs as $b)
    <div class="col-md-4">
      <div class="card overflow-hidden rounded-2 h-100"> <!-- Added h-100 -->
        <div class="position-relative" style="height: 200px; overflow: hidden;"> <!-- Fixed height container -->
          <a href="{{ url('/post?id='.$b->id) }}">
            <img src="{{ $b->header_img }}"
              data-src="{{ $b->header_img }}"
              class="card-img-top rounded-0"
              alt="..."
              style="width: 100%; height: 100%; object-fit: cover;"> <!-- Added object-fit -->
          </a>
        </div>
        <div class="card-body pt-3 p-4 d-flex flex-column"> <!-- Added flex container -->
          <h6 class="fw-semibold fs-4">{{$b->topic}}</h6>
          <div class="d-flex align-items-center justify-content-between">
            <h6 class="text-muted fs-4 mb-0">{{$b->tags}}</h6>
          </div>
          <div class="d-grid gap-2 mt-auto col-6 mx-auto"> <!-- Changed mt-3 to mt-auto -->
            <a class="btn btn-primary" type="button" href="{{ url('/post?id='.$b->id) }}">อ่านเพิ่มเติม</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    @endif

  </div>
</div>


@endsection