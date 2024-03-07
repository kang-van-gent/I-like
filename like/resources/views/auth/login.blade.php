@extends('client')
@section('contents')
<!-- Login form-->
<section class="section section-one-screen section-sm overlay-dark-07 novi-background" data-preset='{"title":"Login","category":"one screen page, form","reload":true,"id":"login"}'>
  <div class="container">
    <div class="row justify-content-center novi-disabled">
      <div class="col-md-8 col-lg-6 col-xxl-5">
        <article class="accent-box">
          <h4 class="accent-box-title text-center">เข้าสู่ระบบ</h4>
          <p class="accent-box-text text-center">ใส่ข้อมูลยืนยันตัวตน</p>
          <form class="accent-box-form rd-mailform">
            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-user novi-icon"></span>
                <input class="form-control" type="text" name="login" placeholder="ชื่อผู้ใช้">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-validation"><span class="input-group-text int-user novi-icon"></span>
                <input class="form-control input-password password-login" type="text" name="password" placeholder="รหัสผ่าน"><span class="input-group-text input-group-text-nodivider input-password-icon" data-multi-switch='{"targets":".password-login"}'></span>
              </div>
            </div>
            <button class="btn btn-block btn-lg btn-primary accent-box-btn" type="submit">ยืนยัน</button>
            <div class="accent-box-text small group-15">
              <div>
                <u class="fw-medium"><a class="link-inherit" href="#">ลืมรหัสผ่าน?</a></u>
              </div>
              <div>ยังไม่ได้เป็นสมาชิก?
                <u class="fw-medium"><a class="link-inherit" href="register.html">สมัครสมาชิก</a></u>
              </div>
            </div>
          </form>
        </article>
      </div>
    </div>
  </div>
</section>

@endsection