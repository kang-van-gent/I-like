@extends('admin')
@section('contents')

<div class="container-fluid">
  <h2 class="text-center mb-3">บทความ</h2>
  <div class="row">
    @if($blogs)
    @foreach($blogs as $b)
    <div class="col-md-4">
      <div class="card overflow-hidden rounded-2">
        <div class="position-relative">
          <a href="{{ url('/post?id='.$b->id) }}"><img src="{{ Storage::url($b->headerImg) }}" data-src="{{ Storage::url($b->headerImg) }}" href="{{ url('/post?id='.$b->id) }}" class="card-img-top rounded-0" alt="..."></a>

        </div>
        <div class="card-body pt-3 p-4">
          <h6 class="fw-semibold fs-4" href="{{ url('/post?id='.$b->id) }}">{{$b->topic}}</h6>
          <div class="d-flex align-items-center justify-content-between">
            <h6 class="fw-semibold fs-4 mb-0">{{$b->details}}</h6>
          </div>
          <div class="d-grid gap-2 mt-3 col-6 mx-auto">
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