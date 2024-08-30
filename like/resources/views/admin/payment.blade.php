@extends('admin')
@section('contents')

<div class="container-fluid ">
    <div class="card col-md-12">
        <div class="row">
            <div class="col-md-6 p-4">
                <div class="card h-100">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-9 fw-semibold">สแกน QR Code ทุกธนาคาร (โบนัส 5%) -- หมดอายุ</h5>
                        <div class="row">
                            <div class="col-12 ">
                                <div class="row mt-3">
                                    <p class="card-title mb-9 ">สแกนด้วย QR Code ผ่านแอพพิเคชั่นธนาคาร เงินเข้าทันทีไม่ต้องรอ !</p>
                                    <p class="card-title mb-9 ">ขั้นตอนการสแกน QR Code เพื่อเติมเงิน ดังนี้</p>
                                    <p class="card-title mb-9 ">เติมขั้นต่ำ 10 บาท สูงสุดไม่เกิน 30,000 บาท ต่อครั้ง</p>
                                    <p class="card-title mb-9 ">👉 1 - เลือกจำนวนเงินที่ต้องการเติม</p>
                                    <p class="card-title mb-9 ">👉 2 - กดปุ่ม 'เติมเงิน'</p>
                                    <p class="card-title mb-9 ">👉 3 - รอสักครู่ระบบจะแสดง QR Code</p>
                                    <p class="card-title mb-9 ">👉 4 - เข้าแอพพิเคชั่นธนาคาร และเลือกสแกน QR Code</p>
                                    <p class="card-title mb-9 ">เติมเงิน 500 บาทขึ้นไป รับโบนัสเพิ่มทันที 5% ! </p>
                                    <p class="card-title mb-9 ">หากมีปัญหาการเติมเงิน กรุณาเปิดตั๋ว ด้วยหัวข้อการชำระเงิน QR Code</p>
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
                                <button class="btn btn-primary" type="button" id="topUpButton">เติมเงิน</button>
                            </div>
                            <p>มี 2 ช่องทางให้เติมเงิน ทรูวอเลทและธนาคาร เติมผ่านธนาคาร กดคำว่าทรูมันนี่วอเลท :</p>
                            <p>หมายเหตุ</p>
                            <p>*** กิจกรรมที่ฉ้อโกงเช่นการใช้บัตรเครดิตที่ไม่ได้รับอนุญาตหรือถูกขโมย การให้บุคคลที่สามโอนเงินหรือเติมเงินแทน โดยเจตนาหรือจงใจทำให้บุคคลที่สามนั้นเข้าใจผิดคิดว่าเป็นบัญชีของตนเอง จะนำไปสู่การระงับการใช้งานบัญชีของคุณ และทาง arsd-social.com จะดำเนินคดีตามกฎหมายให้ถึงที่สุด โดยไม่มีข้อยกเว้น (ข้อกฎหมายทั้งหมดนี้ถูกบังคับใช้ตาม นโยบายการให้บริการของเรา ข้อที่ 11. การคืนเงิน)</p>
                        </div>
                    </form>
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