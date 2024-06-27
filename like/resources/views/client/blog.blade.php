@extends('client')
@section('contents')


<!-- Hover layout 3 columns-->
<section class="section section-lg bg-invisible novi-background" data-preset='{"title":"Blog Hovered","category":"blog","reload":true,"id":"blog-hovered-2"}'>
  <div class="container">
    <h1 class="text-center">บทความ</h1>
    <div class="row row-40 row-md-60">

      @if($blogs)
      @foreach($blogs as $b)
      <!-- Connect to database using images  -->
      <div class="col-md-6 col-lg-4">
        <!-- Post hover-->
        <div class="post post-hover post-sm">
          <div class="post-img-link"><a href="{{ url('/post?id='.$b->id) }}"><img class="lazy-img" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="images/image-09-400x257.jpg" alt="" width="400" height="257"></a>
          </div>
          <div class="post-inner">
            <h5 class="post-title"><a href="{{ url('/post?id='.$b->id) }}">{{ $b->topic }}</a></h5>

            <div class="post-text">{{$b->details}}</div>
            <div class="post-meta post-meta-between">
              <div class="post-meta-item"><a class="btn btn-secondary" href="{{ url('/post?id='.$b->id) }}">อ่านต่อ</a></div>

            </div>
          </div>
        </div>

      </div>
      @endforeach
      @endif


      <!-- Paginations -->
      <!-- <div class="col-12">
        <ul class="pag pag-simple justify-content-center">
          <li class="pag-simple-item active"><a class="pag-simple-link" href="#">1</a>
          </li>
          <li class="pag-simple-item"><a class="pag-simple-link" href="#">2</a>
          </li>
          <li class="pag-simple-item"><a class="pag-simple-link" href="#">3</a>
          </li>
          <li class="pag-simple-item"><a class="pag-simple-link inactive" href="#">..</a>
          </li>
          <li class="pag-simple-item"><a class="pag-simple-link" href="#">24</a>
          </li>
          <li class="pag-simple-item"><a class="pag-simple-link pag-simple-link-next" href="#"><span>Next</span><span class="int-arrow-right novi-icon"></span></a>
          </li>
        </ul>
      </div> -->
    </div>
  </div>
</section>
@endsection


<!--  optimizable 1 blog has many paragraphs 1 paragraph that include images
collection construct :
-- blogs
    blogId -- int 11,
    coverImage -- file,
    details -- text,
    category -- varchar 200,
    ref -- text,
    createdAt -- Timestamp 

-- paragraphs
    paraId -- int 11,
    details -- text,
    image -- file,
    blogId -- int 11,
-->