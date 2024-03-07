@extends('client')
@section('contents')
<!-- Register-->
<section class="section section-one-screen section-sm overlay-dark-07 novi-background" data-preset='{"title":"Register","category":"one screen page, form","reload":true,"id":"register"}'>
  <div class="container">
    <div class="row justify-content-center novi-disabled">
      <div class="col-md-8 col-lg-6 col-xxl-5">
        <article class="accent-box">
          <h4 class="accent-box-title text-center">สมัครสมาชิก</h4>
          <p class="accent-box-text text-center mt-2">กรุณากรอกข้อมูลให้ครบถ้วน</p>
          <form class="accent-box-form rd-mailform">
            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-user novi-icon"></span>
                <input class="form-control" type="text" name="name" placeholder="ชื่อผู้ใช้">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-user novi-icon"></span>
                <input class="form-control" type="email" name="email" placeholder="อีเมล">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-user novi-icon"></span>
                <input class="form-control" type="text" name="name" placeholder="ชื่อจริง">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-user novi-icon"></span>
                <input class="form-control" type="text" name="name" placeholder="นามสกุล">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-user novi-icon"></span>
                <input class="form-control input-password password-register-1" type="text" name="password" placeholder="รหัสผ่าน"><span class="input-group-text input-group-text-nodivider input-password-icon" data-multi-switch='{"targets":".password-register-1"}'></span>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-user novi-icon"></span>
                <input class="form-control input-password password-register-2" type="text" name="password" placeholder="ยืนยันรหัสผ่าน"><span class="input-group-text input-group-text-nodivider input-password-icon" data-multi-switch='{"targets":".password-register-2"}'></span>
              </div>
            </div>
            <div class="form-check accent-box-text">
              <input class="form-check-input" type="checkbox" id="check1">
              <label class="form-check-label" for="check1">ยอมรับ
                <u class="fw-medium"></u><a class="link-inherit small" href="#">ข้อตกลงการใช้งาน</a>
              </label>
            </div>
            <button class="btn btn-block btn-lg btn-secondary accent-box-btn" type="submit">สมัครสมาชิก</button>
          </form>
        </article>
      </div>
    </div>
  </div>
</section>

@endsection