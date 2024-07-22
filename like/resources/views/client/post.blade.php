@extends('client')
@section('contents')


<!-- Post single with sidebar-->
<section class="section section-lg bg-invisible novi-background" data-preset='{"title":"Post Single With Sidebar","category":"blog","reload":true,"id":"post-single-with-sidebar"}'>
  <div class="container">
    <div class="row row-40 justify-content-xxl-between novi-disabled">
      <div class="col-md-12">
        <div class="blog-article clearfix">
          <div class="post-meta post-meta-between">
            <div class="post-meta-item"></div>

            <div class="post-meta-item"><span class="post-icon int-clock novi-icon"></span><span class="post-meta-text">{{$blog->createdAt}}</span></div>
          </div>


          <h2>{{$blog->topic}}</h2>


          <figure class="figure text-center"><img class="lazy-img figure-img " src="{{ Storage::url($blog->headerImg) }}" data-src="{{ Storage::url($blog->headerImg) }}" alt="" width="840" height="540">

          </figure>
          @foreach($blog->paragrahpDeck as $paragraph )
          <p>
            <span>&emsp;&emsp;&emsp;&emsp;&emsp;{{$paragraph->details}}</span>
          </p>
          <figure class="figure text-center"><img class="lazy-img figure-img" src="{{ Storage::url($paragraph->image) }}" data-src="{{ Storage::url($paragraph->image) }}" alt="" width="840" height="540">
          </figure>
          @endforeach


          <div class="divider divider-sm post-single-divider"></div>
          <h6 class="blog-article-subtitle">Lastest posts</h6>
          <div class="row row-40">

            @foreach($lastest as $post)
            <div class="col-sm-6">
              <div class="post post-sm"><a class="post-img-link" href="post.html"><img class="lazy-img" src="{{ Storage::url($post->coverImage) }}" data-src="{{ Storage::url($post->coverImage) }}" alt="" width="400" height="257"></a>
                <div class="post-meta">
                  <div class="post-meta-item"><span class="post-meta-icon int-clock novi-icon"></span><a class="post-meta-link" href="post.html">{{$post->createdAt}}</a></div>
                </div>
                <h5 class="post-title"><a href="post.html">{{$post->topic}}</a></h5>
                <div class="post-text">{{$post->details}}</div>
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