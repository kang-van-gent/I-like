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
          <form class="accent-box-form" method="post" id="registerForm">
            @csrf
            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-user novi-icon"></span>
                <input class="form-control" type="text" id="username" name="username" placeholder="ชื่อผู้ใช้">
              </div>

            </div>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-email novi-icon"></span>
                <input class="form-control" type="email" id="email" name="email" placeholder="อีเมล">
              </div>

            </div>
            <!-- <div class="form-group">
              <div class="input-group"><span class="input-group-text fa-address-card-o novi-icon"></span>
                <input class="form-control" type="text" name="firstName" placeholder="ชื่อ - นามสกุล">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text  icon-box-icon novi-icon fa-calendar"></span>
                <input class="form-control" type="number" name="age" placeholder="อายุ">
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
              <div class="select-wrap">
                <select class="select2-original" id="simple-select1" name="career" data-select2-options='{"placeholder":"อาชีพ"}'>

                  <option label="placeholder"></option>
                  <option>นักเรียน / นักศึกษา</option>
                  <option>อินฟลูเอนเซอร์</option>
                  <option>ฟรีแลนซ์</option>
                  <option>ข้าราชการ</option>
                  <option>ธุรกิจส่วนตัว</option>
                  <option>พนักงานบริษัทเอกชน</option>
                  <option>ผู้ประกอบอาชีพอิสระ</option>
                  <option>อื่นๆ (กรุณาระบุ)</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <div class="select-wrap">
                <select class="select2-original" id="simple-select4" name="salary" data-select2-options='{"placeholder":"รายได้โดยเฉลี่ย"}'>

                  <option label="placeholder"></option>
                  <option>ต่ำกว่า 5,000 บาท/เดือน</option>
                  <option>5,000 - 10,000 บาท/เดือน</option>
                  <option>10,001 - 20,000 บาท/เดือน</option>
                  <option>20,001 - 50,000 บาท/เดือน</option>
                  <option>มากกว่า 50,000 บาท/เดือน</option>
                </select>
              </div>
            </div>


            <div class="form-group">
              <div class="select-wrap">
                <select class="select2-original" id="simple-select3" name="whereFrom" data-select2-options='{"placeholder":"รู้จักเราผ่านช่องทางใด?"}'>
                  <option label="placeholder"></option>
                  <option>Facebook</option>
                  <option>Instagram</option>
                  <option>Tiktok</option>
                  <option>Lemon8</option>
                  <option>ค้นหาทาง Google</option>
                  <option>โฆษณาออนไลน์ (Google Ads, Facebook Ads ฯลฯ)</option>
                  <option>การแนะนำจากเพื่อนหรือคนอื่นๆ</option>
                  <option>อื่นๆ (กรุณาระบุ)</option>
                </select>
              </div>
            </div> -->

            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-lock novi-icon"></span>
                <input class="form-control input-password password-register-1" id="password" type="text" name="password" placeholder="รหัสผ่าน"><span class="input-group-text input-group-text-nodivider input-password-icon" data-multi-switch='{"targets":".password-register-1"}'></span>
              </div>

            </div>
            <div class="form-group">
              <div class="input-group"><span class="input-group-text int-lock novi-icon"></span>
                <input class="form-control input-password password-register-2" id="conpass" type="text" name="conpass" placeholder="ยืนยันรหัสผ่าน"><span class="input-group-text input-group-text-nodivider input-password-icon" data-multi-switch='{"targets":".password-register-2"}'></span>
              </div>
            </div>

            <!-- <div class="form-check accent-box-text">
              <input class="form-check-input" type="checkbox" id="check1">
              <label class="form-check-label" for="check1">ยอมรับ
                <u class="fw-medium"></u><a class="link-inherit small" href="#">ข้อตกลงการใช้งาน</a>
              </label>
            </div> -->

            <button class="btn btn-block btn-lg btn-secondary " type="button" onclick="register()">
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


<script>
  // Prevent the default form submission
  function register() {
    var username = $('#username').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var conpass = $('#conpass').val();

    $.ajax({
      url: '{{ route("auth.regis") }}', // Your Laravel route for registration
      method: 'POST',
      data: {
        _token: '{{ csrf_token() }}',
        username: username,
        email: email,
        password: password,
        conpass: conpass
      }, // Serialize the form data
      success: function(response) {
        // Handle success response
        Swal.fire({
          icon: 'success',
          title: 'สมัครสมาชิกสำเร็จ',
          text: response.message,
          confirmButtonText: 'รับทราบ'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = '/login'; // Redirect to the home page or any other page
          }
        });
      },
      error: function(xhr) {
        // Handle error response
        let errors = xhr.responseJSON.errors;
        let errorMessage = 'เกิดข้อผิดพลาด:';
        if (errors) {
          $.each(errors, function(key, value) {
            errorMessage += `\n- ${value}`;
          });
        } else {
          errorMessage = xhr.responseJSON.message;
        }

        Swal.fire({
          icon: 'error',
          title: 'สมัครสมาชิกไม่สำเร็จ',
          text: errorMessage,
          confirmButtonText: 'ลองใหม่อีกครั้ง'
        });
      }
    });
  }
</script>
@endsection