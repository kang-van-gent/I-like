@extends('client')
@section('contents')
<!-- Login form-->
<section class="section section-one-screen section-sm overlay-dark-07 novi-background" data-preset='{"title":"Login","category":"one screen page, form","reload":true,"id":"login"}'>
    <div class="container">
        <div class="row justify-content-center novi-disabled">
            <div class="col-md-8 col-lg-6 col-xxl-5">
                <article class="accent-box">
                    <h4 class="accent-box-title text-center">รหัสผ่านใหม่</h4>
                    <p class="accent-box-text text-center">กรอกรหัสผ่านใหม่ของคุณ หวังว่าครั้งนี้จะจำได้นะ XD</p>
                    <form class="accent-box-form" method="post" id="newPassword">
                        @csrf
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

                        <button class="btn btn-block btn-lg btn-primary " type="button" onclick="newPassword()">
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

<script>
    // Prevent the default form submission
    function newPassword() {
        var password = $('#password').val();
        var conpass = $('#conpass').val();

        console.log(password);
        console.log(conpass);



        if (password == conpass) {
            $.ajax({
                url: '{{ route("auth.updatePassword") }}', // Your Laravel route for registration
                method: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    password: password,
                    conpass: conpass
                }, // Serialize the form data
                success: function(response) {
                    // Handle success response
                    Swal.fire({
                        icon: 'success',
                        title: 'เรียบร้อย!',
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
                        title: 'ล้มเหลว',
                        text: errorMessage,
                        confirmButtonText: 'ลองใหม่อีกครั้ง'
                    });
                }
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'ล้มเหลว',
                text: 'รหัสผ่านไม่ตรงกัน',
                confirmButtonText: 'ลองใหม่อีกครั้ง'
            });
        }



    }
</script>
@endsection