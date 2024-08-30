@extends('client')
@section('contents')

<style>
  .cont {
    display: grid;
    place-items: center;
    min-height: 180px;
    -webkit-mask-box-image: -webkit-linear-gradient(top, transparent, transparent 0, white 10%, white 80%, transparent 100%);
  }

  .cards {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }

  .cards .card {

    position: absolute;
    display: grid;
    grid-template-columns: 70px 1fr;
    gap: 300px;
    padding: 1.5rem;
    max-width: 30rem;
    opacity: 0;
    background: #fff;
    border-radius: 0.5rem;
    pointer-events: none;
    animation: slideUp 15s infinite;
  }

  .cards .card:nth-child(1) {
    animation-delay: -3s;
  }

  .cards .card:nth-child(2) {
    animation-delay: 0s;
  }

  .cards .card:nth-child(3) {
    animation-delay: 3s;
  }

  .cards .card:nth-child(4) {
    animation-delay: 6s;
  }

  .cards .card:nth-child(5) {
    animation-delay: 9s;
  }

  .cards .card:nth-child(6) {
    animation-delay: 12s;
  }

  .cards .card:nth-child(7) {
    animation-delay: 15s;
  }

  .cards .card:nth-child(8) {
    animation-delay: 18s;
  }

  .cards .card:nth-child(9) {
    animation-delay: 21s;
  }

  .cards .card:nth-child(10) {
    animation-delay: 24s;
  }

  .cards .card:nth-child(11) {
    animation-delay: 27s;
  }

  .cards .card:nth-child(12) {
    animation-delay: 30s;
  }

  .cards .card:nth-child(13) {
    animation-delay: 33s;
    /* Repeat from 1 after the 10th card */
  }

  .cards .card:nth-child(14) {
    animation-delay: 36s;
    /* Repeat from 2 after the 11th card */
  }

  /* Continue this pattern for more cards */

  @keyframes slideUp {
    0% {
      transform: translateX(100%) scale(0.5);
      opacity: 0;
    }

    5%,
    20% {
      transform: translateX(100%) scale(0.7);
      opacity: 0.4;
    }

    25%,
    40% {
      transform: translateX(0) scale(1);
      opacity: 1;
    }

    45%,
    60% {
      transform: translateX(-100%) scale(0.7);
      opacity: 0.4;
    }

    65%,
    100% {
      transform: translateX(-100%) scale(0.5);
      opacity: 0;
    }
  }
</style>

<!-- Intro-->
<section class="section section-lg bg-gradient-animated text-center d-flex align-items-center min-vh-100 novi-background" data-preset='{"title":"Intro","category":"intro","reload":true,"id":"intro-10"}'>
  <div class="container">
    <div class="row justify-content-center novi-disabled">
      <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6" data-animate='{"class":"fadeInUp"}'>
        <img class="lazy-img navbar-logo-defult" data-src="images/gain-like-banner.png" aalt="Gainlike" width="300" height="200">
        <h3 class="text-primary text-center">One Stop Service Social Media</h3>
        <p>
          โซเชียลมีเดียครบวงจรทุกบริการจบที่เรา <br>เราคือผู้ให้บริการเพิ่มยอดไลก์ เพิ่มยอดวิว เพิ่มผู้ติดตามและอื่นๆ อีกมากมาย <br>พัฒนาโดยทีมระดับมืออาชีพ
        </p>
        <div class="offset-md group-30">
          @if(Session::has('user'))
          <a class="btn btn-lg btn-secondary" href="/services">
            <div class="icon-box-icon novi-icon int-user"> ไปที่หน้าร้านค้า</div>
          </a>
          @else
          <a class="btn btn-lg btn-primary" href="/login">
            <div class="icon-box-icon icon-sm novi-icon mdi-login"> เข้าสู่ระบบ</div>
          </a>
          <a class="btn btn-lg btn-secondary" href="/register">
            <div class="icon-box-icon icon-sm novi-icon mdi-account-plus"> สมัครสมาชิก</div>

          </a>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Novi-->
<section class="section section-lg bg-invisible pended-element novi-background" id="journey" data-preset='{"title":"Novi Builder","category":"content box","reload":true,"id":"novi-builder-2"}'>
  <div class="container">
    <div class="row row-30 align-items-center justify-content-lg-between">
      <div class="col-sm-6 col-md-5 col-lg-4" data-animate='{"class":"fadeInLeft"}'>
        <h1 class="text-primary">อันดับ 1 </h1>
        <h3 class="sh"> เรื่อง Social Gain-<span class="text-primary">Like </span></h3>

      </div>
      <div class="col-xs-10 col-sm-6 col-md-7">
        <img class="lazy-img shadow-lg" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="images/image-33-1280x800.gif" alt="" width="1280" height="800">
        <!-- <div class="ytp-cued-thumbnail-overlay-image" style="background-image: url(&quot;https://i.ytimg.com/vi/1fzCZRjXAI4/sddefault.jpg?sqp=-oaymwEmCIAFEOAD8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGH8gRigTMA8=&amp;rs=AOn4CLDgVS-hYlHVG0huxLSOZBYiV6-QAg&quot;);"></div> -->
      </div>
    </div>
  </div>
</section>
<!-- Promotions -->
<section class="section bg-invisible novi-background pended-element" data-preset='{"title":"Features","category":"carousel","reload":true,"id":"features-2"}'>
  <div class="container">
    <div class="row align-items-center slick-creative novi-disabled">
      <div class="col-md-7 d-md-flex flex-md-row-reverse">
        <div class="slick-slider slider-for slider-images" data-slick='{"arrows":false,"asNavFor":".slider-nav","draggable":false,"adaptiveHeight":true}'>
          @foreach($promotions as $promotion)
          <div class="text-end">
            <img class="pended-img" src="{{ Storage::url($promotion->coverImage) }}" data-src="{{ Storage::url($promotion->coverImage) }}" alt="" width="1042" height="910">
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-md-5 pt-5" style="padding-bottom: 14.2%">
        <div class="ps-xxl-3">
          <h2 class="text-secondary">โปรโมชั่น</h2>
          <div class="slick-slider slider-nav" data-slick='{"arrows":false,"asNavFor":".slider-for","autoplay":true,"autoplaySpeed":3000,"focusOnSelect":true,"variableWidth":true}'>
            @foreach($promotions as $promotion)
            <div class="slick-dot">{{$promotion->details}}</div>
            @endforeach
          </div>
          <div class="slick-slider slider-for" data-slick='{"arrows":false,"asNavFor":".slider-nav","draggable":false}'>
            @foreach($promotions as $promotion)
            <p>{{$promotion->details}}</p>
            @endforeach
          </div>
        </div>
        <div class="col-lg-auto mt-5" data-animate='{"class":"fadeInRight"}'><a class="btn btn-lg btn-secondary" target="_blank" href="https://online.fliphtml5.com/fnvhk/zpcb/#p=1">
            รายละเอียดโปรโมชั่น</a></div>
      </div>

    </div>
  </div>
</section>
<!-- Call to action-->
<section class="section section-lg bg-accent-light text-center text-lg-start pended-element novi-background" data-preset='{"title":"Call To Action","category":"call to action","reload":true,"id":"call-to-action-7"}'>
  <div class="container">
    <div class="row row-30 align-items-lg-center justify-content-lg-between">
      <div class="col-lg-12" data-animate='{"class":"fadeInLeft"}'>
        <h2 class="text-center">
          เราคือผู้นำด้านการเพิ่มความน่าเชื่อถือทางสื่อโซเชียลมีเดียครบวงจร</h2>

        <p>&emsp;&emsp;โดยเราไม่ใช่เว็บไซต์แลกเปลี่ยนไลก์ และไม่ต้องใช้โทเคนหรือรหัสผ่าน ปลอดภัย 100% บริการของเราครอบคลุมการเพิ่มยอดไลค์ ยอดวิว ยอดผู้ติดตาม และอื่นๆ อีกมากมาย บนสื่อโซเชียลมีเดีย เพื่อช่วยให้ธุรกิจและการตลาดออนไลน์ของคุณเป็นเรื่องง่าย สามารถเข้าถึงผู้คนได้มากขึ้น เพิ่มการมองเห็น และยกระดับยอดขาย </p>
        <p>&emsp;&emsp;รามีราคาที่ย่อมเยาที่สุดในตลาด เพื่อให้คุณสามารถเริ่มต้นธุรกิจเพิ่มยอดไลค์และสร้างรายได้ด้วยตัวเองได้อย่างง่ายดาย ทำงานได้สะดวก ทำได้ทุกที่ทุกเวลา โดยไม่ต้องลงทุนด้วยเงินก้อนใหญ่ และไม่มีความจำเป็นต้องสต๊อกสินค้า</p>
        <p>&emsp;&emsp;เรามีทีมสนับสนุนที่พร้อมให้บริการตลอด 24 ชั่วโมง เพื่อดูแลและสนับสนุนลูกค้าทุกท่านอย่างเต็มที่ เราภูมิใจและยินดีเป็นอย่างยิ่งที่ได้ให้บริการลูกค้าทุกคน และเราจะตอบกลับคำขอของคุณอย่างรวดเร็วที่สุด</p>

      </div>

    </div>
  </div>
</section>
<!-- Clients-->
<section class="section section-lg bg-200 text-center novi-background" data-preset='{"title":"Clients","category":"partner","reload":true,"id":"clients-2"}'>
  <div class="container">
    <h2 data-animate='{"class":"fadeInUp"}'>
      <div class="text-center" data-animate='{"class":"fadeInUp"}'>
        <h1 class="mb-6">ผู้ใช้งานทั้งหมดของเรา <span class="text-primary"><span data-counter>21655</span>+</span></h1>
      </div>
    </h2>
  </div>
  <div class="owl-carousel owl-style-4 " data-owl='{"margin":80,"loop":true,"autoWidth":true,"autoplayTimeout":4500,"autoplaySpeed":4500,"slideTransition":"linear"}' data-items="9">
    <img class="lazy-img" data-src="images/รีวิว/รีวิวเว็บ-1.png" alt="" width="400" height="110">
    <img class="lazy-img" data-src="images/รีวิว/รีวิวเว็บ-2.png" alt="" width="400" height="110">
    <img class="lazy-img" data-src="images/รีวิว/รีวิวเว็บ-3.png" alt="" width="400" height="110">
    <img class="lazy-img" data-src="images/รีวิว/รีวิวเว็บ-4.png" alt="" width="400" height="110">
    <img class="lazy-img" data-src="images/รีวิว/รีวิวเว็บ-5.png" alt="" width="400" height="110">
    <img class="lazy-img" data-src="images/รีวิว/รีวิวเว็บ-6.png" alt="" width="400" height="110">
    <img class="lazy-img" data-src="images/รีวิว/รีวิวเว็บ-7.png" alt="" width="400" height="110">
    <img class="lazy-img" data-src="images/รีวิว/รีวิวเว็บ-8.png" alt="" width="400" height="110">
    <img class="lazy-img" data-src="images/รีวิว/รีวิวเว็บ-9.png" alt="" width="400" height="110">
    <img class="lazy-img" data-src="images/รีวิว/รีวิวเว็บ-10.png" alt="" width="400" height="110">

  </div>
