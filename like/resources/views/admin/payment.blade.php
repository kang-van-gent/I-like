@extends('admin')
@section('contents')

<div class="container-fluid ">
    <div class="card col-md-12">
        <div class="row">
            <div class="col-md-6 p-4">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-9 fw-semibold">โบนัสเตมเงินพิเศษ 5% Extra!</h5>
                        <div class="row">
                            <div class="col-12 ">
                                <div class="row mt-3">
                                    <p class="card-title mb-9 ">สแกนด้วย QR Code ผ่านแอพพิเคชั่นธนาคาร หรือจะ Truemoney wallet เงินเข้าทันทีไม่ต้องรอ !</p>
                                    <p class="card-title mb-9 ">ขั้นตอนการสแกน QR Code หรือ เติมผ่าน truemoney wallet เพื่อเติมเงิน ดังนี้</p>
                                    <p class="card-title mb-9 ">เติมขั้นต่ำ 10 บาท สูงสุดไม่เกิน 30,000 บาท ต่อครั้ง</p>
                                    <p class="card-title mb-9 ">👉 1 - เลือกจำนวนเงินที่ต้องการเติม</p>
                                    <p class="card-title mb-9 ">👉 2 - กดปุ่ม 'เติมเงิน'</p>
                                    <p class="card-title mb-9 ">👉 3 - รอสักครู่ระบบจะแสดง QR Code หรือ truemoney wallet</p>
                                    <p class="card-title mb-9 ">👉 4 - เข้าแอพพิเคชั่นธนาคาร และเลือกสแกน QR Code แล้วรอสักครู่ หรือกรอกเบอร์โทรสำหรับ truemoney เพื่อรับ OTP และกดยืนยัน</p>
                                    <p class="card-title mb-9 ">เติมเงิน 200 บาทขึ้นไป รับโบนัสเพิ่มทันที 5% ! </p>
                                    <!-- <p class="card-title mb-9 ">หากมีปัญหาการเติมเงิน กรุณาเปิดตั๋ว ด้วยหัวข้อการชำระเงิน QR Code</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-4">
                <div class="card h-100">
                    <form id="paymentForm">
                        @csrf
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <label for="channel" class="form-label">ช่องทาง</label>
                                <select class="form-select" id="channel" name="channel" aria-label="Default select example">
                                    <option value="truemoney">Truemoney Wallet</option>
                                    <option value="promptpay">PromptPay</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="amount" class="form-label">จำนวนเงิน (บาท)</label>
                                <input type="number" class="form-control" id="amount" name="amount">
                            </div>
                            <div class="d-grid gap-2 mb-3">
                                <button class="btn btn-primary" type="button" id="topUpButton"><i class="ti ti-wallet"></i> เติมเงิน</button>
                            </div>
                            <p>มี 2 ช่องทางให้เติมเงิน ทรูวอเลทและ QR CODE</p>
                            <p>หมายเหตุ</p>
                            <p>*** กิจกรรมที่ฉ้อโกงเช่นการใช้บัตรเครดิตที่ไม่ได้รับอนุญาตหรือถูกขโมย การให้บุคคลที่สามโอนเงินหรือเติมเงินแทน โดยเจตนาหรือจงใจทำให้บุคคลที่สามนั้นเข้าใจผิดคิดว่าเป็นบัญชีของตนเอง จะนำไปสู่การระงับการใช้งานบัญชีของคุณ และทาง gainlike-service.com จะดำเนินคดีตามกฎหมายให้ถึงที่สุด โดยไม่มีข้อยกเว้น (ข้อกฎหมายทั้งหมดนี้ถูกบังคับใช้ตาม นโยบายการให้บริการของเรา ข้อที่ 11. การคืนเงิน)</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="card">


                <div class="card-body p-4">
                    <h4>ประวัติการเติมเงินทั้งหมด</h4>

                    <div class="d-sm-flex d-block align-items-center justify-content-end mb-3">
                        <div class="row pt-3 col-md-6">
                            <select id="statusSelect" class="form-select" onchange="applyFilters()">
                                <option value="all" {{ $status == 'all' ? 'selected' : '' }}>ทั้งหมด</option>
                                <option value="SUCCESS" {{ $status == 'SUCCESS' ? 'selected' : '' }}>สำเร็จ</option>
                                <option value="FAILED" {{ $status == 'FAILED' ? 'selected' : '' }}>ล้มเหลว</option>

                            </select>
                        </div>


                    </div>

                    <div class="table-responsive">

                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th style="min-width: 70px; width: 15%" class="text-center">รหัสรายการ</th>

                                    <th style="min-width: 280px; width: 30.3%">ช่องทาง</th>
                                    <th style="min-width: 70px; width: 15%" class="text-center">เวลา</th>
                                    <th class="text-center" style="min-width: 70px; width: 13%">จำนวน</th>
                                    <th class="text-center" style="min-width: 70px; width: 13%">สถานะ</th>

                                </tr>
                            </thead>
                            <tbody>

                                @if ($histories)
                                @foreach ($histories as $history)
                                <tr>
                                    <td class="text-center"><a href="#">{{$history->id}}</a></td>
                                    <td>{{$history->type}}</td>
                                    <td>{{$history->created_at}}</td>
                                    <td class="text-center">
                                        {{$history->amount}} บาท
                                    </td>
                                    @if ($history->status == 'paid')'
                                    <td class="text-center">
                                        <i class="ti ti-circle-check" style="color: #32c77f; font-size: 34px;"></i> <br>

                                        {{$history->status}}
                                    </td>
                                    @else
                                    <td class="text-center">
                                        <i class="ti ti-circle-x" style="color: #f95858; font-size: 34px;"></i> <br>

                                        {{$history->status}}
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
                            {{ $histories->appends(request()->query())->links('pagination::bootstrap-4') }}
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


    </div>
