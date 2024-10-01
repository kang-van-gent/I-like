@extends('admin')
@section('contents')

<div class="container-fluid">
  <div class="card">
    <div class="card-body p-4">
      <h2 class="text-center text-dark ">ประวัติการสั่งซื้อ</h2>
      <hr class="w-50 m-auto mb-3 fw-bold">
      <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
        <div class="row pt-3 col-md-6">

        </div>
        <div class="col-md-4 pt-3">
          <select id="statusSelect" class="form-select" onchange="applyFilters()">
            <option value="all" {{ $status == 'all' ? 'selected' : '' }}>ทั้งหมด</option>
            <option value="กำลังดำเนินการ" {{ $status == 'กำลังดำเนินการ' ? 'selected' : '' }}>กำลังดำเนินการ</option>
            <option value="เสร็จสิ้น" {{ $status == 'เสร็จสิ้น' ? 'selected' : '' }}>เสร็จสิ้น</option>

          </select>
        </div>

      </div>

      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th>รหัสออเดอร์</th>
              <th style="min-width: 280px; width: 40.3%">ชื่อรายการ</th>
              <th style="min-width: 70px; width: 15%" class="text-center">เวลา</th>
              <th class="text-center" style="min-width: 70px; width: 13%">ค่าบริการ</th>
              <th class="text-center" style="min-width: 70px; width: 13%">รายการย่อย</th>
              <th class="text-center" style="min-width: 70px; width: 13%">สถานะ</th>

            </tr>
          </thead>
          <tbody>

            @if ($orders)
            @foreach ($orders as $order)
            <tr>
              <td><a href="#">{{$order->id}}</a></td>
              <td><a href="#">{{$order->cart[0]['item_name']}}</a></td>
              <td>{{$order->created_at}}</td>
              <td class="text-center">
                {{$order->price}}
              </td>
              <td class="text-center">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="subOrder({{$order->cart}})">
                  {{ count($order->cart) }} รายการ
                </button>
              </td>
              @if ($order->status == 'กำลังดำเนินการ')
              <td class="text-center">
                <i class="ti ti-clock" style="color: #4260f5; font-size: 30px;"></i><br>

                {{$order->status}}
              </td>
              @else
              <td class="text-center align-middle" style="height: 100%;">
                <i class="ti ti-circle-check" style="color: #32c77f; font-size: 34px;"></i> <br>
                {{$order->status}}
              </td>
              @endif

            </tr>
            @endforeach
            @else
            <tr>
              <td class="text-center" colspan="6">ไม่มีรายการออเดอร์</td>
            </tr>

            @endif
          </tbody>
        </table>
        <!-- Pagination links -->
        <div class="col-md-12 mt-4">
          {{ $orders->appends(request()->query())->links('pagination::bootstrap-4') }}
        </div>
      </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">รายการย่อย</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="modalItemsContent">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        </div>
      </div>
    </div>
  </div>



</div>

<script>
  function subOrder(items) {
    const modalContentEl = document.getElementById('modalItemsContent');
    let content = '<ul>';
    items.forEach(item => {
      content += `<li>${item['item_name']} - x${item.amount} - ราคา ${item.price} บาท - จำนวน ${item.quantity} ชิ้น</li><hr></hr`;
    });
    content += '</ul>';
    modalContentEl.innerHTML = content;
  }

  function applyFilters() {
    let status = document.getElementById('statusSelect').value;
    let url = `{{ route('admin.orders') }}?status=${status}`;
    window.location.href = url;
  }
</script>

@endsection