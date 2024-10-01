@extends('admin')
@section('contents')

<div class="container-fluid">
  <div class="row">
    <h2 class="text-center">ตะกร้าสินค้าของคุณ</h2>

    <div class="col-lg-8 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="align-items-center justify-content-between mb-9">
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">รายการสินค้า</h5>
              @if(count($items)>0)
              @foreach($items as $item)
              <div class="row">
                <div class="cols">
                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-between mb-3">
                        <div class="col-8">
                          <h5 class="card-title">{{ $item->name }}</h5>
                        </div>
                        <div class="col-4 text-end">
                          {{ Number::currency($item->price * $item->quantity,'thb')}}
                        </div>
                      </div>
                      <div class="d-grid gap-2 d-md-flex justify-content-md-between mb-3">
                        <h6 class="card-subtitle mb-2 text-muted ">x{{ $item->attributes->amount * $item->quantity}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted mx-2">จำนวน : {{ $item->quantity }} รายการ</h6>
                        <div class="d-flex align-items-center">
                          <button class="btn btn-outline-secondary btn-sm me-2" type="button" onclick="updateQuantity('{{ $item->id }}', -1)">-</button>
                          <button class="btn btn-outline-secondary btn-sm me-2" type="button" onclick="updateQuantity('{{ $item->id }}', 1)">+</button>
                          <a href="{{ route('service.remove',$item->id) }}" class="btn btn-outline-danger btn-sm" type="button">X</a>
                        </div>
                      </div>
                      <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="commentLink{{ $item->id }}" placeholder="ลิ้งก์สำหรับ comment" value="{{$item->attributes->link}}">
                        <label for="commentLink{{ $item->id }}">ลิ้งก์ที่ต้องการใช้บริการ</label>
                      </div>
                      @if(strpos($item->attributes->service, 'like') !== false && $item->attributes->platform == 'facebook')
                      <div class="form-floating">
                        <select class="form-select" aria-label="Default select example" id="comments{{ $item->id }}">
                          <option value='' selected>กรุณาเลือก emoji</option>
                          <option value="ไลก์ 👍🏻">ไลก์ 👍🏻</option>
                          <option value="หัวใจ ❤️">หัวใจ ❤️</option>
                          <option value="ห่วงใย 💕">ห่วงใย 💕</option>
                          <option value="หัวเราะ 😂">หัวเราะ 😂</option>
                          <option value="ว้าว 😯">ว้าว 😯</option>
                          <option value="เสียใจ 🥲">เสียใจ 🥲</option>
                          <option value="โกรธ 😡">โกรธ 😡</option>
                        </select>
                      </div>
                      @endif
                      @if($item->attributes->service == 'comment')
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="comments{{ $item->id }}">{{$item->attributes->comments}}</textarea>
                        <label for="comments{{ $item->id }}">Comments: แนะนำให้ใส่คำหรือข้อความที่ต้องการคอมเม้นตามจำนวนที่ต้องการ</label>
                      </div>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              @else
              <div class="row">
                <div class="cols text-center p-5">
                  <span>
                    <h5 class="card-title">ไม่มีรายการ</h5>
                  </span>
                </div>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="row">
        <div class="col-lg-12">
          <div class="card overflow-hidden">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">รวมทั้งหมด</h5>
              <div class="row align-items-center">
                <div class="cols">
                  <h4 class="fw-semibold mb-3 text-end">฿{{ number_format($total, 2) }}</h4>
                </div>
                <div class="d-grid gap-2">
                  @if($discount > 0)
                  <h6 class="fw-semibold mb-3 text-end text-success">ส่วนลด 10% : ฿{{ number_format($discount, 2) }}</h6>
                  <h4 class="fw-semibold mb-3 text-end">ยอดสุทธิ : ฿{{ number_format($subtotal, 2) }}</h4>
                  <button class="btn btn-primary" type="button" onclick="buy({{ $subtotal }})">ชำระเงิน</button>
                  @else
                  <button class="btn btn-primary" type="button" onclick="buy({{ $total }})">ชำระเงิน</button>
                  @endif
                  <a href="/services" class="btn btn-outline-secondary" type="button">เลือกบริการเพิ่ม</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
</script>

<script>
  function updateQuantity(itemId, change) {
    $.ajax({
      url: '{{ route("service.updateQuantity") }}', // Update this to the correct route
      method: 'POST',
      data: {
        _token: '{{ csrf_token() }}',
        itemId: itemId,
        change: change
      },
      success: function(response) {
        if (response.status === 'success') {
          location.reload(); // Reload the page to update the quantity
        } else {
          alert('Error updating quantity');
        }
      },
      error: function(error) {
        console.error('Error:', error);
        alert('Error updating quantity');
      }
    });
  }
  async function validateComment(item) {
    return new Promise((resolve, reject) => {
      try {
        for (const key in item) {
          if (item.hasOwnProperty(key)) {
            const data = item[key];
            let link = document.getElementById('commentLink' + key);
            if (data.attributes.service === 'comment') {

              let comments = document.getElementById('comments' + key);

              if (link && !link.value) {
                throw new Error('กรุณากรอกลิ้งค์ที่ต้องการ comment ให้ครบทุกรายการ');
              } else {
                data.attributes.link = link ? link.value : '';
              }

              if (comments && !comments.value) {
                throw new Error('กรุณากรอกข้อความที่ต้องการ comment ให้ครบทุกรายการ');
              } else {
                data.attributes.comments = comments ? comments.value : '';
              }
            } else if ((data.attributes.service, 'like') && data.attributes.platform == 'facebook') {
              let comments = document.getElementById('comments' + key);

              if (link && !link.value) {
                throw new Error('กรุณากรอกลิ้งค์ที่ต้องการใช้บริการให้ครบทุกรายการ');
              } else {
                data.attributes.link = link ? link.value : '';
              }

              if (comments && !comments.value) {
                throw new Error('กรุณาเลือก emoji ที่ต้องการ');
              } else {
                data.attributes.comments = comments ? comments.value : '';
              }

            } else {
              if (link && !link.value) {
                throw new Error('กรุณากรอกลิ้งค์ที่ต้องการใช้บริการให้ครบทุกรายการ');
              } else {
                data.attributes.link = link ? link.value : '';
              }
            }
          }

        }

        resolve(item); // Resolve the promise if everything is fine
      } catch (error) {
        reject(error); // Reject the promise with an error if validation fails
      }
    });
  }

  async function buy(total) {
    var items = '<?php echo $items; ?>'; // Ensure this is outputting correctly in JSON format.
    var item = JSON.parse(items);

    try {
      await validateComment(item);

      Swal.fire({
        title: 'ยืนยัน',
        text: `ยืนยันการชำระเงินจำนวน ${total} บาท`,
        icon: 'info',
        showCancelButton: true,
        cancelButtonText: 'ยกเลิก',
        confirmButtonText: 'ชำระเงิน'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: 'กำลังดำเนินการ...',
            text: 'โปรดรอสักครู่',
            allowOutsideClick: false,
            showConfirmButton: false,
            willOpen: () => {
              Swal.showLoading()
            }
          });

          $.ajax({
            url: '{{ route("payment.buy") }}',
            type: 'POST',
            data: {
              _token: '{{ csrf_token() }}',
              items: JSON.stringify(item),
              subtotal: total
            },
            success: function(response) {
              Swal.close(); // Close the loading spinner
              if (response.status == 'success') {
                Swal.fire({
                  title: 'สำเร็จ!',
                  text: response.message,
                  icon: 'success',
                  confirmButtonText: 'รับทราบ'
                }).then((response) => {
                  if (response.isConfirmed) {
                    window.location.reload();
                  }
                });
              } else {
                Swal.fire({
                  title: 'ล้มเหลว!',
                  text: 'เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง',
                  icon: 'error',
                  confirmButtonText: 'OK'
                });
              }
            },
            error: function(error) {
              Swal.close(); // Close the loading spinner
              Swal.fire({
                title: 'ล้มเหลว!',
                text: error.responseJSON.message,
                icon: 'error',
                confirmButtonText: 'รับทราบ'
              });
            }
          });
        }
      });
    } catch (error) {
      Swal.fire({
        title: 'กรุณาตรวจสอบ!',
        text: error.message,
        icon: 'warning',
        confirmButtonText: 'รับทราบ'
      });
    }
  }
</script>

@endsection