</div>

<!-- Include jQuery and SweetAlert -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('status') && session('message'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var status = "{{ session('status') }}";
        var message = "{{ session('message') }}";

        if (status === 'success') {
            Swal.fire({
                title: 'สำเร็จ!',
                text: message,
                icon: 'success',
                confirmButtonText: 'ตกลง'
            });
        } else if (status === 'failed') {
            Swal.fire({
                title: 'ล้มเหลว!',
                text: message,
                icon: 'error',
                confirmButtonText: 'ตกลง'
            });
        }
    });
</script>
@endif
<script>
    function applyFilters() {
        let status = document.getElementById('statusSelect').value;
        let url = `{{ route('admin.payment') }}?status=${status}`;
        window.location.href = url;
    }
    document.getElementById('topUpButton').addEventListener('click', function() {

        var button = this;

        button.disabled = true;
        button.innerHTML = `
            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
            <span role="status">Loading...</span>
        `;

        var amount = $('#amount').val();
        var channel = $('#channel').val();

        $.ajax({
            url: '{{ route("payment.create") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                amount: amount,
                channel: channel
            },
            success: function(response) {
                console.log(response); // Log the response to the console for debugging
                if (response.data) {
                    window.location.href = response.data['pay_content'];
                } else {
                    Swal.fire({
                        title: 'ล้มเหลว!',
                        text: 'เกิดข้อผิดพลาดกรุณาลองใหม่อีกครั้ง',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                    console.log('Unknown error response:', response); // Log the unknown error response
                }
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    title: xhr.responseJSON.title,
                    text: xhr.responseJSON.error,
                    icon: 'error',
                    confirmButtonText: 'OK'
                }).then(result => {
                    if (result.isConfirmed) {
                        button.disabled = false;
                        button.innerHTML = `เติมเงิน`;
                    }
                });
                console.log('XHR response:', xhr); // Log the XHR response for debugging
            }
        });
    });
</script>

@endsection