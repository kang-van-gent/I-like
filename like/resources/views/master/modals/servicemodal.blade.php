<!-- Modal -->
<div class="modal fade " id="serviceModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="serviceModalLabel">เพิ่มบริการใหม่</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{url('/admin/create-product')}}">@csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="input-styles1">ชื่อบริการ <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" name="details" id="input-styles1" type="text" placeholder="ชื่อบริการ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-styles1">ประเภท</label>
                        <div class="position-relative">
                            <input class="form-control" name="type" id="input-styles1" type="text" placeholder="ประเภท">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-styles1">ราคา <span class="text-danger">*</span></label>
                        <div class="position-relative">
                            <input class="form-control" name="price" id="input-styles1" type="number" placeholder="ราคา">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="d-grid gap-2 d-md-flex justify-content-end">
                        <button class="btn btn-danger" type="button" data-bs-dismiss="modal">ยกเลิก</button>
                        <button class="btn btn-primary m-0" type="submit">บันทึก</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>