</section>

<section class="section section-lg bg-200 novi-background " data-preset='{"title":"Blurb Ordered Sample","category":"blurb","reload":true,"id":"blurb-ordered-sample-1"}'>
  <div class="container">
    <div class="row row-30">
      <div class="col-sm-6 col-lg-4 d-flex">
        <!-- Blurb-->
        <article class="blurb blurb-boxed text-center">
          <div class="blurb-embed text-secondary"><span class="blurb-number h2">4.8</span>/5</div>
          <div class="blurb-title h4">
            <div class="ratt-star ">
              <div class="icon-box-icon novi-icon fa-star icon icon-md icon-warning novi-icon"></div>
              <div class="icon-box-icon novi-icon fa-star icon icon-md icon-warning novi-icon"></div>
              <div class="icon-box-icon novi-icon fa-star icon icon-md icon-warning novi-icon"></div>
              <div class="icon-box-icon novi-icon fa-star icon icon-md icon-warning novi-icon"></div>
              <div class="icon-box-icon novi-icon fa-star icon icon-md icon-warning novi-icon"></div>

            </div>
          </div>
          <div class="blurb-text h4">ความพึงพอใจของลูกค้า</div>
        </article>
      </div>
      <div class="col-sm-6 col-lg-4 d-flex">
        <!-- Blurb-->
        <article class="blurb blurb-boxed  text-center">
          <div class="blurb-embed"><span class="blurb-number h2">
              <div class="icon-box-icon novi-icon icon-danger icon-xl fa-bar-chart"></div>
            </span></div>
          <div class="blurb-title h5">ออเดอร์ทั้งหมดที่ขายไปแล้ว</div>
          <div class="blurb-text h4"><span class="text-secondary"><span data-counter>1045008</span></span></div>
        </article>
      </div>
      <div class="col-sm-6 col-lg-4 d-flex">
        <!-- Blurb-->
        <article class="blurb blurb-boxed text-center">
          <div class="blurb-embed"><span class="blurb-number h2">
              <div class="icon-box-icon novi-icon icon-xl icon-info fa-shopping-basket"></div>
            </span></div>
          <div class="blurb-title h5">บริการที่เปิดใช้งาน ณ ปัจจุบัน</div>
          <div class="blurb-text h4"><span class="text-primary"><span data-counter>1003</span></span> บริการ</div>
        </article>
      </div>
    </div>
  </div>
</section>

<section class="section section-lg bg-invisible novi-background" data-preset='{"title":"Blurb Ordered Sample","category":"blurb","reload":true,"id":"blurb-ordered-sample-3"}'>
  <div class=" container">
    <div class="row row-30 justify-content-center">
      <div class="col-md-6">
        <!-- Blurb minimal-->
        <article class="blurb blurb-minimal text-center " style="min-height: 305px;">
          <div class="blurb-title h4 mt-5">
            <div class="icon-box-icon icon-info icon-xl novi-icon fa-diamond"></div>
          </div>
          <div class="blurb-embed"><span class="blurb-number h2 text-dark">
              คุณภาพสูง </span></div>
        </article>
      </div>
      <div class="col-md-6 ">
        <!-- Blurb minimal-->
        <article class="blurb blurb-minimal text-center" style="min-height: 305px;">
          <div class="blurb-title h4 mt-5">
            <div class="icon-box-icon icon-danger icon-xl novi-icon fa-rocket"></div>
          </div>
          <div class="blurb-embed"><span class="blurb-number h2 text-dark">
              ระบบรวดเร็ว</span></div>
        </article>
      </div>

      <div class="col-md-6 ">
        <!-- Blurb minimal-->
        <article class="blurb blurb-minimal text-center" style="min-height: 305px;">
          <div class="blurb-title h4 mt-5">
            <div class="icon-box-icon icon-darkk icon-xl novi-icon fa-credit-card-alt"></div>
          </div>
          <div class="blurb-embed"><span class="blurb-number h2 text-dark">
              ราคาถูกที่สุด</span></div>
        </article>
      </div>
      <div class="col-md-6 ">
        <!-- Blurb minimal-->
        <article class="blurb blurb-minimal text-center" style="min-height: 305px;">
          <div class="blurb-title h4 mt-5">
            <div class="icon-box-icon icon-warning icon-xl novi-icon fa-user-plus"></div>
          </div>
          <div class="blurb-embed"><span class="blurb-number h2 text-dark">
              ช่วยเหลือ 24 ชม.</span></div>
        </article>
      </div>

    </div>
  </div>
