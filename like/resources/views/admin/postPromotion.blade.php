@extends('admin')
@section('contents')

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h2 class="text-center text-dark ">โปรโมชั่น</h2>
      <hr class="w-50 m-auto mb-3 fw-bold">
      <img src="{{ $promotions->image_url }}" data-src="{{ $promotions->image_url }}" class="card-img-top rounded-0" alt="...">
      <div>
        <div>
          <p class="card-text mt-5">
          <h5>{!!$promotions->details!!}</h5>
          </p>
          <div class="d-grid gap-2 d-flex justify-content-end">
            <button class="btn btn-outline-danger" type="button" onclick="history.go(-1)">ย้อนกลับ</button>
            @if($promotions->code != '')
            <button class="btn btn-primary me-md-2" type="button" onclick="getCode({{$promotions}})">รับคูปอง</button>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function getCode(data) {
    // Show SweetAlert loading alert
    Swal.fire({
      title: 'กำลังโหลด...',
      text: 'โปรดรอสักครู่',
      icon: 'info',
      allowOutsideClick: false,
      showConfirmButton: false,
      didOpen: () => {
        Swal.showLoading();
      }
    });

    const startTime = Date.now(); // Record the time when the loading starts

    $.ajax({
      url: '{{ route("admin.redeemReward") }}',
      type: 'POST',
      data: {
        _token: '{{ csrf_token() }}',
        type: data.type,
        unit: data.unit,
        amount: data.amount,
        descriptions: data.description,
        code: data.code,
        limit: data.limit,
        expired_date: data.expire_at,
        is_publish: true,
      },
      success: function(response) {
        const elapsedTime = Date.now() - startTime; // Calculate elapsed time
        const delay = Math.max(0, 1000 - elapsedTime); // Ensure at least 1 second delay

        setTimeout(() => {
          Swal.close(); // Close the loading spinner after the delay

          if (response.status == 'success') {
            Swal.fire({
              title: 'สำเร็จ!',
              text: response.rewards,
              icon: 'success',
              confirmButtonText: 'รับทราบ'
            }).then((res) => {
              if (res.isConfirmed) {
                // window.location.reload();
              }
            });
          } else if (response.status == 'recieved') {
            Swal.fire({
              title: 'เสียใจด้วย...!',
              text: 'คุณได้กดรับคูปองกิจกรรมไปเรียบร้อยแล้ว',
              icon: 'warning',
              confirmButtonText: 'OK'
            });
          } else {
            Swal.fire({
              title: 'ล้มเหลว!',
              text: 'เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง',
              icon: 'error',
              confirmButtonText: 'OK'
            });
          }
        }, delay);
      },
      error: function(error) {
        const elapsedTime = Date.now() - startTime; // Calculate elapsed time
        const delay = Math.max(0, 1000 - elapsedTime); // Ensure at least 1 second delay

        setTimeout(() => {
          Swal.close(); // Close the loading spinner after the delay
          Swal.fire({
            title: 'ล้มเหลว!',
            text: error.responseJSON ? error.responseJSON.message : 'An unexpected error occurred.',
            icon: 'error',
            confirmButtonText: 'รับทราบ'
          });
        }, delay);
      }
    });

  }
</script>

@endsection