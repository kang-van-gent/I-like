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
          <form class="accent-box-form" method="post" action="{{url('/regis')}}">
            @csrf
            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-user novi-icon"></span>
                <input class="form-control" type="text" name="username" placeholder="ชื่อผู้ใช้">
              </div>
              @error('username')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-email novi-icon"></span>
                <input class="form-control" type="email" name="email" placeholder="อีเมล">
              </div>
              @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text fa-address-card-o novi-icon"></span>
                <input class="form-control" type="text" name="firstName" placeholder="ชื่อจริง">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text fa-address-card-o novi-icon"></span>
                <input class="form-control" type="text" name="lastName" placeholder="นามสกุล">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text fa-address-card-o novi-icon"></span>
                <input class="form-control" type="number" name="age" placeholder="อายุ">
              </div>
            </div>
            <div class="form-group">
              <div class="select-wrap">
                <select class="select2-original" id="simple-select1" name="career" data-select2-options='{"placeholder":"อาชีพ"}'>
                  <option label="placeholder"></option>
                  <option>USA</option>
                  <option>UK</option>
                  <option>Ukraine</option>
                  <option>Australia</option>
                  <option>Korea</option>
                  <option>Japan</option>
                  <option>Germany</option>
                  <option>Belarus</option>
                  <option>Poland</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="select-wrap">
                <select class="select2-original" id="simple-select2" name="gender" data-select2-options='{"placeholder":"เพศ"}'>
                  <option label="placeholder"></option>
                  <option>ชาย</option>
                  <option>หญิง</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-lock novi-icon"></span>
                <input class="form-control input-password password-register-1" type="text" name="password" placeholder="รหัสผ่าน"><span class="input-group-text input-group-text-nodivider input-password-icon" data-multi-switch='{"targets":".password-register-1"}'></span>
              </div>
              @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-lock novi-icon"></span>
                <input class="form-control input-password password-register-2" type="text" name="conpass" placeholder="ยืนยันรหัสผ่าน"><span class="input-group-text input-group-text-nodivider input-password-icon" data-multi-switch='{"targets":".password-register-2"}'></span>
              </div>
            </div>
            <!-- <div class="form-check accent-box-text">
              <input class="form-check-input" type="checkbox" id="check1">
              <label class="form-check-label" for="check1">ยอมรับ
                <u class="fw-medium"></u><a class="link-inherit small" href="#">ข้อตกลงการใช้งาน</a>
              </label>
            </div> -->
            @if(Session::has('error'))
            <p class="text-danger"> {{session('error')}}</p>
            @endif
            <button class="btn btn-block btn-lg btn-secondary " type="submit">
              <div class="icon-box-icon icon-sm novi-icon mdi-account-plus"> สมัครสมาชิก</div>
            </button>

            <div class="accent-box-text small group-15">

              <div>เป็นสมาชิกอยู่แล้ว?
                <u class="fw-medium"><a class="link-inherit" href="/login">เข้าสู่ระบบ</a></u>
              </div>
            </div>

          </form>
        </article>
      </div>
    </div>
  </div>
</section>

@endsection


<!-- Register error handle.
Form require.
-- All form is reqiure.
-- Username is require and must be unique.
-- Email is require and must br unique.
-- Password must be at least 8 charactors.
-- At least 1 uppercase.
-- Password must contains letters and numbers.
-- Confirm password must match password.
-->