</section>
<!-- Child themes-->
<section class="section section-lg bg-invisible pended-element novi-background" data-preset='{"title":"Child Themes","category":"content box","reload":true,"id":"child-themes"}'>
  <div class="container">
    <div class="row row-15 align-items-center flex-md-row-reverse">
      <div class="col-sm-6 col-md-5" data-animate='{"class":"fadeInRight"}'>

        <h1><span>เราคือ </span><span class="text-info">ผู้ให้บริการ<br>" เพิ่มยอดไลก์ "</span> <span>ที่ดีที่สุด </span></h1>
      </div>
      <div class="col-sm-6 col-md-7" data-animate='{"class":"fadeInLeft"}'>



        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1330 920" width="1330" height="920" preserveAspectRatio="xMidYMid meet" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
          <defs>
            <clipPath id="__lottie_element_3">
              <rect width="1330" height="920" x="0" y="0"></rect>
            </clipPath>
            <linearGradient id="__lottie_element_7" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="-42.52299880981445" y1="-52.922000885009766" x2="82.41400146484375" y2="489.625">
              <stop offset="1%" stop-color="rgb(217,229,245)"></stop>
              <stop offset="41%" stop-color="rgb(219,226,250)"></stop>
              <stop offset="100%" stop-color="rgb(221,223,255)"></stop>
            </linearGradient>
            <clipPath id="__lottie_element_9">
              <path fill="#ffffff" clip-rule="nonzero" d=" M1364.2523193359375,905.2806396484375 C1345.0523681640625,1022.3646240234375 1330.626708984375,1036.1072998046875 1317.4056396484375,1048.3702392578125 C1316.3927001953125,1052.7442626953125 1305.814697265625,1049.95458984375 1274.32666015625,1050.7225341796875 C1084.8056640625,1050.7215576171875 302.9898376464844,1050.9212646484375 302.704833984375,1050.9212646484375 C302.73284912109375,1050.947265625 243.5325927734375,985.6050415039062 233.75271606445312,883.3952026367188 C236.5369415283203,740.490966796875 344.8476257324219,720.7084350585938 457.6446533203125,611.35693359375 C520.5326538085938,553.5164184570312 556.6035766601562,399.1424865722656 631.5305786132812,350.9649658203125 C704.7218017578125,303.33416748046875 821.8818969726562,277.2862243652344 935.5130004882812,395.55322265625 C1007.8847045898438,456.68017578125 1024.7322998046875,653.0662231445312 1154.6507568359375,698.7384643554688 C1317.5164794921875,744.3309936523438 1363.414306640625,796.5313720703125 1364.2523193359375,905.2806396484375" fill-opacity="1"></path>
            </clipPath>
            <linearGradient id="__lottie_element_14" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="84.50399780273438" y1="113.68800354003906" x2="-103.7699966430664" y2="-119.62899780273438">
              <stop offset="0%" stop-color="rgb(105,86,171)"></stop>
              <stop offset="41%" stop-color="rgb(134,127,192)"></stop>
              <stop offset="100%" stop-color="rgb(164,168,213)"></stop>
            </linearGradient>
            <linearGradient id="__lottie_element_18" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="-49.637001037597656" y1="7.323999881744385" x2="-158.4530029296875" y2="-157.218994140625">
              <stop offset="0%" stop-color="rgb(105,86,171)"></stop>
              <stop offset="41%" stop-color="rgb(134,127,192)"></stop>
              <stop offset="100%" stop-color="rgb(164,168,213)"></stop>
            </linearGradient>
            <linearGradient id="__lottie_element_22" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="-38.74800109863281" y1="23.31399917602539" x2="26.44700050354004" y2="-19.375">
              <stop offset="0%" stop-color="rgb(102,102,102)"></stop>
              <stop offset="41%" stop-color="rgb(65,65,65)"></stop>
              <stop offset="100%" stop-color="rgb(28,28,28)"></stop>
            </linearGradient>
            <linearGradient id="__lottie_element_26" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="-44.22800064086914" y1="-136.10800170898438" x2="-44.32099914550781" y2="-19.7189998626709">
              <stop offset="0%" stop-color="rgb(241,219,193)"></stop>
              <stop offset="41%" stop-color="rgb(236,205,183)"></stop>
              <stop offset="100%" stop-color="rgb(231,191,173)"></stop>
            </linearGradient>
            <linearGradient id="__lottie_element_27" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="391.5409851074219" y1="300.4320068359375" x2="392.07000732421875" y2="361.3890075683594">
              <stop offset="0%" stop-color="rgb(51,200,142)"></stop>
              <stop offset="41%" stop-color="rgb(33,174,131)"></stop>
              <stop offset="100%" stop-color="rgb(15,148,120)"></stop>
            </linearGradient>
            <linearGradient id="__lottie_element_28" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="-62.16600036621094" y1="-72.46099853515625" x2="-23.80299949645996" y2="-92.27899932861328">
              <stop offset="1%" stop-color="rgb(198,156,109)"></stop>
              <stop offset="41%" stop-color="rgb(169,127,83)"></stop>
              <stop offset="100%" stop-color="rgb(140,98,57)"></stop>
            </linearGradient>
            <linearGradient id="__lottie_element_35" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="-155.49200439453125" y1="-228.27000427246094" x2="-457.156005859375" y2="-229.84800720214844">
              <stop offset="0%" stop-color="rgb(51,200,142)"></stop>
              <stop offset="41%" stop-color="rgb(33,174,131)"></stop>
              <stop offset="100%" stop-color="rgb(15,148,120)"></stop>
            </linearGradient>
            <linearGradient id="__lottie_element_48" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="-7.039000034332275" y1="-91.21499633789062" x2="-179.24200439453125" y2="-132.89100646972656">
              <stop offset="0%" stop-color="rgb(94,52,52)"></stop>
              <stop offset="41%" stop-color="rgb(79,44,44)"></stop>
              <stop offset="100%" stop-color="rgb(63,35,35)"></stop>
            </linearGradient>
            <linearGradient id="__lottie_element_52" spreadMethod="pad" gradientUnits="userSpaceOnUse" x1="-187.4709930419922" y1="-206.5330047607422" x2="-178.65199279785156" y2="3.809000015258789">
              <stop offset="0%" stop-color="rgb(57,151,222)"></stop>
              <stop offset="41%" stop-color="rgb(53,116,205)"></stop>
              <stop offset="100%" stop-color="rgb(49,80,188)"></stop>
            </linearGradient>
          </defs>
          <g clip-path="url(#__lottie_element_3)">
            <g transform="matrix(1,0,0,1,98.3800048828125,189)" opacity="1" style="display: block;">
              <g opacity="1" transform="matrix(1,0,0,1,596.4819946289062,350.6780090332031)">
                <path fill="url(#__lottie_element_7)" fill-opacity="1" d=" M532.3621215820312,203.1139373779297 C513.162109375,320.19793701171875 498.8659973144531,333.7900085449219 485.6449890136719,346.0530090332031 C484.6319885253906,350.427001953125 474.0539855957031,347.6369934082031 442.5660095214844,348.4049987792969 C253.0449981689453,348.40399169921875 -528.7588500976562,348.6047058105469 -529.0438232421875,348.6047058105469 C-529.0158081054688,348.6307067871094 -588.267822265625,283.2701110839844 -598.0484008789062,180.99850463867188 C-595.1656494140625,38.228206634521484 -486.7383117675781,18.64324951171875 -374.0428771972656,-91.03716278076172 C-311.24005126953125,-149.02224731445312 -275.41387939453125,-303.85662841796875 -200.3656005859375,-351.8944091796875 C-127.01078033447266,-399.4670104980469 -9.564189910888672,-425.4410095214844 104.17506408691406,-306.75140380859375 C176.3001251220703,-245.51600646972656 193.10768127441406,-48.676998138427734 323.1103210449219,-3.1465303897857666 C485.9739074707031,42.15863037109375 531.4664306640625,94.41210174560547 532.3621215820312,203.1139373779297z"></path>
              </g>
            </g>
            <g clip-path="url(#__lottie_element_9)" transform="matrix(1,0,0,1,-137,-163)" opacity="1" style="display: block;">
              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="7" d=" M1094.5880126953125,201.8459930419922 C1318.362060546875,450.5190124511719 1458.2979736328125,700.3619995117188 1270.4549560546875,818.9010009765625 C826.9110107421875,1098.803955078125 932,1192 932,1192 C932,1192 970.5,1255.5 1038.5,1163.5 C1106.5,1071.5 1147.009033203125,1048.0360107421875 1370.7550048828125,980.2680053710938 C1594.5,912.5 1576.5,593.5 1576.5,593.5 M849,1240 C849,1240 884,962 597,959 C310,956 146,942 98,751 C50,560 331.0400085449219,646.4450073242188 590.02001953125,778.2230224609375 C849,910 1142,795 1073,428 C1004,61 609.5,17.5 649.5,151.5 C689.5,285.5 1090.5,535.5 904.1890258789062,712.7479858398438 C728.2410278320312,880.1400146484375 17.5,151.5 17.5,151.5"></path>
              <path stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0" stroke-miterlimit="10" stroke="rgb(255,255,255)" stroke-opacity="1" stroke-width="7" d=" M849,1240 C849,1240 884,962 597,959 C310,956 146,942 98,751 C50,560 331.0400085449219,646.4450073242188 590.02001953125,778.2230224609375 C849,910 1142,795 1073,428 C1004,61 609.5,17.5 649.5,151.5 C689.5,285.5 1090.5,535.5 904.1890258789062,712.7479858398438 C728.2410278320312,880.1400146484375 17.5,151.5 17.5,151.5"></path>
            </g>
            <g transform="matrix(0.9999288320541382,-0.011928352527320385,0.011928352527320385,0.9999288320541382,18.577789306640625,591.6846313476562)" opacity="1" style="display: block;">
              <g opacity="1" transform="matrix(1,0,0,1,162.14300537109375,165.51300048828125)">
                <path fill="url(#__lottie_element_14)" fill-opacity="1" d=" M-131.64999389648438,-153.18800354003906 C-149.44000244140625,-128.281005859375 -161.89300537109375,-5.526000022888184 -78.27799987792969,10.486000061035156 C-78.27799987792969,10.486000061035156 -44.47600173950195,17.601999282836914 -35.58100128173828,58.52000045776367 C-26.684999465942383,99.43900299072266 33.801998138427734,165.26199340820312 97.8479995727539,124.34400177001953 C161.89300537109375,83.4260025024414 128.0919952392578,-5.5269999504089355 96.06900024414062,-32.21200180053711 C64.0459976196289,-58.89799880981445 68.49299621582031,-59.7869987487793 50.702999114990234,-88.25299835205078 C32.91299819946289,-116.71800231933594 31.132999420166016,-118.49600219726562 15.121999740600586,-111.37999725341797 C-0.8899999856948853,-104.26300048828125 15.121999740600586,-65.1240005493164 32.91299819946289,-43.7760009765625 C50.702999114990234,-22.427000045776367 32.91299819946289,-8.194999694824219 25.79599952697754,-11.753000259399414 C18.68000030517578,-15.310999870300293 11.564000129699707,-47.334999084472656 -25.79599952697754,-49.112998962402344 C-63.15599822998047,-50.893001556396484 -68.49400329589844,-91.80999755859375 -72.052001953125,-114.93800354003906 C-73.48899841308594,-124.28399658203125 -76.81600189208984,-132.89999389648438 -80.26899719238281,-139.85499572753906 C-82.13200378417969,-137.98500061035156 -84.53800201416016,-136.85299682617188 -87.17400360107422,-136.85299682617188 C-93.06900024414062,-136.85299682617188 -97.8479995727539,-142.50100708007812 -97.8479995727539,-149.468994140625 C-97.8479995727539,-153.4010009765625 -96.322998046875,-156.91299438476562 -93.93599700927734,-159.2270050048828 C-97.58300018310547,-161.74000549316406 -103.98600006103516,-165.26199340820312 -111.23899841308594,-165.26300048828125 C-117.81800079345703,-165.26300048828125 -125.09400177001953,-162.36599731445312 -131.64999389648438,-153.18800354003906z"></path>
                <g opacity="1" transform="matrix(1,0,0,1,0,0)"></g>
              </g>
              <g opacity="0.34" transform="matrix(1,0,0,1,155.8820037841797,141.93499755859375)" style="mix-blend-mode: overlay;">
                <path fill="rgb(105,0,88)" fill-opacity="1" d=" M117.11299896240234,137.71299743652344 C113.20099639892578,130.12399291992188 108.5510025024414,122.98999786376953 102.47699737548828,115.86599731445312 C91.375,94.89700317382812 88.70600128173828,74.97200012207031 86.10800170898438,55.54199981689453 C82.89900207519531,31.554000854492188 79.86900329589844,8.895999908447266 61.92599868774414,-14.175000190734863 C34.99100112915039,-48.80699920654297 30.55699920654297,-78 30.09000015258789,-90.99099731445312 C28.976999282836914,-90.7509994506836 27.784000396728516,-90.38400268554688 26.492000579833984,-89.91200256347656 C27.06599998474121,-75.97000122070312 31.982999801635742,-46.875999450683594 59.117000579833984,-11.98900032043457 C76.47000122070312,10.321000099182129 79.43800354003906,32.516998291015625 82.58100128173828,56.013999938964844 C84.8030014038086,72.63099670410156 87.0719985961914,89.60099792480469 94.47799682617188,107.31400299072266 C74.38999938964844,87.60900115966797 41.4630012512207,66.62999725341797 -18.709999084472656,35.154998779296875 C-77.7959976196289,4.25 -100.03199768066406,-43.8390007019043 -108.28099822998047,-78.73600006103516 C-114.5719985961914,-105.34500122070312 -113.9260025024414,-128.53900146484375 -112.96299743652344,-140.1269989013672 C-114.1989974975586,-139.6269989013672 -115.43900299072266,-138.99899291992188 -116.67500305175781,-138.20899963378906 C-117.54000091552734,-125.7750015258789 -117.75399780273438,-103.4229965209961 -111.7770004272461,-78.05400085449219 C-103.37300109863281,-42.38999938964844 -80.69000244140625,6.75 -20.361000061035156,38.30699920654297 C48.224998474121094,74.18299865722656 80.9749984741211,96.58799743652344 99.31400299072266,117.5260009765625 C103.2229995727539,124.9000015258789 108.1500015258789,132.41099548339844 114.45600128173828,140.08599853515625 C114.45600128173828,140.08599853515625 114.48200225830078,140.0659942626953 114.48200225830078,140.0659942626953 C114.49199676513672,140.08599853515625 114.5009994506836,140.10699462890625 114.51100158691406,140.1269989013672 C115.40899658203125,139.33999633789062 116.28299713134766,138.54400634765625 117.12799835205078,137.73399353027344 C117.12799835205078,137.73399353027344 117.11299896240234,137.71299743652344 117.11299896240234,137.71299743652344z"></path>
              </g>
            </g>
            <g transform="matrix(0.9940552711486816,-0.10887663066387177,0.10887663066387177,0.9940552711486816,61.392364501953125,576.037841796875)" opacity="1" style="display: block;">
              <g opacity="1" transform="matrix(1,0,0,1,227.88400268554688,329.20001220703125)">
                <path fill="url(#__lottie_element_18)" fill-opacity="1" d=" M-196.89599609375,-322.3110046386719 C-227.71299743652344,-302.4230041503906 -199.26199340820312,-251.9709930419922 -169.843994140625,-226.2790069580078 C-140.4250030517578,-200.58599853515625 -127.91899871826172,-180.41200256347656 -133.54600524902344,-92.0479965209961 C-139.1719970703125,-3.684999942779541 -69.94300079345703,0.9380000233650208 -53.63800048828125,-0.8529999852180481 C-37.334999084472656,-2.6449999809265137 -1,-39.44499969482422 -8.130999565124512,-99.03500366210938 C-15.26200008392334,-158.625 -49.05099868774414,-164.03700256347656 -29.773000717163086,-228.85800170898438 C-10.494999885559082,-293.6789855957031 -61.0359992980957,-279.2919921875 -80.02799987792969,-257.7929992675781 C-99.0199966430664,-236.29400634765625 -110.30699920654297,-241.84800720214844 -126.25199890136719,-272.1260070800781 C-131.39599609375,-281.8940124511719 -135.46600341796875,-289.37298583984375 -138.6269989013672,-295.0400085449219 C-139.59100341796875,-292.0979919433594 -140.7570037841797,-289.37298583984375 -142.27000427246094,-287.1579895019531 C-143.28500366210938,-285.6719970703125 -144.71200561523438,-284.635009765625 -146.29400634765625,-284.09600830078125 C-148.59800720214844,-283.31201171875 -151.2310028076172,-283.5830078125 -153.3939971923828,-285.0610046386719 C-157.04600524902344,-287.55499267578125 -157.98500061035156,-292.5369873046875 -155.49099731445312,-296.18798828125 C-153.61300659179688,-298.9389953613281 -152.0850067138672,-306.59698486328125 -151.0749969482422,-311.6629943847656 C-150.87399291992188,-312.67401123046875 -150.68299865722656,-313.62298583984375 -150.49600219726562,-314.52899169921875 C-154.68499755859375,-319.82598876953125 -163.78500366210938,-328.9110107421875 -176.92300415039062,-328.9119873046875 C-182.7989959716797,-328.9129943847656 -189.4810028076172,-327.09600830078125 -196.89599609375,-322.3110046386719z"></path>
              </g>
              <g opacity="0.34" transform="matrix(1,0,0,1,107.0270004272461,166.7239990234375)" style="mix-blend-mode: overlay;">
                <path fill="rgb(105,0,88)" fill-opacity="1" d=" M70.03299713134766,-112.69100189208984 C59.69900131225586,-89.73799896240234 30.395000457763672,-16.148000717163086 40.4630012512207,60.59199905395508 C37.106998443603516,49.03499984741211 33.90800094604492,36.19200134277344 31.024999618530273,21.950000762939453 C11.699000358581543,-73.48300170898438 -64.05599975585938,-139.23300170898438 -82.58999633789062,-154.0970001220703 C-83.37000274658203,-153.18099975585938 -84.09600067138672,-152.24099731445312 -84.73100280761719,-151.25599670410156 C-66.41100311279297,-136.5570068359375 8.458999633789062,-71.55799865722656 27.535999298095703,22.656999588012695 C43.59600067138672,101.96199798583984 68.90399932861328,139.2790069580078 81.9990005493164,154.0970001220703 C82.90499877929688,153.35699462890625 83.81600189208984,152.56199645996094 84.73200225830078,151.7169952392578 C80.84500122070312,147.28599548339844 75.78700256347656,140.74899291992188 70.18000030517578,131.53700256347656 C64.08799743652344,121.52799987792969 56.722999572753906,107.25199890136719 49.45800018310547,87.83699798583984 C25.98699951171875,0.14399999380111694 64.03399658203125,-91.24500274658203 74.24400329589844,-113.35800170898438 C72.86499786376953,-113.22699737548828 71.45700073242188,-113.0009994506836 70.03299713134766,-112.69100189208984z"></path>
              </g>
            </g>
            <g transform="matrix(1,0,0,1,132.5,508.5)" opacity="1" style="display: block;">
              <g opacity="1" transform="matrix(1,0,0,1,61.80099868774414,186.93800354003906)">
                <path fill="rgb(37,49,56)" fill-opacity="1" d=" M55.08100128173828,164.1699981689453 C55.08100128173828,164.1699981689453 49.50299835205078,166.843994140625 49.50299835205078,166.843994140625 C49.50299835205078,166.843994140625 -55.08100128173828,-51.60900115966797 -55.08100128173828,-51.60900115966797 C-55.08100128173828,-51.60900115966797 6.63100004196167,-166.843994140625 6.63100004196167,-166.843994140625 C6.63100004196167,-166.843994140625 12.081000328063965,-163.9250030517578 12.081000328063965,-163.9250030517578 C12.081000328063965,-163.9250030517578 -48.150001525878906,-51.45199966430664 -48.150001525878906,-51.45199966430664 C-48.150001525878906,-51.45199966430664 55.08100128173828,164.1699981689453 55.08100128173828,164.1699981689453z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,10.187000274658203,135.406005859375)">
                <path fill="rgb(45,48,146)" fill-opacity="1" d=" M-7.309000015258789,4.757999897003174 C-4.681000232696533,8.795000076293945 0.722000002861023,9.937000274658203 4.757999897003174,7.309000015258789 C8.795000076293945,4.681000232696533 9.935999870300293,-0.722000002861023 7.308000087738037,-4.758999824523926 C4.678999900817871,-8.795000076293945 -0.7229999899864197,-9.935999870300293 -4.760000228881836,-7.307000160217285 C-8.795999526977539,-4.678999900817871 -9.937000274658203,0.722000002861023 -7.309000015258789,4.757999897003174z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,70.13400268554688,22.2189998626709)">
                <path fill="rgb(45,48,146)" fill-opacity="1" d=" M-7.308000087738037,4.757999897003174 C-4.679999828338623,8.793999671936035 0.722000002861023,9.937000274658203 4.757999897003174,7.309000015258789 C8.795000076293945,4.679999828338623 9.937000274658203,-0.722000002861023 7.308000087738037,-4.758999824523926 C4.679999828338623,-8.795000076293945 -0.7239999771118164,-9.937000274658203 -4.760000228881836,-7.309000015258789 C-8.795999526977539,-4.679999828338623 -9.935999870300293,0.722000002861023 -7.308000087738037,4.757999897003174z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,93.25299835205078,34.637001037597656)">
                <path fill="rgb(0,160,237)" fill-opacity="1" d=" M32.926998138427734,-19.424999237060547 C32.926998138427734,-19.424999237060547 3.2929999828338623,34.387001037597656 3.2929999828338623,34.387001037597656 C3.2929999828338623,34.387001037597656 -20.400999069213867,15.880000114440918 -20.400999069213867,15.880000114440918 C-20.400999069213867,15.880000114440918 -27.493000030517578,10.333000183105469 -27.493000030517578,10.333000183105469 C-31.722999572753906,7.02400016784668 -32.926998138427734,1.1339999437332153 -30.33300018310547,-3.569999933242798 C-30.33300018310547,-3.569999933242798 -17.10300064086914,-27.559999465942383 -17.10300064086914,-27.559999465942383 C-14.51099967956543,-32.26100158691406 -8.888999938964844,-34.387001037597656 -3.8350000381469727,-32.57699966430664 C-3.8350000381469727,-32.57699966430664 4.642000198364258,-29.542999267578125 4.642000198364258,-29.542999267578125 C4.642000198364258,-29.542999267578125 32.926998138427734,-19.424999237060547 32.926998138427734,-19.424999237060547z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,99.51599884033203,37.05799865722656)">
                <path fill="rgb(0,0,198)" fill-opacity="0.2" d=" M26.663999557495117,-21.84600067138672 C26.663999557495117,-21.84600067138672 -2.9700000286102295,31.965999603271484 -2.9700000286102295,31.965999603271484 C-2.9700000286102295,31.965999603271484 -26.663999557495117,13.458999633789062 -26.663999557495117,13.458999633789062 C-26.663999557495117,13.458999633789062 -1.621000051498413,-31.964000701904297 -1.621000051498413,-31.964000701904297 C-1.621000051498413,-31.964000701904297 26.663999557495117,-21.84600067138672 26.663999557495117,-21.84600067138672z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,134.4510040283203,58.277000427246094)">
                <path fill="rgb(0,160,237)" fill-opacity="1" d=" M49.540000915527344,-25.04800033569336 C49.540000915527344,-25.04800033569336 8.199999809265137,49.98699951171875 8.199999809265137,49.98699951171875 C5.501999855041504,54.8849983215332 -0.9639999866485596,56.15599822998047 -5.315999984741211,52.64500045776367 C-5.315999984741211,52.64500045776367 -39.1879997253418,25.31599998474121 -39.1879997253418,25.31599998474121 C-49.40700149536133,17.070999145507812 -52.23699951171875,2.680999994277954 -45.900001525878906,-8.819999694824219 C-45.900001525878906,-8.819999694824219 -29.076000213623047,-39.35900115966797 -29.076000213623047,-39.35900115966797 C-22.73900032043457,-50.86000061035156 -9.064000129699707,-56.15599822998047 3.367000102996826,-51.92399978637695 C3.367000102996826,-51.92399978637695 44.56399917602539,-37.893001556396484 44.56399917602539,-37.893001556396484 C49.856998443603516,-36.090999603271484 52.237998962402344,-29.94499969482422 49.540000915527344,-25.04800033569336z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,113.12899780273438,356.0710144042969)">
                <path fill="url(#__lottie_element_22)" fill-opacity="1" d=" M52.880001068115234,16.611000061035156 C52.880001068115234,16.611000061035156 -52.880001068115234,16.611000061035156 -52.880001068115234,16.611000061035156 C-49.11000061035156,-2.687000036239624 -32.20100021362305,-16.611000061035156 -12.538000106811523,-16.611000061035156 C-12.538000106811523,-16.611000061035156 12.538000106811523,-16.611000061035156 12.538000106811523,-16.611000061035156 C32.20000076293945,-16.611000061035156 49.11000061035156,-2.687000036239624 52.880001068115234,16.611000061035156z"></path>
              </g>
            </g>
            <g transform="matrix(1,0,0,1,1011.6729736328125,753.208984375)" opacity="1" style="display: block;">
              <g opacity="1" transform="matrix(1,0,0,1,89.58100128173828,155.11399841308594)">
                <path fill="url(#__lottie_element_26)" fill-opacity="1" d=" M-5.925000190734863,-132.8939971923828 C-5.925000190734863,-132.8939971923828 -14.597000122070312,-23.861000061035156 -14.597000122070312,-23.861000061035156 C-14.597000122070312,-23.861000061035156 -74.58300018310547,-23.861000061035156 -74.58300018310547,-23.861000061035156 C-74.58300018310547,-23.861000061035156 -83.25399780273438,-132.8939971923828 -83.25399780273438,-132.8939971923828 C-83.25399780273438,-132.8939971923828 -5.925000190734863,-132.8939971923828 -5.925000190734863,-132.8939971923828z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,-346.58599853515625,-251.94500732421875)">
                <path fill="url(#__lottie_element_27)" fill-opacity="1" d=" M355.0989990234375,301.7590026855469 C355.0989990234375,301.7590026855469 359.8590087890625,361.6189880371094 359.8590087890625,361.6189880371094 C359.8590087890625,361.6189880371094 423.3030090332031,361.6189880371094 423.3030090332031,361.6189880371094 C423.3030090332031,361.6189880371094 428.06298828125,301.7749938964844 428.06298828125,301.7749938964844 C428.06298828125,301.7749938964844 355.0989990234375,301.7590026855469 355.0989990234375,301.7590026855469z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,88.05000305175781,160.38699340820312)">
                <path fill="url(#__lottie_element_28)" fill-opacity="1" d=" M-64.875,-80.38700103759766 C-64.875,-68.86499786376953 -55.55099868774414,-59.525001525878906 -44.04999923706055,-59.525001525878906 C-32.54800033569336,-59.525001525878906 -23.225000381469727,-68.86499786376953 -23.225000381469727,-80.38700103759766 C-23.225000381469727,-91.90899658203125 -32.54800033569336,-101.2490005493164 -44.04999923706055,-101.2490005493164 C-55.55099868774414,-101.2490005493164 -64.875,-91.90899658203125 -64.875,-80.38700103759766z"></path>
              </g>
              <g opacity="0.66" transform="matrix(1,0,0,1,0,0)" style="mix-blend-mode: overlay;">
                <g opacity="1" transform="matrix(1,0,0,1,42.67499923706055,78.15599822998047)">
                  <path fill="rgb(227,235,247)" fill-opacity="1" d=" M-2.138000011444092,5.34499979019165 C-0.7089999914169312,3.9159998893737793 -0.3619999885559082,2.9189999103546143 0.041999999433755875,1.7649999856948853 C0.49300000071525574,0.4699999988079071 1.00600004196167,-0.996999979019165 2.890000104904175,-2.882999897003174 C4.776000022888184,-4.76800012588501 6.24399995803833,-5.28000020980835 7.538000106811523,-5.73199987411499 C8.383000373840332,-6.0269999504089355 9.145000457763672,-6.294000148773193 10.053000450134277,-6.974999904632568 C8.12600040435791,-8.737000465393066 5.460999965667725,-9.489999771118164 2.503999948501587,-9.097999572753906 C-0.45399999618530273,-8.706999778747559 -3.372999906539917,-7.202000141143799 -5.715000152587891,-4.860000133514404 C-8.057000160217285,-2.5179998874664307 -9.562000274658203,0.4000000059604645 -9.95300006866455,3.3589999675750732 C-10.239999771118164,5.519999980926514 -9.913000106811523,7.52400016784668 -9.031000137329102,9.199000358581543 C-7.758999824523926,8.237000465393066 -6.690000057220459,7.86299991607666 -5.7170000076293945,7.52400016784668 C-4.563000202178955,7.119999885559082 -3.565999984741211,6.7729997634887695 -2.138000011444092,5.34499979019165z"></path>
                </g>
                <g opacity="1" transform="matrix(1,0,0,1,45.426998138427734,82.61799621582031)">
                  <path fill="rgb(227,235,247)" fill-opacity="1" d=" M5.7170000076293945,-7.52400016784668 C4.563000202178955,-7.122000217437744 3.565000057220459,-6.77400016784668 2.13700008392334,-5.34499979019165 C0.7080000042915344,-3.9170000553131104 0.3610000014305115,-2.9200000762939453 -0.041999999433755875,-1.7649999856948853 C-0.49399998784065247,-0.4699999988079071 -1.00600004196167,0.996999979019165 -2.8910000324249268,2.881999969482422 C-4.7769999504089355,4.76800012588501 -6.24399995803833,5.28000020980835 -7.538000106811523,5.73199987411499 C-8.383999824523926,6.0269999504089355 -9.145999908447266,6.293000221252441 -10.055000305175781,6.974999904632568 C-8.460000038146973,8.432000160217285 -6.361000061035156,9.199999809265137 -4.010000228881836,9.199999809265137 C-3.5179998874664307,9.199999809265137 -3.0160000324249268,9.166000366210938 -2.505000114440918,9.097999572753906 C0.453000009059906,8.706000328063965 3.371999979019165,7.202000141143799 5.714000225067139,4.860000133514404 C8.055000305175781,2.5179998874664307 9.562000274658203,-0.4000000059604645 9.95300006866455,-3.3589999675750732 C10.23900032043457,-5.519999980926514 9.913000106811523,-7.525000095367432 9.029999732971191,-9.199999809265137 C7.758999824523926,-8.237000465393066 6.690000057220459,-7.863999843597412 5.7170000076293945,-7.52400016784668z"></path>
                </g>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,44.33399963378906,21.964000701904297)">
                <path fill="rgb(255,255,255)" fill-opacity="1" d=" M41.97700119018555,7.947999954223633 C41.97700119018555,7.947999954223633 -41.974998474121094,7.947999954223633 -41.974998474121094,7.947999954223633 C-43.138999938964844,7.947999954223633 -44.08399963378906,7.004000186920166 -44.08399963378906,5.840000152587891 C-44.08399963378906,5.840000152587891 -44.08399963378906,-5.840000152587891 -44.08399963378906,-5.840000152587891 C-44.08399963378906,-7.004000186920166 -43.138999938964844,-7.947999954223633 -41.974998474121094,-7.947999954223633 C-41.974998474121094,-7.947999954223633 41.97700119018555,-7.947999954223633 41.97700119018555,-7.947999954223633 C43.14099884033203,-7.947999954223633 44.08399963378906,-7.004000186920166 44.08399963378906,-5.840000152587891 C44.08399963378906,-5.840000152587891 44.08399963378906,5.840000152587891 44.08399963378906,5.840000152587891 C44.08399963378906,7.004000186920166 43.14099884033203,7.947999954223633 41.97700119018555,7.947999954223633z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,44.334999084472656,7.132999897003174)">
                <path fill="rgb(248,237,224)" fill-opacity="1" d=" M38.04199981689453,6.882999897003174 C38.04199981689453,6.882999897003174 -38.04199981689453,6.882999897003174 -38.04199981689453,6.882999897003174 C-38.04199981689453,6.882999897003174 -34.41600036621094,-4.3420000076293945 -34.41600036621094,-4.3420000076293945 C-33.926998138427734,-5.855999946594238 -32.516998291015625,-6.882999897003174 -30.924999237060547,-6.882999897003174 C-30.924999237060547,-6.882999897003174 30.923999786376953,-6.882999897003174 30.923999786376953,-6.882999897003174 C32.51599884033203,-6.882999897003174 33.92599868774414,-5.855999946594238 34.415000915527344,-4.3420000076293945 C34.415000915527344,-4.3420000076293945 38.04199981689453,6.882999897003174 38.04199981689453,6.882999897003174z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,45.10900115966797,3.2880001068115234)">
                <path fill="rgb(231,204,172)" fill-opacity="1" d=" M8.531000137329102,3.0369999408721924 C8.531000137329102,3.0369999408721924 -8.531000137329102,3.0369999408721924 -8.531000137329102,3.0369999408721924 C-10.192999839782715,3.0369999408721924 -11.538999557495117,1.690000057220459 -11.538999557495117,0.028999999165534973 C-11.538999557495117,0.028999999165534973 -11.538999557495117,-3.0369999408721924 -11.538999557495117,-3.0369999408721924 C-11.538999557495117,-3.0369999408721924 11.538999557495117,-3.0369999408721924 11.538999557495117,-3.0369999408721924 C11.538999557495117,-3.0369999408721924 11.538999557495117,0.028999999165534973 11.538999557495117,0.028999999165534973 C11.538999557495117,1.690000057220459 10.192000389099121,3.0369999408721924 8.531000137329102,3.0369999408721924z"></path>
              </g>
            </g>
            <g transform="matrix(1,0,0,1,1040.85302734375,655.510009765625)" opacity="1" style="display: block;">
              <g opacity="1" transform="matrix(1,0,0,0.7005299925804138,33.22999954223633,44.709999084472656)">
                <path fill="rgb(255,255,255)" fill-opacity="0.7000000000000001" d=" M8.340922355651855,-50.38949966430664 C13.528310775756836,-33.82716751098633 11.842512130737305,-11.977531433105469 6.475902557373047,1.4341133832931519 C-1.9205366373062134,21.464092254638672 -6.0455121994018555,28.544998168945312 -8.892026901245117,50.32740783691406 C-11.090973854064941,38.1725959777832 -11.83484172821045,20.632911682128906 -2.2616119384765625,-2.2624216079711914 C6.2035393714904785,-22.701284408569336 6.011308193206787,-27.249677658081055 8.340922355651855,-50.38949966430664z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,0.7005299925804138,-6.085999965667725,35.20000076293945)">
                <path fill="rgb(255,255,255)" fill-opacity="0.7000000000000001" d=" M8.340922355651855,-50.38949966430664 C13.528310775756836,-33.82716751098633 11.842512130737305,-11.977531433105469 6.475902557373047,1.4341133832931519 C-1.9205366373062134,21.464092254638672 -6.0455121994018555,28.544998168945312 -8.892026901245117,50.32740783691406 C-11.090973854064941,38.1725959777832 -11.83484172821045,20.632911682128906 -2.2616119384765625,-2.2624216079711914 C6.2035393714904785,-22.701284408569336 6.011308193206787,-27.249677658081055 8.340922355651855,-50.38949966430664z"></path>
              </g>
              <g opacity="1" transform="matrix(1.226699948310852,0,0,0.8593400120735168,13.347000122070312,40.737998962402344)">
                <path fill="rgb(255,255,255)" fill-opacity="0.7000000000000001" d=" M8.340922355651855,-50.38949966430664 C13.528310775756836,-33.82716751098633 11.842512130737305,-11.977531433105469 6.475902557373047,1.4341133832931519 C-1.9205366373062134,21.464092254638672 -6.0455121994018555,28.544998168945312 -8.892026901245117,50.32740783691406 C-11.090973854064941,38.1725959777832 -11.83484172821045,20.632911682128906 -2.2616119384765625,-2.2624216079711914 C6.2035393714904785,-22.701284408569336 6.011308193206787,-27.249677658081055 8.340922355651855,-50.38949966430664z"></path>
              </g>
            </g>
            <g transform="matrix(1,0,0,1,574.677001953125,531)" opacity="1" style="display: block;">
              <g opacity="1" transform="matrix(1,0,0,1,407.718994140625,349.7960205078125)">
                <path fill="url(#__lottie_element_35)" fill-opacity="1" d=" M-235.54200744628906,-345.3269958496094 C-235.54200744628906,-345.3269958496094 -292.9419860839844,-331.4849853515625 -328.14801025390625,-303.79998779296875 C-363.35400390625,-276.114013671875 -387.5329895019531,-135.3820037841797 -387.5329895019531,-135.3820037841797 C-387.5329895019531,-135.3820037841797 -407.1889953613281,-130.76800537109375 -403.6809997558594,-112.31099700927734 C-403.6809997558594,-112.31099700927734 -370.8299865722656,-116.78700256347656 -353.8030090332031,-81.58100128173828 C-349.6499938964844,-73.04499816894531 -346.4670104980469,-62.154998779296875 -344.89801025390625,-48.3120002746582 C-344.89801025390625,-48.3120002746582 -327.5480041503906,-49.41999816894531 -326.4410095214844,-64.46199798583984 C-326.4410095214844,-64.46199798583984 -310.8450012207031,-80.05899810791016 -307.0150146484375,-109.54299926757812 C-306.9230041503906,-110.09600067138672 -306.83099365234375,-110.60399627685547 -306.78399658203125,-111.15799713134766 C-306.78399658203125,-111.15799713134766 -305.0539855957031,-30.5939998626709 -313.7279968261719,-0.4169999957084656 C-313.7279968261719,-0.4169999957084656 -70.85199737548828,-0.25 -70.85199737548828,-0.25 C-70.85199737548828,-0.25 -20.174999237060547,-0.4169999957084656 -20.174999237060547,-0.4169999957084656 C-20.174999237060547,-0.4169999957084656 -15.395000457763672,-15.190999984741211 -18.075000762939453,-24.979000091552734 C-18.075000762939453,-24.979000091552734 -0.25,-49.56100082397461 -18.39900016784668,-79.2699966430664 C-18.39900016784668,-79.2699966430664 -14.383999824523926,-246.72300720214844 -37.45500183105469,-286.4960021972656 C-60.5260009765625,-326.2699890136719 -176.4340057373047,-349.3420104980469 -176.4340057373047,-349.3420104980469 C-176.4340057373047,-349.3420104980469 -235.54200744628906,-345.3269958496094 -235.54200744628906,-345.3269958496094z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,77.02999877929688,219.58599853515625)" style="mix-blend-mode: multiply;">
                <path fill="rgb(48,80,187)" fill-opacity="0.3" d=" M23.393999099731445,20.464000701904297 C19.565000534057617,49.948001861572266 3.9690001010894775,65.54499816894531 3.9690001010894775,65.54499816894531 C2.8610000610351562,80.58699798583984 -14.48799991607666,81.69400024414062 -14.48799991607666,81.69400024414062 C-16.05699920654297,67.85199737548828 -19.240999221801758,56.96200180053711 -23.393999099731445,48.42599868774414 C-14.211000442504883,39.56700134277344 -3.7829999923706055,25.86199951171875 2.260999917984009,5.790999889373779 C14.48900032043457,-34.62900161743164 6.690999984741211,-78.55699920654297 6.13700008392334,-81.69300079345703 C16.104000091552734,-43.90299987792969 21.54800033569336,2.4690001010894775 23.393999099731445,20.464000701904297z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,245.45199584960938,236.41600036621094)" style="mix-blend-mode: multiply;">
                <path fill="rgb(48,80,187)" fill-opacity="0.3" d=" M143.58900451660156,33.90599822998047 C143.58900451660156,33.90599822998047 92.53399658203125,5.5960001945495605 56.361000061035156,32.380001068115234 C57.625,4.822000026702881 57.15800094604492,-57.040000915527344 33.402000427246094,-112.75900268554688 C33.402000427246094,-112.75900268554688 38.59299850463867,0.2879999876022339 -7.548999786376953,32.0099983215332 C-53.689998626708984,63.731998443603516 -132.1320037841797,57.387001037597656 -151.74099731445312,112.75900268554688 C-151.74099731445312,112.75900268554688 141.81199645996094,112.75900268554688 141.81199645996094,112.75900268554688 C144.72799682617188,103.052001953125 145.1929931640625,94.72100067138672 143.91200256347656,88.1969985961914 C143.91200256347656,88.1969985961914 161.73699951171875,66.177001953125 143.58900451660156,33.90599822998047z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,328.21600341796875,314.7590026855469)">
                <path fill="rgb(253,176,158)" fill-opacity="1" d=" M-77.12999725341797,2.1549999713897705 C-77.12999725341797,2.1549999713897705 -24.851999282836914,-34.41600036621094 31.354999542236328,-21.375 C81.4520034790039,-9.75100040435791 72.79900360107422,26.479000091552734 59.04800033569336,34.41600036621094 C59.04800033569336,34.41600036621094 -81.4520034790039,34.41600036621094 -81.4520034790039,34.41600036621094 C-81.4520034790039,34.41600036621094 -77.12999725341797,2.1549999713897705 -77.12999725341797,2.1549999713897705z"></path>
              </g>
            </g>
            <g transform="matrix(0.9935478568077087,0.11341390758752823,-0.11341390758752823,0.9935478568077087,727.2947998046875,807.1181030273438)" opacity="1" style="display: block;">
              <g opacity="1" transform="matrix(1,0,0,1,55.52399826049805,34.03300094604492)">
                <path fill="rgb(255,198,173)" fill-opacity="1" d=" M51.236000061035156,-4.040999889373779 C51.236000061035156,-4.040999889373779 26.447999954223633,-16.76300048828125 6.173999786376953,-31.597999572753906 C4.085999965667725,-33.125999450683594 1.49399995803833,-33.78200149536133 -1.0709999799728394,-33.43600082397461 C-10.612000465393066,-32.14400100708008 -34.8849983215332,-28.604000091552734 -51.6349983215332,-23.951000213623047 C-53.808998107910156,-23.347000122070312 -55.27399826049805,-21.283000946044922 -55.0989990234375,-19.034000396728516 C-54.887001037597656,-16.315000534057617 -54.154998779296875,-12.656000137329102 -51.96099853515625,-9.668000221252441 C-51.96099853515625,-9.668000221252441 -47.402000427246094,-5.124000072479248 -41.323001861572266,-2.2339999675750732 C-41.323001861572266,-2.2339999675750732 -43.38999938964844,1.190000057220459 -43.44499969482422,2.813999891281128 C-43.5,4.438000202178955 -41.15800094604492,9.638999938964844 -38.270999908447266,10.793000221252441 C-38.270999908447266,10.793000221252441 -39.13800048828125,12.390000343322754 -38.494998931884766,15.01200008392334 C-37.854000091552734,17.635000228881836 -35.13600158691406,21.38599967956543 -33.034000396728516,21.701000213623047 C-30.930999755859375,22.017000198364258 -27.104999542236328,21.81999969482422 -27.104999542236328,21.81999969482422 C-27.104999542236328,21.81999969482422 -28.68000030517578,25.100000381469727 -28.43000030517578,27.30299949645996 C-28.18000030517578,29.506000518798828 -24.391000747680664,32.80500030517578 -21.9689998626709,33.29399871826172 C-19.547000885009766,33.78200149536133 -3.0399999618530273,31.174999237060547 0.08900000154972076,29.979999542236328 C3.2179999351501465,28.785999298095703 9.423999786376953,20.788999557495117 9.423999786376953,20.788999557495117 C9.423999786376953,20.788999557495117 35.027000427246094,30.35700035095215 55.27399826049805,27.714000701904297 C55.27399826049805,27.714000701904297 51.236000061035156,-4.040999889373779 51.236000061035156,-4.040999889373779z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,15.13700008392334,25.010000228881836)">
                <path fill="rgb(253,176,158)" fill-opacity="1" d=" M-12.640000343322754,-2.4149999618530273 C-12.640000343322754,-2.4149999618530273 12.640000343322754,-6.789000034332275 12.640000343322754,-6.789000034332275 C12.640000343322754,-6.789000034332275 3.819999933242798,1.4889999628067017 -0.9359999895095825,6.789000034332275 C-0.9359999895095825,6.789000034332275 -11.093999862670898,1.815000057220459 -12.640000343322754,-2.4149999618530273z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,54.40700149536133,56.5099983215332)">
                <path fill="rgb(253,176,158)" fill-opacity="1" d=" M10.543000221252441,-1.687999963760376 C10.543000221252441,-1.687999963760376 1.2079999446868896,-4.559999942779541 1.2079999446868896,-4.559999942779541 C1.2079999446868896,-4.559999942779541 -10.543000221252441,4.559999942779541 -10.543000221252441,4.559999942779541 C-10.543000221252441,4.559999942779541 -0.609000027179718,-2.884000062942505 9.079000473022461,0.11800000071525574 C9.079000473022461,0.11800000071525574 10.543000221252441,-1.687999963760376 10.543000221252441,-1.687999963760376z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,83.3030014038086,31.951000213623047)">
                <path fill="rgb(253,176,158)" fill-opacity="1" d=" M-22.009000778198242,-29.797000885009766 C-22.009000778198242,-29.797000885009766 -27.496000289916992,-3.875999927520752 -16.98699951171875,7.209000110626221 C-6.4770002365112305,18.292999267578125 27.496000289916992,29.797000885009766 27.496000289916992,29.797000885009766 C27.496000289916992,29.797000885009766 25.525999069213867,14.307999610900879 23.457000732421875,-1.9579999446868896 C23.457000732421875,-1.9579999446868896 -7.5269999504089355,-18.739999771118164 -22.009000778198242,-29.797000885009766z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,28.55900001525879,35.957000732421875)">
                <path fill="rgb(253,176,158)" fill-opacity="1" d=" M-11.109000205993652,8.527000427246094 C-11.109000205993652,8.527000427246094 8.807999610900879,-8.423999786376953 8.807999610900879,-8.423999786376953 C9.376999855041504,-8.909000396728516 10.232999801635742,-8.84000015258789 10.717000007629395,-8.270000457763672 C11.20300006866455,-7.701000213623047 11.133000373840332,-6.84499979019165 10.564000129699707,-6.361000061035156 C10.534000396728516,-6.335000038146973 10.50100040435791,-6.309000015258789 10.468999862670898,-6.285999774932861 C10.468999862670898,-6.285999774932861 -10.862000465393066,8.843999862670898 -10.862000465393066,8.843999862670898 C-10.95300006866455,8.909000396728516 -11.07800006866455,8.88700008392334 -11.142000198364258,8.79699993133545 C-11.20300006866455,8.711000442504883 -11.187000274658203,8.593000411987305 -11.109000205993652,8.527000427246094z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,38.8120002746582,47.09700012207031)">
                <path fill="rgb(253,176,158)" fill-opacity="1" d=" M-10.484000205993652,8.645999908447266 C-10.484000205993652,8.645999908447266 8.107999801635742,-8.407999992370605 8.107999801635742,-8.407999992370605 C8.663000106811523,-8.916000366210938 9.527999877929688,-8.878999710083008 10.036999702453613,-8.324000358581543 C10.54699993133545,-7.76800012588501 10.508000373840332,-6.90500020980835 9.95199966430664,-6.394999980926514 C9.920000076293945,-6.366000175476074 9.88700008392334,-6.335999965667725 9.85200023651123,-6.310999870300293 C9.85200023651123,-6.310999870300293 -10.298999786376953,8.868000030517578 -10.298999786376953,8.868000030517578 C-10.36400032043457,8.916000366210938 -10.454000473022461,8.902999877929688 -10.501999855041504,8.83899974822998 C-10.545999526977539,8.779000282287598 -10.538000106811523,8.696000099182129 -10.484000205993652,8.645999908447266z"></path>
              </g>
            </g>
            <g transform="matrix(1,0,0,1,500.69500732421875,764.0150146484375)" opacity="1" style="display: block;">
              <g opacity="1" transform="matrix(1,0,0,1,75.65899658203125,51.632999420166016)">
                <path fill="rgb(244,145,134)" fill-opacity="1" d=" M2.0799999237060547,-46.50299835205078 C2.0799999237060547,-46.50299835205078 -74.1729965209961,51.38199996948242 -74.1729965209961,51.38199996948242 C-74.1729965209961,51.38199996948242 0.2680000066757202,51.16400146484375 0.2680000066757202,51.16400146484375 C0.2680000066757202,51.16400146484375 60.86399841308594,17.496999740600586 60.86399841308594,17.496999740600586 C60.86399841308594,17.496999740600586 74.1729965209961,-51.382999420166016 2.0799999237060547,-46.50299835205078z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                <g opacity="1" transform="matrix(1,0,0,1,34.54399871826172,86.45899963378906)">
                  <path fill="rgb(244,145,134)" fill-opacity="1" d=" M25.018999099731445,15.590999603271484 C24.489999771118164,15.656999588012695 -24.743000030517578,17.510000228881836 -24.743000030517578,17.510000228881836 C-24.743000030517578,17.510000228881836 -28.93899917602539,-9.934000015258789 -28.204999923706055,-9.795999526977539 C-27.469999313354492,-9.657999992370605 10.428000450134277,-17.510000228881836 12.4350004196167,-17.22599983215332 C14.442000389099121,-16.94300079345703 28.93899917602539,12.583999633789062 28.93899917602539,12.583999633789062 C28.93899917602539,12.583999633789062 25.018999099731445,15.590999603271484 25.018999099731445,15.590999603271484z"></path>
                </g>
                <g opacity="1" transform="matrix(1,0,0,1,63.76300048828125,89.03700256347656)">
                  <path fill="rgb(253,176,158)" fill-opacity="1" d=" M3.381999969482422,0.7089999914169312 C3.381999969482422,0.7089999914169312 -6.920000076293945,4.863999843597412 -6.920000076293945,4.863999843597412 C-10.3149995803833,6.234000205993652 -12.208000183105469,9.871000289916992 -11.383000373840332,13.437999725341797 C-10.857000350952148,15.706999778747559 -8.619999885559082,17.145000457763672 -6.3379998207092285,16.677000045776367 C-6.3379998207092285,16.677000045776367 3.361999988555908,14.690999984741211 3.361999988555908,14.690999984741211 C3.361999988555908,14.690999984741211 6.997000217437744,14.130999565124512 6.997000217437744,14.130999565124512 C8.755999565124512,13.859000205993652 10.194000244140625,12.588000297546387 10.680000305175781,10.87600040435791 C11.331999778747559,8.581000328063965 12.142000198364258,5.614999771118164 12.166999816894531,4.9720001220703125 C12.208999633789062,3.8919999599456787 4.104000091552734,-17.145000457763672 4.104000091552734,-17.145000457763672 C4.104000091552734,-17.145000457763672 3.381999969482422,0.7089999914169312 3.381999969482422,0.7089999914169312z"></path>
                </g>
                <g opacity="1" transform="matrix(1,0,0,1,34.50299835205078,77.69400024414062)">
                  <path fill="rgb(255,198,173)" fill-opacity="1" d=" M-28.41699981689453,-10.437000274658203 C-28.41699981689453,-10.437000274658203 -26.072999954223633,-10.970999717712402 -26.072999954223633,-10.970999717712402 C-24.908000946044922,-11.237000465393066 -23.858999252319336,-11.873000144958496 -23.086000442504883,-12.784000396728516 C-23.086000442504883,-12.784000396728516 -20.52199935913086,-15.802000045776367 -20.52199935913086,-15.802000045776367 C-19.44499969482422,-17.070999145507812 -17.854000091552734,-17.78700065612793 -16.18899917602539,-17.750999450683594 C-16.18899917602539,-17.750999450683594 -13.057999610900879,-17.684999465942383 -13.057999610900879,-17.684999465942383 C-11.345999717712402,-17.648000717163086 -9.71399974822998,-18.406999588012695 -8.637999534606934,-19.73900032043457 C-8.637999534606934,-19.73900032043457 -7.117000102996826,-21.621999740600586 -7.117000102996826,-21.621999740600586 C-5.914000034332275,-23.111000061035156 -4.026000022888184,-23.871999740600586 -2.125999927520752,-23.632999420166016 C-2.125999927520752,-23.632999420166016 3.9809999465942383,-22.867000579833984 3.9809999465942383,-22.867000579833984 C4.959000110626221,-22.7450008392334 5.953000068664551,-22.885000228881836 6.859000205993652,-23.275999069213867 C6.859000205993652,-23.275999069213867 14.312999725341797,-26.48900032043457 14.312999725341797,-26.48900032043457 C14.312999725341797,-26.48900032043457 33.224998474121094,-20.104000091552734 34.25299835205078,0.7360000014305115 C34.25299835205078,0.7360000014305115 33.28799819946289,10.385000228881836 33.28799819946289,10.385000228881836 C33.0629997253418,12.628999710083008 31.388999938964844,14.458000183105469 29.173999786376953,14.878000259399414 C29.173999786376953,14.878000259399414 21.722999572753906,16.29400062561035 21.722999572753906,16.29400062561035 C20.0310001373291,16.615999221801758 18.374000549316406,15.590999603271484 17.9060001373291,13.934000015258789 C17.9060001373291,13.934000015258789 14.184000015258789,0.7710000276565552 14.184000015258789,0.7710000276565552 C14.184000015258789,0.7710000276565552 16.42099952697754,14.114999771118164 16.42099952697754,14.114999771118164 C16.81800079345703,16.482999801635742 15.312999725341797,18.75200080871582 12.977999687194824,19.30900001525879 C12.977999687194824,19.30900001525879 7.1479997634887695,20.69700050354004 7.1479997634887695,20.69700050354004 C4.670000076293945,21.28700065612793 2.188999891281128,19.735000610351562 1.6369999647140503,17.25 C1.6369999647140503,17.25 -2.0510001182556152,0.6779999732971191 -2.0510001182556152,0.6779999732971191 C-2.0510001182556152,0.6779999732971191 0.13099999725818634,17.891000747680664 0.13099999725818634,17.891000747680664 C0.41999998688697815,20.172000885009766 -1.194000005722046,22.256000518798828 -3.4760000705718994,22.545000076293945 C-3.4760000705718994,22.545000076293945 -8.96399974822998,23.242000579833984 -8.96399974822998,23.242000579833984 C-10.887999534606934,23.486000061035156 -12.70300006866455,22.291000366210938 -13.23900032043457,20.427000045776367 C-13.23900032043457,20.427000045776367 -18.690000534057617,1.4839999675750732 -18.690000534057617,1.4839999675750732 C-18.690000534057617,1.4839999675750732 -14.791999816894531,20.273000717163086 -14.791999816894531,20.273000717163086 C-14.40999984741211,22.118000030517578 -15.503999710083008,23.948999404907227 -17.31100082397461,24.486000061035156 C-17.31100082397461,24.486000061035156 -22.0049991607666,25.8799991607666 -22.0049991607666,25.8799991607666 C-24.05299949645996,26.48900032043457 -26.209999084472656,25.350000381469727 -26.86400032043457,23.31800079345703 C-26.86400032043457,23.31800079345703 -33.60499954223633,2.3540000915527344 -33.60499954223633,2.3540000915527344 C-34.25299835205078,0.3400000035762787 -34.21699905395508,-1.8300000429153442 -33.50299835205078,-3.821000099182129 C-33.50299835205078,-3.821000099182129 -32.39400100708008,-6.9120001792907715 -32.39400100708008,-6.9120001792907715 C-31.756999969482422,-8.687999725341797 -30.256999969482422,-10.017000198364258 -28.41699981689453,-10.437000274658203z"></path>
                </g>
              </g>
            </g>
            <g transform="matrix(1,0,0,1,724.9349975585938,454.1610107421875)" opacity="1" style="display: block;">
              <g opacity="1" transform="matrix(1,0,0,1,45.8650016784668,77.26799774169922)">
                <path fill="rgb(253,176,158)" fill-opacity="1" d=" M45.6150016784668,6.8460001945495605 C35.92599868774414,36.32600021362305 20.031999588012695,76.90699768066406 -15.015000343322754,76.05000305175781 C-45.6150016784668,75.3030014038086 -40.81800079345703,38.67900085449219 -34.30799865722656,18.63800048828125 C-33.340999603271484,15.65999984741211 -33.97700119018555,17.341999053955078 -33.24399948120117,15.368000030517578 C-36.49100112915039,-3.3559999465942383 -37.63399887084961,-22.634000778198242 -39.25699996948242,-41.6619987487793 C-11.805000305175781,-53.38800048828125 15.722999572753906,-64.70099639892578 43.02899932861328,-76.90699768066406 C43.132999420166016,-72.5989990234375 43.15299987792969,-72.38300323486328 43.17499923706055,-67.6259994506836 C43.19599914550781,-62.86800003051758 43.112998962402344,-76.48500061035156 43.16699981689453,-64.57599639892578 C43.22100067138672,-52.66699981689453 43.60900115966797,-11.151000022888184 45.6150016784668,6.8460001945495605z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,48.23500061035156,55.025001525878906)">
                <path fill="rgb(255,133,106)" fill-opacity="1" d=" M-36.32899856567383,39.435001373291016 C-36.499000549316406,40.5359992980957 -35.84299850463867,38.00600051879883 -35.64799880981445,37.71500015258789 C-38.819000244140625,18.760000228881836 -40.02299880981445,-0.3330000042915344 -41.62799835205078,-19.420000076293945 C-14.138999938964844,-31.209999084472656 13.277999877929688,-42.32600021362305 40.71900177001953,-54.775001525878906 C40.71900177001953,-54.775001525878906 41.62799835205078,-54.125 39.58599853515625,-40.12300109863281 C35.22600173950195,-20.156999588012695 12.58899974822998,54.77399826049805 -36.32899856567383,39.435001373291016z"></path>
              </g>
            </g>
            <g transform="matrix(0.9963135719299316,0.08578645437955856,-0.08578645437955856,0.9963135719299316,667.5770874023438,287.48309326171875)" opacity="1" style="display: block;">
              <g opacity="1" transform="matrix(1,0,0,1,198.03799438476562,174.43800354003906)">
                <path fill="url(#__lottie_element_48)" fill-opacity="1" d=" M-170.37399291992188,-170.84800720214844 C-171.97300720214844,-163.16700744628906 -173.72000122070312,-149.23899841308594 -167.74000549316406,-141.30499267578125 C-179.69900512695312,-147.6179962158203 -177.8769989013672,-147.9459991455078 -187.4290008544922,-155.80999755859375 C-197.7969970703125,-164.34500122070312 -196.6219940185547,-114.77100372314453 -194.17599487304688,-106.22100067138672 C-191.72900390625,-97.6719970703125 -187.82200622558594,-72.14099884033203 -174.55799865722656,-68.18399810791016 C-169.02000427246094,-48.70800018310547 -156.42100524902344,-34.486000061035156 -144.53399658203125,-27.01099967956543 C-128.27499389648438,-16.783000946044922 -99.16899871826172,-18.52400016784668 -72.7020034790039,-20.26300048828125 C-61.375,-21.007999420166016 -50.53300094604492,-21.753000259399414 -41.38600158691406,-21.559999465942383 C-39.638999938964844,-23.590999603271484 -38.0099983215332,-25.327999114990234 -36.44499969482422,-26.924999237060547 C-36.22999954223633,-23.89699935913086 -35.8380012512207,-21.075000762939453 -35.124000549316406,-20.461000442504883 C-33.452999114990234,-19.025999069213867 -33.00600051879883,-0.25 -33.00600051879883,-0.25 C-33.00600051879883,-0.25 -27.288999557495117,-17.590999603271484 -27.540000915527344,-26.273000717163086 C-27.66200065612793,-30.499000549316406 -27.74799919128418,-33.5099983215332 -27.805999755859375,-35.49800109863281 C-25.25200080871582,-38.14699935913086 -22.631999969482422,-41.137001037597656 -19.707000732421875,-45.18000030517578 C-12.463000297546387,-55.189998626708984 -6.453000068664551,-72.87300109863281 -3.513000011444092,-86.76799774169922 C-2.2860000133514404,-81.79399871826172 -1.6519999504089355,-78.11699676513672 -1.6519999504089355,-78.11699676513672 C-0.25,-96.93499755859375 -1.0130000114440918,-105.58499908447266 -2.174999952316284,-109.5009994506836 C-3.4809999465942383,-115.10199737548828 -6.831999778747559,-119.44499969482422 -13.836999893188477,-120.84500122070312 C-4.465000152587891,-134.6790008544922 -18.584999084472656,-156.9459991455078 -18.584999084472656,-156.9459991455078 C-17.445999145507812,-151.16600036621094 -18.0939998626709,-144.4029998779297 -19.06800079345703,-138.95199584960938 C-19.934999465942383,-143.4320068359375 -21.26099967956543,-147.70599365234375 -24.697999954223633,-151.72900390625 C-33.98400115966797,-167.6739959716797 -69.50800323486328,-172.93699645996094 -69.50800323486328,-172.93699645996094 C-67.33100128173828,-172.17100524902344 -63.34400177001953,-168.9219970703125 -59.060001373291016,-165 C-74.18399810791016,-165.66299438476562 -91.5770034790039,-162.53500366210938 -108.20700073242188,-156.9459991455078 C-124.23699951171875,-151.5570068359375 -153.14599609375,-166.9340057373047 -164.3800048828125,-173.5 C-165.031005859375,-173.8800048828125 -165.73199462890625,-174.0570068359375 -166.41799926757812,-174.0570068359375 C-168.2429962158203,-174.0570068359375 -169.96499633789062,-172.81100463867188 -170.37399291992188,-170.84800720214844z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,111.66200256347656,166.74099731445312)">
                <path fill="rgb(253,176,158)" fill-opacity="1" d=" M46.79800033569336,-23.565000534057617 C33.744998931884766,-35.5629997253418 29.375999450683594,-58.624000549316406 39.69300079345703,-69.32599639892578 C25.246999740600586,-54.340999603271484 -14.831000328063965,-59.23400115966797 -14.831000328063965,-59.23400115966797 C-14.831000328063965,-59.23400115966797 -5.306000232696533,-62.821998596191406 -3.180999994277954,-72.31800079345703 C-3.180999994277954,-72.31800079345703 -48.1510009765625,-63.6619987487793 -56.53900146484375,-57.83599853515625 C-56.53900146484375,-57.83599853515625 -57.14099884033203,-66.375 -48.43299865722656,-73.53399658203125 C-59.880001068115234,-72.63099670410156 -69.16899871826172,-70.22200012207031 -69.82099914550781,-64.8280029296875 C-71.56800079345703,-50.38100051879883 -62.8650016784668,33.87300109863281 -34.448001861572266,53.702999114990234 C-6.031000137329102,73.53399658203125 26.309999465942383,42.672000885009766 38.92300033569336,27.43199920654297 C51.53499984741211,12.190999984741211 46.027000427246094,6.659999847412109 52.926998138427734,-6.364999771118164 C63.167999267578125,-10.362000465393066 67.24199676513672,-8.87600040435791 69.40499877929688,-28.315000534057617 C71.56800079345703,-47.75299835205078 54.69900131225586,-53.60200119018555 46.79800033569336,-23.565000534057617z"></path>
              </g>
            </g>
            <g transform="matrix(1,0,0,1,194.62298583984375,668.3629760742188)" opacity="1" style="display: block;">
              <g opacity="1" transform="matrix(1,0,0,1,305.5090026855469,205.64599609375)">
                <path fill="rgb(24,41,96)" fill-opacity="1" d=" M132.06500244140625,-7.197000026702881 C132.06500244140625,-7.197000026702881 -132.06399536132812,-7.197000026702881 -132.06399536132812,-7.197000026702881 C-133.66000366210938,-7.197000026702881 -134.9530029296875,-5.9029998779296875 -134.9530029296875,-4.307000160217285 C-134.9530029296875,-4.307000160217285 -134.9530029296875,4.309000015258789 -134.9530029296875,4.309000015258789 C-134.9530029296875,5.9039998054504395 -133.66000366210938,7.197999954223633 -132.06399536132812,7.197999954223633 C-132.06399536132812,7.197999954223633 132.06500244140625,7.197999954223633 132.06500244140625,7.197999954223633 C133.66099548339844,7.197999954223633 134.9530029296875,5.9039998054504395 134.9530029296875,4.309000015258789 C134.9530029296875,4.309000015258789 134.9530029296875,-4.307000160217285 134.9530029296875,-4.307000160217285 C134.9530029296875,-5.9029998779296875 133.66099548339844,-7.197000026702881 132.06500244140625,-7.197000026702881z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,162.74000549316406,99.5469970703125)">
                <path fill="rgb(66,170,255)" fill-opacity="1" d=" M78.50499725341797,-99.10900115966797 C78.50499725341797,-99.10900115966797 -145.39199829101562,-99.10900115966797 -145.39199829101562,-99.10900115966797 C-155.52499389648438,-99.10900115966797 -162.49000549316406,-88.83799743652344 -158.80999755859375,-79.31999969482422 C-158.80999755859375,-79.31999969482422 -93.41200256347656,89.86299896240234 -93.41200256347656,89.86299896240234 C-91.25700378417969,95.43800354003906 -85.92900085449219,99.10900115966797 -79.99400329589844,99.10900115966797 C-79.99400329589844,99.10900115966797 151.80599975585938,99.10900115966797 151.80599975585938,99.10900115966797 C158.13800048828125,99.10900115966797 162.49000549316406,92.69100189208984 160.1909942626953,86.74299621582031 C160.1909942626953,86.74299621582031 91.9229965209961,-89.86299896240234 91.9229965209961,-89.86299896240234 C89.76799774169922,-95.43800354003906 84.44100189208984,-99.10900115966797 78.50499725341797,-99.10900115966797z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,319.7900085449219,202.83099365234375)">
                <path fill="url(#__lottie_element_52)" fill-opacity="1" d=" M-303.85198974609375,-198.29200744628906 C-313.8550109863281,-198.29200744628906 -320.7300109863281,-188.23399353027344 -317.0979919433594,-178.91299438476562 C-317.0979919433594,-178.91299438476562 -252.53599548339844,-13.23900032043457 -252.53599548339844,-13.23900032043457 C-250.40899658203125,-7.7789998054504395 -245.1490020751953,-4.184000015258789 -239.2899932861328,-4.184000015258789 C-239.2899932861328,-4.184000015258789 -10.458000183105469,-4.184000015258789 -10.458000183105469,-4.184000015258789 C-4.206999778747559,-4.184000015258789 0.09000000357627869,-10.470000267028809 -2.180000066757202,-16.295000076293945 C-2.180000066757202,-16.295000076293945 -69.5739974975586,-189.23699951171875 -69.5739974975586,-189.23699951171875 C-71.70099639892578,-194.69700622558594 -76.96099853515625,-198.29200744628906 -82.82099914550781,-198.29200744628906 C-82.82099914550781,-198.29200744628906 -303.85198974609375,-198.29200744628906 -303.85198974609375,-198.29200744628906z"></path>
              </g>
              <g opacity="0.66" transform="matrix(1,0,0,1,153.88299560546875,109.84400177001953)" style="mix-blend-mode: overlay;">
                <path fill="rgb(227,235,247)" fill-opacity="1" d=" M16.374000549316406,-6.724999904632568 C21.74799919128418,6.360000133514404 18.77199935913086,19.97800064086914 9.729000091552734,23.691999435424805 C0.6859999895095825,27.405000686645508 -11.00100040435791,19.808000564575195 -16.374000549316406,6.7230000495910645 C-21.74799919128418,-6.361000061035156 -18.77199935913086,-19.979000091552734 -9.729999542236328,-23.69300079345703 C-0.6859999895095825,-27.406999588012695 11.00100040435791,-19.809999465942383 16.374000549316406,-6.724999904632568z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,199.0780029296875,205.64599609375)">
                <path fill="rgb(55,86,194)" fill-opacity="1" d=" M121.60099792480469,-7.197000026702881 C121.60099792480469,-7.197000026702881 -121.60099792480469,-7.197000026702881 -121.60099792480469,-7.197000026702881 C-123.18900299072266,-7.197000026702881 -124.47599792480469,-5.909999847412109 -124.47599792480469,-4.322000026702881 C-124.47599792480469,-4.322000026702881 -124.47599792480469,4.322999954223633 -124.47599792480469,4.322999954223633 C-124.47599792480469,5.909999847412109 -123.18900299072266,7.197999954223633 -121.60099792480469,7.197999954223633 C-121.60099792480469,7.197999954223633 121.60099792480469,7.197999954223633 121.60099792480469,7.197999954223633 C123.18800354003906,7.197999954223633 124.47599792480469,5.909999847412109 124.47599792480469,4.322999954223633 C124.47599792480469,4.322999954223633 124.47599792480469,-4.322000026702881 124.47599792480469,-4.322000026702881 C124.47599792480469,-5.909999847412109 123.18800354003906,-7.197000026702881 121.60099792480469,-7.197000026702881z"></path>
              </g>
            </g>
            <g transform="matrix(1,0,0,1,110.39898681640625,868.0999755859375)" opacity="1" style="display: block;">
              <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                <path fill="rgb(41,195,255)" fill-opacity="1" d=" M1123.802978515625,28.429000854492188 C1123.802978515625,28.429000854492188 0.25,28.429000854492188 0.25,28.429000854492188 C0.25,28.429000854492188 0.25,12.939000129699707 0.25,12.939000129699707 C0.25,12.939000129699707 1123.802978515625,12.939000129699707 1123.802978515625,12.939000129699707 C1123.802978515625,12.939000129699707 1123.802978515625,28.429000854492188 1123.802978515625,28.429000854492188z M1123.802978515625,28.429000854492188 C1123.802978515625,28.429000854492188 874.6370239257812,28.429000854492188 874.6370239257812,28.429000854492188 C874.6370239257812,28.429000854492188 874.6370239257812,12.939000129699707 874.6370239257812,12.939000129699707 C874.6370239257812,12.939000129699707 1123.802978515625,12.939000129699707 1123.802978515625,12.939000129699707 C1123.802978515625,12.939000129699707 1123.802978515625,28.429000854492188 1123.802978515625,28.429000854492188z"></path>
                <path fill="rgb(41,159,255)" fill-opacity="1" d=" M1123.802978515625,28.429000854492188 C1123.802978515625,28.429000854492188 874.6370239257812,28.429000854492188 874.6370239257812,28.429000854492188 C874.6370239257812,28.429000854492188 874.6370239257812,12.939000129699707 874.6370239257812,12.939000129699707 C874.6370239257812,12.939000129699707 1123.802978515625,12.939000129699707 1123.802978515625,12.939000129699707 C1123.802978515625,12.939000129699707 1123.802978515625,28.429000854492188 1123.802978515625,28.429000854492188z"></path>
              </g>
              <g opacity="1" transform="matrix(1,0,0,1,0,0)">
                <path fill="rgb(171,218,247)" fill-opacity="1" d=" M791.9660034179688,0.25 C791.9660034179688,0.25 555.10498046875,0.25 555.10498046875,0.25 C555.10498046875,0.25 555.10498046875,12.939000129699707 555.10498046875,12.939000129699707 C555.10498046875,12.939000129699707 791.9660034179688,12.939000129699707 791.9660034179688,12.939000129699707 C791.9660034179688,12.939000129699707 791.9660034179688,0.25 791.9660034179688,0.25z M718.9089965820312,0.25 C718.9089965820312,0.25 791.9669799804688,0.25 791.9669799804688,0.25 C791.9669799804688,0.25 791.9669799804688,12.939000129699707 791.9669799804688,12.939000129699707 C791.9669799804688,12.939000129699707 718.9089965820312,12.939000129699707 718.9089965820312,12.939000129699707 C718.9089965820312,12.939000129699707 718.9089965820312,0.25 718.9089965820312,0.25z"></path>
                <path fill="rgb(111,177,221)" fill-opacity="1" d=" M718.9089965820312,0.25 C718.9089965820312,0.25 791.9669799804688,0.25 791.9669799804688,0.25 C791.9669799804688,0.25 791.9669799804688,12.939000129699707 791.9669799804688,12.939000129699707 C791.9669799804688,12.939000129699707 718.9089965820312,12.939000129699707 718.9089965820312,12.939000129699707 C718.9089965820312,12.939000129699707 718.9089965820312,0.25 718.9089965820312,0.25z"></path>
              </g>
            </g>
          </g>
        </svg>

      </div>
    </div>
  </div>
</section>



@endsection