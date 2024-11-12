@extends('client')
@section('contents')


<!-- Post single with sidebar-->
<section class="section section-lg bg-invisible novi-background" data-preset='{"title":"Post Single With Sidebar","category":"blog","reload":true,"id":"post-single-with-sidebar"}'>
  <div class="container">
    <div class="row row-40 justify-content-xxl-between novi-disabled">
      <div class="col-md-12">
        <div class="blog-article clearfix">
          <div class="post-meta post-meta-between">
            <h2>{{$blog->topic}}</h2>
            <div class="post-meta-item"></div>

            <div class="post-meta-item"><span class="post-icon int-clock novi-icon"></span><span class="post-meta-text">{{$blog->created_at}}</span></div>
          </div>


          <div class="d-flex align-items-center justify-content-between">
            <small class="text-mute ">{{$blog->tags}}</small>
          </div>


          <figure class="figure text-center"><img class="lazy-img figure-img " src="{{ $blog->header_img}}" data-src="{{ $blog->header_img }}" alt="" width="840" height="540">

          </figure>
          @foreach($blog->paragrahpDeck as $paragraph )
          <p>
            <span>&emsp;&emsp;&emsp;&emsp;&emsp;{!! $paragraph->wysiwyg !!}</span>
          </p>
          @if($paragraph->img)
          <figure class="figure text-center"><img class="lazy-img figure-img" src="{{ $paragraph->img }}" data-src="{{ $paragraph->img }}" alt="" width="840" height="540">
          </figure>
          @endif
          @endforeach


          <div class="divider divider-sm post-single-divider"></div>
          <h6 class="blog-article-subtitle">Lastest posts</h6>
          <div class="row row-40">

            @foreach($lastest as $post)
            <div class="col-sm-6">
              <div class="post post-sm"><a class="post-img-link" href="post.html"><img class="lazy-img" src="{{ $post->cover_img }}" data-src="{{ $post->cover_img }}" alt="" width="400" height="257"></a>
                <div class="post-meta">
                  <div class="post-meta-item"><span class="post-meta-icon int-clock novi-icon"></span><a class="post-meta-link" href="post.html">{{$post->created_at}}</a></div>
                </div>
                <h5 class="post-title"><a href="post.html">{{$post->topic}}</a></h5>
                <div class="post-text">{{$post->details}}</div>
                <div class="post-text">{{$post->tags}}</div>
                <div class="post-meta">
                  <div class="post-meta-item"><a class="btn btn-primary post-btn" href="{{ url('/post?id='.$post->id) }}">อ่านต่อ</a></div>
                </div>
              </div>
            </div>
            @endforeach

          </div>


          <div class="divider divider-sm post-single-divider"></div>


        </div>
      </div>

    </div>
  </div>
</section>


@endsection