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
                  <h4 class="fw-semibold mb-3 text-end">฿{{ number_format($sum, 2) }}</h4>
                </div>

                <div class="d-grid gap-2">
                  @if($discount > 0)
                  <h6 class="fw-semibold mb-3 text-end text-success">ส่วนลด 10% : ฿{{ number_format($discount, 2) }}</h6>
                  @endif
                  <div id="selected-coupon-details" class="text-success text-end"></div>
                  <h4 class="fw-semibold mb-3 text-end" id="total-display">
                    ยอดสุทธิ : ฿{{ number_format($total, 2) }}
                  </h4>
                  <button class="btn btn-primary" type="button" onclick="buy({{ $total }})">ชำระเงิน</button>

                  <button class="btn btn-info" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">เลือกใช้โค้ด</button>
                  <a href="/services" class="btn btn-outline-secondary" type="button">เลือกบริการเพิ่ม</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card overflow-hidden">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">รายละเอียดเพิ่มเติม :</h5>
              <div class="card-text">
                <ul style="list-style-type: disc; padding-left: 20px;">
                  <li>กำหนดเพศ</li>
                  <li>กำหนดคำคอมเมนต์</li>
                </ul>
                <p>เช่น</p>
                <p><strong>เพศชาย</strong></p>
                <ol>
                  <li>ซื้อสินค้าไปดูดีมากว่าเลยครับ</li>
                </ol>
                <p><strong>เพศหญิง</strong></p>
                <ol>
                  <li>บริการดี ใส่ใจลูกค้ามากค่ะ</li>
                </ol>
                <p><strong style="color: red;">หมายเหตุ:</strong> อย่าลืมเปิดช่องเป็นสาธารณะทุกครั้ง<br>
                  ระยะประกัน: 30 วัน นับจากวันชำระบริการ</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">คูปองของฉัน</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @if(count($coupons) > 0)
        @foreach($coupons as $coupon)
        @if($coupon->limit > 0)
        <div class="card selectable-card mb-3" onclick="selectCard(this)" data-coupon='@json($coupon)'>
          <div class="card-body">
            <div class="radio-circle"></div>
            <div>
              <h5 class="card-title mb-1">{{ $coupon->descriptions }}</h5>
              <p class="card-text text-muted">จำนวนสิทธิ์: {{ $coupon->limit }}</p>
            </div>
          </div>
        </div>
        @endif
        @endforeach
        @else
        <p class="text-center">ไม่มีคูปองที่ใช้ได้ในขณะนี้</p>
        @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-primary" id="useCoupon" onclick="useCoupon({{$total}})">ใช้งาน</button>
      </div>
    </div>
  </div>
</div>

<style>
  /* Modern Card Hover and Active Effects */
  .selectable-card {
    cursor: pointer;
    transition: transform 0.2s, box-shadow 0.2s;
    border: 2px solid transparent;
  }

  .selectable-card:hover {
    transform: scale(1.02);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  }

  .selectable-card.active {
    border-color: #0d6efd;
    /* Primary color border for active */
    box-shadow: 0 4px 20px rgba(13, 110, 253, 0.4);
  }

  .selectable-card .card-body {
    display: flex;
    align-items: center;
    gap: 1rem;
  }

  .radio-circle {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 2px solid #6c757d;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.2s, border-color 0.2s;
  }

  .radio-circle.active {
    background-color: #0d6efd;
    border-color: #0d6efd;
  }

  .radio-circle.active::before {
    content: '';
    width: 10px;
    height: 10px;
    background-color: white;
    border-radius: 50%;
  }
</style>

<script>
  const items = @json($items); // Convert PHP $items into a JavaScript object
  const coupons = @json($coupons); // Convert PHP $coupons into a JavaScript object
</script>

<script>
  let selectedCoupon = null; // Global variable to store the selected coupon

  function selectCard(card) {
    // Remove active class from all cards
    document.querySelectorAll('.selectable-card').forEach((item) => {
      item.classList.remove('active');
      item.querySelector('.radio-circle').classList.remove('active');
    });

    // Add active class to the selected card
    card.classList.add('active');
    card.querySelector('.radio-circle').classList.add('active');

    // Retrieve coupon data from the card's data attribute
    selectedCoupon = JSON.parse(card.getAttribute('data-coupon'));
    console.log(selectedCoupon);

  }

  function useCoupon(total) {
    if (!selectedCoupon) {
      alert('กรุณาเลือกคูปองก่อนใช้งาน');
      return;
    }

    // Calculate the discount based on coupon type
    const discount =
      selectedCoupon.unit === 'percent' ?
      (total * (selectedCoupon.amount || 0)) / 100 :
      selectedCoupon.amount || 0;

    const discountedTotal = total - discount;

    // Update coupon details in the UI
    const couponDetails = document.getElementById('selected-coupon-details');
    if (couponDetails) {
      couponDetails.innerHTML = `
      <p class="fw-semibold mb-3 text-end text-success">ใช้คูปอง: ${selectedCoupon.descriptions || 'ไม่มีคูปอง'}</p>
      <p class="fw-semibold mb-3 text-end text-success">ส่วนลด: ฿${discount.toFixed(2)}</p>
      
    `;
    }

    // Update the subtotal display
    const subtotalElement = document.getElementById('total-display');
    if (subtotalElement) {
      subtotalElement.textContent = `ยอดสุทธิ ฿${discountedTotal.toFixed(2)}`;
    }

    // Close the modal
    const modal = document.getElementById('exampleModal');
    const bootstrapModal = bootstrap.Modal.getInstance(modal);
    bootstrapModal.hide();
  }

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
    // Calculate the discount safely
    console.log(total);

    const discount =
      selectedCoupon?.unit === 'percent' ?
      (total * (selectedCoupon.amount || 0)) / 100 :
      selectedCoupon?.amount || 0;

    const discountedTotal = total - discount;

    try {
      await validateComment(items);
      Swal.fire({
        title: 'ยืนยัน',
        text: `ยืนยันการชำระเงินจำนวน ฿${discountedTotal.toFixed(2)}`,
        icon: 'info',
        showCancelButton: true,
        cancelButtonText: 'ยกเลิก',
        confirmButtonText: 'ชำระเงิน'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: '{{ route("payment.buy") }}',
            type: 'POST',
            data: {
              _token: '{{ csrf_token() }}',
              items: items, // Use the JavaScript items object
              total: total,
              coupon: selectedCoupon // Pass selected coupon to the server
            },
            success: function(response) {
              Swal.fire({
                title: 'สำเร็จ!',
                text: response.message,
                icon: 'success',
                confirmButtonText: 'ตกลง'
              }).then(() => {
                window.location.reload();
              });
            },
            error: function(error) {
              Swal.fire({
                title: 'เกิดข้อผิดพลาด',
                text: error.responseJSON.message,
                icon: 'error',
                confirmButtonText: 'ตกลง'
              });
            }
          });
        }
      });
    } catch (error) {
      Swal.fire({
        title: 'กรุณาตรวจสอบ',
        text: error.message,
        icon: 'warning',
        confirmButtonText: 'ตกลง'
      });
    }
  }
</script>

@endsection