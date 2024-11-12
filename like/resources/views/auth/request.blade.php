@extends('client')
@section('contents')
<!-- Login form-->
<section class="section section-one-screen section-sm overlay-dark-07 novi-background" data-preset='{"title":"Login","category":"one screen page, form","reload":true,"id":"login"}'>
    <div class="container">
        <div class="row justify-content-center novi-disabled">
            <div class="col-md-8 col-lg-6 col-xxl-5">
                <article class="accent-box">
                    <h4 class="accent-box-title text-center">ลืมรหัสผ่าน</h4>
                    <p class="accent-box-text text-center">กรุณากรอกอีเมลที่ใช้สมัครเพื่อยืนยันข้อมูล</p>
                    <form class="accent-box-form" method="POST" action="{{url('/confirm-email')}}">
                        @csrf
                        <div class="form-group">
                            <div class="input-group"><span class="input-group-text int-user novi-icon"></span>
                                <input class="form-control" type="text" name="email" placeholder="อีเมล">
                            </div>
                        </div>

                        <button class="btn btn-block btn-lg btn-primary " type="submit">
                            <div class="icon-box-icon icon-sm novi-icon mdi-login"> ยืนยัน</div>
                        </button>
                        @if(Session::has('error'))
                        <p class="text-danger"> {{session('error')}}</p>
                        @endif

                        <div class="accent-box-text small group-15">
                            <div>
                                <u class="fw-medium"><a class="link-inherit" href="/">ยกเลิก</a></u>
                            </div>
                            <div>ยังไม่ได้เป็นสมาชิก?
                                <u class="fw-medium"><a class="link-inherit" href="/register">สมัครสมาชิก</a></u>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    </form>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection