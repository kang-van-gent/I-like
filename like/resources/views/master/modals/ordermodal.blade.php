<!-- Modal -->
<div class="modal fade " id="orderModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="myModalLabel">เพิ่มบทความใหม่</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">


                <article class="accent-box p-4 mt-4">
                    <p class="accent-box-text">บริการ</p>
                    <div class="form-group">
                        <label for="input-styles1">ชื่อบริการ <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" id="input-styles1" type="text" placeholder="ชื่อบริการ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-styles1">ราคา <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" id="input-styles1" type="number" placeholder="ราคา">
                        </div>
                    </div>
                </article>
                <article class="accent-box p-4 mt-4">
                    <p class="accent-box-text">ข้อมูลลูกค้า</p>
                    <div class="form-group">
                        <label for="input-styles1">ชื่อลุกค้า <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" id="input-styles1" type="text" placeholder="ชื่อบริการ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-styles1">อีเมล <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" id="input-styles1" type="text" placeholder="อีเมล">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-styles1">สถานะ <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" id="input-styles1" type="text" placeholder="จ่ายเงินแล้ว / ยังไม่จ่ายเงิน">
                        </div>
                    </div>
                </article>
            </div>
            <div class="modal-footer">
                <div class="d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">ยกเลิก</button>
                    <button class="btn btn-primary m-0" type="button">บันทึก</button>
                </div>
            </div>

        </div>
    </div>
</div>